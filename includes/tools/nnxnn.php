<div>
	
	<form method="post" action="includes/tools/nnxnn-ajax.php" id="nnxnngeneratorform">

		<?php
		// Defino un tamaño por defecto
		if ( !isset($_POST['nnxnnglyphs']) && empty($_POST['nnxnnglyphs']) ) $_POST['nnxnnglyphs'] = 'noadhesi';
		if ( !isset($_POST['nnxnntamanio']) && empty($_POST['nnxnntamanio']) ) $_POST['nnxnntamanio'] = 40;
		?> 
		
		<table>
			<tr>
				<td>
					<p class="sizelabel">Glyphs:</p>
					<input type="text" name="nnxnnglyphs" id="nnxnnglyphs" size="50" value="<?php if (isset($_POST['nnxnnglyphs']) && !empty($_POST['nnxnnglyphs']) ) echo $_POST['nnxnnglyphs']; ?>" />
				</td>
				<td>
					<p class="sizelabel">Size:</p>
					<input type="text" name="nnxnntamanio" id="nnxnntamanio" size="3" value="<?php if (isset($_POST['nnxnntamanio']) && !empty($_POST['nnxnntamanio']) ) echo $_POST['nnxnntamanio']; ?>" />				
				</td>
				<td>
					<p class="sizelabel">
					<input type="radio" name="nnxnncase" value="lower" id="nnxnnlower">Lowercases</input><br/>
					<input type="radio" name="nnxnncase" value="upper" id="nnxnnupper">Uppercases</input></p>
				</td>			
				<td>
					<p class="sizelabel">&nbsp;</p>
					<button type="submit">Generate Grid</button>
				</td>
			</tr>
		</table>
		
	</form>
	
	<p>&nbsp;</p>
	
	<div id="nnxnnresults">
		<p>Your Grid will be generated here. Use it to test even color.</p>
	</div>
	
</div>

<!-- Javascript for the Grid Generator Tool -->
<script>
    $("#nnxnngeneratorform").submit(function(event) {

		event.preventDefault();
		
		$.ajax({
			url: "includes/tools/nnxnn-ajax.php",			
			data: {
				nnxnnglyphs: $( "#nnxnnglyphs" ).val(),
				nnxnntamanio: $( "#nnxnntamanio" ).val(),
				nnxnncase: $('input[name=nnxnncase]:checked', '#nnxnngeneratorform').val(),
			},
			type: "POST",
			dataType : "html",
			success: function( msg ) {
				$( "#nnxnnresults" ).html( msg );
			},
			error: function( xhr, status ) {
				alert( "Sorry. Try again, there was a problem!" );
			},
		});
      
    }); 
</script>
<!-- End Javascript for the Grid Generator Tool -->				
