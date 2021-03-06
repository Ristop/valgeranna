@extends('layouts.layout-admin')

@section('content')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    @if(isset($added_notification))
                        <div class="alert alert-success" role="alert">Uudis edukalt lisatud!</div>
                    @endif

                    <h3>Lisa postitus <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right"
                                         title="Vajutades nupule Lisa ilmub uudis avalehele"
                                         style="color: #ef581f; font-size: 15px"
                                         ;><strong>?</strong></i></h3>
                    @if(count($errors))
                        <ul>
                            @foreach($errors->all() as $error)
                                <li><h4>{{$error}}</h4></li>
                            @endforeach
                        </ul>
                    @endif

                    <form method="POST"  class="form-add-post" action="/admin/posts/new">
                        {{csrf_field()}}
                            <label for="title" class="sr-only" >Pealkiri</label>
                            <input id="title" class="form-control" type="text" name="title" placeholder="Pealkiri" required
                                   value={{old('title')}}>

                            <label for="content" class="sr-only">Sisu</label>
                            <textarea id="content" class="form-control" rows="5" name="content" placeholder="Sisu" required>{{old('content')}}</textarea>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success" name="Lisa" value="Submit">Lisa</button>
                            </div>
                    </form>

                    <hr>

                    @if(isset($deleted_notification))
                        <div class="alert alert-success" role="alert">Lisatud!</div>
                    @endif
                </div>
                <?php
                $postStats = DB::select(DB::raw("SELECT users.name, COUNT(*) as postNr FROM users JOIN posts ON users.id=posts.user_id GROUP BY users.name"));
                ?>
                @if(count($postStats) != 0)
                    <div class="col-sm-12">
                        <h3>Statistika</h3>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>
                                    <stong>Kasutaja</stong>
                                </th>
                                <th>
                                    <stong>Postitusi</stong>
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($postStats as $stat)
                                <tr>
                                    <th><p>{{$stat->name}}</p></th>
                                    <th><p>{{$stat->postNr}} </p></th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
                <div class="col-sm-12">
                    @if(isset($posts) and count($posts) != 0)
                        <h3>Varasemad postitused</h3>
                    @endif

                    @foreach($posts as $post)
                        <div class="col-sm-12 col-xs-12">
                            <div class="newsPanel">
                                <div class="row pull-right">
                                    <form method="post" action="/admin/posts/delete">
                                        <div class="btn-group">
                                            {{csrf_field()}}
                                            <button class="btn btn-info edit-button" type='button' name="id"
                                                    id={{'edit-'.$post->id}}  value={{$post->id}}> Muuda
                                            </button>
                                            {{csrf_field()}}
                                            <button class="btn btn-danger" type="submit" name="delete" value={{$post->id}} >
                                                Kustuta
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <div class="newsPanel-heading">
                                    <a href={{'/posts/'.$post->id}}><h4>{{$post->title}}</h4></a>
                                </div>
                                <div class="newsPanel-body" id={{'post-'.$post->id}}>
                                    {!! nl2br(e($post->content)) !!}
                                </div>
                                <div class="newsPanel-body">
                                    <form class="form-group editForm hidden" method='post'
                                          action={{'/admin/posts/edit/' . $post->id}} id={{'form-'.$post->id}}>
                                        {{csrf_field()}}
                                        <textarea class="form-control" type='text' name="content"></textarea>
                                        <br>
                                        <button class="pull-left btn btn-success btn-group-sm save-post" name="save" id={{'save-'.$post->id}}>Salvesta</button>

                                    </form>
                                </div>

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
            </div>
        </div>
    </div>
@stop