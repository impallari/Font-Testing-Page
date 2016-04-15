<?php header("Content-type: text/html; charset=utf-8"); // UTF 8 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Font Testing Page - Latin Version</title>
<link type="text/css" href="css/styles-v9.css?rand=<?php echo rand(5,500)?>" rel="stylesheet" charset="utf-8" />
<link type="text/css" href="css/print-v9.css" rel="stylesheet" media="print" charset="utf-8" />
<script src="js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
<script>localStorage.clear();</script>
<script src="js/fontdrag.js" type="text/javascript" charset="utf-8"></script>
<script src="js/otfeatures-v9.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/contentEditable.js" type="text/javascript" charset="utf-8"></script>
<script src="includes/malayalam/constants-malayalam.js" type="text/javascript" charset="utf-8"></script>
<script src="js/init.js" type="text/javascript" charset="utf-8"></script>

<script>
$(document).ready(function(){

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
	    <li><a href="#headlines">Headlines</a></li>
	    <li><a href="#malayalamtext">Text</a></li>
	    <li><a href="#mllatext">Malayalam + Latin</a></li>
	    <li><a href="#caps">Words</a></li>
	    <li><a href="#layout">Layout</a></li>
	    <li><a href="#lettering">Lettering</a></li>
	    <li><a href="#clusters">Clusters</a></li>
	  </ul>

	  <!-- Headlines (Content injected via constants.js) -->
	  <div id="headlines">
		<!-- <div style="white-space: nowrap; overflow: hidden; width: 920px;"> -->
		<div style="white-space: nowrap; overflow: hidden; width: 920px;"></div>
	  </div>

	  <!-- Malayalam Text (Content injected via Javascript) -->
	  <div id="malayalamtext" style="width: 920px;">
			<div class="textsettingCol1"></div>
			<div class="textsettingCol2"></div>
	  </div>

	  <!-- Malayalam + Latin Text (Content injected via Javascript) -->
	  <div id="mllatext" style="width: 920px;">
			<div class="textsettingCol1"></div>
			<div class="textsettingCol2"></div>
	  </div>

	  <!-- Words (Content injected via constants.js) -->
	  <div id="caps">
	  		<div style="width: 920px;"></div>
	  </div>

	  <!-- Layout -->
	  <div id="layout">
	  	<?php include("includes/malayalam/layout.php"); ?>
	  </div>
	  
	  <!-- Lettering -->
          <div id="lettering">
	  	<?php include("includes/malayalam/lettering.php"); ?>
	  </div>
	  
	  <!-- Clusters -->
	  <div id="clusters">
	  	<?php include("includes/malayalam/clusters.php"); ?>
	  </div>
	  
	</div><!-- end tabs -->

</section>

<!-- Footer -->
<?php include("includes/footer.php"); ?>

</body>
</html>
