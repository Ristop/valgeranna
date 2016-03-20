@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="rooms">
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <img src={{URL::asset('/img/4.jpg')}} alt="Kahekohaline">
                </div>
                <div class="col-xs-7 col-md-7">
                    <h2> <?php echo trans('rooms.double'); ?> </h2>
                    <p> <?php echo trans('rooms.doubleInfo'); ?> </p>
                </div>
                <div class="col-xs-5 col-md-2">
                    <h3>45 eur</h3>
                    <button><a href="/rooms"> <?php echo trans('rooms.reserve'); ?> </a></button>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <img src={{URL::asset('/img/4.jpg')}} alt="Neljakohaline">
                </div>
                <div class="col-xs-7 col-md-7">
                    <h2> <?php echo trans('rooms.quadruple'); ?> </h2>
                    <p> <?php echo trans('rooms.quadrupleInfo'); ?> </p>
                </div>
                <div class="col-xs-5 col-md-2">
                    <h3>45 eur</h3>
                    <button><a href="/rooms"> <?php echo trans('rooms.reserve'); ?> </a></button>
                </div>
            </div>
        </div>
    </div>
@stop