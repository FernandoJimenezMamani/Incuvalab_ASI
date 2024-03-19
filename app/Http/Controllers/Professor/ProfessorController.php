<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Jobs\SendEmail;
use App\Mail\EmailForQueue;
use App\Models\Professor;

class ProfessorController extends Controller
{
    public function generatePsw(){
        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $shfl = str_shuffle($comb);
        $pwd = substr($shfl,0,5);
        return $pwd;
    }

    public function getTeachers(){
        return User::where('userType', 'teacher')->get();
    }

    public function getTeacher($id){
        return User::where(["id" => $id])->first();
    }

    public function postTeacher(Request $r){

        try{
            DB::beginTransaction();

            $validateEmail = DB::table('users')->where('email', '=', $r->email)
            ->get();
                //Check if the user exists
            if (count($validateEmail) > 0) {
                // return redirect()->back()->withErrors(['error' => trans('User does not exist')]);
                return ['result' => 'error'];
            }
            else{
                $pwd = $this->generatePsw();

                $user = User::create([
                    'firstName' => $r->firstName,
                    'lastName' => $r->lastName,
                    'secondLastName' => $r->secondLastName,
                    'email' => $r->email,
                    'password' => Hash::make($pwd),
                    'userType' => 'teacher'
                ]);

                Professor::create([
                    'idUser' => $user->id,

                ]);

                SendEmail::dispatch($r->email, $pwd, $r->firstName);

            }


            DB::commit();
        }catch(Exception $ex){
            DB::rollback();
        }

        return ['res' => 'ok'];
    }

    public function putTeacher(Request $r){

        $equalEmail =  DB::table('users')->where([['id', '=',  $r->id], ['email', '=', $r->email]])
        ->get();
        if(count($equalEmail) > 0){
            $t = User::where(["id" => $r->id])->first();
            $t->firstName = $r->firstName;
            $t->lastName = $r->lastName;
            $t->secondLastName = $r->secondLastName;
            $t->email = $r->email;
            $t->update();
        }else{
            $validateEmail = DB::table('users')->where('email', '=', $r->email)
            ->get();
                //Check if the user exists
            if (count($validateEmail) > 0) {
                // return redirect()->back()->withErrors(['error' => trans('User does not exist')]);
                return ['result' => 'error'];
            }else{

                $t = User::where(["id" => $r->id])->first();
                $t->firstName = $r->firstName;
                $t->lastName = $r->lastName;
                $t->secondLastName = $r->secondLastName;
                $t->email = $r->email;
                $t->update();

            }

        }

        return ['res' => 'ok'];
    }

    public function deleteTeacher($id){
        $t = User::where(["id" => $id])->first();
        $t->delete();
        return ["res" => "ok"];
    }

    public function listTeachers(){
        return view("teacher.list");
    }

    public function newTeacher(){
        return view('teacher.new');
    }

    public function editTeacher($id){
        return view('teacher.edit', ["id" => $id]);
    }

    //Forms
    public function viewForms(){
        return view('team.viewForms');
    }
    //

    //Times
    public function viewTimes(){
        return view('time.viewTimes');
    }
    //

    //Meetings
    public function viewMeets(){
        return view('meeting.viewMeetings');
    }
}
