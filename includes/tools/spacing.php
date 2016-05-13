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
					<input type="text" name="nnxnnglyphs" id="nnxnnglyphs" size="70" value="<?php if (isset($_POST['nnxnnglyphs']) && !empty($_POST['nnxnnglyphs']) ) echo $_POST['nnxnnglyphs']; ?>" />
					<p class="sizelabel" style="margin-top: 10px;">
						<a nohref style="cursor:pointer;color:blue;text-decoration:none" onclick="$('#nnxnnglyphs').val('adhesion'); return false;">adhesion</a> - 
						<a nohref style="cursor:pointer;color:blue;text-decoration:none" onclick="$('#nnxnnglyphs').val('abcdefghijklmnopqrstuvwxyz'); return false;">a-z</a> - 
						<a nohref style="cursor:pointer;color:blue;text-decoration:none" onclick="$('#nnxnnglyphs').val('ABCDEFGHIJKLMNOPQRSTUVWXYZ'); return false;">A-Z</a> -  
						<a nohref style="cursor:pointer;color:blue;text-decoration:none" onclick="$('#nnxnnglyphs').val('0123456789'); return false;">0-9</a> -  
						<a nohref style="cursor:pointer;color:blue;text-decoration:none" onclick="$('#nnxnnglyphs').val('à á â ã ä å ā ă ą ǻ ȁ ȃ æ ǽ ć ç ĉ ċ č ď đ ð ḍ ǳ ǆ è é ê ë ē ĕ ė ę ě ẽ ẹ ȅ ȇ ə ǵ ĝ ğ ġ ģ ĥ ħ ḥ ì í î ï ĩ ī į ĭ ị ȉ ȋ ĳ ĵ ķ ĸ ĺ ļ ľ ŀ ł ǉ ń ŉ ņ ň ñ ṅ ŋ ǌ ò ó ô õ ö ø ō ŏ ő ǿ ǫ ọ ȍ ȏ œ þ ŕ ŗ ř ṛ ȑ ȓ ś ŝ š ș ş ṣ ß ŧ ť ț ţ ṭ ù ú û ü ũ ū ŭ ů ű ų ụ ȕ ȗ ẁ ẃ ẅ ŵ ý ÿ ŷ ỳ ỹ ź ż ž ẓ'); return false;">latin</a> - 
						<a nohref style="cursor:pointer;color:blue;text-decoration:none" onclick="$('#nnxnnglyphs').val('À Á Â Ã Ä Å Ā Ă Ą Ǻ Ȁ Ȃ Æ Ǽ Ć Ç Ĉ Ċ Č Ď Đ Ð Ḍ Ǳ ǲ Ǆ ǅ È É Ê Ë Ē Ĕ Ė Ę Ẽ Ě Ẹ Ȅ Ȇ Ə Ǵ Ĝ Ğ Ġ Ģ Ĥ Ħ Ḥ Ĭ Ì Í Î Ï İ Ĩ Ī Į Ị Ȉ Ȋ Ĳ Ĵ Ķ Ĺ Ļ Ľ Ŀ Ł Ǉ ǈ Ñ Ń Ņ Ň Ṅ Ŋ Ǌ ǋ Ò Ó Ô Õ Ö Ō Ŏ Ő Ø Ǿ Ǫ Ọ Ȍ Ȏ Œ Þ Ŕ Ŗ Ř Ṛ Ȑ Ȓ Ś Ŝ Š Ș Ş Ṣ Ŧ Ť Ț Ţ Ṭ Ù Ú Û Ü Ũ Ū Ŭ Ů Ű Ų Ụ Ȕ Ȗ Ẁ Ẃ Ẅ Ŵ Ý Ŷ Ÿ Ỳ Ỹ Ź Ż Ž Ẓ'); return false;">LATIN</a> -
						<a nohref style="cursor:pointer;color:blue;text-decoration:none" onclick="$('#nnxnnglyphs').val('# % ° _ = ± + ÷ − - < > × . , : ; | ½ ⅓ ⅔ ¼ ¾ ⅛ ⅜ ⅝ ⅞ ¢ $ € £ '); return false;">Math</a></p>
					<p class="sizelabel" style="margin-top: 6px;">Punctation: ‐ ― ~ _ . … , ' " „ ‘ ’ ‛ “ ” ‟ : ; ‹ « › » \ /  • * † ‡ &amp; @ ¿ ? ¡ ! ( ) [ ] { } ª º © ® ¶ # §</p>	
				</td>
				<td>
					<p class="sizelabel">Size:</p>
					<input type="text" name="nnxnntamanio" id="nnxnntamanio" size="3" value="<?php if (isset($_POST['nnxnntamanio']) && !empty($_POST['nnxnntamanio']) ) echo $_POST['nnxnntamanio']; ?>" />
					<p class="sizelabel" style="margin-top: 10px;">&nbsp;</p>				
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
