<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Models\ResetPassword;
use App\User;
use Session;
session_start();
class AuthController extends Controller
{

    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('admin.account.index');
        }
        else {
            return Redirect::to('admin.auth.index')->send();
        }
    }

    //
    public function index(){
        return view('admin.auth.index');
    }

    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email, 'password'=> $request->password])){
            if(Auth::user()->role == User::role_admin){
                Session::put('admin_id', Auth::id());
                return redirect()->route('admin.account.index');
            }else{
                return redirect()->route('admin.index')->with('error', '');
            }
        }else{
            return redirect()->route('admin.index')->with('error', '<p style="color:red">Thông tin đăng nhập không chính xác<p>');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.index');
    }

    // Forgot password

    public function resetPassword(){
        return view('password.reset');
    }

    public function sendMail(Request $request){
        $reset_code = time().uniqid(true);

        $reset_password = new ResetPassword;
        $reset_password->email = $request->email;
        $reset_password->token = $reset_code;
        $reset_password->save();
        Mail::send('admin.mail.reset', ['reset_code'=>$reset_code], function ($message) use ($request){
            $message->from('info@bispro.vn','BISPRO.VN');
            $message->to($request->email, $request->name)
                    ->subject('[BISPRO.VN] Đặt Lại Mật Khẩu');
        });

        return redirect()->route('password.reset')->with('success', 'Vui lòng kiểm tra Email của bạn!');
    }

    public function editPassword($code){
        $forgot_password = ResetPassword::where('token', $code)->get();
        if(isset($forgot_password[0])){
            return view('password.changePassword', ['forgot'=>$forgot_password[0]]);
        }
        else return view('password.error');
    }

    public function updatePassword(Request $request, $code){
        $this->validate($request,
        [
            'password' => 'required|min:6|max:40',
            'confirmPassword' => 'same:password'
        ], [
            'password.required' => 'Please enter your password',
            'password.min' => 'Min length is 6',
            'password.max' => 'Max length is 50',
            'confirmPassword.same' => 'Confirm not true'
        ]);

        $forgot_password = ResetPassword::where('token', $code)->first();
        if($forgot_password->email != $request->email){
            return redirect()->route('password.edit-password', $code)->with('errors', 'Bạn đang cố thay đổi email');
        }

        $user = User::where('email', $forgot_password->email)->first();
        if(isset($user)){
            $user->password = bcrypt($request->password);
            $user->save();
        }
        DB::table('password_resets')->where('email', $request->email)->delete();
        return redirect()->route('web.index')->with('resetpassword', 'Đặt lại mật khẩu thành công!');

    }

}
