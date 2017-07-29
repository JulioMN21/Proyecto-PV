<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Inicio</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("css/font-awesome.css")}}">
    <link rel="stylesheet" href="{{asset("css/estilos-login.css")}}">
    <!-- Scripts -->


    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};


    </script>
</head>
<body>
<div class="container">
  <div class="card card-container">
      <img id="profile-img" class="profile-img-card" src="{{ asset('/img/user2.png') }}" />
      <p id="profile-name" class="profile-name-card"></p>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                      <article class="inner-addon left-addon">
                       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         <!-- <span id="reauth-email" class="reauth-email"></span> -->
                          <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                         <!-- <input type="email" id="email" class="form-control"  name="email" placeholder="Correo electronico" value="{{ old('email') }}"
                         required autofocus> -->
                           <input id="email" type="email" class="form-control" name="email" placeholder="Correo electronico"  value="{{ old('email') }}" required autofocus>
                         @if ($errors->has('password'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('password') }}</strong>
                             </span>
                         @endif
                         </div>
                     </article>

                      <article id="passInput" class="inner-addon left-addon">
                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              	<i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
      			         </article>

                    <article class="">
                      <div class="form-group">
                                <div  class="checkbox ">
                                  <label>
                                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                  </label>
                              </div>
                              <div class="center">
                                  <button type="submit" class="btn btn-success">Iniciar sesión</button>
                              </div>
                              <a class="btn btn-link" href="{{ route('password.request') }}" style="margin-left: : 30px;">
                                  ¿Olvidaste tu contraseña?
                              </a>
                              </div>
                    </article>

    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="{{asset('js/jquery-3.1.1.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
 @include('sweet::alert')
</body>
</html>
