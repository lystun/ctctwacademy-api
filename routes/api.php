<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix'=>'auth', 'namespace' => 'Auth'], function(){
    Route::post('/register', "AuthController@register");
    Route::post('/login', "AuthController@login");
    Route::post('/logout', "AuthController@logout");
    Route::get('/user', "AuthController@user");
});

Route::group(['namespace' => 'Auth'], function(){
    Route::get('email/verify/{id}', 'VerificationController@verify')->name('verification.verify'); // Make sure to keep this as your route name
    Route::get('email/resend', 'VerificationController@resend')->name('verification.resend');

    Route::post('password/email', 'ForgotPasswordController@forgot');
    Route::post('password/reset', 'ForgotPasswordController@reset');
});



Route::group(['prefix'=>'users'], function(){
    Route::get('/', "UserController@allUsers");
    Route::get('/role', "UserController@getRole");
});

Route::group(['prefix'=>'students'], function(){
    Route::get('/', "StudentController@allStudents");
});

Route::group(['prefix'=>'teachers'], function(){
    Route::get('/', "TeacherController@allTeachers");
});

Route::group(['prefix'=>'subjects'], function(){
    Route::get('/', "SubjectController@allSubjects");
});

Route::group(['prefix'=>'topics'], function(){
    Route::get('/', "TopicController@allTopics");
});

Route::group(['prefix'=>'courses'], function(){
    Route::get('/', "CourseController@allCourses");
});

Route::group(['prefix'=>'exercises'], function(){
    Route::get('/', "ExerciseController@allExercises");
});

Route::group(['prefix'=>'exams'], function(){
    Route::get('/', "ExamController@allExams");
});


