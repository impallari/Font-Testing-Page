// http://www.impallari.com/testing/
// Version 10.0
// Pablo Impallari
// Variation support: Meir Sadan
//
// CSS3 Syntax

var axes = {
	wght: {
		min: 1,
		max: 999,
		init: 400
	},
	wdth: {
		min: 50,
		max: 200,
		init: 100
	},
	opsz: {
		min: 1,
		max: 128,
		init: 16
	},
	ital: {
		min: 0,
		max: 1,
		init: 0
	},
	slnt: {
		min: -50,
		max: 50,
		init: 0
	}
}	;

function refreshVariations() {

	// CSS3 Syntax
	var vars = [];
	var axeNames = Object.keys( axes );
	for (var a = 0; a < axeNames.length; a++ ) {
		if (!$( '#' + axeNames[a] ).length)
			continue;
		var axe = axes[ axeNames[ a ] ];
		var t = axe.min + (axe.max - axe.min ) * $( '#' + axeNames[ a ] ).val();
		if (t <= axe.min + 0.001) t = axe.min + 0.001; // + 0.001; // fix rounding or Fixed->float conversion errors
		if (t >= axe.max - 0.001) t = axe.max - 0.001; // - 0.001; // fix rounding or Fixed->float conversion errors
		vars.push( '"' + axeNames[ a ] + '" ' + Math.floor(t) );
	}
		
	var codeCSS3 = vars.join( ', ' );
	
	// Show Recommended Code
	var recommendedCSS = "";
	recommendedCSS += "font-variation-settings: " + codeCSS3 + "; <br/>";
    $('#cssvarcode').html( recommendedCSS );
	
	// Apply the Code
	$('#custom').css("font-variation-settings", codeCSS3 );
	
};	

$(function() {
	
	$('#showhide').after( ' | <a href="javascript://" id="showhidevars">Variations</a>' );

    // OT Variations Panel
    $('#showhidevars').click(function () {
        $('#otvariations').slideToggle("fast", function() {
		    $("#showhidevars").text($(this).is(':visible') ? "Variations" : "Variations");
		  });
    });

	// Variations Init
	$('.varAxisRange').on( 'input', refreshVariations ).each( function() {
		var axe = axes[ $( this ).attr( 'id' ) ];
		$(this).val( ( axe.init - axe.min ) / ( axe.max - axe.min ) );
	});
	refreshVariations();
	
});
