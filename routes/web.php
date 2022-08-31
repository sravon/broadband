<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/admintest', function () {
    return view('admin.test');
});
Route::get('/', function () {
    return view('guest.index');
});

// admin
// Route::get('/auth/login',[AdminController::class, 'login'])->name('admin.login');
 ;
Route::post('/auth/check',[AdminController::class, 'check'])->name('admin.check');
Route::get('/package',[App\Http\Controllers\Guest\PackageController::class, 'viewData'])->name('guest.package');
Route::get('/pay',[App\Http\Controllers\Guest\PayController::class, 'index'])->name('guest.pay');
Route::get('/contacts',[App\Http\Controllers\Guest\ContactController::class, 'index'])->name('guest.contacts');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');
Route::group(['prefix' => 'admin'], function() {
	Route::group(['middleware' => 'admin.guest'], function(){
		Route::view('/register','admin.auth.register')->name('admin.register');
		Route::post('/save',[AdminController::class, 'postRegister'])->name('admin.save');
		Route::get('/register-confirm',[AdminController::class, 'getConfirmRegister'])->name('admin.register.confirm');
		Route::view('/login','admin.auth.login')->name('admin.login');
		Route::post('/login',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
	});
	
	Route::group(['middleware' => 'admin.auth'], function(){
		Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.dashboard');
		Route::get('/logout',[App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
		Route::view('/package','admin.pages.package')->name('admin.package');
		Route::post('/package/register',[App\Http\Controllers\Admin\PackageController::class, 'store'])->name('package.register');
		//Route::view('/coverage','admin.pages.coverage')->name('admin.coverage');
		Route::get('/coverage',[App\Http\Controllers\Admin\CoverageController::class, 'index'])->name('admin.coverage');
		Route::post('/coverage/register',[App\Http\Controllers\Admin\CoverageController::class, 'store'])->name('coverage.register');
		Route::post('/coverage/update',[App\Http\Controllers\Admin\CoverageController::class, 'edit'])->name('coverage.update');
		Route::post('/coverage/delete',[App\Http\Controllers\Admin\CoverageController::class, 'destroy'])->name('coverage.delete');
		Route::resource('/district',App\Http\Controllers\Admin\DistrictController::class); 
		Route::resource('/corporate',App\Http\Controllers\Admin\CorporateInternetController::class); 
		Route::resource('/bank',App\Http\Controllers\Admin\BankController::class);
		Route::resource('/pays',App\Http\Controllers\Admin\PayController::class);
		Route::resource('/accounts',App\Http\Controllers\Admin\AccountController::class);
		Route::resource('/users',App\Http\Controllers\Admin\UserController::class);
		Route::resource('/contacts',App\Http\Controllers\Admin\ContactController::class);
		Route::resource('/about',App\Http\Controllers\Admin\AboutController::class);
		Route::view('/profile','admin.pages.profile')->name('admin.profile');
	});
});
