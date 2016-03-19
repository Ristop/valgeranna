@extends('layouts.layout')

@section('content')
    <div class="container-fluid col-md-12" id="map-container"></div>
    <div class="container">
        <!-- Two columns of text below the google maps -->
        <div class="row">
            <div class="col-sm-6">
                <h3> <?php echo trans('contactinfo.contactUs'); ?> </h3>
                <p> <?php echo trans('contactinfo.howToContact'); ?> </p>
            </div>
            <div class="col-sm-6">
                <h3> <?php echo trans('contactinfo.contact'); ?> </h3>
                <p> <?php echo trans('contactinfo.contactInfo'); ?> </p>
            </div>
        </div>
    </div>
@stop