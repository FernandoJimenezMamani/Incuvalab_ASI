@extends("layouts.Dashboard")
@section("script")
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

        $scope.showConfirmation = (id) => {
            $('#deleteModal').modal('show');
            $scope.studentId = id;
            //console.log(id);
            // $http.delete(`/students/${id}`).then((result) => {
            //     $scope.getStudents()
            // })
        }

        $scope.deleteStudent = () => {
            $http.delete(`/students/${$scope.studentId}`).then((result) => {
                $('#deleteModal').modal('hide');
                $scope.getStudents()
            })
        }

        // $(document).ready(function() {
        //     $('#dataTable').DataTable();
        // });
    })
</script>
@stop
@section("content")
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Lista de Estudiantes</h1>

        <a href="/newstudent" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-user-plus fa-sm text-white-50"></i> Nuevo Estudiante</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Estudiantes registrados</h6>
        </div>
        <div class="card-body">
            <div ng-app="StudentListModule" ng-controller="StudentListController" class="table-responsive">
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
                                Emprendimiento
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="student in students">
                            <td>
                                @{{ student.firstName }}
                            </td>
                            <td>
                                @{{ student.lastName }}
                            </td>
                            <td>
                                @{{ student.secondLastName }}
                            </td>
                            <td>
                                @{{ student.email }}
                            </td>
                            <td>
                                @{{ student.teamName }}
                            </td>
                            <td>
                                <a href="@{{ '/editstudent/' + student.id }}" class="btn btn-primary mb-2 shadow-sm"><i class="fas fa-pencil fa-sm text-white-50 "></i> Editar</a>
                                <button type="button"  class="btn btn-danger mb-2 shadow-sm" ng-click="showConfirmation(student.id)" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash fa-sm text-white-50 "></i> Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar al estudiante?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                <button class="btn btn-primary" type="button" ng-click="deleteStudent(student.id)">Eliminar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
