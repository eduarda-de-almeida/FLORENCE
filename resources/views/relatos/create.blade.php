@extends('layout')

@section('content')
    <h1>Criar Novo Relato</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('relatos.store') }}" method="POST">
        @csrf
        <div>
            <label for="conteudo">Conteúdo:</label>
            <textarea name="conteudo" id="conteudo" required>{{ old('conteudo') }}</textarea>
        </div>

        <div>
            <label for="aprovacao">Aprovação:</label>
            <select name="aprovacao" id="aprovacao" required>
                <option value="1" {{ old('aprovacao') == 1 ? 'selected' : '' }}>Aprovado</option>
                <option value="0" {{ old('aprovacao') == 0 ? 'selected' : '' }}>Não Aprovado</option>
            </select>
        </div>

        <div>
            <label for="date">Data:</label>
            <input type="date" name="date" id="date" value="{{ old('date') }}" required>
        </div>

        <button type="submit">Salvar</button>
    </form>
@endsection
