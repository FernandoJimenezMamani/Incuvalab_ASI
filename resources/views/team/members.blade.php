@extends("layouts.Dashboard")
@section("script")
<script type="text/javascript">
    function getId(url = window.location.href) {
        let urlParts = url.split('/');
        return urlParts[urlParts.length - 1];
    }

    var app = angular.module('TeamListModule', [])
    app.controller('TeamListController', ($scope, $http) => {
        $scope.students = {};
        $scope.team={};


        angular.element(document).ready(() => {

            id = getId()
            $http.get(`/teamMembers/${id}`).then((result) => {
                $scope.students = result.data

            })
        })

        $scope.showConfirmation = (id) => {
            $('#deleteModal').modal('show');
            $scope.teamId = id;
            //console.log(id);
        }

        $scope.deleteTeam = () => {
            $http.delete(`/teams/${$scope.teamId}`).then((result) => {
                $('#deleteModal').modal('hide');
                window.location.href = '/viewteams'
            })
        }
        //-----------------------

       //console.log($scope.students);
    })
</script>

@stop
@section("content")
<div class="container-fluid">
    <div ng-app="TeamListModule" ng-controller="TeamListController" class="table-responsive">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div>

            </div>
            <div class="col-lg-12 mb">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div  ng-repeat="student in students | limitTo:1" >
                        <div>
                            <h1  class="h2 mb-4 text-gray-800" ng-model="$scope.team"> @{{ student.teamName }}</h1>
                            <h4 class="h4 text-gray-800">Gestión:  @{{ student.year }}</h4>

                        </div>


                        <div class="d-sm-flex align-items-center justify-content-between">
                            <a href="@{{ '/editteam/' + student.teamId }}"  class="btn btn-warning mb-2 shadow-sm" style="margin-right: 10px;">
                                <i class="fas fa-pencil fa-sm text-white-50 "></i>  Editar</a>
                            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                <i class="fas fa-trash fa-sm text-white-50 "></i>  Eliminar</a> -->

                                <button type="button"  class="btn btn-danger mb-2 shadow-sm" ng-click="showConfirmation(student.teamId)" data-toggle="modal" data-target="#deleteModal" ><i class="fas fa-trash fa-sm text-white-50 "></i> Eliminar</button>
                         </div>

                    </div>




                </div>

                <div class="col-lg-12 ">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Etapa</div>
                                <div class="row no-gutters align-items-center">

                                    <div style="width: 400px"  ng-repeat="student in students | limitTo:1" >
                                        <h4 ng-if="student.phase ===1" class="card-text" >Propuesta de valor</h4>
                                        <h4 ng-if="student.phase ===2" class="card-title" >Mapa de competidores</h4>
                                        <h4 ng-if="student.phase ===3" class="card-title" >Análisis del Entorno y Grupos de Interés</h4>
                                        <h4 ng-if="student.phase ===4" class="card-title">Modelo de Negocio y Marketing</h4>
                                        <h4 ng-if="student.phase ===5"  class="card-title">Precio y viabilidad del negocio</h4>
                                        <h4 ng-if="student.phase ===6"  class="card-title" >Plan de impacto</h4>
                                        <h4 ng-if="student.phase ===7" class="card-title" >Plan de crecimiento</h4>

                                        <br>
                                        <div class="col-auto" >
                                            <div ng-if="student.phase ===1"  class="h5 mb-0 mr-3 font-weight-bold text-gray-800">12%</div>
                                            <div ng-if="student.phase ===2"  class="h5 mb-0 mr-3 font-weight-bold text-gray-800">25%</div>
                                            <div ng-if="student.phase ===3"  class="h5 mb-0 mr-3 font-weight-bold text-gray-800">37%</div>
                                            <div ng-if="student.phase ===4"  class="h5 mb-0 mr-3 font-weight-bold text-gray-800">49%</div>
                                            <div ng-if="student.phase ===5"  class="h5 mb-0 mr-3 font-weight-bold text-gray-800">61%</div>
                                            <div ng-if="student.phase ===6"  class="h5 mb-0 mr-3 font-weight-bold text-gray-800">73%</div>
                                            <div ng-if="student.phase ===7"  class="h5 mb-0 mr-3 font-weight-bold text-gray-800">85%</div>
                                            <div ng-if="student.phase ===7"  class="h5 mb-0 mr-3 font-weight-bold text-gray-800">100%</div>
                                        </div>
                                        <div class="col">
                                            <div class="progress progress-sm mr-2">
                                                <div ng-if="student.phase ===1" class="progress-bar bg-info" role="progressbar"
                                                    style="width: 12%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                </div>
                                                <div ng-if="student.phase ===2"  class="progress-bar bg-info" role="progressbar"
                                                    style="width: 25%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                </div>
                                                <div ng-if="student.phase ===3"  class="progress-bar bg-info" role="progressbar"
                                                    style="width: 37%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                </div>
                                                <div ng-if="student.phase ===4"  class="progress-bar bg-info" role="progressbar"
                                                    style="width: 49%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                </div>
                                                <div ng-if="student.phase ===5"  class="progress-bar bg-info" role="progressbar"
                                                    style="width: 61%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                </div>
                                                <div ng-if="student.phase ===6"  class="progress-bar bg-info" role="progressbar"
                                                    style="width: 73%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                </div>
                                                <div ng-if="student.phase ===7"  class="progress-bar bg-info" role="progressbar"
                                                    style="width: 85%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                </div>
                                                <div ng-if="student.phase ===8"  class="progress-bar bg-info" role="progressbar"
                                                    style="width: 100%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>


                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                            </br>


                        </div>
                    </div>
                </div>

        </div>

        </br>
        </br>


        <div class="card shadow mb-4">
    <div   class="table-responsive">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">

            <div class="col-lg-12">


                <div class="col-lg-12 ">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Progreso General</div>
                                <div class="align-items-center">


                                    <div  ng-repeat="student in students | limitTo:1">



                                                <div ng-if="student.phase === 1"  class="stepper-wrapper">


                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">1</div>
                                                        <div class="step-name">Propuesta de valor</div>
                                                    </div>
                                                    <div class="stepper-item active">
                                                        <div class="step-counter">2</div>
                                                        <div class="step-name">Mapa de competidores</div>
                                                    </div>
                                                    <div class="stepper-item ">
                                                        <div class="step-counter">3</div>
                                                        <div class="step-name">Análisis del Entorno y Grupos de Interés</div>
                                                    </div>
                                                    <div class="stepper-item ">
                                                        <div class="step-counter">4</div>
                                                        <div class="step-name">Modelo de Negocio y Marketing</div>
                                                    </div>
                                                    <div class="stepper-item ">
                                                        <div class="step-counter">5</div>
                                                        <div class="step-name">Precio y viabilidad del negocio</div>
                                                        </div>
                                                    <div class="stepper-item ">
                                                        <div class="step-counter">6</div>
                                                        <div class="step-name">Plan de impacto</div>
                                                    </div>
                                                    <div class="stepper-item ">
                                                        <div class="step-counter">7</div>
                                                        <div class="step-name">Plan de crecimiento</div>
                                                    </div>
                                                </div>



                                            <div ng-if="student.phase ===2" class="stepper-wrapper">

                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">1</div>
                                                        <div class="step-name">Propuesta de valor</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">2</div>
                                                        <div class="step-name">Mapa de competidores</div>
                                                    </div>
                                                    <div class="stepper-item active">
                                                        <div class="step-counter ">3</div>
                                                        <div class="step-name">Análisis del Entorno y Grupos de Interés</div>
                                                    </div>
                                                    <div class="stepper-item ">
                                                        <div class="step-counter">4</div>
                                                        <div class="step-name">Modelo de Negocio y Marketing</div>
                                                    </div>
                                                    <div class="stepper-item ">
                                                        <div class="step-counter">5</div>
                                                        <div class="step-name">Precio y viabilidad del negocio</div>
                                                        </div>
                                                    <div class="stepper-item ">
                                                        <div class="step-counter">6</div>
                                                        <div class="step-name">Plan de impacto</div>
                                                    </div>
                                                    <div class="stepper-item ">
                                                        <div class="step-counter">7</div>
                                                        <div class="step-name">Plan de crecimiento</div>
                                                    </div>

                                            </div>


                                            <div ng-if="student.phase ===3" class="stepper-wrapper">

                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">1</div>
                                                        <div class="step-name">Propuesta de valor</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">2</div>
                                                        <div class="step-name">Mapa de competidores</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">3</div>
                                                        <div class="step-name">Análisis del Entorno y Grupos de Interés</div>
                                                    </div>
                                                    <div class="stepper-item active">
                                                        <div class="step-counter">4</div>
                                                        <div class="step-name">Modelo de Negocio y Marketing</div>
                                                    </div>
                                                    <div class="stepper-item ">
                                                        <div class="step-counter">5</div>
                                                        <div class="step-name">Precio y viabilidad del negocio</div>
                                                        </div>
                                                    <div class="stepper-item ">
                                                        <div class="step-counter">6</div>
                                                        <div class="step-name">Plan de impacto</div>
                                                    </div>
                                                    <div class="stepper-item ">
                                                        <div class="step-counter">7</div>
                                                        <div class="step-name">Plan de crecimiento</div>
                                                    </div>

                                            </div>

                                            <div ng-if="student.phase ===4" class="stepper-wrapper">
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">1</div>
                                                        <div class="step-name">Propuesta de valor</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">2</div>
                                                        <div class="step-name">Mapa de competidores</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">3</div>
                                                        <div class="step-name">Análisis del Entorno y Grupos de Interés</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">4</div>
                                                        <div class="step-name">Modelo de Negocio y Marketing</div>
                                                    </div>
                                                    <div class="stepper-item active">
                                                        <div class="step-counter">5</div>
                                                        <div class="step-name">Precio y viabilidad del negocio</div>
                                                        </div>
                                                    <div class="stepper-item ">
                                                        <div class="step-counter">6</div>
                                                        <div class="step-name">Plan de impacto</div>
                                                    </div>
                                                    <div class="stepper-item ">
                                                        <div class="step-counter">7</div>
                                                        <div class="step-name">Plan de crecimiento</div>
                                                    </div>

                                            </div>

                                            <div ng-if="student.phase ===5" class="stepper-wrapper">
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">1</div>
                                                        <div class="step-name">Propuesta de valor</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">2</div>
                                                        <div class="step-name">Mapa de competidores</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">3</div>
                                                        <div class="step-name">Análisis del Entorno y Grupos de Interés</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">4</div>
                                                        <div class="step-name">Modelo de Negocio y Marketing</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">5</div>
                                                        <div class="step-name">Precio y viabilidad del negocio</div>
                                                        </div>
                                                    <div class="stepper-item active">
                                                        <div class="step-counter">6</div>
                                                        <div class="step-name">Plan de impacto</div>
                                                    </div>
                                                    <div class="stepper-item ">
                                                        <div class="step-counter">7</div>
                                                        <div class="step-name">Plan de crecimiento</div>
                                                    </div>

                                            </div>

                                            <div ng-if="student.phase ===6" class="stepper-wrapper">
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">1</div>
                                                        <div class="step-name">Propuesta de valor</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">2</div>
                                                        <div class="step-name">Mapa de competidores</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">3</div>
                                                        <div class="step-name">Análisis del Entorno y Grupos de Interés</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">4</div>
                                                        <div class="step-name">Modelo de Negocio y Marketing</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">5</div>
                                                        <div class="step-name">Precio y viabilidad del negocio</div>
                                                        </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">6</div>
                                                        <div class="step-name">Plan de impacto</div>
                                                    </div>
                                                    <div class="stepper-item active">
                                                        <div class="step-counter">7</div>
                                                        <div class="step-name">Plan de crecimiento</div>
                                                    </div>

                                            </div>

                                            <div ng-if="student.phase ===7" class="stepper-wrapper">
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">1</div>
                                                        <div class="step-name">Propuesta de valor</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">2</div>
                                                        <div class="step-name">Mapa de competidores</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">3</div>
                                                        <div class="step-name">Análisis del Entorno y Grupos de Interés</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">4</div>
                                                        <div class="step-name">Modelo de Negocio y Marketing</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">5</div>
                                                        <div class="step-name">Precio y viabilidad del negocio</div>
                                                        </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">6</div>
                                                        <div class="step-name">Plan de impacto</div>
                                                    </div>
                                                    <div class="stepper-item completed">
                                                        <div class="step-counter">7</div>
                                                        <div class="step-name">Plan de crecimiento</div>
                                                    </div>

                                            </div>



                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
    </div>

</div>





    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Integrantes</h6>
            </div>
            <div class="card-body">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>
                                Nombre
                            </th>
                            <th>
                               Primer Apellido
                            </th>
                            <th>
                               Segundo Apellido
                            </th>
                            <th>
                               Email
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
    </div>
</div>
</div>


<style type="text/css">
    .stepper-wrapper {
        margin-top: 50px;
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
        border-bottom: 2px solid #000000;
        width: 100%;
        top: 20px;
        left: -50%;
        z-index: 2;
    }

    .stepper-item::after {
        position: absolute;
        content: "";
        border-bottom: 2px solid #000000;
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
