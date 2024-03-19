@extends("layouts.Dashboard")
@section("script")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <?php header('Access-Control-Allow-Origin: *'); ?>


<script type="text/javascript">
    var app = angular.module('StudentListModule', []);
    app.controller('StudentListController', ($scope, $http) => {
        $scope.studentId = null;
        $scope.students = []

        $scope.getStudents = () => {
            $http.get('/students').then((result) => {
                $scope.students = result.data;
            })
        }

        angular.element(document).ready(() => {
            $scope.getStudents();


        })


    })


</script>






<script>

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('id').hidden = true;
        document.getElementById('email').hidden = true;
        document.getElementById('fname').hidden = true;
        document.getElementById('end').hidden = true;
        document.getElementById('proffesor').hidden = true;



        let formulario = document.querySelector("form");
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {

            locale:"es",

            headerToolbar:{
                left: 'prev,next today',
                center: 'title',
                right:'dayGridMonth, timeGridWeek, listWeek'
            },
            events: "http://127.0.0.1:8000/viewmeets/show",




            dateClick:function(info){
                formulario.reset();
                formulario.start.value = info.dateStr;
                formulario.end.value = info.dateStr;
                $("#calendario").modal("show");

            },


            eventClick:function(info){
                var date = info.event;
                console.log(date);

                axios.post("http://127.0.0.1:8000/viewmeets/edit/"+ info.event.id).
                then(
                    (response) => {

                        formulario.id.value = response.data.id;
                        formulario.title.value = response.data.title;

                        formulario.start.value = response.data.start;
                        formulario.end.value = response.data.end;
                        $("#calendario").modal("show");



                    }
                ).catch(
                    error=>{
                        if(error.response){
                            console.log(error.response.data);
                        }
                    }
                )
            }
        });

        calendar.render();




        function enviarDatos(url){


            const datos = new FormData(formulario);
            for (let pair of datos.entries()) {
                console.log(pair[0] + ', ' + pair[1]);
            }


            console.log(datos);
            console.log(formulario.id.value);
            console.log(formulario.title.value);
            console.log(formulario.email.value);
            console.log(formulario.fname.value);
            console.log(formulario.start.value);
            console.log(formulario.end.value);
            console.log(formulario.proffesor.value);

            axios.post(url, datos).
            then(
                    (response) => {
                        calendar.refetchEvents();
                        $("#calendario").modal("hide");

                    }
                ).catch(
                    error=>{
                        if(error.response){
                            console.log(error.response.data);
                            console.error(error.response);
                        }
                    }
                )
        }


        document.getElementById("btnSave").addEventListener("click", function(){

            enviarDatos("http://127.0.0.1:8000/viewmeets/create");
        });



        document.getElementById("btnDelete").addEventListener("click", function(){


            enviarDatos("http://127.0.0.1:8000/viewmeets/delete/"+ formulario.id.value);
        });

        document.getElementById("btnEdit").addEventListener("click", function(){


            enviarDatos("http://127.0.0.1:8000/viewmeets/update/"+ formulario.id.value);
        });





    });




    function IsEmpty() {

            if (document.forms['frm'].start.value === "") {
                alert("Error. Debe rellenar todos los datos");
                return false;
            }
            else if (document.forms['frm'].title.value === "") {
                alert("Error. Debe rellenar todos los datos");
                return false;
            }
            else if (document.forms['frm'].end.value === "") {
                alert("Error. Debe rellenar todos los datos");
                return false;
            }

            return true;
        }



</script>





@stop
@section('content')


<div class="container">
    <div style="text-align: center;"> <h1>Agenda de Reuniones</h1> </div>
    <br>
    <br>

    <div id="calendar">

    </div>

</div>




<!-- Modal Calendar-->
<div class="modal fade" id="calendario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nueva Reunión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="post" name="frm">

            {!! csrf_field() !!}

            <div class="container-fluid ">

                <div class="row">
                    <div class="col-md-4 " >
                        <div class="form-group">

                            <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="title_meet">Titulo:</label>
                            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Ingrese el título">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                    </div>



                </div>



                <div class="row">
                    <div class="col-md-5 ">
                        <div class="form-group">
                            <label for="start_meet">Agendar la Fecha </label>
                            <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Ingrese la Fecha de la Reunión </small>
                        </div>

                    </div>

                    <div class="col-md-5 ml-auto">
                        <div class="form-group">

                            <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">

                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-5 ">
                        <div class="form-group">
                                <div ng-app="StudentListModule" ng-controller="StudentListController" class="form-group">
                                    <label for="studentSelect">Seleccionar Estudiante:</label>
                                    <select class="form-control" id="studentSelect" ng-model="selectedStudent" ng-options="student as (student.firstName + ' ' + student.lastName + ' ' + student.secondLastName ) for student in students">
                                    </select>


                                    <div ng-show="selectedStudent" class="mt-3">
                                        <strong>Nombres:</strong> @{{ selectedStudent.firstName }} <br>
                                        <strong>Primer Apellido:</strong> @{{ selectedStudent.lastName }} <br>
                                        <strong>Segundo Apellido:</strong> @{{ selectedStudent.secondLastName }} <br>
                                        <strong>Email:</strong> @{{ selectedStudent.email }} <br>
                                        <strong>Emprendimiento:</strong> @{{ selectedStudent.teamName }} <br>
                                    </div>

                                    <input type="text" class="form-control" name="email" id="email" aria-describedby="helpMail" placeholder="" value="@{{ selectedStudent.email }}">
                                    <small id="helpMail" class="form-text text-muted"></small>
                                    <input type="text" class="form-control" name="fname" id="fname" aria-describedby="helpName" placeholder="" value="@{{ selectedStudent.firstName }} @{{ selectedStudent.lastName }} @{{ selectedStudent.secondLastName }}">
                                    <small id="helpName" class="form-text text-muted"></small>


                                    <input type="text" class="form-control" name="proffesor" id="proffesor" aria-describedby="helpProffesor" placeholder="" value="{{ Auth::user()->firstName }} {{ Auth::user()->lastName }} {{ Auth::user()->secondLastName }}">
                                    <small id="helpProffesor" class="form-text text-muted"></small>

                                </div>
                        </div>
                    </div>
                </div>



            </div>


        </form>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btnSave" onclick="return IsEmpty();">Guardar</button>
        <button type="button" class="btn btn-warning" id="btnEdit">Modificar</button>
        <button type="button" class="btn btn-danger" id="btnDelete">Eliminar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

      </div>
    </div>
  </div>
</div>






<!-- <script>
    const logBtn = document.getElementById('log');
        logBtn.addEventListener('click', fetchData);

        async function fetchData() {

            const response = await fetch('http://127.0.0.1:8000/viewtimes/show');
            const data = await response.json();

            data.forEach(obj => {
                Object.entries(obj).forEach(([key, value]) => {
                    console.log(`${key} ${value}`);
                });
                console.log('-------------------');
            });
        }
</script> -->
@endsection

