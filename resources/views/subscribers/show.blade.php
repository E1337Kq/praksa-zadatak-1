@extends('layout')

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    {{$subscribers->fist_name}}
                    </div>

                    {{$subscribers->email}}

            </div>
        </div>
    </div>
@endsection
