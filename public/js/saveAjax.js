/**
 * Created by Kadi on 4/9/2016.
 */
$(document).ready(function(){

    $(function(){
        $.ajaxSetup({
            headers:{'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')}
        });
    });


    $('.save-post').click(function(e){
        e.preventDefault();

        var btnId = ($(this)[0].id).split('-')[1];
        var postDiv = $("#post-" + btnId);
        var postForm = $("#form-" + btnId);
        var textField = postForm.children(1)[1];
        var newPostContent = textField.value;

        var post= {
            id: btnId,
            content: newPostContent
        };

        $.ajax({
            url: '/admin/posts/update',
            type:'POST',
            data: post,
            cache: false,
            success: function(data){
                postDiv.toggleClass('hidden');
                postForm.toggleClass('hidden');
                postDiv[0].innerText = textField.value;
            }
        });
        return false;
    });
});

