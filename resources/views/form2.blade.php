@extends('layouts.Dashboard')
@section('script')

@stop
@section('content')
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
    //product 2
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
    $scope.input25p2 = "";
    $scope.input26p2 = "";
    $scope.input27p2 = "";
    $scope.input28p2 = "";
    $scope.input29p2 = "";
    $scope.input30p2 = "";
    $scope.input31p2 = "";
    $scope.input32p2 = "";
    $scope.input33p2 = "";
    $scope.input34p2 = "";
    $scope.input35p2 = "";
    $scope.input36p2 = "";
    $scope.input37p2 = "";
    $scope.input38p2 = "";
    $scope.input39p2 = "";
    $scope.input40p2 = "";
    $scope.input41p2 = "";
    $scope.input42p2 = "";
    $scope.input43p2 = "";
    $scope.input44p2 = "";
    $scope.input45p2 = "";
    $scope.input46p2 = "";
    $scope.input47p2 = "";
    $scope.input48p2 = "";
    $scope.input49p2 = "";
    $scope.input50p2 = "";
    $scope.input51p2 = "";
    $scope.input52p2 = "";
    $scope.input53p2 = "";
    $scope.input54p2 = "";
    $scope.input55p2 = "";
    $scope.input56p2 = "";
    $scope.input57p2 = "";
    $scope.input58p2 = "";
    $scope.input59p2 = "";
    $scope.input60p2 = "";
    $scope.input61p2 = "";
    $scope.input62p2 = "";
    $scope.input63p2 = "";
    $scope.input64p2 = "";
    $scope.input65p2 = "";
    $scope.input66p2 = "";
    $scope.input67p2 = "";
    $scope.input68p2 = "";
    $scope.input69p2 = "";
    $scope.input70p2 = "";
    $scope.input71p2 = "";
    $scope.input72p2 = "";
    $scope.input73p2 = "";
    $scope.input74p2 = "";
    $scope.input75p2 = "";
    $scope.input76p2 = "";
    $scope.input77p2 = "";
    $scope.input78p2 = "";
    $scope.input79p2 = "";
    $scope.input80p2 = "";
    $scope.input81p2 = "";
    $scope.input82p2 = "";
    $scope.input83p2 = "";
    $scope.input84p2 = "";
    $scope.input85p2 = "";
    $scope.input86p2 = "";
    $scope.input87p2 = "";
    $scope.input88p2 = "";
    $scope.input89p2 = "";
    $scope.input90p2 = "";
    $scope.input91p2 = "";
    $scope.input92p2 = "";
    $scope.input93p2 = "";
    $scope.input94p2 = "";
    $scope.input95p2 = "";
    $scope.input96p2 = "";
    $scope.input97p2 = "";
    $scope.input98p2 = "";
    $scope.input99p2 = "";
    $scope.input100p2 = "";
    $scope.input101p2 = "";
    $scope.input102p2 = "";
    $scope.input103p2 = "";
    $scope.input104p2 = "";
    $scope.input105p2 = "";
    $scope.input106p2 = "";
    $scope.input107p2 = "";
    $scope.input108p2 = "";
    $scope.input109p2 = "";
    $scope.input110p2 = "";
    $scope.input111p2 = "";
    $scope.input112p2 = "";
    $scope.input113p2 = "";
    $scope.input114p2 = "";
    $scope.input115p2 = "";
    $scope.input116p2 = "";
    $scope.input117p2 = "";
    $scope.input118p2 = "";
    $scope.input119p2 = "";
    $scope.input120p2 = "";
    $scope.input121p2 = "";
    $scope.input122p2 = "";
    $scope.input123p2 = "";
    $scope.input124p2 = "";
    $scope.input125p2 = "";
    $scope.input126p2 = "";
    $scope.input127p2 = "";
    $scope.input128p2 = "";
    $scope.input129p2 = "";
    $scope.input130p2 = "";
    $scope.input131p2 = "";
    $scope.input132p2 = "";
    $scope.input133p2 = "";
    $scope.input134p2 = "";
    $scope.input135p2 = "";
    $scope.input136p2 = "";
    $scope.input137p2 = "";
    $scope.input138p2 = "";
    $scope.input139p2 = "";
    $scope.input140p2 = "";
    $scope.input141p2 = "";
    $scope.input142p2 = "";
    $scope.input143p2 = "";
    $scope.input144p2 = "";
    $scope.input145p2 = "";
    $scope.input146p2 = "";
    $scope.input147p2 = "";
    $scope.input148p2 = "";
    $scope.input149p2 = "";
    $scope.input150p2 = "";
    $scope.input151p2 = "";
    $scope.input152p2 = "";
    $scope.input153p2 = "";
    $scope.input154p2 = "";
    $scope.input155p2 = "";
    $scope.input156p2 = "";
    $scope.input157p2 = "";
    $scope.input158p2 = "";
    $scope.input159p2 = "";
    $scope.input160p2 = "";
    $scope.input161p2 = "";
    $scope.input162p2 = "";
    $scope.input163p2 = "";
    $scope.input164p2 = "";
    $scope.input165p2 = "";
    $scope.input166p2 = "";
    $scope.input167p2 = "";
    $scope.input168p2 = "";
    $scope.input169p2 = "";
    $scope.input170p2 = "";
    $scope.input171p2 = "";
    $scope.input172p2 = "";
    $scope.input173p2 = "";
    $scope.input174p2 = "";
    $scope.input175p2 = "";
    $scope.input176p2 = "";
    //product3
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
    $scope.input25p3 = "";
    $scope.input26p3 = "";
    $scope.input27p3 = "";
    $scope.input28p3 = "";
    $scope.input29p3 = "";
    $scope.input30p3 = "";
    $scope.input31p3 = "";
    $scope.input32p3 = "";
    $scope.input33p3 = "";
    $scope.input34p3 = "";
    $scope.input35p3 = "";
    $scope.input36p3 = "";
    $scope.input37p3 = "";
    $scope.input38p3 = "";
    $scope.input39p3 = "";
    $scope.input40p3 = "";
    $scope.input41p3 = "";
    $scope.input42p3 = "";
    $scope.input43p3 = "";
    $scope.input44p3 = "";
    $scope.input45p3 = "";
    $scope.input46p3 = "";
    $scope.input47p3 = "";
    $scope.input48p3 = "";
    $scope.input49p3 = "";
    $scope.input50p3 = "";
    $scope.input51p3 = "";
    $scope.input52p3 = "";
    $scope.input53p3 = "";
    $scope.input54p3 = "";
    $scope.input55p3 = "";
    $scope.input56p3 = "";
    $scope.input57p3 = "";
    $scope.input58p3 = "";
    $scope.input59p3 = "";
    $scope.input60p3 = "";
    $scope.input61p3 = "";
    $scope.input62p3 = "";
    $scope.input63p3 = "";
    $scope.input64p3 = "";
    $scope.input65p3 = "";
    $scope.input66p3 = "";
    $scope.input67p3 = "";
    $scope.input68p3 = "";
    $scope.input69p3 = "";
    $scope.input70p3 = "";
    $scope.input71p3 = "";
    $scope.input72p3 = "";
    $scope.input73p3 = "";
    $scope.input74p3 = "";
    $scope.input75p3 = "";
    $scope.input76p3 = "";
    $scope.input77p3 = "";
    $scope.input78p3 = "";
    $scope.input79p3 = "";
    $scope.input80p3 = "";
    $scope.input81p3 = "";
    $scope.input82p3 = "";
    $scope.input83p3 = "";
    $scope.input84p3 = "";
    $scope.input85p3 = "";
    $scope.input86p3 = "";
    $scope.input87p3 = "";
    $scope.input88p3 = "";
    $scope.input89p3 = "";
    $scope.input90p3 = "";
    $scope.input91p3 = "";
    $scope.input92p3 = "";
    $scope.input93p3 = "";
    $scope.input94p3 = "";
    $scope.input95p3 = "";
    $scope.input96p3 = "";
    $scope.input97p3 = "";
    $scope.input98p3 = "";
    $scope.input99p3 = "";
    $scope.input100p3 = "";
    $scope.input101p3 = "";
    $scope.input102p3 = "";
    $scope.input103p3 = "";
    $scope.input104p3 = "";
    $scope.input105p3 = "";
    $scope.input106p3 = "";
    $scope.input107p3 = "";
    $scope.input108p3 = "";
    $scope.input109p3 = "";
    $scope.input110p3 = "";
    $scope.input111p3 = "";
    $scope.input112p3 = "";
    $scope.input113p3 = "";
    $scope.input114p3 = "";
    $scope.input115p3 = "";
    $scope.input116p3 = "";
    $scope.input117p3 = "";
    $scope.input118p3 = "";
    $scope.input119p3 = "";
    $scope.input120p3 = "";
    $scope.input121p3 = "";
    $scope.input122p3 = "";
    $scope.input123p3 = "";
    $scope.input124p3 = "";
    $scope.input125p3 = "";
    $scope.input126p3 = "";
    $scope.input127p3 = "";
    $scope.input128p3 = "";
    $scope.input129p3 = "";
    $scope.input130p3 = "";
    $scope.input131p3 = "";
    $scope.input132p3 = "";
    $scope.input133p3 = "";
    $scope.input134p3 = "";
    $scope.input135p3 = "";
    $scope.input136p3 = "";
    $scope.input137p3 = "";
    $scope.input138p3 = "";
    $scope.input139p3 = "";
    $scope.input140p3 = "";
    $scope.input141p3 = "";
    $scope.input142p3 = "";
    $scope.input143p3 = "";
    $scope.input144p3 = "";
    $scope.input145p3 = "";
    $scope.input146p3 = "";
    $scope.input147p3 = "";
    $scope.input148p3 = "";
    $scope.input149p3 = "";
    $scope.input150p3 = "";
    $scope.input151p3 = "";
    $scope.input152p3 = "";
    $scope.input153p3 = "";
    $scope.input154p3 = "";
    $scope.input155p3 = "";
    $scope.input156p3 = "";
    $scope.input157p3 = "";
    $scope.input158p3 = "";
    $scope.input159p3 = "";
    $scope.input160p3 = "";
    $scope.input161p3 = "";
    $scope.input162p3 = "";
    $scope.input163p3 = "";
    $scope.input164p3 = "";
    $scope.input165p3 = "";
    $scope.input166p3 = "";
    $scope.input167p3 = "";
    $scope.input168p3 = "";
    $scope.input169p3 = "";
    $scope.input170p3 = "";
    $scope.input171p3 = "";
    $scope.input172p3 = "";
    $scope.input173p3 = "";
    $scope.input174p3 = "";
    $scope.input175p3 = "";
    $scope.input176p3 = "";

    $scope.product1 = "";
    $scope.product2 = "";
    $scope.product3 = "";
    $scope.count = "";

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
            $http.get(`/forms2/${teamId}`).then((result) => {
                $scope.forms = result.data;
                $scope.formComment = $scope.forms.formComments;
                $scope.parseArrayValues();
            })

            var formNumber = 2;
                        
            $http.get('/verifiedTeacher/'+teamId).then((res) =>{
                var status = res.data[0].status;                       
                var s = status.split(',')  
                var s2 = status.split(',') 
                                        
                s[formNumber-1] = 1;
                s2[formNumber-1] = 0; 
                var newStatusHab = s[0] + "," +s[1] + ","+s[2] + ","+s[3] + ","+s[4] + ","+s[5] + ","+s[6];
                var newStatusDesHab = s2[0] + "," +s2[1] + ","+s2[2] + ","+s2[3] + ","+s2[4] + ","+s2[5] + ","+s2[6];                         
                var newStatusAprob = s[0]+",3,1,"+s[3] + ","+s[4] + ","+s[5] + ","+s[6];
                var formName = 'Mapa de Competidores';
                $scope.sendObjectTeamHab = {id : teamId, status : newStatusHab, type: 0}
                $scope.sendObjectTeamDesHab = {id : teamId, status : newStatusDesHab, type: 0}
                $scope.sendObjectTeamAprob = {id : teamId, status : newStatusAprob, fName : formName, type:1, phase: 3}
            })

            $http.get(`/forms1/${teamId}`).then((result) => {
                $scope.forms1 = result.data;
                $scope.parseArrayValues1();
            })

        } else if (userType == "student") {

            $http.get(`/verified`).then((res) =>{
                var status = res.data[0].status;
                var s = status.split(',')
                
                if(s[1] == 0){
                    window.location.href = '/home'
                }
                    
                
                if(s[1] == 3 ){
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
                $http.get(`/forms2/${teamId}`).then((result) => {
                    $scope.forms = result.data;
                    $scope.formComment = $scope.forms.formComments;
                    $scope.parseArrayValues();
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
        
        //let teamId = "{{ Auth::user()->teamId }}";


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
        $scope.input135 = formTextArray[134];
        $scope.input136 = formTextArray[135];
        $scope.input137 = formTextArray[136];
        $scope.input138 = formTextArray[137];
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
        $scope.input152 = formTextArray[151];
        $scope.input153 = formTextArray[152];
        $scope.input154 = formTextArray[153];
        $scope.input155 = formTextArray[154];
        $scope.input156 = formTextArray[155];
        $scope.input157 = formTextArray[156];
        $scope.input158 = formTextArray[157];
        $scope.input159 = formTextArray[158];
        $scope.input160 = formTextArray[159];
        $scope.input161 = formTextArray[160];
        $scope.input162 = formTextArray[161];
        $scope.input163 = formTextArray[162];
        $scope.input164 = formTextArray[163];
        $scope.input165 = formTextArray[164];
        $scope.input166 = formTextArray[165];
        $scope.input167 = formTextArray[166];
        $scope.input168 = formTextArray[167];
        $scope.input169 = formTextArray[168];
        $scope.input170 = formTextArray[169];
        $scope.input171 = formTextArray[170];
        $scope.input172 = formTextArray[171];
        $scope.input173 = formTextArray[172];
        $scope.input174 = formTextArray[173];
        $scope.input175 = formTextArray[174];
        $scope.input176 = formTextArray[175];
        //product 2
        $scope.input1p2 = formTextArray[176];
        $scope.input2p2 = formTextArray[177];
        $scope.input3p2 = formTextArray[178];
        $scope.input4p2 = formTextArray[179];
        $scope.input5p2 = formTextArray[180];
        $scope.input6p2 = formTextArray[181];
        $scope.input7p2 = formTextArray[182];
        $scope.input8p2 = formTextArray[183];
        $scope.input9p2 = formTextArray[184];
        $scope.input10p2 = formTextArray[185];
        $scope.input11p2 = formTextArray[186];
        $scope.input12p2 = formTextArray[187];
        $scope.input13p2 = formTextArray[188];
        $scope.input14p2 = formTextArray[189];
        $scope.input15p2 = formTextArray[190];
        $scope.input16p2 = formTextArray[191];
        $scope.input17p2 = formTextArray[192];
        $scope.input18p2 = formTextArray[193];
        $scope.input19p2 = formTextArray[194];
        $scope.input20p2 = formTextArray[195];
        $scope.input21p2 = formTextArray[196];
        $scope.input22p2 = formTextArray[197];
        $scope.input23p2 = formTextArray[198];
        $scope.input24p2 = formTextArray[199];
        $scope.input25p2 = formTextArray[200];
        $scope.input26p2 = formTextArray[201];
        $scope.input27p2 = formTextArray[202];
        $scope.input28p2 = formTextArray[203];
        $scope.input29p2 = formTextArray[204];
        $scope.input30p2 = formTextArray[205];
        $scope.input31p2 = formTextArray[206];
        $scope.input32p2 = formTextArray[207];
        $scope.input33p2 = formTextArray[208];
        $scope.input34p2 = formTextArray[209];
        $scope.input35p2 = formTextArray[210];
        $scope.input36p2 = formTextArray[211];
        $scope.input37p2 = formTextArray[212];
        $scope.input38p2 = formTextArray[213];
        $scope.input39p2 = formTextArray[214];
        $scope.input40p2 = formTextArray[215];
        $scope.input41p2 = formTextArray[216];
        $scope.input42p2 = formTextArray[217];
        $scope.input43p2 = formTextArray[218];
        $scope.input44p2 = formTextArray[219];
        $scope.input45p2 = formTextArray[220];
        $scope.input46p2 = formTextArray[221];
        $scope.input47p2 = formTextArray[222];
        $scope.input48p2 = formTextArray[223];
        $scope.input49p2 = formTextArray[224];
        $scope.input50p2 = formTextArray[225];
        $scope.input51p2 = formTextArray[226];
        $scope.input52p2 = formTextArray[227];
        $scope.input53p2 = formTextArray[228];
        $scope.input54p2 = formTextArray[229];
        $scope.input55p2 = formTextArray[230];
        $scope.input56p2 = formTextArray[231];
        $scope.input57p2 = formTextArray[232];
        $scope.input58p2 = formTextArray[233];
        $scope.input59p2 = formTextArray[234];
        $scope.input60p2 = formTextArray[235];
        $scope.input61p2 = formTextArray[236];
        $scope.input62p2 = formTextArray[237];
        $scope.input63p2 = formTextArray[238];
        $scope.input64p2 = formTextArray[239];
        $scope.input65p2 = formTextArray[240];
        $scope.input66p2 = formTextArray[241];
        $scope.input67p2 = formTextArray[242];
        $scope.input68p2 = formTextArray[243];
        $scope.input69p2 = formTextArray[244];
        $scope.input70p2 = formTextArray[245];
        $scope.input71p2 = formTextArray[246];
        $scope.input72p2 = formTextArray[247];
        $scope.input73p2 = formTextArray[248];
        $scope.input74p2 = formTextArray[249];
        $scope.input75p2 = formTextArray[250];
        $scope.input76p2 = formTextArray[251];
        $scope.input77p2 = formTextArray[252];
        $scope.input78p2 = formTextArray[253];
        $scope.input79p2 = formTextArray[254];
        $scope.input80p2 = formTextArray[255];
        $scope.input81p2 = formTextArray[256];
        $scope.input82p2 = formTextArray[257];
        $scope.input83p2 = formTextArray[258];
        $scope.input84p2 = formTextArray[259];
        $scope.input85p2 = formTextArray[260];
        $scope.input86p2 = formTextArray[261];
        $scope.input87p2 = formTextArray[262];
        $scope.input88p2 = formTextArray[263];
        $scope.input89p2 = formTextArray[264];
        $scope.input90p2 = formTextArray[265];
        $scope.input91p2 = formTextArray[266];
        $scope.input92p2 = formTextArray[267];
        $scope.input93p2 = formTextArray[268];
        $scope.input94p2 = formTextArray[269];
        $scope.input95p2 = formTextArray[270];
        $scope.input96p2 = formTextArray[271];
        $scope.input97p2 = formTextArray[272];
        $scope.input98p2 = formTextArray[273];
        $scope.input99p2 = formTextArray[274];
        $scope.input100p2 = formTextArray[275];
        $scope.input101p2 = formTextArray[276];
        $scope.input102p2 = formTextArray[277];
        $scope.input103p2 = formTextArray[278];
        $scope.input104p2 = formTextArray[279];
        $scope.input105p2 = formTextArray[280];
        $scope.input106p2 = formTextArray[281];
        $scope.input107p2 = formTextArray[282];
        $scope.input108p2 = formTextArray[283];
        $scope.input109p2 = formTextArray[284];
        $scope.input110p2 = formTextArray[285];
        $scope.input111p2 = formTextArray[286];
        $scope.input112p2 = formTextArray[287];
        $scope.input113p2 = formTextArray[288];
        $scope.input114p2 = formTextArray[289];
        $scope.input115p2 = formTextArray[290];
        $scope.input116p2 = formTextArray[291];
        $scope.input117p2 = formTextArray[292];
        $scope.input118p2 = formTextArray[293];
        $scope.input119p2 = formTextArray[294];
        $scope.input120p2 = formTextArray[295];
        $scope.input121p2 = formTextArray[296];
        $scope.input122p2 = formTextArray[297];
        $scope.input123p2 = formTextArray[298];
        $scope.input124p2 = formTextArray[299];
        $scope.input125p2 = formTextArray[300];
        $scope.input126p2 = formTextArray[301];
        $scope.input127p2 = formTextArray[302];
        $scope.input128p2 = formTextArray[303];
        $scope.input129p2 = formTextArray[304];
        $scope.input130p2 = formTextArray[305];
        $scope.input131p2 = formTextArray[306];
        $scope.input132p2 = formTextArray[307];
        $scope.input133p2 = formTextArray[308];
        $scope.input134p2 = formTextArray[309];
        $scope.input135p2 = formTextArray[310];
        $scope.input136p2 = formTextArray[311];
        $scope.input137p2 = formTextArray[312];
        $scope.input138p2 = formTextArray[313];
        $scope.input139p2 = formTextArray[314];
        $scope.input140p2 = formTextArray[315];
        $scope.input141p2 = formTextArray[316];
        $scope.input142p2 = formTextArray[317];
        $scope.input143p2 = formTextArray[318];
        $scope.input144p2 = formTextArray[319];
        $scope.input145p2 = formTextArray[320];
        $scope.input146p2 = formTextArray[321];
        $scope.input147p2 = formTextArray[322];
        $scope.input148p2 = formTextArray[323];
        $scope.input149p2 = formTextArray[324];
        $scope.input150p2 = formTextArray[325];
        $scope.input151p2 = formTextArray[326];
        $scope.input152p2 = formTextArray[327];
        $scope.input153p2 = formTextArray[328];
        $scope.input154p2 = formTextArray[329];
        $scope.input155p2 = formTextArray[330];
        $scope.input156p2 = formTextArray[331];
        $scope.input157p2 = formTextArray[332];
        $scope.input158p2 = formTextArray[333];
        $scope.input159p2 = formTextArray[334];
        $scope.input160p2 = formTextArray[335];
        $scope.input161p2 = formTextArray[336];
        $scope.input162p2 = formTextArray[337];
        $scope.input163p2 = formTextArray[338];
        $scope.input164p2 = formTextArray[339];
        $scope.input165p2 = formTextArray[340];
        $scope.input166p2 = formTextArray[341];
        $scope.input167p2 = formTextArray[342];
        $scope.input168p2 = formTextArray[343];
        $scope.input169p2 = formTextArray[344];
        $scope.input170p2 = formTextArray[345];
        $scope.input171p2 = formTextArray[346];
        $scope.input172p2 = formTextArray[347];
        $scope.input173p2 = formTextArray[348];
        $scope.input174p2 = formTextArray[349];
        $scope.input175p2 = formTextArray[350];
        $scope.input176p2 = formTextArray[351];
        //product 3
        $scope.input1p3 = formTextArray[352];
        $scope.input2p3 = formTextArray[353];
        $scope.input3p3 = formTextArray[354];
        $scope.input4p3 = formTextArray[355];
        $scope.input5p3 = formTextArray[356];
        $scope.input6p3 = formTextArray[357];
        $scope.input7p3 = formTextArray[358];
        $scope.input8p3 = formTextArray[359];
        $scope.input9p3 = formTextArray[360];
        $scope.input10p3 = formTextArray[361];
        $scope.input11p3 = formTextArray[362];
        $scope.input12p3 = formTextArray[363];
        $scope.input13p3 = formTextArray[364];
        $scope.input14p3 = formTextArray[365];
        $scope.input15p3 = formTextArray[366];
        $scope.input16p3 = formTextArray[367];
        $scope.input17p3 = formTextArray[368];
        $scope.input18p3 = formTextArray[369];
        $scope.input19p3 = formTextArray[370];
        $scope.input20p3 = formTextArray[371];
        $scope.input21p3 = formTextArray[372];
        $scope.input22p3 = formTextArray[373];
        $scope.input23p3 = formTextArray[374];
        $scope.input24p3 = formTextArray[375];
        $scope.input25p3 = formTextArray[376];
        $scope.input26p3 = formTextArray[377];
        $scope.input27p3 = formTextArray[378];
        $scope.input28p3 = formTextArray[379];
        $scope.input29p3 = formTextArray[380];
        $scope.input30p3 = formTextArray[381];
        $scope.input31p3 = formTextArray[382];
        $scope.input32p3 = formTextArray[383];
        $scope.input33p3 = formTextArray[384];
        $scope.input34p3 = formTextArray[385];
        $scope.input35p3 = formTextArray[386];
        $scope.input36p3 = formTextArray[387];
        $scope.input37p3 = formTextArray[388];
        $scope.input38p3 = formTextArray[389];
        $scope.input39p3 = formTextArray[390];
        $scope.input40p3 = formTextArray[391];
        $scope.input41p3 = formTextArray[392];
        $scope.input42p3 = formTextArray[393];
        $scope.input43p3 = formTextArray[394];
        $scope.input44p3 = formTextArray[395];
        $scope.input45p3 = formTextArray[396];
        $scope.input46p3 = formTextArray[397];
        $scope.input47p3 = formTextArray[398];
        $scope.input48p3 = formTextArray[399];
        $scope.input49p3 = formTextArray[400];
        $scope.input50p3 = formTextArray[401];
        $scope.input51p3 = formTextArray[402];
        $scope.input52p3 = formTextArray[403];
        $scope.input53p3 = formTextArray[404];
        $scope.input54p3 = formTextArray[405];
        $scope.input55p3 = formTextArray[406];
        $scope.input56p3 = formTextArray[407];
        $scope.input57p3 = formTextArray[408];
        $scope.input58p3 = formTextArray[409];
        $scope.input59p3 = formTextArray[410];
        $scope.input60p3 = formTextArray[411];
        $scope.input61p3 = formTextArray[412];
        $scope.input62p3 = formTextArray[413];
        $scope.input63p3 = formTextArray[414];
        $scope.input64p3 = formTextArray[415];
        $scope.input65p3 = formTextArray[416];
        $scope.input66p3 = formTextArray[417];
        $scope.input67p3 = formTextArray[418];
        $scope.input68p3 = formTextArray[419];
        $scope.input69p3 = formTextArray[420];
        $scope.input70p3 = formTextArray[421];
        $scope.input71p3 = formTextArray[422];
        $scope.input72p3 = formTextArray[423];
        $scope.input73p3 = formTextArray[424];
        $scope.input74p3 = formTextArray[425];
        $scope.input75p3 = formTextArray[426];
        $scope.input76p3 = formTextArray[427];
        $scope.input77p3 = formTextArray[428];
        $scope.input78p3 = formTextArray[429];
        $scope.input79p3 = formTextArray[430];
        $scope.input80p3 = formTextArray[431];
        $scope.input81p3 = formTextArray[432];
        $scope.input82p3 = formTextArray[433];
        $scope.input83p3 = formTextArray[434];
        $scope.input84p3 = formTextArray[435];
        $scope.input85p3 = formTextArray[436];
        $scope.input86p3 = formTextArray[437];
        $scope.input87p3 = formTextArray[438];
        $scope.input88p3 = formTextArray[439];
        $scope.input89p3 = formTextArray[440];
        $scope.input90p3 = formTextArray[441];
        $scope.input91p3 = formTextArray[442];
        $scope.input92p3 = formTextArray[443];
        $scope.input93p3 = formTextArray[444];
        $scope.input94p3 = formTextArray[445];
        $scope.input95p3 = formTextArray[446];
        $scope.input96p3 = formTextArray[447];
        $scope.input97p3 = formTextArray[448];
        $scope.input98p3 = formTextArray[449];
        $scope.input99p3 = formTextArray[450];
        $scope.input100p3 = formTextArray[451];
        $scope.input101p3 = formTextArray[452];
        $scope.input102p3 = formTextArray[453];
        $scope.input103p3 = formTextArray[454];
        $scope.input104p3 = formTextArray[455];
        $scope.input105p3 = formTextArray[456];
        $scope.input106p3 = formTextArray[457];
        $scope.input107p3 = formTextArray[458];
        $scope.input108p3 = formTextArray[459];
        $scope.input109p3 = formTextArray[460];
        $scope.input110p3 = formTextArray[461];
        $scope.input111p3 = formTextArray[462];
        $scope.input112p3 = formTextArray[463];
        $scope.input113p3 = formTextArray[464];
        $scope.input114p3 = formTextArray[465];
        $scope.input115p3 = formTextArray[466];
        $scope.input116p3 = formTextArray[467];
        $scope.input117p3 = formTextArray[468];
        $scope.input118p3 = formTextArray[469];
        $scope.input119p3 = formTextArray[470];
        $scope.input120p3 = formTextArray[471];
        $scope.input121p3 = formTextArray[472];
        $scope.input122p3 = formTextArray[473];
        $scope.input123p3 = formTextArray[474];
        $scope.input124p3 = formTextArray[475];
        $scope.input125p3 = formTextArray[476];
        $scope.input126p3 = formTextArray[477];
        $scope.input127p3 = formTextArray[478];
        $scope.input128p3 = formTextArray[479];
        $scope.input129p3 = formTextArray[480];
        $scope.input130p3 = formTextArray[481];
        $scope.input131p3 = formTextArray[482];
        $scope.input132p3 = formTextArray[483];
        $scope.input133p3 = formTextArray[484];
        $scope.input134p3 = formTextArray[485];
        $scope.input135p3 = formTextArray[486];
        $scope.input136p3 = formTextArray[487];
        $scope.input137p3 = formTextArray[488];
        $scope.input138p3 = formTextArray[489];
        $scope.input139p3 = formTextArray[490];
        $scope.input140p3 = formTextArray[491];
        $scope.input141p3 = formTextArray[492];
        $scope.input142p3 = formTextArray[493];
        $scope.input143p3 = formTextArray[494];
        $scope.input144p3 = formTextArray[495];
        $scope.input145p3 = formTextArray[496];
        $scope.input146p3 = formTextArray[497];
        $scope.input147p3 = formTextArray[498];
        $scope.input148p3 = formTextArray[499];
        $scope.input149p3 = formTextArray[500];
        $scope.input150p3 = formTextArray[501];
        $scope.input151p3 = formTextArray[502];
        $scope.input152p3 = formTextArray[503];
        $scope.input153p3 = formTextArray[504];
        $scope.input154p3 = formTextArray[505];
        $scope.input155p3 = formTextArray[506];
        $scope.input156p3 = formTextArray[507];
        $scope.input157p3 = formTextArray[508];
        $scope.input158p3 = formTextArray[509];
        $scope.input159p3 = formTextArray[510];
        $scope.input160p3 = formTextArray[511];
        $scope.input161p3 = formTextArray[512];
        $scope.input162p3 = formTextArray[513];
        $scope.input163p3 = formTextArray[514];
        $scope.input164p3 = formTextArray[515];
        $scope.input165p3 = formTextArray[516];
        $scope.input166p3 = formTextArray[517];
        $scope.input167p3 = formTextArray[518];
        $scope.input168p3 = formTextArray[519];
        $scope.input169p3 = formTextArray[520];
        $scope.input170p3 = formTextArray[521];
        $scope.input171p3 = formTextArray[522];
        $scope.input172p3 = formTextArray[523];
        $scope.input173p3 = formTextArray[524];
        $scope.input174p3 = formTextArray[525];
        $scope.input175p3 = formTextArray[526];
        $scope.input176p3 = formTextArray[527];
    }
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
                    "form": 'Mapa de competidores'
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
                        "formName": 'form2'
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
            .input113 + ";" + $scope.input114 + ";" + $scope.input115 + ";" + $scope.input116 + ";" + $scope
            .input117 + ";" + $scope.input118 + ";" + $scope.input119 + ";" + $scope.input120 + ";" + $scope
            .input121 + ";" + $scope.input122 + ";" + $scope.input123 + ";" + $scope.input124 + ";" + $scope
            .input125 + ";" + $scope.input126 + ";" + $scope.input127 + ";" + $scope.input128 + ";" + $scope
            .input129 + ";" + $scope.input130 + ";" + $scope.input131 + ";" + $scope.input132 + ";" + $scope
            .input133 + ";" + $scope.input134 + ";" + $scope.input135 + ";" + $scope.input136 + ";" + $scope
            .input137 + ";" + $scope.input138 + ";" + $scope.input139 + ";" + $scope.input140 + ";" + $scope
            .input141 + ";" + $scope.input142 + ";" + $scope.input143 + ";" + $scope.input144 + ";" + $scope
            .input145 + ";" + $scope.input146 + ";" + $scope.input147 + ";" + $scope.input148 + ";" + $scope
            .input149 + ";" + $scope.input150 + ";" + $scope.input151 + ";" + $scope.input152 + ";" + $scope
            .input153 + ";" + $scope.input154 + ";" + $scope.input155 + ";" + $scope.input156 + ";" + $scope
            .input157 + ";" + $scope.input158 + ";" + $scope.input159 + ";" + $scope.input160 + ";" + $scope
            .input161 + ";" + $scope.input162 + ";" + $scope.input163 + ";" + $scope.input164 + ";" + $scope
            .input165 + ";" + $scope.input166 + ";" + $scope.input167 + ";" + $scope.input168 + ";" + $scope
            .input169 + ";" + $scope.input170 + ";" + $scope.input171 + ";" + $scope.input172 + ";" + $scope
            .input173 + ";" + $scope.input174 + ";" + $scope.input175 + ";" + $scope.input176 + ";";
        let texto2 = $scope.input1p2 + ";" + $scope.input2p2 + ";" + $scope.input3p2 + ";" + $scope
            .input4p2 + ";" + $scope.input5p2 + ";" + $scope.input6p2 + ";" + $scope.input7p2 + ";" + $scope
            .input8p2 + ";" + $scope.input9p2 + ";" + $scope.input10p2 + ";" + $scope.input11p2 + ";" +
            $scope.input12p2 + ";" + $scope.input13p2 + ";" + $scope.input14p2 + ";" + $scope.input15p2 +
            ";" + $scope.input16p2 + ";" + $scope.input17p2 + ";" + $scope.input18p2 + ";" + $scope
            .input19p2 + ";" + $scope.input20p2 + ";" + $scope.input21p2 + ";" + $scope.input22p2 + ";" +
            $scope.input23p2 + ";" + $scope.input24p2 + ";" + $scope.input25p2 + ";" + $scope.input26p2 +
            ";" + $scope.input27p2 + ";" + $scope.input28p2 + ";" + $scope.input29p2 + ";" + $scope
            .input30p2 + ";" + $scope.input31p2 + ";" + $scope.input32p2 + ";" + $scope.input33p2 + ";" +
            $scope.input34p2 + ";" + $scope.input35p2 + ";" + $scope.input36p2 + ";" + $scope.input37p2 +
            ";" + $scope.input38p2 + ";" + $scope.input39p2 + ";" + $scope.input40p2 + ";" + $scope
            .input41p2 + ";" + $scope.input42p2 + ";" + $scope.input43p2 + ";" + $scope.input44p2 + ";" +
            $scope.input45p2 + ";" + $scope.input46p2 + ";" + $scope.input47p2 + ";" + $scope.input48p2 +
            ";" + $scope.input49p2 + ";" + $scope.input50p2 + ";" + $scope.input51p2 + ";" + $scope
            .input52p2 + ";" + $scope.input53p2 + ";" + $scope.input54p2 + ";" + $scope.input55p2 + ";" +
            $scope.input56p2 + ";" + $scope.input57p2 + ";" + $scope.input58p2 + ";" + $scope.input59p2 +
            ";" + $scope.input60p2 + ";" + $scope.input61p2 + ";" + $scope.input62p2 + ";" + $scope
            .input63p2 + ";" + $scope.input64p2 + ";" + $scope.input65p2 + ";" + $scope.input66p2 + ";" +
            $scope.input67p2 + ";" + $scope.input68p2 + ";" + $scope.input69p2 + ";" + $scope.input70p2 +
            ";" + $scope.input71p2 + ";" + $scope.input72p2 + ";" + $scope.input73p2 + ";" + $scope
            .input74p2 + ";" + $scope.input75p2 + ";" + $scope.input76p2 + ";" + $scope.input77p2 + ";" +
            $scope.input78p2 + ";" + $scope.input79p2 + ";" + $scope.input80p2 + ";" + $scope.input81p2 +
            ";" + $scope.input82p2 + ";" + $scope.input83p2 + ";" + $scope.input84p2 + ";" + $scope
            .input85p2 + ";" + $scope.input86p2 + ";" + $scope.input87p2 + ";" + $scope.input88p2 + ";" +
            $scope.input89p2 + ";" + $scope.input90p2 + ";" + $scope.input91p2 + ";" + $scope.input92p2 +
            ";" + $scope.input93p2 + ";" + $scope.input94p2 + ";" + $scope.input95p2 + ";" + $scope
            .input96p2 + ";" + $scope.input97p2 + ";" + $scope.input98p2 + ";" + $scope.input99p2 + ";" +
            $scope.input100p2 + ";" + $scope.input101p2 + ";" + $scope.input102p2 + ";" + $scope
            .input103p2 + ";" + $scope.input104p2 + ";" + $scope.input105p2 + ";" + $scope.input106p2 +
            ";" + $scope.input107p2 + ";" + $scope.input108p2 + ";" + $scope.input109p2 + ";" + $scope
            .input110p2 + ";" + $scope.input111p2 + ";" + $scope.input112p2 + ";" + $scope.input113p2 +
            ";" + $scope.input114p2 + ";" + $scope.input115p2 + ";" + $scope.input116p2 + ";" + $scope
            .input117p2 + ";" + $scope.input118p2 + ";" + $scope.input119p2 + ";" + $scope.input120p2 +
            ";" + $scope.input121p2 + ";" + $scope.input122p2 + ";" + $scope.input123p2 + ";" + $scope
            .input124p2 + ";" + $scope.input125p2 + ";" + $scope.input126p2 + ";" + $scope.input127p2 +
            ";" + $scope.input128p2 + ";" + $scope.input129p2 + ";" + $scope.input130p2 + ";" + $scope
            .input131p2 + ";" + $scope.input132p2 + ";" + $scope.input133p2 + ";" + $scope.input134p2 +
            ";" + $scope.input135p2 + ";" + $scope.input136p2 + ";" + $scope.input137p2 + ";" + $scope
            .input138p2 + ";" + $scope.input139p2 + ";" + $scope.input140p2 + ";" + $scope.input141p2 +
            ";" + $scope.input142p2 + ";" + $scope.input143p2 + ";" + $scope.input144p2 + ";" + $scope
            .input145p2 + ";" + $scope.input146p2 + ";" + $scope.input147p2 + ";" + $scope.input148p2 +
            ";" + $scope.input149p2 + ";" + $scope.input150p2 + ";" + $scope.input151p2 + ";" + $scope
            .input152p2 + ";" + $scope.input153p2 + ";" + $scope.input154p2 + ";" + $scope.input155p2 +
            ";" + $scope.input156p2 + ";" + $scope.input157p2 + ";" + $scope.input158p2 + ";" + $scope
            .input159p2 + ";" + $scope.input160p2 + ";" + $scope.input161p2 + ";" + $scope.input162p2 +
            ";" + $scope.input163p2 + ";" + $scope.input164p2 + ";" + $scope.input165p2 + ";" + $scope
            .input166p2 + ";" + $scope.input167p2 + ";" + $scope.input168p2 + ";" + $scope.input169p2 +
            ";" + $scope.input170p2 + ";" + $scope.input171p2 + ";" + $scope.input172p2 + ";" + $scope
            .input173p2 + ";" + $scope.input174p2 + ";" + $scope.input175p2 + ";" + $scope.input176p2 + ";";
        let texto3 = $scope.input1p3 + ";" + $scope.input2p3 + ";" + $scope.input3p3 + ";" + $scope
            .input4p3 + ";" + $scope.input5p3 + ";" + $scope.input6p3 + ";" + $scope.input7p3 + ";" + $scope
            .input8p3 + ";" + $scope.input9p3 + ";" + $scope.input10p3 + ";" + $scope.input11p3 + ";" +
            $scope.input12p3 + ";" + $scope.input13p3 + ";" + $scope.input14p3 + ";" + $scope.input15p3 +
            ";" + $scope.input16p3 + ";" + $scope.input17p3 + ";" + $scope.input18p3 + ";" + $scope
            .input19p3 + ";" + $scope.input20p3 + ";" + $scope.input21p3 + ";" + $scope.input22p3 + ";" +
            $scope.input23p3 + ";" + $scope.input24p3 + ";" + $scope.input25p3 + ";" + $scope.input26p3 +
            ";" + $scope.input27p3 + ";" + $scope.input28p3 + ";" + $scope.input29p3 + ";" + $scope
            .input30p3 + ";" + $scope.input31p3 + ";" + $scope.input32p3 + ";" + $scope.input33p3 + ";" +
            $scope.input34p3 + ";" + $scope.input35p3 + ";" + $scope.input36p3 + ";" + $scope.input37p3 +
            ";" + $scope.input38p3 + ";" + $scope.input39p3 + ";" + $scope.input40p3 + ";" + $scope
            .input41p3 + ";" + $scope.input42p3 + ";" + $scope.input43p3 + ";" + $scope.input44p3 + ";" +
            $scope.input45p3 + ";" + $scope.input46p3 + ";" + $scope.input47p3 + ";" + $scope.input48p3 +
            ";" + $scope.input49p3 + ";" + $scope.input50p3 + ";" + $scope.input51p3 + ";" + $scope
            .input52p3 + ";" + $scope.input53p3 + ";" + $scope.input54p3 + ";" + $scope.input55p3 + ";" +
            $scope.input56p3 + ";" + $scope.input57p3 + ";" + $scope.input58p3 + ";" + $scope.input59p3 +
            ";" + $scope.input60p3 + ";" + $scope.input61p3 + ";" + $scope.input62p3 + ";" + $scope
            .input63p3 + ";" + $scope.input64p3 + ";" + $scope.input65p3 + ";" + $scope.input66p3 + ";" +
            $scope.input67p3 + ";" + $scope.input68p3 + ";" + $scope.input69p3 + ";" + $scope.input70p3 +
            ";" + $scope.input71p3 + ";" + $scope.input72p3 + ";" + $scope.input73p3 + ";" + $scope
            .input74p3 + ";" + $scope.input75p3 + ";" + $scope.input76p3 + ";" + $scope.input77p3 + ";" +
            $scope.input78p3 + ";" + $scope.input79p3 + ";" + $scope.input80p3 + ";" + $scope.input81p3 +
            ";" + $scope.input82p3 + ";" + $scope.input83p3 + ";" + $scope.input84p3 + ";" + $scope
            .input85p3 + ";" + $scope.input86p3 + ";" + $scope.input87p3 + ";" + $scope.input88p3 + ";" +
            $scope.input89p3 + ";" + $scope.input90p3 + ";" + $scope.input91p3 + ";" + $scope.input92p3 +
            ";" + $scope.input93p3 + ";" + $scope.input94p3 + ";" + $scope.input95p3 + ";" + $scope
            .input96p3 + ";" + $scope.input97p3 + ";" + $scope.input98p3 + ";" + $scope.input99p3 + ";" +
            $scope.input100p3 + ";" + $scope.input101p3 + ";" + $scope.input102p3 + ";" + $scope
            .input103p3 + ";" + $scope.input104p3 + ";" + $scope.input105p3 + ";" + $scope.input106p3 +
            ";" + $scope.input107p3 + ";" + $scope.input108p3 + ";" + $scope.input109p3 + ";" + $scope
            .input110p3 + ";" + $scope.input111p3 + ";" + $scope.input112p3 + ";" + $scope.input113p3 +
            ";" + $scope.input114p3 + ";" + $scope.input115p3 + ";" + $scope.input116p3 + ";" + $scope
            .input117p3 + ";" + $scope.input118p3 + ";" + $scope.input119p3 + ";" + $scope.input120p3 +
            ";" + $scope.input121p3 + ";" + $scope.input122p3 + ";" + $scope.input123p3 + ";" + $scope
            .input124p3 + ";" + $scope.input125p3 + ";" + $scope.input126p3 + ";" + $scope.input127p3 +
            ";" + $scope.input128p3 + ";" + $scope.input129p3 + ";" + $scope.input130p3 + ";" + $scope
            .input131p3 + ";" + $scope.input132p3 + ";" + $scope.input133p3 + ";" + $scope.input134p3 +
            ";" + $scope.input135p3 + ";" + $scope.input136p3 + ";" + $scope.input137p3 + ";" + $scope
            .input138p3 + ";" + $scope.input139p3 + ";" + $scope.input140p3 + ";" + $scope.input141p3 +
            ";" + $scope.input142p3 + ";" + $scope.input143p3 + ";" + $scope.input144p3 + ";" + $scope
            .input145p3 + ";" + $scope.input146p3 + ";" + $scope.input147p3 + ";" + $scope.input148p3 +
            ";" + $scope.input149p3 + ";" + $scope.input150p3 + ";" + $scope.input151p3 + ";" + $scope
            .input152p3 + ";" + $scope.input153p3 + ";" + $scope.input154p3 + ";" + $scope.input155p3 +
            ";" + $scope.input156p3 + ";" + $scope.input157p3 + ";" + $scope.input158p3 + ";" + $scope
            .input159p3 + ";" + $scope.input160p3 + ";" + $scope.input161p3 + ";" + $scope.input162p3 +
            ";" + $scope.input163p3 + ";" + $scope.input164p3 + ";" + $scope.input165p3 + ";" + $scope
            .input166p3 + ";" + $scope.input167p3 + ";" + $scope.input168p3 + ";" + $scope.input169p3 +
            ";" + $scope.input170p3 + ";" + $scope.input171p3 + ";" + $scope.input172p3 + ";" + $scope
            .input173p3 + ";" + $scope.input174p3 + ";" + $scope.input175p3 + ";" + $scope.input176p3 + ";";
        $scope.forms.formText = texto + texto2 + texto3;
        $http.put('/forms2', $scope.forms).then((result) => {
            //.log(result.data);
            Swal.fire({
                type: 'success',
                title: 'Hecho!',
                text: 'Se guardó el formulario',
                confirmButtonText: 'Ok!'
            });
        })

    }
    $scope.myFunc = function() {
        $scope.input25 = document.getElementById("input17").value;
        $scope.input67 = document.getElementById("input17").value;


        $scope.input29 = document.getElementById("input18").value;
        $scope.input88 = document.getElementById("input18").value;

        $scope.input33 = document.getElementById("input19").value;
        $scope.input109 = document.getElementById("input19").value;

        $scope.input37 = document.getElementById("input20").value;
        $scope.input130 = document.getElementById("input20").value;

        $scope.input41 = document.getElementById("input21").value;
        $scope.input151 = document.getElementById("input21").value;

        $scope.input45 = document.getElementById("input22").value;


        $scope.input49 = document.getElementById("input23").value;


        $scope.input53 = document.getElementById("input24").value;


        $scope.input68 = document.getElementById("input57").value;
        $scope.input89 = document.getElementById("input57").value;
        $scope.input110 = document.getElementById("input57").value;
        $scope.input131 = document.getElementById("input57").value;
        $scope.input152 = document.getElementById("input57").value;

        $scope.input72 = document.getElementById("input59").value;
        $scope.input93 = document.getElementById("input59").value;
        $scope.input114 = document.getElementById("input59").value;
        $scope.input135 = document.getElementById("input59").value;
        $scope.input156 = document.getElementById("input59").value;

        $scope.input76 = document.getElementById("input61").value;
        $scope.input97 = document.getElementById("input61").value;
        $scope.input118 = document.getElementById("input61").value;
        $scope.input139 = document.getElementById("input61").value;
        $scope.input160 = document.getElementById("input61").value;

        $scope.input80 = document.getElementById("input63").value;
        $scope.input101 = document.getElementById("input63").value;
        $scope.input122 = document.getElementById("input63").value;
        $scope.input143 = document.getElementById("input63").value;
        $scope.input164 = document.getElementById("input63").value;

        $scope.input84 = document.getElementById("input65").value;
        $scope.input105 = document.getElementById("input65").value;
        $scope.input126 = document.getElementById("input65").value;
        $scope.input147 = document.getElementById("input65").value;
        $scope.input168 = document.getElementById("input65").value;
    };
    $scope.myFuncP2 = function() {
        $scope.input25p2 = document.getElementById("input17p2").value;
        $scope.input67p2 = document.getElementById("input17p2").value;


        $scope.input29p2 = document.getElementById("input18p2").value;
        $scope.input88p2 = document.getElementById("input18p2").value;

        $scope.input33p2 = document.getElementById("input19p2").value;
        $scope.input109p2 = document.getElementById("input19p2").value;

        $scope.input37p2 = document.getElementById("input20p2").value;
        $scope.input130p2 = document.getElementById("input20p2").value;

        $scope.input41p2 = document.getElementById("input21p2").value;
        $scope.input151p2 = document.getElementById("input21p2").value;

        $scope.input45p2 = document.getElementById("input22p2").value;


        $scope.input49p2 = document.getElementById("input23p2").value;


        $scope.input53p2 = document.getElementById("input24p2").value;


        $scope.input68p2 = document.getElementById("input57p2").value;
        $scope.input89p2 = document.getElementById("input57p2").value;
        $scope.input110p2 = document.getElementById("input57p2").value;
        $scope.input131p2 = document.getElementById("input57p2").value;
        $scope.input152p2 = document.getElementById("input57p2").value;

        $scope.input72p2 = document.getElementById("input59p2").value;
        $scope.input93p2 = document.getElementById("input59p2").value;
        $scope.input114p2 = document.getElementById("input59p2").value;
        $scope.input135p2 = document.getElementById("input59p2").value;
        $scope.input156p2 = document.getElementById("input59p2").value;

        $scope.input76p2 = document.getElementById("input61p2").value;
        $scope.input97p2 = document.getElementById("input61p2").value;
        $scope.input118p2 = document.getElementById("input61p2").value;
        $scope.input139p2 = document.getElementById("input61p2").value;
        $scope.input160p2 = document.getElementById("input61p2").value;

        $scope.input80p2 = document.getElementById("input63p2").value;
        $scope.input101p2 = document.getElementById("input63p2").value;
        $scope.input122p2 = document.getElementById("input63p2").value;
        $scope.input143p2 = document.getElementById("input63p2").value;
        $scope.input164p2 = document.getElementById("input63p2").value;

        $scope.input84p2 = document.getElementById("input65p2").value;
        $scope.input105p2 = document.getElementById("input65p2").value;
        $scope.input126p2 = document.getElementById("input65p2").value;
        $scope.input147p2 = document.getElementById("input65p2").value;
        $scope.input168p2 = document.getElementById("input65p2").value;
    };
    $scope.myFuncP3 = function() {
        $scope.input25p3 = document.getElementById("input17p3").value;
        $scope.input67p3 = document.getElementById("input17p3").value;


        $scope.input29p3 = document.getElementById("input18p3").value;
        $scope.input88p3 = document.getElementById("input18p3").value;

        $scope.input33p3 = document.getElementById("input19p3").value;
        $scope.input109p3 = document.getElementById("input19p3").value;

        $scope.input37p3 = document.getElementById("input20p3").value;
        $scope.input130p3 = document.getElementById("input20p3").value;

        $scope.input41p3 = document.getElementById("input21p3").value;
        $scope.input151p3 = document.getElementById("input21p3").value;

        $scope.input45p3 = document.getElementById("input22p3").value;


        $scope.input49p3 = document.getElementById("input23p3").value;


        $scope.input53p3 = document.getElementById("input24p3").value;


        $scope.input68p3 = document.getElementById("input57p3").value;
        $scope.input89p3 = document.getElementById("input57p3").value;
        $scope.input110p3 = document.getElementById("input57p3").value;
        $scope.input131p3 = document.getElementById("input57p3").value;
        $scope.input152p3 = document.getElementById("input57p3").value;

        $scope.input72p3 = document.getElementById("input59p3").value;
        $scope.input93p3 = document.getElementById("input59p3").value;
        $scope.input114p3 = document.getElementById("input59p3").value;
        $scope.input135p3 = document.getElementById("input59p3").value;
        $scope.input156p3 = document.getElementById("input59p3").value;

        $scope.input76p3 = document.getElementById("input61p3").value;
        $scope.input97p3 = document.getElementById("input61p3").value;
        $scope.input118p3 = document.getElementById("input61p3").value;
        $scope.input139p3 = document.getElementById("input61p3").value;
        $scope.input160p3 = document.getElementById("input61p3").value;

        $scope.input80p3 = document.getElementById("input63p3").value;
        $scope.input101p3 = document.getElementById("input63p3").value;
        $scope.input122p3 = document.getElementById("input63p3").value;
        $scope.input143p3 = document.getElementById("input63p3").value;
        $scope.input164p3 = document.getElementById("input63p3").value;

        $scope.input84p3 = document.getElementById("input65p3").value;
        $scope.input105p3 = document.getElementById("input65p3").value;
        $scope.input126p3 = document.getElementById("input65p3").value;
        $scope.input147p3 = document.getElementById("input65p3").value;
        $scope.input168p3 = document.getElementById("input65p3").value;
    };
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

                    <h1 class="text-center">Mapa de Competidores</h1>
                    <input type="text" class="form-control" name="" ng-model="product1" id="product1"
                        aria-describedby="helpId" placeholder="">
                    <h4 class="text-center app-subtitle">Problemas y beneficios</h4>
                    <div>
                        <div class="mb-3">
                            <h4 for="" class="text-left">¿Cuál es el problema central de tus clientes que estás
                                resolviendo?</h4>
                            <div class="mb-3">
                                <label for="" class="form-label">Problemas</label>
                                <input type="text" class="form-control" name="" ng-model="input1" id="input1"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input2" id="input2"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input3" id="input3"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input4" id="input4"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Beneficios</label>
                                <input type="text" class="form-control" name="" ng-model="input5" id="input5"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input6" id="input6"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input7" id="input7"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input8" id="input8"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle">Caracteristicas</h4>
                    <div>
                        <div class="mb-3">
                            <h4 for="" class="text-left">¿Cuál es el problema central de tus clientes que estás
                                resolviendo?</h4>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input9" id="input9"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input10" id="input10"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input11" id="input11"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input12" id="input12"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input13" id="input13"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input14" id="input14"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input15" id="input15"
                                    aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input16" id="input16"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle">Atributos</h4>
                    <div>
                        <div class="mb-3">
                            <h4 for="" class="text-left">Crea un listado de los atributos más importantes para tus
                                clientes a la hora de elegir un producto/servicio.</h4>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input17" id="input17"
                                    aria-describedby="helpId" placeholder="" ng-change="myFunc()">
                                <input type="text" class="form-control" name="" ng-model="input18" id="input18"
                                    aria-describedby="helpId" placeholder="" ng-change="myFunc()">
                                <input type="text" class="form-control" name="" ng-model="input19" id="input19"
                                    aria-describedby="helpId" placeholder="" ng-change="myFunc()">
                                <input type="text" class="form-control" name="" ng-model="input20" id="input20"
                                    aria-describedby="helpId" placeholder="" ng-change="myFunc()">
                                <input type="text" class="form-control" name="" ng-model="input21" id="input21"
                                    aria-describedby="helpId" placeholder="" ng-change="myFunc()">
                                <input type="text" class="form-control" name="" ng-model="input22" id="input22"
                                    aria-describedby="helpId" placeholder="" ng-change="myFunc()">
                                <input type="text" class="form-control" name="" ng-model="input23" id="input23"
                                    aria-describedby="helpId" placeholder="" ng-change="myFunc()">
                                <input type="text" class="form-control" name="" ng-model="input24" id="input24"
                                    aria-describedby="helpId" placeholder="" ng-change="myFunc()">
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle">Escala de atributos</h4>
                    <div>
                        <div class="table-responsive">
                            <h4>Define aquello que un cliente entiende como atributo débil, bueno o genial.</h4>
                            <table class="table text-white table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="">
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Débil</label>

                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Normal</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Exelente</label>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Atributos</td>
                                        <td>Describir parametro</td>
                                        <td>Describir parametro</td>
                                        <td>Describir parametro</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input25"
                                                    id="input25" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input26"
                                                    id="input26" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input27"
                                                    id="input27" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input28"
                                                    id="input28" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input29"
                                                    id="input29" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input30"
                                                    id="input30" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input31"
                                                    id="input31" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input32"
                                                    id="input32" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input33"
                                                    id="input33" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input34"
                                                    id="input34" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input35"
                                                    id="input35" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input36"
                                                    id="input36" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input37"
                                                    id="input37" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input38"
                                                    id="input38" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input39"
                                                    id="input39" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input40"
                                                    id="input40" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input41"
                                                    id="input41" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input42"
                                                    id="input42" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input43"
                                                    id="input43" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input44"
                                                    id="input44" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input45"
                                                    id="input45" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input46"
                                                    id="input46" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input47"
                                                    id="input47" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input48"
                                                    id="input48" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input49"
                                                    id="input49" aria-describedby="helpId" placeholder="" readonly>
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
                                                    id="input51" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input52"
                                                    id="input52" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input53"
                                                    id="input53" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input54"
                                                    id="input54" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input55"
                                                    id="input55" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input56"
                                                    id="input56" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle">Competidores</h4>
                    <div>
                        <div class="table-responsive">
                            <h4>Primero, haz una lista de tus competidores. Después, cuando los hayas enlistado,
                                elige a los más importantes, marcando con una x el área de seleccion.</h4>
                            <table class="table text-white table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Competidor</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Área de selección </label>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input57"
                                                    id="input57" aria-describedby="helpId" placeholder=""
                                                    ng-change="myFunc()">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input58"
                                                    id="input58" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input59"
                                                    id="input59" aria-describedby="helpId" placeholder=""
                                                    ng-change="myFunc()">
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
                                                    id="input61" aria-describedby="helpId" placeholder=""
                                                    ng-change="myFunc()">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input62"
                                                    id="input62" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input63"
                                                    id="input63" aria-describedby="helpId" placeholder=""
                                                    ng-change="myFunc()">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input64"
                                                    id="input64" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input65"
                                                    id="input65" aria-describedby="helpId" placeholder=""
                                                    ng-change="myFunc()">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input66"
                                                    id="input66" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle">Ranking</h4>
                    <div>
                        <div class="table-responsive">
                            <h4>Compárate con tus competidores, en base a los atributos que seleccionaste</h4>
                            <table class="table text-white table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="">
                                                <label for="input17" class="form-label">Atributo 1</label>
                                                <input type="text" class="form-control" name="" ng-model="input67"
                                                    id="input67" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Competidor</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Escala 1-3 BAJO</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Escala 7-10 ALTO</label>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                        </td>
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
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input70"
                                                    id="input70" aria-describedby="helpId" placeholder="">
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
                                        </td>
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
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input74"
                                                    id="input74" aria-describedby="helpId" placeholder="">
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
                                        </td>
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
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input78"
                                                    id="input78" aria-describedby="helpId" placeholder="">
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
                                        </td>
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
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input82"
                                                    id="input82" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input83"
                                                    id="input83" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
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
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input86"
                                                    id="input86" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input87"
                                                    id="input87" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table text-white table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Atributo 2</label>
                                                <input type="text" class="form-control" name="" ng-model="input88"
                                                    id="input88" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Competidor</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Escala 1-3 BAJO</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Escala 7-10 ALTO</label>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input89"
                                                    id="input89" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
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
                                                    id="input92" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input93"
                                                    id="input93" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input94"
                                                    id="input94" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input95"
                                                    id="input95" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input96"
                                                    id="input96" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input97"
                                                    id="input97" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input98"
                                                    id="input98" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input99"
                                                    id="input99" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input100"
                                                    id="input100" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input101"
                                                    id="input101" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input102"
                                                    id="input102" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
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
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input105"
                                                    id="input105" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
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
                                                    id="input108" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table text-white table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Atributo 3</label>
                                                <input type="text" class="form-control" name="" ng-model="input109"
                                                    id="input109" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Competidor</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Escala 1-3 BAJO</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Escala 7-10 ALTO</label>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input110"
                                                    id="input110" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input111"
                                                    id="input111" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
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
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input114"
                                                    id="input114" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input115"
                                                    id="input115" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input116"
                                                    id="input116" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input117"
                                                    id="input117" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input118"
                                                    id="input118" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input119"
                                                    id="input119" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input120"
                                                    id="input120" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input121"
                                                    id="input121" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input122"
                                                    id="input122" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input123"
                                                    id="input123" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input124"
                                                    id="input124" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input125"
                                                    id="input125" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input126"
                                                    id="input126" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input127"
                                                    id="input127" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input128"
                                                    id="input128" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input129"
                                                    id="input129" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table text-white table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Atributo 4</label>
                                                <input type="text" class="form-control" name="" ng-model="input130"
                                                    id="input130" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Competidor</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Escala 1-3 BAJO</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Escala 7-10 ALTO</label>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input131"
                                                    id="input131" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input132"
                                                    id="input132" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input133"
                                                    id="input133" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input134"
                                                    id="input134" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input135"
                                                    id="input135" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input136"
                                                    id="input136" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input137"
                                                    id="input137" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input138"
                                                    id="input138" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input139"
                                                    id="input139" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input140"
                                                    id="input140" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input141"
                                                    id="input141" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input142"
                                                    id="input142" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input143"
                                                    id="input143" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input144"
                                                    id="input144" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input145"
                                                    id="input145" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input146"
                                                    id="input146" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input147"
                                                    id="input147" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input148"
                                                    id="input148" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input149"
                                                    id="input149" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input150"
                                                    id="input150" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table text-white table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Atributo 5</label>
                                                <input type="text" class="form-control" name="" ng-model="input151"
                                                    id="input151" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Competidor</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Escala 1-3 BAJO</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Escala 7-10 ALTO</label>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input152"
                                                    id="input152" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input153"
                                                    id="input153" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input154"
                                                    id="input154" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input155"
                                                    id="input155" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input156"
                                                    id="input156" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input157"
                                                    id="input157" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input158"
                                                    id="input158" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input159"
                                                    id="input159" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input160"
                                                    id="input160" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input161"
                                                    id="input161" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input162"
                                                    id="input162" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input163"
                                                    id="input163" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input164"
                                                    id="input164" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input165"
                                                    id="input165" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input166"
                                                    id="input166" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input167"
                                                    id="input167" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input168"
                                                    id="input168" aria-describedby="helpId" placeholder="" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input169"
                                                    id="input169" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input170"
                                                    id="input170" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="text" class="form-control" name="" ng-model="input171"
                                                    id="input171" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4>En base al análisis anterior, responde las siguientes preguntas y luego describe tu
                                entorno</h4>
                            <div class="mb-3">
                                <label for="" class="form-label">¿Cuáles son tus atributos más fuertes?</label>
                                <input type="text" class="form-control" name="" ng-model="input172" id="input172"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">¿Quién es tu competidor más cercano? ¿Por
                                    qué?</label>
                                <input type="text" class="form-control" name="" ng-model="input173" id="input173"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">¿Dónde eres más débil?</label>
                                <input type="text" class="form-control" name="" ng-model="input174" id="input174"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <textarea type="" class="form-control " name="" ng-model="input175" id="input175"
                                aria-describedby="helpId" placeholder="Describe tu entorno"></textarea>
                            <br>
                            <h5>Para los Segmento de mercado, que Problemática del cliente, Tu empresa/producto es
                                Descripción del producto que Beneficios del cliente.
                                A diferencia de Competidores,que proporcionan beneficios inferiores de los
                                competidores. Tu empresa proporciona beneficios únicos de tu producto/servicio</h5>
                            <textarea type="" class="form-control " name="" ng-model="input176" id="input176"
                                aria-describedby="helpId" placeholder="Redacte"></textarea>
                        </div>
                    </div>
                    <div id="producto2">
                        <input type="text" class="form-control" name="" ng-model="product2" id="product2"
                            aria-describedby="helpId" placeholder="">
                        <h4 class="text-center app-subtitle">Problemas y beneficios</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">¿Cuál es el problema central de tus clientes que estás
                                    resolviendo?</h4>
                                <div class="mb-3">
                                    <label for="" class="form-label">Problemas</label>
                                    <input type="text" class="form-control" name="" ng-model="input1p2" id="input1p2"
                                        aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input2p2" id="input2p2"
                                        aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input3p2" id="input3p2"
                                        aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input4p2" id="input4p2"
                                        aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Beneficios</label>
                                    <input type="text" class="form-control" name="" ng-model="input5p2" id="input5p2"
                                        aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input6p2" id="input6p2"
                                        aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input7p2" id="input7p2"
                                        aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input8p2" id="input8p2"
                                        aria-describedby="helpId" placeholder="">
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Caracteristicas</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">¿Cuál es el problema central de tus clientes que estás
                                    resolviendo?</h4>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="" ng-model="input9p2" id="input9p2"
                                        aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input10p2" id="input10p2"
                                        aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input11p2" id="input11p2"
                                        aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input12p2" id="input12p2"
                                        aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input13p2" id="input13p2"
                                        aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input14p2" id="input14p2"
                                        aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input15p2" id="input15p2"
                                        aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input16p2" id="input16p2"
                                        aria-describedby="helpId" placeholder="">
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Atributos</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Crea un listado de los atributos más importantes para
                                    tus clientes a la hora de elegir un producto/servicio.</h4>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="" ng-model="input17p2" id="input17p2"
                                        aria-describedby="helpId" placeholder="" ng-change="myFuncP2()">
                                    <input type="text" class="form-control" name="" ng-model="input18p2" id="input18p2"
                                        aria-describedby="helpId" placeholder="" ng-change="myFuncP2()">
                                    <input type="text" class="form-control" name="" ng-model="input19p2" id="input19p2"
                                        aria-describedby="helpId" placeholder="" ng-change="myFuncP2()">
                                    <input type="text" class="form-control" name="" ng-model="input20p2" id="input20p2"
                                        aria-describedby="helpId" placeholder="" ng-change="myFuncP2()">
                                    <input type="text" class="form-control" name="" ng-model="input21p2" id="input21p2"
                                        aria-describedby="helpId" placeholder="" ng-change="myFuncP2()">
                                    <input type="text" class="form-control" name="" ng-model="input22p2" id="input22p2"
                                        aria-describedby="helpId" placeholder="" ng-change="myFuncP2()">
                                    <input type="text" class="form-control" name="" ng-model="input23p2" id="input23p2"
                                        aria-describedby="helpId" placeholder="" ng-change="myFuncP2()">
                                    <input type="text" class="form-control" name="" ng-model="input24p2" id="input24p2"
                                        aria-describedby="helpId" placeholder="" ng-change="myFuncP2()">
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Escala de atributos</h4>
                        <div>
                            <div class="table-responsive">
                                <h4>Define aquello que un cliente entiende como atributo débil, bueno o genial.</h4>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Débil</label>

                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Normal</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Exelente</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Atributos</td>
                                            <td>Describir parametro</td>
                                            <td>Describir parametro</td>
                                            <td>Describir parametro</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input25p2"
                                                        id="input25p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input26p2"
                                                        id="input26p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input27p2"
                                                        id="input27p2" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input28p2"
                                                        id="input28p2" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input29p2"
                                                        id="input29p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input30p2"
                                                        id="input30p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input31p2"
                                                        id="input31p2" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input32p2"
                                                        id="input32p2" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input33p2"
                                                        id="input33p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input34p2"
                                                        id="input34p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input35p2"
                                                        id="input35p2" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input36p2"
                                                        id="input36p2" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input37p2"
                                                        id="input37p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input38p2"
                                                        id="input38p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input39p2"
                                                        id="input39p2" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input40p2"
                                                        id="input40p2" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input41p2"
                                                        id="input41p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input42p2"
                                                        id="input42p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input43p2"
                                                        id="input43p2" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input44p2"
                                                        id="input44p2" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input45p2"
                                                        id="input45p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input46p2"
                                                        id="input46p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input47p2"
                                                        id="input47p2" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input48p2"
                                                        id="input48p2" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input49p2"
                                                        id="input49p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input50p2"
                                                        id="input50p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input51p2"
                                                        id="input51p2" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input52p2"
                                                        id="input52p2" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input53p2"
                                                        id="input53p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input54p2"
                                                        id="input54p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input55p2"
                                                        id="input55p2" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input56p2"
                                                        id="input56p2" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Competidores</h4>
                        <div>
                            <div class="table-responsive">
                                <h4>Primero, haz una lista de tus competidores. Después, cuando los hayas enlistado,
                                    elige a los más importantes, marcando con una x el área de seleccion.</h4>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Competidor</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Área de selección </label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input57p2"
                                                        id="input57p2" aria-describedby="helpId" placeholder=""
                                                        ng-change="myFuncP2()">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input58p2"
                                                        id="input58p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input59p2"
                                                        id="input59p2" aria-describedby="helpId" placeholder=""
                                                        ng-change="myFuncP2()">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input60p2"
                                                        id="input60p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input61p2"
                                                        id="input61p2" aria-describedby="helpId" placeholder=""
                                                        ng-change="myFuncP2()">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input62p2"
                                                        id="input62p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input63p2"
                                                        id="input63p2" aria-describedby="helpId" placeholder=""
                                                        ng-change="myFuncP2()">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input64p2"
                                                        id="input64p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input65p2"
                                                        id="input65p2" aria-describedby="helpId" placeholder=""
                                                        ng-change="myFunc2P()">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input66p2"
                                                        id="input66p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Ranking</h4>
                        <div>
                            <div class="table-responsive">
                                <h4>Compárate con tus competidores, en base a los atributos que seleccionaste</h4>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="input17" class="form-label">Atributo 1</label>
                                                    <input type="text" class="form-control" name="" ng-model="input67p2"
                                                        id="input67p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Competidor</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 1-3 BAJO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 7-10 ALTO</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input68p2"
                                                        id="input68p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input69p2"
                                                        id="input69p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input70p2"
                                                        id="input70p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input71p2"
                                                        id="input71p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input72p2"
                                                        id="input72p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input73p2"
                                                        id="input73p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input74p2"
                                                        id="input74p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input75p2"
                                                        id="input75p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input76p2"
                                                        id="input76p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input77p2"
                                                        id="input77p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input78p2"
                                                        id="input78p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input79p2"
                                                        id="input79p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input80p2"
                                                        id="input80p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input81p2"
                                                        id="input81p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input82p2"
                                                        id="input82p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input83p2"
                                                        id="input83p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input84p2"
                                                        id="input84p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input85p2"
                                                        id="input85p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input86p2"
                                                        id="input86p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input87p2"
                                                        id="input87p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Atributo 2</label>
                                                    <input type="text" class="form-control" name="" ng-model="input88p2"
                                                        id="input88p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Competidor</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 1-3 BAJO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 7-10 ALTO</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input89p2"
                                                        id="input89p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input90p2"
                                                        id="input90p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input91p2"
                                                        id="input91p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input92p2"
                                                        id="input92p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input93p2"
                                                        id="input93p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input94p2"
                                                        id="input94p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input95p2"
                                                        id="input95p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input96p2"
                                                        id="input96p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input97p2"
                                                        id="input97p2" aria-describedby="helpId" placeholder=""
                                                        readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input98p2"
                                                        id="input98p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input99p2"
                                                        id="input99p2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input100p2" id="input100p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input101p2" id="input101p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input102p2" id="input102p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input103p2" id="input103p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input104p2" id="input104p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input105p2" id="input105p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input106p2" id="input106p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input107p2" id="input107p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input108p2" id="input108p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Atributo 3</label>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input109p2" id="input109p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Competidor</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 1-3 BAJO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 7-10 ALTO</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input110p2" id="input110p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input111p2" id="input111p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input112p2" id="input112p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input113p2" id="input113p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input114p2" id="input114p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input115p2" id="input115p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input116p2" id="input116p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input117p2" id="input117p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input118p2" id="input118p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input119p2" id="input119p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input120p2" id="input120p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input121p2" id="input121p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input122p2" id="input122p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input123p2" id="input123p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input124p2" id="input124p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input125p2" id="input125p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input126p2" id="input126p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input127p2" id="input127p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input128p2" id="input128p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input129p2" id="input129p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Atributo 4</label>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input130p2" id="input130p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Competidor</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 1-3 BAJO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 7-10 ALTO</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input131p2" id="input131p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input132p2" id="input132p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input133p2" id="input133p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input134p2" id="input134p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input135p2" id="input135p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input136p2" id="input136p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input137p2" id="input137p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input138p2" id="input138p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input139p2" id="input139p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input140p2" id="input140p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input141p2" id="input141p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input142p2" id="input142p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input143p2" id="input143p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input144p2" id="input144p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input145p2" id="input145p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input146p2" id="input146p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input147p2" id="input147p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input148p2" id="input148p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input149p2" id="input149p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input150p2" id="input150p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Atributo 5</label>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input151p2" id="input151p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Competidor</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 1-3 BAJO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 7-10 ALTO</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input152p2" id="input152p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input153p2" id="input153p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input154p2" id="input154p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input155p2" id="input155p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input156p2" id="input156p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input157p2" id="input157p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input158p2" id="input158p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input159p2" id="input159p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input160p2" id="input160p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input161p2" id="input161p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input162p2" id="input162p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input163p2" id="input163p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input164p2" id="input164p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input165p2" id="input165p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input166p2" id="input166p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input167p2" id="input167p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input168p2" id="input168p2" aria-describedby="helpId"
                                                        placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input169p2" id="input169p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input170p2" id="input170p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name=""
                                                        ng-model="input171p2" id="input171p2" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h4>En base al análisis anterior, responde las siguientes preguntas y luego describe
                                    tu entorno</h4>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Cuáles son tus atributos más fuertes?</label>
                                    <input type="text" class="form-control" name="" ng-model="input172p2"
                                        id="input172p2" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Quién es tu competidor más cercano? ¿Por
                                        qué?</label>
                                    <input type="text" class="form-control" name="" ng-model="input173p2"
                                        id="input173p2" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Dónde eres más débil?</label>
                                    <input type="text" class="form-control" name="" ng-model="input174p2"
                                        id="input174p2" aria-describedby="helpId" placeholder="">
                                </div>
                                <textarea type="" class="form-control " name="" ng-model="input175p2" id="input175p2"
                                    aria-describedby="helpId" placeholder="Describe tu entorno"></textarea>
                                <br>
                                <h5>Para los Segmento de mercado, que Problemática del cliente, Tu empresa/producto
                                    es Descripción del producto que Beneficios del cliente.
                                    A diferencia de Competidores,que proporcionan beneficios inferiores de los
                                    competidores. Tu empresa proporciona beneficios únicos de tu producto/servicio
                                </h5>
                                <textarea type="" class="form-control " name="" ng-model="input176p2" id="input176p2"
                                    aria-describedby="helpId" placeholder="Redacte"></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="producto3">
                            <input type="text" class="form-control" name="" ng-model="product3" id="product3"
                                aria-describedby="helpId" placeholder="">
                            <h4 class="text-center app-subtitle">Problemas y beneficios</h4>
                            <div>
                                <div class="mb-3">
                                    <h4 for="" class="text-left">¿Cuál es el problema central de tus clientes que estás
                                        resolviendo?</h4>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Problemas</label>
                                        <input type="text" class="form-control" name="" ng-model="input1p3"
                                            id="input1p3" aria-describedby="helpId" placeholder="">
                                        <input type="text" class="form-control" name="" ng-model="input2p3"
                                            id="input2p3" aria-describedby="helpId" placeholder="">
                                        <input type="text" class="form-control" name="" ng-model="input3p3"
                                            id="input3p3" aria-describedby="helpId" placeholder="">
                                        <input type="text" class="form-control" name="" ng-model="input4p3"
                                            id="input4p3" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Beneficios</label>
                                        <input type="text" class="form-control" name="" ng-model="input5p3"
                                            id="input5p3" aria-describedby="helpId" placeholder="">
                                        <input type="text" class="form-control" name="" ng-model="input6p3"
                                            id="input6p3" aria-describedby="helpId" placeholder="">
                                        <input type="text" class="form-control" name="" ng-model="input7p3"
                                            id="input7p3" aria-describedby="helpId" placeholder="">
                                        <input type="text" class="form-control" name="" ng-model="input8p3"
                                            id="input8p3" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <h4 class="text-center app-subtitle">Caracteristicas</h4>
                            <div>
                                <div class="mb-3">
                                    <h4 for="" class="text-left">¿Cuál es el problema central de tus clientes que estás
                                        resolviendo?</h4>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="" ng-model="input9p3"
                                            id="input9p3" aria-describedby="helpId" placeholder="">
                                        <input type="text" class="form-control" name="" ng-model="input10p3"
                                            id="input10p3" aria-describedby="helpId" placeholder="">
                                        <input type="text" class="form-control" name="" ng-model="input11p3"
                                            id="input11p3" aria-describedby="helpId" placeholder="">
                                        <input type="text" class="form-control" name="" ng-model="input12p3"
                                            id="input12p3" aria-describedby="helpId" placeholder="">
                                        <input type="text" class="form-control" name="" ng-model="input13p3"
                                            id="input13p3" aria-describedby="helpId" placeholder="">
                                        <input type="text" class="form-control" name="" ng-model="input14p3"
                                            id="input14p3" aria-describedby="helpId" placeholder="">
                                        <input type="text" class="form-control" name="" ng-model="input15p3"
                                            id="input15p3" aria-describedby="helpId" placeholder="">
                                        <input type="text" class="form-control" name="" ng-model="input16p3"
                                            id="input16p3" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <h4 class="text-center app-subtitle">Atributos</h4>
                            <div>
                                <div class="mb-3">
                                    <h4 for="" class="text-left">Crea un listado de los atributos más importantes para
                                        tus clientes a la hora de elegir un producto/servicio.</h4>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="" ng-model="input17p3"
                                            id="input17p3" aria-describedby="helpId" placeholder=""
                                            ng-change="myFuncP3()">
                                        <input type="text" class="form-control" name="" ng-model="input18p3"
                                            id="input18p3" aria-describedby="helpId" placeholder=""
                                            ng-change="myFuncP3()">
                                        <input type="text" class="form-control" name="" ng-model="input19p3"
                                            id="input19p3" aria-describedby="helpId" placeholder=""
                                            ng-change="myFuncP3()">
                                        <input type="text" class="form-control" name="" ng-model="input20p3"
                                            id="input20p3" aria-describedby="helpId" placeholder=""
                                            ng-change="myFuncP3()">
                                        <input type="text" class="form-control" name="" ng-model="input21p3"
                                            id="input21p3" aria-describedby="helpId" placeholder=""
                                            ng-change="myFuncP3()">
                                        <input type="text" class="form-control" name="" ng-model="input22p3"
                                            id="input22p3" aria-describedby="helpId" placeholder=""
                                            ng-change="myFuncP3()">
                                        <input type="text" class="form-control" name="" ng-model="input23p3"
                                            id="input23p3" aria-describedby="helpId" placeholder=""
                                            ng-change="myFuncP3()">
                                        <input type="text" class="form-control" name="" ng-model="input24p3"
                                            id="input24p3" aria-describedby="helpId" placeholder=""
                                            ng-change="myFuncP3()">
                                    </div>
                                </div>
                            </div>
                            <h4 class="text-center app-subtitle">Escala de atributos</h4>
                            <div>
                                <div class="table-responsive">
                                    <h4>Define aquello que un cliente entiende como atributo débil, bueno o genial.</h4>
                                    <table class="table text-white table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <div class="">
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Débil</label>

                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Normal</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Exelente</label>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Atributos</td>
                                                <td>Describir parametro</td>
                                                <td>Describir parametro</td>
                                                <td>Describir parametro</td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input25p3" id="input25p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input26p3" id="input26p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input27p3" id="input27p3" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input28p3" id="input28p3" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input29p3" id="input29p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input30p3" id="input30p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input31p3" id="input31p3" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input32p3" id="input32p3" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input33p3" id="input33p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input34p3" id="input34p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input35p3" id="input35p3" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input36p3" id="input36p3" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input37p3" id="input37p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input38p3" id="input38p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input39p3" id="input39p3" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input40p3" id="input40p3" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input41p3" id="input41p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input42p3" id="input42p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input43p3" id="input43p3" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input44p3" id="input44p3" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input45p3" id="input45p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input46p3" id="input46p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input47p3" id="input47p3" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input48p3" id="input48p3" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input49p3" id="input49p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input50p3" id="input50p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input51p3" id="input51p3" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input52p3" id="input52p3" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input53p3" id="input53p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input54p3" id="input54p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input55p3" id="input55p3" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input56p3" id="input56p3" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <h4 class="text-center app-subtitle">Competidores</h4>
                            <div>
                                <div class="table-responsive">
                                    <h4>Primero, haz una lista de tus competidores. Después, cuando los hayas enlistado,
                                        elige a los más importantes, marcando con una x el área de seleccion.</h4>
                                    <table class="table text-white table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Competidor</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Área de selección </label>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input57p3" id="input57p3"
                                                            aria-describedby="helpId" placeholder=""
                                                            ng-change="myFuncP3()">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input58p3" id="input58p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input59p3" id="input59p3"
                                                            aria-describedby="helpId" placeholder=""
                                                            ng-change="myFuncP3()">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input60p3" id="input60p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input61p3" id="input61p3"
                                                            aria-describedby="helpId" placeholder=""
                                                            ng-change="myFuncP3()">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input62p3" id="input62p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input63p3" id="input63p3"
                                                            aria-describedby="helpId" placeholder=""
                                                            ng-change="myFuncP3()">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input64p3" id="input64p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input65p3" id="input65p3"
                                                            aria-describedby="helpId" placeholder=""
                                                            ng-change="myFuncP3()">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input66p3" id="input66p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <h4 class="text-center app-subtitle">Ranking</h4>
                            <div>
                                <div class="table-responsive">
                                    <h4>Compárate con tus competidores, en base a los atributos que seleccionaste</h4>
                                    <table class="table text-white table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="input17" class="form-label">Atributo 1</label>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input67p3" id="input67p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Competidor</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Escala 1-3 BAJO</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Escala 7-10 ALTO</label>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input68p3" id="input68p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input69p3" id="input69p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input70p3" id="input70p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input71p3" id="input71p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input72p3" id="input72p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input73p3" id="input73p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input74p3" id="input74p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input75p3" id="input75p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input76p3" id="input76p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input77p3" id="input77p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input78p3" id="input78p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input79p3" id="input79p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input80p3" id="input80p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input81p3" id="input81p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input82p3" id="input82p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input83p3" id="input83p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input84p3" id="input84p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input85p3" id="input85p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input86p3" id="input86p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input87p3" id="input87p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table text-white table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Atributo 2</label>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input88p3" id="input88p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Competidor</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Escala 1-3 BAJO</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Escala 7-10 ALTO</label>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input89p3" id="input89p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input90p3" id="input90p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input91p3" id="input91p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input92p3" id="input92p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input93p3" id="input93p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input94p3" id="input94p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input95p3" id="input95p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input96p3" id="input96p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input97p3" id="input97p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input98p3" id="input98p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input99p3" id="input99p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input100p3" id="input100p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input101p3" id="input101p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input102p3" id="input102p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input103p3" id="input103p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input104p3" id="input104p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input105p3" id="input105p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input106p3" id="input106p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input107p3" id="input107p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input108p3" id="input108p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table text-white table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Atributo 3</label>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input109p3" id="input109p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Competidor</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Escala 1-3 BAJO</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Escala 7-10 ALTO</label>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input110p3" id="input110p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input111p3" id="input111p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input112p3" id="input112p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input113p3" id="input113p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input114p3" id="input114p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input115p3" id="input115p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input116p3" id="input116p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input117p3" id="input117p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input118p3" id="input118p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input119p3" id="input119p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input120p3" id="input120p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input121p3" id="input121p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input122p3" id="input122p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input123p3" id="input123p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input124p3" id="input124p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input125p3" id="input125p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input126p3" id="input126p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input127p3" id="input127p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input128p3" id="input128p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input129p3" id="input129p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table text-white table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Atributo 4</label>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input130p3" id="input130p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Competidor</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Escala 1-3 BAJO</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Escala 7-10 ALTO</label>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input131p3" id="input131p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input132p3" id="input132p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input133p3" id="input133p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input134p3" id="input134p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input135p3" id="input135p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input136p3" id="input136p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input137p3" id="input137p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input138p3" id="input138p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input139p3" id="input139p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input140p3" id="input140p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input141p3" id="input141p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input142p3" id="input142p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input143p3" id="input143p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input144p3" id="input144p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input145p3" id="input145p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input146p3" id="input146p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input147p3" id="input147p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input148p3" id="input148p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input149p3" id="input149p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input150p3" id="input150p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table text-white table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Atributo 5</label>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input151p3" id="input151p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Competidor</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Escala 1-3 BAJO</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Escala 7-10 ALTO</label>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input152p3" id="input152p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input153p3" id="input153p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input154p3" id="input154p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input155p3" id="input155p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input156p3" id="input156p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input157p3" id="input157p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input158p3" id="input158p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input159p3" id="input159p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input160p3" id="input160p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input161p3" id="input161p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input162p3" id="input162p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input163p3" id="input163p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input164p3" id="input164p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input165p3" id="input165p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input166p3" id="input166p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input167p3" id="input167p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input168p3" id="input168p3"
                                                            aria-describedby="helpId" placeholder="" readonly>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input169p3" id="input169p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input170p3" id="input170p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control" name=""
                                                            ng-model="input171p3" id="input171p3"
                                                            aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <h4>En base al análisis anterior, responde las siguientes preguntas y luego describe
                                        tu entorno</h4>
                                    <div class="mb-3">
                                        <label for="" class="form-label">¿Cuáles son tus atributos más fuertes?</label>
                                        <input type="text" class="form-control" name="" ng-model="input172p3"
                                            id="input172p3" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">¿Quién es tu competidor más cercano? ¿Por
                                            qué?</label>
                                        <input type="text" class="form-control" name="" ng-model="input173p3"
                                            id="input173p3" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">¿Dónde eres más débil?</label>
                                        <input type="text" class="form-control" name="" ng-model="input174p3"
                                            id="input174p3" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <textarea type="" class="form-control " name="" ng-model="input175p3"
                                        id="input175p3" aria-describedby="helpId"
                                        placeholder="Describe tu entorno"></textarea>
                                    <br>
                                    <h5>Para los Segmento de mercado, que Problemática del cliente, Tu empresa/producto
                                        es Descripción del producto que Beneficios del cliente.
                                        A diferencia de Competidores,que proporcionan beneficios inferiores de los
                                        competidores. Tu empresa proporciona beneficios únicos de tu producto/servicio
                                    </h5>
                                    <textarea type="" class="form-control " name="" ng-model="input176p3"
                                        id="input176p3" aria-describedby="helpId" placeholder="Redacte"></textarea>
                                </div>
                            </div>
                        </div>
                    <br>
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