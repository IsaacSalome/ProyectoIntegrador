
@extends('layouts.login')


@section('content')

<div class="grid">

    <div id="login">

      <h2><span class="fontawesome-lock"></span>Inicio de sesion</h2>

      <form method="POST" action="{{ route('login') }}" >
        @csrf
        <fieldset>
          <p><label for="email">E-mail address</label></p>
          <p><input type="email" name="email" id="inputSmall" id="email" placeholder="mail@address.com"></p>

            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror

          <p><label for="password">Password</label></p>
          <p><input type="password" name="password" class="@error('password') is-invalid @enderror" id="password" placeholder="password"></p>
              @error('password')
                <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
                </span>
              @enderror
          <p><input type="submit" value="Sign In">
           {{ __('Login') }}</p>

            @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
              </a>
            @endif

        </fieldset>

      </form>

    </div>

  </div>

@endsection