@extends("layouts.Dashboard")
@section("script")
<style type="text/css">
.card {
    display:inline-block;
    float:left;
    width:300px;
    height:175px;
    margin:15px;
    padding-top:5%;
    text-align:center;
    border: 1px solid grey;
    background-color:#575594;
    color:white;
    font-family:'Helvetica';
    cursor:pointer;
}

.card:hover {
  background-color:rgba(135, 9, 66, 0.75);
  color:black;
  transition: 0.5s ease all;
  -webkit-transition: 0.5s ease all;
}

</style>
<script type="text/javascript">
    var app = angular.module('TeamListModule', [])
        //
        // function AppController($scope) {
        //     $scope.cards = [];
        // }
        
        // angular
        // .module('TeamListModule')
        // .controller('TeamListController', AppController)
        //
        // filter('grouped', function() {
        //     return function(input, itemsPerRow) {
        //         if  (itemsPerRow === undefined){
        //             itemsPerRow = 1;
        //         }

        //         var out = [];
        //         for (var i = 0; i < input.length; i++) {
        //             var rowElementIndex = i % itemsPerRow;
        //             var rowIndex = (i - rowElementIndex) / itemsPerRow;
        //             var row;
        //             if (rowElementIndex === 0) {
        //             row = [];
        //             out[rowIndex] = row;
        //             } else {
        //             row = out[rowIndex];
        //             }
                    
        //             row[rowElementIndex] = input[i];
        //         }
                    
        //         return out;
        //     };
        // });

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
            console.log(id);
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
        <h1 class="h3 mb-0 text-gray-800">Vista de emprendimientos</h1>

        <a href="/newteam" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-user-plus fa-sm text-white-50"></i> Crear equipo</a>
    </div>
   
    
    <div ng-app="TeamListModule" ng-controller="TeamListController" style="">
        <div ng-repeat="item in teams" class="">
            <a href="@{{'/teammembers/' + item.id }}">
                <div class="card " style="width: 18rem; height:15rem; margin-bottom:80px;">
                    <div class="card-img-top">
                        <img height="90%" width="80%" style="margin-top:-20px; margin-bottom:-20px;" src="{{ asset('images/team.png') }}" alt="Card image cap">
                    </div>
                    <div class="card-header text-center bg-white rounded-bottom">
                        <h6 class=" font-weight-bold text-primary">@{{ item.teamName }}</h6>
                    </div>
                </div>
            </a>
            <!-- <div class="row" ng-repeat="row in teams | grouped:4"> -->
            <!-- <div class="col-md-3 mb-3" ng-repeat="item in row">
                <a href="@{{'/teammembers/' + item.id }}">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="text-center">
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                    src="{{ asset('images/undraw_Team.png') }}" alt="...">
                            </div>
                        </div>
                        <div class="card-header py-3 text-center">
                            <h6 class="m-0 font-weight-bold text-primary">@{{ item.teamName }}</h6>
                        </div>
                    </div>
                </a>
            </div> -->
        </div>
    </div>
    
</div>
@stop