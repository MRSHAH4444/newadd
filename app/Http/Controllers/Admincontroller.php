<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class Admincontroller extends Controller
{
    public function index()
{
    return view('Admin.login');
}

public function auth(Request $request)
{
    $email = $request->post('email');
    $password = $request->post('password');

    $result = Admin::where(['email' => $email, 'password' => $password])->get();
    if (isset($result['0']->id)) {
        $request->session()->put('Admin_login', true);
        $request->session()->put('Admin_login', $result['0']->id);
        return redirect('/Admin/dashboard');
    } else {
        $request->session()->has('error', 'please enter valid login details');
        //  return redirect('/Admin/login');
        return back()->with('error', 'please enter valid login details.');
    }
}
public function dashboard()
{
    return view('Admin.dashboard');
}

public function layout()
{
    return view('Admin.layout');
}


    // public function updatepassword()
    // {
    //     $r = Admin::find(1);
    //     $r->password = Hash::make('mansi123');
    //     $r->save();
    // }
}