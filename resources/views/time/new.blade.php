@extends("layouts.Dashboard")
@section("script")
<script
    src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"> 
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript">
    var app = angular.module("TimeNewModule", []);
    const stripDate = date => {
        return date.toISOString().split('T')[0];
    }
    app.controller("TimeNewController", ($scope, $http) => {
        $scope.time = {};

        $scope.postTime = () => {
            let time = {
                year: $scope.time.year,
                form1_start: stripDate($scope.time.form1_start),
                form1_end: stripDate($scope.time.form1_end),
                form2_start: stripDate($scope.time.form2_start),
                form2_end: stripDate($scope.time.form2_end),
                form3_start: stripDate($scope.time.form3_start),
                form3_end: stripDate($scope.time.form3_end),
                form4_start: stripDate($scope.time.form4_start),
                form4_end: stripDate($scope.time.form4_end),
                form5_end: stripDate($scope.time.form5_end),
                form5_start: stripDate($scope.time.form5_start),
                form6_start: stripDate($scope.time.form6_start),
                form6_end: stripDate($scope.time.form6_end),
                form7_start: stripDate($scope.time.form7_start),
                form7_end: stripDate($scope.time.form7_end)
                // lo mismo para los otros
            }
            $http.post('/times', time).then((result) => {
                console.log(result.data);
                if(result.data['result']=='error'){
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Ya existe una gestion con el mismo nombre.'
                    });
                }
                else{
                    Swal.fire({
                        type: 'success',
                        title: 'Hecho!',
                        text: 'Se registró la gestion exitosamente.'
                     
                    });
                    window.location.href = '/listtimes'
                }
            })
        }
    })
</script>


@stop
@section("content")
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Agregar nueva gestion</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos de la gestion</h6>
        </div>
        <div class="card-body">
            <form ng-app="TimeNewModule" ng-controller="TimeNewController" name="myForm">
                <div>
                    Nombre de la gestion:
                    <input name="time_year" type="text" class="form-control" ng-model="time.year" ng-required="true">
                    <span style="color:red" ng-show="myForm.time_year.$touched && myForm.time_year.$error.required">Nombre de la gestion requerida.</span>
                </div>
                <br>
                <div>
                    Fechas del formulario 1:
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form">
                                <input name="time_form1_start" type="date" class="form-control" ng-model="time.form1_start" ng-required="true">
                                <span style="color:red" ng-show="myForm.time_form1_start.$touched && myForm.time_form1_start.$error.required">Fecha de inicio requerida.</span>
                                <label for="time_form1_start">Fecha de inicio</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <input name="time_form1_end" type="date" class="form-control" ng-model="time.form1_end" ng-required="true">
                                <span style="color:red" ng-show="myForm.time_form1_end.$touched && myForm.time_form1_end.$error.required">Fecha de finalizacion requerida.</span>
                                <label for="time_form1_end">Fecha de finalizacion</label>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    Fechas del formulario 2:
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form">
                                <input name="time_form2_start" type="date" class="form-control" ng-model="time.form2_start" ng-required="true">
                                <span style="color:red" ng-show="myForm.time_form2_start.$touched && myForm.time_form2_start.$error.required">Fecha de inicio requerida.</span>
                                <label for="time_form2_start">Fecha de inicio</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <input name="time_form2_end" type="date" class="form-control" ng-model="time.form2_end" ng-required="true">
                                <span style="color:red" ng-show="myForm.time_form2_end.$touched && myForm.time_form2_end.$error.required">Fecha de finalizacion requerida.</span>
                                <label for="time_form2_end">Fecha de finalizacion</label>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    Fechas del formulario 3:
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form">
                                <input name="time_form3_start" type="date" class="form-control" ng-model="time.form3_start" ng-required="true">
                                <span style="color:red" ng-show="myForm.time_form3_start.$touched && myForm.time_form3_start.$error.required">Fecha de inicio requerida.</span>
                                <label for="time_form3_start">Fecha de inicio</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <input name="time_form3_end" type="date" class="form-control" ng-model="time.form3_end" ng-required="true">
                                <span style="color:red" ng-show="myForm.time_form3_end.$touched && myForm.time_form3_end.$error.required">Fecha de finalizacion requerida.</span>
                                <label for="time_form3_end">Fecha de finalizacion</label>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    Fechas del formulario 4:
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form">
                                <input name="time_form4_start" type="date" class="form-control" ng-model="time.form4_start" ng-required="true">
                                <span style="color:red" ng-show="myForm.time_form4_start.$touched && myForm.time_form4_start.$error.required">Fecha de inicio requerida.</span>
                                <label for="time_form4_start">Fecha de inicio</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <input name="time_form4_end" type="date" class="form-control" ng-model="time.form4_end" ng-required="true">
                                <span style="color:red" ng-show="myForm.time_form4_end.$touched && myForm.time_form4_end.$error.required">Fecha de finalizacion requerida.</span>
                                <label for="time_form4_end">Fecha de finalizacion</label>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    Fechas del formulario 5:
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form">
                                <input name="time_form5_start" type="date" class="form-control" ng-model="time.form5_start" ng-required="true">
                                <span style="color:red" ng-show="myForm.time_form5_start.$touched && myForm.time_form5_start.$error.required">Fecha de inicio requerida.</span>
                                <label for="time_form5_start">Fecha de inicio</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <input name="time_form5_end" type="date" class="form-control" ng-model="time.form5_end" ng-required="true">
                                <span style="color:red" ng-show="myForm.time_form5_end.$touched && myForm.time_form5_end.$error.required">Fecha de finalizacion requerida.</span>
                                <label for="time_form5_end">Fecha de finalizacion</label>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    Fechas del formulario 6:
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form">
                                <input name="time_form6_start" type="date" class="form-control" ng-model="time.form6_start" ng-required="true">
                                <span style="color:red" ng-show="myForm.time_form6_start.$touched && myForm.time_form6_start.$error.required">Fecha de inicio requerida.</span>
                                <label for="time_form6_start">Fecha de inicio</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <input name="time_form6_end" type="date" class="form-control" ng-model="time.form6_end" ng-required="true">
                                <span style="color:red" ng-show="myForm.time_form6_end.$touched && myForm.time_form6_end.$error.required">Fecha de finalizacion requerida.</span>
                                <label for="time_form6_end">Fecha de finalizacion</label>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    Fechas del formulario 7:
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form">
                                <input name="time_form7_start" type="date" class="form-control" ng-model="time.form7_start" ng-required="true">
                                <span style="color:red" ng-show="myForm.time_form7_start.$touched && myForm.time_form7_start.$error.required">Fecha de inicio requerida.</span>
                                <label for="time_form7_start">Fecha de inicio</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <input name="time_form7_end" type="date" class="form-control" ng-model="time.form7_end" ng-required="true">
                                <span style="color:red" ng-show="myForm.time_form7_end.$touched && myForm.time_form7_end.$error.required">Fecha de finalizacion requerida.</span>
                                <label for="time_form7_end">Fecha de finalizacion</label>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    <button type="button" ng-click="postTime()" class="btn btn-primary"  ng-disabled="myForm.$invalid" >Registrar</button>
                    <a href="/listtimes" class="btn btn-primary">Volver</a>
                </div>
            </form>
        </div> 
    </div>
</div>
@stop