@extends('layouts.layout')

@section('content')
    <div id="container" class="container">
        <div class="scroll">
            <ol>
                @foreach($posts as $post)
                    <li>
                        @include('layouts.post-layout')
                    </li>
                @endforeach
            </ol>
            <nav id="page-nav">
                {{ $posts->links() }}
            </nav>
        </div>
    </div>
@stop