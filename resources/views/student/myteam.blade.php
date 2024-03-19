@extends("layouts.Dashboard")
@section("script")
<script type="text/javascript">
    function getId(url = window.location.href) {
        let urlParts = url.split('/');
        return urlParts[urlParts.length - 1];
    }

    var app = angular.module('TeamListModule', [])
    app.controller('TeamListController', ($scope, $http) => {
        $scope.students = {}
        $scope.team={};
   

        angular.element(document).ready(() => {
           
            id = getId()
            $http.get(`/teamMembers/${id}`).then((result) => {
                $scope.students = result.data
                
            })
        })
        //-----------------------

       //console.log($scope.students);
    })
</script>
@stop
@section("content")
<div class="container-fluid">
    <div ng-app="TeamListModule" ng-controller="TeamListController" class="table-responsive">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

    <div class="col-lg-12">
      <h1  class="h2 mb-4 text-gray-800"> {{ $teamName }}</h1>
      <h4 class="h4 text-gray-800">Gestión:  @{{ year }}</h4>

    <div class="col-lg-12 ">
<div class="card border-left-info shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Etapa</div>
                <div class="row no-gutters align-items-center">

                <div style="width: 400px"  >
                   <h4 class="card-text" >{{ $phaseName }}</h4>
                    <br>
                    <div class="col-auto" >
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $percentage }} %</div>

                    </div>
                            <div class="col">
                               <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: {{ $percentage }}%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100">
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
</div>
</div>

<!------------------------------------------------------ -->

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


                                    <div  >



                                                <div ng-if="{{ $phase }} === 1"  class="stepper-wrapper">


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



                                            <div ng-if="{{ $phase }} ===2" class="stepper-wrapper">

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


                                            <div ng-if="{{ $phase }} ===3" class="stepper-wrapper">

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

                                            <div ng-if="{{ $phase }} ===4" class="stepper-wrapper">
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

                                            <div ng-if="{{ $phase }} ===5" class="stepper-wrapper">
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

                                            <div ng-if="{{ $phase }} ===6" class="stepper-wrapper">
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

                                            <div ng-if="{{ $phase }} ===7" class="stepper-wrapper">
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

<!-- ---------------------------------------------------->

    

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
                        @foreach ($teams as $team)
                        <tr>
                            <td>
                                {{ $team->firstName }}
                            </td>
                            <td>
                                {{ $team->lastName }}
                            </td>
                            <td>
                                {{ $team->secondLastName }}
                            </td>
                            <td>
                                {{ $team->email }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
