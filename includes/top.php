<!-- Header -->
<section id="top">
	<header><h1>Drag fonts here!</h1></header>
	<ul id="fonts"></ul>
</section>

<!-- OT Features Menu -->
<div id="toggleotfeatures">
	<!-- Editions nav menu: Latins go first, then all scripts follow alphabetically, then tools, then helper. -->
	<span id="editions"><a href="index.php">Latin 1</a> | <a href="index-latin-02.php">Latin 2</a> |  <a href="index-cyrillic.php">Cyrillic</a> | <a href="index-devanagari.php">Devanagari</a> | <a href="index-hebrew.php">Hebrew</a> | <a href="index-kannada.php">Kannada</a> | <a href="index-malayalam.php">Malayalam</a> | <a href="index-tamil.php">Tamil</a> | <a href="index-telugu.php">Telugu</a> | <a href="tools.php">Tools</a> | <a href="specimen-helper.php">Specimen Helper</a></span>
	<a href="javascript://" id="showhide">OpenType Features</a>
</div>
<div id="otfeatures" style="display: none;">
	<table width="100%">
		<tr>
			<td valign="top" width="25%">
				<input type="checkbox" id="kern" onchange="refreshFeatures()" checked>OpenType Kerning</input><br/>
				<br/>
				<input type="checkbox" id="liga" checked onchange="refreshFeatures()">Standard Ligatures</input><br/>
				<input type="checkbox" id="calt" checked onchange="refreshFeatures()">Contextual Alternates</input><br/>
				<input type="checkbox" id="dlig" onchange="refreshFeatures()">Discretionary Ligatures</input><br/>
				<input type="checkbox" id="swsh" onchange="refreshFeatures()">Swashes</input><br/>
				<input type="checkbox" id="salt" onchange="refreshFeatures()">Stylistic Alternates</input><br/>
				<input type="checkbox" id="titl" onchange="refreshFeatures()">Titling</input>
			</td>
			<td valign="top" width="25%">
				<input type="radio" name="smcp" checked onchange="refreshFeatures()">SmallCaps Off</input><br/>
				<input type="radio" id="fake-smcp" name="smcp" onchange="refreshFeatures()">Fake SmallCaps</input><br/>
				<input type="radio" id="smcp" name="smcp" onchange="refreshFeatures()">Real SmallCaps</input><br/>
				<input type="checkbox" id="c2sc" onchange="refreshFeatures()">Capitals to Small Caps</input><br/>
				<br/>
				<input type="checkbox" id="case" onchange="refreshFeatures()">Case Sensitive Forms</input>
			</td>
			<td valign="top" width="25%">
				<input type="radio" name="numsty" checked onchange="refreshFeatures()">Default Figures Style</input><br/>
				<input type="radio" id="lnum" name="numsty" onchange="refreshFeatures()">Lining Figures</input><br/>
				<input type="radio" id="onum" name="numsty" onchange="refreshFeatures()">Oldstyle Figures</input><br/>
				<br/>
				<input type="radio" name="numspc" checked onchange="refreshFeatures()">Default Figures Width</input><br/>
				<input type="radio" id="pnum" name="numspc" onchange="refreshFeatures()">Proportional Figures</input><br/>
				<input type="radio" id="tnum" name="numspc" onchange="refreshFeatures()">Tabular Figures</input>
			</td>
			<td valign="top" width="25%">
				<input type="checkbox" id="ordn" onchange="refreshFeatures()">Ordinals</input><br/>
				<input type="checkbox" id="frac" name="frac" onchange="refreshFeatures()">Fractions</input><br/>
				<input type="checkbox" id="zero" onchange="refreshFeatures()">Slashed zero</input><br/>
				<br/>
				<input type="checkbox" id="sups" onchange="refreshFeatures()">Superiors</input><br/>
				<input type="checkbox" id="numr" onchange="refreshFeatures()">Numerator</input><br/>
				<input type="checkbox" id="dnom" onchange="refreshFeatures()">Denominator</input><br/>
				<input type="checkbox" id="sinf" onchange="refreshFeatures()">Inferiors</input>			
			</td>
		</tr>
		<tr>
			<td colspan="4" valign="top">
			   <input type="checkbox" id="ss01" onchange="refreshFeatures()">ss01</input> &nbsp; 
			   <input type="checkbox" id="ss02" onchange="refreshFeatures()">ss02</input> &nbsp; 
			   <input type="checkbox" id="ss03" onchange="refreshFeatures()">ss03</input> &nbsp; 
			   <input type="checkbox" id="ss04" onchange="refreshFeatures()">ss04</input> &nbsp; 
			   <input type="checkbox" id="ss05" onchange="refreshFeatures()">ss05</input> &nbsp; 
			   <input type="checkbox" id="ss06" onchange="refreshFeatures()">ss06</input> &nbsp; 
			   <input type="checkbox" id="ss07" onchange="refreshFeatures()">ss07</input> &nbsp; 
			   <input type="checkbox" id="ss08" onchange="refreshFeatures()">ss08</input> &nbsp; 
			   <input type="checkbox" id="ss09" onchange="refreshFeatures()">ss09</input> &nbsp; 
			   <input type="checkbox" id="ss10" onchange="refreshFeatures()">ss10</input><br/>
			</td>
		</tr>
		<tr>
			<td colspan="4" valign="top">
			   <input type="checkbox" id="ss11" onchange="refreshFeatures()">ss11</input> &nbsp; 
			   <input type="checkbox" id="ss12" onchange="refreshFeatures()">ss12</input> &nbsp; 
			   <input type="checkbox" id="ss13" onchange="refreshFeatures()">ss13</input> &nbsp; 
			   <input type="checkbox" id="ss14" onchange="refreshFeatures()">ss14</input> &nbsp; 
			   <input type="checkbox" id="ss15" onchange="refreshFeatures()">ss15</input> &nbsp; 
			   <input type="checkbox" id="ss16" onchange="refreshFeatures()">ss16</input> &nbsp; 
			   <input type="checkbox" id="ss17" onchange="refreshFeatures()">ss17</input> &nbsp; 
			   <input type="checkbox" id="ss18" onchange="refreshFeatures()">ss18</input> &nbsp; 
			   <input type="checkbox" id="ss19" onchange="refreshFeatures()">ss19</input> &nbsp; 
			   <input type="checkbox" id="ss20" onchange="refreshFeatures()">ss20</input><br/>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<p style="margin: 0 0 6px;">Recommended CSS:</p>
				<p id="csscode"></p>
			</td>
		</tr>			
	</table>
</div>
<!-- End OT Features Menu -->