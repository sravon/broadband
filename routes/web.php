<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

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
// Route::get('/', function () {
//     return view('guest.index');
// });
Route::get('/',[App\Http\Controllers\Guest\IndexController::class, 'index'])->name('guest.index');
// admin
// Route::get('/auth/login',[AdminController::class, 'login'])->name('admin.login');
 ;
Route::post('/auth/check',[AdminController::class, 'check'])->name('admin.check');
Route::get('/service/package',[App\Http\Controllers\Guest\PackageController::class, 'viewData'])->name('guest.package');
Route::get('/service/corporateinternet',[App\Http\Controllers\Guest\CorporateInternetController::class, 'index'])->name('guest.corporateinternet');
Route::get('/service/coverage',[App\Http\Controllers\Guest\CoverageController::class, 'index'])->name('guest.coverage');
Route::post('/coverage/ajax',[App\Http\Controllers\Guest\CoverageController::class, 'getAreaByCountry'])->name('guest.ajax.get-area-by-country-type');
Route::get('/pay',[App\Http\Controllers\Guest\PayController::class, 'index'])->name('guest.pay');
Route::get('/contacts',[App\Http\Controllers\Guest\ContactController::class, 'index'])->name('guest.contacts');
Route::post('/contacts/email',[App\Http\Controllers\Guest\ContactController::class, 'contactThroughEmail'])->name('guest.contacts.email');
Route::get('/ip_phones',[App\Http\Controllers\Guest\IphoneController::class, 'index'])->name('guest.ipphones');
Route::get('/about',[App\Http\Controllers\Guest\AboutController::class, 'index'])->name('guest.about');
Route::get('/pages/{id}',[App\Http\Controllers\Guest\IndexController::class, 'page'])->name('guest.page');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');
Route::group(['prefix' => 'bcladminitrativepanel'], function() {
	Route::get('/', function () {
		if (Auth::check()) redirect()->route('admin.dashboard');
		else return redirect()->route('admin.login');
	});
	Route::group(['middleware' => 'admin.guest'], function(){
		
		Route::view('/register','admin.auth.register')->name('admin.register');
		Route::post('/save',[AdminController::class, 'postRegister'])->name('admin.save');
		Route::get('/register-confirm',[AdminController::class, 'getConfirmRegister'])->name('admin.register.confirm');
		Route::view('/login','admin.auth.login')->name('admin.login');
		Route::post('/login',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
		Route::view('/forgetpassword','admin.auth.forgetpassword')->name('admin.forgetpassword');
		Route::post('/forgetpassword',[App\Http\Controllers\ForgetPaswordController::class, 'postForgotPassword'])->name('admin.auth.forgetpassword');
		Route::get('/resetpassword',[App\Http\Controllers\ForgetPaswordController::class, 'getResetPasswordVerify'])->name('admin.auth.getResetPasswordVerify');
		Route::post('/resetpassword',[App\Http\Controllers\ForgetPaswordController::class, 'postResetPasswordVerify'])->name('admin.auth.postResetPasswordVerify');
	});
	
	Route::group(['middleware' => 'admin.auth'], function(){
		Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.dashboard');
		Route::get('/logout',[App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
		Route::get('/package',[App\Http\Controllers\Admin\PackageController::class, 'index'])->name('admin.package');
		Route::post('/package/register',[App\Http\Controllers\Admin\PackageController::class, 'store'])->name('package.register');
		Route::put('/package/{package}',[App\Http\Controllers\Admin\PackageController::class, 'update'])->name('package.update');
		Route::delete('/package/{id}',[App\Http\Controllers\Admin\PackageController::class, 'destroy'])->name('package.destroy');
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
		Route::resource('/corporateinternet',App\Http\Controllers\Admin\CorporateInternetController::class);
		Route::resource('/iphones',App\Http\Controllers\Admin\IpphoneController::class);
		Route::resource('/social_media',App\Http\Controllers\Admin\SociaController::class);
		Route::resource('/sliders',App\Http\Controllers\Admin\SliderController::class);
		Route::view('/profile','admin.pages.profile')->name('admin.profile');
		Route::put('/profile/{id}',[App\Http\Controllers\Admin\UserController::class, 'profileupdate'])->name('profile.update');
		Route::post('/profile/changepassword',[App\Http\Controllers\Admin\UserController::class, 'changePassword'])->name('profile.changepassword');
		Route::resource('/pages',App\Http\Controllers\Admin\PageController::class);
		Route::resource('/settings',App\Http\Controllers\Admin\SettingController::class);
		Route::resource('/menus',App\Http\Controllers\Admin\MenuController::class);
		Route::post('/updatefeatureimage/{id}',[App\Http\Controllers\Admin\SettingController::class,'updateFeatureImage'])->name('admin.updatefeatureimage');
	});
});
