@extends('layout')

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>{{$subscribers->fist_name}}</h2>
                    </div>

                    {{$subscribers->last_name}}

            </div>
        </div>
    </div>
@endsection
