@extends('layout')
@section('content')
    <div id="wrapper">
        <div
            id="page"
            class="container">
            @foreach($subscribers as $subsrciber)
                <div class="content">
                            {{route('subscribers.show', $subsrciber)}}
                                {{$subsrciber->first_name}}
                    {!! $subsrciber->email !!}
                </div>
            @endforeach
        </div>
    </div>
@endsection
