@extends('layout')

@section('content')
    <h1>Detalhes do Relato</h1>

    <div>
        <strong>Conteúdo:</strong>
        <p>{{ $relato->conteudo }}</p>
    </div>

    <div>
        <strong>Aprovação:</strong>
        <p>{{ $relato->aprovacao ? 'Aprovado' : 'Não Aprovado' }}</p>
    </div>

    <div>
        <strong>Data:</strong>
        <p>{{ $relato->date }}</p>
    </div>

    <a href="{{ route('relatos.index') }}">Voltar à lista</a>
    <a href="{{ route('relatos.edit', $relato->id) }}">Editar</a>

    <form action="{{ route('relatos.destroy', $relato->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
@endsection
