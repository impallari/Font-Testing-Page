<div>
	
	<form method="post" action="includes/tools/conections-ajax.php" id="testconnections">

		<?php
		// Defino un tamaño por defecto
		if ( !isset($_POST['connectionglyphs']) && empty($_POST['connectionglyphs']) ) $_POST['connectionglyphs'] = 'abcdef';
		if ( !isset($_POST['connectiontamanio']) && empty($_POST['connectiontamanio']) ) $_POST['connectiontamanio'] = 30;
		?> 
		
		<table>
			<tr>
				<td>
					<p class="sizelabel">Glyphs:</p>
					<input type="text" name="connectionglyphs" id="connectionglyphs" size="50" value="<?php if (isset($_POST['connectionglyphs']) && !empty($_POST['connectionglyphs']) ) echo $_POST['connectionglyphs']; ?>" />
				</td>
				<td>
					<p class="sizelabel">Size:</p>
					<input type="text" name="connectiontamanio" id="connectiontamanio" size="3" value="<?php if (isset($_POST['connectiontamanio']) && !empty($_POST['connectiontamanio']) ) echo $_POST['connectiontamanio']; ?>" />				
				</td>
				<td>
					<p class="sizelabel">&nbsp;</p>
					<button type="submit">Test Connections</button>
				</td>
			</tr>
		</table>
		
	</form>
	
	<p>&nbsp;</p>

	<div id="connectionresults">
		<p>Your Connection Test will be displayed here. Use it to test proper connections in Connected Script fonts.</p>
	</div>

</div>


<!-- Javascript for the Grid Generator Tool -->
<script>
    $("#testconnections").submit(function(event) {

		event.preventDefault();
		
		$.ajax({
			url: "includes/tools/connections-ajax.php",			
			data: {
				connectionglyphs: $( "#connectionglyphs" ).val(),
				connectiontamanio: $( "#connectiontamanio" ).val(),
			},
			type: "POST",
			dataType : "html",
			success: function( msg ) {
				$( "#connectionresults" ).html( msg );
			},
			error: function( xhr, status ) {
				alert( "Sorry. Try again, there was a problem!" );
			},
		});
      
    }); 
</script>
<!-- End Javascript for the Grid Generator Tool -->	
