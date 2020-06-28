@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection
@section('content')
     <div id="wrapper">
         <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Prijava</h1>
        <form method="POST" action="/subscribers">
            @csrf
            <div class="field">
                <label class="label" for="first_name">Ime</label>
                <div class="control">
                    <input class="input {{$errors->has('first_name') ? 'is-danger': ''}}" type="text" name="first_name" id="first_name">
                    @if($errors->has('first_name'))
                    <p class="help is-danger">{{$errors->first('first_name')}}</p>
                    @endif
                </div>
            </div>
            <div class="field">
                <label class="label" for="first_name">Prezime</label>
                <div class="control">
                    <input class="input {{$errors->has('last_name') ? 'is-danger': ''}}" type="text" name="last_name" id="last_name">
                    @if($errors->has('last_name'))
                        <p class="help is-danger">{{$errors->first('last_name')}}</p>
                    @endif
                </div>
            </div>
            <div class="field">
                <label class="label" for="email">Email</label>
                <div class="control">
                    <input class="input {{$errors->has('email') ? 'is-danger': ''}}" type="email" name="email" id="email">
                    @if($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                    @endif
                </div>
            </div>

            <div class="field is-grupped">
                <div class="control">
                    <button class="button is-link" type="submit">Prijavi se</button>
                </div>
            </div>
        </form>
         </div>
     </div>
 @endsection
