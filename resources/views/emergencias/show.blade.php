<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .botaoVoltar{
            width: 50%;
            color: red;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>
<body>
    
</body>
</html>

@extends('layout')

@section('content')
    <h1>Detalhes da Emergência</h1>

    <p><strong>Nome:</strong> {{ $emergencia->nome }}</p>
    <p><strong>Telefone:</strong> {{ $emergencia->telefone }}</p>

    <a href="{{ route('emergencias.index') }}" class="botaoVoltar">Voltar</a>
@endsection
