<div>
	
	<form method="post" action="includes/tools/spacing-ajax.php" id="nnxnngeneratorform" class="dontprint">

		<?php
		// Default Values
		if ( !isset($_POST['nnxnncase']) && empty($_POST['nnxnncase']) ) $_POST['nnxnncase'] = 'lower';
		if ( !isset($_POST['nnxnnmode']) && empty($_POST['nnxnnmode']) ) $_POST['nnxnnmode'] = 'short';
		if ( !isset($_POST['nnxnnglyphs']) && empty($_POST['nnxnnglyphs']) ) $_POST['nnxnnglyphs'] = 'adhesion';
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
					<input type="radio" name="nnxnncase" value="lower" id="nnxnnlower" <?php if ( $_POST['nnxnncase'] == 'lower') echo 'checked="checked" ';?>>oonn</input><br/>
					<input type="radio" name="nnxnncase" value="upper" id="nnxnnupper" <?php if ( $_POST['nnxnncase'] == 'upper') echo 'checked="checked" ';?>>OOHH</input><br/>
					<input type="radio" name="nnxnncase" value="figures" id="nnxnnupper" <?php if ( $_POST['nnxnncase'] == 'figures') echo 'checked="checked" ';?>>0011</input></p>
				</td>			
				<td>
					<p class="sizelabel">
					<input type="radio" name="nnxnnmode" value="short" id="nnxnnshort" <?php if ( $_POST['nnxnnmode'] == 'short') echo 'checked="checked" ';?>>Short Test</input><br/>
					<input type="radio" name="nnxnnmode" value="long" id="nnxnnlong" <?php if ( $_POST['nnxnnmode'] == 'long') echo 'checked="checked" ';?>>Long Test</input></p>
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
			url: "includes/tools/spacing-ajax.php",			
			data: {
				nnxnnglyphs: $( "#nnxnnglyphs" ).val(),
				nnxnntamanio: $( "#nnxnntamanio" ).val(),
				nnxnncase: $('input[name=nnxnncase]:checked', '#nnxnngeneratorform').val(),
				nnxnnmode: $('input[name=nnxnnmode]:checked', '#nnxnngeneratorform').val(),
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
