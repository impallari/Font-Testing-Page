<?php 
header("Content-type: text/html; charset=utf-8");
mb_internal_encoding('UTF-8'); // Modo UTF-8

function mb_str_split_renamed( $string ) {
    return preg_split('/(?<!^)(?!$)/u', $string );
} 

function my_array_find($needle, $haystack)
{
   foreach ($haystack as $item) {
      if (strpos($item, $needle) !== FALSE) {
         return $item;
         break;
      }
   }
}

# Default Values
$analizerone = 'No text';
if ( isset( $_POST['analizerone'] ) && !empty( $_POST['analizerone'] ) ) $analizerone = $_POST['analizerone'];
$analizerone = strtolower($analizerone);

$analizertwo = 'No text';
if ( isset( $_POST['analizertwo'] ) && !empty( $_POST['analizertwo'] ) ) $analizertwo = $_POST['analizertwo'];
$analizertwo = strtolower($analizertwo);


echo '<table cellpadding="4" border="1">';

	echo '<tr>';
		echo '<td valign="top">Words</td>';
		echo '<td valign="top">Letters</td>';
		echo '<td valign="top">Occurrences</td>';
		echo '<td valign="top">Frequency</td>';
		echo '<td valign="top">Ordenadas</td>';
		
		echo '<td valign="top">Words</td>';
		echo '<td valign="top">Letters</td>';
		echo '<td valign="top">Occurrences</td>';
		echo '<td valign="top">Frequency</td>';	
		echo '<td valign="top">Ordenadas</td>';				
	echo '</tr>';					

	echo '<tr>';

		echo '<td valign="top">';
			echo '<p>'.str_word_count($analizerone).'<p>';
		echo '</td>';
		
		echo '<td valign="top">';
			$total_letters = strlen(str_replace(' ', '', $analizerone));
			echo '<p>'.$total_letters.'<p>';
		echo '</td>';
		
		echo '<td valign="top">';
			$vocales = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
			foreach ($vocales as $letra) {
				$cuenta = substr_count($analizerone, $letra);
				if ($cuenta == 0) {
					echo '<p>'.$letra.': -</p>';
				} else {
					echo '<p>'.$letra.': '.$cuenta.'</p>';
				}
			}
		echo '</td>';
		
		echo '<td valign="top">';
			$vocales = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
			foreach ($vocales as $letra) {
				$cuenta = substr_count($analizerone, $letra);
				if ($cuenta == 0) {
					echo '<p style="color:red;">-</p>';
				} else {
					$frequency = round($cuenta * 100 / $total_letters, 1);
					if ($frequency < 1) {
						echo '<p style="color:red;">'.$frequency.'%</p>';
					} else {
						echo '<p>'.$frequency.'%</p>';
					}
				}
			}
		echo '</td>';		

		echo '<td valign="top">';
			# Creo un Array limpito, con Frecuencia Zero
			$made_from = array_unique(mb_str_split($analizerone)); 
    	$new = my_array_find(' ', $made_from);
    	if (($key = array_search($new, $made_from)) !== false) unset($made_from[$key]);
			$made_from = array_flip($made_from);
			ksort($made_from);
			foreach ($made_from as $key => $value) {
				$made_from_as_array[$key] = 0;	
			}
			foreach ($made_from_as_array as $letra => $occurencias) {
				$made_from_as_array[$letra] = substr_count($analizerone, $letra);
			}
			natsort($made_from_as_array);
			echo '<pre>';
			print_r($made_from_as_array);
			echo '</pre>';
		echo '</td>';
		
		####################
		
		echo '<td valign="top">';
			echo '<p>'.str_word_count($analizertwo).'<p>';
		echo '</td>';
		
		echo '<td valign="top">';
			$total_letters = strlen(str_replace(' ', '', $analizertwo));
			echo '<p>'.$total_letters.'<p>';
		echo '</td>';
		
		echo '<td valign="top">';
			$vocales = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
			foreach ($vocales as $letra) {
				$cuenta = substr_count($analizertwo, $letra);
				if ($cuenta == 0) {
					echo '<p>'.$letra.': -</p>';
				} else {
					echo '<p>'.$letra.': '.$cuenta.'</p>';
				}
			}
		echo '</td>';
		
		echo '<td valign="top">';
			$vocales = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
			foreach ($vocales as $letra) {
				$cuenta = substr_count($analizertwo, $letra);
				if ($cuenta == 0) {
					echo '<p style="color:red;">-</p>';
				} else {
					$frequency = round($cuenta * 100 / $total_letters, 1);
					if ($frequency < 1) {
						echo '<p style="color:red;">'.$frequency.'%</p>';
					} else {
						echo '<p>'.$frequency.'%</p>';
					}				}
			}
		echo '</td>';
		
		echo '<td valign="top">';
			# Creo un Array limpito, con Frecuencia Zero
			$made_from = array_unique(mb_str_split_renamed($analizertwo)); 
    	$new = my_array_find(' ', $made_from);
    	if (($key = array_search($new, $made_from)) !== false) unset($made_from[$key]);
			$made_from = array_flip($made_from);
			ksort($made_from);
			foreach ($made_from as $key => $value) {
				$made_from_as_array[$key] = 0;	
			}
			foreach ($made_from_as_array as $letra => $occurencias) {
				$made_from_as_array[$letra] = substr_count($analizertwo, $letra);
			}
			natsort($made_from_as_array);
			echo '<pre>';
			print_r($made_from_as_array);
			echo '</pre>';
		echo '</td>';
		
	echo '</tr>';

	echo '<tr>';
		echo '<td colspan="5" valign="top" width="50%"><p>'.$analizerone.'</p></td>';
		echo '<td colspan="5" valign="top" width="50%"><p>'.$analizertwo.'</p></td>';
	echo '</tr>';

echo '</table>';
?>