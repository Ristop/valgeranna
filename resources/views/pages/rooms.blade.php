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
                    <h1>Kaheinimesetuba</h1>
                    <p>
                        Kaheinimesetoa suurus on 12 ruutmeetrit. Toas on üks kaheinimesevoodi ning istumisnurk jne...
                        <br>
                        Mugavused: siseõu, rõdu, merevaade, grill
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-9">
                    <h1>Neljainimesetuba</h1>
                    <p>
                        Neljainimesetoa suurus on 18 ruutmeetrit. Toas kaks üheinimesevoodit ning üks kaheinimesevoodi jne...
                        <br>
                        Mugavused: siseõu, rõdu, merevaade, grill
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

