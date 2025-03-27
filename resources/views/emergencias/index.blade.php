@extends('layout')

@section('title', 'Lista de Emergências')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a class="btn btn-back" href="{{ route('dashboard') }}"> VOLTAR </a>  <h3 class="m-0 font-weight-bold text-primary"> Lista de Emergências</h3>
    </div>
    <div class="card-body">
        <!-- Título e botão alinhados -->
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h4 class="mb-0">Criar novo telefone</h4>
            <a class="btn btn-success" href="{{ route('emergencias.create') }}">Novo</a>
        </div>

        <!-- Exibição de mensagem de sucesso -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <!-- Exibição da tabela de emergências -->
        @if ($emergencias->isEmpty())
            <p>Nenhuma emergência registrada.</p>
        @else
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th width="280px">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($emergencias as $emergencia)
                        <tr>
                            <td>{{ $emergencia->id }}</td>
                            <td>{{ $emergencia->nome }}</td>
                            <td>{{ $emergencia->telefone }}</td>
                            <td>
                                <a href="{{ route('emergencias.show', $emergencia->id) }}" class="btn btn-info">Mostrar</a>
                                <a href="{{ route('emergencias.edit', $emergencia->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('emergencias.destroy', $emergencia->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <!-- Paginação -->
        {!! $emergencias->links() !!}
    </div>
</div>
@endsection
