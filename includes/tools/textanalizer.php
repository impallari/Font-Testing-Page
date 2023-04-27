<div>

	<form method="post" action="includes/tools/textanalizer-ajax.php" id="analizerform">

		<?php
		// Defino un tamaño por defecto
		if ( !isset($_POST['analizerone']) && empty($_POST['analizerone']) ) $_POST['analizerone'] = 'Your Text Here';
		if ( !isset($_POST['analizertwo']) && empty($_POST['analizertwo']) ) $_POST['analizertwo'] = 'Antoher Text Here';
		?> 
		
		<table>
			<tr>
				<td>
					<p class="sizelabel">Text 1:</p>
					<textarea rows="20" style="width: 500px;" id="analizerone"><?php if (isset($_POST['analizerone']) && !empty($_POST['analizerone']) ) echo $_POST['analizerone']; ?></textarea>	  						
				</td>
				<td>
					<p class="sizelabel">Text 2:</p>
					<textarea rows="20" style="width: 500px;" id="analizertwo"><?php if (isset($_POST['analizertwo']) && !empty($_POST['analizertwo']) ) echo $_POST['analizertwo']; ?></textarea>	  						
				</td>
				<td>
					<p class="sizelabel">&nbsp;</p>
					<button type="submit">Analize it!</button>
				</td>
			</tr>
		</table>
		
	</form>
	
	<!-- ajax Results -->
	<div id="analizerresults" style="padding: 20px 80px 20px 0px;">
		<p>Results Here</p>
	</div>
				
</div>

<!-- Javascript for the Phrase Finder Tool -->
<script>
    $("#analizerform").submit(function(event) {

		event.preventDefault();
		
		$.ajax({
			url: "includes/tools/textanalizer-ajax.php",			
			data: {
				analizerone: $( "#analizerone" ).val(),
				analizertwo: $( "#analizertwo" ).val(),
			},
			type: "POST",
			dataType : "html",
			success: function( msg ) {
				$( "#analizerresults" ).html( msg );
			},
			error: function( xhr, status ) {
				alert( "Sorry. Try again, there was a problem!" );
			},
		});
      
    }); 
</script>
<!-- End Javascript for the Phrase Finder Tool -->
