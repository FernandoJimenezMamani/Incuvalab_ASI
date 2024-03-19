@extends("layouts.Dashboard")
@section("script")
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
    })
</script>



<style type="text/css">
    .stepper-wrapper {
        margin-top: auto;
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .stepper-item {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 1;


        @media (max-width: 768px) {
            font-size: 12px;
        }
    }

    .stepper-item::before {
        position: absolute;
        content: "";
        border-bottom: 2px solid #ccc;
        width: 100%;
        top: 20px;
        left: -50%;
        z-index: 2;
    }

    .stepper-item::after {
        position: absolute;
        content: "";
        border-bottom: 2px solid #ccc;
        width: 100%;
        top: 20px;
        left: 50%;
        z-index: 2;
    }

    .stepper-item .step-counter {
        position: relative;
        z-index: 5;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #ccc;
        margin-bottom: 6px;
        background-color: #ff0000;
        color: #FFFFFF;
    }

    .stepper-item.active  {
        font-weight: bold;


    }

    .stepper-item.completed .step-counter {
        background-color: #4bb543;

    }

    .stepper-item.completed::after {
        position: absolute;
        content: "";
        border-bottom: 2px solid #4bb543;
        width: 100%;
        top: 20px;
        left: 50%;
        z-index: 3;

    }

    .stepper-item:first-child::before {
        content: none;
    }
    .stepper-item:last-child::after {
        content: none;
    }
</style>



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
                        Etapa 1
                    </th>
                    <th>
                        Etapa 2
                    </th>
                    <th>
                        Etapa 3
                    </th>
                    <th>
                        Etapa 4
                    </th>
                    <th>
                        Etapa 5
                    </th>
                    <th>
                        Etapa 6
                    </th>
                    <th>
                        Etapa 7
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="team in teams">
                    <td>
                        @{{ team.teamName }}
                    </td>

                    <td>
                        <a href="@{{ '/Form1ById/' + team.id }}" class="btn btn-primary mb-2 shadow-sm"> Ver Form <i class="fas fa-pencil fa-sm text-white-50 "></i></a>
                    </td>
                    <td>
                        <a href="@{{ '/Form2ById/' + team.id }}" class="btn btn-primary mb-2 shadow-sm"> Ver Form <i class="fas fa-pencil fa-sm text-white-50 "></i></a>
                    </td>
                    <td>
                        <a href="@{{ '/Form3ById/' + team.id }}" class="btn btn-primary mb-2 shadow-sm"> Ver Form <i class="fas fa-pencil fa-sm text-white-50 "></i></a>
                    </td>
                    <td>
                        <a href="@{{ '/Form4ById/' + team.id }}" class="btn btn-primary mb-2 shadow-sm"> Ver Form <i class="fas fa-pencil fa-sm text-white-50 "></i></a>
                    </td>
                    <td>
                        <a href="@{{ '/Form5ById/' + team.id }}" class="btn btn-primary mb-2 shadow-sm"> Ver Form <i class="fas fa-pencil fa-sm text-white-50 "></i></a>
                    </td>
                    <td>
                        <a href="@{{ '/Form6ById/' + team.id }}" class="btn btn-primary mb-2 shadow-sm"> Ver Form <i class="fas fa-pencil fa-sm text-white-50 "></i></a>
                    </td>
                    <td>
                        <a href="@{{ '/Form7ById/' + team.id }}" class="btn btn-primary mb-2 shadow-sm"> Ver Form <i class="fas fa-pencil fa-sm text-white-50 "></i></a>
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
