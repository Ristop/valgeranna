$(document).ready(function(){
    var editButton = $(".edit-button");
    editButton.click(function() {
        var btnId = ($(this)[0].id).split('-')[1];
        var postDiv = $("#post-" + btnId);
        var postForm = $("#form-" + btnId);
        var postText = postDiv[0].innerText;
        postDiv.toggleClass('hidden');
        postForm.toggleClass('hidden');
        var tf = postForm.children(1)[1];
        tf.value = postText;
        tf.innerText = postText;
    });

});

