<?php
// Default Values
if ( !isset($_POST['csspixels']) && empty($_POST['csspixels']) ) $_POST['csspixels'] = 600;
if ( !isset($_POST['fontsize']) && empty($_POST['fontsize']) ) $_POST['fontsize'] = 72;
if ( !isset($_POST['spacewidth']) && empty($_POST['spacewidth']) ) $_POST['spacewidth'] = 100;
if ( !isset($_POST['fontupm']) && empty($_POST['fontupm']) ) $_POST['fontupm'] = 1000;
?> 

<div style="width: 920px;">

	<h1>CssPixels to AdvanceWidth calculator</h1>
	
	<form method="post" action="includes/specimen-helper/calculator-ajax.php" id="calculatorform">
		<table>
			<tr>
				<td><p class="sizelabel">Font Size:</p></td>
				<td><input type="text" id="fontsize" size="6" value="<?php if (isset($_POST['fontsize']) && !empty($_POST['fontsize']) ) echo $_POST['fontsize']; ?>" /></td>
			</tr>
			<tr>
				<td><p class="sizelabel">CssPixels:</p></td>
				<td><input type="text" id="csspixels" size="6" value="<?php if (isset($_POST['csspixels']) && !empty($_POST['csspixels']) ) echo $_POST['csspixels']; ?>" /></td>
			</tr>
			<tr>
				<td><p class="sizelabel">Space width:</p></td>
				<td><input type="text" id="spacewidth" size="6" value="<?php if (isset($_POST['spacewidth']) && !empty($_POST['spacewidth']) ) echo $_POST['spacewidth']; ?>" /></td>
			</tr>
			<tr>
				<td><p class="sizelabel">Font UPM:</p></td>
				<td><input type="text" id="fontupm" size="6" value="<?php if (isset($_POST['fontupm']) && !empty($_POST['fontupm']) ) echo $_POST['fontupm']; ?>" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><button type="submit">Give me that numbers!</button></td>
			</tr>
		</table>

	</form>

	<!-- ajax Results -->
	<div id="calculatorresults" style="padding: 20px 80px 20px 0px;">
		<p>Results will appear here</p>
	</div>

</div>

<!-- Javascript for the Calculator Tool -->
<script>
    $("#calculatorform").submit(function(event) {

		event.preventDefault();
		
		$.ajax({
			url: "includes/specimen-helper/calculator-ajax.php",
			data: {
				csspixels: $( "#csspixels" ).val(),
				fontsize: $( "#fontsize" ).val(),
				spacewidth: $( "#spacewidth" ).val(),
				fontupm: $( "#fontupm" ).val(),
			},
			type: "POST",
			dataType : "html",
			success: function( msg ) {
				$( "#calculatorresults" ).html( msg );
			},
			error: function( xhr, status ) {
				alert( "Sorry. Try Again, there was a problem!" );
			},
		});
      
    }); 
</script>
<!-- End Javascript for the Filter Tool -->