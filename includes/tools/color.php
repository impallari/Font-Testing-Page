<div>
	
	<form method="post" action="includes/tools/color-ajax.php" id="gridgeneratorform">

		<?php
		// Defino un tamaño por defecto
		if ( !isset($_POST['gridglyphs']) && empty($_POST['gridglyphs']) ) $_POST['gridglyphs'] = 'abcdef';
		if ( !isset($_POST['gridtamanio']) && empty($_POST['gridtamanio']) ) $_POST['gridtamanio'] = 40;
		?> 
		
		<table>
			<tr>
				<td>
					<p class="sizelabel">Glyphs:</p>
					<input type="text" name="gridglyphs" id="gridglyphs" size="50" value="<?php if (isset($_POST['gridglyphs']) && !empty($_POST['gridglyphs']) ) echo $_POST['gridglyphs']; ?>" />
				</td>
				<td>
					<p class="sizelabel">Size:</p>
					<input type="text" name="gridtamanio" id="gridtamanio" size="3" value="<?php if (isset($_POST['gridtamanio']) && !empty($_POST['gridtamanio']) ) echo $_POST['gridtamanio']; ?>" />				
				</td>
				<td>
					<p class="sizelabel">&nbsp;</p>
					<button type="submit">Generate Grid</button>
				</td>
			</tr>
		</table>
		
	</form>
	
	<p>&nbsp;</p>
	
	<div id="gridresults">
		<p>Your Grid will be generated here. Use it to test even color.</p>
	</div>
	
</div>

<!-- Javascript for the Grid Generator Tool -->
<script>
    $("#gridgeneratorform").submit(function(event) {

		event.preventDefault();
		
		$.ajax({
			url: "includes/tools/color-ajax.php",			
			data: {
				gridglyphs: $( "#gridglyphs" ).val(),
				gridtamanio: $( "#gridtamanio" ).val(),
			},
			type: "POST",
			dataType : "html",
			success: function( msg ) {
				$( "#gridresults" ).html( msg );
			},
			error: function( xhr, status ) {
				alert( "Sorry. Try again, there was a problem!" );
			},
		});
      
    }); 
</script>
<!-- End Javascript for the Grid Generator Tool -->				
