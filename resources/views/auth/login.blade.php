<!--
    @extends('adminlte::auth.login')
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistema de Evaluación del desempeño del personal docente</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .colorBG{
    background-color: #69379A;
    color: white;
}
  </style>
</head>
<body>



<nav class="colorBG navbar navbar-expand-sm  fixed-top">
@if (Route::has('login'))

@auth
            <a class="nav-link" href="{{ route('index') }}" style="text-decoration:none; color:white;">
                <span class="spann"> 
                    <i class="fas fa-reply"></i>
                    IR A LA EVALUACIÓN 
                    <i class="fa fa-user-edit"></i> 
                </span> 
            </a>
@else
<br>
<!--

            <a class="nav-link" href="{{ route('login') }}" style="text-decoration:none; color:white;">
                <span class="spann"> <i class="fa fa-sign-in"></i> LOGIN</span>
            </a>

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                        <span class="spann"> <i class="fa fa-edit"></i> REGISTRO</span>
                    </a>
                </li>
            @endif
-->

@endauth

@endif
</nav>


<div class="row">

 
    <div class="col-sm-2">  <br><br><br>   </div>
    
    <div class="col-sm-5 " style="padding-top: 100px;">
   
                <center>
                        <h3 style="color:purple;">
                        <p>
                            <b>Sistema de Evaluación del desempeño del personal docente de las instituciones de Educación Superior de SEIEM del semestre aaaa-bbb 2022.</b>
                        </p>
                        </h3>
                </center>
                <br>
                
                <div class="flex-right position-ref">
                        <img class="img-fluid" src="img/SEIEM_edo.png" alt="">
                </div> 
                <br>
                <div>
                        <center>
                            <div class="spinner-grow spinner-grow-sm text-light"></div>
                            <div class="spinner-grow spinner-grow-sm text-muted"></div>
                            <div class="spinner-grow spinner-grow-sm text-dark"></div>
                            <div class="spinner-grow spinner-grow-sm text-primary"></div>
                            <div class="spinner-grow spinner-grow-sm text-success"></div>
                            <div class="spinner-grow spinner-grow-sm text-info"></div>
                            <div class="spinner-grow spinner-grow-sm text-warning"></div>
                            <div class="spinner-grow spinner-grow-sm text-danger"></div>
                            <div class="spinner-grow spinner-grow-sm text-secondary"></div>
                        </center>
                    </div>
                    
    </div>

    <div class="col-sm-1">     </div>

    <div class="col-sm-3"  style="padding-top: 100px;">

                @if (Route::has('login'))

                @auth

                @else

                            <div class="container-fluid shadow-sm ">
                            
                                        <div class="colorBG card-header bg-purple">
                                            ACCESO AL SISTEMA
                                        </div>
                                        <div class="card-body">
                                            @extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

                                            @php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
                                            @php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
                                            @php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )

                                                @if (config('adminlte.use_route_url', false))
                                                    @php( $login_url = $login_url ? route($login_url) : '' )

                                                @else
                                                    @php( $login_url = $login_url ? url($login_url) : '' )

                                                @endif

                                    
                                        <form action="{{ $login_url }}" method="post">
                                            @csrf
                                            {{-- Email field --}}
                                            <div class="input-group mb-3">
                                                        <input type="text" name="email" class="form-control  input-sm @error('email') is-invalid @enderror"
                                                            value="{{ old('email') }}" placeholder="usuario" autofocus> 

                                                        <div class="input-group-append">
                                                            <div class="input-group-text">
                                                                <span class="fa fa-user-circle {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                            </div>
                                                        </div>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>

                                            {{-- Password field --}}
                                            <div class="input-group mb-3">
                                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                                            placeholder="password">  

                                                        <div class="input-group-append">
                                                            <div class="input-group-text">&nbsp;
                                                                <span class="fa fa-ellipsis-h {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                            </div>
                                                        </div>

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>

                                            {{-- Login field --}}
                                            <div>
                                                        
                                                        <button type=submit class="colorBG btn btn-block btn-sm {{ config('adminlte.classes_auth_btn', 'btn-flat') }}" style="text-decoration:none; color:white;">
                                                            Ingresar <i class="fa fa-sign-in"></i>
                                                        </button>
                                                        <br>
                                                        <p> 
                                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label for="remember">
                                                            {{ __('adminlte::adminlte.remember_me') }}
                                                        </label>
                                                        </p>
                                            </div>

                                        </form>
                                        </div>
                                        
                            </div>
                @endauth

                @endif

    </div>

    <div class="col-sm-1">     </div>


</div>


</body>
</html>
