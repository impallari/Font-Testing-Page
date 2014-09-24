<?php 
header("Content-type: text/html; charset=utf-8");

// Class to filter the array ot text
class textFilter
{

    private $text = array();
    private $temp_text = array();
    private $anchos_glyphs = array();
    private $kerning_table = array();
    private $results;

    function AddSourceText( $source_string, $min=10, $max=11 )
    {
        // Get the source sting of text and convert it into an array
        $source_string = preg_replace('/\s+/', ' ', trim($source_string));
        $this->text = explode( ' ', $source_string );
        
        // Remove shorter or larger words
        $regex = '/^.{'.$min.','.$max.'}$/';
        $this->text = array_slice(array_values(preg_grep($regex, $this->text)), 0);
        
        // Remove Duplicates
        $this->text = array_unique( $this->text );
		
        return $this;
    }

    function AddMeasures( $measures )
    {
        // Get the source sting of text and convert it into an array
        $measures = preg_replace('/\s+/', ' ', trim($measures));
        $anchos_temp = array_unique(explode( ' ', $measures ));
        
        foreach ($anchos_temp as $key => $value) {
        	$reading_value = explode(',', $value);
        	$this->anchos_glyphs[$reading_value[0]] = $reading_value[1];
        }
		
        return $this;
    }

    function AddKerning( $kerning )
    {
        // Get the source sting of text and convert it into an array
        $kerning = preg_replace('/\s+/', ' ', trim($kerning));
        $kerning_temp = array_unique(explode( ' ', $kerning ));
        
        foreach ($kerning_temp as $key => $value) {
        	$reading_value = explode(',', $value);
        	
        	$this->kerning_table[$reading_value[0]][$reading_value[1]] = $reading_value[2];
        }       
		
        return $this;
    }

    function madefrom($madefrom)
    {
        if ( !empty($madefrom) ) {
        	$madefrom = preg_replace('/\s+/', '', trim($madefrom));
         	$regex = '/^[' . $madefrom . ']{3,20}$/u';
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

    function count_words()
    {
        return count($this->text);
    }

    function Results($desired = 0, $tolerance = 0)
    {
 
		$min = $desired - $tolerance;
		$max = $desired + $tolerance;
        
        // Use the word as index
        $this->temp_text = $this->text;
        $this->text = '';
        foreach ($this->temp_text as $key => $value) {
        	$this->text[$value] = 1;
        }
 
    	// Por cada palabra
    	foreach ($this->text as $palabra => $value) {
    		
    		// Mido el ancho
    		$letras = str_split($palabra);
    		$ancho_palabra = 0;
    		foreach ($letras as $key => $letra) {
    			$ancho_palabra += $this->anchos_glyphs[$letra];
    		}
    		
    		// Computo el Kerning
    		$pares = array();
    		$porciones = $palabra;
    		if ( isset($this->kerning_table) and $this->kerning_table != null ) {
    			while ( strlen($porciones) >= 2 ) {
    				$pares[] = substr($porciones, -2);
    				$porciones = substr($porciones, 0, -1);;
    			}
    			krsort($pares);   			
    			foreach ($pares as $key => $value) {
    				$par = str_split($value);
    				// Si hay kerning para ese par, actualizar value palabra
    				if ( isset($this->kerning_table[$par[0]][$par[1]]) AND $this->kerning_table[$par[0]][$par[1]] != null) {
    					$ancho_palabra = $ancho_palabra + $this->kerning_table[$par[0]][$par[1]];
    				}
    				
    			} 			
    		}
    		
    		// Si no esta dentro de los limites, lo elimina del array
    		if ($desired == 0) {
    			$this->text[$palabra] = $ancho_palabra;
    		} else {
    			if ( $ancho_palabra >= $min AND $ancho_palabra <= $max) {
    				$this->text[$palabra] = $ancho_palabra;
    			} else {
    				unset( $this->text[$palabra] );
    			}
    		}
    	}
    	
    	// Ordeno y cuento los resultados
    	asort($this->text);
    	echo '<p class="sizelabel">'.count($this->text). ' Results</p>';

//		echo '<pre>';
//		print_r($this->text);
//		echo '</pre>';

        return $this->text;
    }

}

// Scope
$text ='';
if ( $_POST['eng_dict'] == "yes" ) {
	include ("../dictionaries/english.php");
	$text .= ' '.$english;
}
if ( $_POST['spa_dict'] == "yes" ) {
	include ("../dictionaries/spanish.php");
	$text .= ' '.$spanish;
}

// Define Font Size or use default
$filtersize = 40;
if ( isset( $_POST['filtersize'] ) && !empty( $_POST['filtersize'] ) ) $filtersize = $_POST['filtersize'];

// Define Minimun and Maximun number of glyphs per word
$minglyphs = 8;
$maxglyphs = 8;
if ( isset( $_POST['minglyphs'] ) && !empty( $_POST['minglyphs'] ) ) $minglyphs = $_POST['minglyphs'];
if ( isset( $_POST['maxglyphs'] ) && !empty( $_POST['maxglyphs'] ) ) $maxglyphs = $_POST['maxglyphs'];

// Do Stuff
$a = new textFilter();
$a->AddSourceText( $text, $minglyphs, $maxglyphs);

if ( !empty( $_POST['madefrom'] ) ) $a->madefrom( $_POST['madefrom'] );
if ( !empty( $_POST['measures'] ) ) $a->AddMeasures( $_POST['measures'] );
if ( !empty( $_POST['kerning'] ) ) $a->AddKerning( $_POST['kerning'] );

if ( !empty( $_POST['having_one'] ) ) $a->having( $_POST['having_one'] );
if ( !empty( $_POST['having_two'] ) ) $a->having( $_POST['having_two'] );
if ( !empty( $_POST['having_three'] ) ) $a->having( $_POST['having_three'] );
if ( !empty( $_POST['having_four'] ) ) $a->having( $_POST['having_four'] );
if ( !empty( $_POST['having_five'] ) ) $a->having( $_POST['having_five'] );

if ( !empty( $_POST['not_having_one'] ) ) $a->not_having( $_POST['not_having_one']);
if ( !empty( $_POST['not_having_two'] ) ) $a->not_having( $_POST['not_having_two']);
if ( !empty( $_POST['not_having_three'] ) ) $a->not_having( $_POST['not_having_three']);
if ( !empty( $_POST['not_having_four'] ) ) $a->not_having( $_POST['not_having_four']);

if ( !empty( $_POST['starting'] ) ) $a->starting( $_POST['starting'] );
if ( !empty( $_POST['ending'] ) ) $a->ending( $_POST['ending'] );

if ( $_POST['sentence'] == "yes" ) $a->sentencecase();
if ( $_POST['uppercase'] == "yes" ) $a->uppercase();

// Define Medidas
$desired_em = 0;
$tolerance_em = 0;
if ( isset( $_POST['desired_em'] ) && !empty( $_POST['desired_em'] ) ) $desired_em = $_POST['desired_em'];
if ( isset( $_POST['tolerance_em'] ) && !empty( $_POST['tolerance_em'] ) ) $tolerance_em = $_POST['tolerance_em'];

// Render Contents
// echo '<p class="sizelabel">'.$a->count_words(). ' Results</p>';
echo '<table cellpadding="6" border="0">';
echo '<tr>';
echo '<td><p class="sizelabel">Em Units</p></td>';
echo '<td><p class="sizelabel">Word</p></td>';
echo '<td><p class="sizelabel">Letters</p></td>';
echo '</tr>';
foreach ($a->Results($desired_em, $tolerance_em) as $key => $value) {
	echo '<tr>';
	echo '<td><p class="sizelabel">'.$value.'</p></td>';
	echo '<td><p style="font-size: '.$filtersize.'px;">'.$key.'</p></td>';
	echo '<td><p class="sizelabel">'.strlen($key).'</p></td>';
	echo '</tr>';
}
echo '</table>';


?>