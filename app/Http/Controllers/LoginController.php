<?php

namespace App\Http\Controllers;

use Request;
use Auth;

class LoginController extends Controller
{
    
    public function entrar(){
        $cred = Request::only('email', 'senha');
        if(Auth::attempt($cred)){
            return redirect('/home');
        }else {
            return 'usuario não existe';
        }

        return view('login_entrar');
                
     }
     
     public function Lform(){

        return view('login_entrar');
     }
     public function Cform(){
        return view('login_cadastrar');

     }

    public function cadastrar(){

        $nome = Request::input('nome');
        $email = Request::input('email');
        $senha = Request::input('senha');
        $sexo = Request::input('sexo');
        
        DB::insert('insert into usuarios (nome, email, senha, sexo) values(?, ?, ?, ?)',
        array($nome, $email, $senha, $sexo));

    }
}
