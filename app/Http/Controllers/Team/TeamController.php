<?php

namespace App\Http\Controllers\Team;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;
use App\Models\Student;
use App\Models\Time;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmailApproved;
use App\Mail\EmailApprovedQueue;

class TeamController extends Controller
{
    public function getTeams() {
        return Team::all();
       
        
    }
    
    public function getTeam($id) {
        return Team::where('teams.id', '=' ,$id)
        ->first();
    }

    public function getMembers($id) {

        return User::join('students', 'users.id', '=', 'students.idUser')
        ->join('teams', 'students.idTeam', '=', 'teams.id')
        ->select('users.*', 'teams.teamName', 'teams.phase', 'teams.id as teamId', 'teams.year')
        ->where([['students.idTeam', '=', $id], ['users.userType', '=', 'student']])
        ->orderBy('firstName','asc')
        ->get();
    }

    public function postTeam(Request $request) {
        $validateTeam = DB::table('teams')->where('teamName', '=', $request->teamName)
        ->get();

        if (count($validateTeam) > 0) {
            return ['result' => 'error'];
        }
        else{
            Team::create([
                'teamName' => $request->teamName,
                
                'phase' => 1,
                'year'=> $request->year,
                'status' => '1,0,0,0,0,0,0'
            ]);
            return ['result' => 'ok'];
        }
       
    }

    public function putTeam(Request $request) {
        $equalEmail =  DB::table('teams')->where([['id', '=',  $request->id], ['teamName', '=', $request->teamName]])
            ->get();
            if(count($equalEmail) > 0){
                $team = Team::where(["id" => $request->id])->first();
                $team->teamName = $request->teamName;
                $team->year = $request->year;
                $team->update();
            }
            else{
                $validateEmail = DB::table('teams')->where('teamName', '=', $request->teamName)
                ->get();
                    //Check if the user exists
                if (count($validateEmail) > 0) {
                    // return redirect()->back()->withErrors(['error' => trans('User does not exist')]);
                    return ['result' => 'error'];
                }else{
    
                    $team = Team::where(["id" => $request->id])->first();
                    $team->teamName = $request->teamName;
                    $team->year = $request->year;
                    $team->update();
    
                }

            }
            
      
        return ['result' => 'ok'];
    }
    //Observado >:(
    public function deleteTeam($id) {
        try{
            $students = DB::table('students')->where('idTeam', '=', $id)->get();

            foreach($students as $s){
                DB::beginTransaction();
    
                $student = Student::where(["idUser" => $s->idUser])->first();
                $student->delete();
    
                $user = User::where(["id" =>  $s->idUser])->first();
                $user->delete();
    
                DB::commit();
            }
    
            $team = Team::where(["id" => $id])->first();
            $team->delete();
    
        }catch(Exception $ex){
            DB::rollback();
        }
        

        return ['result' => 'ok'];
    }

    //Vistas
    public function editTeam($id) {
        return view('team.edit', ["id" => $id]);
    }

    public function newTeam() {
        

      
        return view("team.new");
    }

    public function listTeams() {
        return view("team.list");
    }

    public function viewTeams() {
        return view("team.view");
    }

    public function teamMembers() {
        return view("team.members");
    }
    //


    //Para Habilitar y deshabilitar Forms
    public function verifiedFormsStatus(){
        $userId = Auth::user()->id;
        $var = DB::table('teams')
        ->join('students', 'students.idTeam', '=', 'teams.id')
        ->where('students.idUser', '=', $userId)
        ->select('teams.status')->get();
        return $var;
    }

    public function getStatusFormTeacher($id){
        return DB::table('teams')->where('teams.id', '=', $id)->select('teams.status')->get();
    }


    public function putFormStatus(Request $req){
        
        $userRol = Auth::user()->userType;

        $teacher = User::where('id',  Auth::user()->id)->first();

        $teacherName =  $teacher->firstName . ' ' . $teacher->lastName . ' '. $teacher->secondLastName;

        if($userRol == "teacher"){
            $team = DB::table('teams')->where('teams.id', '=', $req->id)->update(['status' => $req->status]);
            
            if($req->type == 1){
                $students =  Student::where('idTeam', $req->id)->get();
                $users = array();;
                foreach ($students as $s){
                    array_push($users, User::where('id', $s->idUser)->first());
                }

                foreach($users as $u){
                    SendEmailApproved::dispatch($u->email, $teacherName, $req->fName);
                } 

                if($req->phase != 0){
                    DB::table('teams')->where('teams.id', '=', $req->id)->update(['phase' => $req->phase]);
                }
            }
            
           
        }
        return ['result' =>  'ok'];
    }
    //
}
