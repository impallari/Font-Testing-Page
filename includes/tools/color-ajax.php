<?php 
header("Content-type: text/html; charset=utf-8");

if (isset($_POST['gridglyphs']) && !empty($_POST['gridglyphs']) ) {

	if (isset($_POST['gridtamanio']) && !empty($_POST['gridtamanio']) ) {
		$tamanio = $_POST['gridtamanio'];
	} else {
		$tamanio = 40;
	}

	$limpio = trim($_POST['gridglyphs']);
	
	$letras = preg_split('//u', $limpio, -1, PREG_SPLIT_NO_EMPTY);
	$letras = array_diff($letras, array(' '));
		
	$padding_top = $tamanio * 0.7;
	$padding_sides = $tamanio * 0.8;
	
?>

	<table width="100%" cellspacing="0" cellpadding="14" border="0">
		<tr>
			<!--
			<td style="border: 1px solid #333; padding: <?php echo $padding_top ?>px <?php echo $padding_sides ?>px;">
			-->
			<td>
			<?php 
			for ($i = 0; $i <= count($letras); $i++) {
				echo '<p style="font-size: '.$tamanio.'px;">';
				foreach ($letras as $key => $value) {
					echo $value.' ';
				}
				echo '</p>';
				
				$pasa = array_shift($letras);
				$letras[] = $pasa;
			}
			?>
			</td>
		</tr>
	</table>

<?php 
}
?>