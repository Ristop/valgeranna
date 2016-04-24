@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="col-xs-12 col-md-3 col-lg-3">
            <div class="scroll">
                <ol>
                    @foreach($posts as $post)
                        <li>
                            @include('layouts.post-history-single-post')
                        </li>
                    @endforeach
                </ol>
                {{ $posts->links() }}
            </div>
        </div>
        <div class="col-xs-12 col-md-9 col-lg-9">
            <div >
                @include('layouts.post-layout')
            </div>
        </div>
    </div>
@stop