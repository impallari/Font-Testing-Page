<div>

	<p class="sizelabel">Spacing Test: (Be sure to disable kerning when testing spacing)</p>
	<p>&nbsp;</p>
	<table>
		<?php
		 
		$glyphs = array('0', '1', '2','3','4','5','6','7','8','9');
		$amigos = array('0', '1', '2','3','4','5','6','7','8','9');
		$size = 30;
		foreach ($amigos as $amigo) {
			echo '<tr>';
			foreach ($glyphs as $glyph) {
				echo '<td><p style="font-size: '.$size.'px;">'.$amigo.$glyph.$amigo.'</p></td><td><p>&nbsp;</p></td>';
			}
			echo '</tr>';
		}
		?>
	</table>

</div>
