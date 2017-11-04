<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Second Route method - Root URL with ID will match this method
Route::get('ID/{id}', function($id) {
    echo 'ID: '.$id;
});

//Third Route method - Root URL with or without name will match this method
Route::get('/user/{name?}', function($name = 'Mj Fauzy') {
    echo 'Name: '.$name;
});

Route::get('role',[
    'middleware' => 'Role:editor',
    'uses' => 'TestController@index',
]);

Route::get('terminate',[
    'middleware' => 'terminate',
    'uses' => 'ABCController@index',
]);

Route::get('profile',[
    'middleware' => 'auth',
    'uses' => 'UserController@showProfile',
]);

Route::get('/usercontroller/path',[
    'middleware' => 'First',
    'uses' => 'UserController@showPath',
]);

Route::resource('my','MyController');

Route::resource('implicit','ImplicitController');

Route::get('/foo/bar','UriController@index');

Route::get('/register',function() {
    return view('register');
});

Route::post('/user/register',array('uses' => 'UserRegistration@postRegister'));

Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');

Route::get('/basic_response',function() {
    return 'Hello World';
});

Route::get('/header',function() {
    return response("Hello", 200)->header('Content-Type', 'text/html');
});

Route::get('/cookie',function() {
    return response("Hello Cookie", 200)->header('Content-Type', 'text/html')->withcookie('name', 'mjfauzy');
});

Route::get('/json',function() {
    return response()->json(['name' => 'Mj Fauzy', 'state' => 'Bogor']);
});

Route::get('/test',['as' => 'testing', function() {
    return view('test2');
}]);

Route::get('redirect',function() {
    return redirect()->route('testing');
});

Route::get('/test2',function() {
    return view('test2');
});

Route::get('blade',function() {
    return view('page',['name' => 'Mj Fauzy', 'age' => '22']);
});

Route::get('rr','RedirectController@index');
Route::get('/redirectcontroller',function() {
    return redirect()->action('RedirectController@index');
});

Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
Route::get('view-student','StudViewController@index');

Route::get('view-student-edit','StudUpdateController@index');
Route::get('edit/{id}','StudUpdateController@show');
Route::post('edit/{id}','StudUpdateController@edit');

Route::get('view-student-delete','StudDeleteController@index');
Route::get('delete/{id}','StudDeleteController@destroy');

Route::get('/form',function(){
    return view('form');
});

Route::get('localization/{locale}','LocatizationController@index');

Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');

Route::get('/validation','ValidationController@showForm');
Route::post('/validation','ValidationController@validateForm');

Route::get('/uploads','UploadFileController@index');
Route::post('/uploads','UploadFileController@showUploadFile');

Route::get('/send-basic-mail','MailController@basic_email');
Route::get('/send-html-mail','MailController@html_email');
Route::get('/send-attach-mail','MailController@attachment_email');

Route::get('/ajax', function() {
    return view('message');
});

Route::post('/getmsg','AjaxController@index');

Route::get('/error',function() {
    abort(404);
});

Route::get('/event','CreateStudentController@insertform');
Route::post('/addstudent','CreateStudentController@insert');

Route::get('/facadeex',function() {
    return TestFacades::testingFacades();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
