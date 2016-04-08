(function poll() {
    var posts = document.getElementById("news");
    var firstPostID = posts.children[1].id;
    var secondPostID = posts.children[2].id;
    var firstPost = document.getElementsByName(firstPostID);
    var secondPost = document.getElementById(secondPostID);
    setTimeout(function () {
        $.ajax({
            url: '/news/ajaxpoll',
            dataType: 'json',
            success: function (data) {
                var ids = [];
                for (var key in data) {
                    ids.push(data[key].id);
                }
                var databaseFirstID = ids[0];
                var databaseSecondID = ids[1];
                if ((databaseFirstID != firstPostID && databaseFirstID != secondPostID) ||
                    (databaseSecondID != firstPostID && databaseSecondID != secondPostID)) {
                    alert('Uus uudis!');
                    $(firstPostID).remove();
                    location.reload();
                }
            },
            complete: poll
        });
    }, 2000);
})();

