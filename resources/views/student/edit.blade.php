@extends("layouts.Dashboard")

@section("script")
<script
    src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"> 
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript">
    function getId(url = window.location.href) {
        let urlParts = url.split('/');
        return urlParts[urlParts.length - 1];
    }
    var app = angular.module('StudentEditModule', [])
    app.controller('StudentEditController', ($scope, $http) => {
        $scope.student = {}

        angular.element(document).ready(() => {
            id = getId()
            
            $http.get('/teams').then((result) => {
                $scope.teams = result.data;

                $http.get(`/students/${id}`).then((result) => {
                    $scope.student = result.data
                    $scope.selectedTeam = $scope.teams.find(element => { return element.id == $scope.student.teamId; });
                   
                })
            })
        })
        $scope.putStudent = () => {
            $scope.student.teamID = $scope.selectedTeam.id;
            $http.put('/students', $scope.student).then((result) => {
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
                        text: 'Se actualizó al estudiante exitosamente.',
                        confirmButtonColor: '#28A745',
                        confirmButtonText: 'Ok',
                    }) .then(resultado => {
                        if (resultado.value) {
                            // Hicieron click en "Sí"
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
    <h1 class="h3 mb-4 text-gray-800">Editar estudiante</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos del estudiante</h6>
    </div>
    <div class="card-body">
        @csrf
        <form ng-app="StudentEditModule" ng-controller="StudentEditController" name="myForm">
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
                <select name="IdTeam" id="inputTeamId" class="form-control" required data-ng-options="team.teamName for team in teams" data-ng-model="selectedTeam">

                </select>
                <span style="color:red" ng-show="myForm.IdTeam.$error.required">Seleccione un equipo</span>
            </div>
            <br>
            <div>
                <button type="button" ng-click="putStudent()" class="btn btn-success" ng-disabled="myForm.$invalid">Actualizar</button>
                <a href="/liststudents" class="btn btn-primary">Volver</a>
            </div>
        </form>
    </div>
</div>
@stop