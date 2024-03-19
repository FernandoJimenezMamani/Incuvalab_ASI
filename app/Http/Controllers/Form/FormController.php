<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Forms;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Team;
use App\Models\Student;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmailFormDone;
use App\Mail\EmailFormDoneQueue;

class FormController extends Controller
{
    public function getForms()
    {
        $forms = Forms::all();
        return $forms;
    }

    public function getUserTeamId($id){
        $idTeam = Student::where('idUser', $id)->value('idTeam');
        return $idTeam;
    }
    public function getUserTeamName($id){
        $NameTeam = Team::where('id', $id)->value('teamname');
        return $NameTeam;
    }

    public function formsComment(Request $request ){
       // $idTeam = Student::where('idUser', $request->userID)->value('idTeam');
        $form = Forms::where('idTeam',  $request->teamId)->where('formName', $request->formName)->first();
        $form->formComments = $request->comment;
        $form->update();
    }

    public function sendEmailFormDone(Request $request ){

        $idTeam = Student::where('idUser', $request->userID)->value('idTeam');
        $NameTeam = Team::where('id', $idTeam)->value('teamName');

        $teachers =  User::where('userType', 'teacher')->get();
        foreach ($teachers as $t) {
            SendEmailFormDone::dispatch($t->email, $NameTeam, $request->form);
        }



    }

    public function showComment(Request $request ){
        
        $form =  Forms::where('idTeam',  $request->idTeam)->where('formName', $request->formName)->first();
        //$form =  Forms::where('idTeam',  '1')->where('formName', 'form1')->first();

        return $form;
    }

    public function getForm1($id)
    {
        if (Forms::where('idTeam', $id)->where('formName', 'form1')->first() != null) {
            $form = Forms::where('idTeam', $id)->where('formName', 'form1')->first();
            return $form;
        } else {
            Forms::create([
                'formName' => 'form1',
                'formText' => ';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;1;',
                'idTeam' => $id
            ]);
            return $this->getForm1($id);
        }
    }
    
    public function getForm2($id)
    {
        if (Forms::where('idTeam', $id)->where('formName', 'form2')->first() != null) {
            $form = Forms::where('idTeam', $id)->where('formName', 'form2')->first();
            return $form;
        } else {
            Forms::create([
                'formName' => 'form2',
                'formText' => ';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;',
                'idTeam' => $id
            ]);
            return $this->getForm2($id);
        }
    }
    public function getForm3($id)
    {
        if (Forms::where('idTeam', $id)->where('formName', 'form3')->first() != null) {
            $form = Forms::where('idTeam', $id)->where('formName', 'form3')->first();
            return $form;
        } else {
            Forms::create([
                'formName' => 'form3',
                'formText' => ';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;',
                'idTeam' => $id
            ]);
            return $this->getForm3($id);
        }
    }
    public function getForm4($id)
    {
        if (Forms::where('idTeam', $id)->where('formName', 'form4')->first() != null) {
            $form = Forms::where('idTeam', $id)->where('formName', 'form4')->first();
            return $form;
        } else {
            Forms::create([
                'formName' => 'form4',
                'formText' => ';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;',
                'idTeam' => $id
            ]);
            return $this->getForm4($id);
        }
    }
    
    public function getForm5($id)
    {
        if (Forms::where('idTeam', $id)->where('formName', 'form5')->first() != null) {
            $form = Forms::where('idTeam', $id)->where('formName', 'form5')->first();
            return $form;
        } else {
            Forms::create([
                'formName' => 'form5',
                'formText' => ';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;',
                'idTeam' => $id
            ]);
            return $this->getForm5($id);
        }
    }
    public function getForm6($id)
    {
        if (Forms::where('idTeam', $id)->where('formName', 'form6')->first() != null) {
            $form = Forms::where('idTeam', $id)->where('formName', 'form6')->first();
            return $form;
        } else {
            Forms::create([
                'formName' => 'form6',
                'formText' => ';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;',
                'idTeam' => $id
            ]);
            return $this->getForm6($id);
        }
    }
    public function getForm7($id)
    {
        if (Forms::where('idTeam', $id)->where('formName', 'form7')->first() != null) {
            $form = Forms::where('idTeam', $id)->where('formName', 'form7')->first();
            return $form;
        } else {
            Forms::create([
                'formName' => 'form7',
                'formText' => ';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;','idTeam' => $id
            ]);
            return $this->getForm7($id);
        }
    }

    public function postForm(Request $request)
    {
        $idUser = Auth::user()->id;

        $idTeam = Student::where('idUser', $idUser)->value('idTeam');

        Forms::create([
            'formName' => $request->formName,
            'formText' => $request->formText,
            'idTeam' => $request->teamId
        ]);
    }
    public function putForm1(Request $request)
    {
        $idUser = Auth::user()->id;

        $idTeam = Student::where('idUser', $idUser)->value('idTeam');

        $form = Forms::where('idTeam', $idTeam)->where('formName', 'form1')->first();
        $form->formText = $request->formText;
        $form->save();
    }
    public function putForm2(Request $request)
    {
        $idUser = Auth::user()->id;

        $idTeam = Student::where('idUser', $idUser)->value('idTeam');

        $form = Forms::where('idTeam', $idTeam)->where('formName', 'form2')->first();
        $form->formText = $request->formText;
        $form->save();
    }
    public function putForm3(Request $request)
    {
        $idUser = Auth::user()->id;

        $idTeam = Student::where('idUser', $idUser)->value('idTeam');

        $form = Forms::where('idTeam', $idTeam)->where('formName', 'form3')->first();
        $form->formText = $request->formText;
        $form->save();
    }
    public function putForm4(Request $request)
    {
        $idUser = Auth::user()->id;

        $idTeam = Student::where('idUser', $idUser)->value('idTeam');

        $form = Forms::where('idTeam', $idTeam)->where('formName', 'form4')->first();
        $form->formText = $request->formText;
        $form->save();
    }
    public function putForm5(Request $request)
    {
        $idUser = Auth::user()->id;

        $idTeam = Student::where('idUser', $idUser)->value('idTeam');

        $form = Forms::where('idTeam', $idTeam)->where('formName', 'form5')->first();
        $form->formText = $request->formText;
        $form->save();
    }
    public function putForm6(Request $request)
    {
        $idUser = Auth::user()->id;

        $idTeam = Student::where('idUser', $idUser)->value('idTeam');

        $form = Forms::where('idTeam', $idTeam)->where('formName', 'form6')->first();
        $form->formText = $request->formText;
        $form->save();
    }
    public function putForm7(Request $request)
    {
        $idUser = Auth::user()->id;

        $idTeam = Student::where('idUser', $idUser)->value('idTeam');

        $form = Forms::where('idTeam', $idTeam)->where('formName', 'form7')->first();
        $form->formText = $request->formText;
        $form->save();
    }
    //Form 1
    public function form1()
    {
        return view('form1');
    }

    public function Form1ById($idTeam)
    {
        return view("form1");
    }
     //Form 2

    public function form2()
    {
        return view('form2');
    }
    public function Form2ById($idTeam)
    {
        return view("form2");
    }
     //Form 3
    public function form3()
    {
        return view('form3');
    }
    public function Form3ById($idTeam)
    {
        return view("form3");
    }
     //Form 4
    public function form4()
    {
        return view('form4');
    }

    public function Form4ById($idTeam)
    {
        return view("form4");
    }
     //Form 5

    public function form5()
    {
        return view('form5');
    }
    
    public function Form5ById($idTeam)
    {
        return view("form5");
    }
     //Form 6
    
    public function form6()
    {
        return view('form6');
    }

    public function Form6ById($idTeam)
    {
        return view("form6");
    }
     //Form 7

    public function form7()
    {
       return view('form7');
    }

    public function Form7ById($idTeam)
    {
        return view("form7");
    }
}
