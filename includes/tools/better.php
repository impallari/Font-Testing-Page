<div>

	<div id="formContainer">
		<form method="post" action="includes/tools/better-ajax.php" id="betterform">

			<?php
			// Defino un tamaño por defecto
			if ( !isset($_POST['betterglyphs']) && empty($_POST['betterglyphs']) ) $_POST['betterglyphs'] = 'abcdefghijklmnopqrstuvwxyz';
			if ( !isset($_POST['bettersize']) && empty($_POST['bettersize']) ) $_POST['bettersize'] = 60;
			?> 

			<table width="920" border="0">
				<tr>
					
					<td valign="top" width="420">
						<p class="sizelabel">Made From:</p>
						<textarea rows="2" style="width: 400px;" id="betterglyphs"><?php if (isset($_POST['betterglyphs']) && !empty($_POST['betterglyphs']) ) echo $_POST['betterglyphs']; ?></textarea>	  						
					</td>

					<td valign="top">
						<p class="sizelabel">Max Results:</p>
						<select id="bettermax">
							<option value="10">10</option>
							<option value="15">15</option>
							<option value="20">20</option>
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
						</select>
					</td>	

					<td valign="top">
						<p class="sizelabel"><input type="checkbox" id="better_eng_dict" checked="checked"> Eng<br />
						<input type="checkbox" id="better_spa_dict" checked="checked"> Spa</p>	  						
					</td>

					<td valign="top">
						<p class="sizelabel">Size:</p>
						<input type="text" id="bettersize" size="3" value="<?php if (isset($_POST['bettersize']) && !empty($_POST['bettersize']) ) echo $_POST['bettersize']; ?>" />
					</td>
					
					<td valign="top">
						<p class="sizelabel">Line-height:</p>
						<select id="betterline">
						<option value="">Default</option>
						<option value="1">1</option>
						<option value="1.1">1.1</option>
						<option value="1.2">1.2</option>
						<option value="1.3">1.3</option>
						<option value="1.4">1.4</option>
						<option value="1.5">1.5</option>
						<option value="1.6">1.6</option>
						<option value="1.7">1.7</option>
						<option value="1.8">1.8</option>
						</select>
					</td>						

					<td valign="top">
						<p class="sizelabel"><input type="checkbox" id="better_addsomesentence"> Some<br />
						<input type="checkbox" id="better_addsentence"> Initial<br />
						<input type="checkbox" id="better_adduppercase"> AllCaps</p>
					</td>
					
					<td align="left" valign="middle">
						<button type="submit">Find Words</button>
					</td>
						
				</tr>
			</table>
		</form>
	</div>
	
	<div class="better_loading" style="padding: 20px 80px 20px 0px;display: none;"><p class="sizelabel">Searching... go for a coffee, this can take a long time.</p></div>
	
	<!-- ajax Results -->
	<div class="better_results" id="betterresults" contenteditable="true" style="padding: 20px 80px 20px 0px;">
		<p>Improved Adhesion text having a high-frequency of low-frequency letters.</p>
	</div>
				
</div>

<!-- Javascript for the Filter Tool -->
<script>
    $("#betterform").submit(function(event) {
			event.preventDefault();
			var better_eng_dict = $("#better_eng_dict").is(':checked') ? "yes" : "no";
			var better_spa_dict = $("#better_spa_dict").is(':checked') ? "yes" : "no";
			var better_adduppercase = $("#better_adduppercase").is(':checked') ? "yes" : "no";
			var better_addsentence = $("#better_addsentence").is(':checked') ? "yes" : "no";
			var better_addsomesentence = $("#better_addsomesentence").is(':checked') ? "yes" : "no";
			$.ajax({
				url: "includes/tools/better-ajax.php",
				data: {
					betterglyphs: $( "#betterglyphs" ).val(),
					bettermax: $( "#bettermax" ).val(),
					bettersize: $( "#bettersize" ).val(),
					betterline: $( "#betterline" ).val(),
					better_uppercase: better_adduppercase,
					better_sentence: better_addsentence,
					better_somesentence: better_addsomesentence,	
					better_eng_dict: better_eng_dict,
					better_spa_dict: better_spa_dict,
				},
				type: "POST",
				dataType : "html",
				success: function( msg ) {
					$( "#betterresults" ).html( msg );
				},
				error: function( xhr, status ) {
					alert( "Try Again, there was a problem!" );
				},
		    beforeSend:function(){
		    	$(".better_loading").show();
		    	$(".better_results").hide();
		    },
		    complete:function(){
		    	$(".better_loading").hide();
		    	$(".better_results").show();
		    },
			});      
    }); 
</script>
<!-- End Javascript for the Filter Tool -->
