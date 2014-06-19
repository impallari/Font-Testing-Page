<?php header("Content-type: text/html; charset=utf-8"); // UTF 8 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Font Testing Page - Pair Generator Version</title>
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

	// Ajax Filter
    $("#filterform").submit(function(event) {

		event.preventDefault();
		
		$.ajax({
			url: "tool-pairs-ajax.php",
			data: {
				antes: $( "#antes" ).val(),
				glyphs: $( "#glyphs" ).val(),
				despues: $( "#despues" ).val(),
				format: $( "input[name=format]:checked" ).val(),
			},
			type: "POST",
			dataType : "html",
			success: function( msg ) {
				$( "#results" ).html( msg );
			},
			error: function( xhr, status ) {
				alert( "Try again" );
			},
		});
      
    }); 


});
</script>
</head>

<body spellcheck="false">

<?php include("includes/top.php"); ?>

<section id="custom">

	<div class="tabs">
	  <!-- Navigation -->
	  <ul class="tabNavigation">
	    <li><a href="#filter">Filter List</a></li>
	    <li><a href="#another">Another Tab</a></li>
	  </ul>

	  <!-- Filter Text -->
	  <div id="filter">
	  		<div>
	  			
	  			<div id="formContainer">
		  			<form method="post" action="tool-pairs-ajax.php" id="filterform">

		  				<table width="920" border="0">

		  					<tr>
		  						<td valign="top">
					  				<p class="sizelabel">First:</p>
					  				<textarea rows="6" style="width: 300px;" id="antes"><?php if (isset($_POST['antes']) && !empty($_POST['antes']) ) echo $_POST['antes']; ?></textarea>	  						
		  						</td>  	
		  						<td valign="top">
					  				<p class="sizelabel">Glyphs:</p>
					  				<textarea rows="6" style="width: 300px;" id="glyphs"><?php if (isset($_POST['glyphs']) && !empty($_POST['glyphs']) ) echo $_POST['glyphs']; ?></textarea>	  						
		  						</td>  						
		  						<td valign="top">
					  				<p class="sizelabel">Second:</p>
					  				<textarea rows="6" style="width: 300px;" id="despues"><?php if (isset($_POST['despues']) && !empty($_POST['despues']) ) echo $_POST['despues']; ?></textarea>	  						
		  						</td>  
		  					</tr>
							<tr>
								<td colspan="2">
									Format: 
									<input type="radio" name="format" value="plain" checked>Plain</input> 
									<input type="radio" name="format" value="fontlab">FontLab</input> 
									<input type="radio" name="format" value="metricsmachine">Metrics Machine</input> 
									<input type="radio" name="format" value="kernmaster">Kernmaster</input>
								</td>
								<td>
									<button type="submit">Make Pairs</button>  						
								</td>	  						
							</tr>

		  				</table>
	
		  			</form>
	  			</div>

				<!-- ajax Results -->
				<div id="results" contenteditable="true" style="padding: 20px 80px 20px 0px;">
					<p>Results will appear here</p>
				</div>
			
			</div>				
	  </div>	  

	  <!-- Briem Basic Proof -->
	  <div id="another">
	  		<div contenteditable="true">
				<p class="sizelabel">32px</p>
				<p style="font-size: 32px;">Ignore this tab, it's only a placeholder. Just in case I need to add more tabs in the future</p>
				<p>&nbsp;</p>
			</div>				
	  </div>


	</div><!-- end tabs -->

</section>
		
<!-- Footer -->
<?php include("includes/footer.php"); ?>

</body>
</html>