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
        	$regex = '/^[' . $glypsh_string . ']{4,14}$/u';
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
        	if ($sentence_count % 5 == 1 ) {
        		$this->text[$key] = ucwords($this->text[$key]);
        	}
        	if ($sentence_count % 18 == 1 ) {
        		$this->text[$key] = strtoupper($this->text[$key]);
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
if ( $_POST['sidebyside'] == "no" ) {	
	if ( $_POST['uppercase'] == "yes" ) $a->uppercase();
}
if ( isset($_POST['loon']) == "yes" ) $a->addloon();

// End Benchmark
$timer_end = microtime(true) - $timer_start;

// Define Size or use default
$filtersize = 72;
if ( isset( $_POST['filtersize'] ) && !empty( $_POST['filtersize'] ) ) $filtersize = $_POST['filtersize'];

function change_order($words) {
	$words = explode(' ', $words);
	shuffle($words);
	$words = implode(' ', $words);
	return $words;
}

// Add background Color 040f21
if ( isset($_POST['loon']) == "yes" ) echo '<div style="background: #1a3351 url(\'images/stars-2.png\'); padding: 80px 40px;">';

// Render Contents
if ($filtersize <= 19 ) {
	// Smaller than 20, multi-size preview
	echo '<p class="sizelabel">'.$a->count(). ' Results';
	echo ' ('.number_format($timer_end, 2).' seconds)';
	echo '</p>';
	echo '<table cellpadding="14" cellspacing="0" border="0">';
		echo '<tr>';;
			echo '<td valign="top">';
				echo '<p class="sizelabel">'.$filtersize.'px</p>';
				echo '<p style="font-size: '.$filtersize.'px;';
				if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
				echo '">';
				echo $a->getResults();
				echo '</p>';				
			echo '</td>';
			echo '<td valign="top">';
				$newSize = $filtersize - 1;
				echo '<p class="sizelabel">'.$newSize.'px</p>';
				echo '<p style="font-size: '.$newSize.'px;';
				if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
				echo '">';
				echo $a->getResults();
				echo '</p>';			
			echo '</td>';
			echo '<td valign="top">';
				$newSize = $filtersize - 2;
				echo '<p class="sizelabel">'.$newSize.'px</p>';
				echo '<p style="font-size: '.$newSize.'px;';
				if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
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
				echo '">';
				echo $a->getResults();
				echo '</p>';				
			echo '</td>';			
			echo '<td valign="top">';
				$newSize = $filtersize - 4;
				echo '<p class="sizelabel">'.$newSize.'px</p>';
				echo '<p style="font-size: '.$newSize.'px;';
				if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
				echo '">';
				echo $a->getResults();
				echo '</p>';				
			echo '</td>';
			echo '<td valign="top">';
				$newSize = $filtersize - 5;
				echo '<p class="sizelabel">'.$newSize.'px</p>';
				echo '<p style="font-size: '.$newSize.'px;';
				if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
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
				echo '">';
				echo $a->getResults();
				echo '</p>';				
			echo '</td>';						
			echo '<td valign="top">';
				$newSize = 20;
				echo '<p class="sizelabel">'.$newSize.'px</p>';
				echo '<p style="font-size: '.$newSize.'px;';
				if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
				echo '">';
				echo $a->getResults();
				echo '</p>';				
			echo '</td>';			
		echo '</tr>';
	echo '</table>';
} elseif ($filtersize >= 300 ) {
	// Bigger than 300, Full Scale preview
	echo '<div style="white-space: nowrap; overflow: hidden; width: 100%;">';
	echo '<p class="sizelabel">200px - '.$a->count(). ' Results ';
	echo ' ('.number_format($timer_end, 2).' seconds)';
	echo '</p>';	echo '<p style="font-size: 200px;">'.$a->getResults().'</p>';

	echo '<p class="sizelabel">168px</p>';
	echo '<p style="font-size: 168px;">'.change_order($a->getResults()).'</p>';	
	echo '<p class="sizelabel">142px</p>';
	echo '<p style="font-size: 142px;">'.change_order($a->getResults()).'</p>';	
	echo '<p class="sizelabel">120px</p>';
	echo '<p style="font-size: 120px;">'.change_order($a->getResults()).'</p>';	
	echo '<p class="sizelabel">100px</p>';
	echo '<p style="font-size: 100px;">'.change_order($a->getResults()).'</p>';	
	echo '<p class="sizelabel">84px</p>';
	echo '<p style="font-size: 84px;">'.change_order($a->getResults()).'</p>';	
	echo '<p class="sizelabel">70px</p>';
	echo '<p style="font-size: 70px;">'.change_order($a->getResults()).'</p>';	
	echo '<p class="sizelabel">60px</p>';
	echo '<p style="font-size: 60px;">'.change_order($a->getResults()).'</p>';	
	echo '<p class="sizelabel">50px</p>';
	echo '<p style="font-size: 50px;">'.change_order($a->getResults()).'</p>';	
	echo '<p class="sizelabel">42px</p>';
	echo '<p style="font-size: 42px;">'.change_order($a->getResults()).'</p>';
	echo '<p class="sizelabel">36px</p>';
	echo '<p style="font-size: 36px;">'.change_order($a->getResults()).'</p>';
	echo '<p class="sizelabel">30px</p>';
	echo '<p style="font-size: 30px;">'.change_order($a->getResults()).'</p>';
	echo '<p class="sizelabel">28px</p>';
	echo '<p style="font-size: 28px;">'.change_order($a->getResults()).'</p>';
	echo '<p class="sizelabel">26px</p>';
	echo '<p style="font-size: 26px;">'.change_order($a->getResults()).'</p>';
	
	echo '<p class="sizelabel">24px</p>';
	echo '<p style="font-size: 24px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 24px;">'.change_order($a->getResults()).'</p>';

	echo '<p class="sizelabel">22px</p>';
	echo '<p style="font-size: 22px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 22px;">'.change_order($a->getResults()).'</p>';

	echo '<p class="sizelabel">20px</p>';
	echo '<p style="font-size: 20px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 20px;">'.change_order($a->getResults()).'</p>';

	echo '<p class="sizelabel">18px</p>';
	echo '<p style="font-size: 18px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 18px;">'.change_order($a->getResults()).'</p>';

	echo '<p class="sizelabel">16px</p>';
	echo '<p style="font-size: 16px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 16px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 16px;">'.change_order($a->getResults()).'</p>';

	echo '<p class="sizelabel">15px</p>';
	echo '<p style="font-size: 15px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 15px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 15px;">'.change_order($a->getResults()).'</p>';

	echo '<p class="sizelabel">14px</p>';
	echo '<p style="font-size: 14px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 14px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 14px;">'.change_order($a->getResults()).'</p>';
	
	echo '<p class="sizelabel">13px</p>';
	echo '<p style="font-size: 13px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 13px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 13px;">'.change_order($a->getResults()).'</p>';
	
	echo '<p class="sizelabel">12px</p>';
	echo '<p style="font-size: 12px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 12px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 12px;">'.change_order($a->getResults()).'</p>';	

	echo '<p class="sizelabel">11px</p>';
	echo '<p style="font-size: 11px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 11px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 11px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 11px;">'.change_order($a->getResults()).'</p>';
	
	echo '<p class="sizelabel">10px</p>';
	echo '<p style="font-size: 10px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 10px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 10px;">'.change_order($a->getResults()).'</p>';
	echo '<p style="font-size: 10px;">'.change_order($a->getResults()).'</p>';	

	echo '</div>';	
} elseif ($filtersize >= 200 ) {
	// Bigger than 200, Short Scale preview
	echo '<div style="white-space: nowrap; overflow: hidden; width: 100%;">';

	echo '<p class="sizelabel">200px - '.$a->count(). ' Results ';
	echo ' ('.number_format($timer_end, 2).' seconds)';
	echo '</p>';	echo '<p style="font-size: 200px;">'.$a->getResults().'</p>';

	echo '<p class="sizelabel">160px</p>';
	echo '<p style="font-size: 160px;">'.change_order($a->getResults()).'</p>';	

	echo '<p class="sizelabel">120px</p>';
	echo '<p style="font-size: 120px;">'.change_order($a->getResults()).'</p>';	

	echo '<p class="sizelabel">76px</p>';
	echo '<p style="font-size: 76px;">'.change_order($a->getResults()).'</p>';

	echo '<p class="sizelabel">46px</p>';
	echo '<p style="font-size: 46px;">'.change_order($a->getResults()).'</p>';	
	echo '<p style="font-size: 46px;">'.change_order($a->getResults()).'</p>';	

	echo '<p class="sizelabel">28px</p>';
	echo '<p style="font-size: 28px;">'.change_order($a->getResults()).'</p>';	
	echo '<p style="font-size: 28px;">'.change_order($a->getResults()).'</p>';	
	echo '<p style="font-size: 28px;">'.change_order($a->getResults()).'</p>';	

	echo '<p class="sizelabel">16px</p>';
	echo '<p style="font-size: 16px;">'.change_order($a->getResults()).'</p>';	
	echo '<p style="font-size: 16px;">'.change_order($a->getResults()).'</p>';	
	echo '<p style="font-size: 16px;">'.change_order($a->getResults()).'</p>';	
	echo '<p style="font-size: 16px;">'.change_order($a->getResults()).'</p>';	
	
	echo '</div>';		
} else {
	// Intermediate sizes, Standard Preview
	echo '<p class="sizelabel" style="margin-bottom:10px">'.$a->count(). ' Results. Set at '.$filtersize.'px';
	if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo '/'.$_POST['line'].'em';
	echo '</p>';
	// Side by Side
	if ( $_POST['sidebyside'] == "no" ) {
		echo '<p style="font-size: '.$filtersize.'px;';
		if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
		if ( isset( $_POST['loon'] ) == "yes" ) echo ' color: #fefefe;';
		echo '">';
		echo $a->getResults();
		echo '</p>';
	} else {
		echo "<table>";
			echo '<tr>';			
				echo '<td width="45%" valign="top">';
					echo '<p style="font-size: '.$filtersize.'px;';
					if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
					echo '">';
					echo $a->getResults();
					echo '</p>';				
				echo '</td>';			
				echo '<td width="55%" valign="top">';
					echo '<p style="font-size: '.$filtersize.'px;';
					if ( isset( $_POST['line'] ) && !empty( $_POST['line'] ) ) echo ' line-height: '.$_POST['line'].';';
					echo '">';
					$a->uppercase();
					echo $a->getResults();
					echo '</p>';				
				echo '</td>';	
			echo '</tr>';
		echo '</table>';		
	}	
}

// Add background Coor
if ( isset( $_POST['loon'] ) == "yes" ) echo '</div>';

//echo '<pre>';
//print_r($_POST);
//echo $a->getResults();
//echo '</pre>';

?>