<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--Vista de compatibilidad - establece modo compatibilidad-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!--restaura el comportamiento anterior a Safari 9.0-->

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.3/angular.min.js" integrity="sha512-KZmyTq3PLx9EZl0RHShHQuXtrvdJ+m35tuOiwlcZfs/rE7NZv29ygNA8SFCkMXTnYZQK2OX0Gm2qKGfvWEtRXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <title>Incuvalab</title>
        @yield("script")

        <script src="https://kit.fontawesome.com/4e8f6a1b35.js" crossorigin="anonymous"></script>

        <!--Fontawesome-->
        <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">     https://fontawesome.com/v4/get-started/-->
        <!--Google Fonts API-->
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet"> <!--https://developers.google.com/fonts/docs/getting_started-->

        <!-- Custom styles-->
        <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}"> <!--Carpeta public-->


    </head>
    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - HeadPresentation -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home#">
                    <div class="sidebar-brand-icon">
                        <!--<image src="{{ asset('images/univalle_logo.png') }}" style="height: 50px; width: 50px;"></i>-->
                    </div>
                    <div class="sidebar-brand-text mx-3">INCUVALAB</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Home -->
                <li class="nav-item active">
                    <a class="nav-link" href="/home#">
                        <i class="fas fa-fw fa-solid fa-home"></i>
                        <span>Página Principal</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    OPCIONES
                </div>

                <!-- --------------------------------------------ADMIN DASHBOARD------------------------------------------------------------------------------------- -->

                @if (Auth::user()->userType == 'admin')

                <!-- Collapse Students Gestion-->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStudents"
                        aria-expanded="true" aria-controls="collapseStudents">
                        <i class="fas fa-user"></i>
                        <span>Gestionar Docentes</span>
                    </a>
                    <div id="collapseStudents" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Gestión de Docentes:</h6>
                            <a class="collapse-item" href="/listteachers">Lista de Docentes</a>
                            <a class="collapse-item" href="/newteacher">Insertar Docente</a>
                        </div>
                    </div>
                </li>
                @endif

                <!-- --------------------------------------------PROFESSOR DASHBOARD------------------------------------------------------------------ -->

                @if (Auth::user()->userType == 'teacher')

                <!-- Collapse Students Gestion-->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStudents"
                        aria-expanded="true" aria-controls="collapseStudents">
                        <i class="fas fa-user"></i>
                        <span>Gestionar Estudiantes</span>
                    </a>
                    <div id="collapseStudents" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Gestión de Estudiantes:</h6>
                            <a class="collapse-item" href="/liststudents">Lista de Estudiantes</a>
                            <a class="collapse-item" href="/newstudent">Insertar Estudiante</a>
                        </div>
                    </div>
                </li>


                <!-- Collapse Teams Gestion-->
                <!-- Nav Item - Teams-->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTeams"
                        aria-expanded="true" aria-controls="collapseTeams">
                        <i class="fas fa-user-friends"></i>
                        <span>Gestionar Equipos:</span>
                    </a>
                    <div id="collapseTeams" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Gestión de Equipos:</h6>
                            <a class="collapse-item" href="/viewteams">Vista de Emprendimientos</a>
                            <a class="collapse-item" href="/listteams">Lista de Emprendimientos</a>
                            <a class="collapse-item" href="/newteam">Insertar Emprendimiento</a>

                        </div>
                    </div>
                </li>

                <!-- Nav Item - Teams-->
                <!--<li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTimes"
                        aria-expanded="true" aria-controls="collapseTimes">
                        <i class="fas fa-calendar-days"></i>
                        <span>Gestionar Fechas:</span>
                    </a>
                    <div id="collapseTimes" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Administracion de tiempos:</h6>
                            <a class="collapse-item" href="/viewtimes">Calendario</a>

                        </div>
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Agenda de Reuniones:</h6>
                            <a class="collapse-item" href="/viewmeets">Reuniones</a>

                        </div>
                    </div>
                </li>-->

                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Nav Item - Progress--> 
                <li class="nav-item">
                    <a class="nav-link" href="/viewForms">
                        <i class="fas fa-fw fa-chart-bar"></i>
                        <span>Vista de Progresos</span>
                    </a>
                </li>

                <!--<li class="nav-item">
                    <a class="nav-link" href="/video">
                        <i class="fas fa-fw fa-shop"></i>
                        <span>Videos</span>
                    </a>
                </li>   -->
                @endif
                 <!-- -------------------------------------------- ---------------------STUDENT DASHBOARD------------------------------------------------------------------ -->

                @if (Auth::user()->userType == 'student')

                <!-- Nav Item - My team -->
                <li class="nav-item">
                    <a class="nav-link" href="/myteam">
                        <i class="fas fa-fw fa-shop"></i>
                        <span>Mi Emprendimiento</span>
                    </a>
                </li>

                <!-- Form links disabled -->
                <script>
                    fetch("/verified").then(response => response.json())
                    .then(res => {
                        var status = res[0].status;
                        var s = status.split(',')
                        for(let i = 0; i < s.length;i++){
                            if(s[i] == 0){

                                var a = document.getElementById(i+1)
                                a.style = "cursor: not-allowed; pointer-events: none;"
                            }
                        }
                    })
                </script>
                <!-- End Form links disabled -->

                 <!-- Nav Item - Forms -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForms"
                        aria-expanded="true" aria-controls="collapseForms">
                        <i class="fas fa-user"></i>
                        <span>Vista de formularios</span>
                    </a>

                    <div id="collapseForms" class="collapse" aria-labelledby="headingUtilities"
                                            data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Formularios:</h6>
                            <a class="collapse-item" id="1" href="/form1">Propuesta de valor</a>
                            <a class="collapse-item" id="2" href="/form2">Mapa de competidores</a>
                            <a class="collapse-item" id="3" href="/form3">Análisis entorno y grupos <br> de interés</a>
                            <a class="collapse-item" id="4" href="/form4">Modelo de negocio y <br> marketing</a>
                            <a class="collapse-item" id="5" href="/form5">Precio y viavilidad del <br>negocio</a>
                            <a class="collapse-item" id="6" href="/form6">Plan de impacto</a>
                            <a class="collapse-item" id="7" href="/form7">Plan de crecimiento</a>
                        </div>
                        <!-- style="pointer-events: none;"-->
                    </div>
                </li>

                <!--<li class="nav-item">
                    <a class="nav-link" href="/video">
                        <i class="fas fa-fw fa-shop"></i>
                        <span>Videos</span>
                    </a>
                </li>-->

                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Nav Item - Progress -->
                <!--<li class="nav-item">
                    <a class="nav-link" href="/mycalendar">
                        <i class="fas fa-calendar-days"></i>
                        <span>Calendario</span>
                    </a>
                </li>-->

                <!--<hr class="sidebar-divider">-->
                <!-- Nav Item - Progress -->
                <!--<li class="nav-item">
                    <a class="nav-link" href="/mymeetings">
                        <i class="fas fa-calendar-days"></i>
                        <span>Reuniones</span>
                    </a>
                </li>-->
                @endif

                <!--End options-->

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS)
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div> -->

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->firstName }} {{ Auth::user()->lastName }} {{ Auth::user()->secondLastName }}</span>

                                    <img class="img-profile rounded-circle"
                                        src="{{ asset('images/profile.jpg') }}">
                                </a>

                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <!-- <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Mi Perfil
                                    </a> -->
                                    <a class="dropdown-item" href="{{ route('changePass') }}">
                                        <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Cambiar contraseña
                                    </a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Cerrar sesión
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <!-- End Topbar Navbar -->

                    </nav>
                    <!-- End of Topbar -->

                </div>
                <!-- /.container-fluid -->

                @yield("content")

                <!-- Footer -->
                <!--<footer class="sticky-footer bg-white">
                    <div class="container my-auto ">
                        <div class="copyright text-center my-auto">
                            <span>Incuvalab | Univalle Cochabamba</span>
                        </div>
                    </div>
                </footer>-->
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Deseas cerrar sesión?</h5>
                        <button class="close" type="button" id="especial3" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Selecciona "Cerrar sesión" si quieres abandonar la cuenta actual.</div>
                    <div class="modal-footer">

                        <a  href="{{ route('logout') }}" id="especial" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <button class="btn btn-primary" type="button" id="especial1" data-dismiss="modal" > {{ __('Cerrar Session') }}</button>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <button class="btn btn-secondary" type="button" id="especial2" data-dismiss="modal">Cancelar</button>

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

        <!-- Page level plugins -->
        @vite(['resources/js/datatables/jquery.dataTables.min.js'])
        @vite(['resources/js/datatables/dataTables.bootstrap4.min.js'])

        <!-- Page level custom scripts -->
        <!-- @vite(['resources/js/demo/datatables-demo.js']) -->
    </body>
</html>
