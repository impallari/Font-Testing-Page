<?php header("Content-type: text/html; charset=utf-8"); // UTF 8 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Font Testing Page - Custom Version</title>
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
	    <li><a href="#briem">Briem's</a></li>
	    <li><a href="#blake">SB</a></li>
	    <li><a href="#king">KKing</a></li>
	    <li><a href="#words">KWords</a></li>
	    <li><a href="#minimalkerning">Minimal Kerning Pairs</a></li>
	    <li><a href="#oldnick">Nick</a></li>
	    <li><a href="#ruder">Ruder</a></li>    
	    <li><a href="#capsgrid">UC Grid</a></li>
	    <li><a href="#lowergrid">LC Grid</a></li>
	    <li><a href="#lowerspacing01">LC1</a></li>
	    <li><a href="#lowerspacing02">LC2</a></li>
	    <li><a href="#lowerspacing03">LC3</a></li>
	    <li><a href="#upperspacing01">UC1</a></li>
	    <li><a href="#upperspacing02">UC2</a></li>
	    <li><a href="#upperspacing03">UC3</a></li>
	    <li><a href="#captolower">UC2lw</a></li>
	    <li><a href="#numbers">N1</a></li>
	    <li><a href="#numeritos">N2</a></li>   		    
	    <li><a href="#overshoots">OS</a></li>
	    <li><a href="#pangra">Pang</a></li>
	    <li><a href="#apostrophes">Apostrophes</a></li>
	    <li><a href="#fractions">Fractions</a></li>
	    <li><a href="#dia_one">Diac1</a></li>	 
	    <li><a href="#dia_two">Diac2</a></li>
	    <li><a href="#dia_three">Diac3</a></li>
	    <li><a href="#dia_four">Diac4</a></li> 
	    <li><a href="#news">News</a></li>
	  </ul>

	  <!-- Briem Basic Proof -->
	  <div id="briem">
	  	<?php include("includes/latin-02/briem.php"); ?>
	  </div>

	  <!-- Blake Proof -->
	  <div id="blake">
	  	<?php include("includes/latin-02/stephenson-blake.php"); ?>
	  </div>

	  <!-- Kern King -->
	  <div id="king">
		<?php include("includes/latin-02/kern-king.php"); ?>
	  </div>

	  <!-- Kern Words -->
	  <div id="words">
		<?php include("includes/latin-02/kern-words.php"); ?>	
	  </div>

	  <!-- Minimal Kerning Pairs -->
	  <div id="minimalkerning">
		<?php include("includes/latin-02/minimalkerning.php"); ?>	
	  </div>

	  <!-- Old Nick -->
	  <div id="oldnick">
	  	<?php include("includes/latin-02/old-nick.php"); ?>
	  </div>

	  <!-- Emil Ruders -->
	  <div id="ruder">
	  	<?php include("includes/latin-02/ruder.php"); ?>
	  </div>

	  <!-- Caps Grid -->
	  <div id="capsgrid">
		<?php include("includes/latin-02/caps-grid.php"); ?>
	  </div>

	  <!-- Lower Grid -->
	  <div id="lowergrid">
		<?php include("includes/latin-02/lower-grid.php"); ?>
	  </div>

	  <!-- lowerspacing 1 -->
	  <div id="lowerspacing01">
		<?php include("includes/latin-02/lc-spacing-01.php"); ?>
	  </div>

	  <!-- lowerspacing 2 -->
	  <div id="lowerspacing02">
		<?php include("includes/latin-02/lc-spacing-02.php"); ?>
	  </div>	  

	  <!-- lowerspacing 3 -->
	  <div id="lowerspacing03">
		<?php include("includes/latin-02/lc-spacing-03.php"); ?>
	  </div>		  

	  <!-- Upperspacing 1 -->
	  <div id="upperspacing01">
		<?php include("includes/latin-02/uc-spacing-01.php"); ?>
	  </div>

	  <!-- Upperspacing 2 -->
	  <div id="upperspacing02">
		<?php include("includes/latin-02/uc-spacing-02.php"); ?>
	  </div>

	  <!-- Upperspacing 3 -->
	  <div id="upperspacing03">
		<?php include("includes/latin-02/uc-spacing-03.php"); ?>
	  </div>

	  <!-- Caps to Lowercase Relations -->
	  <div id="captolower">
		<?php include("includes/latin-02/capstolower-short.php"); ?>
	  </div>
	  
	  <!-- Numbers -->
	  <div id="numbers">
		<?php include("includes/latin-02/numbers.php"); ?>
	  </div>
	  
	  <!-- numeritos -->
	  <div id="numeritos">
	  	<?php include("includes/latin-02/numeritos.php"); ?>
	  </div>

	  <!-- overshoots -->
	  <div id="overshoots">
		<?php include("includes/latin-02/overshoots.php"); ?>	
	  </div>

	  <!-- Pangrams -->
	  <div id="pangra">
		<?php include("includes/latin-02/pangra.php"); ?>			
	  </div>	 	  

	  <!-- Apostrophes -->
	  <div id="apostrophes">
		<?php include("includes/latin-02/apostrophes.php"); ?>			
	  </div>	

	  <!-- fractions -->
	  <div id="fractions">
		<?php include("includes/latin-02/fractions.php"); ?>			
	  </div>	
	  
	  <!-- Diacritics One -->
	  <div id="dia_one">
		<?php include("includes/latin-02/dia-01.php"); ?>	
	  </div>

	  <!-- Diacritics 2 -->
	  <div id="dia_two">
		<?php include("includes/latin-02/dia-02.php"); ?>	
	  </div>

	  <!-- Diacritics 3 -->
	  <div id="dia_three">
	  	<?php include("includes/latin-02/dia-03.php"); ?>
	  </div>

	  <!-- Diacritics 4 -->
	  <div id="dia_four">
	  	<?php include("includes/latin-02/dia-04.php"); ?>
	  </div>

	  <!-- News -->
	  <div id="news">
		<?php include("includes/latin-02/news.php"); ?>			
	  </div>

	</div><!-- end tabs -->

</section>
		
<!-- Footer -->
<?php include("includes/footer.php"); ?>

</body>
</html>