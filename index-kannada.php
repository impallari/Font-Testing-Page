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
	    <li><a href="#syllables">Syllables</a></li>
	    <li><a href="basetobase">Base-to-Base</a></li>
	    <li><a href="#basetosylltobase">Base-to-Syll-to-Base</a></li>
	    <li><a href="#basetosub">Base-to-Subscripts</a></li>
	    <li><a href="#sylltosub">Syllables-to-Sub</a></li>
	    <li><a href="#subtosub">Sub-to-Sub</a></li>
	    <li><a href="#subtobase">Sub-to-Base</a></li>
	    <li><a href="#punctuation">Punctuation</a></li>
	    <li><a href="#numbers">Numbers</a></li>
	    <li><a href="#sample">Sample</a></li>

	  </ul>

	  <div id="alphabet">
	  	<?php include("includes/kannada/alphabet.php"); ?>
	  </div>

	  <div id="syllables">
	  	<?php include("includes/kannada/syllables.php"); ?>
	  </div>

	  <div id="basetobase">
	  	<?php include("includes/kannada/basetobase.php"); ?>
	  </div>

	  <div id="basetosylltobase">
	  	<?php include("includes/kannada/basetosylltobase.php"); ?>
	  </div>

	  <div id="basetosub">
	  	<?php include("includes/kannada/basetosub.php"); ?>
	  </div>

	  <div id="sylltosub">
	  	<?php include("includes/kannada/sylltosub.php"); ?>
	  </div>

	  <div id="subtosub">
	  	<?php include("includes/kannada/subtosub.php"); ?>
	  </div>

	  <div id="subtobase">
	  	<?php include("includes/kannada/subtobase.php"); ?>
	  </div>

	  <div id="punctuation">
	  	<?php include("includes/kannada/punctuation.php"); ?>
	  </div>

	  <div id="numbers">
	  	<?php include("includes/kannada/numbers.php"); ?>
	  </div>

	  <div id="sample">
	  	<?php include("includes/kannada/sample.php"); ?>
	  </div>
	  	  
	</div><!-- end tabs -->

</section>
		
<!-- Footer -->
<?php include("includes/footer.php"); ?>

</body>
</html>