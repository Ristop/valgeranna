@extends('layouts.layout')

@section('content')
    <div class="container col-md-12" id="map-container"></div>
    <div class="container">
        <!-- Two columns of text below the google maps -->
        <div class="row">
            <div class="col-sm-6">
                <h3> {{ trans('contact.contactUs') }} </h3>
                <p><strong>Email: </strong> {{trans('contact.email')}}</p>
                <p><strong>Tel: </strong> {{trans('contact.phone')}}</p>
            </div>
            <div class="col-sm-6">
                <h3> {{ trans('contact.contact') }} </h3>
                <p> {{ trans('contact.location') }} </p>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        document.getElementById("payButton").onclick = function () {
            location.href = "";
        };
    </script>

    <script src="http://maps.google.com/maps/api/js?sensor=false" defer></script>
    <script src={{URL::asset('/js/location-google-maps.js')}} defer></script>

@stop