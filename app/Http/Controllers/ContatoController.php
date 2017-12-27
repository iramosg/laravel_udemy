<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)["nome"=>"Igor", "telefone"=>"33333333"],
            (object)["nome"=>"Guilherme", "telefone"=>"99999999"],
            (object)["nome"=>"Denis", "telefone"=>"55555555"]
        ];

        $contato = new Contato();
        $c = $contato->lista();
        dd($c->nome);

        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $request)
    {
        dd($request->all());
        return "Esse é o Criar do ContatoController";
    }

    public function editar()
    {
        return "Esse é o Editar do ContatoController";
    }

}
