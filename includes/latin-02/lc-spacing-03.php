<div>
	
	<table border="0" cellpadding="10" cellspacing="0">
	<?php 
	$size = 80;
	$glyphs = array('n', 'o', 'a','b','c','d','e','f','g','h','i','j','k','l','m', 'p','q','r','s','t','u','v','w','x','y','z');
	
	foreach ($glyphs as $glyph) {
	?>
		<tr>
			<td valign="top" style="white-space: nowrap"><p style="font-size: <?php echo $size ?>px;">n<?php echo $glyph ?>n o<?php echo $glyph ?>o</p></td>
			<td valign="top"><p style="font-size: <?php echo $size ?>px;">a<?php echo $glyph ?>a b<?php echo $glyph ?>b c<?php echo $glyph ?>c d<?php echo $glyph ?>d e<?php echo $glyph ?>e f<?php echo $glyph ?>f g<?php echo $glyph ?>g h<?php echo $glyph ?>h i<?php echo $glyph ?>i j<?php echo $glyph ?>j k<?php echo $glyph ?>k l<?php echo $glyph ?>l m<?php echo $glyph ?>m n<?php echo $glyph ?>n o<?php echo $glyph ?>o p<?php echo $glyph ?>p q<?php echo $glyph ?>q r<?php echo $glyph ?>r s<?php echo $glyph ?>s t<?php echo $glyph ?>t u<?php echo $glyph ?>u v<?php echo $glyph ?>v w<?php echo $glyph ?>w x<?php echo $glyph ?>x y<?php echo $glyph ?>y z<?php echo $glyph ?>z</p></td>
		</tr>
		<tr><td colspan="2">&nbsp;</td></tr>	
	<?php } ?>
</table>

</div>