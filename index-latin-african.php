<?php header("Content-type: text/html; charset=utf-8"); // UTF 8 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Font Testing Page - Custom Version</title>
<link type="text/css" href="css/styles-v11.css?rand=<?php echo rand(5,500)?>" rel="stylesheet" charset="utf-8" />
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
	    <li><a href="#lettering-pri">AfricanPri Lettering</a></li>
	    <li><a href="#barstroke">Bars & Strokes</a></li>
	    <li><a href="#placeholder">Tap 2 Placeholder</a></li>
	  </ul>

	  <!-- African Lettering -->
	  <div id="lettering-pri">
	  	<?php include("includes/latin-african/lettering-pri.php"); ?>
	  </div>

	  <!-- Bars & Strokes -->
	  <div id="barstroke">
	  	<?php include("includes/latin-african/barstroke.php"); ?>
	  </div>	  

	  <!-- Placeholder -->
	  <div id="placeholder">
	  	<?php include("includes/latin-african/placeholder.php"); ?>
	  </div>
  	  

	</div><!-- end tabs -->

</section>
		
<!-- Footer -->
<?php include("includes/footer.php"); ?>

</body>
</html>