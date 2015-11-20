<!-- resources/views/auth/register.blade.php -->
<!-- resources/views/auth/login.blade.php -->
@extends('layouts.auth')

@section('title', 'Register')

@section('content')

<div class="container">
    <div class="row">
        <h1 class="logo"><a href="/"><strong><em>my</em></strong>rezzi</a></h1>
    </div>
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6 login">
            <div class="headline">
                <h1>Register</h1>
            </div>



                <form method="POST" action="/auth/register">
                    {!! csrf_field() !!}

                    <div>
                        <input class="form-control" type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
                    </div>

                    <div>
                        <input class="form-control" type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name">
                    </div>

                    <div>
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                    </div>

                    <div>
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>

                    <div>
                        <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
                    </div>

                    <div>
                        <button class="button-red" type="submit">Register</button>
                    </div>
                </form>

        </div>
    </div>
</div>

@endsection