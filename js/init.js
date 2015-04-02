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

});