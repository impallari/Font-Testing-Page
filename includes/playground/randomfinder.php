<div>

	<form method="post" action="includes/playground/randomfinder-ajax.php" id="phraseform">

		<?php
		// Defino un tamaño por defecto
		if ( !isset($_POST['randomfinder_number']) && empty($_POST['randomfinder_number']) ) $_POST['randomfinder_number'] = '50';
		?> 
		
		<table>
			<tr>
				<td>
					<p class="sizelabel">Size:</p>
					<input type="text" name="randomfinder_number" id="randomfinder_number" size="3" value="<?php if (isset($_POST['randomfinder_number']) && !empty($_POST['randomfinder_number']) ) echo $_POST['randomfinder_number']; ?>" />				
				</td>
				<td>
					<p class="sizelabel">&nbsp;</p>
					<button type="submit">Run it!</button>
				</td>
			</tr>
		</table>
		
	</form>
	
	<!-- ajax Results -->
	<div id="randomfinder_results" style="padding: 20px 80px 20px 0px;">
		<p>Results Here</p>
	</div>
				
</div>

<!-- Javascript for the Phrase Finder Tool -->
<script>
    $("#phraseform").submit(function(event) {

		event.preventDefault();
		
		$.ajax({
			url: "includes/playground/randomfinder-ajax.php",			
			data: {
				randomfinder_number: $( "#randomfinder_number" ).val(),
			},
			type: "POST",
			dataType : "html",
			success: function( msg ) {
				$( "#randomfinder_results" ).html( msg );
			},
			error: function( xhr, status ) {
				alert( "Sorry. Try again, there was a problem!" );
			},
		});
      
    }); 
</script>
<!-- End Javascript for the Phrase Finder Tool -->
