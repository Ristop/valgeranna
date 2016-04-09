@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="rooms">
            <div id = "double" class="row">
                <div class="col-xs-12 col-md-3">
                    <img src={{URL::asset('/img/4.jpg')}} alt="Kahekohaline">
                </div>
                <div id = "doubleInfo" class="col-xs-7 col-md-7">

                </div>
            </div>
            <div id = "duplex" class="row">
                <div class="col-xs-12 col-md-3">
                    <img src={{URL::asset('/img/4.jpg')}} alt="Neljakohaline">
                </div>
                <div id = "duplexInfo" class="col-xs-7 col-md-7">

                </div>
            </div>
        </div>
    </div>
@stop

