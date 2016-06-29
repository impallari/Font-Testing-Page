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
	    <li><a href="#specimens">Predefined Specimens</a></li>
	    <li><a href="#wordsfinder">Words finder</a></li>
	    <li><a href="#calculator">Calculator for the WordFinder</a></li>
	    <li><a href="#template01">Template for the WordFinder</a></li>
	  </ul>

	  <!-- Predefined Specimens -->
	  <div id="specimens">
	  	<?php include("includes/specimen-helper/specimens.php"); ?>				
	  </div>

	  <!-- Words Finder -->
	  <div id="wordsfinder">
	  	<?php include("includes/specimen-helper/wordsfinder.php"); ?>
	  </div>	  

	  <!-- Calculator for the WordFinder -->
	  <div id="calculator">
	  	<?php include("includes/specimen-helper/calculator.php"); ?>
	  </div>

	  <!-- Template for the WordFinder -->
	  <div id="template01">
	  	<?php include("includes/specimen-helper/template01.php"); ?>
	  </div>

	</div><!-- end tabs -->

</section>
		
<!-- Footer -->
<?php include("includes/footer.php"); ?>

</body>
</html>