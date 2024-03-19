<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function authenticated($request , $user){
        try {
            if ($user->userType == 'admin') {
                // Lógica para admin
                $logMessage = "Acceso de admin: " . $user->email . " - " . date('Y-m-d H:i:s');
                return redirect()->route('home');
            } else if ($user->userType == 'teacher') {
                // Lógica para teacher
                $logMessage = "Acceso de teacher: " . $user->email . " - " . date('Y-m-d H:i:s');
                return redirect()->route('home');
            } else {
                // Lógica para otros usuarios
                $logMessage = "Acceso de usuario: " . $user->email . " - " . date('Y-m-d H:i:s');
                return redirect()->route('home');
            }
    } catch (\Exception $e) {
        $logMessage = "Error: " . $e->getMessage() . " - " . date('Y-m-d H:i:s');
        
    }
    
    // Mover esto fuera del bloque catch para asegurar que siempre se ejecute
    $logFilePath = "C:\Logs\access_log.txt";
    if (!file_exists(dirname($logFilePath))) {
        mkdir(dirname($logFilePath), 0777, true);
    }
        file_put_contents($logFilePath, $logMessage . PHP_EOL, FILE_APPEND);
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
