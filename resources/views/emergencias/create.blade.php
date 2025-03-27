@extends('layout')

@section('title', 'Nova Emergência')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #f0f2f5;">
    <div class="card shadow-lg border-0" style="width: 100%; max-width: 600px; border-radius: 12px; overflow: hidden;">
        <!-- Cabeçalho do Card -->
        <div class="card-header text-center" style="background-color: #eb6e8d; color: white; padding: 30px; border-bottom: 2px solid #c04564;">
            <a class="btn btn-back text-uppercase font-weight-bold" href="{{ route('emergencias.index') }}" style="color: #f4f4f4; font-size: 1rem; border: none;">
                <i class="fas fa-arrow-left"></i> Voltar
            </a>
            <h6 class="m-0 font-weight-bold" style="font-size: 1.6rem; letter-spacing: 1px;">Nova Emergência</h6>
        </div>
        
        <!-- Corpo do Card -->
        <div class="card-body p-5" style="background-color: #ffffff;">
            <form action="{{ route('emergencias.store') }}" method="POST">
                @csrf
                <!-- Campo Nome -->
                <div class="form-group mb-4">
                    <label class="form-label font-weight-bold" for="nome" style="font-size: 1.2rem; color: #333;">Nome</label>
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome" required style="border-radius: 8px; border: 1px solid #e0e0e0; padding: 10px 15px; font-size: 1rem; transition: border-color 0.3s;">
                </div>
                <!-- Campo Telefone -->
                <div class="form-group mb-4">
                    <label class="form-label font-weight-bold" for="telefone" style="font-size: 1.2rem; color: #333;">Telefone</label>
                    <input type="number" id="telefone" name="telefone" class="form-control" placeholder="Digite o telefone" required style="border-radius: 8px; border: 1px solid #e0e0e0; padding: 10px 15px; font-size: 1rem; transition: border-color 0.3s;">
                </div>
               
                <!-- Botão de Enviar -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success w-100 py-3" style="font-size: 1.1rem; font-weight: bold; border-radius: 8px; transition: background-color 0.3s, transform 0.3s;">
                        Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Estilos adicionais para transições e interação -->
<style>
    .form-control:focus {
        border-color: #eb6e8d !important;
        box-shadow: 0 0 5px rgba(238, 93, 165, 0.5) !important;
    }

    .btn-back:hover {
        color: #eb6e8d !important;
        text-decoration: underline;
    }

    .btn-success:hover {
        background-color: #5c9f4d;
        transform: translateY(-2px);
    }

    .btn-success:active {
        background-color: #4b8c44;
        transform: translateY(0);
    }
</style>
@endsection
