<!DOCTYPE html>
<html>


<? 
    session_start();
    include ('inc/head.php'); 
    include ('inc/top_menu.php');
   include ('sql/settings.php');


        $db = mysql_connect(settings::$DB_SERVER,settings::$DB_USER , settings::$DB_PASS) or die ("impossibile connettersi al server");

        mysql_select_db(settings::$DB_NAME, $db) or die ("impossibile connettersi al database");

		$query="SELECT * FROM prenotazioni";
		$risultati=mysql_query($query);
 
 		$num=mysql_numrows($risultati);

 		
 
		mysql_close();
 ?>

 
<body>
 	<div id="contenitore">
 	

 	<? include ('inc/lateral_menu.php'); ?> 



 	<?if( $num == 0 ):?>
 		<div id="contenuti">		
			
			<div class="box">
				<p> <img src="img/stop.png" </a><strong>Al momento non sono state effettuate prenotazioni</strong> </p>
			</div>
		</div>
	<?endif;?>

 	<?php
     $i=0;
     while ($i < $num) {
         $nome=mysql_result($risultati,$i,"Nome");
         $cognome=mysql_result($risultati,$i,"Cognome");
         $email=mysql_result($risultati,$i,"email");
         $telefono=mysql_result($risultati,$i,"telefono");
         $dataArrivo=mysql_result($risultati,$i,"dataArrivo");
         $dataPartenza=mysql_result($risultati,$i,"dataPartenza");
         $numOspiti=mysql_result($risultati,$i,"numOspiti");
         $doppia=mysql_result($risultati,$i,"doppia");
         $tripla=mysql_result($risultati,$i,"tripla");
        
 	?>
 

  			<div id="contenuti">		
			
			<div class="box">
				
				<h1> Prenotazione n° <? echo $i+1 ?> </h1>

 	<div id="prenotazioni">
 	<table border="0" cellspacing="5" cellpadding="20">
    <tr>
  	 <th><font face="Arial, Helvetica, sans-serif">Nome</font></th>
     <td><font face="Arial, Helvetica, sans-serif"><?echo  $nome?></font></td>
    </tr>
    <tr>
     <th><font face="Arial, Helvetica, sans-serif">Cognome</font></th>
     <td><font face="Arial, Helvetica, sans-serif"><?echo  $cognome?></font></td>
    </tr>
    <tr>
     <th><font face="Arial, Helvetica, sans-serif">E-mail</font></th>
     <td><font face="Arial, Helvetica, sans-serif"><?echo  $email?></font></td>
    </tr>
    <tr>
     <th><font face="Arial, Helvetica, sans-serif">Telefono</font></th>
     <td><font face="Arial, Helvetica, sans-serif"><?echo  $telefono?></font></td>
    </tr>
    <tr>
     <th><font face="Arial, Helvetica, sans-serif">Data Arrivo (aaaa-mm-gg)</font></th>
     <td><font face="Arial, Helvetica, sans-serif"><?echo  $dataArrivo?></font></td>
    </tr>
    <tr>
     <th><font face="Arial, Helvetica, sans-serif">Data Partenza (aaaa-mm-gg)</font></th>
     <td><font face="Arial, Helvetica, sans-serif"><?echo  $dataPartenza?></font></td>
    </tr>
    <tr>
     <th><font face="Arial, Helvetica, sans-serif">Numero Ospiti</font></th>
     <td><font face="Arial, Helvetica, sans-serif"><?echo  $numOspiti?></font></td>
    </tr>
    <tr>
     <th><font face="Arial, Helvetica, sans-serif">Stanza Doppia</font></th>
     <td><font face="Arial, Helvetica, sans-serif"><?echo  $doppia?></font></td>
    </tr>
    <tr>
     <th><font face="Arial, Helvetica, sans-serif">Stanza Tripla</font></th>
     <td><font face="Arial, Helvetica, sans-serif"><?echo  $tripla?></font></td>
  	</tr>
	</table>
	</div>
	</div>
		<?php $i++; }?> 
		
</div>
	</div>
</div>
<? include('inc/footer.php');?>
</body>
</html>
