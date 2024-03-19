<?php

namespace App\Http\Controllers\Meeting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meeting;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmailMeeting;
use App\Mail\EmailForMeetingQueue;
use Carbon\Carbon;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;

class MeetingController extends Controller
{
    //functions to CRUD Meetings
    public function getMeetings(Meeting $meet)
    {
        $meet = Meeting::all();
        return response()->json($meet);

    }


    public function getMeet($id)
    {
        $meet = Meeting::find($id);
        $meet->start = Carbon::createFromFormat('Y-m-d H:i:s', $meet->start)->format('d-m-Y');
        $meet->end = Carbon::createFromFormat('Y-m-d H:i:s', $meet->end )->format('d-m-Y');
        return response()->json($meet);

    }




    public function postMeet(Request $request) {

        request()->validate(Meeting::$rules);


        $meet=Meeting::create($request->all());

        $email = $request->input('email');
        $professor = $request->proffesor;
        $fname = $request->fname;
        Log::info('Dispatching SendEmailMeeting job', ['email' => $email, 'professor' => $professor, 'fname' => $fname]);
        SendEmailMeeting::dispatch($email, $professor, $fname);


    }

    public function putMeet(Request $request, Meeting $meet)
    {
        request()->validate(Meeting::$rules);
        $meet->update($request->all());

        return response()->json($meet);
    }

    public function deleteMeet($id)
    {
        $meet = Meeting::find($id)->delete();
        return response()->json($meet);
    }

    //Vistas
    public function viewMeets() {
        return view("meeting.view");
    }

    public function listMeets() {
        return view("meeting.list");
    }

    public function newMeet() {
        return view("meeting.new");
    }

    public function editMeet($id) {
        return view('meeting.edit', ["id" => $id]);
    }
}
