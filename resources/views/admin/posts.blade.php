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

                    <form method="POST" action="/admin/posts/new">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="title">Pealkiri</label>
                            <input id="title" class="form-control" type="text" name="title" required
                                   value={{old('title')}}>
                        </div>
                        <div class="form-group">
                            <label for="content">Sisu</label>
                    <textarea id="content" class="form-control" rows="5" name="content"
                              required>{{old('content')}}</textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success" value="Submit">Lisa</button>
                        </div>
                    </form>

                    <hr>

                    @if(isset($deleted_notification))
                        <div class="alert alert-success" role="alert">Uudis edukalt lisatud!</div>
                    @endif
                </div>
                <div class="col-sm-12">
                    <h3>Statistika</h3>
                    <table class="table table-striped">
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
                        <?php
                        $postStats = DB::select(DB::raw("SELECT users.name, COUNT(*) as postNr FROM users JOIN posts ON users.id=posts.user_id GROUP BY users.name"));
                        ?>
                        @foreach($postStats as $stat)
                            <tr>
                                <th><p>{{$stat->name}}</p></th>
                                <th><p>{{$stat->postNr}} </p></th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
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
                                            <button class="btn btn-danger" type="submit" name="id" value={{$post->id}} >
                                                Kustuta
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <div class="newsPanel-heading">
                                    <a href={{'/posts/'.$post->id}}><h4>{{$post->title}}</h4></a>
                                </div>
                                <div class="newsPanel-body" id={{'post-'.$post->id}}>
                                    {{$post->content}}
                                </div>
                                <div class="newsPanel-body">
                                    <form class="form-group editForm hidden" method='post'
                                          action={{'/admin/posts/edit/' . $post->id}} id={{'form-'.$post->id}}>
                                        {{csrf_field()}}
                                        <textarea class="form-control" type='text' name="content"></textarea>
                                        <br>
                                        <button class="pull-left btn btn-group-sm btn-success" type="submit">Salvesta
                                        </button>
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