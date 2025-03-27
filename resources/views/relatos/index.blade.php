@extends('layout')

@section('title', 'Relatos')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a class="btn btn-back" href="{{ route('dashboard') }}"> VOLTAR </a>
        <h3 class="m-0 font-weight-bold text-primary">Relatos</h3>
    </div>
    <div class="card-body">
        <div class="row mb-4"></div>

        <!-- Mensagem de sucesso -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <!-- Mensagem quando não houver relatos -->
        @if ($relatos->isEmpty())
            <p>{{ $message ?? 'Nenhum relato encontrado.' }}</p>
        @else
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Conteúdo</th>
                        <th>Qtd</th>
                        <th>Status</th>
                        <th width="280px">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($relatos as $key => $relato)
                    <tr>
                        <td>{{ $relato->id }}</td>
                        <td>{{ $relato->nome }}</td>
                        <td>{{ \Str::limit($relato->conteudo, 5000) }}</td>
                        <td>{{ $relato->qtd }}</td>
                        <td>
                            @if ($relato->aprovado) 
                                <span class="text-success font-weight-bold">Aprovado</span>
                            @else
                                <form action="{{ route('relatos.approve', $relato->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-success">Aprovar</button>
                                </form>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('relatos.destroy', $relato->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('relatos.show', $relato->id) }}">Mostrar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <!-- Paginação -->
        {!! $relatos->links() !!}
    </div>
</div>
@endsection
