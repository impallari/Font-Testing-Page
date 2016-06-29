<div>

	<div id="formContainer">
		<p class="sizelabel" style="margin-bottom: 20px;">Post explaining <a href="http://typedrawers.com/discussion/comment/9592/#Comment_9592" target="_blank">how to use this tool</a> and what it is for.</p>

		<form method="post" action="includes/specimen-helper/wordsfinder-ajax.php" id="filterform">
		
			<?php
			// Defino un tamaño por defecto
			if ( !isset($_POST['filtersize']) && empty($_POST['filtersize']) ) $_POST['filtersize'] = 40;
			if ( !isset($_POST['madefrom']) && empty($_POST['madefrom']) ) $_POST['madefrom'] = "abcdefghijklmnopqrstuvwxyz";
			?> 
			<table width="920" border="0" cellpadding="4">
				<tr>
					<td valign="top">
						<p class="sizelabel">Made From: (Lowercase only)</p>
						<textarea rows="4" style="width: 300px;" id="madefrom"><?php if (isset($_POST['madefrom']) && !empty($_POST['madefrom']) ) echo $_POST['madefrom']; ?></textarea>
					</td>
					<td valign="top">
						<p class="sizelabel">Measures: (Paste from Macro)</p>
						<textarea rows="4" style="width: 150px;" id="measures"><?php if (isset($_POST['measures']) && !empty($_POST['measures']) ) echo $_POST['measures']; ?></textarea>
					</td>		  								  						
					<td valign="top">
						<p class="sizelabel">Kerning: (Paste from Macro)</p>
						<textarea rows="4" style="width: 150px;" id="kerning"><?php if (isset($_POST['kerning']) && !empty($_POST['kerning']) ) echo $_POST['kerning']; ?></textarea>
					</td>
					<td valign="top">
						<p class="sizelabel"><input type="checkbox" id="addsentence"> Initial<br />
						<input type="checkbox" id="adduppercase"> AllCaps</p>
					</td>
					<td valign="top">
						<p class="sizelabel"><input type="checkbox" id="eng_dict" checked="checked"> English<br />
						<input type="checkbox" id="spa_dict"> Spanish
					</td>
				</tr>
			</table>
			
			<table width="920" border="0" cellpadding="4">	
				<tr>
					<td width="76" valign="top">
						<p class="sizelabel">Starting:</p>
						<input type="text" id="starting" size="4" value="<?php if (isset($_POST['starting']) && !empty($_POST['starting']) ) echo $_POST['starting']; ?>" />
					</td>		  					
				
					<td width="50" valign="top">
						<p class="sizelabel">Having:</p>
						<input type="text" id="having_one" size="4" value="<?php if (isset($_POST['having_one']) && !empty($_POST['having_one']) ) echo $_POST['having_one']; ?>" />
					</td>
					<td width="50" valign="top">
						<p class="sizelabel">and</p>
						<input type="text" id="having_two" size="4" value="<?php if (isset($_POST['having_two']) && !empty($_POST['having_two']) ) echo $_POST['having_two']; ?>" />
					</td>
					<td width="50" valign="top">
						<p class="sizelabel">and</p>
						<input type="text" id="having_three" size="4" value="<?php if (isset($_POST['having_three']) && !empty($_POST['having_three']) ) echo $_POST['having_three']; ?>" />
					</td>
					<td width="50" valign="top">
						<p class="sizelabel">and</p>
						<input type="text" id="having_four" size="4" value="<?php if (isset($_POST['having_four']) && !empty($_POST['having_four']) ) echo $_POST['having_four']; ?>" />
					</td>
					<td width="76" valign="top">
						<p class="sizelabel">and</p>
						<input type="text" id="having_five" size="4" value="<?php if (isset($_POST['having_five']) && !empty($_POST['having_five']) ) echo $_POST['having_five']; ?>" />
					</td>
														
					<td width="50" valign="top">
						<p class="sizelabel">Not having:</p>
						<input type="text" id="not_having_one" size="4" value="<?php if (isset($_POST['not_having_one']) && !empty($_POST['not_having_one']) ) echo $_POST['not_having_one']; ?>" />
					</td>
					<td width="50" valign="top">
						<p class="sizelabel">and:</p>
						<input type="text" id="not_having_two" size="4" value="<?php if (isset($_POST['not_having_two']) && !empty($_POST['not_having_two']) ) echo $_POST['not_having_two']; ?>" />
					</td>
					<td width="50" valign="top">
						<p class="sizelabel">and:</p>
						<input type="text" id="not_having_three" size="4" value="<?php if (isset($_POST['not_having_three']) && !empty($_POST['not_having_three']) ) echo $_POST['not_having_three']; ?>" />
					</td>					
					<td width="76" valign="top">
						<p class="sizelabel">and</p>
						<input type="text" id="not_having_four" size="4" value="<?php if (isset($_POST['not_having_four']) && !empty($_POST['not_having_four']) ) echo $_POST['not_having_four']; ?>" />
					</td>
					
					<td width="76" valign="top">
						<p class="sizelabel">Ending:</p>
						<input type="text" id="ending" size="4" value="<?php if (isset($_POST['ending']) && !empty($_POST['ending']) ) echo $_POST['ending']; ?>" />
					</td>
				</tr>
			</table>
			
			<table width="920" border="0" cellpadding="4">	
				<tr>			 						
					<td>
						<p class="sizelabel">Desired Word Advance-width:
						<input type="text" id="desired_em" size="6" value="<?php if (isset($_POST['desired_em']) && !empty($_POST['desired_em']) ) echo $_POST['desired_em']; ?>" /></p>
					</td>
					<td>
						<p class="sizelabel">Tolerance:
						<input type="text" id="tolerance_em" size="6" value="<?php if (isset($_POST['tolerance_em']) && !empty($_POST['tolerance_em']) ) echo $_POST['tolerance_em']; ?>" /></p>
					</td>
					<td>
						<p class="sizelabel">Minimum: 
						<select id="minglyphs">
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5" selected>5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
						</select></p>
					</td>
					<td>
						<p class="sizelabel">Maximun: 
						<select id="maxglyphs">
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10" selected>10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
						</select></p>
					</td>
					<td>
						<p class="sizelabel">Size: 
						<input type="text" id="filtersize" size="3" value="<?php if (isset($_POST['filtersize']) && !empty($_POST['filtersize']) ) echo $_POST['filtersize']; ?>" /></p>
					</td>										 						
					<td>
						<button type="submit">Get me some words please!</button>
					</td>	
				</tr>
			</table>
		
		</form>
	</div>
	
	<!-- ajax Results -->
	<div id="filterresults" style="padding: 20px 80px 20px 0px;">
		<p>What's this:</p>
		<p>It's a tool that helps you find the perfect word for your nice type specimen</p>
		<p>This post explain <a href="http://typedrawers.com/discussion/comment/9592/#Comment_9592" target="_blank">how to use this tool</a>, including a quick video<p>
	</div>
				
</div>

<!-- Javascript for the Filter Tool -->
<script>
    $("#filterform").submit(function(event) {

		event.preventDefault();
		  
		var eng_dict = $("#eng_dict").is(':checked') ? "yes" : "no";
		var spa_dict = $("#spa_dict").is(':checked') ? "yes" : "no";
		var adduppercase = $("#adduppercase").is(':checked') ? "yes" : "no";
		var addsentence = $("#addsentence").is(':checked') ? "yes" : "no";
		
		$.ajax({
			url: "includes/specimen-helper/wordsfinder-ajax.php",
			data: {
				measures: $( "#measures" ).val(),
				kerning: $( "#kerning" ).val(),
				madefrom: $( "#madefrom" ).val(),
				starting: $( "#starting" ).val(),
				having_one: $( "#having_one" ).val(),
				having_two: $( "#having_two" ).val(),
				having_three: $( "#having_three" ).val(),
				having_four: $( "#having_four" ).val(),
				having_five: $( "#having_five" ).val(),
				not_having_one: $( "#not_having_one" ).val(),
				not_having_two: $( "#not_having_two" ).val(),
				not_having_three: $( "#not_having_three" ).val(),
				not_having_four: $( "#not_having_four" ).val(),
				ending: $( "#ending" ).val(),
				filtersize: $( "#filtersize" ).val(),
				minglyphs: $( "#minglyphs" ).val(),
				maxglyphs: $( "#maxglyphs" ).val(),
				desired_em: $( "#desired_em" ).val(),
				tolerance_em: $( "#tolerance_em" ).val(),
				uppercase: adduppercase,
				sentence: addsentence,
				eng_dict: eng_dict,
				spa_dict: spa_dict,
			},
			type: "POST",
			dataType : "html",
			success: function( msg ) {
				$( "#filterresults" ).html( msg );
			},
			error: function( xhr, status ) {
				alert( "Sorry. Try Again, there was a problem!" );
			},
		});
      
    }); 
</script>
<!-- End Javascript for the Filter Tool -->
