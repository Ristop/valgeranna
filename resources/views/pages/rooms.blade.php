@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="rooms">
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <a class="image-popup-no-margins" href="{{URL::asset('/img/rooms/4.jpg')}}">
                        <img src={{URL::asset('/img/rooms/4.jpg')}} alt="Kahekohaline">
                    </a>
                </div>
                <div class="col-xs-12 col-md-9">
                    <h1>{{ trans('rooms.double') }}</h1>
                    <p>
                        {{ trans('rooms.doubleInfo') }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-9">
                    <h1>{{ trans('rooms.quadruple') }}</h1>
                    <p>
                        {{ trans('rooms.quadrupleInfo') }}
                    </p>
                </div>
                <div class="col-xs-12 col-md-3">
                    <a class="image-popup-no-margins" href="{{URL::asset('/img/rooms/5.jpg')}}">
                        <img src={{URL::asset('/img/rooms/5.jpg')}} alt="Neljakohaline">
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop

