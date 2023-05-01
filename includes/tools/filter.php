<div>

	<div id="formContainer">
		<form method="post" action="includes/tools/filter-ajax.php" id="filterform">
		
			<?php
			// Defino un tamaño por defecto
			if ( !isset($_POST['filtersize']) && empty($_POST['filtersize']) ) $_POST['filtersize'] = 60;
			if ( !isset($_POST['filterglyphs']) && empty($_POST['filterglyphs']) ) $_POST['filterglyphs'] = 'abcdefghijklmnopqrstuvwxyz';
			?> 
			<table width="920" border="0">
			
				<tr>
					<td colspan="7" valign="top">
						<p class="sizelabel">Made From:</p>
						<textarea rows="4" style="width: 500px;" id="filterglyphs"><?php if (isset($_POST['filterglyphs']) && !empty($_POST['filterglyphs']) ) echo $_POST['filterglyphs']; ?></textarea>	  						
					</td>
					<td width="80" valign="top">
						<p class="sizelabel"><input type="checkbox" id="addsomesentence"> Some<br />
						<input type="checkbox" id="addsentence"> Initial<br />
						<input type="checkbox" id="adduppercase"> AllCaps<br />
						<input type="checkbox" id="sidebyside"> S by S</p>
					</td>
					<td colspan="3" valign="top">
						<p class="sizelabel">To filter your own text, paste it here:</p>
						<textarea rows="2" style="width: 200px;" id="words"><?php if (isset($_POST['words']) && !empty($_POST['words']) ) echo $_POST['words']; ?></textarea>	  						
					</td>
					<td valign="top">
						<p class="sizelabel"><input type="checkbox" id="eng_dict" checked="checked"> Eng<br />
						<input type="checkbox" id="spa_dict" checked="checked"> Spa<br />
						<input type="checkbox" id="deva_dict"> Deva</p>	  						
					</td>		  						
				</tr>
				<tr>
					<td width="76" valign="top">
						<p class="sizelabel">Starting:</p>
						<input type="text" id="starting" size="4" value="<?php if (isset($_POST['starting']) && !empty($_POST['starting']) ) echo $_POST['starting']; ?>" />
					</td>		  					
				
					<td width="60" valign="top">
						<p class="sizelabel">Having:</p>
						<input type="text" id="having" size="4" value="<?php if (isset($_POST['having']) && !empty($_POST['having']) ) echo $_POST['having']; ?>" />
					</td>
					<td width="60" valign="top">
						<p class="sizelabel">and</p>
						<input type="text" id="also_having" size="4" value="<?php if (isset($_POST['also_having']) && !empty($_POST['also_having']) ) echo $_POST['also_having']; ?>" />
					</td>
					<td width="76" valign="top">
						<p class="sizelabel">and</p>
						<input type="text" id="also_having_more" size="4" value="<?php if (isset($_POST['also_having_more']) && !empty($_POST['also_having_more']) ) echo $_POST['also_having_more']; ?>" />
					</td>
				
					<td width="60" valign="top">
						<p class="sizelabel">Not having:</p>
						<input type="text" id="not_having" size="4" value="<?php if (isset($_POST['not_having']) && !empty($_POST['not_having']) ) echo $_POST['not_having']; ?>" />
					</td>
					<td width="76" valign="top">
						<p class="sizelabel">and</p>
						<input type="text" id="also_not_having" size="4" value="<?php if (isset($_POST['also_not_having']) && !empty($_POST['also_not_having']) ) echo $_POST['also_not_having']; ?>" />
					</td>
					<td width="76" valign="top">
						<p class="sizelabel">Ending:</p>
						<input type="text" id="ending" size="4" value="<?php if (isset($_POST['ending']) && !empty($_POST['ending']) ) echo $_POST['ending']; ?>" />
					</td>
					<td>&nbsp;</td>	 						
					<td width="50" valign="top">
						<p class="sizelabel">Size:</p>
						<input type="text" id="filtersize" size="3" value="<?php if (isset($_POST['filtersize']) && !empty($_POST['filtersize']) ) echo $_POST['filtersize']; ?>" />
					</td>
					<td width="100" valign="top">
						<p class="sizelabel">Line-height:</p>
						<select id="line">
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
					<td width="90" valign="top">
						<p class="sizelabel">Max Results:</p>
						<select id="max">
							<!-- <option value="">Unlimited</option> -->
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
						<button type="submit">Filter</button>
					</td>	
				</tr>
			</table>
		
		</form>
	</div>
	
	<div class="filer_loading" style="padding: 20px 80px 20px 0px;display: none;"><p class="sizelabel">Searching...</p></div>
	
	<!-- ajax Results -->
	<div class="filer_results" id="filterresults" contenteditable="true" style="padding: 20px 80px 20px 0px;">
		<p>A simple filter tool</p>
	</div>
				
</div>

<!-- Javascript for the Filter Tool -->
<script>
    $("#filterform").submit(function(event) {
			event.preventDefault();
			var eng_dict = $("#eng_dict").is(':checked') ? "yes" : "no";
			var spa_dict = $("#spa_dict").is(':checked') ? "yes" : "no";
			var deva_dict = $("#deva_dict").is(':checked') ? "yes" : "no";
			var adduppercase = $("#adduppercase").is(':checked') ? "yes" : "no";
			var addsentence = $("#addsentence").is(':checked') ? "yes" : "no";
			var addsomesentence = $("#addsomesentence").is(':checked') ? "yes" : "no";
			var sidebyside = $("#sidebyside").is(':checked') ? "yes" : "no";
			$.ajax({
				url: "includes/tools/filter-ajax.php",
				data: {
					words: $( "#words" ).val(),
					filterglyphs: $( "#filterglyphs" ).val(),
					starting: $( "#starting" ).val(),
					having: $( "#having" ).val(),
					also_having: $( "#also_having" ).val(),
					also_having_more: $( "#also_having_more" ).val(),
					not_having: $( "#not_having" ).val(),
					also_not_having: $( "#also_not_having" ).val(),
					ending: $( "#ending" ).val(),
					filtersize: $( "#filtersize" ).val(),
					line: $( "#line" ).val(),
					max: $( "#max" ).val(),
					uppercase: adduppercase,
					sentence: addsentence,
					somesentence: addsomesentence,	
					sidebyside: sidebyside,			
					eng_dict: eng_dict,
					spa_dict: spa_dict,
					deva_dict: deva_dict,
				},
				type: "POST",
				dataType : "html",
				success: function( msg ) {
					$( "#filterresults" ).html( msg );
				},
				error: function( xhr, status ) {
					alert( "Try Again, there was a problem!" );
				},
		    beforeSend:function(){
		    	$(".filer_loading").show();
		    	$(".filer_results").hide();
		    },
		    complete:function(){
		    	$(".filer_loading").hide();
		    	$(".filer_results").show();
		    },
			});
    }); 
</script>
<!-- End Javascript for the Filter Tool -->
