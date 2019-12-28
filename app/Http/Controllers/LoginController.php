<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use Auth;
use App\Usuario;

class LoginController extends Controller
{
    
    public function login(){
        $u = Request::only('email', 'senha');

        $u = new Usuario();
        Usuario::where('email', $u->email,'senha', $u->senha)->get();
        return view('home');
                
     }
     
     
    public function create(){

        $nome = Request::input('nome');
        $email = Request::input('email');
        $senha = Request::input('senha');
        $sexo = Request::input('sexo');
        
        DB::insert('insert into usuarios (nome, email, senha, sexo) values(?, ?, ?, ?)',
        array($nome, $email, $senha, $sexo));
        return redirect('entrar');
    }
}
