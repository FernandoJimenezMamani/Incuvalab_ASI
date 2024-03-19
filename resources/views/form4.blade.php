@extends('layouts.Dashboard')
@section('script')

@stop
@section('content')

<div class="container-fluid" ng-app="myApp" ng-controller="myCtrl">

    <div class="col-lg-12 mb-4">
        <div class="card bg-secondary text-white shadow">
            <div id="content" class="card-body">

                <form action="#" class="form">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        @if (Auth::user()->userType == 'teacher')
                        <button ng-Click="HabilitarForm()" class="btn btn-warning"
                            style="position:fixed; z-index:1; top:83%;left:2%; ">Habilitar</button>
                        <button ng-Click="DesHabilitarForm()" class="btn btn-danger"
                            style="position:fixed; z-index:1; top:90%;left:2%; ">Deshabilitar</button>
                        <button ng-Click="AprobarForm()" class="btn btn-primary"
                            style="position:fixed; z-index:1; top:75%;left:2%; ">Aprobar</button>

                            <button onclick="window.print()" class="btn btn-success">Descargar</button>
                        @endif
                        @if (Auth::user()->userType == 'student')
                        <div class="d-flex justify-content-center">

                            <button type="submit" id="btnGuardar" ng-click="postForm()"
                                class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="fas fa-pencil fa-sm text-white-50 "></i> Guardar</button>

                                <button onclick="window.print()" class="btn btn-primary">Descargar</button>
                        </div>
                        @endif
                    </div>

                    <h1 class="text-center">Modelo de Negocio y Marketing</h1>
                    <input type="text" class="form-control" name="" ng-model="product1" id="product1"
                        aria-describedby="helpId" placeholder="" readonly>
                    <h4 class="text-center app-subtitle">Responde a las siguientes preguntas evaluando en qué punto de
                        la escala se encuentra cada segmento de cliente</h4>
                    <div>
                        <div>
                            <h4>¿Este segmento de mercado paga por nuestro producto o servicio?</h4>
                            <div class="row">
                                <input type="text" class="form-control" name="" ng-model="input1" id="input1"
                                    aria-describedby="helpId" placeholder="">
                                <div class="flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio1" ng-model="input2"
                                            id="input2" value="option1">
                                        <label class="form-check-label" for="radio1">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio1" ng-model="input3"
                                            id="input3" value="option2">
                                        <label class="form-check-label" for="radio1">No mucho</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio1" ng-model="input4"
                                            id="input4" value="option3">
                                        <label class="form-check-label" for="radio1">N/S</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio1" ng-model="input5"
                                            id="input5" value="option4">
                                        <label class="form-check-label" for="radio1">Probablemente</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio1" ng-model="input6"
                                            id="input6" value="option5">
                                        <label class="form-check-label" for="radio1">Sí</label>
                                    </div>
                                </div>


                                <input type="text" class="form-control" name="" ng-model="input7" id="input7"
                                    aria-describedby="helpId" placeholder="">
                                <div class="flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio2" ng-model="input8"
                                            id="input8" value="option1">
                                        <label class="form-check-label" for="radio2">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio2" ng-model="input9"
                                            id="input9" value="option2">
                                        <label class="form-check-label" for="radio2">No mucho</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio2" ng-model="input10"
                                            id="input10" value="option3">
                                        <label class="form-check-label" for="radio2">N/S</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio2" ng-model="input11"
                                            id="input11" value="option4">
                                        <label class="form-check-label" for="radio2">Probablemente</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio2" ng-model="input12"
                                            id="input12" value="option5">
                                        <label class="form-check-label" for="radio2">Sí</label>
                                    </div>
                                </div>
                                <!-- !-->
                                <input type="text" class="form-control" name="" ng-model="input13" id="input13"
                                    aria-describedby="helpId" placeholder="">
                                <div class="flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio3" ng-model="input14"
                                            id="input14" value="option1">
                                        <label class="form-check-label" for="radio3">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio3" ng-model="input15"
                                            id="input15" value="option2">
                                        <label class="form-check-label" for="radio3">No mucho</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio3" ng-model="input16"
                                            id="input16" value="option3">
                                        <label class="form-check-label" for="radio3">N/S</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio3" ng-model="input17"
                                            id="input17" value="option4">
                                        <label class="form-check-label" for="radio3">Probablemente</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio3" ng-model="input18"
                                            id="input18" value="option5">
                                        <label class="form-check-label" for="radio3">Sí</label>
                                    </div>
                                </div>
                            </div>
                            <h4>¿Con qué frecuencia paga este segmento?</h4>
                            <div class="row">
                                <input type="text" class="form-control" name="" ng-model="input19" id="input19"
                                    aria-describedby="helpId" placeholder="">
                                <div class="flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio4" ng-model="input20"
                                            id="input20" value="option1">
                                        <label class="form-check-label" for="radio4">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio4" ng-model="input21"
                                            id="input21" value="option2">
                                        <label class="form-check-label" for="radio4">No mucho</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio4" ng-model="input22"
                                            id="input22" value="option3">
                                        <label class="form-check-label" for="radio4">N/S</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio4" ng-model="input23"
                                            id="input23" value="option4">
                                        <label class="form-check-label" for="radio4">Probablemente</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio4" ng-model="input24"
                                            id="input24" value="option5">
                                        <label class="form-check-label" for="radio4">Sí</label>
                                    </div>
                                </div>


                                <input type="text" class="form-control" name="" ng-model="input25" id="input25"
                                    aria-describedby="helpId" placeholder="">
                                <div class="flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio5" ng-model="input26"
                                            id="input26" value="option1">
                                        <label class="form-check-label" for="radio5">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio5" ng-model="input27"
                                            id="input27" value="option2">
                                        <label class="form-check-label" for="radio5">No mucho</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio5" ng-model="input28"
                                            id="input28" value="option3">
                                        <label class="form-check-label" for="radio5">N/S</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio5" ng-model="input29"
                                            id="input29" value="option4">
                                        <label class="form-check-label" for="radio5">Probablemente</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio5" ng-model="input30"
                                            id="input30" value="option5">
                                        <label class="form-check-label" for="radio5">Sí</label>
                                    </div>
                                </div>
                                <!-- !-->
                                <input type="text" class="form-control" name="" ng-model="input31" id="input31"
                                    aria-describedby="helpId" placeholder="">
                                <div class="flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio6" ng-model="input32"
                                            id="input32" value="option1">
                                        <label class="form-check-label" for="radio6">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio6" ng-model="input33"
                                            id="input33" value="option2">
                                        <label class="form-check-label" for="radio6">No mucho</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio6" ng-model="input34"
                                            id="input34" value="option3">
                                        <label class="form-check-label" for="radio6">N/S</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio6" ng-model="input35"
                                            id="input35" value="option4">
                                        <label class="form-check-label" for="radio6">Probablemente</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio6" ng-model="input36"
                                            id="input36" value="option5">
                                        <label class="form-check-label" for="radio6">Sí</label>
                                    </div>
                                </div>
                            </div>
                            <h4>¿Vendes directamente a este segmento de mercado?</h4>
                            <div class="row">
                                <input type="text" class="form-control" name="" ng-model="input37" id="input37"
                                    aria-describedby="helpId" placeholder="">
                                <div class="flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio7" ng-model="input38"
                                            id="input38" value="option1">
                                        <label class="form-check-label" for="radio7">Varios intermediarios</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio7" ng-model="input39"
                                            id="input39" value="option2">
                                        <label class="form-check-label" for="radio7">Dos intermediarios</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio7" ng-model="input40"
                                            id="input40" value="option3">
                                        <label class="form-check-label" for="radio7">Un intermediario</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio7" ng-model="input41"
                                            id="input41" value="option4">
                                        <label class="form-check-label" for="radio7">Venta directa</label>
                                    </div>
                                </div>


                                <input type="text" class="form-control" name="" ng-model="input411" id="input411"
                                    aria-describedby="helpId" placeholder="">
                                <div class="flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio8" ng-model="input42"
                                            id="input42" value="option1">
                                        <label class="form-check-label" for="radio8">Varios intermediarios</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio8" ng-model="input43"
                                            id="input43" value="option2">
                                        <label class="form-check-label" for="radio8">Dos intermediarios</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio8" ng-model="input44"
                                            id="input44" value="option3">
                                        <label class="form-check-label" for="radio8">Un intermediario</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio8" ng-model="input45"
                                            id="input45" value="option4">
                                        <label class="form-check-label" for="radio8">Venta directa</label>
                                    </div>
                                </div>
                                <!-- !-->
                                <input type="text" class="form-control" name="" ng-model="input46" id="input46"
                                    aria-describedby="helpId" placeholder="">
                                <div class="flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio9" ng-model="input47"
                                            id="input47" value="option1">
                                        <label class="form-check-label" for="radio9">Varios intermediarios</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio9" ng-model="input48"
                                            id="input48" value="option2">
                                        <label class="form-check-label" for="radio9">Dos intermediarios</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio9" ng-model="input49"
                                            id="input49" value="option3">
                                        <label class="form-check-label" for="radio9">Un intermediario</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radio9" ng-model="input50"
                                            id="input50" value="option4">
                                        <label class="form-check-label" for="radio9">Venta directa</label>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <h4 class="text-center app-subtitle">Modelo de negocios</h4>
                    <div>
                        <h4>Selecciona todos los modelos de negocio que podrían interesarte para tu empresa.</h4>
                        <div class="row">
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" name="check1" value="1" ng-click="check1p1()" type="checkbox"
                                        ng-model="input51" id="input51">
                                    <label class="hasLabel" for="check1">Venta directa</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" name="check2" value="1" ng-click="check1p1()" type="checkbox"
                                        ng-model="input52" id="input52">
                                    <label class="hasLabel" for="check2">Suscripción</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" name="check3" value="1" ng-click="check1p1()" type="checkbox"
                                        ng-model="input53" id="input53">
                                    <label class="hasLabel" for="check3">Pay as you Go</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" name="check4" value="1" ng-click="check1p1()" type="checkbox"
                                        ng-model="input54" id="input54">
                                    <label class="hasLabel" for="check4">Alquiler</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" name="check5" value="1" ng-click="check1p1()" type="checkbox"
                                        ng-model="input55" id="input55">
                                    <label class="hasLabel" for="check5">Broker</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" name="check6" value="1" ng-click="check1p1()" type="checkbox"
                                        ng-model="input56" id="input56">
                                    <label class="hasLabel" for="check6">Low-Touch</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" name="check7" value="1" ng-click="check1p1()" type="checkbox"
                                        ng-model="input57" id="input57">
                                    <label class="hasLabel" for="check7">Saas</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" name="check8" value="1" ng-click="check1p1()" type="checkbox"
                                        ng-model="input58" id="input58">
                                    <label class="hasLabel" for="check8">Modelo de datos</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" name="check9" value="1" ng-click="check1p1()" type="checkbox"
                                        ng-model="input59" id="input59">
                                    <label class="hasLabel" for="check9">Modelo de publicidad</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" name="check10" value="1" ng-click="check1p1()" type="checkbox"
                                        ng-model="input60" id="input60">
                                    <label class="hasLabel" for="check10">Producto como servicio</label>
                                </div>
                            </checkbox>


                        </div>
                    </div>
                    <h4 class="text-center app-subtitle">Conceptualización del modelo de negocios</h4>
                    <div>
                        <div class="mb-3">
                            <h4 for="" class="text-left">Escribe una breve descripción de lo que te interesa de cada uno
                                de los modelos de negocio que has seleccionado.</h4>
                            <textarea type="text" class="form-control" name="" ng-model="input61" id="input61"
                                aria-describedby="helpId" placeholder=""></textarea>
                            <textarea type="text" class="form-control" name="" ng-model="input62" id="input62"
                                aria-describedby="helpId" placeholder=""></textarea>
                            <textarea type="text" class="form-control" name="" ng-model="input63" id="input63"
                                aria-describedby="helpId" placeholder=""></textarea>
                            <textarea type="text" class="form-control" name="" ng-model="input64" id="input64"
                                aria-describedby="helpId" placeholder=""></textarea>
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle">Creación del modelo de negocios</h4>
                    <div>
                        <div class="mb-3">
                            <h4 for="" class="text-left">Crea y define el mejor modelo de negocio para cada segmento de
                                mercado seleccionando los modelos que te interesen de la lista (máx. 3) y escribe una
                                breve descripción.</h4>
                            <textarea type="" class="form-control " name="" ng-model="input65" id="input65"
                                aria-describedby="helpId" placeholder=""></textarea>
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle">Embudo de MKT</h4>
                    <div>
                        <h4>Parte superior del embudo</h4>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="" ng-model="input66" id="input66"
                                aria-describedby="helpId" placeholder="">
                            <input type="text" class="form-control" name="" ng-model="input67" id="input67"
                                aria-describedby="helpId" placeholder="">
                            <input type="text" class="form-control" name="" ng-model="input68" id="input68"
                                aria-describedby="helpId" placeholder="">
                            <input type="text" class="form-control" name="" ng-model="input69" id="input69"
                                aria-describedby="helpId" placeholder="">
                            <input type="text" class="form-control" name="" ng-model="input70" id="input70"
                                aria-describedby="helpId" placeholder="">
                        </div>
                        <h4>Parte media del embudo</h4>
                        <div>
                            <input type="text" class="form-control" name="" ng-model="input71" id="input71"
                                aria-describedby="helpId" placeholder="">
                            <input type="text" class="form-control" name="" ng-model="input72" id="input72"
                                aria-describedby="helpId" placeholder="">
                            <input type="text" class="form-control" name="" ng-model="input73" id="input73"
                                aria-describedby="helpId" placeholder="">
                            <input type="text" class="form-control" name="" ng-model="input74" id="input74"
                                aria-describedby="helpId" placeholder="">
                            <input type="text" class="form-control" name="" ng-model="input75" id="input75"
                                aria-describedby="helpId" placeholder="">
                        </div>
                        <h4>Parte inferior del embudo</h4>
                        <div>
                            <input type="text" class="form-control" name="" ng-model="input76" id="input76"
                                aria-describedby="helpId" placeholder="">
                            <input type="text" class="form-control" name="" ng-model="input77" id="input77"
                                aria-describedby="helpId" placeholder="">
                            <input type="text" class="form-control" name="" ng-model="input78" id="input78"
                                aria-describedby="helpId" placeholder="">
                            <input type="text" class="form-control" name="" ng-model="input79" id="input79"
                                aria-describedby="helpId" placeholder="">
                            <input type="text" class="form-control" name="" ng-model="input80" id="input80"
                                aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="table-responsive">
                            <h4>Selecciona las actividades en las que deseas centrarte en cada nivel del embudo.</h4>
                            <table class="table text-white table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">TOFU</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">MOFU</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">BOFU</label>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input81"
                                                    id="input81" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input82"
                                                    id="input82" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input83"
                                                    id="input83" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input84"
                                                    id="input84" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input85"
                                                    id="input85" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input86"
                                                    id="input86" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input87"
                                                    id="input87" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input88"
                                                    id="input88" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input89"
                                                    id="input89" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input90"
                                                    id="input90" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input91"
                                                    id="input91" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input92"
                                                    id="input92" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle">Ahora calcúla tu embudo en cada etapa, respondiendo las
                        siguientes preguntas</h4>
                    <div>
                        <div class="mb-3">
                            <h4 for="" class="form-label">¿Cuántos visitantes esperas recibir al mes?</h4>
                            <input type="text" class="form-control" name="" ng-model="input93" id="input92"
                                aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="mb-3">
                            <h4 for="" class="form-label">¿Cuántos clientes potenciales, esperas obtener al mes?</h4>
                            <input type="text" class="form-control" name="" ng-model="input94" id="input94"
                                aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="mb-3">
                            <h4 for="" class="form-label">¿Cuántos clientes reales, esperas obtener al mes?</h4>
                            <input type="text" class="form-control" name="" ng-model="input95" id="input95"
                                aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle">Ahora calculemos el CAC</h4>
                    <div>
                        <div class="mb-3">
                            <h4 for="" class="text-left">¿Cuánto te costará llevar a cabo todas las actividades de
                                marketing en un mes?</h4>
                            <input type="text" class="form-control" name="" ng-change="func1()" ng-model="input96"
                                id="input96" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="table-responsive">
                            <table class="table text-white table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                        </th>
                                        <th scope="col">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <h5 for="" class="form-label">CAC </h5>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input97"
                                                    id="input97" readonly>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="mb-3">
                            <h4 for="" class="text-left">Ahora por cada segmento de mercado, explica por qué el modelo
                                que has elegido es el adecuado y cómo planeas llegar a ellos.</h4>
                            <textarea type="text" class="form-control" name="" ng-model="input98" id="input98"
                                aria-describedby="helpId" placeholder=""></textarea>
                        </div>
                    </div>
                    <div id="producto2">

                        <input type="text" class="form-control" name="" ng-model="product2" id="product2"
                            aria-describedby="helpId" placeholder="" readonly>
                        <h4 class="text-center app-subtitle">Responde a las siguientes preguntas evaluando en qué punto
                            de la escala se encuentra cada segmento de cliente</h4>
                        <div>
                            <div>
                                <h4>¿Este segmento de mercado paga por nuestro producto o servicio?</h4>
                                <div class="row">
                                    <input type="text" class="form-control" name="" ng-model="input99" id="input99"
                                        aria-describedby="helpId" placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio10"
                                                ng-model="input100" id="input100" value="option1">
                                            <label class="form-check-label" for="radio1">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio10"
                                                ng-model="input101" id="input101" value="option2">
                                            <label class="form-check-label" for="radio1">No mucho</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio10"
                                                ng-model="input102" id="input102" value="option3">
                                            <label class="form-check-label" for="radio1">N/S</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio10"
                                                ng-model="input103" id="input103" value="option4">
                                            <label class="form-check-label" for="radio1">Probablemente</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio10"
                                                ng-model="input104" id="input104" value="option5">
                                            <label class="form-check-label" for="radio1">Sí</label>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control" name="" ng-model="input105" id="input105"
                                        aria-describedby="helpId" placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio11"
                                                ng-model="input106" id="input106" value="option1">
                                            <label class="form-check-label" for="radio2">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio11"
                                                ng-model="input107" id="input107" value="option2">
                                            <label class="form-check-label" for="radio2">No mucho</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio11"
                                                ng-model="input108" id="input108" value="option3">
                                            <label class="form-check-label" for="radio2">N/S</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio11"
                                                ng-model="input109" id="input109" value="option4">
                                            <label class="form-check-label" for="radio2">Probablemente</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio11"
                                                ng-model="input110" id="input110" value="option5">
                                            <label class="form-check-label" for="radio2">Sí</label>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control" name="" ng-model="input111" id="input111"
                                        aria-describedby="helpId" placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio12"
                                                ng-model="input112" id="input112" value="option1">
                                            <label class="form-check-label" for="radio3">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio12"
                                                ng-model="input113" id="input113" value="option2">
                                            <label class="form-check-label" for="radio3">No mucho</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio12"
                                                ng-model="input114" id="input114" value="option3">
                                            <label class="form-check-label" for="radio3">N/S</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio12"
                                                ng-model="input115" id="input115" value="option4">
                                            <label class="form-check-label" for="radio3">Probablemente</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio12"
                                                ng-model="input116" id="input116" value="option5">
                                            <label class="form-check-label" for="radio3">Sí</label>
                                        </div>
                                    </div>
                                    <h4>¿Con qué frecuencia paga este segmento?</h4>
                                    <div class="row">
                                        <input type="text" class="form-control" name="" ng-model="input117"
                                            id="input117" aria-describedby="helpId" placeholder="">
                                        <div class="flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio13"
                                                    ng-model="input118" id="input118" value="option1">
                                                <label class="form-check-label" for="radio4">No</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio13"
                                                    ng-model="input119" id="input119" value="option2">
                                                <label class="form-check-label" for="radio4">No mucho</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio13"
                                                    ng-model="input120" id="input120" value="option3">
                                                <label class="form-check-label" for="radio4">N/S</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio13"
                                                    ng-model="input121" id="input121" value="option4">
                                                <label class="form-check-label" for="radio4">Probablemente</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio13"
                                                    ng-model="input122" id="input122" value="option5">
                                                <label class="form-check-label" for="radio4">Sí</label>
                                            </div>
                                        </div>

                                        <input type="text" class="form-control" name="" ng-model="input123"
                                            id="input123" aria-describedby="helpId" placeholder="">
                                        <div class="flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio14"
                                                    ng-model="input124" id="input124" value="option1">
                                                <label class="form-check-label" for="radio5">No</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio14"
                                                    ng-model="input125" id="input125" value="option2">
                                                <label class="form-check-label" for="radio5">No mucho</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio14"
                                                    ng-model="input126" id="input126" value="option3">
                                                <label class="form-check-label" for="radio5">N/S</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio14"
                                                    ng-model="input127" id="input127" value="option4">
                                                <label class="form-check-label" for="radio5">Probablemente</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio14"
                                                    ng-model="input128" id="input128" value="option5">
                                                <label class="form-check-label" for="radio5">Sí</label>
                                            </div>
                                        </div>

                                        <input type="text" class="form-control" name="" ng-model="input129"
                                            id="input129" aria-describedby="helpId" placeholder="">
                                        <div class="flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio15"
                                                    ng-model="input130" id="input130" value="option1">
                                                <label class="form-check-label" for="radio6">No</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio15"
                                                    ng-model="input131" id="input131" value="option2">
                                                <label class="form-check-label" for="radio6">No mucho</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio15"
                                                    ng-model="input132" id="input132" value="option3">
                                                <label class="form-check-label" for="radio6">N/S</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio15"
                                                    ng-model="input133" id="input133" value="option4">
                                                <label class="form-check-label" for="radio6">Probablemente</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio15"
                                                    ng-model="input134" id="input134" value="option5">
                                                <label class="form-check-label" for="radio6">Sí</label>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>¿Vendes directamente a este segmento de mercado?</h4>
                                    <div class="row">
                                        <input type="text" class="form-control" name="" ng-model="input135"
                                            id="input135" aria-describedby="helpId" placeholder="">
                                        <div class="flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio16"
                                                    ng-model="input136" id="input136" value="option1">
                                                <label class="form-check-label" for="radio7">Varios
                                                    intermediarios</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio16"
                                                    ng-model="input137" id="input137" value="option2">
                                                <label class="form-check-label" for="radio7">Dos intermediarios</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio16"
                                                    ng-model="input138" id="input138" value="option3">
                                                <label class="form-check-label" for="radio7">Un intermediario</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio16"
                                                    ng-model="input139" id="input139" value="option4">
                                                <label class="form-check-label" for="radio7">Venta directa</label>
                                            </div>

                                        </div>

                                        <input type="text" class="form-control" name="" ng-model="input140"
                                            id="input140" aria-describedby="helpId" placeholder="">
                                        <div class="flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio17"
                                                    ng-model="input141" id="input141" value="option1">
                                                <label class="form-check-label" for="radio8">Varios
                                                    intermediarios</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio17"
                                                    ng-model="input142" id="input142" value="option2">
                                                <label class="form-check-label" for="radio8">Dos intermediarios</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio17"
                                                    ng-model="input143" id="input143" value="option3">
                                                <label class="form-check-label" for="radio8">Un intermediario</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio17"
                                                    ng-model="input144" id="input144" value="option4">
                                                <label class="form-check-label" for="radio8">Venta directa</label>
                                            </div>
                                        </div>

                                        <input type="text" class="form-control" name="" ng-model="input145"
                                            id="input145" aria-describedby="helpId" placeholder="">
                                        <div class="flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio18"
                                                    ng-model="input146" id="input146" value="option1">
                                                <label class="form-check-label" for="radio9">Varios
                                                    intermediarios</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio18"
                                                    ng-model="input147" id="input147" value="option2">
                                                <label class="form-check-label" for="radio9">Dos intermediarios</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio18"
                                                    ng-model="input148" id="input148" value="option3">
                                                <label class="form-check-label" for="radio9">Un intermediario</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio18"
                                                    ng-model="input149" id="input149" value="option4">
                                                <label class="form-check-label" for="radio9">Venta directa</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Modelo de negocios</h4>
                        <div>
                            <h4>Selecciona todos los modelos de negocio que podrían interesarte para tu empresa.</h4>
                            <div class="row">
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check11" value="1" ng-click="check1p2()" type="checkbox"
                                            ng-model="input150" id="input150">
                                        <label for="check11">Venta directa</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check12" value="1" ng-click="check1p2()" type="checkbox"
                                            ng-model="input151" id="input151">
                                        <label for="check12">Suscripción</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check13" value="1" ng-click="check1p2()" type="checkbox"
                                            ng-model="input152" id="input152">
                                        <label for="check13">Pay as you Go</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check14" value="1" ng-click="check1p2()" type="checkbox"
                                            ng-model="input153" id="input153">
                                        <label for="check14">Alquiler</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check15" value="1" ng-click="check1p2()" type="checkbox"
                                            ng-model="input154" id="input154">
                                        <label for="check15">Broker</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check16" value="1" ng-click="check1p2()" type="checkbox"
                                            ng-model="input155" id="input155">
                                        <label for="check16">Low-Touch</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check17" value="1" ng-click="check1p2()" type="checkbox"
                                            ng-model="input156" id="input156">
                                        <label for="check17">Saas</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check18" value="1" ng-click="check1p2()" type="checkbox"
                                            ng-model="input157" id="input157">
                                        <label for="check18">Modelo de datos</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check19" value="1" ng-click="check1p2()" type="checkbox"
                                            ng-model="input158" id="input158">
                                        <label for="check19">Modelo de publicidad</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check20" value="1" ng-click="check1p2()" type="checkbox"
                                            ng-model="input159" id="input159">
                                        <label for="check20">Producto como servicio</label>
                                    </div>
                                </checkbox>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Conceptualización del modelo de negocios</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Escribe una breve descripción de lo que te interesa de cada
                                    uno de los modelos de negocio que has seleccionado.</h4>
                                <textarea type="text" class="form-control" name="" ng-model="input160" id="input160"
                                    rows="3"></textarea>
                                <textarea type="text" class="form-control" name="" ng-model="input161" id="input161"
                                    rows="3"></textarea>
                                <textarea type="text" class="form-control" name="" ng-model="input162" id="input162"
                                    rows="3"></textarea>
                                <textarea type="text" class="form-control" name="" ng-model="input163" id="input163"
                                    rows="3"></textarea>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Creación del modelo de negocios</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Crea y define el mejor modelo de negocio para cada segmento
                                    de mercado seleccionando los modelos que te interesen de la lista (máx. 3) y escribe
                                    una breve descripción.</h4>
                                <textarea type="" class="form-control " name="" ng-model="input164" id="input164"
                                    rows="3"></textarea>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Embudo de MKT</h4>
                        <div>
                            <h4>Parte superior del embudo</h4>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input165" id="input165"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input166" id="input166"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input167" id="input167"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input168" id="input168"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input169" id="input169"
                                    placeholder="">
                            </div>
                            <h4>Parte media del embudo</h4>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input170" id="input170"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input171" id="input171"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input172" id="input172"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input173" id="input173"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input174" id="input174"
                                    placeholder="">
                            </div>
                            <h4>Parte inferior del embudo</h4>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input175" id="input175"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input176" id="input176"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input177" id="input177"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input178" id="input178"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input179" id="input179"
                                    placeholder="">
                            </div>
                            <div class="table-responsive">
                                <h4>Selecciona las actividades en las que deseas centrarte en cada nivel del embudo.
                                </h4>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">TOFU</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">MOFU</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">BOFU</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input180"
                                                        id="input180" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input181"
                                                        id="input181" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input182"
                                                        id="input182" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input183"
                                                        id="input183" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input184"
                                                        id="input184" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input185"
                                                        id="input185" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input186"
                                                        id="input186" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input187"
                                                        id="input187" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input188"
                                                        id="input188" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input189"
                                                        id="input189" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input190"
                                                        id="input190" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input191"
                                                        id="input191" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Ahora calcúla tu embudo en cada etapa, respondiendo las
                            siguientes preguntas</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="form-label">¿Cuántos visitantes esperas recibir al mes?</h4>
                                <input type="text" class="form-control" name="" ng-model="input192" id="input192"
                                    placeholder="Ejemplo: 1000">
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="form-label">¿Cuántos clientes potenciales, esperas obtener al mes?
                                </h4>
                                <input type="text" class="form-control" name="" ng-model="input193" id="input193"
                                    placeholder="Ejemplo: 100">
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="form-label">¿Cuántos clientes reales, esperas obtener al mes?</h4>
                                <input type="text" class="form-control" name="" ng-model="input194" id="input194"
                                    placeholder="Ejemplo: 100">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Ahora calculemos el CAC</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">¿Cuánto te costará llevar a cabo todas las actividades de
                                    marketing en un mes?</h4>
                                <input type="text" class="form-control" name="" ng-change="func1p2()"
                                    ng-model="input195" id="input195" placeholder="">
                            </div>
                            <div class="table-responsive">
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                            </th>
                                            <th scope="col">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <h5 for="" class="form-label">CAC </h5>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input196"
                                                        id="input196" placeholder="" readonly>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Ahora explica por qué el modelo que has elegido es el
                                    adecuado y cómo planeas llegar a ellos.</h4>
                                <textarea type="text" class="form-control" name="" ng-model="input197" id="input197"
                                    placeholder=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="producto3">
                        <input type="text" class="form-control" name="" ng-model="product3" id="product3"
                            aria-describedby="helpId" placeholder="" readonly>
                        <h4 class="text-center app-subtitle">Responde a las siguientes preguntas evaluando en qué punto
                            de la escala se encuentra cada segmento de cliente</h4>
                        <div>
                            <div>
                                <h4>¿Este segmento de mercado paga por nuestro producto o servicio?</h4>
                                <div class="row">
                                    <input type="text" class="form-control" name="" ng-model="input198" id="input198"
                                        placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio19"
                                                ng-model="input199" id="input199" value="option1">
                                            <label class="form-check-label" for="radio19">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio19"
                                                ng-model="input200" id="input200" value="option2">
                                            <label class="form-check-label" for="radio19">No mucho</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio19"
                                                ng-model="input201" id="input201" value="option3">
                                            <label class="form-check-label" for="radio19">N/S</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio19"
                                                ng-model="input202" id="input202" value="option4">
                                            <label class="form-check-label" for="radio19">Probablemente</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio19"
                                                ng-model="input203" id="input203" value="option5">
                                            <label class="form-check-label" for="radio19">Sí</label>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control" name="" ng-model="input204" id="input204"
                                        placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio20"
                                                ng-model="input205" id="input205" value="option1">
                                            <label class="form-check-label" for="radio20">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio20"
                                                ng-model="input206" id="input206" value="option2">
                                            <label class="form-check-label" for="radio20">No mucho</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio20"
                                                ng-model="input207" id="input207" value="option3">
                                            <label class="form-check-label" for="radio20">N/S</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio20"
                                                ng-model="input208" id="input208" value="option4">
                                            <label class="form-check-label" for="radio20">Probablemente</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio20"
                                                ng-model="input209" id="input209" value="option5">
                                            <label class="form-check-label" for="radio20">Sí</label>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control" name="" ng-model="input210" id="input210"
                                        placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio21"
                                                ng-model="input211" id="input211" value="option1">
                                            <label class="form-check-label" for="radio21">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio21"
                                                ng-model="input212" id="input212" value="option2">
                                            <label class="form-check-label" for="radio21">No mucho</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio21"
                                                ng-model="input213" id="input213" value="option3">
                                            <label class="form-check-label" for="radio21">N/S</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio21"
                                                ng-model="input214" id="input214" value="option4">
                                            <label class="form-check-label" for="radio21">Probablemente</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio21"
                                                ng-model="input215" id="input215" value="option5">
                                            <label class="form-check-label" for="radio21">Sí</label>
                                        </div>
                                    </div>
                                </div>
                                <h4>¿Con qué frecuencia paga este segmento?</h4>
                                <div class="row">
                                    <input type="text" class="form-control" name="" ng-model="input216" id="input216"
                                        placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio22"
                                                ng-model="input217" id="input217" value="option1">
                                            <label class="form-check-label" for="radio22">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio22"
                                                ng-model="input218" id="input218" value="option2">
                                            <label class="form-check-label" for="radio22">No mucho</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio22"
                                                ng-model="input219" id="input219" value="option3">
                                            <label class="form-check-label" for="radio22">N/S</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio22"
                                                ng-model="input220" id="input220" value="option4">
                                            <label class="form-check-label" for="radio22">Probablemente</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio22"
                                                ng-model="input221" id="input221" value="option5">
                                            <label class="form-check-label" for="radio22">Si</label>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control" name="" ng-model="input222" id="input222"
                                        placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio23"
                                                ng-model="input223" id="input223" value="option1">
                                            <label class="form-check-label" for="radio23">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio23"
                                                ng-model="input224" id="input224" value="option2">
                                            <label class="form-check-label" for="radio23">No mucho</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio23"
                                                ng-model="input225" id="input225" value="option3">
                                            <label class="form-check-label" for="radio23">N/S</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio23"
                                                ng-model="input226" id="input226" value="option4">
                                            <label class="form-check-label" for="radio23">Probablemente</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio23"
                                                ng-model="input227" id="input227" value="option5">
                                            <label class="form-check-label" for="radio23">Si</label>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control" name="" ng-model="input228" id="input228"
                                        placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio24"
                                                ng-model="input229" id="input229" value="option1">
                                            <label class="form-check-label" for="radio24">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio24"
                                                ng-model="input230" id="input230" value="option2">
                                            <label class="form-check-label" for="radio24">No mucho</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio24"
                                                ng-model="input231" id="input231" value="option3">
                                            <label class="form-check-label" for="radio24">N/S</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio24"
                                                ng-model="input232" id="input232" value="option4">
                                            <label class="form-check-label" for="radio24">Probablemente</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio24"
                                                ng-model="input233" id="input233" value="option5">
                                            <label class="form-check-label" for="radio24">Si</label>
                                        </div>
                                    </div>
                                </div>
                                <h4>¿Vendes directamente a este segmento de mercado?</h4>
                                <div class="row">
                                    <input type="text" class="form-control" name="" ng-model="input234" id="input234"
                                        placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio25"
                                                ng-model="input235" id="input235" value="option1">
                                            <label class="form-check-label" for="radio25">Varios intermediarios</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio25"
                                                ng-model="input236" id="input236" value="option2">
                                            <label class="form-check-label" for="radio25">Dos intermediario</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio25"
                                                ng-model="input237" id="input237" value="option3">
                                            <label class="form-check-label" for="radio25">Un intermediario</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio25"
                                                ng-model="input238" id="input238" value="option4">
                                            <label class="form-check-label" for="radio25">Venta directa</label>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control" name="" ng-model="input239" id="input239"
                                        placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio26"
                                                ng-model="input240" id="input240" value="option1">
                                            <label class="form-check-label" for="radio26">Varios intermediarios</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio26"
                                                ng-model="input241" id="input241" value="option2">
                                            <label class="form-check-label" for="radio26">Dos intermediario</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio26"
                                                ng-model="input242" id="input242" value="option3">
                                            <label class="form-check-label" for="radio26">Un intermediario</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio26"
                                                ng-model="input243" id="input243" value="option4">
                                            <label class="form-check-label" for="radio26">Venta directa</label>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control" name="" ng-model="input244" id="input244"
                                        placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio27"
                                                ng-model="input245" id="input245" value="option1">
                                            <label class="form-check-label" for="radio27">Varios intermediarios</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio27"
                                                ng-model="input246" id="input246" value="option2">
                                            <label class="form-check-label" for="radio27">Dos intermediario</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio27"
                                                ng-model="input247" id="input247" value="option3">
                                            <label class="form-check-label" for="radio27">Un intermediario</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio27"
                                                ng-model="input248" id="input248" value="option4">
                                            <label class="form-check-label" for="radio27">Venta directa</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Modelo de negocios</h4>
                        <div>
                            <h4>Selecciona todos los modelos de negocio que podrían interesarte para tu empresa.</h4>
                            <div class="row">
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input type="checkbox" class="app-antepnp" name="check21" ng-click="check1p3()" ng-model="input249"
                                            id="input249" value="option1">
                                        <label for="checkbox1">Venta directa</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input type="checkbox" class="app-antepnp" name="check22" ng-click="check1p3()" ng-model="input250"
                                            id="input250" value="option2">
                                        <label for="checkbox2">Suscripción</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input type="checkbox" class="app-antepnp" name="check23" ng-click="check1p3()" ng-model="input251"
                                            id="input251" value="option3">
                                        <label for="checkbox3">Pay as you go</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input type="checkbox" class="app-antepnp" name="check24" ng-click="check1p3()" ng-model="input252"
                                            id="input252" value="option4">
                                        <label for="checkbox4">Alquiler</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input type="checkbox" class="app-antepnp" name="check25" ng-click="check1p3()" ng-model="input253"
                                            id="input253" value="option5">
                                        <label for="checkbox5">Broker</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input type="checkbox" class="app-antepnp" name="check26" ng-click="check1p3()" ng-model="input254"
                                            id="input254" value="option6">
                                        <label for="checkbox6">Low-Touch</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input type="checkbox" class="app-antepnp" name="check27" ng-click="check1p3()" ng-model="input255"
                                            id="input255" value="option7">
                                        <label for="checkbox7">Saas</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input type="checkbox" class="app-antepnp" name="check28" ng-click="check1p3()" ng-model="input256"
                                            id="input256" value="option8">
                                        <label for="checkbox8">Modelo de datos</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input type="checkbox" class="app-antepnp" name="check29" ng-click="check1p3()" ng-model="input257"
                                            id="input257" value="option9">
                                        <label for="checkbox9">Modelo de publicidad</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input type="checkbox" class="app-antepnp" name="check30" ng-click="check1p3()" ng-model="input258"
                                            id="input258" value="option10">
                                        <label for="checkbox10">Producto como servicio</label>
                                    </div>
                                </checkbox>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Conceptualización del modelo de negocios</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Escribe una breve descripción de lo que te interesa de cada
                                    uno de los modelos de negocio que has seleccionado.</h4>
                                <textarea type="text" class="form-control" name="" ng-model="input259" id="input259"
                                    rows="3"></textarea>
                                <textarea type="text" class="form-control" name="" ng-model="input260" id="input260"
                                    rows="3"></textarea>
                                <textarea type="text" class="form-control" name="" ng-model="input261" id="input261"
                                    rows="3"></textarea>
                                <textarea type="text" class="form-control" name="" ng-model="input262" id="input262"
                                    rows="3"></textarea>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Creación del modelo de negocios</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Crea y define el mejor modelo de negocio para cada segmento
                                    de mercado seleccionando los modelos que te interesen de la lista (máx. 3) y escribe
                                    una breve descripción.</h4>
                                <textarea type="text" class="form-control" name="" ng-model="input263" id="input263"
                                    rows="3"></textarea>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Embudo de MKT</h4>
                        <div>
                            <h4>Parte superior del embudo</h4>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input264" id="input264"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input265" id="input265"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input266" id="input266"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input267" id="input267"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input268" id="input268"
                                    placeholder="">
                            </div>
                            <h4>Parte media del embudo</h4>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input269" id="input269"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input270" id="input270"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input271" id="input271"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input272" id="input272"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input273" id="input273"
                                    placeholder="">
                            </div>
                            <h4>Parte inferior del embudo</h4>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input274" id="input274"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input275" id="input275"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input276" id="input276"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input277" id="input277"
                                    placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input278" id="input278"
                                    placeholder="">
                            </div>
                            <div class="table-responsive">
                                <h4>Selecciona las actividades en las que deseas centrarte en cada nivel del embudo.
                                </h4>

                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">TOFU</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">MOFU</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">BOFU</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input279"
                                                        id="input279" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input280"
                                                        id="input280" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input281"
                                                        id="input281" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input282"
                                                        id="input282" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input283"
                                                        id="input283" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input284"
                                                        id="input284" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input285"
                                                        id="input285" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input286"
                                                        id="input286" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input287"
                                                        id="input287" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input288"
                                                        id="input288" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input289"
                                                        id="input289" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input290"
                                                        id="input290" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Ahora calcúla tu embudo en cada etapa, respondiendo las
                            siguientes preguntas</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="form-label">¿Cuántos visitantes esperas recibir al mes?</h4>
                                <input type="text" class="form-control" name="" ng-model="input291" id="input291"
                                    placeholder="Ejemplo: 100">
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="form-label">¿Cuántos clientes potenciales, esperas obtener al mes?
                                </h4>
                                <input type="text" class="form-control" name="" ng-model="input292" id="input292"
                                    placeholder="Ejemplo: 100">
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="form-label">¿Cuántos clientes reales, esperas obtener al mes?</h4>
                                <input type="text" class="form-control" name="" ng-model="input293" id="input293"
                                    placeholder="Ejemplo: 100">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Ahora calculemos el CAC</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">¿Cuánto te costará llevar a cabo todas las actividades de
                                    marketing en un mes?</h4>
                                <input type="text" class="form-control" name="" ng-change="func1p3() "
                                    ng-model="input294" id="input294" placeholder="">
                            </div>
                            <div class="table-responsive">
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                            </th>
                                            <th scope="col">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <h5 for="" class="form-label">CAC </h5>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input295"
                                                        id="input295" placeholder="" disabled>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Ahora explica por qué el modelo que has elegido es el
                                    adecuado y cómo planeas llegar a ellos.</h4>
                                <textarea type="text" class="form-control" name="" ng-model="input296" id="input296"
                                    placeholder=""></textarea>
                            </div>
                        </div>
                    </div>
                </form>
                @if (Auth::user()->userType == 'teacher')
                <div class="d-flex justify-content-center">
                    <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm col-4">
                        <i class="fas fa-check fa-sm text-white-50 "></i> Aprobar</button>
                </div>
                @endif
                @if (Auth::user()->userType == 'student')
                <div class="d-flex justify-content-center">
                    <button type="submit" ng-click="formTerminado()"
                        class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm col-4">
                        <i class="fas fa-check fa-sm text-white-50 "></i> Formulario terminado</button>
                </div>
                @endif

                <section>
                    <div class="container my-5 py-5 text-dark">
                        <div class="card">
                            <div class="card-body p-4">
                                <img class="rounded-circle shadow-1-strong me-3"
                                    src="https://st4.depositphotos.com/17253970/23899/v/600/depositphotos_238993354-stock-illustration-writing-isolated-vector-icon-can.jpg"
                                    alt="avatar" width="65" height="65" />
                                <div class="mw-100">
                                    <form>
                                        <h5>Comentario del docente</h5>
                                        <div class="form-outline">
                                            @if(Auth::user()->userType == 'teacher')
                                            <textarea class="form-control" id="textAreaExample" ng-model="formComment"
                                                id="formComment" rows="4"></textarea>
                                            @endif
                                            @if(Auth::user()->userType == 'student')
                                            <textarea readonly class="form-control" id="textAreaExample"
                                                ng-model="formComment" id="formComment" rows="4"></textarea>
                                            @endif
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            @if(Auth::user()->userType == 'teacher')
                                            <button type="button" class="btn btn-primary" ng-click="postComment()">
                                                Enviar <i class="fas fa-long-arrow-alt-right ms-1"></i>
                                            </button>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
            <script type="text/javascript">
            var app = angular.module('myApp', []);
            app.controller('myCtrl', function($scope, $http) {

                $scope.forms = {};

                $scope.input1 = "";
                $scope.input2 = "";
                $scope.input3 = "";
                $scope.input4 = "";
                $scope.input5 = "";
                $scope.input6 = "";
                $scope.input7 = "";
                $scope.input8 = "";
                $scope.input9 = "";
                $scope.input10 = "";
                $scope.input11 = "";
                $scope.input12 = "";
                $scope.input13 = "";
                $scope.input14 = "";
                $scope.input15 = "";
                $scope.input16 = "";
                $scope.input17 = "";
                $scope.input18 = "";
                $scope.input19 = "";
                $scope.input20 = "";
                $scope.input21 = "";
                $scope.input22 = "";
                $scope.input23 = "";
                $scope.input24 = "";
                $scope.input25 = "";
                $scope.input26 = "";
                $scope.input27 = "";
                $scope.input28 = "";
                $scope.input29 = "";
                $scope.input30 = "";
                $scope.input31 = "";
                $scope.input32 = "";
                $scope.input33 = "";
                $scope.input34 = "";
                $scope.input35 = "";
                $scope.input36 = "";
                $scope.input37 = "";
                $scope.input38 = "";
                $scope.input39 = "";
                $scope.input40 = "";
                $scope.input41 = "";
                $scope.input411 = "";
                $scope.input42 = "";
                $scope.input43 = "";
                $scope.input44 = "";
                $scope.input45 = "";
                $scope.input46 = "";
                $scope.input47 = "";
                $scope.input48 = "";
                $scope.input49 = "";
                $scope.input50 = "";
                $scope.input51 = "";
                $scope.input52 = "";
                $scope.input53 = "";
                $scope.input54 = "";
                $scope.input55 = "";
                $scope.input56 = "";
                $scope.input57 = "";
                $scope.input58 = "";
                $scope.input59 = "";
                $scope.input60 = "";
                $scope.input61 = "";
                $scope.input62 = "";
                $scope.input63 = "";
                $scope.input64 = "";
                $scope.input65 = "";
                $scope.input66 = "";
                $scope.input67 = "";
                $scope.input68 = "";
                $scope.input69 = "";
                $scope.input70 = "";
                $scope.input71 = "";
                $scope.input72 = "";
                $scope.input73 = "";
                $scope.input74 = "";
                $scope.input75 = "";
                $scope.input76 = "";
                $scope.input77 = "";
                $scope.input78 = "";
                $scope.input79 = "";
                $scope.input80 = "";
                $scope.input81 = "";
                $scope.input82 = "";
                $scope.input83 = "";
                $scope.input84 = "";
                $scope.input85 = "";
                $scope.input86 = "";
                $scope.input87 = "";
                $scope.input88 = "";
                $scope.input89 = "";
                $scope.input90 = "";
                $scope.input91 = "";
                $scope.input92 = "";
                $scope.input93 = "";
                $scope.input94 = "";
                $scope.input95 = "";
                $scope.input96 = "";
                $scope.input97 = "";
                $scope.input98 = "";
                $scope.input99 = "";
                $scope.input100 = "";
                $scope.input101 = "";
                $scope.input102 = "";
                $scope.input103 = "";
                $scope.input104 = "";
                $scope.input105 = "";
                $scope.input106 = "";
                $scope.input107 = "";
                $scope.input108 = "";
                $scope.input109 = "";
                $scope.input110 = "";
                $scope.input111 = "";
                $scope.input112 = "";
                $scope.input113 = "";
                $scope.input114 = "";
                $scope.input115 = "";
                $scope.input116 = "";
                $scope.input117 = "";
                $scope.input118 = "";
                $scope.input119 = "";
                $scope.input120 = "";
                $scope.input121 = "";
                $scope.input122 = "";
                $scope.input123 = "";
                $scope.input124 = "";
                $scope.input125 = "";
                $scope.input126 = "";
                $scope.input127 = "";
                $scope.input128 = "";
                $scope.input129 = "";
                $scope.input130 = "";
                $scope.input131 = "";
                $scope.input132 = "";
                $scope.input133 = "";
                $scope.input134 = "";
                $scope.input135 = "";
                $scope.input136 = "";
                $scope.input137 = "";
                $scope.input138 = "";
                $scope.input139 = "";
                $scope.input140 = "";
                $scope.input141 = "";
                $scope.input142 = "";
                $scope.input143 = "";
                $scope.input144 = "";
                $scope.input145 = "";
                $scope.input146 = "";
                $scope.input147 = "";
                $scope.input148 = "";
                $scope.input149 = "";
                $scope.input150 = "";
                $scope.input151 = "";
                $scope.input152 = "";
                $scope.input153 = "";
                $scope.input154 = "";
                $scope.input155 = "";
                $scope.input156 = "";
                $scope.input157 = "";
                $scope.input158 = "";
                $scope.input159 = "";
                $scope.input160 = "";
                $scope.input161 = "";
                $scope.input162 = "";
                $scope.input163 = "";
                $scope.input164 = "";
                $scope.input165 = "";
                $scope.input166 = "";
                $scope.input167 = "";
                $scope.input168 = "";
                $scope.input169 = "";
                $scope.input170 = "";
                $scope.input171 = "";
                $scope.input172 = "";
                $scope.input173 = "";
                $scope.input174 = "";
                $scope.input175 = "";
                $scope.input176 = "";
                $scope.input177 = "";
                $scope.input178 = "";
                $scope.input179 = "";
                $scope.input180 = "";
                $scope.input181 = "";
                $scope.input182 = "";
                $scope.input183 = "";
                $scope.input184 = "";
                $scope.input185 = "";
                $scope.input186 = "";
                $scope.input187 = "";
                $scope.input188 = "";
                $scope.input189 = "";
                $scope.input190 = "";
                $scope.input191 = "";
                $scope.input192 = "";
                $scope.input193 = "";
                $scope.input194 = "";
                $scope.input195 = "";
                $scope.input196 = "";
                $scope.input197 = "";
                $scope.input198 = "";
                $scope.input199 = "";
                $scope.input200 = "";
                $scope.input201 = "";
                $scope.input202 = "";
                $scope.input203 = "";
                $scope.input204 = "";
                $scope.input205 = "";
                $scope.input206 = "";
                $scope.input207 = "";
                $scope.input208 = "";
                $scope.input209 = "";
                $scope.input210 = "";
                $scope.input211 = "";
                $scope.input212 = "";
                $scope.input213 = "";
                $scope.input214 = "";
                $scope.input215 = "";
                $scope.input216 = "";
                $scope.input217 = "";
                $scope.input218 = "";
                $scope.input219 = "";
                $scope.input220 = "";
                $scope.input221 = "";
                $scope.input222 = "";
                $scope.input223 = "";
                $scope.input224 = "";
                $scope.input225 = "";
                $scope.input226 = "";
                $scope.input227 = "";
                $scope.input228 = "";
                $scope.input229 = "";
                $scope.input230 = "";
                $scope.input231 = "";
                $scope.input232 = "";
                $scope.input233 = "";
                $scope.input234 = "";
                $scope.input235 = "";
                $scope.input236 = "";
                $scope.input237 = "";
                $scope.input238 = "";
                $scope.input239 = "";
                $scope.input240 = "";
                $scope.input241 = "";
                $scope.input242 = "";
                $scope.input243 = "";
                $scope.input244 = "";
                $scope.input245 = "";
                $scope.input246 = "";
                $scope.input247 = "";
                $scope.input248 = "";
                $scope.input249 = "";
                $scope.input250 = "";
                $scope.input251 = "";
                $scope.input252 = "";
                $scope.input253 = "";
                $scope.input254 = "";
                $scope.input255 = "";
                $scope.input256 = "";
                $scope.input257 = "";
                $scope.input258 = "";
                $scope.input259 = "";
                $scope.input260 = "";
                $scope.input261 = "";
                $scope.input262 = "";
                $scope.input263 = "";
                $scope.input264 = "";
                $scope.input265 = "";
                $scope.input266 = "";
                $scope.input267 = "";
                $scope.input268 = "";
                $scope.input269 = "";
                $scope.input270 = "";
                $scope.input271 = "";
                $scope.input272 = "";
                $scope.input273 = "";
                $scope.input274 = "";
                $scope.input275 = "";
                $scope.input276 = "";
                $scope.input277 = "";
                $scope.input278 = "";
                $scope.input279 = "";
                $scope.input280 = "";
                $scope.input281 = "";
                $scope.input282 = "";
                $scope.input283 = "";
                $scope.input284 = "";
                $scope.input285 = "";
                $scope.input286 = "";
                $scope.input287 = "";
                $scope.input288 = "";
                $scope.input289 = "";
                $scope.input290 = "";
                $scope.input291 = "";
                $scope.input292 = "";
                $scope.input293 = "";
                $scope.input294 = "";
                $scope.input295 = "";
                $scope.input296 = "";
                $scope.count = "";
                $scope.product1 = "";
                $scope.product2 = "";
                $scope.product3 = "";




                angular.element(document).ready(() => {
                    let userId = "{{ Auth::user()->id }}";
                    let userType = "{{Auth::user()->userType}}";
                    var teamId = "";
                    if (userType == "teacher") {
                        function getId(url = window.location.href) {
                            let urlParts = url.split('/');
                            return urlParts[urlParts.length - 1];
                        }
                        teamId = getId();
                        $http.get(`/forms4/${teamId}`).then((result) => {
                            $scope.forms = result.data;
                            $scope.formComment = $scope.forms.formComments;
                            $scope.parseArrayValues();
                            $scope.checkboxes1p1();
                        })
                        $http.get(`/forms1/${teamId}`).then((result) => {
                            $scope.forms1 = result.data;
                            $scope.parseArrayValues1();
                        })
                        //hab forms
                        var formNumber = 4;

                        $http.get('/verifiedTeacher/' + teamId).then((res) => {
                            var status = res.data[0].status;
                            var s = status.split(',')
                            var s2 = status.split(',')

                            s[formNumber - 1] = 1;
                            s2[formNumber - 1] = 0;
                            var newStatusHab = s[0] + "," + s[1] + "," + s[2] + "," + s[3] +
                                "," + s[4] + "," + s[5] + "," + s[6];
                            var newStatusDesHab = s2[0] + "," + s2[1] + "," + s2[2] + "," + s2[
                                3] + "," + s2[4] + "," + s2[5] + "," + s2[6];
                            var newStatusAprob = s[0] + "," + s[1] + "," + s[2] + ",3,1," + s[
                                5] + "," + s[6];
                            var formName = 'Modelo de Negocio y Marketing'
                            $scope.sendObjectTeamHab = {
                                id: teamId,
                                status: newStatusHab,
                                type: 0
                            }
                            $scope.sendObjectTeamDesHab = {
                                id: teamId,
                                status: newStatusDesHab,
                                type: 0
                            }
                            $scope.sendObjectTeamAprob = {
                                id: teamId,
                                status: newStatusAprob,
                                fName: formName,
                                type: 1,
                                phase: 5
                            }


                        })
                        //fin hab forms


                    } else if (userType == "student") {

                        $http.get(`/verified`).then((res) => {
                            var status = res.data[0].status;
                            var s = status.split(',')

                            if (s[3] == 0) {
                                window.location.href = '/home'
                            }


                            if (s[3] == 3) {
                                $("button").prop("disabled", true);
                                $("input").prop("disabled", true);
                                $("textarea").prop("disabled", true);
                                $("#especial").prop("disabled", false);
                                $("#especial1").prop("disabled", false);
                                $("#especial2").prop("disabled", false);
                                $("#especial3").prop("disabled", false);
                            }

                        })

                        $http.get(`/userTeam/${userId}`).then((result) => {
                            $scope.idTeam = result.data;
                            teamId = $scope.idTeam;
                            $http.get(`/forms4/${teamId}`).then((result) => {
                                $scope.forms = result.data;
                                $scope.formComment = $scope.forms.formComments;
                                $scope.parseArrayValues();
                                $scope.checkboxes1p1();
                            })
                            $http.get(`/forms1/${teamId}`).then((result) => {
                                $scope.forms1 = result.data;
                                $scope.parseArrayValues1();
                            })
                        })
                    }

                    // $http.get(`/forms2/${teamId}`).then((result) => {
                    //     $scope.forms = result.data;
                    //     $scope.parseArrayValues();
                    // })
                    // $http.get(`/forms1/${teamId}`).then((result) => {
                    //     $scope.forms1 = result.data;
                    //     $scope.parseArrayValues1();
                    // })

                });

                //hab forms
                $scope.sendObjectTeamHab = {}
                $scope.sendObjectTeamDesHab = {}
                $scope.sendObjectTeamAprob = {}


                $scope.AprobarForm = () => {
                    Swal.fire({
                        title: 'Aprobar Formulario!',
                        text: '¿Estas segur@ de aprobar este formulario? Se notificará a los integrantes de este emprendimiento',
                        type: 'question',
                        showCancelButton: true,
                        cancelButtonColor: '#d33',
                        confirmButtonColor: '#28A745',
                        confirmButtonText: 'Aprobar',
                        cancelButtonText: 'Cancelar'
                    }).then(resultado => {
                        if (resultado.value) {
                            $http.put('/updateStatus', $scope.sendObjectTeamAprob).then(res => {
                                // window.location.href = '/viewForms'  
                                //console.log(res);
                                Swal.fire({
                                    type: 'success',
                                    title: 'Hecho!',
                                    text: 'Se notificó tu aprobación a los estudiantes',
                                    confirmButtonText: 'Ok!'
                                });
                            })
                        }
                    });
                }

                $scope.HabilitarForm = () => {

                    $http.put('/updateStatus', $scope.sendObjectTeamHab).then(res => {
                        window.location.href = '/viewForms'
                    })
                }

                $scope.DesHabilitarForm = () => {
                    $http.put('/updateStatus', $scope.sendObjectTeamDesHab).then(res => {
                        window.location.href = '/viewForms'
                    })

                }
                //fin hab forms

                $scope.parseArrayValues1 = () => {
                    let formText1 = $scope.forms1.formText;
                    let formTextArray1 = formText1.split(";");
                    $scope.product1 = formTextArray1[112];
                    $scope.product2 = formTextArray1[113];
                    $scope.product3 = formTextArray1[187];
                    $scope.count = formTextArray1[260];
                    $scope.checkProducts();
                }
                $scope.checkProducts = () => {
                    if ($scope.count == "1") {
                        document.getElementById("product2").style.display = "none";
                        document.getElementById("product3").style.display = "none";
                    }
                    if ($scope.count == "2") {
                        document.getElementById("product2").style.display = "block";
                        document.getElementById("product3").style.display = "none";
                        $scope.checkboxes1p2();
                    }
                    if ($scope.count == "3") {
                        document.getElementById("product2").style.display = "block";
                        document.getElementById("product3").style.display = "block";
                        $scope.checkboxes1p3();
                    }
                }


                $scope.parseArrayValues = () => {
                    let formText = $scope.forms.formText;
                    let formTextArray = formText.split(';');
                    $scope.input1 = formTextArray[0];
                    $scope.input2 = formTextArray[1];
                    $scope.input3 = formTextArray[2];
                    $scope.input4 = formTextArray[3];
                    $scope.input5 = formTextArray[4];
                    $scope.input6 = formTextArray[5];
                    $scope.input7 = formTextArray[6];
                    $scope.input8 = formTextArray[7];
                    $scope.input9 = formTextArray[8];
                    $scope.input10 = formTextArray[9];
                    $scope.input11 = formTextArray[10];
                    $scope.input12 = formTextArray[11];
                    $scope.input13 = formTextArray[12];
                    $scope.input14 = formTextArray[13];
                    $scope.input15 = formTextArray[14];
                    $scope.input16 = formTextArray[15];
                    $scope.input17 = formTextArray[16];
                    $scope.input18 = formTextArray[17];
                    $scope.input19 = formTextArray[18];
                    $scope.input20 = formTextArray[19];
                    $scope.input21 = formTextArray[20];
                    $scope.input22 = formTextArray[21];
                    $scope.input23 = formTextArray[22];
                    $scope.input24 = formTextArray[23];
                    $scope.input25 = formTextArray[24];
                    $scope.input26 = formTextArray[25];
                    $scope.input27 = formTextArray[26];
                    $scope.input28 = formTextArray[27];
                    $scope.input29 = formTextArray[28];
                    $scope.input30 = formTextArray[29];
                    $scope.input31 = formTextArray[30];
                    $scope.input32 = formTextArray[31];
                    $scope.input33 = formTextArray[32];
                    $scope.input34 = formTextArray[33];
                    $scope.input35 = formTextArray[34];
                    $scope.input36 = formTextArray[35];
                    $scope.input37 = formTextArray[36];
                    $scope.input38 = formTextArray[37];
                    $scope.input39 = formTextArray[38];
                    $scope.input40 = formTextArray[39];
                    $scope.input41 = formTextArray[40];
                    $scope.input411 = formTextArray[41];
                    $scope.input42 = formTextArray[42];
                    $scope.input43 = formTextArray[43];
                    $scope.input44 = formTextArray[44];
                    $scope.input45 = formTextArray[45];
                    $scope.input46 = formTextArray[46];
                    $scope.input47 = formTextArray[47];
                    $scope.input48 = formTextArray[48];
                    $scope.input49 = formTextArray[49];
                    $scope.input50 = formTextArray[50];
                    $scope.input51 = formTextArray[51];
                    $scope.input52 = formTextArray[52];
                    $scope.input53 = formTextArray[53];
                    $scope.input54 = formTextArray[54];
                    $scope.input55 = formTextArray[55];
                    $scope.input56 = formTextArray[56];
                    $scope.input57 = formTextArray[57];
                    $scope.input58 = formTextArray[58];
                    $scope.input59 = formTextArray[59];
                    $scope.input60 = formTextArray[60];
                    $scope.input61 = formTextArray[61];
                    $scope.input62 = formTextArray[62];
                    $scope.input63 = formTextArray[63];
                    $scope.input64 = formTextArray[64];
                    $scope.input65 = formTextArray[65];
                    $scope.input66 = formTextArray[66];
                    $scope.input67 = formTextArray[67];
                    $scope.input68 = formTextArray[68];
                    $scope.input69 = formTextArray[69];
                    $scope.input70 = formTextArray[70];
                    $scope.input71 = formTextArray[71];
                    $scope.input72 = formTextArray[72];
                    $scope.input73 = formTextArray[73];
                    $scope.input74 = formTextArray[74];
                    $scope.input75 = formTextArray[75];
                    $scope.input76 = formTextArray[76];
                    $scope.input77 = formTextArray[77];
                    $scope.input78 = formTextArray[78];
                    $scope.input79 = formTextArray[79];
                    $scope.input80 = formTextArray[80];
                    $scope.input81 = formTextArray[81];
                    $scope.input82 = formTextArray[82];
                    $scope.input83 = formTextArray[83];
                    $scope.input84 = formTextArray[84];
                    $scope.input85 = formTextArray[85];
                    $scope.input86 = formTextArray[86];
                    $scope.input87 = formTextArray[87];
                    $scope.input88 = formTextArray[88];
                    $scope.input89 = formTextArray[89];
                    $scope.input90 = formTextArray[90];
                    $scope.input91 = formTextArray[91];
                    $scope.input92 = formTextArray[92];
                    $scope.input93 = formTextArray[93];
                    $scope.input94 = formTextArray[94];
                    $scope.input95 = formTextArray[95];
                    $scope.input96 = formTextArray[96];
                    $scope.input97 = formTextArray[97];
                    $scope.input98 = formTextArray[98];
                    $scope.input99 = formTextArray[99];
                    $scope.input100 = formTextArray[100];
                    $scope.input101 = formTextArray[101];
                    $scope.input102 = formTextArray[102];
                    $scope.input103 = formTextArray[103];
                    $scope.input104 = formTextArray[104];
                    $scope.input105 = formTextArray[105];
                    $scope.input106 = formTextArray[106];
                    $scope.input107 = formTextArray[107];
                    $scope.input108 = formTextArray[108];
                    $scope.input109 = formTextArray[109];
                    $scope.input110 = formTextArray[110];
                    $scope.input111 = formTextArray[111];
                    $scope.input112 = formTextArray[112];
                    $scope.input113 = formTextArray[113];
                    $scope.input114 = formTextArray[114];
                    $scope.input115 = formTextArray[115];
                    $scope.input116 = formTextArray[116];
                    $scope.input117 = formTextArray[117];
                    $scope.input118 = formTextArray[118];
                    $scope.input119 = formTextArray[119];
                    $scope.input120 = formTextArray[120];
                    $scope.input121 = formTextArray[121];
                    $scope.input122 = formTextArray[122];
                    $scope.input123 = formTextArray[123];
                    $scope.input124 = formTextArray[124];
                    $scope.input125 = formTextArray[125];
                    $scope.input126 = formTextArray[126];
                    $scope.input127 = formTextArray[127];
                    $scope.input128 = formTextArray[128];
                    $scope.input129 = formTextArray[129];
                    $scope.input130 = formTextArray[130];
                    $scope.input131 = formTextArray[131];
                    $scope.input132 = formTextArray[132];
                    $scope.input133 = formTextArray[133];
                    $scope.input134 = formTextArray[134];
                    $scope.input135 = formTextArray[135];
                    $scope.input136 = formTextArray[136];
                    $scope.input137 = formTextArray[137];
                    $scope.input138 = formTextArray[138];
                    $scope.input139 = formTextArray[139];
                    $scope.input140 = formTextArray[140];
                    $scope.input141 = formTextArray[141];
                    $scope.input142 = formTextArray[142];
                    $scope.input143 = formTextArray[143];
                    $scope.input144 = formTextArray[144];
                    $scope.input145 = formTextArray[145];
                    $scope.input146 = formTextArray[146];
                    $scope.input147 = formTextArray[147];
                    $scope.input148 = formTextArray[148];
                    $scope.input149 = formTextArray[149];
                    $scope.input150 = formTextArray[150];
                    $scope.input151 = formTextArray[151];
                    $scope.input152 = formTextArray[152];
                    $scope.input153 = formTextArray[153];
                    $scope.input154 = formTextArray[154];
                    $scope.input155 = formTextArray[155];
                    $scope.input156 = formTextArray[156];
                    $scope.input157 = formTextArray[157];
                    $scope.input158 = formTextArray[158];
                    $scope.input159 = formTextArray[159];
                    $scope.input160 = formTextArray[160];
                    $scope.input161 = formTextArray[161];
                    $scope.input162 = formTextArray[162];
                    $scope.input163 = formTextArray[163];
                    $scope.input164 = formTextArray[164];
                    $scope.input165 = formTextArray[165];
                    $scope.input166 = formTextArray[166];
                    $scope.input167 = formTextArray[167];
                    $scope.input168 = formTextArray[168];
                    $scope.input169 = formTextArray[169];
                    $scope.input170 = formTextArray[170];
                    $scope.input171 = formTextArray[171];
                    $scope.input172 = formTextArray[172];
                    $scope.input173 = formTextArray[173];
                    $scope.input174 = formTextArray[174];
                    $scope.input175 = formTextArray[175];
                    $scope.input176 = formTextArray[176];
                    $scope.input177 = formTextArray[177];
                    $scope.input178 = formTextArray[178];
                    $scope.input179 = formTextArray[179];
                    $scope.input180 = formTextArray[180];
                    $scope.input181 = formTextArray[181];
                    $scope.input182 = formTextArray[182];
                    $scope.input183 = formTextArray[183];
                    $scope.input184 = formTextArray[184];
                    $scope.input185 = formTextArray[185];
                    $scope.input186 = formTextArray[186];
                    $scope.input187 = formTextArray[187];
                    $scope.input188 = formTextArray[188];
                    $scope.input189 = formTextArray[189];
                    $scope.input190 = formTextArray[190];
                    $scope.input191 = formTextArray[191];
                    $scope.input192 = formTextArray[192];
                    $scope.input193 = formTextArray[193];
                    $scope.input194 = formTextArray[194];
                    $scope.input195 = formTextArray[195];
                    $scope.input196 = formTextArray[196];
                    $scope.input197 = formTextArray[197];
                    $scope.input198 = formTextArray[198];
                    $scope.input199 = formTextArray[199];
                    $scope.input200 = formTextArray[200];
                    $scope.input201 = formTextArray[201];
                    $scope.input202 = formTextArray[202];
                    $scope.input203 = formTextArray[203];
                    $scope.input204 = formTextArray[204];
                    $scope.input205 = formTextArray[205];
                    $scope.input206 = formTextArray[206];
                    $scope.input207 = formTextArray[207];
                    $scope.input208 = formTextArray[208];
                    $scope.input209 = formTextArray[209];
                    $scope.input210 = formTextArray[210];
                    $scope.input211 = formTextArray[211];
                    $scope.input212 = formTextArray[212];
                    $scope.input213 = formTextArray[213];
                    $scope.input214 = formTextArray[214];
                    $scope.input215 = formTextArray[215];
                    $scope.input216 = formTextArray[216];
                    $scope.input217 = formTextArray[217];
                    $scope.input218 = formTextArray[218];
                    $scope.input219 = formTextArray[219];
                    $scope.input220 = formTextArray[220];
                    $scope.input221 = formTextArray[221];
                    $scope.input222 = formTextArray[222];
                    $scope.input223 = formTextArray[223];
                    $scope.input224 = formTextArray[224];
                    $scope.input225 = formTextArray[225];
                    $scope.input226 = formTextArray[226];
                    $scope.input227 = formTextArray[227];
                    $scope.input228 = formTextArray[228];
                    $scope.input229 = formTextArray[229];
                    $scope.input230 = formTextArray[230];
                    $scope.input231 = formTextArray[231];
                    $scope.input232 = formTextArray[232];
                    $scope.input233 = formTextArray[233];
                    $scope.input234 = formTextArray[234];
                    $scope.input235 = formTextArray[235];
                    $scope.input236 = formTextArray[236];
                    $scope.input237 = formTextArray[237];
                    $scope.input238 = formTextArray[238];
                    $scope.input239 = formTextArray[239];
                    $scope.input240 = formTextArray[240];
                    $scope.input241 = formTextArray[241];
                    $scope.input242 = formTextArray[242];
                    $scope.input243 = formTextArray[243];
                    $scope.input244 = formTextArray[244];
                    $scope.input245 = formTextArray[245];
                    $scope.input246 = formTextArray[246];
                    $scope.input247 = formTextArray[247];
                    $scope.input248 = formTextArray[248];
                    $scope.input249 = formTextArray[249];
                    $scope.input250 = formTextArray[250];
                    $scope.input251 = formTextArray[251];
                    $scope.input252 = formTextArray[252];
                    $scope.input253 = formTextArray[253];
                    $scope.input254 = formTextArray[254];
                    $scope.input255 = formTextArray[255];
                    $scope.input256 = formTextArray[256];
                    $scope.input257 = formTextArray[257];
                    $scope.input258 = formTextArray[258];
                    $scope.input259 = formTextArray[259];
                    $scope.input260 = formTextArray[260];
                    $scope.input261 = formTextArray[261];
                    $scope.input262 = formTextArray[262];
                    $scope.input263 = formTextArray[263];
                    $scope.input264 = formTextArray[264];
                    $scope.input265 = formTextArray[265];
                    $scope.input266 = formTextArray[266];
                    $scope.input267 = formTextArray[267];
                    $scope.input268 = formTextArray[268];
                    $scope.input269 = formTextArray[269];
                    $scope.input270 = formTextArray[270];
                    $scope.input271 = formTextArray[271];
                    $scope.input272 = formTextArray[272];
                    $scope.input273 = formTextArray[273];
                    $scope.input274 = formTextArray[274];
                    $scope.input275 = formTextArray[275];
                    $scope.input276 = formTextArray[276];
                    $scope.input277 = formTextArray[277];
                    $scope.input278 = formTextArray[278];
                    $scope.input279 = formTextArray[279];
                    $scope.input280 = formTextArray[280];
                    $scope.input281 = formTextArray[281];
                    $scope.input282 = formTextArray[282];
                    $scope.input283 = formTextArray[283];
                    $scope.input284 = formTextArray[284];
                    $scope.input285 = formTextArray[285];
                    $scope.input286 = formTextArray[286];
                    $scope.input287 = formTextArray[287];
                    $scope.input288 = formTextArray[288];
                    $scope.input289 = formTextArray[289];
                    $scope.input290 = formTextArray[290];
                    $scope.input291 = formTextArray[291];
                    $scope.input292 = formTextArray[292];
                    $scope.input293 = formTextArray[293];
                    $scope.input294 = formTextArray[294];
                    $scope.input295 = formTextArray[295];
                    $scope.input296 = formTextArray[296];

                }
                $scope.func1 = function() {
                    //check if input96 value has a letter
                    if (/[a-zA-Z]/.test(document.getElementById("input96").value)) {
                        alert("Please enter a number");
                        $scope.input96 = "";
                    } else {
                        $scope.input97 = document.getElementById("input96").value / document.getElementById(
                            "input95").value;
                    }

                };

                $scope.formTerminado = () => {

                    Swal.fire({
                        title: 'Formulario terminado!',
                        text: 'Estas seguro de que este formulario esta terminado, se notificará a tu docente si es así.',
                        type: 'question',
                        showCancelButton: true,
                        cancelButtonColor: '#d33',
                        confirmButtonColor: '#28A745',
                        confirmButtonText: 'Terminar Formulario',
                        cancelButtonText: 'Cancelar'
                    }).then(resultado => {
                        if (resultado.value) {
                            // Hicieron click en "Sí"
                            $scope.email = {
                                "userID": "{{ Auth::user()->id }}",
                                "form": 'Modelo de negocio y marketing'
                            }

                            $http.post('/sendEmailDone', $scope.email).then((result) => {
                                //console.log(result.data);
                                Swal.fire({
                                    type: 'success',
                                    title: 'Hecho!',
                                    text: 'El formulario se notificó como terminado',
                                    confirmButtonText: 'Ok!'
                                });
                            })
                        }
                    });
                }

                $scope.postComment = () => {
                    var teamId = "";

                    function getId(url = window.location.href) {
                        let urlParts = url.split('/');
                        return urlParts[urlParts.length - 1];
                    }
                    teamId = getId();
                    $scope.comment = {
                        "teamId": teamId,
                        "comment": $scope.formComment,
                        "formName": 'form4'
                    }
                    $http.put('/formComment', $scope.comment).then((result) => {
                        //console.log(result.data);
                        Swal.fire({
                            type: 'success',
                            title: 'Hecho!',
                            text: 'Se guardó el comentario',
                            confirmButtonText: 'Ok!'
                        });
                    })
                }

                $scope.postForm = () => {
                    $scope.checkRadios();
                    let texto = $scope.input1 + ";" + $scope.input2 + ";" + $scope.input3 + ";" + $scope
                        .input4 + ";" + $scope.input5 + ";" + $scope.input6 + ";" + $scope.input7 + ";" +
                        $scope.input8 + ";" + $scope.input9 + ";" + $scope.input10 + ";" + $scope.input11 +
                        ";" + $scope.input12 + ";" + $scope.input13 + ";" + $scope.input14 + ";" + $scope
                        .input15 + ";" + $scope.input16 + ";" + $scope.input17 + ";" + $scope.input18 +
                        ";" + $scope.input19 + ";" + $scope.input20 + ";" + $scope.input21 + ";" + $scope
                        .input22 + ";" + $scope.input23 + ";" + $scope.input24 + ";" + $scope.input25 +
                        ";" + $scope.input26 + ";" + $scope.input27 + ";" + $scope.input28 + ";" + $scope
                        .input29 + ";" + $scope.input30 + ";" + $scope.input31 + ";" + $scope.input32 +
                        ";" + $scope.input33 + ";" + $scope.input34 + ";" + $scope.input35 + ";" + $scope
                        .input36 + ";" + $scope.input37 + ";" + $scope.input38 + ";" + $scope.input39 +
                        ";" + $scope.input40 + ";" + $scope.input41 + ";" + $scope.input411 + ";" + $scope
                        .input42 + ";" + $scope.input43 + ";" + $scope.input44 + ";" + $scope.input45 +
                        ";" + $scope.input46 + ";" + $scope.input47 + ";" + $scope.input48 + ";" + $scope
                        .input49 + ";" + $scope.input50 + ";" + $scope.input51 + ";" + $scope.input52 +
                        ";" + $scope.input53 + ";" + $scope.input54 + ";" + $scope.input55 + ";" + $scope
                        .input56 + ";" + $scope.input57 + ";" + $scope.input58 + ";" + $scope.input59 +
                        ";" + $scope.input60 + ";" + $scope.input61 + ";" + $scope.input62 + ";" + $scope
                        .input63 + ";" + $scope.input64 + ";" + $scope.input65 + ";" + $scope.input66 +
                        ";" + $scope.input67 + ";" + $scope.input68 + ";" + $scope.input69 + ";" + $scope
                        .input70 + ";" + $scope.input71 + ";" + $scope.input72 + ";" + $scope.input73 +
                        ";" + $scope.input74 + ";" + $scope.input75 + ";" + $scope.input76 + ";" + $scope
                        .input77 + ";" + $scope.input78 + ";" + $scope.input79 + ";" + $scope.input80 +
                        ";" + $scope.input81 + ";" + $scope.input82 + ";" + $scope.input83 + ";" + $scope
                        .input84 + ";" + $scope.input85 + ";" + $scope.input86 + ";" + $scope.input87 +
                        ";" + $scope.input88 + ";" + $scope.input89 + ";" + $scope.input90 + ";" + $scope
                        .input91 + ";" + $scope.input92 + ";" + $scope.input93 + ";" + $scope.input94 +
                        ";" + $scope.input95 + ";" + $scope.input96 + ";" + $scope.input97 + ";";
                    let texto2 = $scope.input98 + ";" + $scope.input99 + ";" + $scope.input100 + ";" +
                        $scope.input101 + ";" + $scope.input102 + ";" + $scope.input103 + ";" + $scope
                        .input104 + ";" + $scope.input105 + ";" + $scope.input106 + ";" + $scope.input107 +
                        ";" + $scope.input108 + ";" + $scope.input109 + ";" + $scope.input110 + ";" + $scope
                        .input111 + ";" + $scope.input112 + ";" + $scope.input113 + ";" + $scope.input114 +
                        ";" + $scope.input115 + ";" + $scope.input116 + ";" + $scope.input117 + ";" + $scope
                        .input118 + ";" + $scope.input119 + ";" + $scope.input120 + ";" + $scope.input121 +
                        ";" + $scope.input122 + ";" + $scope.input123 + ";" + $scope.input124 + ";" + $scope
                        .input125 + ";" + $scope.input126 + ";" + $scope.input127 + ";" + $scope.input128 +
                        ";" + $scope.input129 + ";" + $scope.input130 + ";" + $scope.input131 + ";" + $scope
                        .input132 + ";" + $scope.input133 + ";" + $scope.input134 + ";" + $scope.input135 +
                        ";" + $scope.input136 + ";" + $scope.input137 + ";" + $scope.input138 + ";" + $scope
                        .input139 + ";" + $scope.input140 + ";" + $scope.input141 + ";" + $scope.input142 +
                        ";" + $scope.input143 + ";" + $scope.input144 + ";" + $scope.input145 + ";" + $scope
                        .input146 + ";" + $scope.input147 + ";" + $scope.input148 + ";" + $scope.input149 +
                        ";" + $scope.input150 + ";" + $scope.input151 + ";" + $scope.input152 + ";" + $scope
                        .input153 + ";" + $scope.input154 + ";" + $scope.input155 + ";" + $scope.input156 +
                        ";" + $scope.input157 + ";" + $scope.input158 + ";" + $scope.input159 + ";" + $scope
                        .input160 + ";" + $scope.input161 + ";" + $scope.input162 + ";" + $scope.input163 +
                        ";" + $scope.input164 + ";" + $scope.input165 + ";" + $scope.input166 + ";" + $scope
                        .input167 + ";" + $scope.input168 + ";" + $scope.input169 + ";" + $scope.input170 +
                        ";" + $scope.input171 + ";" + $scope.input172 + ";" + $scope.input173 + ";" + $scope
                        .input174 + ";" + $scope.input175 + ";" + $scope.input176 + ";" + $scope.input177 +
                        ";" + $scope.input178 + ";" + $scope.input179 + ";" + $scope.input180 + ";" + $scope
                        .input181 + ";" + $scope.input182 + ";" + $scope.input183 + ";" + $scope.input184 +
                        ";" + $scope.input185 + ";" + $scope.input186 + ";" + $scope.input187 + ";" + $scope
                        .input188 + ";" + $scope.input189 + ";" + $scope.input190 + ";" + $scope.input191 +
                        ";" + $scope.input192 + ";" + $scope.input193 + ";" + $scope.input194 + ";" + $scope
                        .input195 + ";" + $scope.input196 + ";" + $scope.input197 + ";" + $scope.input198 +
                        ";" + $scope.input199 + ";" + $scope.input200 + ";" + $scope.input201 + ";" + $scope
                        .input202 + ";" + $scope.input203 + ";" + $scope.input204 + ";" + $scope.input205 +
                        ";" + $scope.input206 + ";" + $scope.input207 + ";" + $scope.input208 + ";" + $scope
                        .input209 + ";" + $scope.input210 + ";" + $scope.input211 + ";" + $scope.input212 +
                        ";" + $scope.input213 + ";" + $scope.input214 + ";" + $scope.input215 + ";" + $scope
                        .input216 + ";" + $scope.input217 + ";" + $scope.input218 + ";" + $scope.input219 +
                        ";" + $scope.input220 + ";" + $scope.input221 + ";" + $scope.input222 + ";" + $scope
                        .input223 + ";" + $scope.input224 + ";" + $scope.input225 + ";" + $scope.input226 +
                        ";" + $scope.input227 + ";" + $scope.input228 + ";" + $scope.input229 + ";" + $scope
                        .input230 + ";" + $scope.input231 + ";" + $scope.input232 + ";" + $scope.input233 +
                        ";" + $scope.input234 + ";" + $scope.input235 + ";" + $scope.input236 + ";" + $scope
                        .input237 + ";" + $scope.input238 + ";" + $scope.input239 + ";" + $scope.input240 +
                        ";" + $scope.input241 + ";";
                    let texto3 = $scope.input242 + ";" + $scope.input243 + ";" + $scope.input244 + ";" +
                        $scope.input245 + ";" + $scope.input246 + ";" + $scope.input247 + ";" + $scope
                        .input248 + ";" + $scope.input249 + ";" + $scope.input250 + ";" + $scope.input251 +
                        ";" + $scope.input252 + ";" + $scope.input253 + ";" + $scope.input254 + ";" + $scope
                        .input255 + ";" + $scope.input256 + ";" + $scope.input257 + ";" + $scope.input258 +
                        ";" + $scope.input259 + ";" + $scope.input260 + ";" + $scope.input261 + ";" + $scope
                        .input262 + ";" + $scope.input263 + ";" + $scope.input264 + ";" + $scope.input265 +
                        ";" + $scope.input266 + ";" + $scope.input267 + ";" + $scope.input268 + ";" + $scope
                        .input269 + ";" + $scope.input270 + ";" + $scope.input271 + ";" + $scope.input272 +
                        ";" + $scope.input273 + ";" + $scope.input274 + ";" + $scope.input275 + ";" + $scope
                        .input276 + ";" + $scope.input277 + ";" + $scope.input278 + ";" + $scope.input279 +
                        ";" + $scope.input280 + ";" + $scope.input281 + ";" + $scope.input282 + ";" + $scope
                        .input283 + ";" + $scope.input284 + ";" + $scope.input285 + ";" + $scope.input286 +
                        ";" + $scope.input287 + ";" + $scope.input288 + ";" + $scope.input289 + ";" + $scope
                        .input290 + ";" + $scope.input291 + ";" + $scope.input292 + ";" + $scope.input293 +
                        ";" + $scope.input294 + ";" + $scope.input295 + ";" + $scope.input296 + ";";
                    $scope.forms.formText = texto + texto2 + texto3;
                    $http.put('/forms4', $scope.forms).then((result) => {
                        //console.log(result.data);
                        Swal.fire({
                            type: 'success',
                            title: 'Hecho!',
                            text: 'Se guardó el formulario',
                            confirmButtonText: 'Ok!'
                        });
                    })
                }

                $scope.check1p1 = () => {
                    if (document.getElementById("input51").checked == true) {
                        $scope.input51 = true;
                    } else {
                        $scope.input51 = false;
                    }
                    if (document.getElementById("input52").checked == true) {
                        $scope.input52 = true;
                    } else {
                        $scope.input52 = false;
                    }
                    if (document.getElementById("input53").checked == true) {
                        $scope.input53 = true;
                    } else {
                        $scope.input53 = false;
                    }
                    if (document.getElementById("input54").checked == true) {
                        $scope.input54 = true;
                    } else {
                        $scope.input54 = false;
                    }
                    if (document.getElementById("input55").checked == true) {
                        $scope.input55 = true;
                    } else {
                        $scope.input55 = false;
                    }
                    if (document.getElementById("input56").checked == true) {
                        $scope.input56 = true;
                    } else {
                        $scope.input56 = false;
                    }
                    if (document.getElementById("input57").checked == true) {
                        $scope.input57 = true;
                    } else {
                        $scope.input57 = false;
                    }
                    if (document.getElementById("input58").checked == true) {
                        $scope.input58 = true;
                    } else {
                        $scope.input58 = false;
                    }
                    if (document.getElementById("input59").checked == true) {
                        $scope.input59 = true;
                    } else {
                        $scope.input59 = false;
                    }
                    if (document.getElementById("input60").checked == true) {
                        $scope.input60 = true;
                    } else {
                        $scope.input60 = false;
                    }
                }
                $scope.checkboxes1p1 = () => {
                    if ($scope.input51 == "true") {
                        document.getElementById("input51").checked = true;
                    }
                    if ($scope.input52 == "true") {
                        document.getElementById("input52").checked = true;
                    }
                    if ($scope.input53 == "true") {
                        document.getElementById("input53").checked = true;
                    }
                    if ($scope.input54 == "true") {
                        document.getElementById("input54").checked = true;
                    }
                    if ($scope.input55 == "true") {
                        document.getElementById("input55").checked = true;
                    }
                    if ($scope.input56 == "true") {
                        document.getElementById("input56").checked = true;
                    }
                    if ($scope.input57 == "true") {
                        document.getElementById("input57").checked = true;
                    }
                    if ($scope.input58 == "true") {
                        document.getElementById("input58").checked = true;
                    }
                    if ($scope.input59 == "true") {
                        document.getElementById("input59").checked = true;
                    }
                    if ($scope.input60 == "true") {
                        document.getElementById("input60").checked = true;
                    }
                    $scope.check1p1();
                }
                $scope.check1p2 = () => {
                    if (document.getElementById("input150").checked == true) {
                        $scope.input150 = true;
                    } else {
                        $scope.input150 = false;
                    }
                    if (document.getElementById("input151").checked == true) {
                        $scope.input151 = true;
                    } else {
                        $scope.input151 = false;
                    }
                    if (document.getElementById("input152").checked == true) {
                        $scope.input152 = true;
                    } else {
                        $scope.input152 = false;
                    }
                    if (document.getElementById("input153").checked == true) {
                        $scope.input153 = true;
                    } else {
                        $scope.input153 = false;
                    }
                    if (document.getElementById("input154").checked == true) {
                        $scope.input154 = true;
                    } else {
                        $scope.input154 = false;
                    }
                    if (document.getElementById("input155").checked == true) {
                        $scope.input155 = true;
                    } else {
                        $scope.input155 = false;
                    }
                    if (document.getElementById("input156").checked == true) {
                        $scope.input156 = true;
                    } else {
                        $scope.input156 = false;
                    }
                    if (document.getElementById("input157").checked == true) {
                        $scope.input157 = true;
                    } else {
                        $scope.input157 = false;
                    }
                    if (document.getElementById("input158").checked == true) {
                        $scope.input158 = true;
                    } else {
                        $scope.input158 = false;
                    }
                    if (document.getElementById("input159").checked == true) {
                        $scope.input159 = true;
                    } else {
                        $scope.input159 = false;
                    }
                }
                $scope.checkboxes1p2 = () => {
                    if ($scope.input150 == "true") {
                        document.getElementById("input150").checked = true;
                    }
                    if ($scope.input151 == "true") {
                        document.getElementById("input151").checked = true;
                    }
                    if ($scope.input152 == "true") {
                        document.getElementById("input152").checked = true;
                    }
                    if ($scope.input153 == "true") {
                        document.getElementById("input153").checked = true;
                    }
                    if ($scope.input154 == "true") {
                        document.getElementById("input154").checked = true;
                    }
                    if ($scope.input155 == "true") {
                        document.getElementById("input155").checked = true;
                    }
                    if ($scope.input156 == "true") {
                        document.getElementById("input156").checked = true;
                    }
                    if ($scope.input157 == "true") {
                        document.getElementById("input157").checked = true;
                    }
                    if ($scope.input158 == "true") {
                        document.getElementById("input158").checked = true;
                    }
                    if ($scope.input159 == "true") {
                        document.getElementById("input159").checked = true;
                    }
                    $scope.check1p2();
                }
                $scope.check1p3 = () => {
                    if (document.getElementById("input249").checked == true) {
                        $scope.input249 = true;
                    } else {
                        $scope.input249 = false;
                    }
                    if (document.getElementById("input250").checked == true) {
                        $scope.input250 = true;
                    } else {
                        $scope.input250 = false;
                    }
                    if (document.getElementById("input251").checked == true) {
                        $scope.input251 = true;
                    } else {
                        $scope.input251 = false;
                    }
                    if (document.getElementById("input252").checked == true) {
                        $scope.input252 = true;
                    } else {
                        $scope.input252 = false;
                    }
                    if (document.getElementById("input253").checked == true) {
                        $scope.input253 = true;
                    } else {
                        $scope.input253 = false;
                    }
                    if (document.getElementById("input254").checked == true) {
                        $scope.input254 = true;
                    } else {
                        $scope.input254 = false;
                    }
                    if (document.getElementById("input255").checked == true) {
                        $scope.input255 = true;
                    } else {
                        $scope.input255 = false;
                    }
                    if (document.getElementById("input256").checked == true) {
                        $scope.input256 = true;
                    } else {
                        $scope.input256 = false;
                    }
                    if (document.getElementById("input257").checked == true) {
                        $scope.input257 = true;
                    } else {
                        $scope.input257 = false;
                    }
                    if (document.getElementById("input258").checked == true) {
                        $scope.input258 = true;
                    } else {
                        $scope.input258 = false;
                    }
                }
                $scope.checkboxes1p3 = () => {
                    if ($scope.input249 == "true") {
                        document.getElementById("input249").checked = true;
                    }
                    if ($scope.input250 == "true") {
                        document.getElementById("input250").checked = true;
                    }
                    if ($scope.input251 == "true") {
                        document.getElementById("input251").checked = true;
                    }
                    if ($scope.input252 == "true") {
                        document.getElementById("input252").checked = true;
                    }
                    if ($scope.input253 == "true") {
                        document.getElementById("input253").checked = true;
                    }
                    if ($scope.input254 == "true") {
                        document.getElementById("input254").checked = true;
                    }
                    if ($scope.input255 == "true") {
                        document.getElementById("input255").checked = true;
                    }
                    if ($scope.input256 == "true") {
                        document.getElementById("input256").checked = true;
                    }
                    if ($scope.input257 == "true") {
                        document.getElementById("input257").checked = true;
                    }
                    if ($scope.input258 == "true") {
                        document.getElementById("input258").checked = true;
                    }
                    $scope.check1p3();
                }

                $scope.checkRadios = () => {
                    $scope.checkRadio1();
                    $scope.checkRadio2();
                    $scope.checkRadio3();
                    $scope.checkRadio4();
                    $scope.checkRadio5();
                    $scope.checkRadio6();
                    $scope.checkRadio7();
                    $scope.checkRadio8();
                    $scope.checkRadio9();
                    $scope.checkRadio10();
                    $scope.checkRadio11();
                    $scope.checkRadio12();
                    $scope.checkRadio13();
                    $scope.checkRadio14();
                    $scope.checkRadio15();
                    $scope.checkRadio16();
                    $scope.checkRadio17();
                    $scope.checkRadio18();
                }
                $scope.checkRadio1 = () => {
                    //select the value from document.getElementByName('radio1') where checked = true
                    let inf1 = "";
                    let radio1 = document.getElementsByName('radio1');
                    for (let i = 0; i < radio1.length; i++) {
                        if (radio1[i].checked) {
                            inf1 = radio1[i].value;
                        }
                    }
                    if (inf1 == "option1") {
                        $scope.input2 = 'option1';
                        $scope.input3 = ' ';
                        $scope.input4 = ' ';
                        $scope.input5 = ' ';
                        $scope.input6 = ' ';

                    } else if (inf1 == "option2") {
                        $scope.input2 = ' ';
                        $scope.input3 = 'option2';
                        $scope.input4 = ' ';
                        $scope.input5 = ' ';
                        $scope.input6 = ' ';
                    } else if (inf1 == "option3") {
                        $scope.input2 = ' ';
                        $scope.input3 = ' ';
                        $scope.input4 = 'option3';
                        $scope.input5 = ' ';
                        $scope.input6 = ' ';
                    } else if (inf1 == "option4") {
                        $scope.input2 = ' ';
                        $scope.input3 = ' ';
                        $scope.input4 = ' ';
                        $scope.input5 = 'option4';
                        $scope.input6 = ' ';
                    } else if (inf1 == "option5") {
                        $scope.input2 = ' ';
                        $scope.input3 = ' ';
                        $scope.input4 = ' ';
                        $scope.input5 = ' ';
                        $scope.input6 = 'option5';
                    } else {
                        $scope.input2 = ' ';
                        $scope.input3 = ' ';
                        $scope.input4 = ' ';
                        $scope.input5 = ' ';
                        $scope.input6 = ' ';
                    }
                }
                $scope.checkRadio2 = () => {
                    //select the value from document.getElementByName('radio1') where checked = true
                    let inf2 = "";
                    let radio2 = document.getElementsByName('radio2');
                    for (let i = 0; i < radio2.length; i++) {
                        if (radio2[i].checked) {
                            inf2 = radio2[i].value;
                        }
                    }
                    if (inf2 == "option1") {
                        $scope.input8 = 'option1';
                        $scope.input9 = ' ';
                        $scope.input10 = ' ';
                        $scope.input11 = ' ';
                        $scope.input12 = ' ';
                    } else if (inf2 == "option2") {
                        $scope.input8 = ' ';
                        $scope.input9 = 'option2';
                        $scope.input10 = ' ';
                        $scope.input11 = ' ';
                        $scope.input12 = ' ';
                    } else if (inf2 == "option3") {
                        $scope.input8 = ' ';
                        $scope.input9 = ' ';
                        $scope.input10 = 'option3';
                        $scope.input11 = ' ';
                        $scope.input12 = ' ';
                    } else if (inf2 == "option4") {
                        $scope.input8 = ' ';
                        $scope.input9 = ' ';
                        $scope.input10 = ' ';
                        $scope.input11 = 'option4';
                        $scope.input12 = ' ';
                    } else if (inf2 == "option5") {
                        $scope.input8 = ' ';
                        $scope.input9 = ' ';
                        $scope.input10 = ' ';
                        $scope.input11 = ' ';
                        $scope.input12 = 'option5';
                    } else {
                        $scope.input8 = ' ';
                        $scope.input9 = ' ';
                        $scope.input10 = ' ';
                        $scope.input11 = ' ';
                        $scope.input12 = ' ';
                    }
                }
                $scope.checkRadio3 = () => {
                    //select the value from document.getElementByName('radio1') where checked = true
                    let inf3 = "";
                    let radio3 = document.getElementsByName('radio3');
                    for (let i = 0; i < radio3.length; i++) {
                        if (radio3[i].checked) {
                            inf3 = radio3[i].value;
                        }
                    }
                    if (inf3 == "option1") {
                        $scope.input14 = 'option1';
                        $scope.input15 = ' ';
                        $scope.input16 = ' ';
                        $scope.input17 = ' ';
                        $scope.input18 = ' ';
                    } else if (inf3 == "option2") {
                        $scope.input14 = ' ';
                        $scope.input15 = 'option2';
                        $scope.input16 = ' ';
                        $scope.input17 = ' ';
                        $scope.input18 = ' ';
                    } else if (inf3 == "option3") {
                        $scope.input14 = ' ';
                        $scope.input15 = ' ';
                        $scope.input16 = 'option3';
                        $scope.input17 = ' ';
                        $scope.input18 = ' ';
                    } else if (inf3 == "option4") {
                        $scope.input14 = ' ';
                        $scope.input15 = ' ';
                        $scope.input16 = ' ';
                        $scope.input17 = 'option4';
                        $scope.input18 = ' ';
                    } else if (inf3 == "option5") {
                        $scope.input14 = ' ';
                        $scope.input15 = ' ';
                        $scope.input16 = ' ';
                        $scope.input17 = ' ';
                        $scope.input18 = 'option5';
                    } else {
                        $scope.input14 = ' ';
                        $scope.input15 = ' ';
                        $scope.input16 = ' ';
                        $scope.input17 = ' ';
                        $scope.input18 = ' ';
                    }
                }
                $scope.checkRadio4 = () => {
                    //select the value from document.getElementByName('radio1') where checked = true
                    let inf4 = "";
                    let radio4 = document.getElementsByName('radio4');
                    for (let i = 0; i < radio4.length; i++) {
                        if (radio4[i].checked) {
                            inf4 = radio4[i].value;
                        }
                    }
                    if (inf4 == "option1") {
                        $scope.input20 = 'option1';
                        $scope.input21 = ' ';
                        $scope.input22 = ' ';
                        $scope.input23 = ' ';
                        $scope.input24 = ' ';
                    } else if (inf4 == "option2") {
                        $scope.input20 = ' ';
                        $scope.input21 = 'option2';
                        $scope.input22 = ' ';
                        $scope.input23 = ' ';
                        $scope.input24 = ' ';
                    } else if (inf4 == "option3") {
                        $scope.input20 = ' ';
                        $scope.input21 = ' ';
                        $scope.input22 = 'option3';
                        $scope.input23 = ' ';
                        $scope.input24 = ' ';
                    } else if (inf4 == "option4") {
                        $scope.input20 = ' ';
                        $scope.input21 = ' ';
                        $scope.input22 = ' ';
                        $scope.input23 = 'option4';
                        $scope.input24 = ' ';
                    } else if (inf4 == "option5") {
                        $scope.input20 = ' ';
                        $scope.input21 = ' ';
                        $scope.input22 = ' ';
                        $scope.input23 = ' ';
                        $scope.input24 = 'option5';
                    } else {
                        $scope.input20 = ' ';
                        $scope.input21 = ' ';
                        $scope.input22 = ' ';
                        $scope.input23 = ' ';
                        $scope.input24 = ' ';
                    }
                }
                $scope.checkRadio5 = () => {
                    //select the value from document.getElementByName('radio1') where checked = true
                    let inf5 = "";
                    let radio5 = document.getElementsByName('radio5');
                    for (let i = 0; i < radio5.length; i++) {
                        if (radio5[i].checked) {
                            inf5 = radio5[i].value;
                        }
                    }
                    if (inf5 == "option1") {
                        $scope.input26 = 'option1';
                        $scope.input27 = ' ';
                        $scope.input28 = ' ';
                        $scope.input29 = ' ';
                        $scope.input30 = ' ';
                    } else if (inf5 == "option2") {
                        $scope.input26 = ' ';
                        $scope.input27 = 'option2';
                        $scope.input28 = ' ';
                        $scope.input29 = ' ';
                        $scope.input30 = ' ';
                    } else if (inf5 == "option3") {
                        $scope.input26 = ' ';
                        $scope.input27 = ' ';
                        $scope.input28 = 'option3';
                        $scope.input29 = ' ';
                        $scope.input30 = ' ';
                    } else if (inf5 == "option4") {
                        $scope.input26 = ' ';
                        $scope.input27 = ' ';
                        $scope.input28 = ' ';
                        $scope.input29 = 'option4';
                        $scope.input30 = ' ';
                    } else if (inf5 == "option5") {
                        $scope.input26 = ' ';
                        $scope.input27 = ' ';
                        $scope.input28 = ' ';
                        $scope.input29 = ' ';
                        $scope.input30 = 'option5';
                    } else {
                        $scope.input26 = ' ';
                        $scope.input27 = ' ';
                        $scope.input28 = ' ';
                        $scope.input29 = ' ';
                        $scope.input30 = ' ';
                    }
                }
                $scope.checkRadio6 = () => {
                    //select the value from document.getElementByName('radio1') where checked = true
                    let inf6 = "";
                    let radio6 = document.getElementsByName('radio6');
                    for (let i = 0; i < radio6.length; i++) {
                        if (radio6[i].checked) {
                            inf6 = radio6[i].value;
                        }
                    }
                    if (inf6 == "option1") {
                        $scope.input32 = 'option1';
                        $scope.input33 = ' ';
                        $scope.input34 = ' ';
                        $scope.input35 = ' ';
                        $scope.input36 = ' ';
                    } else if (inf6 == "option2") {
                        $scope.input32 = ' ';
                        $scope.input33 = 'option2';
                        $scope.input34 = ' ';
                        $scope.input35 = ' ';
                        $scope.input36 = ' ';
                    } else if (inf6 == "option3") {
                        $scope.input32 = ' ';
                        $scope.input33 = ' ';
                        $scope.input34 = 'option3';
                        $scope.input35 = ' ';
                        $scope.input36 = ' ';
                    } else if (inf6 == "option4") {
                        $scope.input32 = ' ';
                        $scope.input33 = ' ';
                        $scope.input34 = ' ';
                        $scope.input35 = 'option4';
                        $scope.input36 = ' ';
                    } else if (inf6 == "option5") {
                        $scope.input32 = ' ';
                        $scope.input33 = ' ';
                        $scope.input34 = ' ';
                        $scope.input35 = ' ';
                        $scope.input36 = 'option5';
                    } else {
                        $scope.input32 = ' ';
                        $scope.input33 = ' ';
                        $scope.input34 = ' ';
                        $scope.input35 = ' ';
                        $scope.input36 = ' ';
                    }
                }
                $scope.checkRadio7 = () => {
                    //select the value from document.getElementByName('radio1') where checked = true
                    let inf7 = "";
                    let radio7 = document.getElementsByName('radio7');
                    for (let i = 0; i < radio7.length; i++) {
                        if (radio7[i].checked) {
                            inf7 = radio7[i].value;
                        }
                    }
                    if (inf7 == "option1") {
                        $scope.input38 = 'option1';
                        $scope.input39 = ' ';
                        $scope.input40 = ' ';
                        $scope.input41 = ' ';
                    } else if (inf7 == "option2") {
                        $scope.input38 = ' ';
                        $scope.input39 = 'option2';
                        $scope.input40 = ' ';
                        $scope.input41 = ' ';
                    } else if (inf7 == "option3") {
                        $scope.input38 = ' ';
                        $scope.input39 = ' ';
                        $scope.input40 = 'option3';
                        $scope.input41 = ' ';
                    } else if (inf7 == "option4") {
                        $scope.input38 = ' ';
                        $scope.input39 = ' ';
                        $scope.input40 = ' ';
                        $scope.input41 = 'option4';
                    } else {
                        $scope.input38 = ' ';
                        $scope.input39 = ' ';
                        $scope.input40 = ' ';
                        $scope.input41 = ' ';
                    }
                }
                $scope.checkRadio8 = () => {
                    //select the value from document.getElementByName('radio1') where checked = true
                    let inf8 = "";
                    let radio8 = document.getElementsByName('radio8');
                    for (let i = 0; i < radio8.length; i++) {
                        if (radio8[i].checked) {
                            inf8 = radio8[i].value;
                        }
                    }
                    if (inf8 == "option1") {
                        $scope.input42 = 'option1';
                        $scope.input43 = ' ';
                        $scope.input44 = ' ';
                        $scope.input45 = ' ';
                    } else if (inf8 == "option2") {
                        $scope.input42 = ' ';
                        $scope.input43 = 'option2';
                        $scope.input44 = ' ';
                        $scope.input45 = ' ';
                    } else if (inf8 == "option3") {
                        $scope.input42 = ' ';
                        $scope.input43 = ' ';
                        $scope.input44 = 'option3';
                        $scope.input45 = ' ';
                    } else if (inf8 == "option4") {
                        $scope.input42 = ' ';
                        $scope.input43 = ' ';
                        $scope.input44 = ' ';
                        $scope.input45 = 'option4';
                    } else {
                        $scope.input42 = ' ';
                        $scope.input43 = ' ';
                        $scope.input44 = ' ';
                        $scope.input45 = ' ';
                    }
                }
                $scope.checkRadio9 = () => {
                    let inf9 = "";
                    let radio9 = document.getElementsByName('radio9');
                    for (let i = 0; i < radio9.length; i++) {
                        if (radio9[i].checked) {
                            inf9 = radio9[i].value;
                        }
                    }
                    if (inf9 == "option1") {
                        $scope.input47 = 'option1';
                        $scope.input48 = ' ';
                        $scope.input49 = ' ';
                        $scope.input50 = ' ';
                    } else if (inf9 == "option2") {
                        $scope.input47 = ' ';
                        $scope.input48 = 'option2';
                        $scope.input49 = ' ';
                        $scope.input50 = ' ';
                    } else if (inf9 == "option3") {
                        $scope.input47 = ' ';
                        $scope.input48 = ' ';
                        $scope.input49 = 'option3';
                        $scope.input50 = ' ';
                    } else if (inf9 == "option4") {
                        $scope.input47 = ' ';
                        $scope.input48 = ' ';
                        $scope.input49 = ' ';
                        $scope.input50 = 'option4';
                    } else {
                        $scope.input47 = ' ';
                        $scope.input48 = ' ';
                        $scope.input49 = ' ';
                        $scope.input50 = ' ';
                    }
                }
                $scope.checkRadio10 = () => {
                    let inf10 = "";
                    let radio10 = document.getElementsByName('radio10');
                    for (let i = 0; i < radio10.length; i++) {
                        if (radio10[i].checked) {
                            inf10 = radio10[i].value;
                        }
                    }
                    if (inf10 == "option1") {
                        $scope.input100 = 'option1';
                        $scope.input101 = ' ';
                        $scope.input102 = ' ';
                        $scope.input103 = ' ';
                        $scope.input104 = ' ';
                    } else if (inf10 == "option2") {
                        $scope.input100 = ' ';
                        $scope.input101 = 'option2';
                        $scope.input102 = ' ';
                        $scope.input103 = ' ';
                        $scope.input104 = ' ';
                    } else if (inf10 == "option3") {
                        $scope.input100 = ' ';
                        $scope.input101 = ' ';
                        $scope.input102 = 'option3';
                        $scope.input103 = ' ';
                        $scope.input104 = ' ';
                    } else if (inf10 == "option4") {
                        $scope.input100 = ' ';
                        $scope.input101 = ' ';
                        $scope.input102 = ' ';
                        $scope.input103 = 'option4';
                        $scope.input104 = ' ';
                    } else if (inf10 == "option5") {
                        $scope.input100 = ' ';
                        $scope.input101 = ' ';
                        $scope.input102 = ' ';
                        $scope.input103 = ' ';
                        $scope.input104 = 'option5';
                    } else {
                        $scope.input100 = ' ';
                        $scope.input101 = ' ';
                        $scope.input102 = ' ';
                        $scope.input103 = ' ';
                        $scope.input104 = ' ';
                    }

                }
                $scope.checkRadio11 = () => {
                    let inf11 = "";
                    let radio11 = document.getElementsByName('radio11');
                    for (let i = 0; i < radio11.length; i++) {
                        if (radio11[i].checked) {
                            inf11 = radio11[i].value;
                        }
                    }
                    if (inf11 == "option1") {
                        $scope.input106 = 'option1';
                        $scope.input107 = ' ';
                        $scope.input108 = ' ';
                        $scope.input109 = ' ';
                        $scope.input110 = ' ';
                    } else if (inf11 == "option2") {
                        $scope.input106 = ' ';
                        $scope.input107 = 'option2';
                        $scope.input108 = ' ';
                        $scope.input109 = ' ';
                        $scope.input110 = ' ';
                    } else if (inf11 == "option3") {
                        $scope.input106 = ' ';
                        $scope.input107 = ' ';
                        $scope.input108 = 'option3';
                        $scope.input109 = ' ';
                        $scope.input110 = ' ';
                    } else if (inf11 == "option4") {
                        $scope.input106 = ' ';
                        $scope.input107 = ' ';
                        $scope.input108 = ' ';
                        $scope.input109 = 'option4';
                        $scope.input110 = ' ';
                    } else if (inf11 == "option5") {
                        $scope.input106 = ' ';
                        $scope.input107 = ' ';
                        $scope.input108 = ' ';
                        $scope.input109 = ' ';
                        $scope.input110 = 'option5';
                    } else {
                        $scope.input106 = ' ';
                        $scope.input107 = ' ';
                        $scope.input108 = ' ';
                        $scope.input109 = ' ';
                        $scope.input110 = ' ';
                    }

                }
                $scope.checkRadio12 = () => {
                    let inf12 = "";
                    let radio12 = document.getElementsByName('radio12');
                    for (let i = 0; i < radio12.length; i++) {
                        if (radio12[i].checked) {
                            inf12 = radio12[i].value;
                        }
                    }
                    if (inf12 == "option1") {
                        $scope.input112 = 'option1';
                        $scope.input113 = ' ';
                        $scope.input114 = ' ';
                        $scope.input115 = ' ';
                        $scope.input116 = ' ';
                    } else if (inf12 == "option2") {
                        $scope.input112 = ' ';
                        $scope.input113 = 'option2';
                        $scope.input114 = ' ';
                        $scope.input115 = ' ';
                        $scope.input116 = ' ';
                    } else if (inf12 == "option3") {
                        $scope.input112 = ' ';
                        $scope.input113 = ' ';
                        $scope.input114 = 'option3';
                        $scope.input115 = ' ';
                        $scope.input116 = ' ';
                    } else if (inf12 == "option4") {
                        $scope.input112 = ' ';
                        $scope.input113 = ' ';
                        $scope.input114 = ' ';
                        $scope.input115 = 'option4';
                        $scope.input116 = ' ';
                    } else if (inf12 == "option5") {
                        $scope.input112 = ' ';
                        $scope.input113 = ' ';
                        $scope.input114 = ' ';
                        $scope.input115 = ' ';
                        $scope.input116 = 'option5';
                    } else {
                        $scope.input112 = ' ';
                        $scope.input113 = ' ';
                        $scope.input114 = ' ';
                        $scope.input115 = ' ';
                        $scope.input116 = ' ';
                    }
                }
                $scope.checkRadio13 = () => {
                    let inf13 = "";
                    let radio13 = document.getElementsByName('radio13');
                    for (let i = 0; i < radio13.length; i++) {
                        if (radio13[i].checked) {
                            inf13 = radio13[i].value;
                        }
                    }
                    if (inf13 == "option1") {
                        $scope.input118 = 'option1';
                        $scope.input119 = ' ';
                        $scope.input120 = ' ';
                        $scope.input121 = ' ';
                        $scope.input122 = ' ';
                    } else if (inf13 == "option2") {
                        $scope.input118 = ' ';
                        $scope.input119 = 'option2';
                        $scope.input120 = ' ';
                        $scope.input121 = ' ';
                        $scope.input122 = ' ';
                    } else if (inf13 == "option3") {
                        $scope.input118 = ' ';
                        $scope.input119 = ' ';
                        $scope.input120 = 'option3';
                        $scope.input121 = ' ';
                        $scope.input122 = ' ';
                    } else if (inf13 == "option4") {
                        $scope.input118 = ' ';
                        $scope.input119 = ' ';
                        $scope.input120 = ' ';
                        $scope.input121 = 'option4';
                        $scope.input122 = ' ';
                    } else if (inf13 == "option5") {
                        $scope.input118 = ' ';
                        $scope.input119 = ' ';
                        $scope.input120 = ' ';
                        $scope.input121 = ' ';
                        $scope.input122 = 'option5';
                    } else {
                        $scope.input118 = ' ';
                        $scope.input119 = ' ';
                        $scope.input120 = ' ';
                        $scope.input121 = ' ';
                        $scope.input122 = ' ';
                    }
                }
                $scope.checkRadio14 = () => {
                    let inf14 = "";
                    let radio14 = document.getElementsByName('radio14');
                    for (let i = 0; i < radio14.length; i++) {
                        if (radio14[i].checked) {
                            inf14 = radio14[i].value;
                        }
                    }
                    if (inf14 == "option1") {
                        $scope.input124 = 'option1';
                        $scope.input125 = ' ';
                        $scope.input126 = ' ';
                        $scope.input127 = ' ';
                        $scope.input128 = ' ';
                    } else if (inf14 == "option2") {
                        $scope.input124 = ' ';
                        $scope.input125 = 'option2';
                        $scope.input126 = ' ';
                        $scope.input127 = ' ';
                        $scope.input128 = ' ';
                    } else if (inf14 == "option3") {
                        $scope.input124 = ' ';
                        $scope.input125 = ' ';
                        $scope.input126 = 'option3';
                        $scope.input127 = ' ';
                        $scope.input128 = ' ';
                    } else if (inf14 == "option4") {
                        $scope.input124 = ' ';
                        $scope.input125 = ' ';
                        $scope.input126 = ' ';
                        $scope.input127 = 'option4';
                        $scope.input128 = ' ';
                    } else if (inf14 == "option5") {
                        $scope.input124 = ' ';
                        $scope.input125 = ' ';
                        $scope.input126 = ' ';
                        $scope.input127 = ' ';
                        $scope.input128 = 'option5';
                    } else {
                        $scope.input124 = ' ';
                        $scope.input125 = ' ';
                        $scope.input126 = ' ';
                        $scope.input127 = ' ';
                        $scope.input128 = ' ';
                    }
                }
                $scope.checkRadio15 = () => {
                    let inf15 = "";
                    let radio15 = document.getElementsByName('radio15');
                    for (let i = 0; i < radio15.length; i++) {
                        if (radio15[i].checked) {
                            inf15 = radio15[i].value;
                        }
                    }
                    if (inf15 == "option1") {
                        $scope.input130 = 'option1';
                        $scope.input131 = ' ';
                        $scope.input132 = ' ';
                        $scope.input133 = ' ';
                        $scope.input134 = ' ';
                    } else if (inf15 == "option2") {
                        $scope.input130 = ' ';
                        $scope.input131 = 'option2';
                        $scope.input132 = ' ';
                        $scope.input133 = ' ';
                        $scope.input134 = ' ';
                    } else if (inf15 == "option3") {
                        $scope.input130 = ' ';
                        $scope.input131 = ' ';
                        $scope.input132 = 'option3';
                        $scope.input133 = ' ';
                        $scope.input134 = ' ';
                    } else if (inf15 == "option4") {
                        $scope.input130 = ' ';
                        $scope.input131 = ' ';
                        $scope.input132 = ' ';
                        $scope.input133 = 'option4';
                        $scope.input134 = ' ';
                    } else if (inf15 == "option5") {
                        $scope.input130 = ' ';
                        $scope.input131 = ' ';
                        $scope.input132 = ' ';
                        $scope.input133 = ' ';
                        $scope.input134 = 'option5';
                    } else {
                        $scope.input130 = ' ';
                        $scope.input131 = ' ';
                        $scope.input132 = ' ';
                        $scope.input133 = ' ';
                        $scope.input134 = ' ';
                    }
                }
                $scope.checkRadio16 = () => {
                    let inf16 = "";
                    let radio16 = document.getElementsByName('radio16');
                    for (let i = 0; i < radio16.length; i++) {
                        if (radio16[i].checked) {
                            inf16 = radio16[i].value;
                        }
                    }
                    if (inf16 == "option1") {
                        $scope.input136 = 'option1';
                        $scope.input137 = ' ';
                        $scope.input138 = ' ';
                        $scope.input139 = ' ';
                    } else if (inf16 == "option2") {
                        $scope.input136 = ' ';
                        $scope.input137 = 'option2';
                        $scope.input138 = ' ';
                        $scope.input139 = ' ';
                    } else if (inf16 == "option3") {
                        $scope.input136 = ' ';
                        $scope.input137 = ' ';
                        $scope.input138 = 'option3';
                        $scope.input139 = ' ';
                    } else if (inf16 == "option4") {
                        $scope.input136 = ' ';
                        $scope.input137 = ' ';
                        $scope.input138 = ' ';
                        $scope.input139 = 'option4';
                    } else {
                        $scope.input136 = ' ';
                        $scope.input137 = ' ';
                        $scope.input138 = ' ';
                        $scope.input139 = ' ';
                    }
                }
                $scope.checkRadio17 = () => {
                    let inf17 = "";
                    let radio17 = document.getElementsByName('radio17');
                    for (let i = 0; i < radio17.length; i++) {
                        if (radio17[i].checked) {
                            inf17 = radio17[i].value;
                        }
                    }
                    if (inf17 == "option1") {
                        $scope.input141 = 'option1';
                        $scope.input142 = ' ';
                        $scope.input143 = ' ';
                        $scope.input144 = ' ';
                    } else if (inf17 == "option2") {
                        $scope.input141 = ' ';
                        $scope.input142 = 'option2';
                        $scope.input143 = ' ';
                        $scope.input144 = ' ';
                    } else if (inf17 == "option3") {
                        $scope.input141 = ' ';
                        $scope.input142 = ' ';
                        $scope.input143 = 'option3';
                        $scope.input144 = ' ';
                    } else if (inf17 == "option4") {
                        $scope.input141 = ' ';
                        $scope.input142 = ' ';
                        $scope.input143 = ' ';
                        $scope.input144 = 'option4';
                    } else {
                        $scope.input141 = ' ';
                        $scope.input142 = ' ';
                        $scope.input143 = ' ';
                        $scope.input144 = ' ';
                    }
                }
                $scope.checkRadio18 = () => {
                    let inf18 = "";
                    let radio18 = document.getElementsByName('radio18');
                    for (let i = 0; i < radio18.length; i++) {
                        if (radio18[i].checked) {
                            inf18 = radio18[i].value;
                        }
                    }
                    if (inf18 == "option1") {
                        $scope.input146 = 'option1';
                        $scope.input147 = ' ';
                        $scope.input148 = ' ';
                        $scope.input149 = ' ';
                    } else if (inf18 == "option2") {
                        $scope.input146 = ' ';
                        $scope.input147 = 'option2';
                        $scope.input148 = ' ';
                        $scope.input149 = ' ';
                    } else if (inf18 == "option3") {
                        $scope.input146 = ' ';
                        $scope.input147 = ' ';
                        $scope.input148 = 'option3';
                        $scope.input149 = ' ';
                    } else if (inf18 == "option4") {
                        $scope.input146 = ' ';
                        $scope.input147 = ' ';
                        $scope.input148 = ' ';
                        $scope.input149 = 'option4';
                    } else {
                        $scope.input146 = ' ';
                        $scope.input147 = ' ';
                        $scope.input148 = ' ';
                        $scope.input149 = ' ';
                    }
                }
            });
            </script>
        </div>
    </div>

</div>


@endsection