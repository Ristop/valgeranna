@extends('layouts.layout')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            @include('layouts.post-layout')
        @endforeach
    </div>
@stop