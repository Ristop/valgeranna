<div class="col-sm-12 col-xs-12 pull-right">
    <div class="newsPanel">
        <div class="newsPanel-heading">
            <a href={{'/posts/'.$current_post->id}}><h4>{{$current_post->title}}</h4></a>
        </div>
        <div class="newsPanel-body">
            <p>{!! nl2br(e($current_post->content)) !!}</p>
        </div>
        <div class="newsPanel-footer">{{$current_post->created_at}}</div>
    </div>
</div>