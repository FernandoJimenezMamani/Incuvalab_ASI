<?php

namespace App\Http\Controllers\Time;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TimeController extends Controller
{
    //functions to CRUD Times
    public function getTimes(Time $time)
    {
        $time = Time::all();
        return response()->json($time);

    }


    public function getTime($id)
    {
        $time = Time::find($id);
        $time->start = Carbon::createFromFormat('Y-m-d H:i:s', $time->start)->format('d-m-Y');
        $time->end = Carbon::createFromFormat('Y-m-d H:i:s', $time->end)->format('d-m-Y');
        return response()->json($time);

    }

    public function postTime(Request $request) {
        request()->validate(Time::$rules);
        $time=Time::create($request->all());
        
        // $validateTime = DB::table('times')->where('year', '=', $request->year)->get();

        // if (count($validateTime) > 0) {
        //     return ['result' => 'error'];
        // }
        // else{
        //     Time::create([
        //         'year' => $request->year,
        //         'form1_start' =>  $request->form1_start,
        //         'form1_end' => $request->form1_end,
        //         'form2_start' => $request->form2_start,
        //         'form2_end' => $request->form2_end,
        //         'form3_start' => $request->form3_start,
        //         'form3_end' => $request->form3_end,
        //         'form4_start' => $request->form4_start,
        //         'form4_end' => $request->form4_end,
        //         'form5_start' => $request->form5_start,
        //         'form5_end' => $request->form5_end,
        //         'form6_start' => $request->form6_start,
        //         'form6_end' => $request->form6_end,
        //         'form7_start' => $request->form7_start,
        //         'form7_end' => $request->form7_end
        //     ]);
        //     return ['result' => 'ok'];
        // }
    }

    public function putTime(Request $request, Time $time)
    {
        request()->validate(Time::$rules);
        $time->update($request->all());

        return response()->json($time);
    }

    public function deleteTime($id)
    {
        $time = Time::find($id)->delete();
        return response()->json($time);
    }

    //Vistas
    public function viewTimes() {
        return view("time.view");
    }

    public function listTimes() {
        return view("time.list");
    }

    public function newTime() {
        return view("time.new");
    }

    public function editTime($id) {
        return view('time.edit', ["id" => $id]);
    }
}
