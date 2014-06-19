<?php header("Content-type: text/html; charset=utf-8"); // UTF 8 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Font Testing Page - Tools Version</title>
<link type="text/css" href="css/styles-v9.css" rel="stylesheet" charset="utf-8" />
<link type="text/css" href="css/print-v9.css" rel="stylesheet" media="print" charset="utf-8" />
<script src="js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
<script>localStorage.clear(); </script>
<script src="js/fontdrag.js" type="text/javascript" charset="utf-8"></script>
<script src="js/otfeatures-v9.1.js" type="text/javascript" charset="utf-8"></script>

<script>
 $(document).ready(function(){
    
    // Tabs
    var tabContainers = $('div.tabs > div');
    $('div.tabs ul.tabNavigation a').click(function () {
        tabContainers.hide().filter(this.hash).show();
        $('div.tabs ul.tabNavigation a').removeClass('selected');
        $(this).addClass('selected');
        return false;
    }).filter(':first').click();
    
    // OT Features Panel
    $('#showhide').click(function () {
        $('#otfeatures').slideToggle("fast", function() {
		    $("#showhide").text($(this).is(':visible') ? "Hide OpenType Features" : "OpenType Features");
		  });
    });

    // OT Features initial Run
    refreshFeatures();

});
</script>
</head>

<body spellcheck="false">

<?php include("includes/top.php"); ?>

<section id="custom">

	<div class="tabs">
	  <!-- Navigation -->
	  <ul class="tabNavigation">
	    <li><a href="#filter">Filter Text</a></li>
	    <li><a href="#grid">Grid Generator</a></li>
	    <li><a href="#connection">Connection Tester</a></li>
	    <li><a href="#specimens">Specimens</a></li>
	    <li><a href="#kernpairs">Kern Pairs Generator</a></li>
	  </ul>

	  <!-- Filter Text from Dictionaries -->
	  <div id="filter">
	  	<?php include("includes/tools/filter.php"); ?>
	  </div>	  

	  <!-- Grid Generator -->
	  <div id="grid">
	  	<?php include("includes/tools/grid.php"); ?>			
	  </div>

	  <!-- Connection Tester -->
	  <div id="connection">
	  	<?php include("includes/tools/connections.php"); ?>			
	  </div>

	  <!-- Specimens Generator -->
	  <div id="specimens">
	  	<?php include("includes/tools/specimens.php"); ?>				
	  </div>

	  <!-- Kern Pairs Generator -->
	  <div id="kernpairs">
	  		<div contenteditable="true">
				<p style="font-size: 20px;">Placeholder for the Kerning Generator Tool... to be added soon.</p>
			</div>				
	  </div>

	</div><!-- end tabs -->

</section>
		
<!-- Footer -->
<?php include("includes/footer.php"); ?>

</body>
</html>