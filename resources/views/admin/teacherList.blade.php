@extends('layouts.app')
@section("script")
<script type="text/javascript">
    var app = angular.module('TeachersListModule', []);
    app.controller('TeachersListController', ($scope, $http) => {
        $scope.teachers = []

        $scope.getTeachers = () => {
            $http.get('/index').then((result) => {
                $scope.teachers = result.data
            })
        }

        angular.element(document).ready(() => {
            $scope.getTeachers()
        })

        $scope.deleteTeacher = (id) => {
            $http.delete(`/index/${id}`).then((result) => {
                $scope.getTeachers()
            })
        }
    })
</script>
@stop
@section('content')
<link rel="stylesheet" href=".../">

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    Lista de docentes
            </div>
        </div>
    </div>
</div> -->

<header class="text-center">
    <h2>Lista de Docentes</h2>
</header>

<section class="main_container">
    <div class="content">
        <div class="text-white m-5 row body_main">
            <form class="row g-3">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Teacher Name" aria-label="Teacher Name" aria-describedby="basic-addon2">
                        <button type="submit" class="btn btn-primary" style="font-size: 20px;">
                            <i class="fa-solid fa-1x fa-magnifying-glass"></i>
                            Buscar
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-dark text-white float-end" style="font-size: 20px;">Agregar Docente</button>
                </div>

            </form>
            <div class="p-4 mt-3 rounded-4 body_card">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col" class="col-md-2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="teacher in teachers">
                            <td>
                                <!-- @{{teacher.id}} -->
                            </td>
                            <td>
                                <!-- @{{ teacher.firstName }} -->
                            </td>
                            <td>
                                <!-- @{{ teacher.lastName }} -->
                            </td>
                            <td>
                                <a href="@{{ '/editTeacher/' + teacher.id }}" class="btn btn-primary">Edit</a>
                                <a type="button" ng-click="deleteTeacher(student.id)" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>

@endsection