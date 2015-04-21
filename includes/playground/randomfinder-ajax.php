<?php 
header("Content-type: text/html; charset=utf-8");

# Current Winner
$old_phrase = 'accountably acquits allele alliance amazon amortizing anarchial antecedents apocryphal apotheosized appearances arborolater arioso asynchronously attains audaciousness automat backwood bakemeats befriender behest belays benzoated bickered bifid bigwig bishop bodiless boiled bothered brainstems brushworks buffetings cacoepy calabash cancerophobe candytufts carabiniers celebrant cellar chanson cheapest chromophilous churchwomen closed-minded coleslaw colonist connateness connivingly conservatories cotyledonous crosscurrents cuprous curlpaper custard cylindrite czar datelines dative defalcation dengue descension detersion devouring dextrality dextroversion diachronic dicotyledon diminutive dinghy discourtesies disinvited disorganization disrelish dissoluteness divergent dormantly draff dropleaf dull eagerness ecstatically elementary emotiometabolic encryption endearing every exposit extreme felling fiddler fjords flake forcibly formulae gerontal girasol glens graveolence guideboard hachure hacker haematuria hawse heck heroically herrings hierarchically hispanics homelikeness hoodwink hydrazin illegalities immolation imparity incant indevotional indexable inexpectant inexpugnable infants insoluble intendancy interfering intonated invincible irrelevancy jawsmith jobbernowl joule journalistic joyride joyrider judice juniors kettle keystroke kilocycle kithless kitten lawnroller legitimizing levity lief list lockstep loll lovage loveable lovelornness lowthoughted makeready margins maximizes mediocreness megrims melodramas menadione menialness mica mimish minimalism misalign misaline misdiagnoses mishaps mitochondrion modulator mole moneybags motorizing moveless multinationals mutating nacreousness need nidorous noncommunist oaks objections obsequiousness occipitalis octans oglers oilkettle outfall overdistended overprotection overrighteous palingenesis patriarchate pebbled pencils petiolule philogynous phrased phytotopography pikes plains pocketful polemical prepotency pronunciative prows prudential pruners quinquenerval quinquevalvous quisqualis rallies reboard refining refractor reindeer relies reprogramming rescind respectfully restudying reunions ringleaders roguishly rubdown sacrosanctness salivant satisfyingly scamper schlep seamless searchlight secularism sepulture sequentially shadowboxing shameless shrines siskin sitz slant snowsprinkled spadix spasm splitsaw squirrely stemming styli subsoil supe surged suttee swamped swim swivel sycophant symphonious synaptic teachy tegumental tester thews toiling tornadic torquers tortoiseshell tungi turbulently turmoils twolevel twotimer unavailability uncullible unfenced unforgoable uniglobular unleash unlikable unscramble unseat unsuccessive untracked uproariously uptick venerates vial vibrio vitrification void warmaking wastethrift wattage weakest weakliness week wellventilated widdershins wienie winsomely wonderworking woodlander yodel';
$old_phrase_length = 2929 ;

# Default Values
$randomfinder_number = 40;
if ( isset( $_POST['randomfinder_number'] ) && !empty( $_POST['randomfinder_number'] ) ) $randomfinder_number = $_POST['randomfinder_number'];

# Get a Dictionary
include ("../dictionaries/english.php");
$text .= ' '.$english;
# include ("../dictionaries/spanish.php");
# $text .= ' '.$spanish;
$text = preg_replace('/\s+/', ' ', trim($text));
$text = explode( ' ', $text );
$regex = '/^.{4,15}$/';
$text = array_slice(array_values(preg_grep($regex, $text)), 0);
$text = array_unique( $text );

# Functions
function get_new_phrase($text) {	
	$new_phrase = implode(' ', array_rand(array_flip($text), 300));
	return $new_phrase;
}

function count_glyphs($frase="hola") {
	$letras = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
	foreach ($letras as $letra) {
		$cuenta = substr_count($frase, $letra);
		# echo '<p>Letra '.$letra.': '.$cuenta.'</p>';
		if ( $cuenta < 10 ) return false;
	}
	$nuevo_largo = strlen($frase);
	return $nuevo_largo;
}

# Show Current Winner
echo '<p>The Actual Champion is:</p>';
echo '<table cellpadding="4">';
	echo '<tr>';
		echo '<td valign="top">Length</td>';
		echo '<td valign="top">Vowels</td>';
		echo '<td valign="top">Consonants</td>';
		echo '<td valign="top">Text</td>';
	echo '</tr>';
	echo '<tr>';
		echo '<td valign="top">';
			echo '<p>'.$old_phrase_length.'<p>';
		echo '</td>';
		echo '<td valign="top">';
			$vocales = array('a', 'e', 'i', 'o', 'u');
			foreach ($vocales as $letra) {
				$cuenta = substr_count($old_phrase, $letra);
				echo '<p>'.$letra.': '.$cuenta.'</p>';
			}
		echo '</td>';
		echo '<td valign="top">';
			$consonantes = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z');
			foreach ($consonantes as $letra) {
				$cuenta = substr_count($old_phrase, $letra);
				echo '<p>'.$letra.': '.$cuenta.'</p>';
			}
		echo '</td>';
		echo '<td valign="top">';
			echo '<p>'.$old_phrase.'</p>';
		echo '</td>';
	echo '</tr>';
echo '</table>';
echo '<hr/>';

# Contenders
for ($x = 1; $x <= $randomfinder_number; $x++) {
	echo '<p>Contender '.$x.':</p>';
	$new_phrase = get_new_phrase($text);
	$new_phrase_length = count_glyphs($new_phrase);
	if ($new_phrase_length != FALSE) {
		echo '<p>'.$new_phrase.'</p>';
		echo '<p><b>Tenemos una buena!</b><p>';
		echo '<p>Largo: '.$new_phrase_length.'<p>';
		if ($new_phrase_length < $old_phrase_length) {
			echo '<p><b>La nueva es mejor!</b></p>';
			$old_phrase = $new_phrase;
			$old_phrase_length = $new_phrase_length;
		}
	} else {
		echo '<p>NOT GOOD, some letters appears less than 10 times</p>';
	}
	echo '<hr/>';
}

# Winner
echo '<h1>And the Winner is:</h1>';
echo '<table cellpadding="4">';
	echo '<tr>';
		echo '<td valign="top">Length</td>';
		echo '<td valign="top">Vowels</td>';
		echo '<td valign="top">Consonants</td>';
		echo '<td valign="top">Text</td>';
	echo '</tr>';
	echo '<tr>';
		echo '<td valign="top">';
			echo '<p>'.$old_phrase_length.'<p>';
		echo '</td>';
		echo '<td valign="top">';
			$vocales = array('a', 'e', 'i', 'o', 'u');
			foreach ($vocales as $letra) {
				$cuenta = substr_count($old_phrase, $letra);
				echo '<p>'.$letra.': '.$cuenta.'</p>';
			}
		echo '</td>';
		echo '<td valign="top">';
			$consonantes = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z');
			foreach ($consonantes as $letra) {
				$cuenta = substr_count($old_phrase, $letra);
				echo '<p>'.$letra.': '.$cuenta.'</p>';
			}
		echo '</td>';
		echo '<td valign="top">';
			echo '<p>'.$old_phrase.'</p>';
		echo '</td>';
	echo '</tr>';
echo '</table>';
echo '<hr/>';
?>