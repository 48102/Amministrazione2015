<!DOCTYPE html>
<html>
<body>

		
	<div id="header" >


		<img src="img/logo.png" class="logo"/></a>

		<div id="logIn"	>

			<?php if (isset($_SESSION['logged'])): ?>

		       <ul>     
			   <li><a href='logout.php'><span>Logout</span></a></li>
		       </ul>
	   
	        <?php else: ?>

		       <ul>
	      	   <li><a href='login.php'><span>Login</span></a></li>     
               </ul>

			<?php endif; ?>
		</div>
	</div>


     <div id="contenitore-menu">
    
        <div id="menu">	
		
	       <ul id="navigation" >
				
		    <li><a href="index.php">Cosa Offriamo</a></li>
			<li><a href="dovesiamo.php">Dove Siamo</a></li>
			<li><a href="glieventi.php">Gli Eventi</a></li>
			<li><a href="tariffe.php">Tariffe</a></li>
			<li><a href="contattaci.php">Contattaci</a></li>
			</ul>
			
			</div>
	  	</div>
	  </div>


</body>
</html>