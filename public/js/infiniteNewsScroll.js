
/*
if ($.infinitescroll) {
    alert("Module exists");
} else {
    alert("broken");
}*/

$('.scroll').infinitescroll({
    navSelector  : '#page-nav',    // selector for the paged navigation
    nextSelector : '#page-nav a',  // selector for the NEXT link (to page 2)
    // selector for the NEXT link (to page 2)
    itemSelector : ".scroll",
    loading: {
        finishedMsg: 'No more pages to load.',
        img: 'http://i.imgur.com/6RMhx.gif',
        msgText: "<em>Loading new posts</em>"
    }
});