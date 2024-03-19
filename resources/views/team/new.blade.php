@extends("layouts.Dashboard")
@section("script")
<script
    src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"> 
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript">
    var app = angular.module("TeamNewModule", []);
    app.controller("TeamNewController", ($scope, $http) => {
        $scope.team = {};

        $scope.postTeam = () => {
            $http.post('/teams', $scope.team).then((result) => {
                //console.log(result.data);
                if(result.data['result']== 'error'){
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Ya existe un emprendimiento con el mismo nombre.'
                     
                    });
                }
                else{
                    Swal.fire({
                        type: 'success',
                        title: 'Hecho!',
                        text: 'Se registró al emprendimiento exitosamente.',
                        confirmButtonColor: '#28A745',
                        confirmButtonText: 'Ok',
                    }) .then(resultado => {
                        if (resultado.value) {
                            
                            window.location.href = '/listteams'
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
    <h1 class="h3 mb-4 text-gray-800">Agregar nuevo equipo</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos del equipo</h6>
        </div>
        <div class="card-body">
            <form ng-app="TeamNewModule" ng-controller="TeamNewController" name="myForm">
                <div>
                    Nombre del Equipo:
                    <input name="team_name" type="text" class="form-control" ng-model="team.teamName" ng-required="true">
                    <span style="color:red" ng-show="myForm.team_name.$touched && myForm.team_name.$error.required">Nombre del equipo requerido.</span>
                </div>
                <br>
                <div>
                    Gestión:

                    <input name="team_year" type="text" class="form-control" ng-model="team.year" ng-required="true">
                    <span style="color:red" ng-show="myForm.team_year.$touched && myForm.team_year.$error.required">Gestión requerida.</span>
                </div>
                <br>
                <div>
                    <button type="button" ng-click="postTeam()" class="btn btn-primary"  ng-disabled="myForm.$invalid" >Registrar</button>
                    <a href="/listteams" class="btn btn-primary">Volver</a>
                </div>
            </form>
        </div> 
    </div>
</div>
@stop