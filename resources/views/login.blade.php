<!DOCTYPE html>
<html>
<head>
	<title>Accede o crea tu cuenta en planB Delivery</title>
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
                  <form id="dataForm" class="user">
                    <div class="form-group">
                      <input type="text" id="user" name="user" class="form-control form-control-user" id="exampleInputEmail" placeholder="User" required>
                    </div>
                    <div class="form-group">
                      <input type="password" id="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    </div>
 
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
