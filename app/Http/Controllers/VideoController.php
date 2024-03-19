<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class VideoController extends Controller
{
    public function showVideo() {
        // Aquí va la lógica de tu página
         return view('teacher.videosAndQuestions');
        //return redirect()->route('showVideo');
    }
}
