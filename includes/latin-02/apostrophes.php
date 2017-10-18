<div contenteditable="true">
	
	<table width="100%" cellpadding="12">
		<tr>
			<td width="50%">
				<p class="sizelabel">Paris Metro Stations using /quoterigth.</p>
				<p style="font-size: 38px;">
				Château d’Eau<br />
				Chaussée d’Antin<br />
				L’Échat<br />
				Église d’Auteuil<br />
				Fort d’Aubervilliers<br />
				Gare d’Austerlitz<br />
				Gare de l’Est<br />
				Mairie d’Ivry<br />
				Porte d’Auteuil<br />
				Porte d’Ivry<br />
				Porte d’Orléans<br />
				Trinité – d’Estienne d’Orves</p>
			</td>
			<td width="50%">
				<p class="sizelabel">Paris Metro Stations using /quotesingle.</p>
				<p style="font-size: 38px;">
				Château d'Eau<br />
				Chaussée d'Antin<br />
				L'Échat<br />
				Église d'Auteuil<br />
				Fort d'Aubervilliers<br />
				Gare d'Austerlitz<br />
				Gare de l'Est<br />
				Mairie d'Ivry<br />
				Porte d'Auteuil<br />
				Porte d'Ivry<br />
				Porte d'Orléans<br />
				Trinité – d'Estienne d'Orves</p>
			</td>
		</tr>
		<tr>
			<td width="50%">
				<p class="sizelabel">Using /quoterigth (aka curly quotes, aka smart quotes).</p>
				<p style="font-size: 40px;">
				he’d<br />
				he’ll<br />
				he’s<br />
				we’re<br />
				we’ve<br />
				who’d<br />
				who’ll<br />
				who’re<br />
				who’s<br />
				who’ve<br />
				you’d<br />
				you’ll<br />
				you’re<br />
				you’ve<br />
				aren’t<br />
				it’s<br />
				what’ll<br />
				what’re<br />
				what’ve<br />
				they’d<br />
				they’ll<br />
				they’re<br />
				they’ve<br />
				I’d<br />
				I’ll<br />
				I’m<br />
				I’ve<br />
				60’s</p>	
			</td>
			<td width="50%">
				<p class="sizelabel">Using /quotesingle (aka straight quotes, aka dumb quotes).</p>
				<p style="font-size: 40px;">
				he'd<br />
				he'll<br />
				he's<br />
				we're<br />
				we've<br />
				who'd<br />
				who'll<br />
				who're<br />
				who's<br />
				who've<br />
				you'd<br />
				you'll<br />
				you're<br />
				you've<br />
				aren't<br />
				it's<br />
				what'll<br />
				what're<br />
				what've<br />
				they'd<br />
				they'll<br />
				they're<br />
				they've<br />
				I'd<br />
				I'll<br />
				I'm<br />
				I've<br />
				60's</p>	
			</td>
		</tr>
	</table>
	
	<p>&nbsp;</p>
	
	<?php 
	$list_lowercase = array('a','b','c','d','e','f','g','h','i','j','k','l','m', 'n', 'o', 'p','q','r','s','t','u','v','w','x','y','z');
	$list_uppercase = array('A','B','C','D','E','F','G','H','I','J','K','L','M', 'N', 'O', 'P','Q','R','S','T','U','V','W','X','Y','Z');
	$list_numbers = array(0,1,2,3,4,5,6,7,8,9)
	?>
	
		<table width="100%" cellpadding="12">
			<tr>
			
				<td valign="top">
					<p style="font-size: 18px;">
					<?php
					foreach ($list_lowercase as $value1) {
						foreach ($list_lowercase as $value2) {
							echo 'nonn'.$value1.'’'.$value2.'nnon<br />';	
						}
					}
					?>
					</p>
				</td>
				<td valign="top">
					<p style="font-size: 18px;">
					<?php
					foreach ($list_lowercase as $value1) {
						foreach ($list_uppercase as $value2) {
							echo 'nonn'.$value1.'’'.$value2.'nnon<br />';	
						}
					}
					?>
					</p>
				</td>
				<td valign="top">
					<p style="font-size: 18px;">
					<?php
					foreach ($list_uppercase as $value1) {
						foreach ($list_lowercase as $value2) {
							echo 'nonn'.$value1.'’'.$value2.'nnon<br />';	
						}
					}
					?>
					</p>
				</td>
				<td valign="top">
					<p style="font-size: 18px;">
					<?php
					foreach ($list_uppercase as $value1) {
						foreach ($list_uppercase as $value2) {
							echo 'HOHH'.$value1.'’'.$value2.'HHOH<br />';	
						}
					}
					?>
					</p>
				</td>
				<td valign="top">
					<p style="font-size: 18px;">
					<?php
					foreach ($list_numbers as $value1) {
						foreach ($list_numbers as $value2) {
							echo '0100'.$value1.'’'.$value2.'0010<br />';	
						}
					}
					?>
					</p>
				</td>				

				<td valign="top">
					<p style="font-size: 18px;">
					<?php
					foreach ($list_lowercase as $value1) {
						foreach ($list_lowercase as $value2) {
							echo 'nonn'.$value1.'\''.$value2.'nnon<br />';	
						}
					}
					?>
					</p>
				</td>
				<td valign="top">
					<p style="font-size: 18px;">
					<?php
					foreach ($list_lowercase as $value1) {
						foreach ($list_uppercase as $value2) {
							echo 'nonn'.$value1.'\''.$value2.'nnon<br />';	
						}
					}
					?>
					</p>
				</td>
				<td valign="top">
					<p style="font-size: 18px;">
					<?php
					foreach ($list_uppercase as $value1) {
						foreach ($list_lowercase as $value2) {
							echo 'nonn'.$value1.'\''.$value2.'nnon<br />';	
						}
					}
					?>
					</p>
				</td>
				<td valign="top">
					<p style="font-size: 18px;">
					<?php
					foreach ($list_uppercase as $value1) {
						foreach ($list_uppercase as $value2) {
							echo 'HOHH'.$value1.'\''.$value2.'HHOH<br />';	
						}
					}
					?>
					</p>
				</td>
				<td valign="top">
					<p style="font-size: 18px;">
					<?php
					foreach ($list_numbers as $value1) {
						foreach ($list_numbers as $value2) {
							echo '0100'.$value1.'\''.$value2.'0010<br />';	
						}
					}
					?>
					</p>
				</td>				
																				
			</tr>		
		</table>

</div>