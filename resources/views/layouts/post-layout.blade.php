<div class="col-sm-9 col-xs-9">
    <div class="newsPanel">
        <div class="newsPanel-heading">
            <a href={{'/posts/'.$post->id}}><h4>{{$post->title}}</h4></a>
        </div>
        <div class="newsPanel-body">
            <p>{{$post->content}}</p>
        </div>
        <div class="newsPanel-footer">{{$post->created_at}}</div>
    </div>
</div>