@extends('layouts.layout')

@section('content')
    <div class="container-fluid col-md-12" id="map-container"></div>
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
        </div>
    </div>
@stop