@extends('layouts.layout')

@section('content')
    <div class="container col-md-12" id="map-container"></div>
    <div class="container">
        <!-- Two columns of text below the google maps -->
        <div class="row">
            <div class="col-sm-6">
                <h3> {{ trans('contact.contactUs') }} </h3>
                <p> {{ trans('contact.howToContact') }} </p>
            </div>
            <div class="col-sm-6">
                <h3> {{ trans('contact.contact') }} </h3>
                <p> {{ trans('contact.contactInfo') }} </p>
            </div>
            <div class="col-sm-6">
                <h3>Support us!</h3>
                <p>Click Donate button:</p>
                <form action="{{ $requestUrl }}" method="post">
                    @foreach($requestData as $fieldName => $value)
                        <input type="hidden" name="{{ $fieldName }}" value="{{ $value }}"/>
                    @endforeach
                    <button id = "payButton" type="submit" class="btn btn-default" value="Donate">Donate</button>
                </form>
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