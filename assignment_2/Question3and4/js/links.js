$(function() {
    var deletemode = false;
    
    // The delete mode
    $("#delete").click(function () {
        deletemode = true;
        alert("If you click anything on the page it'll disappear and only comes back after a reload. The deleted element gets printed to console.")
    })
    $('body').click(function(event) {
        var element = event.target
        console.log(element);
        console.log(deletemode)
        if (deletemode ) {
            element.remove();
        };
    });

    // Generate the list of urls
    var websites = ['Duckduckgo', 'YouTube', 'TikTok', 'Reddit'];
    var urls = ['http://www.duckduckgo.com', 'http://www.youtube.com', 'http://www.tiktok.com', 'http://www.reddit.com']
    var cList = $('ul.mylist')

    $.each(websites, function(i)
    {
        var li = $('<li/>')
            .addClass('url-item')
            .appendTo(cList);
        var aaa = $('<a/>')
            .addClass('ui-all')
            .text(websites[i])
            .attr("href", urls[i])
            .attr("target", "_blank")
            .appendTo(li);
    });

    // Adding new URLs to the list
    $("#addurl").submit(function (e) {
        e.preventDefault();
        var li = $('<li/>')
            .addClass('ui-menu-item')
            .attr('role', 'menuitem')
            .appendTo(cList);
        var aaa = $('<a/>')
            .addClass('ui-all')
            .text(document.getElementById("name").value)
            .attr("href", document.getElementById("url").value)
            .attr("target", "_blank")
            .appendTo(li);

        $("#addurl")[0].reset();
    });

    // Fade the url list
    $("#fade").click(function() {

        $("#links").fadeToggle();
        console.log("nice fade");
    })
});