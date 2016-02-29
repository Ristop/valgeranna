@extends('layouts.layout-admin')

@section('content')
    <div class="container">

        @if(isset($added_notification))
            <div class="alert alert-success" role="alert">Uudis edukalt lisatud!</div>
        @endif

        <h3>Lisa postitus</h3>
        <form method="POST" action="/admin/addnew">
            <div class="form-group">
                <label for="title">Pealkiri</label>
                <input id="title" class="form-control" type="text" name="title">
            </div>
            <div class="form-group">
                <label for="content">Sisu</label>
                <textarea id="content" class="form-control" rows="5" name="content"></textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-default" value="Submit">Lisa</button>
            </div>
        </form>
        <hr>

        @if(isset($deleted_notification))
            <div class="alert alert-success" role="alert">Uudis edukalt lisatud!</div>
        @endif

        @if(isset($posts) and count($posts) != 0)
            <h3>Varasemad postitused</h3>
        @endif

        @foreach($posts as $post)
            <div class="col-sm-12 col-xs-12">

                <div class="newsPanel">
                    <div class="row pull-right" >
                        <form class="col-sm-6 col-xs-6"  method="post" action="/admin/delete">
                            <button class="btn btn-group-sm btn-info" type="submit" name="id" value={{$post->id}} >
                                Muuda
                            </button>
                        </form>
                        <form class="col-sm-6 col-xs-6" method="post" action="/admin/delete" >
                            <button class="btn btn-group-sm btn-danger" type="submit" name="id" value={{$post->id}} >
                                Kustuta
                            </button>
                        </form>
                    </div>

                    <div class="newsPanel-heading">
                        <a href={{'/posts/'.$post->id}}><h4>{{$post->title}}</h4></a>
                    </div>
                    <div class="newsPanel-body">
                        {{$post->content}}
                    </div>
                    <div class="newsPanel-footer">{{$post->created_at}}</div>
                </div>
            </div>
        @endforeach
    </div>
@stop