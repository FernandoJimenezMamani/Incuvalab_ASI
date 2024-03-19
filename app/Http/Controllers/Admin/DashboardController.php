<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct() {
        try{
        $this->middleware('auth');
        }catch (\Exception $e) {
            
        }
      }

    public function teacherList(){
        try{
        return view('admin.teacherList');
    }catch (\Exception $e) {
        
    }
    }
    public function teams(){
        try{
        return view('admin.teams');
    }catch (\Exception $e) {
        
    }
    }
    public function progress(){
        try{
        return view('admin.progress');
    }catch (\Exception $e) {
        
    }
    }
    public function editTeacher(){
        try{
        return view('admin.editTeacher');
    }catch (\Exception $e) {
        
    }
    }

}
