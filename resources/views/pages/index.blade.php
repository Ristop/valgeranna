@extends('layouts.layout')

@section('content')
    <div class="container">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>-->
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src={{URL::asset('img/main/1.jpg')}} alt="Third">
                    <div class="carousel-caption"><h1><a
                                    href="http://www.booking.com/hotel/ee/valgeranna-puhkekeskus.et.html?aid=333369;label=valgeranna-puhkekeskus-wCqFC2nl5SfRTbdQIErB3wS66689999894%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap1t1%3Aneg%3Afi%3Atiaud-146342138230%3Akwd-89534953528%3Alp9061552%3Ali%3Adec%3Adm;sid=9b7b5e24a5b65fa56e7c7d16e9a4f962;dcid=12;dest_id=-2626217;dest_type=city;dist=0;room1=A%2CA;sb_price_type=total;srfid=92ef8f9cb56d816b4d84bcfe23252f74f55b7367X1;type=total;ucfs=1&">~<?php echo trans('main.reserve'); ?>~</a></h1></div>
                </div>
            </div>
            <!-- Left and right controls
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>-->
        </div>
        <div class="welcomeContainer">
            <div class="welcomeContainer-heading">
            </div>
            <div class="welcomeContainer-body">

            </div>
        </div>
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-sm-8">
                <h3> <?php echo trans('main.aboutUs'); ?> </h3>
                <div class="newsPanel">
                    <p>Asume vaid <b>5km</b> kaugusel Pärnust. Männimetsa ja liivase mererannaga puhkeala on sobilik
                        nii perepuhkuseks, suvepäevade, noortelaagrite ja koolituste korraldamiseks. Uued
                        2015 aasta suvel valminud 2-ja 4-kohalised <a href="/rooms">suvemajad</a> mahutavad kuni 100
                        inimest. Samuti on
                        võimalus telkimiseks.
                        <br>Territoorium jaguneb erinevateks piirkondadeks, mis vastavalt soovile
                        annab võimaluse läbi viia üheaegseid tegevusi erinevates gruppides teineteist segamata või olla
                        suure seltskonnaga kõik üheskoos.
                        <br>Pesemisvõimalused (WC ja dušš) on lähedal asuvas
                        pesemiskompleksis. Kämpingutes on olemas ööbimiseks kõik vajalik (tekid, padjad,
                        linad,). <a href="/beach">Rand</a>, palliplats, laste mänguväljak ja <a href="/bar">rannabaar</a> on 200 m raadiuses.</span>
                </div>
            </div>
            <div class="col-sm-4">
                <h3> <?php echo trans('main.posts'); ?> </h3>
                @foreach($posts as $post)
                    <div class="newsPanel">
                        <div class="newsPanel-heading">
                            <a href={{'/posts/'.$post->id}}><h4>{{$post->title}}</h4></a>
                        </div>
                        <div class="newsPanel-body">
                            {{substr($post->content, 0, 200)}}
                        </div>
                        <div class="newsPanel-footer">{{$post->created_at}}</div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@stop