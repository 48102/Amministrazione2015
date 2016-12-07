<!DOCTYPE html>
<html>
<? 
    session_start();
    include ('inc/head.php'); 
    include ('inc/top_menu.php');
    include ('sql/settings.php');


?>



   <?  if(isset($_POST['prenota'])):

        $errore = true;


        $db = mysql_connect(settings::$DB_SERVER,settings::$DB_USER , settings::$DB_PASS) or die ("impossibile connettersi al server");

       mysql_select_db(settings::$DB_NAME, $db) or die ("impossibile connettersi al database");

        /*memorizzo i dati inseriti dall utente*/
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        $email= $_POST['email'];
        $telefono = $_POST['telefono'];
        $arrivo = $_POST['arrivo'];
        $partenza = $_POST['partenza'];
        $numOspiti = $_POST['numOspiti'];
        $doppia= $_POST['doppia'];
        $tripla=$_POST['tripla'];

    ?>
        
        <?php if(trim($nome) == '' || trim($cognome) == ''|| trim($email) == ''|| trim($telefono) == ''|| trim($arrivo) == ''||trim($partenza) == ''|| trim($numOspiti) == ''|| trim($doppia) == ''|| trim($tripla) == ''): ?> 

            <div class="messaggi"><img src="img/stop.png" </a><strong>Errore, devi compilare tutti i campi</strong>  </div>

            <?php  $errore = false; ?>

        <?php endif;?> 

      
        <?if($errore):?>
        
        <?
            $query = "INSERT INTO prenotazioni (nome, cognome, email, telefono, dataArrivo, dataPartenza, numOspiti, doppia, tripla)
            VALUES ('$nome','$cognome','$email','$telefono','$arrivo','$partenza','$numOspiti','$doppia','$tripla')"; 

            $result = mysql_query($query);  

        ?>
          
        <?if($result):?>

            <div class="messaggi"><img src="img/spunta-blu.png" </a><strong>Inserimento avvenuto correttamente</strong></div>;
        
        <? else: ?>
            
            <div class="messaggi"><img src="img/stop.png" </a><strong>Inserimento non eseguito <?=mysql_error();?></strong><br> </div>;
        <? endif;?>
        
        <? endif;?>

       <?  mysql_close();/*chiudo la connessione*/?>

       
    <?endif;?>

 
<body>


	  <div id="contenitore">
        <?  include ('inc/lateral_menu.php');?>

        <div id="contenuti">
        <div class="box">
        
            <h3>Prenotazione</h3>


            <form action="prenota.php" method="post" id="prenota">

             <table>
                <tr>
                    <td><label>Nome <span class="required">*</span></label></td>
                    <td><input type="text" name="nome" id="nome" /></td>
                </tr>

                <tr>
                    <td><label>Cognome <span class="required">*</span></label></td>
                    <td><input type="text" name="cognome" id="cognome" /></td>
                </tr>

                <tr>
                    <td><label>Email <span class="required">*</span></label></td>
                    <td><input type="text" name="email" id="email" /></td>
                </tr>

                <tr>
                    <td><label>Telefono <span class="required">*</span></label></td>
                    <td><input type="text" name="telefono" id="telefono" /></td>
                </tr>

                <tr>
                    <td><label>Data Arrivo(aaaa-mm-gg)<span class="required">*</span></label></td>
                    <td><input type="date" name="arrivo" id="arrivo" /></td>
                </tr>

                <tr>
                    <td><label>Data Partenza(aaaa-mm-gg)<span class="required">*</span></label></td>
                    <td><input type="date" name="partenza" id="partenza" /></td>
                </tr>


                <tr>
                    <td><label>Numero Ospiti<span class="required">*</span></label></td>
                    <td><input type="text" name="numOspiti" id="numOspiti" /></td>
                </tr>

                <tr>
                    <td><label>Doppia<span class="required">*</span></label></td>
                    <td><input type="number" name="doppia" id="doppia" /></td>
                </tr>

                <tr>
                    <td><label>Tripla<span class="required">*</span></label></td>
                    <td><input type="number" name="tripla" id="tripla" /></td>
                </tr>

                <tr>
                    <td><input type="submit" name="prenota" value="prenota" /></td>
                    <td><img src="spinner.gif" id="loading" style="display:none" /></td>
                </tr>

            </table>

             <img src="img/attenzione.gif"/> Avviso: I campi con l'asterisco sono obbligatori.
            </form>
    </div>
</div>

</div>
<? include('inc/footer.php');?>

</body>
</html>
