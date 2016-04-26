<div class="news-history @if($post->id == $current_post->id) post-current @endif">
    <div class="post-history ">
        <a href={{'/posts/'.$post->id}}><h4>{{$post->title}}</h4></a>
    </div>
</div>