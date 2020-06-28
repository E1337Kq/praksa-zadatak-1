@extends('layout')
@section('content')
    <div id="wrapper">
        <div
            id="page"
            class="container">
            @foreach($subscribers as $subsrciber)
                <div class="content">
                    <div class="title">
                        <h2>
                            <a href="{{route('subscribers.show', $subsrciber)}}">
                                {{$subsrciber->first_name}}
                            </a>
                        </h2>
                    </div>
                    {!! $subsrciber->last_name !!}
                </div>
            @endforeach
        </div>
    </div>
@endsection
