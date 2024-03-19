@extends('layouts.Dashboard')
@section('script')

@stop
@section('content')
<style type="text/css">
    .subtitleDRed {
        color: #B6174B;
    }

    .subtitleWBlue {
        color: #7EA8BE;
    }

    .backgroundBlack {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .backgroundGreen {
        background-color: #018E42;
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
    $scope.input111 = "";
    $scope.input112 = "";
    $scope.input113 = "";
    $scope.input114 = "";
    $scope.input115 = "";





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
            $http.get(`/forms7/${teamId}`).then((result) => {
                $scope.forms = result.data;
                $scope.formComment = $scope.forms.formComments;
                $scope.parseArrayValues();
            })
            //hab forms
            var formNumber = 7;
                        
            $http.get('/verifiedTeacher/'+teamId).then((res) =>{
                var status = res.data[0].status;                       
                var s = status.split(',')  
                var s2 = status.split(',') 
                                        
                s[formNumber-1] = 1;
                s2[formNumber-1] = 0; 
                var newStatusHab = s[0] + "," +s[1] + ","+s[2] + ","+s[3] + ","+s[4] + ","+s[5] + ","+s[6];
                var newStatusDesHab = s2[0] + "," +s2[1] + ","+s2[2] + ","+s2[3] + ","+s2[4] + ","+s2[5] + ","+s2[6];                         
                var newStatusAprob = s[0]+","+s[1]+","+ s[2] + ","+s[3] + ","+s[4] + ","+s[5] + ",3";
                var formName ='Plan de Crecimiento';
                $scope.sendObjectTeamHab = {id : teamId, status : newStatusHab, type:0}
                $scope.sendObjectTeamDesHab = {id : teamId, status : newStatusDesHab,type:0}
                $scope.sendObjectTeamAprob = {id : teamId, status : newStatusAprob, fName: formName,type:1, phase: 0}
                

            })
            //fin hab forms
        } else if (userType == "student") {
            $http.get(`/verified`).then((res) =>{
                var status = res.data[0].status;
                var s = status.split(',')
                
                if(s[6] == 0){
                    window.location.href = '/home'
                }
                    
                
                if(s[6] == 3 ){
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
                $http.get(`/forms7/${teamId}`).then((result) => {
                    $scope.forms = result.data;
                    $scope.formComment = $scope.forms.formComments;
                    $scope.parseArrayValues();
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
    $scope.sendObjectTeamHab= {}
    $scope.sendObjectTeamDesHab= {}
    $scope.sendObjectTeamAprob = {}
    

    $scope.AprobarForm = () =>{
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
        $scope.input60 = formTextArray[59];
        $scope.input61 = formTextArray[60];
        $scope.input62 = formTextArray[61];
        $scope.input63 = formTextArray[62];
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
        $scope.input76 = formTextArray[75];
        $scope.input77 = formTextArray[76];
        $scope.input78 = formTextArray[77];
        $scope.input79 = formTextArray[78];
        $scope.input80 = formTextArray[79];
        $scope.input81 = formTextArray[80];
        $scope.input82 = formTextArray[81];
        $scope.input83 = formTextArray[82];
        $scope.input84 = formTextArray[83];
        $scope.input85 = formTextArray[84];
        $scope.input86 = formTextArray[85];
        $scope.input87 = formTextArray[86];
        $scope.input88 = formTextArray[87];
        $scope.input89 = formTextArray[88];
        $scope.input90 = formTextArray[89];
        $scope.input91 = formTextArray[90];
        $scope.input92 = formTextArray[91];
        $scope.input93 = formTextArray[92];
        $scope.input94 = formTextArray[93];
        $scope.input95 = formTextArray[94];
        $scope.input96 = formTextArray[95];
        $scope.input97 = formTextArray[96];
        $scope.input98 = formTextArray[97];
        $scope.input99 = formTextArray[98];
        $scope.input100 = formTextArray[99];
        $scope.input101 = formTextArray[100];
        $scope.input102 = formTextArray[101];
        $scope.input103 = formTextArray[102];
        $scope.input104 = formTextArray[103];
        $scope.input105 = formTextArray[104];
        $scope.input106 = formTextArray[105];
        $scope.input107 = formTextArray[106];
        $scope.input108 = formTextArray[107];
        $scope.input109 = formTextArray[108];
        $scope.input110 = formTextArray[109];
        $scope.input111 = formTextArray[110];
        $scope.input112 = formTextArray[111];
        $scope.input113 = formTextArray[112];
        $scope.input114 = formTextArray[113];
        $scope.input115 = formTextArray[114];
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
                    "form": 'Plan de crecimiento'
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
                        "formName": 'form7'
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
        let texto = $scope.input1 + ";" + $scope.input2 + ";" + $scope.input3 + ";" + $scope.input4 + ";" +
            $scope.input5 + ";" + $scope.input6 + ";" + $scope.input7 + ";" + $scope.input8 + ";" + $scope
            .input9 + ";" + $scope.input10 + ";" + $scope.input11 + ";" + $scope.input12 + ";" + $scope
            .input13 + ";" + $scope.input14 + ";" + $scope.input15 + ";" + $scope.input16 + ";" + $scope
            .input17 + ";" + $scope.input18 + ";" + $scope.input19 + ";" + $scope.input20 + ";" + $scope
            .input21 + ";" + $scope.input22 + ";" + $scope.input23 + ";" + $scope.input24 + ";" + $scope
            .input25 + ";" + $scope.input26 + ";" + $scope.input27 + ";" + $scope.input28 + ";" + $scope
            .input29 + ";" + $scope.input30 + ";" + $scope.input31 + ";" + $scope.input32 + ";" + $scope
            .input33 + ";" + $scope.input34 + ";" + $scope.input35 + ";" + $scope.input36 + ";" + $scope
            .input37 + ";" + $scope.input38 + ";" + $scope.input39 + ";" + $scope.input40 + ";" + $scope
            .input41 + ";" + $scope.input42 + ";" + $scope.input43 + ";" + $scope.input44 + ";" + $scope
            .input45 + ";" + $scope.input46 + ";" + $scope.input47 + ";" + $scope.input48 + ";" + $scope
            .input49 + ";" + $scope.input50 + ";" + $scope.input51 + ";" + $scope.input52 + ";" + $scope
            .input53 + ";" + $scope.input54 + ";" + $scope.input55 + ";" + $scope.input56 + ";" + $scope
            .input57 + ";" + $scope.input58 + ";" + $scope.input59 + ";" + $scope.input60 + ";" + $scope
            .input61 + ";" + $scope.input62 + ";" + $scope.input63 + ";" + $scope.input64 + ";" + $scope
            .input65 + ";" + $scope.input66 + ";" + $scope.input67 + ";" + $scope.input68 + ";" + $scope
            .input69 + ";" + $scope.input70 + ";" + $scope.input71 + ";" + $scope.input72 + ";" + $scope
            .input73 + ";" + $scope.input74 + ";" + $scope.input75 + ";" + $scope.input76 + ";" + $scope
            .input77 + ";" + $scope.input78 + ";" + $scope.input79 + ";" + $scope.input80 + ";" + $scope
            .input81 + ";" + $scope.input82 + ";" + $scope.input83 + ";" + $scope.input84 + ";" + $scope
            .input85 + ";" + $scope.input86 + ";" + $scope.input87 + ";" + $scope.input88 + ";" + $scope
            .input89 + ";" + $scope.input90 + ";" + $scope.input91 + ";" + $scope.input92 + ";" + $scope
            .input93 + ";" + $scope.input94 + ";" + $scope.input95 + ";" + $scope.input96 + ";" + $scope
            .input97 + ";" + $scope.input98 + ";" + $scope.input99 + ";" + $scope.input100 + ";" + $scope
            .input101 + ";" + $scope.input102 + ";" + $scope.input103 + ";" + $scope.input104 + ";" + $scope
            .input105 + ";" + $scope.input106 + ";" + $scope.input107 + ";" + $scope.input108 + ";" + $scope
            .input109 + ";" + $scope.input110 + ";" + $scope.input111 + ";" + $scope.input112 + ";" + $scope
            .input113 + ";" + $scope.input114 + ";" + $scope.input115 + ";";
        $scope.forms.formText = texto;
        $http.put('/forms7', $scope.forms).then((result) => {
            //console.log(result.data);
            Swal.fire({
                type: 'success',
                title: 'Hecho!',
                text: 'Se guardó el formulario',
                confirmButtonText: 'Ok!'
            });
        })
    }
    $scope.func1 = () => {
        $scope.input25 = document.getElementById("input3").value;
        $scope.input28 = document.getElementById("input3").value;
    }
    $scope.func2 = () => {
        $scope.input26 = document.getElementById("input4").value;
        $scope.input35 = document.getElementById("input4").value;
    }
    $scope.func3 = () => {
        $scope.input27 = document.getElementById("input5").value;
        $scope.input42 = document.getElementById("input5").value;
    }
});
</script>
<div class="container-fluid" ng-app="myApp" ng-controller="myCtrl">

    <div class="col-lg-12 mb-4">
        <div class="card text-white shadow backgroundBlack">
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

                    <h1 class="text-center subtitleDRed">Plan de crecimiento</h1>
                    <h4 class="text-center app-subtitle backgroundGreen">Metas y aspiraciones</h4>
                    <div>
                        <div class="mb-3">
                            <h4 for="" class="text-left subtitleWBlue">¿Cuáles son las metas aspiracionales de tu organización? Una
                                meta aspiracional es una meta a largo plazo (3-5 años) novedosa y arriesgada.</h4>
                            <label for="">Mision</label>
                            <textarea type="" class="form-control " name="" ng-model="input1" id="input1"
                                aria-describedby="helpId" placeholder=""></textarea>
                            <label for="">Visión</label>
                            <textarea type="" class="form-control " name="" ng-model="input2" id="input2"
                                aria-describedby="helpId" placeholder=""></textarea>
                            <div class="mb-3">
                                <label for="" class="form-label">Meta 1</label>
                                <input type="text" class="form-control" name="" ng-model="input3" id="input3"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Meta 2</label>
                                <input type="text" class="form-control" name="" ng-model="input4" id="input4"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Meta 3</label>
                                <input type="text" class="form-control" name="" ng-model="input5" id="input5"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle backgroundGreen">Valores y Cultura</h4>
                    <div>
                        <div class="mb-3">
                            <h5 for="" class="text-left subtitleWBlue">¿Qué comportamientos muestras tú y tu equipo a diario? Da un
                                paso atrás y reflexiona usando las preguntas de abajo. Piensa en momentos específicos de
                                tu vida personal y profesional, solo o con tu equipo.</h5>
                            <div class="mb-3">
                                <label for="" class="form-label">¿Qué comportamientos te desagradan en los
                                    demás?</label>
                                <input type="text" class="form-control rounded-0" name="" ng-model="input6" id="input6"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control rounded-0" name="" ng-model="input7" id="input7"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control rounded-0" name="" ng-model="input8" id="input8"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control rounded-0" name="" ng-model="input9" id="input9"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">¿Qué comportamiento aprecias de los demás?</label>
                                <input type="text" class="form-control rounded-0" name="" ng-model="input10" id="input10"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control rounded-0" name="" ng-model="input11" id="input11"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control rounded-0" name="" ng-model="input12" id="input12"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control rounded-0" name="" ng-model="input13" id="input13"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">¿Qué comportamiento quieres corregir de ti?</label>
                                <input type="text" class="form-control rounded-0" name="" ng-model="input14" id="input14"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control rounded-0" name="" ng-model="input15" id="input15"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control rounded-0" name="" ng-model="input16" id="input16"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control rounded-0" name="" ng-model="input17" id="input17"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">¿Qué comportamiento quieres adoptar para ti?</label>
                                <input type="text" class="form-control rounded-0" name="" ng-model="input18" id="input18"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control rounded-0" name="" ng-model="input19" id="input19"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control rounded-0" name="" ng-model="input20" id="input20"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control rounded-0" name="" ng-model="input21" id="input21"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <h5 for="" class="text-left">Define tres valores para tu organización, observando algún patron en  lo detallado en la parte superior </h5>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input22" id="input22"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input23" id="input23"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input24" id="input24"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle backgroundGreen">Indicadores clave de rendimiento</h4>
                    <div>
                        <div class="mb-3">
                            <h5 for="" class="text-left">Metas</h5>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input25" id="input25"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input26" id="input26"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input27" id="input27"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class="mb-3">
                            <div>
                                <div class="table-responsive">
                                    <input type="text" class="form-control" name="" ng-model="input28" id="input28"
                                        aria-describedby="helpId" placeholder="" readonly>
                                    <table class="table text-white table-borderless">
                                        <thead>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Menciona los KPI's que mejor se
                                                        ajusten</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Menciona las metas</label>
                                                </div>
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input29" id="input29" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input30" id="input30" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input31" id="input31" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input32" id="input32" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input33" id="input33" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input34" id="input34" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <div class="table-responsive">
                                    <input type="text" class="form-control" name="" ng-model="input35" id="input35"
                                        aria-describedby="helpId" placeholder="" readonly>
                                    <table class="table text-white table-borderless">
                                        <thead>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Menciona los KPI's que mejor se
                                                        ajusten</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Menciona las metas</label>
                                                </div>
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input36" id="input36" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input37" id="input37" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input38" id="input38" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input39" id="input39" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input40" id="input40" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input41" id="input41" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <div class="table-responsive">
                                    <input type="text" class="form-control" name="" ng-model="input42" id="input42"
                                        aria-describedby="helpId" placeholder="" readonly>
                                    <table class="table text-white table-borderless">
                                        <thead>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Menciona los KPI's que mejor se
                                                        ajusten</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Menciona las metas</label>
                                                </div>
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input43" id="input43" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input44" id="input44" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input45" id="input45" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input46" id="input46" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input47" id="input47" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input48" id="input48" aria-describedby="helpId"
                                                            placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle backgroundGreen">Hitos</h4>
                    <div>
                        <div class="table-responsive">
                            <h5 class="subtitleWBlue">¿Cuáles son todos los pasos intermedios que necesitaras dar para alcanzar estas GRANDES
                                metas?</h5>
                            <p>Uno o dos por año, hasta el tercer año</p>
                            <table class="table text-white table-borderless">
                                <thead>
                                    <th scope="col">
                                        <div class="">
                                            <label for="" class="form-label bg-primary pl-3 pr-3">Año 1</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="">
                                            <label for="" class="form-label bg-primary pl-3 pr-3">Año 2</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="">
                                            <label for="" class="form-label bg-primary pl-3 pr-3">Año 3</label>
                                        </div>
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input49"
                                                    id="input49" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input50"
                                                    id="input50" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input51"
                                                    id="input51" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input52"
                                                    id="input52" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input53"
                                                    id="input53" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input54"
                                                    id="input54" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input55"
                                                    id="input55" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input56"
                                                    id="input56" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input57"
                                                    id="input57" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input58"
                                                    id="input58" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input59"
                                                    id="input59" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input60"
                                                    id="input60" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input61"
                                                    id="input61" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input62"
                                                    id="input62" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input63"
                                                    id="input63" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h5>Ahora define Objetivos y OKR's para los Itos seleccionados</h5>
                        <div class="table-responsive">
                            <table class="table text-white table-borderless">
                                <thead>
                                    <th scope="col">
                                        <div class="">
                                            <label for="" class="form-label bg-primary pl-3 pr-3">Hitos Año 1</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="">
                                            <label for="" class="form-label bg-primary pl-3 pr-3">Objetivos y/o OKR's</label>
                                        </div>
                                    </th>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input64"
                                                    id="input64" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input65"
                                                    id="input65" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input66"
                                                    id="input66" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input67"
                                                    id="input67" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input68"
                                                    id="input68" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input69"
                                                    id="input69" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input70"
                                                    id="input70" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input71"
                                                    id="input71" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input72"
                                                    id="input72" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input73"
                                                    id="input73" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-white table-borderless">
                                <thead>
                                    <th scope="col">
                                        <div class="">
                                            <label for="" class="form-label bg-primary pl-3 pr-3">Hitos Año 2</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="">
                                            <label for="" class="form-label bg-primary pl-3 pr-3">Objetivos y/o OKR's</label>
                                        </div>
                                    </th>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input74"
                                                    id="input74" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input75"
                                                    id="input75" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input76"
                                                    id="input76" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input77"
                                                    id="input77" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input78"
                                                    id="input78" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input79"
                                                    id="input79" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input80"
                                                    id="input80" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input81"
                                                    id="input81" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input82"
                                                    id="input82" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input83"
                                                    id="input83" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-white table-borderless">
                                <thead>
                                    <th scope="col">
                                        <div class="">
                                            <label for="" class="form-label bg-primary pl-3 pr-3">Hitos Año 3</label>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="">
                                            <label for="" class="form-label bg-primary pl-3 pr-3">Objetivos y/o OKR's</label>
                                        </div>
                                    </th>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input84"
                                                    id="input84" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input85"
                                                    id="input85" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input86"
                                                    id="input86" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input87"
                                                    id="input87" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input88"
                                                    id="input88" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input89"
                                                    id="input89" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input90"
                                                    id="input90" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input91"
                                                    id="input91" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input92"
                                                    id="input92" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input93"
                                                    id="input93" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle backgroundGreen">Potenciales riesgos</h4>
                    <div>
                        <div class="mb-3">
                            <label for="" class="form-label subtitleWBlue">¿Cuáles son los principales riesgos en tu negocio? ¿Cómo
                                piensas mitigarlos?
                                Ten una lluvia de ideas sobre riesgos en las siguientes categorías: Riesgos de Mercado,
                                Riesgos Competitivos, Riesgos Tecnológicos y Operativos, Riesgos Financieros, Riesgos de
                                las Personas, Riesgos Legales y Regulatorios, Riesgos Sistémicos</label>
                            <input type="text" class="form-control" name="" ng-model="input94" id="input94"
                                aria-describedby="helpId" placeholder="">
                                <br>
                            <input type="text" class="form-control" name="" ng-model="input95" id="input95"
                                aria-describedby="helpId" placeholder="">
                                <br>
                            <input type="text" class="form-control" name="" ng-model="input96" id="input96"
                                aria-describedby="helpId" placeholder="">
                                <br>
                            <input type="text" class="form-control" name="" ng-model="input97" id="input97"
                                aria-describedby="helpId" placeholder="">
                                <br>
                            <input type="text" class="form-control" name="" ng-model="input98" id="input98"
                                aria-describedby="helpId" placeholder="">
                                <br>
                            <input type="text" class="form-control" name="" ng-model="input99" id="input99"
                                aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle backgroundGreen">Equipo de tus sueños</h4>
                    <div>
                        <h5 class="subtitleWBlue">¿Cómo es el equipo de tus sueños? Haz una lista de todas las personas clave que necesitas y
                            explica de qué iniciativas serán responsables.</h5>
                        <div class="table-responsive">
                            <table class="table text-white table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Persona Clave</th>
                                        <th scope="col">Area de trabajo</th>
                                        <th scope="col">Iniciativa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input100"
                                                    id="input100" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input101"
                                                    id="input101" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input102"
                                                    id="input102" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input103"
                                                    id="input103" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input104"
                                                    id="input104" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input105"
                                                    id="input105" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input106"
                                                    id="input106" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input107"
                                                    id="input107" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input108"
                                                    id="input108" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input109"
                                                    id="input109" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input110"
                                                    id="input110" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input111"
                                                    id="input111" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input112"
                                                    id="input112" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input113"
                                                    id="input113" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input114"
                                                    id="input114" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <h4 class="text-center app-subtitle backgroundGreen">Plan de crecimiento</h4>
                    <div>
                        <div class="mb-3">
                            <h4 for="" class="text-left subtitleWBlue">¿Cómo resumirías tu Plan de Crecimiento en un párrafo?</h4>
                            <textarea type="" class="form-control " name="" ng-model="input115" id="input115"
                                aria-describedby="helpId" placeholder=""></textarea>
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