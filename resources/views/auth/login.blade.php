@extends('layouts.app')

@section('content')
<div class="form-registration">
        <div class="form-1">
            <form  action="{{ route('login') }}" method="POST">
                 {{ csrf_field() }}
                <div class="registration-1">
                    <div>DO YOU HAVE AN ACCOUNT? COME IN</div>
                    <div>LOGIN OR EMAIL :</div>
                    <div><input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus></div>
                    <div>PASSWORD : </div>
                    <div><input id="password" type="password" name="password" required></div>
                    <div><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</div>
                    <div><button class = "button-auth" type="submit" name="do_signup">SIGN UP</button></div>
                </div>
            </form>
    </div>
        <div class="form-2">
            <form action="{{ route('register') }}" method="POST">
                 {{ csrf_field() }}
                <div class="registration-2">
                    <div>REGISTATION</div>
                    <div>LOGIN :</div>
                    <div><input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus></div>
                    <div>E-MAIL : </div>
                    <div><input id="email" type="email" name="email" value="{{ old('email') }}" required></div>
                    <div>PASSWORD : </div>
                    <div><input id="password" type="password" name="password" required></div>
                    <div>CONFIRM PASSWORD : </div>
                    <div><input id="password-confirm" type="password" name="password_confirmation" required></div>
                    <div><button class = "button-auth" type="submit" name="do_signup-1">SEND</button></div>
                </div>
            </form>
        </div>
    </div>
@endsection
