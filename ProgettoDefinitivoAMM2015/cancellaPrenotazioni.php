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


			<p> Cliccando su Cancella Prenotazioni è possibile cancellare tutte le prenotazioni effettuate </p>

				
	        		<input id="cancella" type="submit" name="cancella" value="Cancella Prenotazioni"/>  
	        	


	        <div id="result"> </div>	
			</div>

		</div>

	</div>





 <script type="text/javascript">
   $(document).ready
    (
        function()
        {
            $('input[id="cancella"]').click
            (
                function()
                {
                    $.ajax
                    (
                        {
                            type: 'POST',
                            url:  'elimina.php',
                            data: {
                                "delete": true
                                },
                            
                            success: function(data) { 
                                 
                            	$('#result').html(data);
                            	$('#result').html("Prenotazioni  cancellate correttamente"); 
                            },
                            error:  function(data) { console.debug('Errore nella chiamata eliminaPrenotazioni');} 
                        }

                    );
                }
            );
        }
    );
</script>
 <?include('inc/footer.php');?>
</body>