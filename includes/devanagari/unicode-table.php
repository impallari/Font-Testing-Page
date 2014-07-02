<div style="width: 920px;">

	<p class="sizelabel">Unicode v7 - Table View</p>
	
	<p>&nbsp;</p>
		
	<table cellpadding="16" cellspacing="0" border="0" class="unicode">
		<tr>
			<td>&nbsp;</td>
			<td>090</td>
			<td>091</td>
			<td>092</td>
			<td>093</td>
			<td>094</td>
			<td>095</td>
			<td>096</td>
			<td>097</td>
		</tr>
		<?php
		// 0 1 2 3 4 5 6 7 8 9
		for ($i = 0; $i <= 9; $i++) {
			echo '<tr>';
				echo '<td>'.$i.'</td>';
			for ($u = 0; $u <= 7; $u++) {				
				echo '<td class="bigslot">&#x09'.$u.$i.';</td>';
			}
			echo '</tr>';
			echo "\n";		
		}
		// A B C D E F
		$mylist = array('A', 'B', 'C', 'D', 'E', 'F');
		foreach ($mylist as $value) {
			echo '<tr>';
				echo '<td>'.$value.'</td>';
			for ($u = 0; $u <= 7; $u++) {				
					echo '<td class="bigslot">&#x09'.$u.$value.';</td>';
			}
			echo '</tr>';
			echo "\n";		
		}
		?>
	</table>

</div>