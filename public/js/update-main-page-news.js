(function poll() {
    var posts = document.getElementById("news");
    var firstPostID = posts.children[1].id;
    var secondPostID = posts.children[2].id;
    setTimeout(function () {
        $.ajax({
            url: '/news/ajaxpoll',
            dataType: 'json',
            success: function (data) {
                var news1 = document.getElementById("news");
                alert(firstPostID);
            },
            complete: poll
        });
    }, 2000000);
})();

