<?
	include ('inc/top_menu.php');
include ('sql/settings.php');
?>
<?
	 if (isset($_POST['delete'])) 
        eliminaPrenotazioni();
    /*
     * Funzione che cancella tutte le prenotazioni effettuate 
     */
	function eliminaPrenotazioni(){
		$mysqli = new mysqli(settings::$DB_SERVER, settings::$DB_USER, settings::$DB_PASS, settings::$DB_NAME);

		/*
		 * Inizio la transazione
		 */
		$mysqli->autocommit(false);	

		if(!$mysqli->query("DELETE FROM prenotazioni"))
			$mysqli->rollback();
	
			
		$mysqli->commit();
		$mysqli->autocommit(true); 
		/*
		 * Fine transazione
		 */
		$mysqli->close();
	}
?>
