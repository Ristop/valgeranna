@extends('layouts.layout-admin')

@section('content')
    <div class="container">

        @if(isset($added_notification))
            <div class="alert alert-success" role="alert">Uudis edukalt lisatud!</div>
        @endif

        <h3>Lisa postitus</h3>
        @if(count($errors))
            <ul>
                @foreach($errors->all() as $error)
                    <li><h4>{{$error}}</h4></li>
                @endforeach
            </ul>
        @endif
        <form method="POST" action="/admin/addnew">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Pealkiri</label>
                <input id="title" class="form-control" type="text" name="title" required value={{old('title')}}>
            </div>
            <div class="form-group">
                <label for="content">Sisu</label>
                <textarea id="content" class="form-control" rows="5" name="content"
                          required>{{old('content')}}</textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-default" value="Submit">Lisa</button>
                <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right"
                   title="Vajutades nupule Lisa ilmub uudis avalehele" style="color: #ef581f; font-size: 15px" ;><strong>?</strong></i>
            </div>
        </form>
        <hr>


        @if(isset($deleted_notification))
            <div class="alert alert-success" role="alert">Uudis edukalt lisatud!</div>
        @endif

        <h3>Postituste statistika</h3>
        <table class = "table table-bordered">
            <thead>
                <tr>
                    <th>Kasutaja</th>
                    <th>Postituste arv</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $postStats = DB::select(DB::raw("SELECT users.name, COUNT(*) as postNr FROM users JOIN posts ON users.id=posts.user_id GROUP BY users.name"));
                ?>
                    @foreach($postStats as $stat)
                    <tr>
                        <th> <?php echo $stat -> name ?> </th>
                        <th> <?php echo $stat -> postNr ?> </th>
                    </tr>
                    @endforeach
            </tbody>
        </table>


        @if(isset($posts) and count($posts) != 0)
            <h3>Varasemad postitused</h3>
        @endif

        @foreach($posts as $post)
            <div class="col-sm-12 col-xs-12">
                <div class="newsPanel">
                    <div class="row pull-right">
                        <div class="col-sm-6 col-xs-6" >
                            {{csrf_field()}}
                            <button  class="btn btn-group-sm btn-info edit-button" id={{'edit-'.$post->id}} name="id" value={{$post->id}} >
                                Muuda
                            </button>
                        </div>
                        <form class="col-sm-6 col-xs-6" method="post" action="/admin/delete">
                            {{csrf_field()}}
                            <button class="btn btn-group-sm btn-danger" type="submit" name="id" value={{$post->id}} >
                                Kustuta
                            </button>
                        </form>
                    </div>

                    <div class="newsPanel-heading">
                        <a href={{'/posts/'.$post->id}}><h4>{{$post->title}}</h4></a>
                    </div>
                    <div class="newsPanel-body" id={{'post-'.$post->id}}>
                        {{$post->content}}
                    </div>
                    <form class="form-group col-sm-6 col-xs-6 hidden editForm" method='post' action={{'/admin/edit/' . $post->id}} id={{'form-'.$post->id}}>
                        {{csrf_field()}}
                        <input class="form-control" type='text' name="content">

                        </input>
                        <button class="btn btn-group-sm btn-success" type="submit">Salvesta</button>
                    </form>
                    @if(!is_null($post->user))
                        <div class="newsPanel-footer">Posted by <b>{{$post->user->name}}</b>
                            on {{$post->created_at}}
                        </div>
                    @else
                        <div class="newsPanel-footer">Posted by <b> Unknown </b>
                            on {{$post->created_at}}
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@stop