@extends('layouts.app')

@section('login')
<div style="position: relative; width: 100%;height: 620px;max-width: 100%; max-height: 100%;">
<div class="container">


    <form class="signUp auth-form" action="/register" method="POST">
       {{ csrf_field() }}
        <h3>Create Your Account</h3>
        <p class="text-auth">Just enter your email address</br>
            and your password for join.
        </p>
        <input id="name" type="text" name="name" value="{{ old('name') }}" class="input-auth input-button-auth w100" type="text" placeholder="INSERT YOUR NICKNAME" reqired autocomplete='off' />
        <input id="email" type="email" name="email" value="{{ old('email') }}" class="input-auth input-button-auth w100" type="email" placeholder="INSERT YOUR E-MAIL" reqired autocomplete='off' />
        <input id="password" name="password" class="input-auth input-button-auth" type="password" placeholder="INSERT PASSWORD" reqired />
        <input id="password-confirm" name="password_confirmation" class="input-auth input-button-auth" type="password" placeholder="VERIFY PASSWORD" reqired />
        <button class="input-button-auth form-btn sx log-in" type="button">Log In</button>
        <button class="input-button-auth form-btn dx" type="submit" name="do_signup-1">Sign Up</button>
    </form>


    <form class="signIn auth-form" action="{{ route('login') }}" method="POST">
        {{ csrf_field() }}
        <h3>Welcome</br>Back </h3>
        <button class="fb input-button-auth" type="button">Log In With Facebook </button>
        <button class="gg input-button-auth" type="button">Log In With Google </button>
        <input style="margin-top: 15px;" id="email" name="email"  value="{{ old('email') }}" class="input-auth input-button-auth" type="email" placeholder="INSERT YOUR E-MAIL" autocomplete='off' reqired />
        <input id="password" name="password" class="input-auth input-button-auth" type="password" placeholder="INSERT PASSWORD" reqired />
        <button class="input-button-auth form-btn sx back" type="button">Back</button>
        <button class="input-button-auth form-btn dx" type="submit" name="do_signup">Log In</button>
    </form>
</div>
</div>

@endsection
