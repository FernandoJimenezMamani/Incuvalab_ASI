@extends("layouts.Dashboard")

@section("script")
<script
    src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"> 
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript">
    var app = angular.module("TeacherEditModule", []);
    app.controller("TeacherEditController", ($scope, $http) => {
        $scope.teacher = {};

        angular.element(document).ready(() => {
            let url = window.location.href;
            var arrUrl = url.split('/')
            let id = arrUrl[arrUrl.length - 1];
            $http.get(`/teachers/${id}`).then((res) =>{
                $scope.teacher = res.data;
            })
        })

        $scope.putTeacher = () => {
            $http.put('/teachers', $scope.teacher).then((result) => {
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
                        text: 'Se actualizó al docente exitosamente.',
                        confirmButtonColor: '#28A745',
                        confirmButtonText: 'Ok',
                    }) .then(resultado => {
                        if (resultado.value) {
                            
                            window.location.href = '/listteachers'
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
    <h1 class="h3 mb-4 text-gray-800">Editar Docentes</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos del docente</h6>
    </div>
    <div class="card-body">
        <form ng-app="TeacherEditModule" ng-controller="TeacherEditController" name="myForm">
            <div>
                Nombres:
                <input name="firstname" type="text" class="form-control" ng-model="teacher.firstName"
                    ng-required="true" ng-minlength=3>

                    <span style="color:red" ng-show="myForm.firstname.$touched && myForm.firstname.$error.required">Nombres son requeridos.</span>
            </div>
            <div>
                Primer apellido:
                <input name="lastname" type="text" class="form-control" ng-model="teacher.lastName"
                    ng-required="true" ng-minlength=3>

                    <span style="color:red" ng-show="myForm.lastname.$touched && myForm.lastname.$error.required">Primer apellido es requerido.</span>
            </div>
            <div>
                Segundo apellido:
                <input name="secondlastname" type="text" class="form-control" ng-model="teacher.secondLastName"
                    ng-required="true" ng-minlength=3>

                    <span style="color:red" ng-show="myForm.secondlastname.$touched && myForm.secondlastname.$error.required">Segundo apellido es requerido.</span>
            </div>
            <div>
                Email:
                <input name="email" type="email" class="form-control" ng-model="teacher.email" ng-required="true">
                <span style="color:red" ng-show="myForm.email.$invalid">
                    <span ng-show="myForm.email.$touched && myForm.email.$error.required">El email es requerido.</span>
                    <span ng-show="myForm.email.$error.email">Dirección de email invalido.</span>
                </span>
            </div>

            <div>
                <button type="button" ng-click="putTeacher()" class="btn btn-success" ng-disabled="myForm.$invalid">Actualizar</button>
                <a href="/listteachers" class="btn btn-primary">Volver</a>
            </div>
        </form>
    </div>
</div>
@stop