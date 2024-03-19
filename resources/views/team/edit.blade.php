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

    var app = angular.module('TeamEditModule', [])
    app.controller('TeamEditController', ($scope, $http) => {
        $scope.team = {}
        angular.element(document).ready(() => {
            id = getId()

            $http.get('/times').then((result) => {
                $scope.times = result.data;

                $http.get(`/teams/${id}`).then((result) => {
                    $scope.team = result.data
                   
                })
            })

            // $http.get(`/teams/${id}`).then((result) => {
            //     $scope.team = result.data
            // })
        })
        $scope.putTeam = () => {
            
            $http.put('/teams', $scope.team).then((result) => {
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
                        text: 'Se actualizó al emprendimiento exitosamente.',
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
    <h1 class="h3 mb-4 text-gray-800">Editar equipo</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Equipo</h6>
    </div>
    <div class="card-body">
    <form ng-app="TeamEditModule" ng-controller="TeamEditController" name="myForm">
        <div>
            Nombre del Equipo:
            <input name="team_name" type="text" class="form-control" ng-model="team.teamName" ng-required="true">
            <span style="color:red" ng-show="myForm.team_name.$touched && myForm.team_name.$error.required">Nombre del equipo requerido.</span>
        </div>


        <div>
            Gestión:
            <input name="team_year" type="text" class="form-control" ng-model="team.year" ng-required="true">
            <span style="color:red" ng-show="myForm.team_year.$touched && myForm.team_year.$error.required">Gestión requerida.</span>
        </div>
      
        <br>

        <div>
            <button type="button" ng-click="putTeam()" class="btn btn-success" ng-disabled="myForm.$invalid">Actualizar</button>
            <a href="/listteams" class="btn btn-primary">Volver</a>
        </div>
    </form>
    </div>
</div>
@stop