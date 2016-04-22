<div class="col-sm-12 col-xs-12 pull-right">
    <div class="newsPanel">
        <div class="newsPanel-heading">
            <a href={{'/posts/'.$post->id}}><h4>{{$post->title}}</h4></a>
        </div>
        <div class="newsPanel-body">
            <p>{!! nl2br(e($post->content)) !!}</p>
        </div>
        <div class="newsPanel-footer">{{$post->created_at}}</div>
    </div>
</div>