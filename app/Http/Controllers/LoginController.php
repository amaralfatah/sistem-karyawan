<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('index');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::Attempt(['email'=> $request->email,'password' => $request->password])) {
            return redirect()->route('index');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function actionAdminUpdate(Request $request){
        $data = Auth::user();
        if(Hash::check($request->oldPassword, $data->password)){
            $update = User::where('name',$data->name)->first();
            $update->update($request->only(['name', 'email', 'password']));
            Auth::logout();
            return redirect('login');
        }
        return view('profile',compact('data'));
        
    }
}
