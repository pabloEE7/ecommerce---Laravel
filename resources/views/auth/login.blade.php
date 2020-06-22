<!DOCTYPE html>
<html>
<head>
    <title>Accede o crea tu cuenta en planB Delivery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body>
    <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div style="height: 50px;"  class="col-lg-12  mt-2">
                <div id="respuesta-request" class=" col-lg-9 m-auto"></div>
              </div>
              <div class="col-lg-7 m-auto">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 mb-4 text-dark">Iniciar sesión</h1>
                    <p class="text-dark">Bienvenido a planB Delivery</p>
                  </div>                 
                  <form id="dataForm" class="user" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                      <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Estas credenciales no coinciden con nuestros registros.</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" class="form-control  form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                    </div>
 
                    <input type="submit" id="btn-login" class="btn btn-danger  btn-user btn-block  form-control-user" value="Ingresar">                
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>


