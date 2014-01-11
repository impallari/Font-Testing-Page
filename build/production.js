var GRUMPIES = {
	'short': {
		'text': "Grumpy wizards make toxic brew for the evil Queen and Jack. A quick movement of the enemy will jeopardize six gunboats. The job of waxing linoleum frequently peeves chintzy kids. My girl wove six dozen plaid jackets before she quit. Twelve ziggurats quickly jumped a finch box.",
		'columns': [ // single column
			{
				sizes: [72, 60, 48, 36, 30, 29, 28, 27, 26, 25, 24, 23, 22, 21, 20, 19, 18, 17, 16, 15, 14, 13, 12],
				innerblock: 'div'
			}
		],
		'tab': '#headlines'
	},

	'long': {
		'text': "Grumpy wizards make toxic brew for the evil Queen and Jack. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. 01234567890 ",
		'columns': [ // two columns
			{sizes: [20, 19, 18, 17], innerblock: '.textsettingCol1'},
			{sizes: [16, 15, 14, 13, 12, 11, 10], innerblock: '.textsettingCol2'}
		],
		'tab': '#text'
	},

	'lowercaseShort': {
		'text': "the five boxing wizards jump quickly pack my red box with five dozen quality jugs a very big box sailed up then whizzed quickly from japan",
		'columns': [
			{sizes: [72, 60, 48, 36, 30, 24, 18], innerblock: 'div:first'}
		],
		'tab': '#lowercases'
	},

	'lowercaseLong': {
		'text': "serviced tightly trestle custom nosey impugned gooier deeper oat charade smashed welting clopping fondly discard welfare gaudy mission shoddily mooed knelling glance golfed trope togae knocked vulgarly gigabyte curbing snowball outback stepped marmot clayier coltish descry gratify root freedom puree urgency moist careered journal oracle felony marble salary readying besiege twitched ranching snoozing disk mister warbling outwit schism sudsiest street gondola blushing pennon smarted jiving sty rocker griping rocketry dieing tarring A very big box sailed up then whizzed quickly from Japan the five boxing wizards jump quickly pack my red box with five dozen quality jugs",
		'columns': [
			{sizes: [16, 15, 14], innerblock: '.textsettingCol1'},
			{sizes: [13, 12, 11, 10], innerblock: '.textsettingCol2'}
		],
		'tab': '#lowercases'
	},

	'adhesionShort': {
		'text': "adhesion donnishness indianians deaden on ode so sheenie died dashed dens seaside easines nonseasoned seen hindi said seines sadnesses deaden donnishness dissensions dead",
		'columns': [
			{sizes: [72, 60, 48, 36, 30, 24, 18], innerblock: 'div:first'}
		],
		'tab': '#adhesion'
	},

	'adhesionLong': {
		'text': "dined shoon hooded ahead shined hashed dinned soon nod nine sane inned ani session doe node idea side indeed aide anise hose noose noshed inside hid aeon inane none hoed nosed diseased handed noise haded sanded one hie deeded shine honed disdained hen ash said hah onion sodded donned and aha dine disease deed adenoid hoodooed deaned end denied anon iodine nosh shooed deadened sided addenda did aniseed sand hied nodded nose shoeshine hashish hissed done seed noon sensed sinned needed send nooned odd disdain shinned anion had shied",
		'columns': [
			{sizes: [16, 15, 14], innerblock: '.textsettingCol1'},
			{sizes: [13, 12, 11, 10], innerblock: '.textsettingCol2'}
		],
		'tab': '#adhesion'
	},

	'hamburgefonstivShort': {
		'text': "fortieth boring trait favoring barrage referring thrusting tannest embargo sausage gaining astutest augur hibernate variant hearse beggaring foresee eagerer hearten ensnaring tufting interstate meager veneration stigma feminine tabbing noising trimming throbbing ransoming stiffen oaring fishing rehire overbore bonniest ravishment teensiest mintier shriven unforeseen overrate surgeon smarter submarine revenging assuaging masher amnesia insentient rehashing fresher buttering sorghum thine sitter month serer minting variate torsion gaunt",
		'columns': [
			{sizes: [72, 60, 48, 36, 30, 24, 18], innerblock: 'div:first'}
		],
		'tab': '#hamburgefonstiv'
	},

	'hamburgefonstivLong': {
		'text': "fortieth boring trait favoring barrage referring thrusting tannest embargo sausage gaining astutest augur hibernate variant hearse beggaring foresee eagerer hearten ensnaring tufting interstate meager veneration stigma feminine tabbing noising trimming throbbing ransoming stiffen oaring fishing rehire overbore bonniest ravishment teensiest mintier shriven unforeseen overrate surgeon smarter submarine revenging assuaging masher amnesia insentient rehashing fresher buttering sorghum thine sitter month serer minting variate torsion gaunt berthing goofiest sober informing sourer tonight neigh iratest torte situate rheumier antagonist serening motion guise unseeing masseuse",
		'columns': [
			{sizes: [16, 15, 14], innerblock: '.textsettingCol1'},
			{sizes: [13, 12, 11, 10], innerblock: '.textsettingCol2'}
		],
		'tab': '#hamburgefonstiv'
	},

	'caps': {
		'text': "Arrowroot Barlety Chervil Dumpling Endine Flaxseed Garbanzo Hijiki Ishtu Jicama Kale Lycheen Marjoram Nectarine Oxtail Pizza Quinoa Roquefort Squash Tofu Uppuma Vanilla Wheat Xergis Yogurt Zweiback 0 1 2 3 4 5 6 7 8 9 ! ?",
		'columns': [
			{sizes: [60, 48, 36, 30, 28, 24, 20, 18, 16, 14, 13], innerblock: 'div'}
		],
		'tab': '#caps'
	},

	'allcaps': {
		'text': "ARROWROOT BARLETY CHERVIL DUMPLING ENDINE FLAXSEED GARBANZO HIJIKI ISHTU JICAMA KALE LYCHEEN MARJORAM NECTARINE OXTAIL PIZZA QUINOA ROQUEFORT SQUASH TOFU UPPUMA VANILLA WHEAT XERGIS YOGURT ZWEIBACK 0 1 2 3 4 5 6 7 8 9 ! ?",
		'columns': [
			{sizes: [60, 48, 36, 30, 28, 24, 20, 18, 16, 14, 13], innerblock: 'div'}
		],
		'tab': '#allcaps'
	}
};

var hintsCaps = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var hintsLower = "abcdefghijklmnopqrstuvwxyz.:;,";
var hintsNumbers= "1234567890 @ &amp;!?#$€%";


function eventTextLineChange(e) {
	var $this = $(this);
	bulkChangeTextForTab(e.data.grumpy, $this.text(), $this);
}


function onblur() {
	var $this = $(this);
	var text = $this.html();
	if ($this.data('enter') !== text) {
		$this.data('enter', text);
		$this.trigger({type: 'change', action : 'save'});
	}
	return $this;
}


function onkeyup() {
	var $this = $(this);
	var text = $this.html();
	if ($this.data('before') !== text) {
		$this.data('before', text);
		$this.trigger({type: 'change', action : 'update'});
	}
	return $this;
}


function onfocus() {
	var $this = $(this);
	$this.data('enter', $this.html());
	$this.data('before', $this.html());
	return $this;
}


function setColumnTemplate(container, grumpy) {
	for (var k = 0; k < grumpy.columns.length; k++) {

		var sizes = grumpy.columns[k].sizes;
		var block = container.find(grumpy.columns[k].innerblock);
		for (var i = 0; i < sizes.length; i++) {
			fontsize = sizes[i].toString();
			block.append($('<p>').addClass('sizelabel').text(fontsize + 'px'));

			var textline = $('<p>').addClass('textline')
				.css('font-size', fontsize + 'px')
				.attr('contenteditable', true)
				.text(grumpy.text)
				.on('focus', onfocus)
				.on('keyup paste', onkeyup)
				.on('blur', onblur)
				.on('change', {'grumpy': grumpy}, eventTextLineChange);

			block.append(textline);
			//block.append($('<p>&nbsp;</p>'));
		}
	}
}

function setColumnTemplate2(container, grumpy) {
	for (var k = 0; k < grumpy.columns.length; k++) {

		var sizes = grumpy.columns[k].sizes;
		var block = container.find(grumpy.columns[k].innerblock);
		for (var i = 0; i < sizes.length; i++) {
			fontsize = sizes[i].toString();
			block.append($('<p>').addClass('sizelabel').text(fontsize + 'px'));

			var textline = $('<p>').addClass('textline')
				.css('font-size', fontsize + 'px')
				.attr('contenteditable', true)
				.text(grumpy.text)
				.on('focus', onfocus)
				.on('keyup paste', onkeyup)
				.on('blur', onblur)
				.on('change', {'grumpy': grumpy}, eventTextLineChange);

			block.append(textline);
			block.append($('<p>&nbsp;</p>'));
		}
	}
}


function setSplitSingleToDual(container, grumpies_short, grumpies_long) {
	setColumnTemplate(container, grumpies_short);
	setColumnTemplate(container, grumpies_long);
}


function bulkChangeTextForTab(grumpy, value, except) {
	for (var i = 0; i < grumpy.columns.length; i++) {
		$(grumpy.tab).find(grumpy.columns[i].innerblock).find('.textline').not(except).text(value);
	}
}


function prepareAndShowFontLayout() {

	setColumnTemplate($('#headlines'), GRUMPIES.short);

	setColumnTemplate2($('#text'), GRUMPIES.long);

	var $lowercases = $('#lowercases');
	setColumnTemplate($lowercases, GRUMPIES.lowercaseShort);
	setColumnTemplate2($lowercases, GRUMPIES.lowercaseLong);

	var $adhesion = $('#adhesion');
	setColumnTemplate($adhesion, GRUMPIES.adhesionShort);
	setColumnTemplate2($adhesion, GRUMPIES.adhesionLong);

	var $hamburgefonstiv = $('#hamburgefonstiv');
	setColumnTemplate($hamburgefonstiv, GRUMPIES.hamburgefonstivShort);
	setColumnTemplate2($hamburgefonstiv, GRUMPIES.hamburgefonstivLong);

	var $caps = $('#caps');
	setColumnTemplate2($caps, GRUMPIES.caps);

	var $allcaps = $('#allcaps');
	setColumnTemplate2($allcaps, GRUMPIES.allcaps);

	var target = document.createElement('div');
	target.setAttribute('style','width: 920px;');
	for (var a = 28; a>8; a--) {
		var sizelabel = document.createElement('p');
		sizelabel.setAttribute('class','sizelabel');
		sizelabel.textContent = a + 'px';
		target.appendChild(sizelabel);

		var hintslower = document.createElement('p');
		hintslower.setAttribute('contenteditable','true');
		hintslower.setAttribute('class','hints-lower');
		hintslower.setAttribute('style','font-size: ' + a + 'px');
		target.appendChild(hintslower);

		var hintscaps = document.createElement('p');
		hintscaps.setAttribute('contenteditable','true');
		hintscaps.setAttribute('class','hints-caps');
		hintscaps.setAttribute('style','font-size: ' + a + 'px');
		target.appendChild(hintscaps);

		var hintsnumbers = document.createElement('p');
		hintsnumbers.setAttribute('contenteditable','true');
		hintsnumbers.setAttribute('class','hints-numbers');
		hintsnumbers.setAttribute('style','font-size: ' + a + 'px');
		target.appendChild(hintsnumbers);

		var hintsend = document.createElement('p');
		hintsend.innerHTML = '&nbsp;';
		target.appendChild(hintsend);
	};
	document.getElementById('hinting').appendChild(target);

	var hints_caps = $('.hints-caps');
	var hints_numbers = $('.hints-numbers');
	var hints_lower = $('.hints-lower');
	hints_lower.html(hints_lower.html() + hintsLower);
	hints_caps.html(hints_caps.html() + hintsCaps);
	hints_numbers.html(hints_numbers.html() + hintsNumbers);
}

// jQuery contentEditable() plugin
//
// Created by: Makis Tracend (@tracend)
// Issue: http://stackoverflow.com/a/6263537
//
// Licensed under the GPL Version 2: http://www.gnu.org/licenses/gpl-2.0.html

(function( $ ){

  var methods = {
	 init : function( options ) {
		
		return this.each(function(){
		 
			var $this = $(this);
			
			//reset any previous change events set
			$this.unbind("change");
			
			$this.find('[contenteditable]').each(function(){
			
				$(this).contentEditable("field", $this);
				
			});
			
		});
	 },
	 field : function( parent ) {
	 
	 	return this.each(function(){
		
		 	var $this = $(this);
			// setting the key based on an attribute available on the same level as 'contentEditable'
			var key = $this.attr("data-key");
			// add triggers
			$this.live('focus', function() {
				var $this = $(this);
				$this.data('enter', $this.html());
				$this.data('before', $this.html());
				return $this;
			}).live('keyup paste', function() {
				var $this = $(this);
				var text = $this.html();
				if ($this.data('before') !== text) {
					$this.data('before', text);
					var data = {};
					data[key] = text;
					parent.trigger({type: 'change', action : 'update', changed: data});
				}
				return $this;
			}).live('blur', function() {
				var $this = $(this);
				var text = $this.html();
				if ($this.data('enter') !== text) {
					$this.data('enter', text);
					var data = {};
					data[key] = text;
					parent.trigger({type: 'change', action : 'save', changed: data});
				}
				return $this;
			})
	 	});
	 }
  };

  $.fn.contentEditable = function( method ) {
	
	if ( methods[method] ) {
	  return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
	} else if ( typeof method === 'object' || ! method ) {
	  return methods.init.apply( this, arguments );
	} else {
	  $.error( 'Method ' +  method + ' does not exist on jQuery.contentEditable' );
	}	
  
  };

})( jQuery );
/*
* font dragr v1.5
* http://www.thecssninja.com/javascript/font-dragr
* Copyright (c) 2010 Ryan Seddon 
* released under the MIT License
*/
var TCNDDF = TCNDDF || {};

(function(){
var dropContainer,
dropListing,
displayContainer,
domElements,
fontPreviewFragment = document.createDocumentFragment(),
styleSheet,
fontFaceStyle,
persistantStorage = window.localStorage || false,
webappCache = window.applicationCache || window,
contentStorageTimer;

TCNDDF.setup = function () {
dropListing = document.getElementById("fonts");
dropContainer = document.getElementById("dropcontainer"); 
displayContainer = document.getElementById("custom");
styleSheet = document.styleSheets[0];

dropListing.addEventListener("click", TCNDDF.handleFontChange, false);

/* LocalStorage events */
if(persistantStorage) {
displayContainer.addEventListener("keyup", function(){contentStorageTimer = setTimeout("TCNDDF.writeContentEdits('mainContent')",1000);}, false);
displayContainer.addEventListener("keydown", function(){clearTimeout(contentStorageTimer);}, false);

// Restore changed data
TCNDDF.readContentEdits("mainContent");
}

/* DnD event listeners */
dropContainer.addEventListener("dragenter", function(event){TCNDDF.preventActions(event);}, false);
dropContainer.addEventListener("dragover", function(event){TCNDDF.preventActions(event);}, false);
dropContainer.addEventListener("drop", TCNDDF.handleDrop, false);

/* Offline event listeners */
webappCache.addEventListener("updateready", TCNDDF.updateCache, false);
webappCache.addEventListener("error", TCNDDF.errorCache, false);
};

TCNDDF.handleDrop = function (evt) {
var dt = evt.dataTransfer,
files = dt.files || false,
count = files.length,
acceptedFileExtensions = /^.*\.(ttf|otf|woff)$/i;


TCNDDF.preventActions(evt);

for (var i = 0; i < count; i++) {
var file = files[i],
droppedFullFileName = file.name,
droppedFileName,
droppedFileSize;

if(droppedFullFileName.match(acceptedFileExtensions)) {
droppedFileName = droppedFullFileName.replace(/\..+$/,""); // Removes file extension from name
droppedFileName = droppedFileName.replace(/\W+/g, "-"); // Replace any non alpha numeric characters with -
droppedFileSize = Math.round(file.size/1024) + "kb";

TCNDDF.processData(file,droppedFileName,droppedFileSize);
} else {
alert("Invalid file extension. Will only accept ttf, otf or woff font files");
}
}
};

TCNDDF.processData = function (file, name, size) {
var reader = new FileReader();
reader.name = name;
reader.size = size;

/* 
Chrome 6 dev can't do DOM2 event based listeners on the FileReader object so fallback to DOM0
http://code.google.com/p/chromium/issues/detail?id=48367
reader.addEventListener("loadend", TCNDDF.buildFontListItem, false);
*/
reader.onloadend = function (event) { TCNDDF.buildFontListItem(event); }
reader.readAsDataURL(file); 
};

TCNDDF.buildFontListItem = function (event) {
domElements = [
document.createElement('li'),
document.createElement('span'),
document.createElement('span')
];

var name = event.target.name,
size = event.target.size,
data = event.target.result;

// Dodgy fork because Chrome 6 dev doesn't add media type to base64 string when a dropped file(s) type isn't known
// http://code.google.com/p/chromium/issues/detail?id=48368
var dataURL = data.split("base64");

if(dataURL[0].indexOf("application/octet-stream") == -1) {
dataURL[0] = "data:application/octet-stream;base64"

data = dataURL[0] + dataURL[1];
}

// Get font file and prepend it to stylsheet using @font-face rule
fontFaceStyle = "@font-face{font-family: "+name+"; src:url("+data+");}";
styleSheet.insertRule(fontFaceStyle, 0);

domElements[2].appendChild(document.createTextNode(size));
domElements[1].appendChild(document.createTextNode(name));
domElements[0].className = "active";
domElements[0].title = name;
domElements[0].style.fontFamily = name;
domElements[0].appendChild(domElements[1]);
domElements[0].appendChild(domElements[2]);

fontPreviewFragment.appendChild(domElements[0]);

dropListing.appendChild(fontPreviewFragment);
TCNDDF.updateActiveFont(domElements[0]);
displayContainer.style.fontFamily = name;
};

/* Control changing of fonts in drop list  */
TCNDDF.handleFontChange = function (evt) {
var clickTarget = evt.target || window.event.srcElement;

if(clickTarget.nodeName.toLowerCase() === 'span') {
clickTarget = clickTarget.parentNode;
TCNDDF.updateActiveFont(clickTarget);
} else {
TCNDDF.updateActiveFont(clickTarget);
}
};
TCNDDF.updateActiveFont = function (target) {
var getFontFamily = target.title,
dropListItem = dropListing.getElementsByTagName("li");

displayContainer.style.fontFamily = getFontFamily;

for(var i=0, len = dropListItem.length; i<len; i++) {
dropListItem[i].className = "";
}
target.className = "active";
};

/* localStorage methods */
TCNDDF.readContentEdits = function (storageKey) {
var editedContent = persistantStorage.getItem(storageKey);

if(!!editedContent && editedContent !== "undefined") {
displayContainer.innerHTML = editedContent;
}
};
TCNDDF.writeContentEdits = function (storageKey) {
var content = displayContainer.innerHTML;

persistantStorage.setItem(storageKey, content);
};

/* Offline cache methods */
TCNDDF.updateCache = function () {
webappCache.swapCache();
console.log("Cache has been updated due to a change found in the manifest");
};
TCNDDF.errorCache = function () {
console.log("You're either offline or something has gone horribly wrong.");
};

/* Util functions */
TCNDDF.preventActions = function (evt) {
if(evt.stopPropagation && evt.preventDefault) {
evt.stopPropagation();
evt.preventDefault();
} else {
evt.cancelBubble = true;
evt.returnValue = false;
}
};

window.addEventListener("load", TCNDDF.setup, false);
})();
/*
* font-testing-page
* https://github.com/impallari/font-testing-page
* Released under the MIT License
*/

// 
// 
//
// CSS3 Syntax

function refreshFeatures() {

	// CSS3 Syntax
	var codeCSS3 = "";
	if (document.getElementById("kern")) codeCSS3 += !document.getElementById("kern").checked ? '"kern" off, ' : '"kern" on, ';
	if (document.getElementById("liga")) codeCSS3 += !document.getElementById("liga").checked ? '"liga" off, ' : '"liga" on, ';
	if (document.getElementById("calt")) codeCSS3 += !document.getElementById("calt").checked ? '"calt" off, ' : '"calt" on, ';
	
	if (document.getElementById("dlig")) codeCSS3 += !document.getElementById("dlig").checked ? '' : '"dlig", ';
	if (document.getElementById("hlig")) codeCSS3 += !document.getElementById("hlig").checked ? '' : '"hlig", ';
	
	if (document.getElementById("swsh")) codeCSS3 += !document.getElementById("swsh").checked ? '' : '"swsh", ';
	if (document.getElementById("salt")) codeCSS3 += !document.getElementById("salt").checked ? '' : '"salt", ';
	
	if (document.getElementById("ss01")) codeCSS3 += !document.getElementById("ss01").checked ? '' : '"ss01", ';
	if (document.getElementById("ss02")) codeCSS3 += !document.getElementById("ss02").checked ? '' : '"ss02", ';
	if (document.getElementById("ss03")) codeCSS3 += !document.getElementById("ss03").checked ? '' : '"ss03", ';
	if (document.getElementById("ss04")) codeCSS3 += !document.getElementById("ss04").checked ? '' : '"ss04", ';
	if (document.getElementById("ss05")) codeCSS3 += !document.getElementById("ss05").checked ? '' : '"ss05", ';
	if (document.getElementById("ss06")) codeCSS3 += !document.getElementById("ss06").checked ? '' : '"ss06", ';
	if (document.getElementById("ss07")) codeCSS3 += !document.getElementById("ss07").checked ? '' : '"ss07", ';
	if (document.getElementById("ss08")) codeCSS3 += !document.getElementById("ss08").checked ? '' : '"ss08", ';
	if (document.getElementById("ss09")) codeCSS3 += !document.getElementById("ss09").checked ? '' : '"ss09", ';
	if (document.getElementById("ss10")) codeCSS3 += !document.getElementById("ss10").checked ? '' : '"ss10", ';
	if (document.getElementById("ss11")) codeCSS3 += !document.getElementById("ss11").checked ? '' : '"ss11", ';
	if (document.getElementById("ss12")) codeCSS3 += !document.getElementById("ss12").checked ? '' : '"ss12", ';
	if (document.getElementById("ss13")) codeCSS3 += !document.getElementById("ss13").checked ? '' : '"ss13", ';
	if (document.getElementById("ss14")) codeCSS3 += !document.getElementById("ss14").checked ? '' : '"ss14", ';
	if (document.getElementById("ss15")) codeCSS3 += !document.getElementById("ss15").checked ? '' : '"ss15", ';
	if (document.getElementById("ss16")) codeCSS3 += !document.getElementById("ss16").checked ? '' : '"ss16", ';
	if (document.getElementById("ss17")) codeCSS3 += !document.getElementById("ss17").checked ? '' : '"ss17", ';
	if (document.getElementById("ss18")) codeCSS3 += !document.getElementById("ss18").checked ? '' : '"ss18", ';
	if (document.getElementById("ss19")) codeCSS3 += !document.getElementById("ss19").checked ? '' : '"ss19", ';
	if (document.getElementById("ss20")) codeCSS3 += !document.getElementById("ss20").checked ? '' : '"ss20", ';

	if (document.getElementById("smcp")) codeCSS3 += !document.getElementById("smcp").checked ? '' : '"smcp", ';
	if (document.getElementById("c2sc")) codeCSS3 += !document.getElementById("c2sc").checked ? '' : '"c2sc", ';
	
	if (document.getElementById("ordn")) codeCSS3 += !document.getElementById("ordn").checked ? '' : '"ordn", ';

	if (document.getElementById("lnum")) codeCSS3 += !document.getElementById("lnum").checked ? '' : '"lnum", ';
	if (document.getElementById("onum")) codeCSS3 += !document.getElementById("onum").checked ? '' : '"onum", ';
	if (document.getElementById("tnum")) codeCSS3 += !document.getElementById("tnum").checked ? '' : '"tnum", ';
	if (document.getElementById("pnum")) codeCSS3 += !document.getElementById("pnum").checked ? '' : '"pnum", ';	

	if (document.getElementById("numr")) codeCSS3 += !document.getElementById("numr").checked ? '' : '"numr", ';
	if (document.getElementById("dnom")) codeCSS3 += !document.getElementById("dnom").checked ? '' : '"dnom", ';
	if (document.getElementById("sups")) codeCSS3 += !document.getElementById("sups").checked ? '' : '"sups", ';
	if (document.getElementById("sinf")) codeCSS3 += !document.getElementById("sinf").checked ? '' : '"sinf", ';
		
	if (document.getElementById("frac")) codeCSS3 += !document.getElementById("frac").checked ? '' : '"frac", ';
	if (document.getElementById("zero")) codeCSS3 += !document.getElementById("zero").checked ? '' : '"zero", ';
	
	codeCSS3 = codeCSS3.substring(0, codeCSS3.length - 2);
	
	// Special Case for Fake Small Caps
	var fakeSC = !document.getElementById("fake-smcp").checked ? 'normal' : 'small-caps';

	// Show Recommended Code
	var recommendedCSS = "";
	if (fakeSC == 'small-caps') recommendedCSS += "font-variant: " + fakeSC + "<br/>";
	recommendedCSS += "font-feature-settings: " + codeCSS3 + "<br/>";
	recommendedCSS += "-moz-font-feature-settings: " + codeCSS3 + "<br/>";
	recommendedCSS += "-webkit-font-feature-settings: " + codeCSS3 + "<br/>";
	recommendedCSS += "-ms-font-feature-settings: " + codeCSS3 + "<br/>";
	recommendedCSS += "-o-font-feature-settings: " + codeCSS3 ;
    $('#csscode').html( recommendedCSS );
	
	// Apply the Code
	$('#custom').css("font-variant", fakeSC );
	$('#custom').css("font-feature-settings", codeCSS3 );
	$('#custom').css("-moz-font-feature-settings", codeCSS3 );
	$('#custom').css("-webkit-font-feature-settings", codeCSS3 );
	$('#custom').css("-ms-font-feature-settings", codeCSS3 );
	$('#custom').css("-o-font-feature-settings", codeCSS3 );
	
};	