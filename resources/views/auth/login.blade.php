
@extends('layouts.login')


@section('content')

<div class="grid">

    <div id="login">

      <h2><span class="fontawesome-lock"></span>Inicio de sesión</h2>

      <form method="POST" action="{{ route('login') }}" >
        @csrf
        <fieldset>
          <p><label for="email">Usuario</label></p>
          <p><input type="text" name="email" id="inputSmall" id="email" placeholder="mail@address.com"></p>

            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror

          <p><label for="password">Contraseña</label></p>
          <p><input type="password" name="password" class="@error('password') is-invalid @enderror" id="password" placeholder="password"></p>
              @error('password')
                <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
                </span>
              @enderror
          <p><input type="submit" value="Iniciar sesión ">
           </p>

    

        </fieldset>

      </form>

    </div>

  </div>

@endsection