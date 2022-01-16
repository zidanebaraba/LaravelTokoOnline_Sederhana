<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



class Login extends Controller
{
    public function index(){
        return view('Login');
    }

    public function Register(Request $request){
        DB::table('tbl_user')->insert([
            'nama_user' => $request->nama,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('/login');
    }

    public function Masuk(Request $request){
        $user = DB::table('tbl_user')->where('email',$request->email)->first();
        if($user->password == $request->password){
            Session::put('id_user', $user->id);
            echo 'Data disimpan dengan session ID = '.$request->session()->get('id');
            return redirect('/');
        } else {
            echo 'Gagal Login';
        }
    }

    public function Keluar(){
        Session::forget('id_user');
        return redirect('/');
    }
}
