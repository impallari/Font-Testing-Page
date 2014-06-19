<?php 
header("Content-type: text/html; charset=utf-8");

// Class to filter the array ot text
class makePairs
{

    private $antes = array();
    private $glyphs = array();
    private $despues = array();
    private $pairs = array();

    function antes( $source_string )
    {
        $source_string = preg_replace('/\s+/', ' ', trim($source_string));
        $this->antes = explode( ' ', $source_string );
        $this->antes = array_unique( $this->antes );
        return $this;
    }
    function glyphs( $source_string )
    {
        $source_string = preg_replace('/\s+/', ' ', trim($source_string));
        $this->glyphs = explode( ' ', $source_string );
        $this->glyphs = array_unique( $this->glyphs );
        return $this;
    }
    function despues( $source_string )
    {
        $source_string = preg_replace('/\s+/', ' ', trim($source_string));
        $this->despues = explode( ' ', $source_string );
        $this->despues = array_unique( $this->despues );
        return $this;
    }        

    function generate()
    {
        foreach ($this->glyphs as $gkey => $gvalue) {
        	foreach ($this->antes as $akey => $avalue) {
        		$this->pairs[] = $avalue.' '.$gvalue;
        	}
        }
        foreach ($this->glyphs as $gkey => $gvalue) {
        	foreach ($this->despues as $dkey => $dvalue) {
        		$this->pairs[] = $gvalue.' '.$dvalue;
        	}
        }
        $this->pairs = array_unique( $this->pairs );
        return $this->pairs;
    }

    function generate_fl()
    {
        foreach ($this->glyphs as $gkey => $gvalue) {
        	foreach ($this->antes as $akey => $avalue) {
        		$this->pairs[] = '/'.$avalue.'/'.$gvalue;
        	}
        }
        foreach ($this->glyphs as $gkey => $gvalue) {
        	foreach ($this->despues as $dkey => $dvalue) {
        		$this->pairs[] = '/'.$gvalue.'/'.$dvalue;
        	}
        }
        $this->pairs = array_unique( $this->pairs );
        return $this->pairs;
    }

    function generate_plain()
    {
        foreach ($this->glyphs as $gkey => $gvalue) {
        	foreach ($this->antes as $akey => $avalue) {
        		$this->pairs[] = $avalue.$gvalue;
        	}
        }
        foreach ($this->glyphs as $gkey => $gvalue) {
        	foreach ($this->despues as $dkey => $dvalue) {
        		$this->pairs[] = $gvalue.$dvalue;
        	}
        }
        $this->pairs = array_unique( $this->pairs );
        return $this->pairs;
    }

    function count()
    {
        return count( $this->pairs );
        // return "100";
    }
    
}

// Start Benchmark
$timer_start = microtime(true);

// Do Stuff
$a = new makePairs();
if ( !empty( $_POST['antes'] ) ) $a->antes( $_POST['antes'] );
if ( !empty( $_POST['glyphs'] ) ) $a->glyphs( $_POST['glyphs'] );
if ( !empty( $_POST['despues'] ) ) $a->despues( $_POST['despues'] );

if ( $_POST['format'] == 'plain' ) {
	$pairs = $a->generate_plain();
} elseif ( $_POST['format'] == 'fontlab' ) {
	$pairs = $a->generate_fl();
} else {
	$pairs = $a->generate();
}

// End Benchmark
$timer_end = microtime(true) - $timer_start;

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';

if ( $_POST['format'] == 'plain' ) {
	foreach ($pairs as $key => $value) {
		echo $value.' ';
	}
}

if ( $_POST['format'] == 'fontlab' ) {
	foreach ($pairs as $key => $value) {
		echo $value.'<br />';
	}
}

if ( $_POST['format'] == 'metricsmachine' ) {
	echo '#KPL:P: My custom pairs list<br />';
	foreach ($pairs as $key => $value) {
		echo $value.'<br />';
	}
}

if ( $_POST['format'] == 'kernmaster' ) {
	echo 'Comment My custom pairs list<br />';
	echo 'StartFontMetrics<br />';
	echo 'StartKernData<br />';
	echo 'StartKernPairs '.$a->count().'<br />';
	foreach ($pairs as $key => $value) {
		echo 'KPX '.$value.'<br />';
	}
	echo 'EndKernPairs<br />';
	echo 'EndKernData<br />';
}

?>






