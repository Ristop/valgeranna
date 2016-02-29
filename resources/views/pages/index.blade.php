@extends('layouts.layout')

@section('content')
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src={{URL::asset('img/main/2.jpg')}} alt="Active">
                    <div class="carousel-caption">
                        <h1>Valgeranna puhkekeskus</h1>

                    </div>
                </div>
                <div class="item">
                    <img src={{URL::asset('img/main/10.jpg')}} alt="First">
                    <div class="carousel-caption">
                        <h3>Teine pilt</h3>
                        <p>Kiri teisel slaidil?</p>
                    </div>
                </div>
                <div class="item">
                    <img src={{URL::asset('img/main/1.jpg')}} alt="Third">
                    <div class="carousel-caption">
                        <h3>Kolmas pilt</h3>
                        <p>Kiri kolmandal slaidil?</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-sm-4">
                <h3>Tutvustus</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <h3>Muljed</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <h3>Uudised</h3>
                @foreach($posts as $post)
                    <div class="newsPanel">
                        <div class="newsPanel-heading">
                            <a href={{'/posts/'.$post->id}}><h5>{{$post->title}}</h5></a>
                        </div>
                        <div class="newsPanel-body">
                            {{substr($post->content, 0, 100)}}
                        </div>
                        <div class="newsPanel-footer">{{$post->created_at}}</div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@stop