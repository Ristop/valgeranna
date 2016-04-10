$(document).ready(function(){
    var image = $(".thumbnail");
    image.click(function() {
        console.log($(this));
        var url = (this.href);
        var img = ($(this).context.firstElementChild.id);

        window.location.hash = img;
    });

});


