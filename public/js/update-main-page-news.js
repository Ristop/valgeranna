(function poll() {
    setTimeout(function () {
        $.ajax({
            url: '/news/ajaxpoll',
            dataType: 'json',
            success: function (data) {
                var newsContainer = $('#news');
                var firstPostID = newsContainer.find('.newsPanel:eq(0)').attr('id')
                var secondPostID = newsContainer.find('.newsPanel:eq(1)').attr('id')

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

                var dbOlder = ids[0];
                var dbNewer = ids[1];

                if ((dbNewer != firstPostID || dbOlder != secondPostID) &&
                    !(firstPostID == undefined ||secondPostID == undefined || dbNewer == undefined || dbOlder == undefined)) {
                    newsContainer.find('.newsPanel:eq(0)').attr('id', dbNewer);
                    newsContainer.find('.newsPanel:eq(1)').attr('id', dbOlder);
                    for (var i = 0; i < 2; i++) {
                        $("#news #"+ids[i] + " .newsPanel-heading a h4").text(titles[i]);
                        $("#news #"+ids[i] + " .newsPanel-heading a").attr("href", "posts/" + ids[i]);
                        $("#news #"+ids[i] + " .newsPanel-body").text(contents[i].substring(0, 200));
                        $("#news #"+ids[i] + " .newsPanel-footer").text(dates[i]);
                    }
                }
            },
            complete: poll
        });
    }, 3000);
})();

