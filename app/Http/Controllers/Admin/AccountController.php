<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Session;
session_start();

class AccountController extends Controller
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

    public function index(){
        $accounts = User::all();

        return view('admin.account.index', ['accounts' => $accounts]);
    }

    public function indexAdmin(){
        $accounts = User::all();

        return view('admin.account-admin.index', ['accounts' => $accounts]);
    }

    // Create Account
    public function createAccount(){
        return view('admin.account.create');
    }

    public function saveAccount(Request $request){
        $this->validate($request,
        [
            'username' => 'required|min:3|max:100|unique:users,username',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:6|max:50',
            'confirm' => 'same:password'
        ], [
            'username.required' => 'Bạn chưa nhập username',
            'username.min' => 'Tên người dùng từ 3 kí tự đến 100 kí tự',
            'username.max' => 'Tên người dùng từ 3 kí tự đến 100 kí tự',
            'username.unique' => 'username đã tồn tại',
            'email.required' => 'Bạn chưa nhập Email',
            'email.email' => 'Vui lòng nhập đúng Email',
            'email.unique' => 'Email của bạn đã tồn tại',
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Mật khẩu ít nhất 6 kí tự ',
            'password.max' => 'Mật khẩu tối đa 50 kí tự',
            'confirm.same' => 'Nhập lại mật khẩu không chính xác',
        ]);

        $account = new User;
        $account->username = $request->username;
        $account->email = $request->email;
        $account->password = bcrypt($request->password);
        $account->role = $request->role;
        $account->save();

        return redirect()->route('admin.account.create-account')->with('success', 'Tạo thành công!');
    }

    // Edit Account
    public function editAccount($id){
        $user = User::find($id);
        return view('admin.account.edit', ['user'=>$user]);
    }

    public function updateAccount(Request $request, $id){
        $this->validate($request,
        [
            'username' => 'required|min:3|max:100|unique:users,username',
            'password' => 'required|min:6|max:50',
            'confirm' => 'same:password'
        ], [
            'username.required' => 'Bạn chưa nhập username',
            'username.min' => 'Username từ 3 kí tự đến 100 kí tự',
            'username.max' => 'Username từ 3 kí tự đến 100 kí tự',
            'username.unique' => 'username đã tồn tại',
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Mật khẩu ít nhất 6 kí tự ',
            'password.max' => 'Mật khẩu tối đa 50 kí tự',
            'confirm.same' => 'Nhập lại mật khẩu không chính xác',
        ]);

        $account = User::find($id);
        $account->username = $request->username;
        $account->password = bcrypt($request->password);
        $account->save();

        return redirect()->route('admin.account.edit-account', $id)->with('success', 'Cập nhật thành công!');
    }

    // Delete
    public function deleteAccount($id){
        $account = User::find($id);
        $account->delete();

        return redirect()->route('admin.account.index')->with('success', 'Xóa thành công!');
    }

}
