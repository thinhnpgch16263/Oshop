<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(Request $req){
        $email = $req->input('email');
        $password = $req->input('password');

        $checklogin = DB::table('users')->where(['email'=>$email, 'password'=>$password])->get();
        if (count($checklogin)>0){
            $user[]=array(
                'email'=>$email,
                'password'=>$password
            );
            Session::put('user', $user);
            return('Login sucess');
        }else{
            return('Can not login');
        }

    }

    public function getregister(){
        return view('register');
    }

    public function postregister(Request $req){
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->save();
        return view('login');
    }
}
