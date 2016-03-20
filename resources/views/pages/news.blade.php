@extends('layouts.layout')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            @include('layouts.post-layout')
        @endforeach
        <div class="col-sm-3 col-xs-3 newsSidebar">

        </div>
    </div>
@stop