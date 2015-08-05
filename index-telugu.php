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
<script src="includes/telugu/constants-telugu.js" type="text/javascript" charset="utf-8"></script>
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
	    <li><a href="#alphabet">Alphabet</a></li>
	    <li><a href="#vowelsigns">Vowel sign combos</a></li>
	    <li><a href="#headlines">Headlines</a></li>
	    <li><a href="#tamiltext">Paragraph</a></li>
	    <li><a href="#talatext">Telugu + Latin</a></li>
	    <li><a href="#adhesion">Adhesion</a></li>
	    <li><a href="#caps">Words</a></li>
	    <li><a href="#layout">Layout</a></li>

	  </ul>

	  <!-- Headlines (Content injected via constants.js) -->
	  <div id="headlines">
		<!-- <div style="white-space: nowrap; overflow: hidden; width: 920px;"> -->
		<div style="white-space: nowrap; overflow: hidden; width: 920px;"></div>
	  </div>
	  
	  <!-- Telugu Text (Content injected via Javascript) -->
	  <div id="tamiltext" style="width: 920px;">
			<div class="textsettingCol1"></div>
			<div class="textsettingCol2"></div>
	  </div>


	  <!-- Telugu + Latin Text (Content injected via Javascript) -->
	  <div id="talatext" style="width: 920px;">
			<div class="textsettingCol1"></div>
			<div class="textsettingCol2"></div>
	  </div>


	  <!-- adhesion (Content injected via constants.js) -->
	  <div id="adhesion">
	  		<div style="white-space: nowrap; overflow: hidden; width: 920px;"></div>			
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<div style="width: 920px;">
				<div class="textsettingCol1"></div>
				<div class="textsettingCol2"></div>
			</div>
	  </div>

	  <!-- Caps (Content injected via constants.js) -->
	  <div id="caps">
	  		<div style="width: 920px;"></div>				
	  </div>

	  <!-- Layout -->
	  <div id="layout">
	  	<?php include("includes/telugu/layout.php"); ?>						
	  </div>

	  <!-- Hinting (Content injected via constants.js) -->
	  <div id="hinting">
	  		<div style="width: 920px;" contenteditable="true">
				
				<p class="sizelabel"><?php echo $_SERVER['HTTP_USER_AGENT'] ?></p><p>&nbsp;</p>
				
				<p class="sizelabel">48px</p>
				<p class="hints-lower" style="font-size: 48px;"></p>
				<p class="hints-caps" style="font-size: 48px;"></p>
				<p class="hints-numbers" style="font-size: 48px;"></p>
				<p>&nbsp;</p>

				<p class="sizelabel">28px</p>
				<p class="hints-lower" style="font-size: 28px;"></p>
				<p style="font-size: 28px;">
					<span class="hints-caps"></span> 
					<span class="hints-numbers"></span>
				</p><p>&nbsp;</p>
				
				<?php for ($i = 24; $i >= 9; $i--) { ?>
				<p class="sizelabel"><?php echo $i; ?>px</p>
				<p class="hints-lower" style="font-size: <?php echo $i; ?>px;"></p>
				<p style="font-size: <?php echo $i; ?>px;">
					<span class="hints-caps"></span> 
					<span class="hints-numbers"></span>
				</p>
				<p>&nbsp;</p>
				<?php } ?>

	  		</div>
	  </div>


	  <div id="alphabet">
	  	<?php include("includes/telugu/alphabet.php"); ?>
	  </div>

	  <div id="vowelsigns">
	  	<?php include("includes/telugu/vowelsigns.php"); ?>
	  </div>	  	  
	  	  
	</div><!-- end tabs -->

</section>
		
<!-- Footer -->
<?php include("includes/footer.php"); ?>

</body>
</html>