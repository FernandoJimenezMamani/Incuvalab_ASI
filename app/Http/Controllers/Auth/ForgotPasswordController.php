<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Jobs\SendEmail;
use App\Mail\EmailForQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
    public function generatePsw(){
        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $shfl = str_shuffle($comb);
        $pwd = substr($shfl,0,5);
        return $pwd;
    }

    public function forgotPassword(Request $request){
        try{
        $userValidation = DB::table('users')->where('email', '=', $request->email)
            ->get();
        //Check if the user exists
        if (count($userValidation) < 1) {
            return back()->with(["error"=>"Este usuario NO existe"]);
        }

        $pwd = $this->generatePsw();
        $user = User::where(["id" => $userValidation[0]->id])->first();
        $user->password = Hash::make($pwd);
        $user->update();
        
        SendEmail::dispatch($request->email, $pwd, $user->firstName);

        return back()->with(["status"=>"Te hemos enviado tu nueva contraseña a tu email!"]);
        }catch (\Exception $e) {
            
        }
    }


    public function viewForgotPass(){
        try{
        return view('auth.passwords.forgot');
    }catch (\Exception $e) {
        
    }
    }
}
