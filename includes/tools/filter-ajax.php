<?php 
header("Content-type: text/html; charset=utf-8");

// Class to filter the array ot text
class textFilter
{

    private $text = array();
    private $results;

    function getText( $source_string )
    {
        $source_string = preg_replace('/\s+/', ' ', trim($source_string));
        $this->text = explode( ' ', $source_string );
        $this->text = array_unique( $this->text );
        return $this;
    }

    function madefrom($glypsh_string)
    {
        if ( !empty($glypsh_string) ) {
        	$glypsh_string = preg_replace('/\s+/', '', trim($glypsh_string));
        	$regex = '/^[' . $glypsh_string . ']{5,10}$/u';
        	// echo $regex;
        	$this->text = array_slice(array_values(preg_grep($regex, $this->text)), 0);
        }
        return $this;
    }

    function having($seed)
    {
        if ( !empty($seed) ) {
	        foreach ($this->text as $key => $value) {
	        	if ( strpos( $value, $seed ) === false ) unset( $this->text[$key] );
	        }
        }
        return $this;
    }

    function not_having($seed)
    {
        if ( !empty($seed) ) {
	        foreach ($this->text as $key => $value) {
	        	if ( strpos( $value, $seed ) !== false ) unset( $this->text[$key] );
	        }
        }
        return $this;
    }

    function starting($seed)
    {
        if ( !empty($seed) ) {
	        foreach ($this->text as $key => $value) {
	        	if ( strpos( $value, $seed ) !== 0 ) unset( $this->text[$key] );
	        }
        }
        return $this;
    }

    function ending($seed)
    {
        if ( !empty($seed) ) {
	        foreach ($this->text as $key => $value) {
	        	if ( substr($value, -strlen($seed)) !== $seed ) unset( $this->text[$key] );
	        }
        }
        return $this;
    }

    function ordered()
    {
        natsort( $this->text );
        return $this;
    }

    function randomize()
    {
        shuffle( $this->text );
        return $this;
    }

    function max($max)
    {
        if ( !empty($max) ) {
        	$this->text = array_slice( $this->text, 0, $max );
        }
        return $this;
    }

    function addloon()
    {
	        $i = 0;
	        foreach ($this->text as $key => $value) {
	        	if ($i % 2) $this->text[$key] = 'Loon for '.$value.'<br/>';
	        	$i++;
	        }
	        return $this;
    }


    function count()
    {
        return count( $this->text );
    }

    function uppercase()
    {
        foreach ($this->text as $key => $value) {
        	$this->text[$key] = strtoupper($this->text[$key]);
        }
        return $this;        
    }

    function sentencecase()
    {
        foreach ($this->text as $key => $value) {
        	$this->text[$key] = ucwords($this->text[$key]);
        	// $this->text[$key] = ucfirst($this->text[$key]);
        }
        return $this;        
    }

    function somesentence()
    {
        $sentence_count = 1;
        foreach ($this->text as $key => $value) {
        	if ($sentence_count % 6 == 1 ) {
        		$this->text[$key] = ucwords($this->text[$key]);
        	}
        	$sentence_count ++;
        }
        return $this;        
    }

    function getResults()
    {
        $this->result = implode( ' ', $this->text );
        return $this->result;
    }
}

// Start Benchmark
$timer_start = microtime(true);

// Scope
$text ='';
if ( !empty( $_POST['words'] ) ) $text .= ' '.$_POST['words'];
if ( $_POST['eng_dict'] == "yes" ) {
	include ("../dictionaries/english.php");
	$text .= ' '.$english;
}
if ( $_POST['spa_dict'] == "yes" ) {
	include ("../dictionaries/spanish.php");
	$text .= ' '.$spanish;
	# $alldictionaries = $english.' '.$spanish;
}
if ( $_POST['deva_dict'] == "yes" ) {
	include ("../dictionaries/devanagari.php");
	$text .= ' '.$devangari;
	# $alldictionaries = $english.' '.$spanish;
}

// Do Stuff
$a = new textFilter();
$a->getText( $text );
if ( !empty( $_POST['filterglyphs'] ) ) $a->madefrom( $_POST['filterglyphs'] );
if ( !empty( $_POST['having'] ) ) $a->having( $_POST['having'] );
if ( !empty( $_POST['also_having'] ) ) $a->having( $_POST['also_having'] );
if ( !empty( $_POST['also_having_more'] ) ) $a->having( $_POST['also_having_more'] );
if ( !empty( $_POST['not_having'] ) ) $a->not_having( $_POST['not_having']);
if ( !empty( $_POST['also_not_having'] ) ) $a->not_having( $_POST['also_not_having']);
if ( !empty( $_POST['starting'] ) ) $a->starting( $_POST['starting'] );
if ( !empty( $_POST['ending'] ) ) $a->ending( $_POST['ending'] );
$a->randomize();
$a->max( $_POST['max'] );
if ( $_POST['sentence'] == "yes" ) $a->sentencecase();
if ( $_POST['somesentence'] == "yes" ) $a->somesentence();
if ( $_POST['uppercase'] == "yes" ) $a->uppercase();
if ( $_POST['loon'] == "yes" ) $a->addloon();

// End Benchmark
$timer_end = microtime(true) - $timer_start;


// Define Size or use default
$filtersize = 72;
if ( isset( $_POST['filtersize'] ) && !empty( $_POST['filtersize'] ) ) $filtersize = $_POST['filtersize'];

// Add background Color 040f21
if ( $_POST['loon'] == "yes" ) echo '<div style="background: #1a3351 url(\'images/stars-2.png\'); padding: 80px 40px;">';

// Render Contents
if ($filtersize >= 20 ) {

	// If font size is bigger than 20
	echo '<p class="sizelabel">'.$a->count(). ' Results';
	echo ' ('.number_format($timer_end, 2).' seconds)';
	echo '</p>';
	echo '<p style="font-size: '.$filtersize.'px;';
	if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
	if ( $_POST['loon'] == "yes" ) echo ' color: #fefefe;';
	echo '">';
	echo $a->getResults();
	echo '</p>';

} else {

	// If smaller, make multiple size preview
	echo '<p class="sizelabel">'.$a->count(). ' Results';
	echo ' ('.number_format($timer_end, 2).' seconds)';
	echo '</p>';
	echo '<table cellpadding="14" cellspacing="0" border="0">';
		echo '<tr>';;
			echo '<td valign="top">';
				echo '<p class="sizelabel">'.$filtersize.'px</p>';
				echo '<p style="font-size: '.$filtersize.'px;';
				if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
				if ( $_POST['loon'] == "yes" ) echo ' color: #fefefe;';
				echo '">';
				echo $a->getResults();
				echo '</p>';				
			echo '</td>';
			echo '<td valign="top">';
				$newSize = $filtersize - 1;
				echo '<p class="sizelabel">'.$newSize.'px</p>';
				echo '<p style="font-size: '.$newSize.'px;';
				if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
				if ( $_POST['loon'] == "yes" ) echo ' color: #fefefe;';
				echo '">';
				echo $a->getResults();
				echo '</p>';			
			echo '</td>';
			echo '<td valign="top">';
				$newSize = $filtersize - 2;
				echo '<p class="sizelabel">'.$newSize.'px</p>';
				echo '<p style="font-size: '.$newSize.'px;';
				if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
				if ( $_POST['loon'] == "yes" ) echo ' color: #fefefe;';
				echo '">';
				echo $a->getResults();
				echo '</p>';				
			echo '</td>';
		echo '</tr>';
		echo '<tr>';			
			echo '<td valign="top">';
				$newSize = $filtersize - 3;
				echo '<p class="sizelabel">'.$newSize.'px</p>';
				echo '<p style="font-size: '.$newSize.'px;';
				if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
				if ( $_POST['loon'] == "yes" ) echo ' color: #fefefe;';
				echo '">';
				echo $a->getResults();
				echo '</p>';				
			echo '</td>';			
			echo '<td valign="top">';
				$newSize = $filtersize - 4;
				echo '<p class="sizelabel">'.$newSize.'px</p>';
				echo '<p style="font-size: '.$newSize.'px;';
				if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
				if ( $_POST['loon'] == "yes" ) echo ' color: #fefefe;';
				echo '">';
				echo $a->getResults();
				echo '</p>';				
			echo '</td>';
			echo '<td valign="top">';
				$newSize = $filtersize - 5;
				echo '<p class="sizelabel">'.$newSize.'px</p>';
				echo '<p style="font-size: '.$newSize.'px;';
				if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
				if ( $_POST['loon'] == "yes" ) echo ' color: #fefefe;';
				echo '">';
				echo $a->getResults();
				echo '</p>';				
			echo '</td>';							
		echo '</tr>';
	echo '</table>';
	echo '<table cellpadding="14" cellspacing="0" border="0">';
		echo '<tr>';			
			echo '<td valign="top">';
				$newSize = 28;
				echo '<p class="sizelabel">'.$newSize.'px</p>';
				echo '<p style="font-size: '.$newSize.'px;';
				if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
				if ( $_POST['loon'] == "yes" ) echo ' color: #fefefe;';
				echo '">';
				echo $a->getResults();
				echo '</p>';				
			echo '</td>';						
			echo '<td valign="top">';
				$newSize = 20;
				echo '<p class="sizelabel">'.$newSize.'px</p>';
				echo '<p style="font-size: '.$newSize.'px;';
				if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
				if ( $_POST['loon'] == "yes" ) echo ' color: #fefefe;';
				echo '">';
				echo $a->getResults();
				echo '</p>';				
			echo '</td>';			
		echo '</tr>';
	echo '</table>';

}

// Add background Coor
if ( $_POST['loon'] == "yes" ) echo '</div>';

//echo '<pre>';
//print_r($_POST);
//echo $a->getResults();
//echo '</pre>';

?>