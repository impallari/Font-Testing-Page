<?php 
header("Content-type: text/html; charset=utf-8");

if (isset($_POST['nnxnnglyphs']) && !empty($_POST['nnxnnglyphs']) ) {

	if (isset($_POST['nnxnntamanio']) && !empty($_POST['nnxnntamanio']) ) {
		$tamanio = $_POST['nnxnntamanio'];
	} else {
		$tamanio = 40;
	}

	if (isset($_POST['nnxnncase']) && !empty($_POST['nnxnncase']) ) {
		$case = $_POST['nnxnncase'];
	} else {
		$case = "Sin Value";
	}

	$limpio = trim($_POST['nnxnnglyphs']);
	
	$letras = preg_split('//u', $limpio, -1, PREG_SPLIT_NO_EMPTY);
	$letras = array_diff($letras, array(' '));
		
	$padding_top = $tamanio * 0.7;
	$padding_sides = $tamanio * 0.8;
	
?>

	<table cellspacing="0" cellpadding="<?php echo $tamanio / 6; ?>" border="0">
		<?php 
		foreach ($letras as $key => $value) {
			if ($case == 'lower') {
				echo '<tr>';
					echo '<td>';
						echo '<p style="font-size: '.$tamanio.'px;">';
						echo 'nn'.$value.'nn';
						echo '</p>';
					echo '</td>';
					echo '<td>';
						echo '<p style="font-size: '.$tamanio.'px;">';
						echo 'oo'.$value.'oo';
						echo '</p>';
					echo '</td>';
					echo '<td>';
						echo '<p style="font-size: '.$tamanio.'px;">';
						echo 'nn'.$value.'oo'.$value.'nn';
						echo '</p>';
					echo '</td>';
					echo '<td>';
						echo '<p style="font-size: '.$tamanio.'px;">';
						echo 'oo'.$value.'nn'.$value.'oo';
						echo '</p>';
					echo '</td>';
			echo '</tr>';
			} else {
				echo '<tr>';
					echo '<td>';
						echo '<p style="font-size: '.$tamanio.'px;">';
						echo 'HH'.$value.'HH';
						echo '</p>';
					echo '</td>';
					echo '<td>';
						echo '<p style="font-size: '.$tamanio.'px;">';
						echo 'OO'.$value.'OO';
						echo '</p>';
					echo '</td>';
					echo '<td>';
						echo '<p style="font-size: '.$tamanio.'px;">';
						echo 'HH'.$value.'OO'.$value.'HH';
						echo '</p>';
					echo '</td>';
					echo '<td>';
						echo '<p style="font-size: '.$tamanio.'px;">';
						echo 'OO'.$value.'HH'.$value.'OO';
						echo '</p>';
					echo '</td>';
				echo '</tr>';
			}
		}
		?>
	</table>

<?php 
}
?>