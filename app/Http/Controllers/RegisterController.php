<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('admin.auth.register');
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'name' => 'required|string|max:255',
    		'email' => 'required|string|email|max:255|unique:users',
    		'password' => 'required|string|min:6|confirmed',
    		'password_confirmation' => 'required',
    	],
    	[
    		'name.required' => 'vui lòng nhập tên của bạn',
    		'name.string' => 'tên không được chứa kí tự đặc biệt',
    		'email.required' => 'vui lòng nhập địa chỉ Email của bạn',
    		'email.unique' => 'Địa chỉ email đã tồn tại trên hệ thống',
    		'email.email' => 'định dạng email không hợp lệ',
    		'password.min' => 'Độ dài mật khẩu phải lớn hơn 6 kí tự',   
    		'password.required' => 'Vui lòng nhập mật khẩu của bạn',
    		'password_confirmation.required'  => 'vui lòng nhập lại mật khẩu của bạn',
    		'password.confirmed'  => 'hai mật khẩu không trùng nhau',
    	]);

    	User::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => bcrypt($request->password),
    		'status' => 0,
    	]);

    	return redirect()->route('login')->with('msg', 'Create Account Success');
    }


}
