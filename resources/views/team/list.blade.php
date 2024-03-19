@extends("layouts.Dashboard")
@section("script")
<script type="text/javascript">
    var app = angular.module('TeamListModule', []);
    app.controller('TeamListController', ($scope, $http) => {
        $scope.teamId = null;
        $scope.teams = []

        $scope.getTeams = () => {
            $http.get('/teams').then((result) => {
                $scope.teams = result.data;
            })
        }

        angular.element(document).ready(() => {
            $scope.getTeams();
        })

        $scope.showConfirmation = (id) => {
            $('#deleteModal').modal('show');
            $scope.teamId = id;
            //console.log(id);
        }

        $scope.deleteTeam = () => {
            $http.delete(`/teams/${$scope.teamId}`).then((result) => {
                $('#deleteModal').modal('hide');
                $scope.getTeams()
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
        <h1 class="h3 mb-0 text-gray-800">Lista de Equipos</h1>

        <a href="/newteam" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-user-plus fa-sm text-white-50"></i> Nuevo Equipo</a>
    </div>

    <div ng-app="TeamListModule" ng-controller="TeamListController" class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>
                        Nombre del Equipo
                    </th>
                    <th>
                        Periodo
                    </th>
                    <th>
                        Gestión
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="team in teams">
                    <td>
                        @{{ team.teamName }}
                    </td>
                    <td>
                        @{{ team.phase }}
                    </td>
                    <td>
                        @{{ team.year }}
                    </td>

                    <td>
                        <a href="@{{ '/editteam/' + team.id }}" class="btn btn-primary mb-2 shadow-sm"><i class="fas fa-pencil fa-sm text-white-50 "></i> Editar</a>
                        <button type="button"  class="btn btn-danger mb-2 shadow-sm" ng-click="showConfirmation(team.id)" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash fa-sm text-white-50 "></i> Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar al equipo?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Si elimina este emprendimiento todos los estudiantes en el tambien serán eliminados.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="button" ng-click="deleteTeam(team.id)">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
