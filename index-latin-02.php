<?php header("Content-type: text/html; charset=utf-8"); // UTF 8 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Font Testing Page - Custom Version</title>
<link type="text/css" href="css/styles-v10.css" rel="stylesheet" charset="utf-8" />
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
	    <li><a href="#blake">Stephenson Blake</a></li>
	    <li><a href="#king">Kern King</a></li>
	    <li><a href="#words">Kern Words</a></li>
	    <li><a href="#minimalkerning">Minimal Kerning Pairs</a></li>
	    <li><a href="#oldnick">Nick</a></li>
	    <li><a href="#ruder">Ruder</a></li> 
	    <li><a href="#ngrams">Ngrams</a></li> 
	    <li><a href="#googlebooksEnglish">GBC English</a></li>
	    <li><a href="#googlebooksSpanish">GBC Spanish</a></li>    
	    <li><a href="#capsgrid">UC Grid</a></li>
	    <li><a href="#upperspacing01">UC 1</a></li>
	    <li><a href="#upperspacing02">UC 2</a></li>
	    <li><a href="#upperspacing03">UC 3</a></li>	    
	    <li><a href="#captolower">UC 2 Lc</a></li>	    	    
	    <li><a href="#lowergrid">Lc Grid</a></li>
	    <li><a href="#lowerspacing01">Lc 1</a></li>
	    <li><a href="#lowerspacing02">Lc 2</a></li>
	    <li><a href="#lowerspacing03">Lc 3</a></li>
	    <li><a href="#numbersgrid">Numbers Grid</a></li>	    	    
	    <li><a href="#numbers1">Num 1</a></li>
	    <li><a href="#numbers2">Num 2</a></li> 
	    <li><a href="#numbers3">Num 3</a></li>
	    <li><a href="#numbers4">Num 4</a></li> 
	    <li><a href="#fractions">Fractions</a></li>	      		    
	    <li><a href="#overshoots">Overshoots</a></li>
	    <li><a href="#pangra">Pangrams</a></li>
	    <li><a href="#apostrophes">Apostrophes</a></li>
	    <li><a href="#dia_one">Diacritics 1</a></li>	 
	    <li><a href="#dia_two">Diacritics 2</a></li>
	    <li><a href="#dia_three">Diacritics 3</a></li>
	    <li><a href="#dia_four">Diacritics 4</a></li> 
	    <li><a href="#locale">Locale</a></li>
	    <li><a href="#news">Headlines</a></li>
	    <li><a href="#groups">Groups</a></li>
	    <li><a href="#fun">Fun</a></li>
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
		<?php include("includes/latin-02/kern-minimal.php"); ?>	
	  </div>

	  <!-- Old Nick -->
	  <div id="oldnick">
	  	<?php include("includes/latin-02/old-nick.php"); ?>
	  </div>

	  <!-- Emil Ruders -->
	  <div id="ruder">
	  	<?php include("includes/latin-02/ruder.php"); ?>
	  </div>

	  <!-- Ngrams -->
	  <div id="ngrams">
	  	<?php include("includes/latin-02/ngrams.php"); ?>
	  </div>

	  <!-- Google Books Corpus: English -->
	  <div id="googlebooksEnglish">
	  	<?php include("includes/latin-02/googlebooks-english.php"); ?>
	  </div>	  

	  <!-- Google Books Corpus: Spanish -->
	  <div id="googlebooksSpanish">
	  	<?php include("includes/latin-02/googlebooks-spanish.php"); ?>
	  </div>

	  <!-- Grid Uppercase -->
	  <div id="capsgrid">
		<?php include("includes/latin-02/grid-caps.php"); ?>
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
		<?php include("includes/latin-02/uc-to-lc.php"); ?>
	  </div>

	  <!-- Grid Lowercase -->
	  <div id="lowergrid">
		<?php include("includes/latin-02/grid-lower.php"); ?>
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

	  <!-- Grid: Numbers -->
	  <div id="numbersgrid">
		<?php include("includes/latin-02/grid-numbers.php"); ?>
	  </div>

	  <!-- Numbers 1 -->
	  <div id="numbers1">
		<?php include("includes/latin-02/numbers-01.php"); ?>
	  </div>
	  
	  <!-- Numbers 2 -->
	  <div id="numbers2">
	  	<?php include("includes/latin-02/numbers-02.php"); ?>
	  </div>

	  <!-- Numbers 3 -->
	  <div id="numbers3">
	  	<?php include("includes/latin-02/numbers-03.php"); ?>
	  </div>

	  <!-- Numbers 4 -->
	  <div id="numbers4">
	  	<?php include("includes/latin-02/numbers-04.php"); ?>
	  </div>

	  <!-- fractions -->
	  <div id="fractions">
		<?php include("includes/latin-02/fractions.php"); ?>			
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

	  <!-- Locales-->
	  <div id="locale">
	  	<?php include("includes/latin-02/locale.php"); ?>
	  </div>

	  <!-- News -->
	  <div id="news">
		<?php include("includes/latin-02/news.php"); ?>			
	  </div>
	  
	  <!-- Groups -->
	  <div id="groups">
		<?php include("includes/latin-02/groups.php"); ?>			
	  </div>
	  
	  <!-- Fun -->
	  <div id="fun">
		<?php include("includes/latin-02/fun.php"); ?>			
	  </div>	  	  

	</div><!-- end tabs -->

</section>
		
<!-- Footer -->
<?php include("includes/footer.php"); ?>

</body>
</html>