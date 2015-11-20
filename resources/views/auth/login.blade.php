<!-- resources/views/auth/login.blade.php -->
@extends('layouts.auth')

@section('title', 'Login')

@section('content')

<div class="container">
    <div class="row">
        <h1 class="logo"><a href="/"><strong><em>my</em></strong>rezzi</a></h1>
    </div>
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6 login">
            <div class="headline">
                <h1>Login</h1>
            </div>
                <form method="POST" action="/auth/login">
                    {!! csrf_field() !!}

                    <div>
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                    </div>

                    <div>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                    </div>

                    <div class="button-wrapper">
                        <button class="button-red" type="submit">Login</button>
                    </div>
                </form>

        </div>
    </div>
</div>

@endsection