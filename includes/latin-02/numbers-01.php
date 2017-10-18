<div>

	<style>
	.numberstocaps {
		font-size: 40px;
	}
	tr {
		page-break-inside: avoid;
	}
	</style>
	
	<p class="sizelabel">Numers to Caps. 42 points</p>
	<table border="0" cellpadding="10" cellspacing="0">
	<?php 
	$glyphs = array('1', '2','3','4','5','6','7','8','9', '0');
	
	foreach ($glyphs as $glyph) {
	?>
		<tr>
			<td valign="top" style="white-space: nowrap">
				<p class="numberstocaps">H<?php echo $glyph ?>H O<?php echo $glyph ?>O</p>
			</td>
			<td valign="top">
				<p class="numberstocaps">A<?php echo $glyph ?>A B<?php echo $glyph ?>B C<?php echo $glyph ?>C D<?php echo $glyph ?>D E<?php echo $glyph ?>E F<?php echo $glyph ?>F G<?php echo $glyph ?>G H<?php echo $glyph ?>H I<?php echo $glyph ?>I J<?php echo $glyph ?>J K<?php echo $glyph ?>K L<?php echo $glyph ?>L M<?php echo $glyph ?>M N<?php echo $glyph ?>N O<?php echo $glyph ?>O P<?php echo $glyph ?>P Q<?php echo $glyph ?>Q R<?php echo $glyph ?>R S<?php echo $glyph ?>S T<?php echo $glyph ?>T U<?php echo $glyph ?>U V<?php echo $glyph ?>V W<?php echo $glyph ?>W X<?php echo $glyph ?>X Y<?php echo $glyph ?>Y Z<?php echo $glyph ?>Z</p>
			</td>
		</tr>
	<?php } ?>
</table>

</div>