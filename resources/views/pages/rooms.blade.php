@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="rooms">
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <img src={{URL::asset('/img/4.jpg')}} alt="Kahekohaline">
                </div>
                <div class="col-xs-7 col-md-7">
                    <h2>Deluxe Double Room with Sea View</h2>
                    <p>Our spacious deluxe sea view rooms are available with either twin or double beds, offering stunning views over Brighton seafront. Doubles have king-sized beds and all offer crisp Egyptian cotton linen, luxury toiletries, bathrobes and tea and coffee making facilities.</p>
                </div>
                <div class="col-xs-5 col-md-2">
                    <h3>45 eur</h3>
                    <button><a href="/rooms">Broneeri tuba</a></button>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <img src={{URL::asset('/img/4.jpg')}} alt="Neljakohaline">
                </div>
                <div class="col-xs-7 col-md-7">
                    <h2>Duplex Quadruple Room</h2>
                    <p>4-kohaline tuba. Seletus. Our spacious deluxe sea view rooms are available with either twin or double beds, offering stunning views over Brighton seafront. Doubles have king-sized beds and all offer crisp Egyptian cotton linen, luxury toiletries, bathrobes and tea and coffee making facilities. </p>
                </div>
                <div class="col-xs-5 col-md-2">
                    <h3>45 eur</h3>
                    <button><a href="/rooms">Broneeri tuba</a></button>
                </div>
            </div>
        </div>
    </div>
@stop