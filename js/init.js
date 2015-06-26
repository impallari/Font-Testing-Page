$(document).ready(function(){
    
    // Tabs
    var tabContainers = $('div.tabs > div');

    function tabTrigger(link, hash) {
        tabContainers.hide().filter(hash).show();
        $('div.tabs ul.tabNavigation a').removeClass('selected');
        link.addClass('selected');
    }

    if (location.hash) {
        // Make sure page jump back to top
        setTimeout(function() {
            window.scrollTo(0, 0);
        }, 1);
    }

    if (window.location.hash) {
        var hash = window.location.hash
            link = $('div.tabs ul.tabNavigation a[href="'+hash+'"]');
        tabTrigger(link, hash);
    } else {
        var link = $('div.tabs ul.tabNavigation a').filter(':first'),
            hash = link.attr('href');
        tabTrigger(link, hash);
    };

    $('div.tabs ul.tabNavigation a').click(function (event) {
        var link = $(this),
            hash = link.attr('href');
        tabTrigger(link, hash);
        // History API
        if(history.replaceState) {
            history.replaceState(null, null, hash);
        };
        event.preventDefault();
        return false;
    });
    
    // OT Features Panel
    $('#showhide').click(function () {
        $('#otfeatures').slideToggle("fast", function() {
            $("#showhide").text($(this).is(':visible') ? "Hide OpenType Features" : "OpenType Features");
          });
    });

    // OT Features initial Run
    refreshFeatures();

});