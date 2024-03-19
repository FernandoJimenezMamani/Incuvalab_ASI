@extends('layouts.Dashboard')
@section('script')

@stop
@section('content')
<style type="text/css">
.backgroundGrey {
    background-color: #5A5C69;
    font-weight: bold;
}

.bolder {
    font-weight: bold;
}
</style>
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

    $scope.input1p2 = "";
    $scope.input2p2 = "";
    $scope.input3p2 = "";
    $scope.input4p2 = "";
    $scope.input5p2 = "";
    $scope.input6p2 = "";
    $scope.input7p2 = "";
    $scope.input8p2 = "";
    $scope.input9p2 = "";
    $scope.input10p2 = "";
    $scope.input11p2 = "";
    $scope.input12p2 = "";
    $scope.input13p2 = "";
    $scope.input14p2 = "";
    $scope.input15p2 = "";
    $scope.input16p2 = "";
    $scope.input17p2 = "";
    $scope.input18p2 = "";
    $scope.input19p2 = "";
    $scope.input20p2 = "";
    $scope.input21p2 = "";
    $scope.input22p2 = "";
    $scope.input23p2 = "";
    $scope.input24p2 = "";

    $scope.input1p3 = "";
    $scope.input2p3 = "";
    $scope.input3p3 = "";
    $scope.input4p3 = "";
    $scope.input5p3 = "";
    $scope.input6p3 = "";
    $scope.input7p3 = "";
    $scope.input8p3 = "";
    $scope.input9p3 = "";
    $scope.input10p3 = "";
    $scope.input11p3 = "";
    $scope.input12p3 = "";
    $scope.input13p3 = "";
    $scope.input14p3 = "";
    $scope.input15p3 = "";
    $scope.input16p3 = "";
    $scope.input17p3 = "";
    $scope.input18p3 = "";
    $scope.input19p3 = "";
    $scope.input20p3 = "";
    $scope.input21p3 = "";
    $scope.input22p3 = "";
    $scope.input23p3 = "";
    $scope.input24p3 = "";

    $scope.product1 = "";
    $scope.product2 = "";
    $scope.product3 = "";
    $scope.count = "";
    $scope.form4 = "";
    $scope.cac1 = "";
    $scope.cac2 = "";
    $scope.cac3 = "";
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
            $http.get(`/forms5/${teamId}`).then((result) => {
                $scope.forms = result.data;
                $scope.formComment = $scope.forms.formComments;
                $scope.parseArrayValues();
            })
            $http.get(`/forms1/${teamId}`).then((result) => {
                $scope.forms1 = result.data;
                $scope.parseArrayValues1();
            })
            $http.get(`/forms4/${teamId}`).then((result) => {
                $scope.forms4 = result.data;
                $scope.parseArrayValues4();
            })

            //hab forms
            var formNumber = 5;

            $http.get('/verifiedTeacher/' + teamId).then((res) => {
                var status = res.data[0].status;
                var s = status.split(',')
                var s2 = status.split(',')

                s[formNumber - 1] = 1;
                s2[formNumber - 1] = 0;
                var newStatusHab = s[0] + "," + s[1] + "," + s[2] + "," + s[3] + "," + s[4] +
                    "," + s[5] + "," + s[6];
                var newStatusDesHab = s2[0] + "," + s2[1] + "," + s2[2] + "," + s2[3] + "," +
                    s2[4] + "," + s2[5] + "," + s2[6];
                var newStatusAprob = s[0] + "," + s[1] + "," + s[2] + "," + s[3] + ",3,1," + s[
                    6];
                var formName = 'Precio y Viabilidad del Negocio';
                $scope.sendObjectTeamHab = {
                    id: teamId,
                    status: newStatusHab,
                    type:0
                }
                $scope.sendObjectTeamDesHab = {
                    id: teamId,
                    status: newStatusDesHab,
                    type:0
                }
                $scope.sendObjectTeamAprob = {
                    id: teamId,
                    status: newStatusAprob,
                    fName: formName,
                    type:1, phase: 6
                }


            })
            //fin hab forms


        } else if (userType == "student") {

            $http.get(`/verified`).then((res) => {
                var status = res.data[0].status;
                var s = status.split(',')

                if (s[4] == 0) {
                    window.location.href = '/home'
                }


                if (s[4] == 3) {
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
                $http.get(`/forms5/${teamId}`).then((result) => {
                    $scope.forms = result.data;
                    $scope.formComment = $scope.forms.formComments;
                    $scope.parseArrayValues();
                })
                $http.get(`/forms1/${teamId}`).then((result) => {
                    $scope.forms1 = result.data;
                    $scope.parseArrayValues1();
                })
                $http.get(`/forms4/${teamId}`).then((result) => {
                    $scope.forms4 = result.data;
                    $scope.parseArrayValues4();
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
                            $http.put('/updateStatus', $scope.sendObjectTeamAprob).then(res=>{
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


    $scope.parseArrayValues4 = () => {
        let formText = $scope.forms4.formText;
        let formTextArray = formText.split(';');
        $scope.cac1 = formTextArray[97];
        $scope.cac2 = formTextArray[196];
        $scope.cac3 = formTextArray[295];

    };
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
            document.getElementById("producto2").style.display = "none";
            document.getElementById("producto3").style.display = "none";
        }
        if ($scope.input188 == "2") {
            document.getElementById("producto2").style.display = "block";
            document.getElementById("producto3").style.display = "none";
        }
        if ($scope.input189 == "3") {
            document.getElementById("producto2").style.display = "block";
            document.getElementById("producto3").style.display = "block";
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
        $scope.input15 = parseFloat(formTextArray[14]);
        $scope.input16 = formTextArray[15];
        $scope.input17 = formTextArray[16];
        $scope.input18 = formTextArray[17];
        $scope.input19 = formTextArray[18];
        $scope.input20 = formTextArray[19];
        $scope.input21 = formTextArray[20];
        $scope.input22 = formTextArray[21];
        $scope.input23 = formTextArray[22];
        $scope.input24 = formTextArray[23];

        //p2
        $scope.input1p2 = formTextArray[24];
        $scope.input2p2 = formTextArray[25];
        $scope.input3p2 = formTextArray[26];
        $scope.input4p2 = formTextArray[27];
        $scope.input5p2 = formTextArray[28];
        $scope.input6p2 = formTextArray[29];
        $scope.input7p2 = formTextArray[30];
        $scope.input8p2 = formTextArray[31];
        $scope.input9p2 = formTextArray[32];
        $scope.input10p2 = formTextArray[33];
        $scope.input11p2 = formTextArray[34];
        $scope.input12p2 = formTextArray[35];
        $scope.input13p2 = formTextArray[36];
        $scope.input14p2 = formTextArray[37];
        $scope.input15p2 = parseFloat(formTextArray[38]);
        $scope.input16p2 = formTextArray[39];
        $scope.input17p2 = formTextArray[40];
        $scope.input18p2 = formTextArray[41];
        $scope.input19p2 = formTextArray[42];
        $scope.input20p2 = formTextArray[43];
        $scope.input21p2 = formTextArray[44];
        $scope.input22p2 = formTextArray[45];
        $scope.input23p2 = formTextArray[46];
        $scope.input24p2 = formTextArray[47];

        //p3
        $scope.input1p3 = formTextArray[48];
        $scope.input2p3 = formTextArray[49];
        $scope.input3p3 = formTextArray[50];
        $scope.input4p3 = formTextArray[51];
        $scope.input5p3 = formTextArray[52];
        $scope.input6p3 = formTextArray[53];
        $scope.input7p3 = formTextArray[54];
        $scope.input8p3 = formTextArray[55];
        $scope.input9p3 = formTextArray[56];
        $scope.input10p3 = formTextArray[57];
        $scope.input11p3 = formTextArray[58];
        $scope.input12p3 = formTextArray[59];
        $scope.input13p3 = formTextArray[60];
        $scope.input14p3 = formTextArray[61];
        $scope.input15p3 = parseFloat(formTextArray[62]);
        $scope.input16p3 = formTextArray[63];
        $scope.input17p3 = formTextArray[64];
        $scope.input18p3 = formTextArray[65];
        $scope.input19p3 = formTextArray[66];
        $scope.input20p3 = formTextArray[67];
        $scope.input21p3 = formTextArray[68];
        $scope.input22p3 = formTextArray[69];
        $scope.input23p3 = formTextArray[70];
        $scope.input24p3 = formTextArray[71];

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
                    "form": 'Precio y viavilidad del negocio'
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
            "formName": 'form5'
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
        alert(document.getElementById("input5").value);
        let texto = $scope.input1 + ";" + $scope.input2 + ";" + $scope.input3 + ";" + $scope.input4 + ";" +
            $scope.input5 + ";" + $scope.input6 + ";" + $scope.input7 + ";" + $scope.input8 + ";" + $scope
            .input9 + ";" + $scope.input10 + ";" + $scope.input11 + ";" + $scope.input12 + ";" + $scope
            .input13 + ";" + $scope.input14 + ";" + $scope.input15 + ";" + $scope.input16 + ";" + $scope
            .input17 + ";" + $scope.input18 + ";" + $scope.input19 + ";" + $scope.input20 + ";" + $scope
            .input21 + ";" + $scope.input22 + ";" + $scope.input23 + ";" + $scope.input24 + ";";
        let texto2 = $scope.input1p2 + ";" + $scope.input2p2 + ";" + $scope.input3p2 + ";" + $scope
            .input4p2 + ";" + $scope.input5p2 + ";" + $scope.input6p2 + ";" + $scope.input7p2 + ";" + $scope
            .input8p2 + ";" + $scope.input9p2 + ";" + $scope.input10p2 + ";" + $scope.input11p2 + ";" +
            $scope.input12p2 + ";" + $scope.input13p2 + ";" + $scope.input14p2 + ";" + $scope.input15p2 +
            ";" + $scope.input16p2 + ";" + $scope.input17p2 + ";" + $scope.input18p2 + ";" + $scope
            .input19p2 + ";" + $scope.input20p2 + ";" + $scope.input21p2 + ";" + $scope.input22p2 + ";" +
            $scope.input23p2 + ";" + $scope.input24p2 + ";";
        let texto3 = $scope.input1p3 + ";" + $scope.input2p3 + ";" + $scope.input3p3 + ";" + $scope
            .input4p3 + ";" + $scope.input5p3 + ";" + $scope.input6p3 + ";" + $scope.input7p3 + ";" + $scope
            .input8p3 + ";" + $scope.input9p3 + ";" + $scope.input10p3 + ";" + $scope.input11p3 + ";" +
            $scope.input12p3 + ";" + $scope.input13p3 + ";" + $scope.input14p3 + ";" + $scope.input15p3 +
            ";" + $scope.input16p3 + ";" + $scope.input17p3 + ";" + $scope.input18p3 + ";" + $scope
            .input19p3 + ";" + $scope.input20p3 + ";" + $scope.input21p3 + ";" + $scope.input22p3 + ";" +
            $scope.input23p3 + ";" + $scope.input24p3 + ";";
        $scope.forms.formText = texto + texto2 + texto3;
        $http.put('/forms5', $scope.forms).then((result) => {
            //console.log(result.data);
            Swal.fire({
                type: 'success',
                title: 'Hecho!',
                text: 'Se guardó el formulario',
                confirmButtonText: 'Ok!'
            });
        })

    }
    $scope.checkRadios = () => {
        $scope.checkRadio1();
        $scope.checkRadio2();
    }
    $scope.checkRadio1 = () => {
        let inf1 = "";
        let radio1 = document.getElementsByName('radio1');
        for (let i = 0; i < radio1.length; i++) {
            if (radio1[i].checked) {
                inf1 = radio1[i].value;
            }
        }
        if (inf1 == "option1") {
            $scope.input1 = 'option1';
            $scope.input2 = ' ';
        } else if (inf1 == "option2") {
            $scope.input1 = ' ';
            $scope.input2 = 'option2';
        }
    }
    $scope.checkRadio2 = () => {
        let inf2 = "";
        let radio2 = document.getElementsByName('radio2');
        for (let i = 0; i < radio2.length; i++) {
            if (radio2[i].checked) {
                inf2 = radio2[i].value;
            }
        }
        if (inf2 == "option1") {
            $scope.input3 = 'option1';
            $scope.input4 = ' ';
        } else if (inf2 == "option2") {
            $scope.input3 = ' ';
            $scope.input4 = 'option2';
        }
    }
    $scope.func1 = function() {
        $scope.input19 = document.getElementById("input18").value * document.getElementById("input17")
            .value * document.getElementById("input16").value;
        $scope.input24 = document.getElementById("input19").value / $scope.cac1;
    }
    $scope.func2 = function() {
        $scope.input19p2 = document.getElementById("input18p2").value * document.getElementById("input17p2")
            .value * document.getElementById("input16p2").value;
        $scope.input24p2 = document.getElementById("input19p2").value / $scope.cac2;
    }
    $scope.func3 = function() {
        $scope.input19p3 = document.getElementById("input18p3").value * document.getElementById("input17p3")
            .value * document.getElementById("input16p3").value;
        $scope.input24p3 = document.getElementById("input19p3").value / $scope.cac3;
    }
});
</script>
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

                    <h1 class="text-center font-weight-bold">Precio y Viabilidad del Negocio</h1>
                    <br>
                    <h4 class="text-center app-subtitle backgroundGrey">Estrategias de precio de lanzamiento al mercado</h4>
                    <br>
                    <div>
                        <input type="text" class="form-control" name="" ng-model="product1" id="product1"
                            aria-describedby="helpId" placeholder="">
                        <br>
                        <h5 class="bolder">Estas cuatro estrategias se clasifican en función de su precio inicial (lanzamiento al
                            mercado) y el precio en el futuro. ¿Cuáles te parecen interesantes para tu negocio?</h5>
                        <div class="input-group">
                            <label for="username" class="text-left bg-dark border rounded-left"
                                style="padding: 30px;color: white;margin-block-end: 15px;">Alto</label>
                            <div class="row" style="margin-inline-start: 1px;">
                                <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6"
                                    style="padding: 21px 10px 0px 10px;border: 1px dashed black;">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input1" id="input1" name="radio1"
                                            value="option1" type="radio">
                                        <label class="hasLabel" for="radio1">Estrategia Descremado</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6"
                                    style="padding: 21px 10px 0px 10px;border: 1px dashed black;">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input2" id="input2" name="radio1"
                                            value="option2" type="radio">
                                        <label class="hasLabel" for="radio1">Estrategia Premium</label>
                                    </div>
                                </checkbox>
                            </div>
                            <div class="input-group">
                                <label for="username" class="text-left bg-dark border rounded-left"
                                    style="padding: 30px;color: white;margin-block-end: 15px;">Bajo</label>
                                <div class="row" style="margin-inline-start: 1px;">
                                    <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6"
                                        style="padding: 21px 10px 0px 10px;border: 1px dashed black;">
                                        <div class="checkbox-container">
                                            <input class="app-antepnp" ng-model="input3" id="input3" name="radio2"
                                                value="option1" type="radio">
                                            <label class="hasLabel" for="radio2">Estrategia Económica</label>
                                        </div>
                                    </checkbox>
                                    <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6"
                                        style="padding: 21px 10px 0px 10px;border: 1px dashed black;">
                                        <div class="checkbox-container">
                                            <input class="app-antepnp" ng-model="input4" id="input4" name="radio2"
                                                value="option2" type="radio">
                                            <label class="hasLabel" for="radio2">Estrategia de Penetración</label>
                                        </div>
                                    </checkbox>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle backgroundGrey">Otras estrategias de precio</h4>
                    <br>
                    <div>
                        <div class="row">
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6 ">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" ng-model="input5" id="input5" name="mdnegocio" value="1"
                                        type="checkbox">
                                    <label class="hasLabel" for="mdnegocio1">Precios Psicológicos</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" ng-model="input6" id="input6" name="mdnegocio2" value="2"
                                        type="checkbox">
                                    <label class="hasLabel" for="mdnegocio2">Estrategia de mercado</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" ng-model="input7" id="input7" name="mdnegocio3" value="3"
                                        type="checkbox">
                                    <label class="hasLabel" for="mdnegocio3">Estrategia de líneas de productos</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" ng-model="input8" id="input8" name="mdnegocio4" value="4"
                                        type="checkbox">
                                    <label class="hasLabel" for="mdnegocio4">Estrategia de agrupación</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" ng-model="input9" id="input9" name="mdnegocio5" value="5"
                                        type="checkbox">
                                    <label class="hasLabel" for="mdnegocio5">Estrategia de competición</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" ng-model="input10" id="input10" name="mdnegocio6"
                                        value="6" type="checkbox">
                                    <label class="hasLabel" for="mdnegocio6">Estrategia de impresora y tinta</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" ng-model="input11" id="input11" name="mdnegocio7"
                                        value="7" type="checkbox">
                                    <label class="hasLabel" for="mdnegocio7">Estrategia de productos opcionales</label>
                                </div>
                            </checkbox>
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                <div class="checkbox-container">
                                    <input class="app-antepnp" ng-model="input12" id="input12" name="mdnegocio8"
                                        value="8" type="checkbox">
                                    <label class="hasLabel" for="mdnegocio8">Precios marcados por el cliente</label>
                                </div>
                            </checkbox>
                        </div>
                        <div class="mb-3">
                            <h4 for="" class="text-left bolder">Crea y define la mejor estrategia de precios para cada segmento
                                de mercado seleccionando las estrategias seleccionadas, puedes crear una personalizada
                            </h4>
                            <textarea type="" class="form-control " name="" ng-model="input13" id="input13"
                                aria-describedby="helpId" placeholder=""></textarea>
                            <br>
                            <textarea type="" class="form-control " name="" ng-model="input14" id="input14"
                                aria-describedby="helpId" placeholder=""></textarea>
                        </div>
                    </div>

                    <h4 class="text-center app-subtitle backgroundGrey">Disposición a pagar</h4>
                    <div>
                        <div class="mb-3">
                            <h4 for="" class="text-left bolder">Realiza una encuesta para saber si tus clientes, están
                                dispuestos a pagar por tu producto . Utiliza como referencia el PDF base para la
                                encuesta, el mismo debes solicitarlo a tu mentor</h4>
                            <p>Analiza todos los datos de precios que has recopilado hasta ahora y elige un precio inicial</p>
                            <label class="bg-dark border rounded pl-3 pr-3">Precio</label>
                            <input type="number" min="1" step="0.1" class="form-control" name="" ng-model="input15"
                                id="input15" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>

                    <h4 class="text-center app-subtitle backgroundGrey">Lifetime Value Retention</h4>
                    <h5 class="bolder">Valor de vida útil (conocido como LTV) es una estimación del promedio de ingresos que un cliente generará a lo largo de su vida útil como cliente. En términos comunes: En promedio, ¿cuánto dinero gastará un cliente en tu producto o servicio a lo largo del tiempo?<h5>
                    <p>Ingresa los siguientes datos, para calcular el LTV</p>
                    
                    <div>
                        <div class="">
                            <div class="mb-3">
                                <label for="" class="form-label bg-dark border rounded pl-3 pr-3">Frecuencia</label>
                                <input type="text" class="form-control" name="" ng-model="input16" id="input16"
                                    aria-describedby="helpId" placeholder="" ng-change="func1()">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label bg-dark border rounded pl-3 pr-3">Duración</label>
                                <input type="text" class="form-control" name="" ng-model="input17" id="input17"
                                    aria-describedby="helpId" placeholder="" ng-change="func1()">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label bg-dark border rounded pl-3 pr-3">Valor del pedido</label>
                                <input type="text" class="form-control" name="" ng-model="input18" id="input18"
                                    aria-describedby="helpId" placeholder="" ng-change="func1()">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label bg-dark border rounded pl-3 pr-3">LTV</label>
                                <input type="text" class="form-control" name="" ng-model="input19" id="input19"
                                    aria-describedby="helpId" placeholder="" readonly>
                            </div>
                        </div>
                    </div>
                    <p>Menciona las actividades de retención, para mantener a tus clientes</h4>
                    <div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="" ng-model="input20" id="input20"
                                aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="" ng-model="input21" id="input21"
                                aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="" ng-model="input22" id="input22"
                                aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="" ng-model="input23" id="input23"
                                aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle backgroundGrey">Relación LTV y CAC</h4>
                    <p>Ahora analizaremos la relación LTV/CAC</p>
                    <div>
                        <div class="mb-3">
                            <label for="" class="form-label bg-dark border rounded pl-3 pr-3">Relación LTV/CAC</label>
                            <input type="text" class="form-control" name="" ng-model="input24" id="input24"
                                aria-describedby="helpId" placeholder="" readonly readonly>
                        </div>
                    </div>
                    <div id="producto2">
                        <h4 class="text-center app-subtitle backgroundGrey">Estrategias de precio de lanzamiento al mercado</h4>
                        <div>
                            <input type="text" class="form-control" name="" ng-model="product2" id="product2"
                                aria-describedby="helpId" placeholder="">
                            <h5>Estas cuatro estrategias se clasifican en función de su precio inicial (lanzamiento al
                                mercado) y el precio en el futuro. ¿Cuáles te parecen interesantes para tu negocio?</h5>
                            <div class="input-group">
                                <label for="username" class="text-left"
                                    style="background: #971c2e;padding: 30px;color: white;margin-block-end: 15px;">Alto</label>
                                <div class="row" style="margin-inline-start: 1px;">
                                    <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6"
                                        style="padding: 21px 10px 0px 10px;border: 1px dashed black;">
                                        <div class="checkbox-container">
                                            <input class="app-antepnp" ng-model="input1p2" id="input1p2" name="radio1"
                                                value="option1" type="radio">
                                            <label class="hasLabel" for="radio1">Estrategia Descremado</label>
                                        </div>
                                    </checkbox>
                                    <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6"
                                        style="padding: 21px 10px 0px 10px;border: 1px dashed black;">
                                        <div class="checkbox-container">
                                            <input class="app-antepnp" ng-model="input2p2" id="input2p2" name="radio1"
                                                value="option2" type="radio">
                                            <label class="hasLabel" for="radio1">Estrategia Premium</label>
                                        </div>
                                    </checkbox>
                                </div>
                                <div class="input-group">
                                    <label for="username" class="text-left"
                                        style="background: #971c2e;padding: 30px;color: white;margin-block-end: 15px;">Bajo</label>
                                    <div class="row">
                                        <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6"
                                            style="border: 1px dashed black;padding: 21px 10px 0px 10px;">
                                            <div class="checkbox-container">
                                                <input class="app-antepnp" ng-model="input3p2" id="input3p2"
                                                    name="radio2" value="option1" type="radio">
                                                <label class="hasLabel" for="radio2">Estrategia Económica</label>
                                            </div>
                                        </checkbox>
                                        <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6"
                                            style="padding: 21px 10px 0px 10px;border: 1px dashed black;">
                                            <div class="checkbox-container">
                                                <input class="app-antepnp" ng-model="input4p2" id="input4p2"
                                                    name="radio2" value="option2" type="radio">
                                                <label class="hasLabel" for="radio2">Estrategia de Penetración</label>
                                            </div>
                                        </checkbox>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Otras estrategias de precio</h4>
                        <br>
                        <div>
                            <div class="row">
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6 ">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input5p2" id="input5p2" name="mdnegocio"
                                            value="1" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio1">Precios Psicológicos</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input6p2" id="input6p2" name="mdnegocio2"
                                            value="2" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio2">Estrategia de mercado</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input7p2" id="input7p2" name="mdnegocio3"
                                            value="3" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio3">Estrategia de líneas de
                                            productos</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input8p2" id="input8p2" name="mdnegocio4"
                                            value="4" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio4">Estrategia de agrupación</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input9p2" id="input9p2" name="mdnegocio5"
                                            value="5" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio5">Estrategia de competición</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input10p2" id="input10p2" name="mdnegocio6"
                                            value="6" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio6">Estrategia de impresora y tinta</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input11p2" id="input11p2" name="mdnegocio7"
                                            value="7" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio7">Estrategia de productos
                                            opcionales</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input12p2" id="input12p2" name="mdnegocio8"
                                            value="8" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio8">Precios marcados por el cliente</label>
                                    </div>
                                </checkbox>
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Crea y define la mejor estrategia de precios para cada
                                    segmento de mercado seleccionando las estrategias seleccionadas, puedes crear una
                                    personalizada</h4>
                                <textarea type="" class="form-control " name="" ng-model="input13p2" id="input13p2"
                                    aria-describedby="helpId" placeholder=""></textarea>
                                <br>
                                <textarea type="" class="form-control " name="" ng-model="input14p2" id="input14p2"
                                    aria-describedby="helpId" placeholder=""></textarea>
                            </div>
                        </div>

                        <h4 class="text-center app-subtitle">Otras estrategias de precio</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Realiza una encuesta para saber si tus clientes, están
                                    dispuestos a pagar por tu producto . Utiliza como referencia el PDF base para la
                                    encuesta, el mismo debes solicitarlo a tu mentor</h4>
                                <input type="number" min="1" step="0.1" class="form-control" name=""
                                    ng-model="input15p2" id="input15p2" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>

                        <h4 class="text-center app-subtitle">Lifetime Value Retention</h4>
                        <div>
                            <div class="">
                                <div class="mb-3">
                                    <label for="" class="form-label">Frecuencia</label>
                                    <input type="text" class="form-control" name="" ng-model="input16p2" id="input16p2"
                                        aria-describedby="helpId" placeholder="" ng-change="func1()">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Duración</label>
                                    <input type="text" class="form-control" name="" ng-model="input17p2" id="input17p2"
                                        aria-describedby="helpId" placeholder="" ng-change="func1()">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Valor del pedido</label>
                                    <input type="text" class="form-control" name="" ng-model="input18p2" id="input18p2"
                                        aria-describedby="helpId" placeholder="" ng-change="func1()">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">LTV</label>
                                    <input type="text" class="form-control" name="" ng-model="input19p2" id="input19p2"
                                        aria-describedby="helpId" placeholder="" readonly>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Menciona las actividades de retención, para mantener a tus
                            clientes</h4>
                        <div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input20p2" id="input20p2"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input21p2" id="input21p2"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input22p2" id="input22p2"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input23p2" id="input23p2"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Relación LTV y CAC</h4>
                        <div>
                            <div class="mb-3">
                                <label for="" class="form-label">Relación LTV/CAC</label>
                                <input type="text" class="form-control" name="" ng-model="input24p2" id="input24p2"
                                    aria-describedby="helpId" placeholder="" readonly readonly>
                            </div>
                        </div>
                    </div>
                    <div id="producto3">
                        <h4 class="text-center app-subtitle">Estrategias de precio de lanzamiento al mercado</h4>
                        <div>
                            <input type="text" class="form-control" name="" ng-model="product3" id="product3"
                                aria-describedby="helpId" placeholder="">
                            <h5>Estas cuatro estrategias se clasifican en función de su precio inicial (lanzamiento al
                                mercado) y el precio en el futuro. ¿Cuáles te parecen interesantes para tu negocio?</h5>
                            <div class="input-group">
                                <label for="username" class="text-left"
                                    style="background: #971c2e;padding: 30px;color: white;margin-block-end: 15px;">Alto</label>
                                <div class="row" style="margin-inline-start: 1px;">
                                    <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6"
                                        style="padding: 21px 10px 0px 10px;border: 1px dashed black;">
                                        <div class="checkbox-container">
                                            <input class="app-antepnp" ng-model="input1p3" id="input1p3" name="radio1"
                                                value="option1" type="radio">
                                            <label class="hasLabel" for="radio1">Estrategia Descremado</label>
                                        </div>
                                    </checkbox>
                                    <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6"
                                        style="padding: 21px 10px 0px 10px;border: 1px dashed black;">
                                        <div class="checkbox-container">
                                            <input class="app-antepnp" ng-model="input2p3" id="input2p3" name="radio1"
                                                value="option2" type="radio">
                                            <label class="hasLabel" for="radio1">Estrategia Premium</label>
                                        </div>
                                    </checkbox>
                                </div>
                                <div class="input-group">
                                    <label for="username" class="text-left"
                                        style="background: #971c2e;padding: 30px;color: white;margin-block-end: 15px;">Bajo</label>
                                    <div class="row">
                                        <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6"
                                            style="border: 1px dashed black;padding: 21px 10px 0px 10px;">
                                            <div class="checkbox-container">
                                                <input class="app-antepnp" ng-model="input3p3" id="input3p3"
                                                    name="radio2" value="option1" type="radio">
                                                <label class="hasLabel" for="radio2">Estrategia Económica</label>
                                            </div>
                                        </checkbox>
                                        <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6"
                                            style="padding: 21px 10px 0px 10px;border: 1px dashed black;">
                                            <div class="checkbox-container">
                                                <input class="app-antepnp" ng-model="input4p3" id="input4p3"
                                                    name="radio2" value="option2" type="radio">
                                                <label class="hasLabel" for="radio2">Estrategia de Penetración</label>
                                            </div>
                                        </checkbox>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Otras estrategias de precio</h4>
                        <br>
                        <div>
                            <div class="row">
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6 ">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input5p3" id="input5p3" name="mdnegocio"
                                            value="1" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio1">Precios Psicológicos</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input6p3" id="input6p3" name="mdnegocio2"
                                            value="2" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio2">Estrategia de mercado</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input7p3" id="input7p3" name="mdnegocio3"
                                            value="3" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio3">Estrategia de líneas de
                                            productos</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input8p3" id="input8p3" name="mdnegocio4"
                                            value="4" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio4">Estrategia de agrupación</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input9p3" id="input9p3" name="mdnegocio5"
                                            value="5" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio5">Estrategia de competición</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input10p3" id="input10p3" name="mdnegocio6"
                                            value="6" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio6">Estrategia de impresora y tinta</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input11p3" id="input11p3" name="mdnegocio7"
                                            value="7" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio7">Estrategia de productos
                                            opcionales</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input12p3" id="input12p3" name="mdnegocio8"
                                            value="8" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio8">Precios marcados por el cliente</label>
                                    </div>
                                </checkbox>
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Crea y define la mejor estrategia de precios para cada
                                    segmento de mercado seleccionando las estrategias seleccionadas, puedes crear una
                                    personalizada</h4>
                                <textarea type="" class="form-control " name="" ng-model="input13p3" id="input13p3"
                                    aria-describedby="helpId" placeholder=""></textarea>
                                <br>
                                <textarea type="" class="form-control " name="" ng-model="input14p3" id="input14p3"
                                    aria-describedby="helpId" placeholder=""></textarea>
                            </div>
                        </div>

                        <h4 class="text-center app-subtitle">Otras estrategias de precio</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Realiza una encuesta para saber si tus clientes, están
                                    dispuestos a pagar por tu producto . Utiliza como referencia el PDF base para la
                                    encuesta, el mismo debes solicitarlo a tu mentor</h4>
                                <input type="number" min="1" step="0.1" class="form-control" name=""
                                    ng-model="input15p3" id="input15p3" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>

                        <h4 class="text-center app-subtitle">Lifetime Value Retention</h4>
                        <div>
                            <div class="">
                                <div class="mb-3">
                                    <label for="" class="form-label">Frecuencia</label>
                                    <input type="text" class="form-control" name="" ng-model="input16p3" id="input16p3"
                                        aria-describedby="helpId" placeholder="" ng-change="func1()">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Duración</label>
                                    <input type="text" class="form-control" name="" ng-model="input17p3" id="input17p3"
                                        aria-describedby="helpId" placeholder="" ng-change="func1()">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Valor del pedido</label>
                                    <input type="text" class="form-control" name="" ng-model="input18p3" id="input18p3"
                                        aria-describedby="helpId" placeholder="" ng-change="func1()">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">LTV</label>
                                    <input type="text" class="form-control" name="" ng-model="input19p3" id="input19p3"
                                        aria-describedby="helpId" placeholder="" readonly>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Menciona las actividades de retención, para mantener a tus
                            clientes</h4>
                        <div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input20p3" id="input20p3"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input21p3" id="input21p3"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input22p3" id="input22p3"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input23p3" id="input23p3"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Relación LTV y CAC</h4>
                        <div>
                            <div class="mb-3">
                                <label for="" class="form-label">Relación LTV/CAC</label>
                                <input type="text" class="form-control" name="" ng-model="input24p3" id="input24p3"
                                    aria-describedby="helpId" placeholder="" readonly readonly>
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
        </div>
    </div>
</div>

@endsection