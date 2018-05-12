<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller {


/**
 * Where to redirect users after login.
 *
 * @var string
 */

protected $redirectTo = '/admin';

/**
 * Create a new controller instance.
 *
 * @return void
 */
public function __construct()
{
    $this->middleware('guest')->except('logout');
}

public function index()
{
    return view('admin.auth.login');
}

public function store(Request $request)
{
    $request->validate([
        'email' => 'required|email|max:255',
        'password' => 'required',
    ],
    [
        'email.required' => 'vui lòng nhập địa chỉ Email của bạn',
        'email.max' => 'Độ dài tối đa của email là 255',
        'email.email' => 'định dạng email không hợp lệ', 
        'password.required' => 'Vui lòng nhập mật khẩu của bạn',
    ]);

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password],$request->remember)) {
        return redirect()->intended(route('admin'));
    }
    return redirect()->back()->withErrors(['email'=>'Tài Khoản Hoặc Mật Khẩu Không Chính Xác','password'=>' '])->withInput();
}




}
