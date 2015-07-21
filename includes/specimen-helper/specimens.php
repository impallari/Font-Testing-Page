<div>
	
	<!-- Opciones del Specimen -->
	<form id="specimenform">
		
		<table width="920" cellpadding="4" cellpadding="0" border="0">
			<tr>
				<td>
					<p class="sizelabel">Specimen:</p>
					<select id="preset">
						<option value="" selected="selected">Select...</option>
						<optgroup label="Uppercase">
							<option value="11">Monarch</option>
							<option value="18">Condensed Gothics</option>
							<option value="1">What the world needs</option>
							<option value="26">Execution</option>
							<option value="25">Lantern</option>
							<option value="21">High Altitude</option>
							<option value="8">Casanova</option>
						</optgroup>
						<optgroup label="Sentence Case">
							<option value="13">Entretainment rendered</option>
							<option value="14">Deliziosamente morbide</option>
							<option value="15">Certificate of arrival</option>
							<option value="16">Letters to the Editor</option>
							<option value="22">Search Suggestions</option>
							<option value="4">Viticultire</option>					
							<option value="5">Libre Baskerville</option>					
						</optgroup>
						<optgroup label="Uppercase and Sentences">
							<option value="17">Publishing Companies</option>
							<option value="20">Interview</option>
							<option value="3">Gauntlet</option>
							<option value="6">Goshawk</option>
							<option value="7">Salinger</option>
							<option value="9">Quosque tandem</option>
							<option value="10">Big</option>
							<option value="12">Public Work</option>
						</optgroup>	
						<optgroup label="Multi-Line">
							<option value="19">Squaring a Circle</option>
							<option value="23">Printers Trade</option>
							<option value="24">Hotel Register</option>
							<option value="27">Grand Opera</option>
							<option value="2">Popular Lecture</option>
						</optgroup>								
					</select>
				</td>
				<td>
					<p class="sizelabel">Width:</p>
					<select id="ancho">
						<option value="238">300</option>
						<option value="338">400</option>
						<option value="398">460</option>
						<option value="438">500</option>
						<option value="538">600</option>   
						<option value="738">800</option>
						<option value="858" selected="selected">920</option>
						<option value="898">960</option>
						<option value="1138">1200 (600 @2x)</option>
						<option value="1538">1600 (800 @2x)</option>
						<option value="1858">1920 (960 @2x)</option>
					</select>
				</td>
				<td>
					<p class="sizelabel">Line-height:</p>
					<select id="lines">
						<option value="" selected="selected">Select...</option>
						<option value="1">1</option>
						<option value="1.1">1.1</option>
						<option value="1.2">1.2</option>
						<option value="1.3">1.3</option>
						<option value="1.4">1.4</option>
						<option value="1.5">1.5</option>
						<option value="1.6">1.6</option>
						<option value="1.7">1.7</option>
						<option value="1.8">1.8</option>
					</select>
					
				</td>
				<td>
					<p class="sizelabel">&nbsp;</p>
					<button type="submit" id="updateText">Update</button>
				</td>
				<td>
					<p class="sizelabel" style="line-height: 15px !important;">
						This tool is only intended as a quick way to preview fonts in a specimen format during development stages. 
						Please don't use it for marketing purposes. Or if you do, at least take the time to change the texts, they are editable. Don't be Lazy :)</p>
				</td>
			</tr>
		</table>

	</form>
	<!-- Fin Opciones del Specimen -->

	<div id="specimen" style="width: 858px; padding: 20px 30px ; margin-top: 20px; border: 1px solid #333;">
		<div id="big" style="width: 858px;" contenteditable="true">
			<p>First, Drag your fonts to the top of the page</p>
			<p>Then type something here</p>
			<p>And Click Update</p>
			<p>Create quick specimens</p>
			<p>For testing your fonts</p>
		</div>
	</div>	

</div>	

<!-- Javascript for Specimen Generator -->	
<script src="js/bigtext.js" type="text/javascript" charset="utf-8"></script>
<script>
// Presets
var preset = new Array(); 

preset[1] = '<p>\“DON\'T ASK WHAT THE WORLD NEEDS.</p>' +
			'<p>ASK WHAT MAKES YOU</p>' +
			'<p>COME ALIVE</p>' +
			'<p>AND GO DO IT.</p>' +
			'<p>BECAUSE WHAT THE WORLD NEEDS</p>' +
			'<p>IS PEOPLE WHO HAVE COME ALIVE.\” — H. THURMAN</p>'

preset[2] = '<p style="text-align: center; margin-bottom: 0.6em">HEBRIDEAN LITERATURE<br/>POPULAR LECTURE</p>' + 
			 '<p style="text-align: center; margin-bottom: 0.7em">SCOTTISH BALLAD CONCERT<br/>GRAND PROGRAMME</p>' +
			 '<p style="text-align: center; margin-bottom: 0.8em">HELLENIC MONUMENTAL DESIGNS<br/>ANCIENT ARCHITECTURE</p>' +
			 '<p style="text-align: center; margin-bottom: 0">EXPLORING AND SURVEYING SYNDICATE<br/>NORTH AFRICAN EXPEDITION</p>'

preset[3] = '<p>MEDIEVAL TAILORING</p>' +
		'<p>Serving the Chivalric Community Since 1286</p>' +
		'<p>Knightly Service</p>' +
		'<p>Gauntlet</p>' +
		'<p>In by Dusk, Ready by Sunrise</p>' +
		'<p>Does this breastplate make me look fat?</p>' +
		'<p>543 LBS OF IRON</p>' +
		'<p>Dents Mended While U Wait</p>' +
		'<p>How Quixotic!</p>' +
		'<p>Hammered & Pressed</p>' +
		'<p>I\'m Afraid this Hauberk is a Real Mesh</p>' +
		'<p>COAT OF ARMS</p>'

preset[4] = '<p>Finger Sandwiches & Cheese</p>' +
		'<p>1978 Eiswein</p>' +
		'<p>The poached salmon was exquisitely chilled</p>' +
		'<p>Brut</p>' +
		'<p>Haut-Médoc</p>' +
		'<p>Attack of the Phylloxera</p>' +
		'<p>Viticultire</p>'

preset[5] = '<p>Libre Baskervile</p>' +
		'<p>Is a “Libre” font, released under the SIL Open Font License</p>' +
		'<p>You can use it for free</p>' +
		'<p>for both Personal and Commercial Projects alike</p>' +
		'<p>Share it with your friends</p>' +
		'<p>Use it for Print, Web, eBooks & Apps</p>' +
		'<p>No Restrictions</p>' +
		'<p>And there is no need to buy a Commercial License</p>' +
		'<p>If you want to show your support, make a Donation!</p>' +
		'<p>But it\'s not a requirement, just a little good karma :)</p>' +
		'<p>http://www.impallari.com - impallari@gmail.com</p>'

preset[6] = '<p>Goshawk</p>' +
		'<p>SEYMOUR ZOOEY FRANNY</p>' +
		'<p>SALINGER</p>' +
		'<p>my hard nose, glass jaw, and soft heart</p>' +
		'<p>1847 1965 & 2003</p>' +
		'<p>Type Quiz Mocks Faux Oblique</p>'

preset[7] = '<p>Sixty Randgloves</p>' +
		'<p>AMBIENT FUNK TRANCE DOWNTEMPO JUMPSTYLE</p>' +
		'<p>SALINGER</p>' +
		'<p>Brake House & Air Chamber</p>' +
		'<p>Quick Grow August 23, 1785 Mojave Kupfer Equalizer</p>'
		
preset[8] = '<p>Mayusculas para la letra Romanilla</p>' +
		'<p>A B C D</p>' +
		'<p>E F G H</p>' +
		'<p>I L M N</p>' +
		'<p>O P Q R</p>' +
		'<p>S T V U</p>' +
		'<p>X Y Z Z</p>' +
		'<p>Casanova me Escrivia</p>'
		
preset[9] = '<p>Quosque tan-</p>' +
		'<p>dem abutere, &</p>' +
		'<p>ABCDEFGHI</p>' +
		'<p>£123456789</p>'
		
preset[10] = '<p>BIG</p>' +
		'<p>TEA</p>' +
		'<p>FUN</p>' +
		'<p>FIRE</p>' +
		'<p>arms</p>' +
		'<p>MORE</p>' +
		'<p>reason</p>' +
		'<p>£52</p>' +
		'<p>BELMONT</p>' +
		'<p>$7326590</p>' +
		'<p>HAMPTON COURT</p>' +
		'<p>GODMANCHESTER</p>' +
		'<p>Bill Sums</p>' +
		'<p>WIN</p>' +
		'<p>LOTTERY</p>' +
		'<p>Fortunatus</p>' +
		'<p>Thames&Canal</p>' +
		'<p>NAVIGATION</p>' +
		'<p>FREEHOLD ESTATES</p>' +
		'<p>CAPITAL MANSION</p>' +
		'<p>BRISTOL</p>' +
		'<p>FIELDING</p>' +
		'<p>ROMEO AND JULIET</p>' +
		'<p>SOLD BY AUCTION</p>' +
		'<p>NORTHUMBERLAND</p>' +
		'<p>THE ISLE OF WIGHT</p>' +
		'<p>GOLD</p>' +
		'<p>MINE</p>'

preset[11] = '<p style="margin-bottom: 0.05em">MONARCH</p>' +
			 '<p style="margin-bottom: 0.1em">REIMBRUSED</p>' +
			 '<p style="margin-bottom: 0.15em">NORMAN KINGS</p>' +
			 '<p style="margin-bottom: 0.2em">RECENT HEROISM</p>' +
			 '<p style="margin-bottom: 0.25em">DEMAND ENHANCED</p>' +
			 '<p style="margin-bottom: 0.3em">BIRMINGHAM REFORMERS</p>' +
			 '<p style="margin-bottom: 0.35em">DECORATED ARCHITECTURE</p>' +
			 '<p style="margin-bottom: 0.4em">MIDSUMMER TOURIST NUMBER</p>' +
			 '<p style="margin-bottom: 0.45em">HISTORIC MANSION IN DORSETSHIRE</p>' +
			 '<p style="margin-bottom: 0.5em">SELECTIONS FROM SEVERAL CONTRIBUTORS</p>' +
			 '<p style="margin-bottom: 0">MODERNISED DIRECTORIES FOR BRISTISH MERCHANTS</p>'
		
preset[12] = '<p>PUBLIC WORK</p>' +
		'<p>Town Building</p>' +
		'<p>GREEN MEADOW</p>' +
		'<p>Healthy Rambles</p>' +
		'<p>Goverment $54</p>' +
		'<p>EVENING CONCERTS</p>' +
		'<p>Music Hath Charms</p>' +
		'<p>Classical Selections</p>'

preset[13] = '<p style="margin-bottom: 0">Entretainment rendered</p>' +
			 '<p style="margin-bottom: 0.02em">From members connected with</p>' +
			 '<p style="margin-bottom: 0.04em">Gratitude can never be fairly expected to</p>' +
			 '<p style="margin-bottom: 0.07em">Nowhere in this country can be found seaside</p>' +
			 '<p style="margin-bottom: 0.15em">Building boom in wonderful suburbs of San Francisco</p>' +
			 '<p style="margin-bottom: 0.27em">Rapid printing necessitated through enormous circulations perfecting</p>' +
			 '<p style="margin-bottom: 0.41em">It affords us pleasure to extend this greeting to our friends and patrons to inspect</p>' +
			 '<p style="margin-bottom: 0">A stimulus to the movement for final settlement of international disputes by arbitration has been given by</p>'

preset[14] = '<p style="margin-bottom: 0.16em">Deliziosamente morbide</p>' +
			 '<p style="margin-bottom: 0.12em">Pour vous monsieur</p>' +
			 '<p style="margin-bottom: 0.08em">Literariamente</p>' +
			 '<p style="margin-bottom: 0.04em">Bibliotheken</p>' +
			 '<p style="margin-bottom: 0">Escursioni</p>'

// Poner Margin Bottom
preset[15] = '<p>Map of the current surface temperatures of the North Atlantic Ocean</p>' +
		'<p>Fossil shells of tertiary formations of the Unites States of America</p>' +
		'<p>History of English literature and the English language</p>' +
		'<p>A century of birds from the Himalaya Mountains</p>' +
		'<p>Travels in Switzerland, Sweden and Denmark</p>' +
		'<p>Descriptions of the character of a thing</p>' +
		'<p>Office for registrations of removals</p>' +
		'<p>Standard system of shorthand</p>' +
		'<p>Economic of Agriculture</p>' +
		'<p>Certificate of arrival</p>' +
		'<p>Positions wanted</p>' +
		'<p>New Zealand</p>' +
		'<p>December</p>' +
		'<p>Garden</p>'

// Poner Margin Bottom
preset[16] = '<p>A geological survey of a mountain tract of Sierra Nevada in Southern California</p>' +
		'<p>Photographs and plot summaries of the pays produced in Manchester last season</p>' +
		'<p>The everyday activities and work of three English children on a farm</p>' +
		'<p>Candidate for the Final Examination of a Secondary School</p>' +
		'<p>Historical and archaeological sketch of the city of Goa</p>' +
		'<p>Leonardo da Vinci: The Landscapes and Plantes</p>' +
		'<p>Fifteen years on the Goald Coast of Africa</p>' +
		'<p>The Pyramids and Temples of Gizeh</p>' +
		'<p>Intuitive method of instruction</p>' +
		'<p>Civil Service Association</p>' +
		'<p>Letters to the Editor</p>' +
		'<p>Administration</p>' +
		'<p>Central Line</p>' +
		'<p>OXFORD</p>'		

preset[17] = '<p style="text-align: center; margin-bottom: 0">IRON MERCHANTS AND TRADER</p>' +
			 '<p style="text-align: center; margin-bottom: 0.8em">Metropolitan Banking Companies</p>' +
			 '<p style="text-align: center; margin-bottom: 0">PUBLISHING COMPANIES</p>' +
			 '<p style="text-align: center; margin-bottom: 0.7em">Memoirs of Eminent Men</p>' +
			 '<p style="text-align: center; margin-bottom: 0">JOURNAL OF HEALT</p>' +
			 '<p style="text-align: center; margin-bottom: 0.6em">Important Information</p>' +
			 '<p style="text-align: center; margin-bottom: 0">MOUNTAIN SCENE</p>' +
			 '<p style="text-align: center; margin-bottom: 0.5em">Emigration Trains</p>' +
			 '<p style="text-align: center; margin-bottom: 0">FRENCH POETS</p>' +
			 '<p style="text-align: center; margin-bottom: 0.4em">Prose Writers</p>' +
			 '<p style="text-align: center; margin-bottom: 0">MONUMENTS</p>' +
			 '<p style="text-align: center; margin-bottom: 0.3em">Banner House</p>' +
			 '<p style="text-align: center; margin-bottom: 0">PRINTERS</p>' +
			 '<p style="text-align: center; margin-bottom: 0">Instructors</p>'

preset[18] = '<p style="margin-bottom: 0.5em">AFRICA, NO WHITEWASH BUSINESS OF ANY KIND</p>' +
			 '<p style="margin-bottom: 0.45em">LIGTHENS THE SCENE, BUT THE MIDNIGHT</p>' +
			 '<p style="margin-bottom: 0.4em">FEATURES OF THE OFFICE TOWEL</p>' +
			 '<p style="margin-bottom: 0.35em">SIERRA MADRE MOUNTAINS</p>' +
			 '<p style="margin-bottom: 0.3em">EL MONTE LIME HEDGES</p>' +
			 '<p style="margin-bottom: 0.25em">SULTANA SEEDLESS!</p>' +
			 '<p style="margin-bottom: 0.2em">GRAPE CUTTINGS</p>' +
			 '<p style="margin-bottom: 0.15em">BUDDED FRUITS</p>' +
			 '<p style="margin-bottom: 0.1em">ORANGE TREE</p>' +
			 '<p style="margin-bottom: 0.05em">BERGAMOT!</p>' +
			 '<p style="margin-bottom: 0">MISSIONS</p>'

preset[19] = '<p style="text-align: center; margin-bottom: 0.8em">TREATISES ON THE PRINCIPLES OF GEOMETRY<br/>Mathematical Measurements 360<br/>Attributes and Relations of Magnitude Found</p>' +
			 '<p style="text-align: center; margin-bottom: 0.7em">ARITHMETICAL QUESTIONS DISCUSSED<br/>Many Intrincate Computations 64<br/>Investigating the Mysteries of Calculations</p>' +
			 '<p style="text-align: center; margin-bottom: 0.6em">STRANGE THEOREMS PROVED<br/>Concerning the Round<br/>Odd Tricks of Numbers 125</p>' +
			 '<p style="text-align: center; margin-bottom: 0">SQUARING A CIRCLE<br/>Trying Problem<br/>Puzzles for Scholars</p>'
	
preset[20] = '<p>HEMISPHERE</p>' +
		'<p>Foreign Correspondent</p>' +
		'<p>Satelite disruption by goverment</p>' +
		'<p>INTERVIEW</p>' +
		'<p>Prime Minister Reveals Secret</p>' +
		'<p>FRAGILE</p>' +
		'<p>EVEN BAD BOYS GET THE BLUES</p>' +
		'<p>Air Travel</p>' +
		'<p>One-Way Tickets to Paradise</p>' +
		'<p>Handle With Care</p>'

preset[21] = '<p>HIGH ALTITUDE</p>' +
		'<p>OXYGEN BECOMING SCARE</p>' +
		'<p>MINIMUN VISIBILITY</p>' +
		'<p>HYPOTHERMIA</p>' +
		'<p>STRENGTH & DETERMINATION REDOUBLED</p>' +
		'<p>MISSION</p>' +
		'<p>FIND A SOCKET WRENCH</p>' +
		'<p>SUCCESS</p>' +
		'<p>PLANS FOR 367-SLOT TOASTER MAY NOW PROCEED</p>' +
		'<p>VENTURE CAPITALISTS</p>'		

// Poner Margin Bottom
preset[22] = '<p>Passion is like fire</p>' +
			 '<p>We are all made of Energy</p>' + 
			 '<p>Some things are meant to be</p>' + 
			 '<p>Let the Universe be your guide<p>' +
			 '<p>Waves of energy that travel through earth</p>' + 
			 '<p>Some people feel the rain, others just get wet</p>'

preset[23] = '<p style="text-align: center; margin-bottom: 0.8em">Originality Claims Administration Everywhere<br/>Printers know a \“Good Thing\” when they see it;<br/>Therefore, we show one of the \“Best<br/>Things\” in Hand-Cut Types.</p>' + 
             '<p style="text-align: center; margin-bottom: 0.7em">The Printer Who Starts In<br/>Determined to use Universal Line<br/>and Nickel-Alloy Types</p>' +
             '<p style="text-align: center; margin-bottom: 0.6em">Is Sure To Build Up<br/>A Substantial and Profitable<br/>Printers\'Trade</p>' + 
             '<p style="text-align: center; margin-bottom: 0">Quality Shown<br/>In Our Productions</p>'

preset[24] = '<p style="text-align: center; margin-bottom: 0.8em">The Southern Industrial Association<br/>Remarkable Progress in Manufacturing Industries<br/>During the Last Ten Years</p>' + 
             '<p style="text-align: center; margin-bottom: 0.7em">Explorers in Search of Hidden<br/>Treasure, Relating Their Wonderful<br/>Adventures in Public</p>' +
             '<p style="text-align: center; margin-bottom: 0.6em">The Charcoal Sketch<br/>Club Will Tender a Banquet</p>' + 
             '<p style="text-align: center; margin-bottom: 0.5em">Rural Home Life</p>' + 
             '<p style="text-align: center; margin-bottom: 0">Hotel Register</p>'


preset[25] = '<p>LANTERN</p>' + 
			 '<p>TORCH</p>' + 
			 '<p>ITEM</p>' + 
			 '<p>MERCURY</p>' + 
			 '<p>LEDGER</p>'

preset[26] = '<p>SIZE</p>' + 
			 '<p>FORM</p>' + 
			 '<p>WEIGHT</p>' + 
			 '<p>LAYOUT</p>' + 
			 '<p>SPACING</p>' + 
			 '<p>EXECUTION</p>'

preset[27] = '<p style="text-align: center; margin-bottom: 0.1em">READING</p>' + 
			 '<p style="text-align: center; margin-bottom: 0.2em">HAND MADE</p>' + 
			 '<p style="text-align: center; margin-bottom: 0.3em">GRAND OPERA</p>' + 
			 '<p style="text-align: center; margin-bottom: 0.4em">ANCIENT LEGENDS</p>' + 
			 '<p style="text-align: center; margin-bottom: 0.5em">BRITISH NAVY LEAGUE<br/>ANNUAL MEETING</p>' + 
			 '<p style="text-align: center; margin-bottom: 0.6em">ENGLISH DRAMATIC RECITAL<br/>COMEDIES RESTORED</p>' +
			 '<p style="text-align: center; margin-bottom: 0">MODERN ARTISTIC PRINTING DISPLAY<br/>TYPOGRAPHICAL EXHIBITION</p>'
	
// Update Function
function fitit() {
	$("#big > p").removeClass();	
	$('#big').bigtext({ 
		childSelector: '> p',
		minfontsize: 11,
		maxfontsize: 2000,
	});
	$('#big p').css( "line-height", $('#lines').val() )
}; 
	
// Ancho del Specimen
$('#ancho').change(function () {
    $('#specimen').width( $(this).val() )
    $('#big').width( $(this).val() )
    fitit();
});   

// Texto del Specimen
$('#preset').change(function () {
    $('#big').html( preset[$(this).val()] )
    fitit();
});      

// Line Height
$('#lines').change(function () {
    $('#big p').css( "line-height", $(this).val() )
    fitit();
}); 

// Update
$("#specimenform").submit(function(event) {
	event.preventDefault();
	fitit();
}); 
 
</script>
<!-- End Javascript for Specimen Generator -->	
