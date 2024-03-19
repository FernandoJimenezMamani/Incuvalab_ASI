@extends("layouts.Dashboard")
@section("script")
<script type="text/javascript">
    var app = angular.module('TimeListModule', []);
    app.controller('TimeListController', ($scope, $http) => {
        $scope.timeId = null;
        $scope.times = []

        $scope.getTimes = () => {
            $http.get('/times').then((result) => {
                $scope.times = result.data;
            })
        }

        angular.element(document).ready(() => {
            $scope.getTimes();
        })

        $scope.showConfirmation = (id) => {
            $('#deleteModal').modal('show');
            $scope.timeId = id;
            console.log(id);
        }

        $scope.deleteTime = () => {
            $http.delete(`/times/${$scope.timeId}`).then((result) => {
                $('#deleteModal').modal('hide');
                $scope.getTimes()
            })
        }

        // $(document).ready(function() {
        //     $('#dataTable').DataTable();
        // });
    })
</script>
@stop
@section("content")


<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Lista de gestiones y tiempos</h1>

        <a href="/newtime" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-user-plus fa-sm text-white-50"></i> Nueva Gestion</a>
    </div>

    <div ng-app="TimeListModule" ng-controller="TimeListController" class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>
                        Gestion
                    </th>
                    <th>
                        Formulario 1
                    </th>
                    <th>
                        Formulario 2
                    </th>
                    <th>
                        Formulario 3
                    </th>
                    <th>
                        Formulario 4
                    </th>
                    <th>
                        Formulario 5
                    </th>
                    <th>
                        Formulario 6
                    </th>
                    <th>
                        Formulario 7
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="time in times">
                    <td>
                        @{{ time.year }}
                    </td>
                    <td>
                        @{{ time.form1_start }}<hr>@{{ time.form1_end }}
                    </td>
                    <td>
                        @{{ time.form2_start }}<hr>@{{ time.form2_end }}
                    </td>
                    <td>
                        @{{ time.form3_start }}<hr>@{{ time.form3_end }}
                    </td>
                    <td>
                        @{{ time.form4_start }}<hr>@{{ time.form4_end }}
                    </td>
                    <td>
                        @{{ time.form5_start }}<hr>@{{ time.form5_end }}
                    </td>
                    <td>
                        @{{ time.form6_start }}<hr>@{{ time.form6_end }}
                    </td>
                    <td>
                        @{{ time.form7_start }}<hr>@{{ time.form7_end }}
                    </td>
                    <td>
                        <a href="@{{ '/edittime/' + time.id }}" class="btn btn-primary mb-2 shadow-sm"><i class="fas fa-pencil fa-sm text-white-50 "></i> Editar</a>
                        <button type="button"  class="btn btn-danger mb-2 shadow-sm" ng-click="showConfirmation(time.id)" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash fa-sm text-white-50 "></i> Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar la gestion?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Si elimina esta gestion todos los tiempos en él tambien serán eliminados.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="button" ng-click="deleteTime(time.id)">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop