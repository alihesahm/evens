<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\Categories\CategoryController;
// use App\Http\Controllers\categoriesController;
use App\Http\Controllers\client\ClientController;
use App\Http\Controllers\concertsController;
use App\Http\Controllers\invitesController;
use App\Http\Controllers\mywebsite\PageController;
use App\Http\Controllers\Notifications\AllnotificationsController;
use App\Http\Controllers\Reports\ReportController;
use App\Http\Controllers\Roles\RoleController;
use App\Http\Controllers\rolesController;
use App\Http\Controllers\secuirityController;
use App\Http\Controllers\usersController;
use App\Mail\mymails;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Route;

use Dompdf\Dompdf;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {

//     return view('landingpage.index');
//     // return redirect()->route('registerform');
// });

Route::get('k',function(){

    return view('invitedesign');

});

Route::controller(PageController::class)->group(function(){
    Route::get('/','index')->name('indexpage');
    Route::post('questform','questform')->name('quest.report');
    // Route::get('register','registerform')->name('registerform');
    // Route::post('registermanager','register')->name('Register');
    // Route::get('logpage','loginpage')->name('loginform');
    // Route::post('login','login')->name('login');


});
// Route::get('/',[PageController::class,'index']);

// Route::get('homepage',function(){
//     dd(auth()->user());
//     // return view('homepage');
// })->name('index');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('homepage',[usersController::class,'homepage'])->name('index');

//     });
    Route::get('homepage',[usersController::class,'homepage'])->name('index');

Route::get('/add/{id}',[AuthController::class,'getneighborhood']);


Route::controller(AuthController::class)->group(function(){
    Route::get('register','registerform')->name('registerform');
    Route::post('registermanager','register')->name('Register');
    // Route::get('logpage','loginpage')->name('loginform');
    // Route::post('login','login')->name('login');


});

Route::controller(AdminController::class)->group(function () {
    Route::get('homepage/admin', 'show')->name('admin.show');
    Route::get('homepage/admin/create', 'create')->name('admin.create');
    Route::post('homepage/admin/create/store','store')->name('admin.create.store');
    Route::get('homepage/admin/show/{id}','showdetails')->name('admin.showdetails');
    Route::get('homepage/admin/edit/{id}','edit')->name('admin.edit');
    Route::post('homepage/admin/edit/{id}','update')->name('admin.edit.update');
    Route::get('homepage/admin/delete/{id}','delete')->name('admin.delete');
    Route::get('searchadmin','search')->name('searchadmin');


});
Route::controller(secuirityController::class)->group(function () {
    Route::get('/secuirity', 'show')->name('secuirity.show');
    Route::get('/secuirity/create', 'create')->name('secuirity.create');
    Route::post('/secuirity/create/store','store')->name('secuirity.create.store');
    Route::get('/secuirity/show/{id}','showdetails')->name('secuirity.showdetails');
    Route::get('/secuirity/edit/{id}','edit')->name('secuirity.edit');
    Route::post('/secuirity/edit/{id}','update')->name('secuirity.edit.update');

    Route::get('/secuirity/delete/{id}','delete')->name('secuirity.delete');

    Route::get('/secuirity/QRcode/checkqrcdoe','check')->name('secuiriy.qrcode.check');
    Route::get('secuirity/QRcode/checkqrcdoe/xx','x')->name('secuiriy.qrcode.check.id');
    Route::get('searchsecuirity','search')->name('searchsecuirity');

    //ajax here
    Route::get(' secuirity/QRcode/secuirity/QRcode/checkqrcdoe/{id}', [secuirityController::class, 'checkqr']);



});
Route::controller(ClientController::class)->group(function () {
    Route::get('homepage/users', 'show')->name('user.show');
    Route::get('homepage/users/create', 'create')->name('user.create');
    Route::post('homepage/users/create/store','store')->name('user.create.store');
    Route::get('homepage/users/show/{id}','showdetails')->name('user.showdetails');
    Route::get('homepage/users/edit/{id}','edit')->name('user.edit');
    Route::get('homepage/users/delete/{id}','delete')->name('user.delete');
    Route::get('search','search')->name('search');


});


Route::controller(concertsController::class)->group(function () {
    Route::get('/concerts', 'show')->name('concert.show');
    Route::get('/concerts/create', 'create')->name('concert.create');
    Route::post('/concerts/create/{id}', 'store')->name('concert.create.store');

    Route::get('/concerts/show','detailspage')->name('concert.detailspage');
    // Route::get('/concerts',function(){

    // });
    Route::get('/concerts/show/{id}','showdetails')->name('concert.showdetails');


    Route::get('/concerts/edit/concert/{id}/secuirity/{ids}','edit')->name('concert.edit');
    Route::post('/concerts/edit/{id}','update')->name('concert.edit.update');
    Route::get('/concerts/delete/{id}','delete')->name('concert.delete');


    Route::get('/searchconcert','search')->name('searchconerts');



});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/category', 'index')->name('category.show');
    Route::get('/category/create', 'create')->name('category.create');
    Route::post('/category/create/store','store')->name('category.create.store');
    Route::get('/category/show/{id}','showdetails')->name('category.showdetails');
    Route::get('/category/edit/{id}','edit')->name('category.edit');
    Route::post('/category/edit/{id}','update')->name('category.edit.update');
    Route::get('/category/delete/{id}','delete')->name('category.delete');
    Route::get('/searchcategory','search')->name('searchcategory');


});

Route::controller(invitesController::class)->group(function () {
    Route::get('/invite', 'show')->name('invite.show');
    Route::get('/invite/create', 'create')->name('invite.create');

    Route::post('/invite/create/store', 'store')->name('invite.create.store');

    Route::get('/invite/show/{id}','showdetails')->name('invite.showdetails');
    Route::get('/invite/edit/{id}','edit')->name('invite.edit');
    Route::post('/invite/edit/{id}','update')->name('invite.edit.update');
    Route::get('/invite/delete/{id}','delete')->name('invite.delete');

    Route::get('/pdf/{id}','pdf')->name('pdf');

    Route::get('/searchinvite','search')->name('searchinvite');

    Route::get('/Invite/create/group','ExcelCreateForm')->name('ExcelForm');

    Route::post('/Invite/create/group','SaveDataFromExcel')->name('SaveDataFromExcel');






});

// route::get('mymail',function(){
//     $name='me';
//     Mail::to('abdo99669@gmail.com')->send(new mymails($name));
// });
Route::get('checkqrcdoe/{id}',[secuirityController::class,'checkqr']);
Route::get('/download-pdf', function () {
    // Generate the PDF content

});

// Route::get('secuirity/QRcode/checkqrcdoe/{id}', [secuirityController::class, 'checkqr']);

Route::controller(RoleController::class)->group(function () {
    Route::get('/roles', 'show')->name('roles.show');
    Route::get('/roles/create', 'create')->name('roles.create');
    Route::post('/roles/create/store','store')->name('roles.create.store');

    Route::get('/roles/show/{id}','showdetails')->name('roles.showdetails');
    Route::get('/roles/edit/{id}','edit')->name('roles.edit');
    Route::post('/roles/edit/{id}/update','update')->name('roles.edit.update');
    Route::get('/roles/delete/{id}','delete')->name('roles.delete');

    Route::get('searchrole','search')->name('searchrole');


});
Route::controller(ReportController::class)->group(function () {
    Route::get('/reports', 'show')->name('reports.show');
    Route::get('/reports/create', 'create')->name('reports.create');
    Route::post('/reports/create/store','store')->name('reports.create.store');

    Route::get('/reports/show/{id}','showdetails')->name('reports.showdetails');
    Route::get('/reports/edit/{id}','edit')->name('reports.edit');
    Route::post('/reports/edit/{id}/update','update')->name('reports.edit.update');
    Route::get('/reports/delete/{id}','delete')->name('reports.delete');


    Route::get('searchreport','search')->name('searchreports');


});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $email=auth()->user()->email;
        $myemail=session()->get('email',$email);
        // return redirect()->route('index');
    })->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


});
Route::controller(AllnotificationsController::class)->group(function () {
    Route::get('/partyshow/{id}', 'read')->name('partynotifiy.show');
    Route::get('/notifications', 'showall')->name('notifications.show');

    Route::get('/notifications/readall', 'readall')->name('notifications.readall');
    // Route::get('/reports/create', 'create')->name('reports.create');
    // Route::post('/reports/create/store','store')->name('reports.create.store');

    // Route::get('/reports/show/{id}','showdetails')->name('reports.showdetails');
    // Route::get('/reports/edit/{id}','edit')->name('reports.edit');
    // Route::post('/reports/edit/{id}/update','update')->name('reports.edit.update');
    Route::get('/notification/delete/{id}','delete')->name('notification.delete');

    // Route::get('searchreport','search')->name('searchreports');


});
