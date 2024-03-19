@extends('layouts.app')
@section("script")
<script type="text/javascript">
    var app = angular.module("TeacherEditModule", []);
    app.controller("TeachersEditController", ($scope, $http) => {
        $scope.teacher = {}

        angular.element(document).ready(() => {
            let url = window.location.href;
            let id = url[url.lastIndexOf('/') + 1];

            $http.get(`/teachers/${id}`).then((result) => {
                $scope.teacher = result.data
            })

            $scope.putTeacher = () => {
                $http.put('/teachers', $scope.teacher).then((result) => {
                    window.location.href = "{{ route('admin.index') }}"
                })
            }
        })
    })
</script>
@stop
@section('content')
<link rel="stylesheet" href=".../">

<header class="text-center">
    <h2>Edit Teacher Information</h2>
</header>

<section class="main_container">
    <div class="content">
    <form ng-app="TeacherEditModule" ng-controller="TeachersEditController">
    <div>
        First name:
        <input type="text" class="form-control" ng-model="teacher.firstName">
    </div>
    <div>
        Last name:
        <input type="text" class="form-control" ng-model="teacher.lastName">
    </div>
    <div>
        City:
        <input type="text" class="form-control" ng-model="teacher.city">
    </div>
    <div>
        Semester:
        <input type="number" class="form-control" ng-model="teacher.semester">
    </div>
    <div>
        Address:
        <textarea class="form-control" ng-model="teacher.address"></textarea>
    </div>
    <div>
        <button type="button" ng-click="putTeacher()" class="btn btn-primary">Submit</button>
        <a href="{{ route('admin.index') }}" class="btn btn-primary">Go back</a>
    </div>
</form>
    </div>
</section>

@endsection