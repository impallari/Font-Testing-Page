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
<script src="js/init.js" type="text/javascript" charset="utf-8"></script>
</head>

<body spellcheck="false">

<?php include("includes/top.php"); ?>

<section id="custom">

	<div class="tabs">
	  <!-- Navigation -->
	  <ul class="tabNavigation">
	    <li><a href="#filter">Filter Text</a></li>
	    <li><a href="#better">Better Adhesion</a></li>	    
	    <li><a href="#spacing">Spacing Grid</a></li>	    
	    <li><a href="#color">Color Grid</a></li>
	    <li><a href="#connection">Connections Grid</a></li>
	    <li><a href="#pairs">Kern Pairs Generator</a></li>
	    <li><a href="#textanalizer">Text Analizer</a></li>
	  </ul>

	  <!-- Filter Text from Dictionaries -->
	  <div id="filter">
	  	<?php include("includes/tools/filter.php"); ?>
	  </div>	  

	  <!-- Better Adhesion -->
	  <div id="better">
	  	<?php include("includes/tools/better.php"); ?>
	  </div>	

	  <!-- spacing Generator -->
	  <div id="spacing">
	  	<?php include("includes/tools/spacing.php"); ?>			
	  </div>

	  <!-- Color Generator -->
	  <div id="color">
	  	<?php include("includes/tools/color.php"); ?>			
	  </div>

	  <!-- Connection Tester -->
	  <div id="connection">
	  	<?php include("includes/tools/connections.php"); ?>			
	  </div>

	  <!-- Kern Pairs Generator -->
	  <div id="pairs">
	  	<?php include("includes/tools/pairs.php"); ?>			
	  </div>

	  <!-- Phrase Analizer -->
	  <div id="textanalizer">
	  	<?php include("includes/tools/textanalizer.php"); ?>
	  </div>	

	</div><!-- end tabs -->

</section>
		
<!-- Footer -->
<?php include("includes/footer.php"); ?>

</body>
</html>