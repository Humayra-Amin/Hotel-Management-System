<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RoomAuthController extends Controller
{



    public function login()
    {

        return view("admin.auth.login");

    }  
      


    public function register()
    {

        return view("admin.auth.register");

    }
      

    
    public function postLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   

        $credentials = $request->only('email', 'password');

        if (Auth::guard("emps")->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin')->withSuccess('You have Successfully loggedin');
        }


        return redirect("admin/login")->withErrors('Oppes! You have entered invalid credentials');

    }
      

    public function postRegister(Request $request)
    {  

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);
           

        $data = $request->all();
        $check = $this->create($data);

         
        return redirect("/admin")->withSuccess('Great! You have Successfully loggedin');

    }
    
    
    
    public function create(array $data)
    {

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

    }
    
  

    public function logout(Request $request) 
    {

        Auth::guard("emps")->logout();
  
        return Redirect('admin/login');

    }
    

}
