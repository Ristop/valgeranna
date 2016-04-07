@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="scroll">
            <ol>
                @foreach($posts as $post)
                    <li>
                        @include('layouts.post-layout')
                    </li>
                @endforeach
            </ol>
            {{ $posts->links() }}
        </div>
    </div>
@stop