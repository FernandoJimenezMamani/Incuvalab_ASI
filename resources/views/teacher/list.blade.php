@extends("layouts.Dashboard")
@section("script")

<script>
    var app = angular.module('TeacherModule', []);
    app.controller('TeacherController', ($scope, $http) => {
        $scope.teacherId = null;
        $scope.teachers = []

        $scope.getTeachers = () => {
            $http.get('/teachers').then((res) => {
                $scope.teachers = res.data;
            })
        }

        angular.element(document).ready(() => {
            $scope.getTeachers();
        })

        $scope.deleteTeacher = (id) => {
            $http.delete(`/teachers/${$scope.teacherId}`).then(res => {
                $('#deleteModal').modal('hide');
                $scope.getTeachers();
            })
        }

        $scope.showConfirmation = (id) => {
            $('#deleteModal').modal('show');
            $scope.teacherId = id;
        }

    })
</script>

@stop

@section("content")
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Lista de Docentes</h1>

        <a href="/newteacher" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-user-plus fa-sm text-white-50"></i> Nuevo Docente</a>
    </div>
 
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Docentes registrados</h6>
        </div>
        <div class="card-body">
            <div ng-app="TeacherModule" ng-controller="TeacherController" class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>
                                Nombres
                            </th>
                            <th>
                                Primer apellido
                            </th>
                            <th>
                                Segundo apellido
                            </th>
                            <th>
                                Email
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="t in teachers">
                            <td>
                                @{{ t.firstName }}
                            </td>
                            <td>
                                @{{ t.lastName }}
                            </td>
                            <td>
                                @{{ t.secondLastName }}
                            </td>
                            <td>
                                @{{ t.email }}
                            </td>
                            <td>
                                <a href="@{{ '/editteacher/' + t.id }}" class="btn btn-primary mb-2 shadow-sm"><i class="fas fa-pencil fa-sm text-white-50 "></i> Editar</a>
                                <button type="button"  class="btn btn-danger mb-2 shadow-sm" ng-click="showConfirmation(t.id)" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash fa-sm text-white-50 "></i> Borrar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar al docente?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                <button class="btn btn-primary" type="button" ng-click="deleteTeacher(teacher.id)">Eliminar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop