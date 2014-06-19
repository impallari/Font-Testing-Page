<div>

	<p class="sizelabel">Lowercase spacing Test: (Be sure to disable kerning when testing spacing)</p>
	<p>&nbsp;</p>
	<table>
		<?php 
		$glyphs = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
		$amigos = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
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