(function poll() {
    setTimeout(function () {
        $.ajax({
            url: '/news/ajaxpoll',
            dataType: 'json',
            success: function (data) {
                var posts = document.getElementById("news");
                var firstPostID = posts.children[1].id;
                var secondPostID = posts.children[2].id;
                var ids = [];
                var titles = [];
                var contents = [];
                var dates = [];
                for (var key in data) {
                    ids.push(data[key].id);
                    titles.push(data[key].title);
                    contents.push(data[key].content);
                    dates.push(data[key].created_at);
                }
                var databaseFirstID = ids[0];
                var databaseSecondID = ids[1];
                if ((databaseFirstID != firstPostID && databaseFirstID != secondPostID) ||
                    (databaseSecondID != firstPostID && databaseSecondID != secondPostID)) {
                    document.getElementById(firstPostID).setAttribute("id", databaseFirstID);
                    document.getElementById(secondPostID).setAttribute("id", databaseSecondID);
                    var first = document.getElementById(databaseSecondID);
                    var second = document.getElementById(databaseFirstID);
                    var mainPagePosts = [first, second];
                    for (var i = 0; i < 2; i++) {
                        var heading = mainPagePosts[i].children[0];
                        var body = mainPagePosts[i].children[1];
                        var footer = mainPagePosts[i].children[2];
                        var link = "posts/" + ids[i];
                        heading.innerHTML = "<a href=" + link + "><h4>" + titles[i] + "</h4></a>";
                        body.innerHTML = contents[i].substring(0, 200);
                        footer.innerHTML = dates[i];
                    }
                }
            },
            complete: poll
        });
    }, 2000);
})();

