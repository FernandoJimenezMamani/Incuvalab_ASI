@extends("layouts.Dashboard")
@section("script")
<script
    src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"> 
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript">
    var app = angular.module("StudentNewModule", []);
    app.controller("StudentNewController", ($scope, $http) => {
        $scope.student = {};

        $scope.postStudent = () => {
            $http.post('/students', $scope.student).then((result) => {
                //console.log(result.data);
                if(result.data['result']== 'error'){
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Ya existe un usuario con este email.'
                     
                    });
                }
                else{
                    Swal.fire({
                        type: 'success',
                        title: 'Hecho!',
                        text: 'Se registró al estudiante exitosamente.',
                        confirmButtonColor: '#28A745',
                        confirmButtonText: 'Ok',
                    }) .then(resultado => {
                        if (resultado.value) {
                            
                            window.location.href = '/liststudents' 
                        }
                    });

                      
                }

            })
        }
    })
</script>
@stop
@section("content")
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Agregar nuevo estudiante</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos del estudiante</h6>
        </div>
        <div class="card-body">
            <form ng-app="StudentNewModule" ng-controller="StudentNewController" name="myForm">

                @csrf
                <div>
                    Nombres:
                    <input name="firstname" type="text" class="form-control" ng-model="student.firstName" 
                        ng-required="true" ng-minlength=3>

                        <span style="color:red" ng-show="myForm.firstname.$touched && myForm.firstname.$error.required">Nombres son requeridos.</span>
                </div>
                <br>
                <div>
                    Primer apellido:
                    <input name="lastname" type="text" class="form-control" ng-model="student.lastName" 
                        ng-required="true" ng-minlength=3>

                        <span style="color:red" ng-show="myForm.lastname.$touched && myForm.lastname.$error.required">Primer apellido es requerido.</span>
                </div>
                <br>
                <div>
                    Segundo apellido:
                    <input name="secondlastname" type="text" class="form-control" ng-model="student.secondLastName" 
                        ng-required="true" ng-minlength=3>

                        <span style="color:red" ng-show="myForm.secondlastname.$touched && myForm.secondlastname.$error.required">Segundo apellido es requerido.</span>
                </div>
                <br>
                <div>
                    Email:
                    <input name="email" type="email" class="form-control" ng-model="student.email" ng-required="true">
                    <span style="color:red" ng-show="myForm.email.$invalid">
                        <span ng-show="myForm.email.$touched && myForm.email.$error.required">El email es requerido.</span>
                        <span ng-show="myForm.email.$error.email">Dirección de email invalido.</span>
                    </span>
                </div>
                <br>
                <div>
                    Emprendimiento:
                    <select name="IdTeam" id="inputTeamId" class="form-control" ng-model="student.teamID" 
                        ng-required="true">
                        
                        @foreach($teams as $team)
                            <option value="{{ $team['id'] }}">{{ $team['teamName'] }}</option>

                        @endforeach
                    </select>
                    <span style="color:red" ng-show="myForm.IdTeam.$error.required">Seleccione un equipo</span>
                </div>
                <br>
                <div>
                    <button type="button" ng-click="postStudent()" class="btn btn-primary" ng-disabled="myForm.$invalid">Registrar</button>
                    <a href="/liststudents" class="btn btn-primary">Volver</a>
                </div>
            </form>
        </div> 
    </div>
</div>
@stop