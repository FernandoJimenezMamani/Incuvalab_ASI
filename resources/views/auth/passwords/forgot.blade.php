<!DOCTYPE html>
<html lang="en">

    <head>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
        </style>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Forgot Password</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">

    </head>

    <body class="bg-gradient" style="background-image: url('../images/bcg1.jpg'); background-color: rgba(255,255,255,0.6);background-repeat: round;display: flex;justify-content: center;align-items: center;flex-direction: column;height: 100vh;margin: -20px 0 50px;">

        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block">
                                    <image style="height: 400px; width: 450px; justify-content: center; margin:auto;" src="https://images.pexels.com/photos/6285271/pexels-photo-6285271.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <form class="user" method="POST" action="{{ route('forgotPassword') }}">
                                            @csrf
                                        
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-2">¿Olvidaste tu contraseña?</h1>
                                                <p class="mb-4">Lo entendemos, estas cosas pasan. Sólo tienes que introducir tu dirección de correo electrónico
                                                    y te enviaremos una contraseña nueva.</p>
                                            </div>
                                            @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @elseif (session('error'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ session('error') }}
                                                </div>
                                            @endif
                                            <div class="form-group">
                                                <input name="email" id="email" type="email" class="form-control form-control-user"
                                                    id="exampleInputEmail" aria-describedby="emailHelp" required autocomplete="email"
                                                    placeholder="E-mail">
                                            </div>
                                            <button type="submit" class="btn btn-user btn-block" style="background-color: #7b031a; color: white;">
                                                Cambia tu contraseña
                                            </button>
                                        </form>
                                        <hr>
                                    
                                        <div class="text-center" >
                                            <a class="small"  href="/" style="color: #7b031a; font-family: 'Montserrat', sans-serif;">Ya tienes una cuenta? Inicia sessión!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        @vite(['resources/js/jquery/jquery.min.js'])
        @vite(['resources/js/bootstrap/bootstrap.bundle.min.js'])

        <!-- Core plugin JavaScript-->
        @vite(['resources/js/jquery-easing/jquery.easing.min.js'])

        <!-- Custom scripts for all pages-->
        @vite(['resources/js/sb-admin-2.min.js'])

    </body>

</html>