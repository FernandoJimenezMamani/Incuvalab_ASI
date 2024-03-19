<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Professor\ProfessorController;
use App\Http\Controllers\Team\TeamController;
use App\Http\Controllers\Form\FormController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Time\TimeController;
use App\Http\Controllers\Meeting\MeetingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome'); //Larevel default
// });

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/teamProgress', [App\Http\Controllers\HomeController::class, 'teamProgress'])->name('teamProgress');
Route::get('/form1', [FormController::class, "form1"])->name('form1');
Route::get('/form2', [FormController::class, "form2"])->name('form2');
Route::get('/form3', [FormController::class, "form3"])->name('form3');
Route::get('/form4', [FormController::class, "form4"])->name('form4');
Route::get('/form5', [FormController::class, "form5"])->name('form5');
Route::get('/form6', [FormController::class, "form6"])->name('form6');
Route::get('/form7', [FormController::class, "form7"])->name('form7');

//Video and Questions
Route::get('/video', [App\Http\Controllers\VideoController::class, "showVideo"])->name('video');


Route::get('/Form1ById/{id}', [FormController::class, "Form1ById"])->name('Form1ById');
Route::get('/Form2ById/{id}', [FormController::class, "Form2ById"])->name('Form2ById');
Route::get('/Form3ById/{id}', [FormController::class, "Form3ById"])->name('Form3ById');
Route::get('/Form4ById/{id}', [FormController::class, "Form4ById"])->name('Form4ById');
Route::get('/Form5ById/{id}', [FormController::class, "Form5ById"])->name('Form5ById');
Route::get('/Form6ById/{id}', [FormController::class, "Form6ById"])->name('Form6ById');
Route::get('/Form7ById/{id}', [FormController::class, "Form7ById"])->name('Form7ById');

Route::get('/showComment', [FormController::class, "showComment"])->name('showComment');

//Changed password
Route::get('/changePass', [App\Http\Controllers\HomeController::class, 'changePass'])->name('changePass');//Route::get('/students', [App\Http\Controllers\ProductController::class, 'getProducts'])->middleware('auth');
Route::post('/changePass', [App\Http\Controllers\HomeController::class, 'updatePass'])->name('updatePass');

//Forgot password
Route::post('/forgotPass', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'forgotPassword'])->name('forgotPassword');
Route::get('/viewforgotpass', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'viewForgotPass'])->name('viewForgotPass');


// inicio rutas admin teacher

Route::get('/teachers', [ProfessorController::class, "getTeachers"]);
Route::get('/teachers/{id}', [ProfessorController::class, "getTeacher"]);
Route::post('/teachers', [ProfessorController::class, "postTeacher"]);
Route::put('/teachers', [ProfessorController::class, "putTeacher"]);
Route::delete('/teachers/{id}', [ProfessorController::class, "deleteTeacher"]);


Route::get('/listteachers', [ProfessorController::class, "listTeachers"]);
Route::get('/editteacher/{id}', [ProfessorController::class, "editTeacher"]);
Route::get('/newteacher', [ProfessorController::class, "newTeacher"]);

// fin rutas admin teacher

Route::get('/students', [StudentController::class, "getStudents"]);
Route::get('/students/{id}', [StudentController::class, "getStudent"]);
Route::post('/students', [StudentController::class, "postStudent"]);
Route::put('/students', [StudentController::class, "putStudent"]);
Route::delete('/students/{id}', [StudentController::class, "deleteStudent"]);

Route::get('/liststudents', [StudentController::class, "listStudents"]);
Route::get('/newstudent', [StudentController::class, "newStudent"]);
Route::get('/editstudent/{id}', [StudentController::class, "editStudent"]);
Route::get('/myteam', [StudentController::class, "myTeamInfo"]);
Route::get('/mycalendar', [StudentController::class, "timeStudents"]);
Route::get('/mymeetings', [StudentController::class, "meetingStudents"]);
//

//Teams
Route::get('/teams', [TeamController::class, "getTeams"]);
Route::get('/teams/{id}', [TeamController::class, "getTeam"]);
Route::get('/teamMembers/{id}', [TeamController::class, "getMembers"]);
Route::post('/teams', [TeamController::class, "postTeam"]);
Route::put('/teams', [TeamController::class, "putTeam"]);
Route::delete('/teams/{id}', [TeamController::class, "deleteTeam"]);

Route::get('/listteams', [TeamController::class, "listTeams"]);
Route::get('/viewteams', [TeamController::class, "viewTeams"]);
Route::get('/newteam', [TeamController::class, "newTeam"]);
Route::get('/editteam/{id}', [TeamController::class, "editTeam"]);
Route::get('/teammembers/{id}', [TeamController::class, "teamMembers"]);
//

//Forms
Route::get('/forms', [App\Http\Controllers\Form\FormController::class, "getForms"]);

Route::get('/forms1/{id}', [App\Http\Controllers\Form\FormController::class, "getForm1"]);
Route::get('/forms2/{id}', [App\Http\Controllers\Form\FormController::class, "getForm2"]);
Route::get('/forms3/{id}', [App\Http\Controllers\Form\FormController::class, "getForm3"]);
Route::get('/forms4/{id}', [App\Http\Controllers\Form\FormController::class, "getForm4"]);
Route::get('/forms5/{id}', [App\Http\Controllers\Form\FormController::class, "getForm5"]);
Route::get('/forms6/{id}', [App\Http\Controllers\Form\FormController::class, "getForm6"]);
Route::get('/forms7/{id}', [App\Http\Controllers\Form\FormController::class, "getForm7"]);

Route::post('/forms', [App\Http\Controllers\Form\FormController::class, "postForm"]);

Route::put('/forms1', [App\Http\Controllers\Form\FormController::class, "putForm1"]);
Route::put('/forms2', [App\Http\Controllers\Form\FormController::class, "putForm2"]);
Route::put('/forms3', [App\Http\Controllers\Form\FormController::class, "putForm3"]);
Route::put('/forms4', [App\Http\Controllers\Form\FormController::class, "putForm4"]);
Route::put('/forms5', [App\Http\Controllers\Form\FormController::class, "putForm5"]);
Route::put('/forms6', [App\Http\Controllers\Form\FormController::class, "putForm6"]);
Route::put('/forms7', [App\Http\Controllers\Form\FormController::class, "putForm7"]);

Route::put('/formComment', [App\Http\Controllers\Form\FormController::class, "formsComment"]);

Route::delete('/forms/{id}', [App\Http\Controllers\Form\FormController::class, "deleteForm"]);

Route::get('/userTeam/{id}', [App\Http\Controllers\Form\FormController::class, "getUserTeamId"]);
Route::get('/userTeamName/{id}', [App\Http\Controllers\Form\FormController::class, "getUserTeamName"]);
Route::post('/sendEmailDone', [App\Http\Controllers\Form\FormController::class, "sendEmailFormDone"]);
//

//Formularios - Docente
Route::get('/viewForms', [ProfessorController::class, "viewForms"]);
//

//Gestion / Tiempos - Docente
Route::get('/times', [TimeController::class, "getTimes"]);
Route::get('/times/{id}', [TimeController::class, "getTime"]);
Route::post('/times', [TimeController::class, "postTime"]);
Route::put('/times', [TimeController::class, "putTime"]);
Route::delete('/times/{id}', [TimeController::class, "deleteTime"]);

Route::get('/listtimes', [TimeController::class, "listtimes"]);
Route::get('/viewtimes', [ProfessorController::class, "viewtimes"]);
Route::get('/newtime', [TimeController::class, "newTime"]);
Route::get('/edittime/{id}', [TimeController::class, "editTime"]);


Route::get('/viewtimes/show', [TimeController::class, "getTimes"]);
Route::post('/viewtimes/edit/{id}', [TimeController::class, "getTime"]);
Route::post('/viewtimes/update/{time}', [TimeController::class, "putTime"]);
Route::post('/viewtimes/create', [TimeController::class, "postTime"]);
Route::post('/viewtimes/delete/{id}', [TimeController::class, "deleteTime"]);
//




//Gestion / Reuniones - Docente
Route::get('/meets', [MeetingController::class, "getMeetings"]);
Route::get('/meets/{id}', [MeetingController::class, "getMeet"]);
Route::post('/meets', [MeetingController::class, "postMeet"]);
Route::put('/meets', [MeetingController::class, "putMeet"]);
Route::delete('/meets/{id}', [MeetingController::class, "deleteMeet"]);

Route::get('/listmeets', [MeetingController::class, "listmeets"]);
Route::get('/viewmeets', [ProfessorController::class, "viewmeets"]);
Route::get('/newmeet', [MeetingController::class, "newMeet"]);
Route::get('/editmeet/{id}', [MeetingController::class, "editMeet"]);


Route::get('/viewmeets/show', [MeetingController::class, "getMeetings"]);
Route::post('/viewmeets/edit/{id}', [MeetingController::class, "getMeet"]);
Route::post('/viewmeets/update/{time}', [MeetingController::class, "putMeet"]);
Route::post('/viewmeets/create', [MeetingController::class, "postMeet"]);
Route::post('/viewmeets/delete/{id}', [MeetingController::class, "deleteMeet"]);
//



//verifica el estado de los forms para estudiantes
Route::get('/verified', [TeamController::class, "verifiedFormsStatus"]);
//verifica el estado de los forms para docentes
Route::get('/verifiedTeacher/{id}', [TeamController::class, "getStatusFormTeacher"]);
//actualiza el estado de habilitacion
Route::put('/updateStatus', [TeamController::class, "putFormStatus"]);

