<div>

	<!-- Pairs Form -->
	<div id="formContainer">
		
		<p class="sizelabel">Post explaining <a href="http://typedrawers.com/discussion/581/simple-kerning-pairs-builder-helper-tool" target="_blank">how to use this tool</a> and what it is for.</p>
		
		<form method="post" action="includes/tools/pairs-ajax.php" id="pairsform">
		
			<table width="960" cellpadding="4" cellpadding="0" border="0">
				<tr>	
					<td valign="top">
						<p class="sizelabel">First:</p>
						<textarea rows="6" style="width: 300px;" id="pairsantes"><?php if (isset($_POST['pairsantes']) && !empty($_POST['pairsantes']) ) echo $_POST['pairsantes']; ?></textarea>	  						
					</td>  	
					<td valign="top">
						<p class="sizelabel">Glyphs:</p>
						<textarea rows="6" style="width: 300px;" id="pairsglyphs"><?php if (isset($_POST['pairsglyphs']) && !empty($_POST['pairsglyphs']) ) echo $_POST['pairsglyphs']; ?></textarea>	  						
					</td>  						
					<td valign="top">
						<p class="sizelabel">Second:</p>
						<textarea rows="6" style="width: 300px;" id="pairsdespues"><?php if (isset($_POST['pairsdespues']) && !empty($_POST['pairsdespues']) ) echo $_POST['pairsdespues']; ?></textarea>	  						
					</td> 					 
				</tr>
				<tr>
					<td colspan="2">
						<p class="sizelabel">Format: 
						<input type="radio" name="pairsformat" value="plain" checked>Plain</input> 
						<input type="radio" name="pairsformat" value="fontlab">FontLab</input> 
						<input type="radio" name="pairsformat" value="metricsmachine">Metrics Machine</input> 
						<input type="radio" name="pairsformat" value="kernmaster">Kernmaster</input>
						</p>
					</td>
					<td>
						<button type="submit">Make Pairs</button>  						
					</td>	  						
				</tr>
			</table>
		
		</form>
	</div>
	
	<p class="sizelabel">&nbsp;</p>

	<!-- Pairs Results -->
	<div id="pairsresults" contenteditable="true" style="padding: 20px 80px 20px 0px;">
		<p>Results will appear here</p>
	</div>

</div>				


<script>
// Ajax Filter
$("#pairsform").submit(function(event) {

	event.preventDefault();
	
	$.ajax({
		url: "includes/tools/pairs-ajax.php",
		data: {
			pairsantes: $( "#pairsantes" ).val(),
			pairsglyphs: $( "#pairsglyphs" ).val(),
			pairsdespues: $( "#pairsdespues" ).val(),
			pairsformat: $( "input[name=pairsformat]:checked" ).val(),
		},
		type: "POST",
		dataType : "html",
		success: function( msg ) {
			$( "#pairsresults" ).html( msg );
		},
		error: function( xhr, status ) {
			alert( "Try again" );
		},
	});
  
}); 
</script>