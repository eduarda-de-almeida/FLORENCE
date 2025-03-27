@extends('layout')

@section('content')
    <h1>Editar Emergência</h1>

    <form action="{{ route('emergencias.update', $emergencia->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $emergencia->nome }}" required>
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <input type="number" name="telefone" class="form-control" value="{{ $emergencia->telefone }}" required>
        </div>
        <div class="form-group">
            <label>Endereço</label>
            <input type="text" name="endereco" class="form-control" value="{{ $emergencia->endereco }}" required>
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
    </form>
@endsection
