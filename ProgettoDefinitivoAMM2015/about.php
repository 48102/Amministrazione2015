<!DOCTYPE html>
<html>
	<? 
		 session_start(); 
		include ('inc/head.php'); 
		include ('inc/top_menu.php');

	?>

	<body>
	
		
		<div id="contenitore">
		<? include ('inc/lateral_menu.php'); ?>
			
			
			<div id="contenuti">
			
			<div class="box">
			
        	<h1>Informazioni sul progetto</h1>
        	<p>
		Il progetto permette la prenotazione di una o piu' stanze presso l'Hotel Plaza 

Sono presenti due ruoli: utente e amministratore.

L'utente è in grado di prenotare una o piu' stanze e visualizzare le proprie prenotazioni,

l'amministratore è in grado di visualizzare le prenotazioni effettuate  secondo tre criteri di ricerca:

Nome, Cognome, Data di Arrivo (aaaa-mm-gg).

E' possibile inoltre cancellare tutte le prenotazioni effettuate.

Requisiti soddisfatti: 

Utilizzo di HTML e CSS

Utilizzo di PHP e MySQL.

Caricamento ajax dei risultati della ricerca delle prenotazioni(ruolo amministratore).

Transazione: la funzione eliminaPrenotazioni cancella tutte le prenotazioni dal database

Credenziali di autenticazione e link alla homepage

		</p>

			</div>
			</div>
		</div>
		<? include('inc/footer.php');?>
	</body>

</html>
