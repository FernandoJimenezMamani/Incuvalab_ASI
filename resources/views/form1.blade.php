@extends('layouts.Dashboard')
@section('content')
<style type="text/css">
.backgroundGrey {
    background-color: #5A5C69;
    font-weight: bold;
}

.backgroundWhite {
    background-color: #FFFFFF;
    color: #5A5C69;
    font-weight: bold;
}

.bolder {
    font-weight: bold;
}
</style>
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
                        <!-- <button ng-Click="AprobarForm()" class="btn btn-primary"
                            style="position:fixed; z-index:1; top:75%;left:2%; ">Aprobar</button> -->
                            <button onclick="window.print()" class="btn btn-success">Descargar</button>
                        @endif
                        @if (Auth::user()->userType == 'student')
                        <div class="d-flex justify-content-center">

                            <button id="btnGuardar" type="submit" ng-click="postForm()"
                                class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="fas fa-pencil fa-sm text-white-50 "></i> Guardar</button>

                            <button onclick="window.print()" class="btn btn-primary">Descargar</button>
                        </div>
                        @endif
                    </div>
                    <p id="userId" hidden>{{Auth::user()->id}}</p>
                    <p id="userRole" hidden>{{Auth::user()->userType}}</p>

                    @if (Auth::user()->userType == 'teacher')

                    @endif

                    <h1 class="text-center font-weight-bold">Propuesta de Valor</h1>
                    <br>
                    <h4 class="text-center app-subtitle backgroundGrey">Árbol de problemas</h4>
                    <br>
                    <div>

                        <div class="mb-3">
                            <h4 for="" class="text-left bolder">¿Cuál es el problema central de tus clientes que estás
                                resolviendo?</h4>
                            <p>Define el problema principal que estás tratando de abordar con tu proyecto. Asegúrate de que sólo estás describiendo el problema general aquí. En esta actividad irás desglosando las causas de ese problema.</p>
                            <input type="text" class="form-control" ng-model="input1" id="input1">
                        </div>
                        <div class="table-responsive">
                            <h4 class="bolder">¿Cuáles son las principales razones por las que existe este problema?</h4>
                            <p>Escribe un máximo de tres razones y, a continuación, añade las causas de cada una de ellas hasta que ya no puedas escribir más. </p>
                            <table class="table text-white table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label bg-dark border rounded pl-3 pr-3">Razón 1</label>
                                                <input type="text" class="form-control" ng-model="input2" id="input2">
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label bg-dark border rounded pl-3 pr-3">Razón 2</label>
                                                <input type="text" class="form-control" ng-model="input3" id="input3">
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label bg-dark border rounded pl-3 pr-3">Razón 3</label>
                                                <input type="text" class="form-control" ng-model="input4" id="input4">
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Causa 1</td>
                                        <td>Causa 2</td>
                                        <td>Causa 3</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input5" id="input5">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input6" id="input6">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input7" id="input7">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input8" id="input8">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input9" id="input9">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input10" id="input10">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input11" id="input11">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input12" id="input12">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input13" id="input13">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input14" id="input14">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input15" id="input15">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input16" id="input16">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input17" id="input17">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input18" id="input18">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input19" id="input19">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input20" id="input20">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input21" id="input21">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input22" id="input22">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <h4 class="text-center app-subtitle backgroundGrey">Relación Problema/Solución</h4>
                    <br>
                    <div>
                        <div class="table-responsive">
                            <h5>De entre y razones y causas que has enumerado, elige aquellos que quieras que tu negocio resuelva</h5>

                            <table class="table text-white table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="">
                                                <input type="text" class="form-control" style="border: 4px solid #5A5C69;padding: 20px;" ng-model="input23" id="input23">
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <input type="text" class="form-control" style="border: 4px solid #5A5C69;padding: 20px;" ng-model="input24" id="input24">
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <input type="text" class="form-control" style="border: 4px solid #5A5C69;padding: 20px;" ng-model="input25" id="input25">
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input26" id="input26">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input27" id="input27">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input28" id="input28">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input29" id="input29">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input30" id="input30">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input31" id="input31">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input32" id="input32">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input33" id="input33">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input34" id="input34">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input35" id="input35">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input36" id="input36">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input37" id="input37">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mb-3">
                            <h4 for="" class="text-left bolder">¿Cómo va a intentar solucionar tu negocio esos problemas?</h4>
                            <p>Describe las ideas que tienes sobre las posibles soluciones que quieres ofrecer.</p>
                            <textarea type="" class="form-control " ng-model="input38" id="input38"></textarea>
                        </div>
                    </div>
                    <br>
                    <h4 class="text-center app-subtitle backgroundGrey">Oferta</h4>
                    <br>
                    <div>
                        <div class="mb-3">
                            <h4 for="" class="text-left bolder">Utiliza la descripción de tu solución para crear tu producto/servicio.</h4>
                            <p>Intenta definir cada producto o servicio en 1-3 palabras. Ten en cuenta que trabajarás con esos productos y servicios durante todo el programa de incubación</p>
                            <textarea type="" class="form-control " ng-model="input39" id="input39" readonly></textarea>
                        </div>
                    </div>
                    <br>
                    <h4 class="text-center app-subtitle backgroundWhite">Segmento</h4>
                    <br>
                    <div>
                        <input type="text" class="form-control" ng-model="input113" id="input113"
                            placeholder="Introduce el producto con el que quieres trabajar">
                            <br>
                        <h4 class="bolder">¿Cuáles son los distintos grupos de personas que utilizarán o comprarán tu
                            producto/servicio)? Esos son tus segmentos de mercado.</h4>
                        <p>Realiza una descripción de tu segmento y luego identifica tu o tus segmentos con un determinado nombre</p>
                        <label for="" class="form-label bg-dark border rounded pl-3 pr-3">Primero selecciona donde corresponda</label>
                        <div class="row">
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" name="mdnegocio" value="1" ng-click="check1p1()"
                                        type="checkbox" ng-model="input40" id="input40">
                                    <label class="hasLabel" for="mdnegocio1">B2B</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" name="mdnegocio2" value="1" ng-click="check1p1()"
                                        type="checkbox" ng-model="input41" id="input41">
                                    <label class="hasLabel" for="mdnegocio2">B2C</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" name="mdnegocio3" value="1" ng-click="check1p1()"
                                        type="checkbox" ng-model="input42" id="input42">
                                    <label class="hasLabel" for="mdnegocio3">B2G</label>
                                </div>
                            </checkbox>
                            <div id="b2cp1" style="display: none;">
                                <h5>Si marcaste B2C:</h5>
                                <div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables geográficas</h4>
                                        <input type="text" class="form-control" ng-model="input43" id="input43">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables demográficas</h4>
                                        <input type="text" class="form-control" ng-model="input44" id="input44">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables conductuales</h4>
                                        <input type="text" class="form-control" ng-model="input45" id="input45">
                                    </div>
                                </div>
                            </div>
                            <div id="b2bp1" style="display: none;">
                                <h5>Si marcaste B2B:</h5>
                                <div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables geográficas</h4>
                                        <input type="text" class="form-control" ng-model="input46" id="input46">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables de comportamiento</h4>
                                        <input type="text" class="form-control" ng-model="input47" id="input47">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables de crecimiento</h4>
                                        <input type="text" class="form-control" ng-model="input48" id="input48">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Describe el segmento, considerando todas las
                                            variables</h4>
                                        <input type="text" class="form-control" ng-model="input49" id="input49">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br>
                    <h4 class="text-center app-subtitle backgroundGrey">Problema</h4>
                    <br>
                    <div>
                        <div class="mb-3">
                            <h4 for="" class="text-left bolder">Enumera todos los problemas que se encuentran tus clientes en
                                la actual oferta de mercado.</h4>
                            <p>¡Es hora de empezar con la lluvia de ideas! Escribe todas los las ideas que te puedas imaginar, una por cuadrado. Es el momento de ser creativo y pensar en tantas ideas como sea posible. En este punto, no pienses si tu producto/servicio embarca estas ideas o no, simplemente enumera todas las que puedas.</p>
                            <input type="" class="form-control rounded-0 border-dark" ng-model="input50" id="input50"></input>
                            <input type="" class="form-control rounded-0 border-dark" ng-model="input51" id="input51"></input>
                            <input type="" class="form-control rounded-0 border-dark" ng-model="input52" id="input52"></input>
                            <input type="" class="form-control rounded-0 border-dark" ng-model="input53" id="input53"></input>
                            <input type="" class="form-control rounded-0 border-dark" ng-model="input54" id="input54"></input>
                        </div>
                        <div class="mb-3">
                            <h4 for="" class="text-left bolder">¿Cuáles son los beneficios que tu solución puede dar a cada
                                segmento de cliente?</h4>
                            <p>Asegúrate de no enumerar las características de tu propuesta, sino los beneficios que tus clientes obtienen de ella. Características: las cosas concretas que tu producto/servicio ofrece. Por ejemplo: WiFi. Beneficios: aquello que tu cliente recibe de esas características. Por ejemplo: acceso gratuito a Internet.</p>
                            <input type="" class="form-control rounded-0 border-dark" ng-model="input55" id="input55"></input>
                            <input type="" class="form-control rounded-0 border-dark" ng-model="input56" id="input56"></input>
                            <input type="" class="form-control rounded-0 border-dark" ng-model="input57" id="input57"></input>
                            <input type="" class="form-control rounded-0 border-dark" ng-model="input58" id="input58"></input>
                            <input type="" class="form-control rounded-0 border-dark" ng-model="input59" id="input59"></input>
                        </div>
                    </div>
                    <br>
                    <h4 class="text-center app-subtitle backgroundGrey">Tamaño del mercado</h4>
                    <br>
                    <div>
                        <div class="mb-3">
                            <h4 for="" class="text-left bolder">Haz una estimación del tamaño del mercado para cada uno de tus
                                segmentos de mercado.</h4>
                            <p>Las preguntas a continuación te ayudarán a responder. Hacer una estimación del tamaño de mercado no es una ciencia exacta. Lo importante es el proceso para conseguir esos números.</p>
                            <div class="mb-3">
                                <small id="helpId" class="form-label bg-dark border rounded pl-3 pr-3">Mercado disponible</small>
                                <label for="" class="form-label">¿Cuántas personas de 20 entrarían dentro de este
                                    segmento de mercado?</label>
                                <input type="number" min="1" max="20" class="form-control " ng-change="func1()"
                                    ng-model="input60" id="input60">
                            </div>
                            <div class="mb-3">
                                <small id="helpId" class="form-label bg-dark border rounded pl-3 pr-3">Clientes</small>
                                <label for="" class="form-label">¿A qué porcentaje del mercado conseguirías
                                    llegar?</label>
                                <input type="number" step="0.1" min="1" max="100" class="form-control"
                                    ng-change="func1()" ng-model="input61" id="input61">
                            </div>
                            <div class="mb-3">
                                <small id="helpId" class="form-label bg-dark border rounded pl-3 pr-3">Mercado</small>
                                <label for="" class="form-label">El número aproximado de clientes a los que podrás
                                    llegar</label>
                                <input type="text" class="form-control" ng-model="input62" id="input62" readonly>
                            </div>
                            <div class="mb-3">
                                <small id="helpId" class="form-label bg-dark border rounded pl-3 pr-3">Compradores actuales</small>
                                <label for="" class="form-label">¿Qué porcentaje del mercado compraría tu producto en
                                    vez de los de tus competidores?</label>
                                <input type="number" min="1" max="100" step="0.1" class="form-control"
                                    ng-change="func2()" ng-model="input63" id="input63">
                            </div>
                            <div class="mb-3">
                                <small id="helpId" class="form-label bg-dark border rounded pl-3 pr-3">Mercado objetivo</small>
                                <label for="" class="form-label">El número aproximado de clientes que podrían estar
                                    interesados en comprar tu producto</label>
                                <input type="text" class="form-control" ng-model="input64" id="input64" readonly>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h4 class="text-center app-subtitle backgroundGrey">Acciones necesarias</h4>
                    <br>
                    <h4 class="bolder">¿Cuáles son los resultados que tus clientes quieren conseguir al utilizar tu producto o servicio?</h4>
                    <div>
                        <div class="mb-3">
                            <small id="helpId" class="form-text text-muted">Funcional</small>
                            <h4 for="" class="text-left">¿Cuáles son los resultados concretos que tus clientes quieren
                                obtener?</h4>
                            <input type="text" class="form-control rounded-0 border-dark" ng-model="input65" id="input65"></input>
                            <input type="text" class="form-control rounded-0 border-dark" ng-model="input66" id="input66"></input>
                            <input type="text" class="form-control rounded-0 border-dark" ng-model="input67" id="input67"></input>
                        </div>
                        <div class="mb-3">
                            <small id="helpId" class="form-text text-muted">Personal</small>
                            <h4 for="" class="text-left">¿Cómo quieren sentirse tus clientes?</h4>
                            <input type="text" class="form-control rounded-0 border-dark" ng-model="input68" id="input68"></input>
                            <input type="text" class="form-control rounded-0 border-dark" ng-model="input69" id="input69"></input>
                            <input type="text" class="form-control rounded-0 border-dark" ng-model="input70" id="input70"></input>
                        </div>
                        <div class="mb-3">
                            <small id="helpId" class="form-text text-muted">Social</small>
                            <h4 for="" class="text-left">¿Cómo quieren tus clientes que se les perciba?</h4>
                            <input type="text" class="form-control rounded-0 border-dark" ng-model="input71" id="input71"></input>
                            <input type="text" class="form-control rounded-0 border-dark" ng-model="input72" id="input72"></input>
                            <input type="text" class="form-control rounded-0 border-dark" ng-model="input73" id="input73"></input>
                        </div>
                    </div>
                    <br>
                    <h4 class="text-center app-subtitle backgroundGrey">Selección de resultados</h4>
                    <br>
                    <div>
                        <div class="table-responsive">
                            <h4 class="bolder">De entre todas las acciones, elige aquellas que tus clientes valoren más. Luego
                                califique la importancia de un 0 a un 100%</h4>
                                <p>Cada Resultado es una oportunidad de negocio para ti. Tenlo en cuenta a la hora de tomar una decisión.</p>
                            <table class="table text-white table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label bg-dark border rounded pl-3 pr-3">Accion</label>

                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label bg-dark border rounded pl-3 pr-3">Segmento</label>

                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label bg-dark border rounded pl-3 pr-3">% de Importancia</label>

                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input74" id="input74">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input75" id="input75">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="number" min="1" max="100" step="0.1" class="form-control"
                                                    ng-change="func3p1()" ng-model="input76" id="input76">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input77" id="input77">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input78" id="input78">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="number" min="1" max="100" step="0.1" class="form-control"
                                                    ng-change="func3p1()" ng-model="input79" id="input79">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input80" id="input80">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input81" id="input81">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="number" min="1" max="100" step="0.1" class="form-control"
                                                    ng-change="func3p1()" ng-model="input82" id="input82">
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <h4 class="bolder">¿Cómo de insatisfecho está este segmento de mercado con la oferta de mercado actual para
                                conseguir lo que necesitas?</h4>
                            <p>Teniendo en cuenta las opciones que este Segmento de Mercado tiene a su disposición para conseguir lo que necesitas, ¿cómo de satisfecho o insatisfecho están con la oferta disponible en el mercado?</p>
                            <table class="table text-white table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label bg-dark border rounded pl-3 pr-3">Accion</label>

                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label bg-dark border rounded pl-3 pr-3">Segmento</label>

                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label bg-dark border rounded pl-3 pr-3">% de Importancia</label>

                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input83" id="input83">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input84" id="input84">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="number" min="1" max="100" step="0.1" ng-change="func3p1()"
                                                    class="form-control" ng-model="input85" id="input85">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input86" id="input86">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input87" id="input87">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="number" min="1" max="100" step="0.1" ng-change="func3p1()"
                                                    class="form-control" ng-model="input88" id="input88">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input89" id="input89">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input90" id="input90">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="number" min="1" max="100" step="0.1" ng-change="func3p1()"
                                                    class="form-control" ng-model="input91" id="input91">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input92" id="input92">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input93" id="input93">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="number" min="1" max="100" step="0.1" ng-change="func3p1()"
                                                    class="form-control" ng-model="input94" id="input94">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input95" id="input95">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input96" id="input96">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="number" min="1" max="100" step="0.1" ng-change="func3p1()"
                                                    class="form-control" ng-model="input97" id="input97">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input98" id="input98">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input99" id="input99">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="number" min="1" max="100" step="0.1" ng-change="func3p1()"
                                                    class="form-control" ng-model="input100" id="input100">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input101"
                                                    id="input101">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input102"
                                                    id="input102">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="number" min="1" max="100" step="0.1" ng-change="func3p1()"
                                                    class="form-control" ng-model="input103" id="input103">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input104"
                                                    id="input104">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input105"
                                                    id="input105">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="number" min="1" max="100" step="0.1" ng-change="func3p1()"
                                                    class="form-control" ng-model="input106" id="input106">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input107"
                                                    id="input107">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" ng-model="input108"
                                                    id="input108">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="number" min="1" max="100" step="0.1" ng-change="func3p1()"
                                                    class="form-control" ng-model="input109" id="input109">
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Decisión del segmento a enfocarse en base a importancia e
                                insatisfacción del mercado</label>
                            <input type="text" class="form-control" ng-model="input110" id="input110">
                        </div>
                    </div>
                    <br>
                    <h4 class="text-center app-subtitle backgroundGrey">Ahora puedes redactar la propuesta de valor</h4>
                    <br>
                    <div>
                        <div class="mb-3">
                            <h4 for="" class="text-left bolder">Utiliza el ejemplo para escribir la presentación de tu
                                Propuesta de Valor para cada uno de los segmentos de mercado que has elegido.</h4>
                            <p>Esto es solo un ejemplo para ayudarte a escribir tu presentación. Tienes total libertad para escribirla a tu manera.</p>
                            <label for="">Estructura recomendada</label>
                            <textarea type="" class="form-control " ng-model="input111" id="input111"
                                placeholder="Para los Segmento de mercado, que Problemática del cliente, Tu empresa/producto es Descripción del producto que Beneficios del cliente."
                                readonly></textarea>
                            <label for="">Redacta en este recuadro tu propuesta de valor</label>
                            <textarea type="" class="form-control " ng-model="input112" id="input112"></textarea>
                        </div>
                    </div>
                    @if (Auth::user()->userType == 'teacher')
                    @endif
                    @if (Auth::user()->userType == 'student')
                    <a name="" id="add2" class="btn btn-primary" ng-click="producto2()" href="#" role="button">Agregar
                        producto</a>
                    @endif

                    <br>
                    <div id="product2">
                        <h4 class="text-center app-subtitle">Segmento</h4>
                        <div>
                            <input type="text" class="form-control" ng-model="input114" id="input114"
                                placeholder="Introduce el producto con el que quieres trabajar">
                            <h4>¿Cuáles son los distintos grupos de personas que utilizarán o comprarán tu
                                producto/servicio)? Esos son tus segmentos de mercado.</h4>
                            <div class="row">
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="input115" value="1" type="checkbox"
                                            id="input115" ng-model="input115">
                                        <label class="hasLabel" for="input115">B2B</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="input116" value="1" type="checkbox"
                                            id="input116" ng-model="input116">
                                        <label class="hasLabel" for="input116">B2C</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="input117" value="1" type="checkbox"
                                            id="input117" ng-model="input117">
                                        <label class="hasLabel" for="input117">B2G</label>
                                    </div>
                                </checkbox>
                                <div id="b2cp2" style="display: none;">
                                    <h5>Si marcaste B2C</h5>
                                    <div>
                                        <div class="mb-3">
                                            <h4 for="" class="text-left">Redacta las variables geográficas</h4>
                                            <input type="text" class="form-control" ng-model="input118" id="input118">
                                        </div>
                                        <div class="mb-3">
                                            <h4 for="" class="text-left">Redacta las variables demográficas</h4>
                                            <input type="text" class="form-control" ng-model="input119" id="input119">
                                        </div>
                                        <div class="mb-3">
                                            <h4 for="" class="text-left">Redacta las variables conductuales</h4>
                                            <input type="text" class="form-control" ng-model="input120" id="input120">
                                        </div>
                                    </div>
                                </div>
                                <div id="b2bp2" style="display: none;">
                                    <h5>Si marcaste B2B</h5>
                                    <div>
                                        <div class="mb-3">
                                            <h4 for="" class="text-left">Redacta las variables geográficas</h4>
                                            <input type="text" class="form-control" ng-model="input121" id="input121">
                                        </div>
                                        <div class="mb-3">
                                            <h4 for="" class="text-left">Redacta las variables demográficas</h4>
                                            <input type="text" class="form-control" ng-model="input122" id="input122">
                                        </div>
                                        <div class="mb-3">
                                            <h4 for="" class="text-left">Redacta las variables conductuales</h4>
                                            <input type="text" class="form-control" ng-model="input123" id="input123">
                                        </div>
                                        <div class="mb-3">
                                            <h4 for="" class="text-left">Describe el segmento, considerando todas las
                                                variables</h4>
                                            <input type="text" class="form-control" ng-model="input124" id="input124">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Problema</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Enumera todos los problemas que se encuentran tus clientes
                                    en la actual oferta de mercado.</h4>
                                <input type="text" class="form-control" ng-model="input125" id="input125">
                                <input type="text" class="form-control" ng-model="input126" id="input126">
                                <input type="text" class="form-control" ng-model="input127" id="input127">
                                <input type="text" class="form-control" ng-model="input128" id="input128">
                                <input type="text" class="form-control" ng-model="input129" id="input129">
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">¿Cuáles son los beneficios que tu solución puede dar a cada
                                    segmento de cliente?</h4>
                                <input type="text" class="form-control" ng-model="input130" id="input130">
                                <input type="text" class="form-control" ng-model="input131" id="input131">
                                <input type="text" class="form-control" ng-model="input132" id="input132">
                                <input type="text" class="form-control" ng-model="input133" id="input133">
                                <input type="text" class="form-control" ng-model="input134" id="input134">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Tamaño del mercado</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Haz una estimación del tamaño del mercado para cada uno de
                                    tus segmentos de mercado.</h4>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Cuántas personas de 20 entrarían dentro de este
                                        segmento de mercado?</label>
                                    <input type="number" min="1" max="20" ng-change="func1p2()" class="form-control"
                                        ng-model="input135" id="input135">
                                    <small id="helpId" class="form-text text-muted">Mercado disponible</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿A qué porcentaje del mercado conseguirías
                                        llegar?</label>
                                    <input type="number" min="1" max="100" step="0.1" ng-change="func1p2()"
                                        class="form-control" ng-model="input136" id="input136">
                                    <small id="helpId" class="form-text text-muted">Clientes</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">El número aproximado de clientes a los que podrás
                                        llegar</label>
                                    <input type="text" class="form-control" ng-model="input137" id="input137">
                                    <small id="helpId" class="form-text text-muted">Mercado</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Qué porcentaje del mercado compraría tu producto
                                        en vez de los de tus competidores?</label>
                                    <input type="number" min="1" max="100" step="0.1" ng-change="func2p2()"
                                        class="form-control" ng-model="input138" id="input138">
                                    <small id="helpId" class="form-text text-muted">Compradores actuales</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">El número aproximado de clientes que podrían estar
                                        interesados en comprar tu producto</label>
                                    <input type="text" class="form-control" ng-model="input139" id="input139">
                                    <small id="helpId" class="form-text text-muted">Mercado objetivo</small>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Acciones necesarias</h4>
                        <div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Funcional</small>
                                <h4 for="" class="text-left">¿Cuáles son los resultados concretos que tus clientes
                                    quieren obtener?</h4>
                                <input type="text" class="form-control" ng-model="input140" id="input140">
                                <input type="text" class="form-control" ng-model="input141" id="input141">
                                <input type="text" class="form-control" ng-model="input142" id="input142">
                            </div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Personal</small>
                                <h4 for="" class="text-left">¿Cómo quieren sentirse tus clientes?</h4>
                                <input type="text" class="form-control" ng-model="input143" id="input143">
                                <input type="text" class="form-control" ng-model="input144" id="input144">
                                <input type="text" class="form-control" ng-model="input145" id="input145">
                            </div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Social</small>
                                <h4 for="" class="text-left">¿Cómo quieren tus clientes que se les perciba?</h4>
                                <input type="text" class="form-control" ng-model="input146" id="input146">
                                <input type="text" class="form-control" ng-model="input147" id="input147">
                                <input type="text" class="form-control" ng-model="input148" id="input148">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Selección de resultados</h4>
                        <div>
                            <div class="table-responsive">
                                <h4>De entre todas las acciones, elige aquellas que tus clientes valoren más. Luego
                                    califique la importancia de un 0 a un 100%</h4>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Accion</label>

                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Segmento</label>

                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">% de Importancia</label>

                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input149"
                                                        id="input149">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input150"
                                                        id="input150">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p2()" class="form-control" ng-model="input151"
                                                        id="input151">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input152"
                                                        id="input152">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input153"
                                                        id="input153">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p2()" class="form-control" ng-model="input154"
                                                        id="input154">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input155"
                                                        id="input155">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input156"
                                                        id="input156">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p2()" class="form-control" ng-model="input157"
                                                        id="input157">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <h4>¿Cómo de insatisfecho está este segmento de mercado con la oferta de mercado actual
                                    para conseguir lo que necesitas?</h4>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Accion</label>

                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Segmento</label>

                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">% de Importancia</label>

                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input158"
                                                        id="input158">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input159"
                                                        id="input159">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p2()" class="form-control" ng-model="input160"
                                                        id="input160">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input161"
                                                        id="input161">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input162"
                                                        id="input162">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p2()" class="form-control" ng-model="input163"
                                                        id="input163">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input164"
                                                        id="input164">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input165"
                                                        id="input165">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p2()" class="form-control" ng-model="input166"
                                                        id="input166">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input167"
                                                        id="input167">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input168"
                                                        id="input168">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p2()" class="form-control" ng-model="input169"
                                                        id="input169">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input170"
                                                        id="input170">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input171"
                                                        id="input171">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p2()" class="form-control" ng-model="input172"
                                                        id="input172">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input173"
                                                        id="input173">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input174"
                                                        id="input174">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p2()" class="form-control" ng-model="input175"
                                                        id="input175">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input176"
                                                        id="input176">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input177"
                                                        id="input177">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p2()" class="form-control" ng-model="input178"
                                                        id="input178">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input179"
                                                        id="input179">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input180"
                                                        id="input180">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p2()" class="form-control" ng-model="input181"
                                                        id="input181">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input182"
                                                        id="input182">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input183"
                                                        id="input183">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p2()" class="form-control" ng-model="input184"
                                                        id="input184">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Decisión del segmento a enfocarse en base a importancia
                                    e insatisfacción del mercado</label>
                                <input type="text" class="form-control" ng-model="input185" id="input185">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Ahora puedes redactar la propuesta de valor</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Utiliza el ejemplo para escribir la presentación de tu
                                    Propuesta de Valor para cada uno de los segmentos de mercado que has elegido.</h4>
                                <label for="">Estructura recomendada</label>
                                <textarea class="form-control" ng-model="input186" id="input186"
                                    placeholder="Para los Segmento de mercado, que Problemática del cliente, Tu empresa/producto es Descripción del producto que Beneficios del cliente."
                                    readonly></textarea>
                                <label for="">Redacta en este recuadro tu propuesta de valor</label>
                                <textarea class="form-control" ng-model="input187" id="input187"></textarea>
                            </div>
                        </div>
                        @if (Auth::user()->userType == 'teacher')
                        @endif
                        @if (Auth::user()->userType == 'student')
                        <div class="flex">
                            <a name="" id="add3" class="btn btn-primary" ng-click="producto3()" href="#"
                                role="button">Agregar producto</a>
                            <a name="" id="delete2" class="btn btn-primary" ng-click="producto2()" href="#"
                                role="button">Eliminar producto</a>
                        </div>
                        @endif

                        <br>
                    </div>

                    <div id="product3">
                        <h4 class="text-center app-subtitle">Segmento</h4>
                        <div>
                            <input type="text" class="form-control" ng-model="input188" id="input188"
                                placeholder="Introduce el producto con el que quieres trabajar">
                            <h4>¿Cuáles son los distintos grupos de personas que utilizarán o comprarán tu
                                producto/servicio)? Esos son tus segmentos de mercado.</h4>
                            <div class="row">
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio" value="1" type="checkbox"
                                            ng-click="check1p3()" ng-model="input189" id="input189">
                                        <label class="hasLabel" for="mdnegocio1">B2B</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio" value="2" type="checkbox"
                                            ng-click="check1p3()" ng-model="input190" id="input190">
                                        <label class="hasLabel" for="mdnegocio2">B2C</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio" value="3" type="checkbox"
                                            ng-click="check1p3()" ng-model="input191" id="input191">
                                        <label class="hasLabel" for="mdnegocio3">B2G</label>
                                    </div>
                                </checkbox>
                                <div id="b2cp3" style="display: none;">
                                    <h5>Si marcaste B2C</h5>
                                    <div>
                                        <div class="mb-3">
                                            <h4 for="" class="text-left">Redacta las variables geográficas</h4>
                                            <input type="text" class="form-control" ng-model="input192" id="input192">
                                        </div>
                                        <div class="mb-3">
                                            <h4 for="" class="text-left">Redacta las variables demográficas</h4>
                                            <input type="text" class="form-control" ng-model="input193" id="input193">
                                        </div>
                                        <div class="mb-3">
                                            <h4 for="" class="text-left">Redacta las variables conductuales</h4>
                                            <input type="text" class="form-control" ng-model="input194" id="input194">
                                        </div>
                                    </div>
                                </div>
                                <div id="b2bp3" style="display: none;">
                                    <h5>Si marcaste B2B</h5>
                                    <div>
                                        <div class="mb-3">
                                            <h4 for="" class="text-left">Redacta las variables geográficas</h4>
                                            <input type="text" class="form-control" ng-model="input195" id="input195">
                                        </div>
                                        <div class="mb-3">
                                            <h4 for="" class="text-left">Redacta las variables demográficas</h4>
                                            <input type="text" class="form-control" ng-model="input196" id="input196">
                                        </div>
                                        <div class="mb-3">
                                            <h4 for="" class="text-left">Redacta las variables conductuales</h4>
                                            <input type="text" class="form-control" ng-model="input197" id="input197">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Problema</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Enumera todos los problemas que se encuentran tus clientes
                                    en la actual oferta de mercado.</h4>
                                <input type="text" class="form-control" ng-model="input198" id="input198">
                                <input type="text" class="form-control" ng-model="input199" id="input199">
                                <input type="text" class="form-control" ng-model="input200" id="input200">
                                <input type="text" class="form-control" ng-model="input201" id="input201">
                                <input type="text" class="form-control" ng-model="input202" id="input202">
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">¿Cuáles son los beneficios que tu solución puede dar a cada
                                    segmento de cliente?</h4>
                                <input type="text" class="form-control" ng-model="input203" id="input203">
                                <input type="text" class="form-control" ng-model="input204" id="input204">
                                <input type="text" class="form-control" ng-model="input205" id="input205">
                                <input type="text" class="form-control" ng-model="input206" id="input206">
                                <input type="text" class="form-control" ng-model="input207" id="input207">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Tamaño del mercado</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Haz una estimación del tamaño del mercado para cada uno de
                                    tus segmentos de mercado.</h4>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Cuántas personas de 20 entrarían dentro de este
                                        segmento de mercado?</label>
                                    <input type="number" min="1" max="20" ng-change="func1p3()" class="form-control"
                                        ng-model="input208" id="input208">
                                    <small id="helpId" class="form-text text-muted">Mercado disponible</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿A qué porcentaje del mercado conseguirías
                                        llegar?</label>
                                    <input type="number" min="1" max="100" step="0.1" ng-change="func1p3()"
                                        class="form-control" ng-model="input209" id="input209">
                                    <small id="helpId" class="form-text text-muted">Clientes</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">El número aproximado de clientes a los que podrás
                                        llegar</label>
                                    <input type="text" class="form-control" ng-model="input210" id="input210">
                                    <small id="helpId" class="form-text text-muted">Mercado</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Qué porcentaje del mercado compraría tu producto
                                        en vez de los de tus competidores?</label>
                                    <input type="number" min="1" max="100" step="0.1" ng-change="func1p3()"
                                        class="form-control" ng-model="input211" id="input211">
                                    <small id="helpId" class="form-text text-muted">Compradores actuales</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">El número aproximado de clientes que podrían estar
                                        interesados en comprar tu producto</label>
                                    <input type="text" class="form-control" ng-model="input212" id="input212">
                                    <small id="helpId" class="form-text text-muted">Mercado objetivo</small>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Acciones necesarias</h4>
                        <div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Funcional</small>
                                <h4 for="" class="text-left">¿Cuáles son los resultados concretos que tus clientes
                                    quieren obtener?</h4>
                                <input type="text" class="form-control" ng-model="input213" id="input213">
                                <input type="text" class="form-control" ng-model="input214" id="input214">
                                <input type="text" class="form-control" ng-model="input215" id="input215">
                            </div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Personal</small>
                                <h4 for="" class="text-left">¿Cómo quieren sentirse tus clientes?</h4>
                                <input type="text" class="form-control" ng-model="input216" id="input216">
                                <input type="text" class="form-control" ng-model="input217" id="input217">
                                <input type="text" class="form-control" ng-model="input218" id="input218">
                            </div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Social</small>
                                <h4 for="" class="text-left">¿Cómo quieren tus clientes que se les perciba?</h4>
                                <input type="text" class="form-control" ng-model="input219" id="input219">
                                <input type="text" class="form-control" ng-model="input220" id="input220">
                                <input type="text" class="form-control" ng-model="input221" id="input221">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Selección de resultados</h4>
                        <div>
                            <div class="table-responsive">
                                <h4>De entre todas las acciones, elige aquellas que tus clientes valoren más. Luego
                                    califique la importancia de un 0 a un 100%</h4>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Accion</label>

                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Segmento</label>

                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">% de Importancia</label>

                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input222"
                                                        id="input222">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input223"
                                                        id="input223">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p3()" class="form-control" ng-model="input224"
                                                        id="input224">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input225"
                                                        id="input225">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input226"
                                                        id="input226">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p3()" class="form-control" ng-model="input227"
                                                        id="input227">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input228"
                                                        id="input228">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input229"
                                                        id="input229">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p3()" class="form-control" ng-model="input230"
                                                        id="input230">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <h4>¿Cómo de insatisfecho está este segmento de mercado con la oferta de mercado actual
                                    para conseguir lo que necesitas?</h4>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Accion</label>

                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Segmento</label>

                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">% de Importancia</label>

                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input231"
                                                        id="input231">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input232"
                                                        id="input232">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p3()" class="form-control" ng-model="input233"
                                                        id="input233">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input234"
                                                        id="input234">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input235"
                                                        id="input235">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p3()" class="form-control" ng-model="input236"
                                                        id="input236">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input237"
                                                        id="input237">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input238"
                                                        id="input238">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p3()" class="form-control" ng-model="input239"
                                                        id="input239">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input240"
                                                        id="input240">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input241"
                                                        id="input241">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p3()" class="form-control" ng-model="input242"
                                                        id="input242">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input243"
                                                        id="input243">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input244"
                                                        id="input244">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p3()" class="form-control" ng-model="input245"
                                                        id="input245">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input246"
                                                        id="input246">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input247"
                                                        id="input247">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p3()" class="form-control" ng-model="input248"
                                                        id="input248">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input249"
                                                        id="input249">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input250"
                                                        id="input250">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p3()" class="form-control" ng-model="input251"
                                                        id="input251">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input252"
                                                        id="input252">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input253"
                                                        id="input253">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p3()" class="form-control" ng-model="input254"
                                                        id="input254">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input255"
                                                        id="input255">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" ng-model="input256"
                                                        id="input256">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="number" min="1" max="100" step="0.1"
                                                        ng-change="func3p3()" class="form-control" ng-model="input257"
                                                        id="input257">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Decisión del segmento a enfocarse en base a importancia
                                    e insatisfacción del mercado</label>
                                <input type="text" class="form-control" ng-model="input258" id="input258">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Ahora puedes redactar la propuesta de valor</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Utiliza el ejemplo para escribir la presentación de tu
                                    Propuesta de Valor para cada uno de los segmentos de mercado que has elegido.</h4>
                                <label for="">Estructura recomendada</label>
                                <textarea class="form-control" ng-model="input259" id="input259" rows="3"
                                    placeholder="Para los Segmento de mercado, que Problemática del cliente, Tu empresa/producto es Descripción del producto que Beneficios del cliente."
                                    readonly></textarea>
                                <label for="">Redacta en este recuadro tu propuesta de valor</label>
                                <textarea class="form-control" ng-model="input260" id="input260" rows="3"></textarea>
                            </div>
                        </div>
                        @if (Auth::user()->userType == 'teacher')
                        @endif
                        @if (Auth::user()->userType == 'student')
                        <a name="" id="delete3" class="btn btn-primary" ng-click="producto3()" href="#"
                            role="button">Eliminar producto</a>
                        @endif

                    </div>
                    <br>



                </form>

                @if (Auth::user()->userType == 'teacher')
                <div class="d-flex justify-content-center">
                    <button type="submit" ng-Click="AprobarForm()" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm col-4">
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
                                            <textarea readonly class="form-control" id="textAreaExample" ng-model="formComment"
                                                id="formComment" rows="4"></textarea>
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
            function getId(url = window.location.href) {
                let urlParts = url.split('/');
                return urlParts[urlParts.length - 1];
            }
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
                $scope.input111 =
                    "Para los Segmento de mercado, que Problemática del cliente, Tu empresa/producto es Descripción del producto que Beneficios del cliente.";
                $scope.input112 = "";
                // input first product name
                $scope.input113 = "";
                //input second product name
                $scope.input114 = "";
                //inputs to 187
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
                $scope.input186 =
                    "Para los Segmento de mercado, que Problemática del cliente, Tu empresa/producto es Descripción del producto que Beneficios del cliente.";
                $scope.input187 = "";
                //input third product name
                $scope.input188 = "";
                //inputs to 260
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
                $scope.input259 =
                    "Para los Segmento de mercado, que Problemática del cliente, Tu empresa/producto es Descripción del producto que Beneficios del cliente.";
                $scope.input260 = "";
                $scope.count = "1";

                $scope.idTeam = "";

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
                        $http.get(`/forms1/${teamId}`).then((result) => {
                            $scope.forms = result.data;
                            $scope.formComment= $scope.forms.formComments;
                            $scope.parseArrayValues();
                            $scope.checkProducts();
                        })

                        //hab forms
                        var formNumber = 1;

                        $http.get('/verifiedTeacher/'+teamId).then((res) =>{
                            var status = res.data[0].status;
                            var s = status.split(',')
                            var s2 = status.split(',')

                            s[formNumber-1] = 1;
                            s2[formNumber-1] = 0;
                            var newStatusHab = s[0] + "," +s[1] + ","+s[2] + ","+s[3] + ","+s[4] + ","+s[5] + ","+s[6];
                            var newStatusDesHab = s2[0] + "," +s2[1] + ","+s2[2] + ","+s2[3] + ","+s2[4] + ","+s2[5] + ","+s2[6];
                            var newStatusAprob = "3,1,"+ s[2] + ","+s[3] + ","+s[4] + ","+s[5] + ","+s[6];
                            var formName = 'Propuesta de Valor';
                            $scope.sendObjectTeamHab = {id : teamId, status : newStatusHab, type: 0}
                            $scope.sendObjectTeamDesHab = {id : teamId, status : newStatusDesHab, type: 0}
                            $scope.sendObjectTeamAprob = {id : teamId, status : newStatusAprob, fName : formName, type:1, phase: 2}


                        })
                        //fin hab forms


                    } else {
                        $http.get(`/verified`).then((res) =>{
                            var status = res.data[0].status;
                            var s = status.split(',')

                            if(s[0] == 0){
                                window.location.href = '/home'
                            }


                            if(s[0] == 3 ){
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
                            $http.get(`/forms1/${teamId}`).then((result) => {
                                $scope.forms = result.data;
                                $scope.formComment= $scope.forms.formComments;
                                $scope.parseArrayValues();
                                $scope.checkProducts();
                            })
                        })
                    }
                });

                $scope.getComment = () => {
                    var teamId = "";

                    function getId(url = window.location.href) {
                        let urlParts = url.split('/');
                        return urlParts[urlParts.length - 1];
                    }
                    teamId = getId();
                    $scope.comment = {
                        "idTeam": teamId,
                        "formName": 'form1'
                    }
                    //console.log($scope.comment)
                    $http.get('/showComment', $scope.comment).then((result) => {
                        $scope.formComment = result.data;
                        //console.log($scope.formComment);
                    })



                }

                //hab forms
                $scope.sendObjectTeamHab= {}
                $scope.sendObjectTeamDesHab= {}
                $scope.sendObjectTeamAprob = {}


                $scope.AprobarForm = () =>{

                    //
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
                            $http.put('/updateStatus', $scope.sendObjectTeamAprob).then(res=>{

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

                    //

                }

                $scope.HabilitarForm = () =>{

                    $http.put('/updateStatus', $scope.sendObjectTeamHab).then(res=>{
                        window.location.href = '/viewForms'
                    })
                }

                $scope.DesHabilitarForm = () =>{
                    $http.put('/updateStatus', $scope.sendObjectTeamDesHab).then(res=>{
                        window.location.href = '/viewForms'
                    })

                }
                //fin hab forms

                $scope.checkProducts = () => {
                    let p2 = document.getElementById("product2")
                        let p3 = document.getElementById("product3")
                        let a2 = document.getElementById("add2")
                        let a3 = document.getElementById("add3")
                        let d2 = document.getElementById("delete2")

                        if ($scope.count == "1") {

                            if(p2 != null){
                                p2.style.display = "none";
                            }
                            if(p3 != null){
                                p3.style.display = "none";
                            }
                            if(a2 != null){
                                a2.style.display = "block";
                            }
                        }
                    if ($scope.count == "2") {
                        p2.style.display = "block";
                        p3.style.display = "none";
                        a2.style.display = "none";
                        a3.style.display = "block";
                        d2.style.display = "block";
                        $scope.checkboxesp2();
                    }
                    if ($scope.count == "3") {
                        document.getElementById("product2").style.display = "block";
                        document.getElementById("product3").style.display = "block";
                        document.getElementById("add2").style.display = "none";
                        document.getElementById("add3").style.display = "none";
                        document.getElementById("delete2").style.display = "none";
                        document.getElementById("delete3").style.display = "block";
                        $scope.checkboxesp3();
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
                    $scope.input42 = formTextArray[41];
                    $scope.input43 = formTextArray[42];
                    $scope.input44 = formTextArray[43];
                    $scope.input45 = formTextArray[44];
                    $scope.input46 = formTextArray[45];
                    $scope.input47 = formTextArray[46];
                    $scope.input48 = formTextArray[47];
                    $scope.input49 = formTextArray[48];
                    $scope.input50 = formTextArray[49];
                    $scope.input51 = formTextArray[50];
                    $scope.input52 = formTextArray[51];
                    $scope.input53 = formTextArray[52];
                    $scope.input54 = formTextArray[53];
                    $scope.input55 = formTextArray[54];
                    $scope.input56 = formTextArray[55];
                    $scope.input57 = formTextArray[56];
                    $scope.input58 = formTextArray[57];
                    $scope.input59 = formTextArray[58];
                    $scope.input60 = parseInt(formTextArray[59]);
                    $scope.input61 = parseFloat(formTextArray[60]);
                    $scope.input62 = formTextArray[61];
                    $scope.input63 = parseFloat(formTextArray[62]);
                    $scope.input64 = formTextArray[63];
                    $scope.input65 = formTextArray[64];
                    $scope.input66 = formTextArray[65];
                    $scope.input67 = formTextArray[66];
                    $scope.input68 = formTextArray[67];
                    $scope.input69 = formTextArray[68];
                    $scope.input70 = formTextArray[69];
                    $scope.input71 = formTextArray[70];
                    $scope.input72 = formTextArray[71];
                    $scope.input73 = formTextArray[72];
                    $scope.input74 = formTextArray[73];
                    $scope.input75 = formTextArray[74];
                    $scope.input76 = parseFloat(formTextArray[75]);
                    $scope.input77 = formTextArray[76];
                    $scope.input78 = formTextArray[77];
                    $scope.input79 = parseFloat(formTextArray[78]);
                    $scope.input80 = formTextArray[79];
                    $scope.input81 = formTextArray[80];
                    $scope.input82 = parseFloat(formTextArray[81]);
                    $scope.input83 = formTextArray[82];
                    $scope.input84 = formTextArray[83];
                    $scope.input85 = parseFloat(formTextArray[84]);
                    $scope.input86 = formTextArray[85];
                    $scope.input87 = formTextArray[86];
                    $scope.input88 = parseFloat(formTextArray[87]);
                    $scope.input89 = formTextArray[88];
                    $scope.input90 = formTextArray[89];
                    $scope.input91 = parseFloat(formTextArray[90]);
                    $scope.input92 = formTextArray[91];
                    $scope.input93 = formTextArray[92];
                    $scope.input94 = parseFloat(formTextArray[93]);
                    $scope.input95 = formTextArray[94];
                    $scope.input96 = formTextArray[95];
                    $scope.input97 = parseFloat(formTextArray[96]);
                    $scope.input98 = formTextArray[97];
                    $scope.input99 = formTextArray[98];
                    $scope.input100 = parseFloat(formTextArray[99]);
                    $scope.input101 = formTextArray[100];
                    $scope.input102 = formTextArray[101];
                    $scope.input103 = parseFloat(formTextArray[102]);
                    $scope.input104 = formTextArray[103];
                    $scope.input105 = formTextArray[104];
                    $scope.input106 = parseFloat(formTextArray[105]);
                    $scope.input107 = formTextArray[106];
                    $scope.input108 = formTextArray[107];
                    $scope.input109 = parseFloat(formTextArray[108]);
                    $scope.input110 = formTextArray[109];
                    $scope.input111 = formTextArray[110];
                    $scope.input112 = formTextArray[111];
                    $scope.input113 = formTextArray[112];
                    $scope.input114 = formTextArray[113];
                    $scope.input115 = formTextArray[114];
                    $scope.input116 = formTextArray[115];
                    $scope.input117 = formTextArray[116];
                    $scope.input118 = formTextArray[117];
                    $scope.input119 = formTextArray[118];
                    $scope.input120 = formTextArray[119];
                    $scope.input121 = formTextArray[120];
                    $scope.input122 = formTextArray[121];
                    $scope.input123 = formTextArray[122];
                    $scope.input124 = formTextArray[123];
                    $scope.input125 = formTextArray[124];
                    $scope.input126 = formTextArray[125];
                    $scope.input127 = formTextArray[126];
                    $scope.input128 = formTextArray[127];
                    $scope.input129 = formTextArray[128];
                    $scope.input130 = formTextArray[129];
                    $scope.input131 = formTextArray[130];
                    $scope.input132 = formTextArray[131];
                    $scope.input133 = formTextArray[132];
                    $scope.input134 = formTextArray[133];
                    $scope.input135 = parseInt(formTextArray[134]);
                    $scope.input136 = parseFloat(formTextArray[135]);
                    $scope.input137 = formTextArray[136];
                    $scope.input138 = parseFloat(formTextArray[137]);
                    $scope.input139 = formTextArray[138];
                    $scope.input140 = formTextArray[139];
                    $scope.input141 = formTextArray[140];
                    $scope.input142 = formTextArray[141];
                    $scope.input143 = formTextArray[142];
                    $scope.input144 = formTextArray[143];
                    $scope.input145 = formTextArray[144];
                    $scope.input146 = formTextArray[145];
                    $scope.input147 = formTextArray[146];
                    $scope.input148 = formTextArray[147];
                    $scope.input149 = formTextArray[148];
                    $scope.input150 = formTextArray[149];
                    $scope.input151 = formTextArray[150];
                    $scope.input152 = parseFloat(formTextArray[151]);
                    $scope.input153 = formTextArray[152];
                    $scope.input154 = formTextArray[153];
                    $scope.input155 = parseFloat(formTextArray[154]);
                    $scope.input156 = formTextArray[155];
                    $scope.input157 = formTextArray[156];
                    $scope.input158 = parseFloat(formTextArray[157]);
                    $scope.input159 = formTextArray[158];
                    $scope.input160 = formTextArray[159];
                    $scope.input161 = parseFloat(formTextArray[160]);
                    $scope.input162 = formTextArray[161];
                    $scope.input163 = formTextArray[162];
                    $scope.input164 = parseFloat(formTextArray[163]);
                    $scope.input165 = formTextArray[164];
                    $scope.input166 = formTextArray[165];
                    $scope.input167 = parseFloat(formTextArray[166]);
                    $scope.input168 = formTextArray[167];
                    $scope.input169 = formTextArray[168];
                    $scope.input170 = parseFloat(formTextArray[169]);
                    $scope.input171 = formTextArray[170];
                    $scope.input172 = formTextArray[171];
                    $scope.input173 = parseFloat(formTextArray[172]);
                    $scope.input174 = formTextArray[173];
                    $scope.input175 = formTextArray[174];
                    $scope.input176 = parseFloat(formTextArray[175]);
                    $scope.input177 = formTextArray[176];
                    $scope.input178 = formTextArray[177];
                    $scope.input179 = parseFloat(formTextArray[178]);
                    $scope.input180 = formTextArray[179];
                    $scope.input181 = formTextArray[180];
                    $scope.input182 = parseFloat(formTextArray[181]);
                    $scope.input183 = formTextArray[182];
                    $scope.input184 = formTextArray[183];
                    $scope.input185 = parseFloat(formTextArray[184]);
                    $scope.input186 = formTextArray[185];
                    $scope.input187 = formTextArray[186];
                    $scope.input188 = formTextArray[187];
                    $scope.input189 = formTextArray[188];
                    $scope.input190 = formTextArray[189];
                    $scope.input191 = formTextArray[190];
                    $scope.input192 = formTextArray[191];
                    $scope.input193 = formTextArray[192];
                    $scope.input194 = formTextArray[193];
                    $scope.input195 = formTextArray[194];
                    $scope.input196 = formTextArray[195];
                    $scope.input197 = formTextArray[196];
                    $scope.input198 = formTextArray[197];
                    $scope.input199 = formTextArray[198];
                    $scope.input200 = formTextArray[199];
                    $scope.input201 = formTextArray[200];
                    $scope.input202 = formTextArray[201];
                    $scope.input203 = formTextArray[202];
                    $scope.input204 = formTextArray[203];
                    $scope.input205 = formTextArray[204];
                    $scope.input206 = formTextArray[205];
                    $scope.input207 = formTextArray[206];
                    $scope.input208 = formTextArray[207];
                    $scope.input209 = parseInt(formTextArray[208]);
                    $scope.input210 = parseFloat(formTextArray[209]);
                    $scope.input211 = formTextArray[210];
                    $scope.input212 = parseFloat(formTextArray[211]);
                    $scope.input213 = formTextArray[212];
                    $scope.input214 = formTextArray[213];
                    $scope.input215 = formTextArray[214];
                    $scope.input216 = formTextArray[215];
                    $scope.input217 = formTextArray[216];
                    $scope.input218 = formTextArray[217];
                    $scope.input219 = formTextArray[218];
                    $scope.input220 = formTextArray[219];
                    $scope.input221 = formTextArray[220];
                    $scope.input222 = formTextArray[221];
                    $scope.input223 = formTextArray[222];
                    $scope.input224 = parseFloat(formTextArray[223]);
                    $scope.input225 = formTextArray[224];
                    $scope.input226 = formTextArray[225];
                    $scope.input227 = parseFloat(formTextArray[226]);
                    $scope.input228 = formTextArray[227];
                    $scope.input229 = formTextArray[228];
                    $scope.input230 = parseFloat(formTextArray[229]);
                    $scope.input231 = formTextArray[230];
                    $scope.input232 = formTextArray[231];
                    $scope.input233 = parseFloat(formTextArray[232]);
                    $scope.input234 = formTextArray[233];
                    $scope.input235 = formTextArray[234];
                    $scope.input236 = parseFloat(formTextArray[235]);
                    $scope.input237 = formTextArray[236];
                    $scope.input238 = formTextArray[237];
                    $scope.input239 = parseFloat(formTextArray[238]);
                    $scope.input240 = formTextArray[239];
                    $scope.input241 = formTextArray[240];
                    $scope.input242 = parseFloat(formTextArray[241]);
                    $scope.input243 = formTextArray[242];
                    $scope.input244 = formTextArray[243];
                    $scope.input245 = parseFloat(formTextArray[244]);
                    $scope.input246 = formTextArray[245];
                    $scope.input247 = formTextArray[246];
                    $scope.input248 = parseFloat(formTextArray[247]);
                    $scope.input249 = formTextArray[248];
                    $scope.input250 = formTextArray[249];
                    $scope.input251 = parseFloat(formTextArray[250]);
                    $scope.input252 = formTextArray[251];
                    $scope.input253 = formTextArray[252];
                    $scope.input254 = parseFloat(formTextArray[253]);
                    $scope.input255 = formTextArray[254];
                    $scope.input256 = formTextArray[255];
                    $scope.input257 = parseFloat(formTextArray[256]);
                    $scope.input258 = formTextArray[257];
                    $scope.input259 = formTextArray[258];
                    $scope.input260 = formTextArray[259];
                    $scope.count = formTextArray[260];
                }

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
                                "form": 'Propuesta de valor'
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
                        "formName": 'form1'
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
                        ";" + $scope.input40 + ";" + $scope.input41 + ";" + $scope.input42 + ";" + $scope
                        .input43 + ";" + $scope.input44 + ";" + $scope.input45 + ";" + $scope.input46 +
                        ";" + $scope.input47 + ";" + $scope.input48 + ";" + $scope.input49 + ";" + $scope
                        .input50 + ";" + $scope.input51 + ";" + $scope.input52 + ";" + $scope.input53 +
                        ";" + $scope.input54 + ";" + $scope.input55 + ";" + $scope.input56 + ";" + $scope
                        .input57 + ";" + $scope.input58 + ";" + $scope.input59 + ";" + $scope.input60 +
                        ";" + $scope.input61 + ";" + $scope.input62 + ";" + $scope.input63 + ";" + $scope
                        .input64 + ";" + $scope.input65 + ";" + $scope.input66 + ";" + $scope.input67 +
                        ";" + $scope.input68 + ";" + $scope.input69 + ";" + $scope.input70 + ";" + $scope
                        .input71 + ";" + $scope.input72 + ";" + $scope.input73 + ";" + $scope.input74 +
                        ";" + $scope.input75 + ";" + $scope.input76 + ";" + $scope.input77 + ";" + $scope
                        .input78 + ";" + $scope.input79 + ";" + $scope.input80 + ";" + $scope.input81 +
                        ";" + $scope.input82 + ";" + $scope.input83 + ";" + $scope.input84 + ";" + $scope
                        .input85 + ";" + $scope.input86 + ";" + $scope.input87 + ";" + $scope.input88 +
                        ";" + $scope.input89 + ";" + $scope.input90 + ";" + $scope.input91 + ";" + $scope
                        .input92 + ";" + $scope.input93 + ";" + $scope.input94 + ";" + $scope.input95 +
                        ";" + $scope.input96 + ";" + $scope.input97 + ";" + $scope.input98 + ";" + $scope
                        .input99 + ";" + $scope.input100 + ";" + $scope.input101 + ";" + $scope.input102 +
                        ";" + $scope.input103 + ";" + $scope.input104 + ";" + $scope.input105 + ";" + $scope
                        .input106 + ";" + $scope.input107 + ";" + $scope.input108 + ";" + $scope.input109 +
                        ";" + $scope.input110 + ";" + $scope.input111 + ";" + $scope.input112 + ";";
                    let texto1 = $scope.input113 + ";" + $scope.input114 + ";" + $scope.input115 + ";" +
                        $scope.input116 + ";" + $scope.input117 + ";" + $scope.input118 + ";" + $scope
                        .input119 + ";" + $scope.input120 + ";" + $scope.input121 + ";" + $scope.input122 +
                        ";" + $scope.input123 + ";" + $scope.input124 + ";" + $scope.input125 + ";" + $scope
                        .input126 + ";" + $scope.input127 + ";" + $scope.input128 + ";" + $scope.input129 +
                        ";" + $scope.input130 + ";" + $scope.input131 + ";" + $scope.input132 + ";" + $scope
                        .input133 + ";" + $scope.input134 + ";" + $scope.input135 + ";" + $scope.input136 +
                        ";" + $scope.input137 + ";" + $scope.input138 + ";" + $scope.input139 + ";" + $scope
                        .input140 + ";" + $scope.input141 + ";" + $scope.input142 + ";" + $scope.input143 +
                        ";" + $scope.input144 + ";" + $scope.input145 + ";" + $scope.input146 + ";" + $scope
                        .input147 + ";" + $scope.input148 + ";" + $scope.input149 + ";" + $scope.input150 +
                        ";" + $scope.input151 + ";" + $scope.input152 + ";" + $scope.input153 + ";" + $scope
                        .input154 + ";" + $scope.input155 + ";" + $scope.input156 + ";" + $scope.input157 +
                        ";" + $scope.input158 + ";" + $scope.input159 + ";" + $scope.input160 + ";" + $scope
                        .input161 + ";" + $scope.input162 + ";" + $scope.input163 + ";" + $scope.input164 +
                        ";" + $scope.input165 + ";" + $scope.input166 + ";" + $scope.input167 + ";" + $scope
                        .input168 + ";" + $scope.input169 + ";" + $scope.input170 + ";" + $scope.input171 +
                        ";" + $scope.input172 + ";" + $scope.input173 + ";" + $scope.input174 + ";" + $scope
                        .input175 + ";" + $scope.input176 + ";" + $scope.input177 + ";" + $scope.input178 +
                        ";" + $scope.input179 + ";" + $scope.input180 + ";" + $scope.input181 + ";" + $scope
                        .input182 + ";" + $scope.input183 + ";" + $scope.input184 + ";" + $scope.input185 +
                        ";" + $scope.input186 + ";" + $scope.input187 + ";";
                    let texto2 = $scope.input188 + ";" + $scope.input189 + ";" + $scope.input190 + ";" +
                        $scope.input191 + ";" + $scope.input192 + ";" + $scope.input193 + ";" + $scope
                        .input194 + ";" + $scope.input195 + ";" + $scope.input196 + ";" + $scope.input197 +
                        ";" + $scope.input198 + ";" + $scope.input199 + ";" + $scope.input200 + ";" + $scope
                        .input201 + ";" + $scope.input202 + ";" + $scope.input203 + ";" + $scope.input204 +
                        ";" + $scope.input205 + ";" + $scope.input206 + ";" + $scope.input207 + ";" + $scope
                        .input208 + ";" + $scope.input209 + ";" + $scope.input210 + ";" + $scope.input211 +
                        ";" + $scope.input212 + ";" + $scope.input213 + ";" + $scope.input214 + ";" + $scope
                        .input215 + ";" + $scope.input216 + ";" + $scope.input217 + ";" + $scope.input218 +
                        ";" + $scope.input219 + ";" + $scope.input220 + ";" + $scope.input221 + ";" + $scope
                        .input222 + ";" + $scope.input223 + ";" + $scope.input224 + ";" + $scope.input225 +
                        ";" + $scope.input226 + ";" + $scope.input227 + ";" + $scope.input228 + ";" + $scope
                        .input229 + ";" + $scope.input230 + ";" + $scope.input231 + ";" + $scope.input232 +
                        ";" + $scope.input233 + ";" + $scope.input234 + ";" + $scope.input235 + ";" + $scope
                        .input236 + ";" + $scope.input237 + ";" + $scope.input238 + ";" + $scope.input239 +
                        ";" + $scope.input240 + ";" + $scope.input241 + ";" + $scope.input242 + ";" + $scope
                        .input243 + ";" + $scope.input244 + ";" + $scope.input245 + ";" + $scope.input246 +
                        ";" + $scope.input247 + ";" + $scope.input248 + ";" + $scope.input249 + ";" + $scope
                        .input250 + ";" + $scope.input251 + ";" + $scope.input252 + ";" + $scope.input253 +
                        ";" + $scope.input254 + ";" + $scope.input255 + ";" + $scope.input256 + ";" + $scope
                        .input257 + ";" + $scope.input258 + ";" + $scope.input259 + ";" + $scope.input260 +
                        ";" + $scope.count + ";";

                    $scope.forms.formText = texto + texto1 + texto2;
                    $http.put('/forms1', $scope.forms).then((result) => {
                        //console.log(result.data);
                        Swal.fire({
                            type: 'success',
                            title: 'Hecho!',
                            text: 'Se guardó el formulario',
                            confirmButtonText: 'Ok!'
                        });
                    })
                }
                $scope.producto2 = function() {
                    if (document.getElementById("product2").style.display == "block") {
                        document.getElementById("product2").style.display = "none";
                        document.getElementById("add2").style.display = "block";
                        $scope.count = 1;
                    } else {
                        document.getElementById("product2").style.display = "block";
                        document.getElementById("add2").style.display = "none";
                        document.getElementById("add3").style.display = "block";
                        document.getElementById("delete2").style.display = "block";
                        $scope.count = 2;
                    }

                }
                $scope.producto3 = function() {
                    if (document.getElementById("product3").style.display == "block") {
                        document.getElementById("product3").style.display = "none";
                        document.getElementById("add3").style.display = "block";
                        document.getElementById("delete3").style.display = "none";
                        document.getElementById("delete2").style.display = "block";
                        $scope.count = 2;
                    } else {
                        document.getElementById("product3").style.display = "block";
                        document.getElementById("delete3").style.display = "block"
                        document.getElementById("add3").style.display = "none";
                        document.getElementById("delete2").style.display = "none";
                        $scope.count = 3;
                    }
                }
                $scope.func1 = function() {
                    if (document.getElementById("input60").value > 20) {
                        alert("El valor no puede ser mayor a 20");
                        document.getElementById("input60").value = 20;
                    }
                    if (document.getElementById("input61").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input61").value = 100;
                    } else {
                        $scope.input62 = (document.getElementById("input61").value / 100) * document
                            .getElementById("input60").value;
                    }
                };
                $scope.func2 = function() {
                    if (document.getElementById("input63").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input63").value = 100;
                    } else {
                        $scope.input64 = (document.getElementById("input63").value / 100) * document
                            .getElementById("input62").value;
                    }
                };
                $scope.func3p1 = function() {
                    if (document.getElementById("input76").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input76").value = 100;
                    }
                    if (document.getElementById("input79").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input79").value = 100;
                    }
                    if (document.getElementById("input82").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input82").value = 100;
                    }
                    if (document.getElementById("input85").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input85").value = 100;
                    }
                    if (document.getElementById("input88").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input88").value = 100;
                    }
                    if (document.getElementById("input91").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input91").value = 100;
                    }
                    if (document.getElementById("input94").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input94").value = 100;
                    }
                    if (document.getElementById("input97").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input97").value = 100;
                    }
                    if (document.getElementById("input100").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input100").value = 100;
                    }
                    if (document.getElementById("input103").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input103").value = 100;
                    }
                    if (document.getElementById("input106").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input106").value = 100;
                    }
                    if (document.getElementById("input109").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input109").value = 100;
                    }
                }
                $scope.check1p1 = function() {
                    if (document.getElementById("input40").checked == true) {
                        document.getElementById("b2cp1").style.display = "block";
                        $scope.input40 = true;
                    } else {
                        document.getElementById("b2cp1").style.display = "none";
                        $scope.input40 = false;
                    }
                    if (document.getElementById("input41").checked == true) {
                        document.getElementById("b2bp1").style.display = "block";
                        $scope.input41 = true;
                    } else {
                        document.getElementById("b2bp1").style.display = "none";
                        $scope.input41 = false;
                    }
                    if (document.getElementById("input42").checked == true) {
                        $scope.input42 = true;
                    } else {
                        $scope.input42 = false;
                    }
                };
                $scope.checkboxesp1 = function() {
                    if ($scope.input40 == "true") {
                        document.getElementById("input40").checked = true;
                    }
                    if ($scope.input41 == "true") {
                        document.getElementById("input41").checked = true;
                    }
                    if ($scope.input42 == "true") {
                        document.getElementById("input42").checked = true;
                    }
                    $scope.check1p1();
                };
                $scope.func1p2 = function() {
                    if (document.getElementById("input135").value > 20) {
                        alert("El valor no puede ser mayor a 20");
                        document.getElementById("input135").value = 20;
                    }
                    if (document.getElementById("input135").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input136").value = 100;
                    } else {
                        $scope.input137 = (document.getElementById("input136").value / 100) * document
                            .getElementById("input135").value;
                    }
                };
                $scope.func2p2 = function() {
                    if (document.getElementById("input138").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input138").value = 100;
                    } else {
                        $scope.input139 = (document.getElementById("input138").value / 100) * document
                            .getElementById("input137").value;
                    }
                };
                $scope.func3p2 = function() {
                    if (document.getElementById("input151").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input151").value = 100;
                    } else {
                        $scope.input141 = (document.getElementById("input151").value / 100) * document
                            .getElementById("input139").value;
                    }
                    if (document.getElementById("input154").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input154").value = 100;
                    } else {
                        $scope.input142 = (document.getElementById("input154").value / 100) * document
                            .getElementById("input139").value;
                    }
                    if (document.getElementById("input157").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input157").value = 100;
                    } else {
                        $scope.input143 = (document.getElementById("input157").value / 100) * document
                            .getElementById("input139").value;
                    }
                    if (document.getElementById("input160").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input160").value = 100;
                    } else {
                        $scope.input144 = (document.getElementById("input160").value / 100) * document
                            .getElementById("input139").value;
                    }
                    if (document.getElementById("input163").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input163").value = 100;
                    } else {
                        $scope.input145 = (document.getElementById("input163").value / 100) * document
                            .getElementById("input139").value;
                    }
                    if (document.getElementById("input166").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input166").value = 100;
                    } else {
                        $scope.input146 = (document.getElementById("input166").value / 100) * document
                            .getElementById("input139").value;
                    }
                    if (document.getElementById("input169").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input169").value = 100;
                    } else {
                        $scope.input147 = (document.getElementById("input169").value / 100) * document
                            .getElementById("input139").value;
                    }
                    if (document.getElementById("input172").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input172").value = 100;
                    } else {
                        $scope.input148 = (document.getElementById("input172").value / 100) * document
                            .getElementById("input139").value;
                    }
                    if (document.getElementById("input175").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input175").value = 100;
                    } else {
                        $scope.input149 = (document.getElementById("input175").value / 100) * document
                            .getElementById("input139").value;
                    }
                    if (document.getElementById("input178").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input178").value = 100;
                    } else {
                        $scope.input150 = (document.getElementById("input178").value / 100) * document
                            .getElementById("input139").value;
                    }
                    if (document.getElementById("input181").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input181").value = 100;
                    } else {
                        $scope.input152 = (document.getElementById("input181").value / 100) * document
                            .getElementById("input139").value;
                    }
                    if (document.getElementById("input184").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input184").value = 100;
                    } else {
                        $scope.input153 = (document.getElementById("input184").value / 100) * document
                            .getElementById("input139").value;
                    }
                };
                $scope.check1p2 = function() {
                    if (document.getElementById("input115").checkede == true) {
                        document.getElementById("b2cp2").style.display = "block";
                        $scope.input115 = true;
                    } else {
                        document.getElementById("b2cp2").style.display = "none";
                        $scope.input115 = false;
                    }
                    if (document.getElementById("input116").checked == true) {
                        document.getElementById("b2bp2").style.display = "block";
                        $scope.input116 = true;
                    } else {
                        document.getElementById("b2bp2").style.display = "none";
                        $scope.input116 = false;
                    }
                    if (document.getElementById("input117").checked == true) {
                        $scope.input117 = true;
                    } else {
                        $scope.input117 = false;
                    }
                };
                $scope.checkboxesp2 = function() {
                    if ($scope.input115 == "true") {
                        document.getElementById("input115").checked = true;
                    }
                    if ($scope.input116 == "true") {
                        document.getElementById("input116").checked = true;
                    }
                    if ($scope.input117 == "true") {
                        document.getElementById("input117").checked = true;
                    }
                    $scope.check1p2();
                };
                $scope.check1p3 = function() {
                    if (document.getElementById("input189").checked == true) {
                        document.getElementById("b2cp3").style.display = "block";
                        $scope.input189 = true;
                    } else {
                        document.getElementById("b2cp3").style.display = "none";
                        $scope.input189 = false;
                    }
                    if (document.getElementById("input190").checked == true) {
                        document.getElementById("b2bp3").style.display = "block";
                        $scope.input190 = true;
                    } else {
                        document.getElementById("b2bp3").style.display = "none";
                        $scope.input190 = false;
                    }
                    if (document.getElementById("input191").checked == true) {
                        $scope.input191 = true;
                    } else {
                        $scope.input191 = false;
                    }
                }
                $scope.checkboxesp3 = function() {
                    if ($scope.input189 == "true") {
                        document.getElementById("input189").checked = true;
                    }
                    if ($scope.input190 == "true") {
                        document.getElementById("input190").checked = true;
                    }
                    if ($scope.input191 == "true") {
                        document.getElementById("input191").checked = true;
                    }
                    $scope.check1p3();
                }
                $scope.func1p3 = function() {
                    if (document.getElementById("input208").value > 20) {
                        alert("El valor no puede ser mayor a 20");
                        document.getElementById("input208").value = 20;
                    }
                    if (document.getElementById("input209").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input209").value = 100;
                    } else {
                        $scope.input210 = (document.getElementById("input209").value / 100) * document
                            .getElementById("input208").value;
                    }
                }
                $scope.func2p3 = function() {
                    if (document.getElementById("input211").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input211").value = 100;
                    } else {
                        $scope.input212 = (document.getElementById("input211").value / 100) * document
                            .getElementById("input210").value;
                    }
                }
                $scope.func3p3 = function() {
                    if (document.getElementById("input224").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input224").value = 100;
                    } else {
                        $scope.input225 = (document.getElementById("input224").value / 100) * document
                            .getElementById("input223").value;
                    }
                    if (document.getElementById("input227").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input227").value = 100;
                    } else {
                        $scope.input228 = (document.getElementById("input227").value / 100) * document
                            .getElementById("input223").value;
                    }
                    if (document.getElementById("input230").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input230").value = 100;
                    } else {
                        $scope.input231 = (document.getElementById("input230").value / 100) * document
                            .getElementById("input223").value;
                    }
                    if (document.getElementById("input233").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input233").value = 100;
                    } else {
                        $scope.input234 = (document.getElementById("input233").value / 100) * document
                            .getElementById("input223").value;
                    }
                    if (document.getElementById("input236").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input236").value = 100;
                    } else {
                        $scope.input237 = (document.getElementById("input236").value / 100) * document
                            .getElementById("input223").value;
                    }
                    if (document.getElementById("input239").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input239").value = 100;
                    } else {
                        $scope.input240 = (document.getElementById("input239").value / 100) * document
                            .getElementById("input223").value;
                    }
                    if (document.getElementById("input242").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input242").value = 100;
                    } else {
                        $scope.input243 = (document.getElementById("input242").value / 100) * document
                            .getElementById("input223").value;
                    }
                    if (document.getElementById("input245").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input245").value = 100;
                    } else {
                        $scope.input246 = (document.getElementById("input245").value / 100) * document
                            .getElementById("input223").value;
                    }
                    if (document.getElementById("input248").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input248").value = 100;
                    } else {
                        $scope.input249 = (document.getElementById("input248").value / 100) * document
                            .getElementById("input223").value;
                    }
                    if (document.getElementById("input251").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input251").value = 100;
                    } else {
                        $scope.input252 = (document.getElementById("input251").value / 100) * document
                            .getElementById("input223").value;
                    }
                    if (document.getElementById("input254").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input254").value = 100;
                    } else {
                        $scope.input255 = (document.getElementById("input254").value / 100) * document
                            .getElementById("input223").value;
                    }
                    if (document.getElementById("input257").value > 100) {
                        alert("El valor no puede ser mayor a 100");
                        document.getElementById("input257").value = 100;
                    } else {
                        $scope.input258 = (document.getElementById("input257").value / 100) * document
                            .getElementById("input223").value;
                    }
                }
            });
            </script>
        </div>
    </div>
</div>
@endsection
