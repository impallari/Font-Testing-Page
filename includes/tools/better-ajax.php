<?php 
header("Content-type: text/html; charset=utf-8");

$made_from = $_POST['betterglyphs'];
$max_words = $_POST['bettermax'];
$bettersize = $_POST['bettersize'];
$text_size = 30;

# Limpio Lista de Glyphs
$made_from = trim($made_from); // Trim
$made_from = mb_strtolower($made_from, 'UTF-8'); // Paso a Minusculas
$made_from = preg_replace('/\s+/', '', $made_from); // Borro Espacios en blanco

# Creo un Array limpito, con Frecuencia Zero
function mb_str_split_renamed( $string ) {
    return preg_split('/(?<!^)(?!$)/u', $string );
} 
mb_internal_encoding('UTF-8'); // Modo UTF-8
$made_from = array_unique(mb_str_split_renamed($made_from)); 
$made_from = array_flip($made_from);
ksort($made_from);
foreach ($made_from as $key => $value) {
	$made_from_as_array[$key] = 0;	
}

# Funcion para buscar values que contengan una determinada string dentro de un array
function my_array_find($needle, $haystack)
{
   foreach ($haystack as $item) {
      if (strpos($item, $needle) !== FALSE) {
         return $item;
         break;
      }
   }
}

# Classe que hace toda la magia
class textFilter
{
    private $max_words = 300;
    private $full_text = array();
    private $madefrom_text = array();
    private $resulting_text = array(); 
    private $length;
    private $occurences = array();

    function add_dictionary( $source_string )
    {
        $source_string = preg_replace('/\s+/', ' ', trim($source_string));
        $this->full_text = explode( ' ', $source_string );
        $this->full_text = array_unique( $this->full_text );        
        return $this;
    }

    function made_from($glypsh_string)
    {
        if ( !empty($glypsh_string) ) {
        	$this->occurences = $glypsh_string;
					$glypsh_string = '';
					foreach ($this->occurences as $key => $value) {
						$glypsh_string .= $key;	
					}
        	$glypsh_string = preg_replace('/\s+/', '', trim($glypsh_string));
        	$regex = '/^['.$glypsh_string.']{4,14}$/u';
        	$this->madefrom_text = array_slice(array_values(preg_grep($regex, $this->full_text)), 0);
        	shuffle($this->madefrom_text);
        }       
        return $this;
    }

    function set_max_words($number)
    {
        if ( !empty($number) ) {
        	$this->max_words = $number;
        }       
        return $this;
    }

    function add_initial_words_to_results()
    {
        for ($i = 1; $i <= 5; $i++) {
        	$this->resulting_text[] = array_shift($this->madefrom_text);
        }
        # Actualiza Estadisticas
        foreach ($this->occurences as $letra => $occurencias) {
					$this->occurences[$letra] = substr_count(implode('', $this->resulting_text), $letra);
				}
				natsort($this->occurences);
        return $this;
    }

    function add_less_frequent_words_to_results()
    {
    		list($pocas) = array_keys($this->occurences);
    		// echo '<p>Buscando: '.$pocas[0].' - ';
    		$new = my_array_find($pocas[0], $this->madefrom_text);
    		// echo 'Encontrado: '.$new.'</p>';
				if (!empty($new)) {
					$this->resulting_text[] = $new;
					if (($key = array_search($new, $this->madefrom_text)) !== false) {
						unset($this->madefrom_text[$key]);
					}
				}
				# Actualiza Estadisticas
				foreach ($this->occurences as $letra => $occurencias) {
					$this->occurences[$letra] = substr_count(implode('', $this->resulting_text), $letra);
				}
				natsort($this->occurences);
				return $this;
    }

    function analize_frequency()
    {
        return $this;
    }

    function get_words()
    {
        $this->add_initial_words_to_results();
        for ($i = 5; $i < $this->max_words; $i++) {
        	$this->add_less_frequent_words_to_results();
        }
        return $this;
    }

    function uppercase()
    {
        foreach ($this->resulting_text as $key => $resulting_text) {
        	$this->resulting_text[$key] = strtoupper($this->resulting_text[$key]);
        }
        return $this;        
    }

    function sentencecase()
    {
        foreach ($this->resulting_text as $key => $value) {
        	$this->resulting_text[$key] = ucwords($this->resulting_text[$key]);
        }
        return $this;        
    }

    function somesentence()
    {
        $sentence_count = 1;
        foreach ($this->resulting_text as $key => $value) {
        	if ($sentence_count % 5 == 1 ) {
        		$this->resulting_text[$key] = ucwords($this->resulting_text[$key]);
        	}
        	if ($sentence_count % 18 == 1 ) {
        		$this->resulting_text[$key] = strtoupper($this->resulting_text[$key]);
        	}          	
        	$sentence_count ++;
        }
        return $this;        
    }

    function get_results()
    {
        shuffle($this->resulting_text);
        return $this->resulting_text;
    }

    function get_occurences()
    {
        return $this->occurences;
    }

}

// Start Benchmark
$timer_start = microtime(true);

// Adding Dictionaries
$text ='';
if ( $_POST['better_eng_dict'] == "yes" ) {
	include ("../dictionaries/english.php");
	$text .= ' '.$english;
}
if ( $_POST['better_spa_dict'] == "yes" ) {
	include ("../dictionaries/spanish.php");
	$text .= ' '.$spanish;
}

$a = new textFilter();
$a->add_dictionary($text)->made_from( $made_from_as_array )->set_max_words($max_words)->get_words();
if ( $_POST['better_sentence'] == "yes" ) $a->sentencecase();
if ( $_POST['better_somesentence'] == "yes" ) $a->somesentence();
if ( $_POST['better_uppercase'] == "yes" ) $a->uppercase();
$resultados = $a->get_results();

// End Benchmark
$timer_end = microtime(true) - $timer_start;

echo '<p class="sizelabel">'.count($resultados). ' Results ('.number_format($timer_end, 2).' seconds) set at '.$bettersize.'px';
if ( isset( $_POST['betterline'] ) && !empty( $_POST['betterline'] ) ) echo '/'.$_POST['betterline'].'em';
echo '</p>';
echo '<p style="font-size: '.$bettersize.'px;';
if ( isset( $_POST['betterline'] ) && !empty( $_POST['betterline'] ) ) echo ' line-height: '.$_POST['betterline'].';';
echo '">'.implode(' ', $resultados).'</p>';

echo '<div class="dontprint">';
echo '<pre>';
print_r( $a->get_occurences() );
echo '</pre>';
echo '</div>';
;
?>