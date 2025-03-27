@extends('layout')

@section('content')
    <h1>Editar Relato</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('relatos.update', $relato->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="conteudo">Conteúdo:</label>
            <textarea name="conteudo" id="conteudo" required>{{ old('conteudo', $relato->conteudo) }}</textarea>
        </div>

        <div>
            <label for="aprovacao">Aprovação:</label>
            <select name="aprovacao" id="aprovacao" required>
                <option value="1" {{ old('aprovacao', $relato->aprovacao) == 1 ? 'selected' : '' }}>Aprovado</option>
                <option value="0" {{ old('aprovacao', $relato->aprovacao) == 0 ? 'selected' : '' }}>Não Aprovado</option>
            </select>
        </div>

        <div>
            <label for="date">Data:</label>
            <input type="date" name="date" id="date" value="{{ old('date', $relato->date) }}" required>
        </div>

        <button type="submit">Atualizar</button>
    </form>
@endsection
