<div class="col-sm-12 col-xs-12">
    <div class="newsPanel">
        <div class="newsPanel-heading">
            <a href={{'/posts/'.$post->id}}><h4>{{$post->title}}</h4></a>
        </div>
        <div class="newsPanel-body">
            {{$post->content}}
        </div>
        <div class="newsPanel-footer">{{$post->created_at}}</div>
    </div>
</div>