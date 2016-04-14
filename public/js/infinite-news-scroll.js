
$(function() {
    $('.scroll').jscroll({
        autoTrigger: true,
        nextSelector: '.pager li:last-child a',
        contentSelector: '.scroll',
        pagingSelector: '.pager',
        callback: function() { // Move to correct spot
            //$(".jscroll-inner div.pager").remove();
            $(".jscroll-added .scroll ol li").appendTo(".jscroll-inner ol");
            //$(".jscroll-added .scroll .pager").appendTo(".jscroll-inner");
            $(".jscroll-added").remove();
        }
    });
});