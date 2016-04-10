@extends('layouts.layout')

@section('content')
    <div class="container">
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src={{URL::asset('img/main/2.png')}} alt="first">
                    <div class="carousel-caption">
                        <h1>
                            <a href="http://tinyurl.com/jgarcav">~{{ trans('main.reserve') }}~</a>
                        </h1>
                    </div>
                </div>
                <div class="item">
                    <img src={{URL::asset('img/main/1.jpg')}} alt="second">
                    <div class="carousel-caption">
                        <h2>Kaunis merevaade</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome container -->
        <div class="welcomeContainer">
            <div class="welcomeContainer-heading">
            </div>
            <div class="welcomeContainer-body">
            </div>
        </div>
        <!-- Two columns of text below the carousel -->
        <div class="row">
            <!-- Introduction column -->
            <div class="col-sm-8">
                <h3> {{ trans('main.aboutUs') }} </h3>
                <div class="newsPanel">
                    <p>Asume vaid <strong>5km</strong> kaugusel Pärnust. Männimetsa ja liivase mererannaga puhkeala on
                        sobilik nii perepuhkuseks, suvepäevade, noortelaagrite ja koolituste korraldamiseks. Uued
                        2015 aasta suvel valminud 2-ja 4-kohalised <a href="/rooms">suvemajad</a> mahutavad kuni 100
                        inimest. Samuti on võimalus telkimiseks.
                    <p>
                        Territoorium jaguneb erinevateks piirkondadeks, mis vastavalt soovile
                        annab võimaluse läbi viia üheaegseid tegevusi erinevates gruppides teineteist segamata või olla
                        suure seltskonnaga kõik üheskoos.</p>
                    <p>
                        Pesemisvõimalused (WC ja dušš) on lähedal asuvas pesemiskompleksis. Kämpingutes on olemas
                        ööbimiseks kõik vajalik (tekid, padjad, linad,). <a href="/beach">Rand</a>, palliplats,
                        laste mänguväljak ja <a href="/bar">rannabaar</a> on 200 m raadiuses.
                    </p>

                </div>
            </div>
            <!-- News column -->

            <div id = "news" class="col-sm-4">
                <h3> {{ trans('main.posts') }} </h3>
                @foreach($posts as $post)
                    <div id = {{$post->id}} class="newsPanel">
                        <div class="newsPanel-heading">
                            <a href={{ '/posts/'.$post->id }}><h4>{{ $post->title }}</h4></a>
                        </div>
                        <div class="newsPanel-body">
                            {{ substr($post->content, 0, 200) }}
                        </div>
                        <div class="newsPanel-footer">{{ $post->created_at }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop