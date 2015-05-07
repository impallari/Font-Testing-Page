<?php 
header("Content-type: text/html; charset=utf-8");

if (isset($_POST['nnxnnglyphs']) && !empty($_POST['nnxnnglyphs']) ) {

	if (isset($_POST['nnxnntamanio']) && !empty($_POST['nnxnntamanio']) ) {
		$tamanio = $_POST['nnxnntamanio'];
	} else {
		$tamanio = 40;
	}

	if ( $_POST['nnxnncase'] == "lower") {
		$n = 'n';
		$o = 'o';
	} elseif ( $_POST['nnxnncase'] == "upper"){
		$n = 'H';
		$o = 'O';
	} else {
		$n = '1';
		$o = '0';
	}

	$limpio = trim($_POST['nnxnnglyphs']);
	
	$letras = preg_split('//u', $limpio, -1, PREG_SPLIT_NO_EMPTY);
	$letras = array_diff($letras, array(' '));

	if ( $_POST['nnxnnmode'] == "short") {
		// Short Mode
		foreach ($letras as $key => $value) {
			echo '<p style="font-size: '.$tamanio.'px;">'.$n.$n.$value.$n.$o.$n.$o.$value.$o.$o.'</p>';
		}
		// End Short Mode
	} else {
		// Long Mode
		echo '<table cellspacing="0" cellpadding="'.($tamanio / 8).'" border="0">';
			foreach ($letras as $key => $value) {
					echo '<tr>';
	
						echo '<td>';
							echo '<p style="font-size: '.$tamanio.'px;">';
							echo $o.$o.$value.$o.$o;
							echo '</p>';
						echo '</td>';					
						
						echo '<td>';
							echo '<p style="font-size: '.$tamanio.'px;">';
							echo $n.$n.$value.$n.$n;
							echo '</p>';
						echo '</td>';
						
						echo '<td>';
							echo '<p style="font-size: '.$tamanio.'px;">';
							echo $n.$n.$value.$o.$o;
							echo '</p>';
						echo '</td>';
						
						echo '<td>';
							echo '<p style="font-size: '.$tamanio.'px;">';
							echo $o.$o.$value.$n.$n;
							echo '</p>';
						echo '</td>';
						
				echo '</tr>';
			}
		echo '</table>';
		// End Long Mode
	}
	
}
?>