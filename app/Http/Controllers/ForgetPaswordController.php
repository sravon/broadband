<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordEmail;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ForgetPaswordController extends Controller
{
    public function postForgotPassword(Request $request){
        /*start database transaction*/
        try {
            /*check user email is valid or not*/
            $checkUser = Admin::where('email', $request->email)->first();

            /*if email is valid*/
            if (!empty($checkUser)) {
                /*create new password reset object, set data and save it*/
                $token = time().random_int(1000,9999).random_int(100,999);
                 $data = DB::table('password_resets')->insert(
                    [
                        'email' => $request->email, 'token' => $token,
                        'created_at' => Carbon::now()
                    ]
                );

                /*send password reset email to requested user email*/
                Mail::to($request->email)->send(new  ForgotPasswordEmail((object)['token'=> $token]));
            } else {
                /*if user is invalid then return */
                return redirect()->back()->with('fail', 'Can\'t find your account');
            }


        } catch (\Exception $exception) {
            /*if found any exception then rollback database transaction and return back with error message*/
            DB::rollBack();
            return redirect()->back()->with('fail', 'Something went wrong.' . $exception->getMessage());
        }
        return redirect()->back()->with('success', 'Email sent successful to your email....');
    }

    /*verify token for forgot password*/
    public function getResetPasswordVerify(Request $request)
    {
        //dd($request->all());
        //dd($request->token);
        $checkToken = DB::table('password_resets')->where('token', $request->token)
            ->where('created_at', '>', Carbon::now()->subHour(1))
            ->first();
        if($checkToken) {
            
            return view('admin.auth.reset-password')->with(compact('checkToken'));
        } else {
            return "Invalid Token";
        }
    }
    
    public function postResetPasswordVerify(Request $request)
    {
        //return $request->reset_token;
        try {
            $checkToken =  DB::table('password_resets')->where('token', $request->reset_token)
                ->where('created_at', '>', Carbon::now()->subHour(1))
                ->first();

            if (!empty($checkToken)) {

                $user = Admin::where('email', $checkToken->email)->first();
                if (!empty($user)) {
                    $user->password = bcrypt($request->password);
                    $user->save();

                    DB::table('password_resets')->where('token', $request->reset_token)->delete();;

                } else {
                    return "Invalid User";
                }

            } else {
                return "Invalid Token";
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('danger', 'Something went wrong.' . $exception->getMessage());
        }
        return redirect()->route('admin.auth')->with('success', 'Your password has been changed successfully....');
    }
}
