@extends('layouts.app')
@section("script")
<script type="text/javascript">
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope) {
        $scope.clicked = function() {
            console.log("Clicked Me");
        };
    });
</script>
@stop
@section('content')
<div class="container" style="height: 100vh;">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="m-5 row body_main">
                <div class="form-page text-center" ng-app="myApp" ng-controller="myCtrl">
                    <div class="progress-div" ng-click="clicked()">
                        <h3>Formulario 1</h3>
                        <div class="progress one">
                            <a></a>
                        </div>
                    </div>
                    <div class="progress-div">
                        <h3>Formulario 2</h3>
                        <div class="progress two">
                        </div>
                    </div>
                    <div class="progress-div">
                        <h3>Formulario 3</h3>
                        <div class="progress three">
                        </div>
                    </div>
                    <div class="progress-div">
                        <h3>Formulario 4</h3>
                        <div class="progress four">
                        </div>
                    </div>
                    <div class="progress-div">
                        <h3>Formulario 5</h3>
                        <div class="progress five">
                        </div>
                    </div>
                    <div class="progress-div">
                        <h3>Formulario 6</h3>
                        <div class="progress six">
                        </div>
                    </div>
                    <div class="progress-div">
                        <h3>Formulario 7</h3>
                        <div class="progress seven">
                        </div>
                    </div>
                </div>
                <script src="{{ asset('js/progress.js') }}"></script>
            </div>
        </div>



    </div>
</div>
</div>
</div>
</div>


@endsection