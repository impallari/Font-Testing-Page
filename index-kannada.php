<?php header("Content-type: text/html; charset=utf-8"); // UTF 8 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Font Testing Page - Kannada Version</title>
<link type="text/css" href="css/styles-v9.css" rel="stylesheet" charset="utf-8" />
<link type="text/css" href="css/print-v9.css" rel="stylesheet" media="print" charset="utf-8" />
<script src="js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
<script>localStorage.clear();</script>
<script src="js/fontdrag.js" type="text/javascript" charset="utf-8"></script>
<script src="js/otfeatures-v9.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/contentEditable" type="text/javascript" charset="utf-8"></script>
<script src="js/init.js" type="text/javascript" charset="utf-8"></script>

</head>

<body spellcheck="false">

<?php include("includes/top.php"); ?>

<section id="custom">

	<div class="tabs">
	  <!-- Navigation (Ideally, this should be outside the "custom" section, so the navigation's font does not change.) -->
	  <ul class="tabNavigation">
	    <li><a href="#alphabet">Alphabet</a></li>
	    <li><a href="#vowelsigns">Vowel sign combos</a></li>
	    <li><a href="#spacing">Basic spacing</a></li>
	    <li><a href="#vowelsignspacing">Vowel sign sp.</a></li>
	    <li><a href="#specialsyll">Special syll sp.</a></li>		
	    <li><a href="#subscripts">Subscripts</a></li>
	    <li><a href="#sylltosub">Syll/Subs sp.</a></li>
	    <li><a href="#subtosub">Subs/Subs sp.</a></li>
	    <li><a href="#tallsubs">Tall Subs sp.</a></li>
	    <li><a href="#punctuation">Punctuation sp.</a></li>
	    <li><a href="#numbers">Numbers</a></li>
	    <li><a href="#adhesion">Adhesion</a></li>
	    <li><a href="#adhesion2">Adhesion 2</a></li>
	    <li><a href="#newspaper">Newspaper text</a></li>

	  </ul>

	  <div id="alphabet">
	  	<?php include("includes/kannada/alphabet.php"); ?>
	  </div>

	  <div id="vowelsigns">
	  	<?php include("includes/kannada/vowelsigns.php"); ?>
	  </div>

	  <div id="spacing">
	  	<?php include("includes/kannada/spacing.php"); ?>
	  </div>

	  <div id="vowelsignspacing">
	  	<?php include("includes/kannada/vowelsignspacing.php"); ?>
	  </div>

	  <div id="specialsyll">
	  	<?php include("includes/kannada/specialsyll.php"); ?>
	  </div>
	  
	  <div id="subscripts">
	  	<?php include("includes/kannada/subscripts.php"); ?>
	  </div>

	  <div id="sylltosub">
	  	<?php include("includes/kannada/sylltosub.php"); ?>
	  </div>

	  <div id="subtosub">
	  	<?php include("includes/kannada/subtosub.php"); ?>
	  </div>

	  <div id="tallsubs">
	  	<?php include("includes/kannada/tallsubs.php"); ?>
	  </div>

	  <div id="punctuation">
	  	<?php include("includes/kannada/punctuation.php"); ?>
	  </div>

	  <div id="numbers">
	  	<?php include("includes/kannada/numbers.php"); ?>
	  </div>

	  <div id="adhesion">
	  	<?php include("includes/kannada/adhesion.php"); ?>
	  </div>
	  
	  <div id="adhesion2">
	  	<?php include("includes/kannada/adhesion2.php"); ?>
	  </div>
	  
	  <div id="newspaper">
	  	<?php include("includes/kannada/newspaper.php"); ?>
	  </div>
	  	  
	</div><!-- end tabs -->

</section>
		
<!-- Footer -->
<?php include("includes/footer.php"); ?>

</body>
</html>