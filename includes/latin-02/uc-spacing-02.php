<div>

	<p class="sizelabel">Spacing Test: (Be sure to disable kerning when testing spacing)</p>
	<p>&nbsp;</p>
	<table>
		<?php 
		$glyphs = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
		$amigos = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
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