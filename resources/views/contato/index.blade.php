@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')

    <h3>Essa é a view Index do ContatoController</h3>

    @foreach($contatos as $c)
        <p>{{ $c->nome}}</p>
        <p>{{ $c->telefone}}</p>
    @endforeach

@endsection
