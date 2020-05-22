<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
class AuthController extends HomeController
{
	public function __construct()
	{
		parent::__construct();

	}
    public function getlogin()
    {
    	return view('admin.login');
    }
    public function postlogin(Request $request)
    {
    	// echo'postlogin';
    	$this->validate($request, [
            'email' =>'required|min:3',
            'password' =>'required',
        ],[
            'email.required' => 'Nhập email',
            'email.min' => 'Email dưới 3 ký tự',
            'password.required' => 'Nhập password',
            
        ]);
        // dd(Auth::attempt(['email'=>$request->email, 'password'=>$request->password]));
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))
        {
        	return redirect()->route('dashboard');
        } else{
        	return redirect()->route('admin.login')->with('thongbao', 'Đăng nhập thất bại');
        }
    	// dd($request->email);
    	// return view('admin.login');
    }
    public function logout()
    {
    	If(Auth::check())
            Auth::logout();
        return redirect()->route('dashboard');
    }
}
