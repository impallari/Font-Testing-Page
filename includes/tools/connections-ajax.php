<?php 
header("Content-type: text/html; charset=utf-8");

if (isset($_POST['connectionglyphs']) && !empty($_POST['connectionglyphs']) ) {

	if (isset($_POST['connectiontamanio']) && !empty($_POST['connectiontamanio']) ) {
		$tamanio = $_POST['connectiontamanio'];
	} else {
		$tamanio = 30;
	}

	$limpio = trim($_POST['connectionglyphs']);
	
	$letras = preg_split('//u', $limpio, -1, PREG_SPLIT_NO_EMPTY);
	$letras = array_diff($letras, array(' '));
		
	$padding_top = $tamanio * 0.7;
	$padding_sides = $tamanio * 0.8;
	
?>

	<table>
		<?php
		$bases = $letras;
		$amigos = $bases;

		foreach ($amigos as $amigo) {
			echo '<tr>';
			foreach ($bases as $base) {
				echo '<td><p style="font-size: '.$tamanio.'px;">'.$amigo.$base.$amigo.'</p></td><td><p>&nbsp;</p></td>';
			}
			echo '</tr>';
		}
		?>
	</table>

<?php 
}
?>