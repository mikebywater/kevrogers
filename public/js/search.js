$(function () {
    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });
    
    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });

    
});

$(window).keydown(function(e){

    if ((e.ctrlKey || e.metaKey) && e.keyCode === 70) {
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
        e.preventDefault();
    }
    if ((e.ctrlKey || e.metaKey) && e.keyCode === 71) {
        window.location.assign(window.location.href.substring(0, window.location.href.indexOf('?'))) 
        e.preventDefault();
    }
    if ((e.ctrlKey || e.metaKey) && e.keyCode === 65) {
        var url = window.location.href.substring(0, window.location.href.indexOf('?'))
        if (!url)
        {
            url = window.location.href
        }
        window.location.assign(url + "/create")
        
        e.preventDefault();
    }
});

