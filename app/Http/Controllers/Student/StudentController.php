<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Jobs\SendEmail;
use App\Mail\EmailForQueue;
use App\Models\Team;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StudentController extends Controller
{

    protected function validator(array $data)
    {
        return Validator::make($data, [

            'email' => ['required', 'string', 'email', 'max:100', 'unique:user'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function generatePsw(){
        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $shfl = str_shuffle($comb);
        $pwd = substr($shfl,0,5);
        return $pwd;
    }

    public function getStudents() {
          return User::join('students', 'users.id', '=', 'students.idUser')
              ->join('teams', 'students.idTeam', '=', 'teams.id')
              ->select('users.*', 'teams.teamName')
              ->where('users.userType', '=', 'student')
              ->orderBy('firstName','asc')
              ->get();
    }

    public function getStudent($id) {
        return User::join('students', 'users.id', '=', 'students.idUser')
              ->join('teams', 'students.idTeam', '=', 'teams.id')
              ->select('users.*', 'teams.id as teamId')
              ->where('users.id', '=', $id)
              ->first();
    }

    public function postStudent(Request $request)
    {
        DB::beginTransaction();
        try{
            $validateEmail = DB::table('users')->where('email', '=', $request->email)
            ->get();
                //Check if the user exists
            if (count($validateEmail) > 0) {
                return ['result' => 'error'];
            }
            else{
                $pwd = $this->generatePsw();

                $user = User::create([
                    'firstName' => $request->firstName,
                    'lastName' => $request->lastName,
                    'secondLastName' => $request->secondLastName,
                    'email' => $request->email,
                    'password' => Hash::make($pwd),
                    'userType' => 'student'
                ]);


                Student::create([
                    'idUser' => $user->id,
                    'idTeam' => $request->teamID

                ]);

                SendEmail::dispatch($request->email, $pwd, $request->firstName);

            }

            DB::commit();
        }catch(Exception $ex){
            DB::rollback();
        }

         return ['result' => 'ok'];
    }

    public function putStudent(Request $request) {

        try{
            DB::beginTransaction();
            $equalEmail =  DB::table('users')->where([['id', '=',  $request->id], ['email', '=', $request->email]])
            ->get();
            if(count($equalEmail) > 0){
                $user = User::where(["id" => $request->id])->first();
                $user->firstName = $request->firstName;
                $user->lastName = $request->lastName;
                $user->secondLastName = $request->secondLastName;
                $user->email = $request->email;
                $user->update();


                $student = Student::where(["idUser" => $request->id])->first();
                $student->idTeam = $request->teamID;
                $student->update();
            }
            else{
                $validateEmail = DB::table('users')->where('email', '=', $request->email)
                ->get();
                    //Check if the user exists
                if (count($validateEmail) > 0) {
                    // return redirect()->back()->withErrors(['error' => trans('User does not exist')]);
                    return ['result' => 'error'];
                }else{

                    $user = User::where(["id" => $request->id])->first();
                    $user->firstName = $request->firstName;
                    $user->lastName = $request->lastName;
                    $user->secondLastName = $request->secondLastName;
                    $user->email = $request->email;
                    $user->update();


                    $student = Student::where(["idUser" => $request->id])->first();
                    $student->idTeam = $request->teamID;
                    $student->update();

                }

            }

            DB::commit();
        }catch(Exception $ex){
            DB::rollback();
        }

        return ['result' => 'ok'];
    }

    public function deleteStudent($id) {
        try{
            DB::beginTransaction();

            $student = Student::where(["idUser" => $id])->first();

            $student->delete();

            $user = User::where(["id" => $id])->first();
             $user->delete();

            DB::commit();
        }catch(Exception $ex){
            DB::rollback();
        }

        return ['result' => 'ok'];

    }

    //Vistas
    public function editStudent($id) {
        $teams = Team::all();
        return view('student.edit', ["id" => $id], compact('teams'));
    }

    public function newStudent() {
        $teams = Team::all();
        return view("student.new", compact('teams'));
    }

    public function listStudents() {
        return view("student.list");
    }
    public function timeStudents() {
        return view("student.viewTimes");
    }

    public function meetingStudents() {
        return view("student.viewMeetings");
    }

    public function myTeamInfo() {
        $idUser = Auth::user()->id;

        $idTeam =  Team::rightJoin('students', 'teams.id', '=', 'students.idTeam')
        ->rightJoin('users', 'students.idUser', '=', 'users.id')
        ->select('teams.id')
        ->where([['students.idUser', '=', $idUser], ['users.userType', '=', 'student']])
        ->first();



        $teams = User::join('students', 'users.id', '=', 'students.idUser')
        ->join('teams', 'students.idTeam', '=', 'teams.id')
        ->select('users.*', 'teams.teamName', 'teams.phase', 'teams.id as teamId', 'teams.year')
        ->where([['students.idTeam', '=',  $idTeam->id], ['users.userType', '=', 'student']])
        ->orderBy('firstName','asc')
        ->get();

        switch ($teams[0]->phase) {
        case 1:
            $phaseName = 'Propuesta de valor';
            break;
        case 2:
            $phaseName = 'Mapa de competidores';
            break;
        case 3:
            $phaseName = 'Análisis del Entorno y Grupos de Interés';
            break;
        case 4:
            $phaseName = 'Modelo de Negocio y Marketing';
            break;
        case 5:
            $phaseName = 'Precio y viabilidad del negocio';
            break;
        case 6:
            $phaseName = 'Plan de impacto';
            break;
        case 7:
            $phaseName = 'Plan de crecimiento';
            break;
        }

        $teamName = $teams[0]->teamName;

        return view("student.myteam", ["idTeam" => $idTeam,
            "teams" => $teams,
            "teamName" => $teamName,
            "phase" => $teams[0]->phase,
            "year" => $teams[0]->year,
            "percentage" => round($teams[0]->phase * 100 / 8),
            "phaseName" => $phaseName]);
    }
}
