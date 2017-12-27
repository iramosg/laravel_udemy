<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function entrar(Request $request)
    {
        $dados = $request->all();

        if(Auth::attempt(['email'=> $dados['email'], 'password' => $dados['senha']]))
        {
            return redirect()->route('admin.cursos');
        }

        return redirect()->route('login.index');
    }

    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}
