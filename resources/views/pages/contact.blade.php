@extends('layouts.layout')

@section('content')
    <div class="container col-md-12" id="map-container"></div>
    <div class="container">
        <!-- Two columns of text below the google maps -->
        <div class="row">
            <div class="col-sm-6">
                <h3> <?php echo trans('contact.contactUs'); ?> </h3>
                <p> <?php echo trans('contact.howToContact'); ?> </p>
            </div>
            <div class="col-sm-6">
                <h3> <?php echo trans('contact.contact'); ?> </h3>
                <p> <?php echo trans('contact.contactInfo'); ?> </p>
            </div>
            <div class="col-sm-6">
                <h3>Support us!</h3>
                <p>Click Donate to donate us 1 euro.</p>
                <button id = "payButton" type="submit" class="btn btn-default" value="Donate">Donate</button>
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