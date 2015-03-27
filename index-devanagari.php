<?php header("Content-type: text/html; charset=utf-8"); // UTF 8 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Font Testing Page - Devanagari Version</title>
<link type="text/css" href="css/styles-v9.css" rel="stylesheet" charset="utf-8" />
<link type="text/css" href="css/print-v9.css" rel="stylesheet" media="print" charset="utf-8" />
<script src="js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
<script>localStorage.clear();</script>
<script src="js/fontdrag.js" type="text/javascript" charset="utf-8"></script>
<script src="js/otfeatures-v9.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/contentEditable" type="text/javascript" charset="utf-8"></script>
<script src="js/constants.js" type="text/javascript" charset="utf-8"></script>

<script>
 $(document).ready(function(){
    
    // Tabs
    var tabContainers = $('div.tabs > div');

    function tabTrigger(link, hash) {
    	tabContainers.hide().filter(hash).show();
        $('div.tabs ul.tabNavigation a').removeClass('selected');
        link.addClass('selected');
    }

    if (location.hash) {
    	// Make sure page jump back to top
		setTimeout(function() {
			window.scrollTo(0, 0);
		}, 1);
	}

    if (window.location.hash) {
    	var hash = window.location.hash
    		link = $('div.tabs ul.tabNavigation a[href="'+hash+'"]');
    	tabTrigger(link, hash);
    } else {
    	$('div.tabs ul.tabNavigation a').filter(':first').click().addClass('selected');
    };

    $('div.tabs ul.tabNavigation a').click(function (event) {
    	var link = $(this),
    		hash = link.attr('href');
        tabTrigger(link, hash);
        // History API
        if(history.pushState) {
        	history.pushState(null, null, hash);
        };
        event.preventDefault();
        return false;
    });
    
    // OT Features Panel
    $('#showhide').click(function () {
        $('#otfeatures').slideToggle("fast", function() {
		    $("#showhide").text($(this).is(':visible') ? "Hide OpenType Features" : "OpenType Features");
		  });
    });

    // OT Features initial Run
    refreshFeatures();
    
    // Grab the text from the JS constant file, and show it
    prepareAndShowFontLayout();

});
</script>
</head>

<body spellcheck="false">

<?php include("includes/top.php"); ?>

<section id="custom">

	<div class="tabs">
	  <!-- Navigation (Ideally, this should be outside the "custom" section, so the navigation's font does not change.) -->
	  <ul class="tabNavigation">
	    <li><a href="#lettering">Lettering</a></li>
	    <li><a href="#groups">Groups</a></li>
	    <li><a href="#unicode_table">Uni Table</a></li>
	    <li><a href="#unicode_list">Uni List</a></li>
	    <li><a href="#frequency">Frequency</a></li>
	    <li><a href="#syllables">Syllables</a></li>
	    <li><a href="#consonant_pairs">Consonant Pairs</a></li>
	    <li><a href="#conjunct">Conjuncts</a></li>
	    <li><a href="#extremes">Extremes</a></li>	    
	    <li><a href="#sample_one">Sample 1</a></li>
	  </ul>

	  <!-- Lettering Sheet -->
	  <div id="lettering">
	  	<?php include("includes/devanagari/lettering.php"); ?>
	  </div>

	  <!-- Anatomy -->
	  <div id="groups">
	  	<?php include("includes/devanagari/groups.php"); ?>
	  </div>

	  <!-- Unicode Table -->
	  <div id="unicode_table">
	  	<?php include("includes/devanagari/unicode-table.php"); ?>
	  </div>

	  <!-- Unicode List -->
	  <div id="unicode_list">
	  	<?php include("includes/devanagari/unicode-list.php"); ?>
	  </div>

	  <!-- Frecuency -->
	  <div id="frequency">
	  	<?php include("includes/devanagari/frequency.php"); ?>
	  </div>

	  <!-- Consonants -->
	  <div id="syllables">
	  	<?php include("includes/devanagari/syllables.php"); ?>
	  </div>

	  <!-- Half Forms -->
	  <div id="consonant_pairs">
	  	<?php include("includes/devanagari/consonant-pairs.php"); ?>
	  </div>
	  
	  <!-- Conjuncts -->
	  <div id="conjunct">
	  	<?php include("includes/devanagari/conjunct.php"); ?>
	  </div>

	  <!-- Extremes -->
	  <div id="extremes">
	  	<?php include("includes/devanagari/extremes.php"); ?>
	  </div>
	  	  	  
	  <!-- Sample 1 -->
	  <div id="sample_one">
	  	<?php include("includes/devanagari/sample1.php"); ?>
	  </div>

	</div><!-- end tabs -->

</section>
		
<!-- Footer -->
<?php include("includes/footer.php"); ?>

</body>
</html>