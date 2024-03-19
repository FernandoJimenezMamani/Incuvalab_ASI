<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
           
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function generatePsw(){
        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $shfl = str_shuffle($comb);
        $pwd = substr($shfl,0,5);
        return $pwd;
    }

   

    public function getUsers() {
        return User::all();
    }
    
    public function getUser($id) {
        return User::where(["id" => $id])->first();
    }

    public function postUser(Request $request) {
        $pwd = $this->generatePsw();
   
        User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'secondLastName' => $request->secondLastName,
            'email' => $request->email,
            'password' => $pwd,
            'userType' => 'Docente'
        ]);


        $this->sendEmail($request->email, $pwd);
        return ['result' => 'ok'];
    }

    //
    public function sendEmail($address, $pwd){
        $data = array(
            'pass' => $pwd,
        );

        Mail::send('emails.psw', $data, function($message) use ($address){
            $message->from('incuvalabunivalle@hotmail.com', 'Incuvalab');
            $message->to($address)->subject('Contraseña cuenta Incuvalab');
        });
    }
    //

    public function putUser(Request $request) {
        $student = User::where(["id" => $request->id])->first();
        $student->firstName = $request->firstName;
        $student->lastName = $request->lastName;
        $student->secondLastName = $request->secondLastName;
        $student->email = $request->email;
        $student->update();
        return ['result' => 'ok'];
    }

    public function deleteUser($id) {
        $student = User::where(["id" => $id])->first();
        $student->delete();
        return ['result' => 'ok'];
    }

    //Vistas
    public function editUser($id) {
        return view('users.edit', ["id" => $id]);
    }

    public function newUser() {
        return view("users.new");
    }

    public function listUser() {
        return view("users.list", ["users" => User::all()]);
    }

    
}
