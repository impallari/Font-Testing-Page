<div>

	<div id="formContainer">
		<form method="post" action="includes/playground/better-ajax.php" id="betterform">

			<table width="920" border="0">
			
				<tr>
					<td valign="top">
						<p class="sizelabel">Made From:</p>
						<textarea rows="2" style="width: 500px;" id="betterglyphs"><?php if (isset($_POST['betterglyphs']) && !empty($_POST['betterglyphs']) ) echo $_POST['betterglyphs']; ?></textarea>	  						
					</td>
					<td width="90" valign="top">
						<p class="sizelabel">Max Results:</p>
						<select id="bettermax">
							<!-- <option value="">Unlimited</option> -->
							<option value="10">10</option>
							<option value="25">25</option>
							<option value="50">50</option>
							<option value="75">75</option>
							<option value="100">100</option>
							<option value="150">150</option>
							<option value="200">200</option>
							<option value="250">250</option>
							<option value="300">300</option>
							<option value="350">350</option>
							<option value="400">400</option>
							<option value="450">450</option>
							<option value="500">500</option>
							<option value="600">600</option>
							<option value="700">700</option>
							<option value="800">800</option>
							<option value="900">900</option>
							<option value="1000">1000</option>
						</select>
					</td>							
					<td align="left" valign="middle">
						<button type="submit">Better Adhesion!</button>
					</td>	
				</tr>
			</table>
		
		</form>
	</div>
	
	<!-- ajax Results -->
	<div id="betterresults" contenteditable="true" style="padding: 20px 80px 20px 0px;">
		<p>Better Adhesion!</p>
	</div>
				
</div>

<!-- Javascript for the Filter Tool -->
<script>
    $("#betterform").submit(function(event) {

		event.preventDefault();
		
		$.ajax({
			url: "includes/playground/better-ajax.php",
			data: {
				betterglyphs: $( "#betterglyphs" ).val(),
				bettermax: $( "#bettermax" ).val(),
			},
			type: "POST",
			dataType : "html",
			success: function( msg ) {
				$( "#betterresults" ).html( msg );
			},
			error: function( xhr, status ) {
				alert( "Sorry. Try Again, there was a problem!" );
			},
		});
      
    }); 
</script>
<!-- End Javascript for the Filter Tool -->
