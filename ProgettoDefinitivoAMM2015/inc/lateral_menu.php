
 <div id="menu-sx">
		<ul>
        <?php if(isset($_SESSION['logged']) == false): ?>

            <li><strong>Benvenuto all'Hotel Plaza</strong> </li>


        <?php endif;?>


        <?php if(isset($_SESSION['logged'])): ?>

   

	         <li><strong>Bentornato:</br></strong> <?=$_SESSION['username'];?><br>

	         <strong>Grado:</br></strong> <?=$_SESSION['livello'];?></li>


	        
                <?php if($_SESSION['livello'] == "admin"): ?>

                    <li><a href="cercaPrenotazioni.php"><strong>Cerca Prenotazioni</strong></a></li> 
                    <li><a href="cancellaPrenotazioni.php"><strong>Cancella Prenotazioni</strong></a></li> 

        <?php else: ?>

                <li><a href="prenota.php"><strong>Prenota</strong></a></li>
                <li><a href="visualizzaPrenotazioni.php"><strong>Le mie Prenotazioni</strong></a></li>
               
        <?php endif;?>
        <?php endif;?>
		</ul>
 </div>


 
