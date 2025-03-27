<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Meu Aplicativo')</title>
    <link rel="stylesheet" href="{{ asset('tema/tema/assets/css/app.css') }}">

    <!-- Estilos customizados -->
    <style>
        /* Estilo geral */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 100%;
            
            margin: auto;
            padding: 20px;
        }

        h1, h2, h3, h4 {
            color: #c04564;
            font-weight: bold;
        }

        /* Estilo do card */
        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #f3f4f6;
            padding: 15px 20px;
            border-bottom: 1px solid #e2e8f0;
        }

        .card-body {
            padding: 20px;

        }

        /* Estilo da tabela */
        table.table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 0; /* Remove margens desnecessárias */
        }

        table.table th, table.table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #e2e8f0;
        }

        table.table thead {
            background-color: #c04564;
            color: #ffffff;
        }

        /* Botões */
        .btn {
            padding: 8px 16px;
            font-size: 14px;
            border-radius: 5px;
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn-success {
            background-color: #10b981;
            border: none;

        }

        .btn-success:hover {
            background-color: #059669;
        }

        .btn-info {
            background-color: #3b82f6;
            border: none;
        }

        .btn-info:hover {
            background-color: #2563eb;
        }

        .btn-warning {
            background-color: #c04564;
            border: none;
        }

        .btn-back{
            background-color: #c04564;
            border: none;
        }

        .btn-warning:hover {
            background-color: #c04564;
        }

        .btn-danger {
            background-color: #ef4444;
            border: none;
        }

        .btn-danger:hover {
            background-color: #dc2626;
        }

        /* Alertas */
        .alert {
            padding: 15px;
            background-color: #d1fae5;
            color: #065f46;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        /* Paginação */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination li {
            list-style: none;
            margin: 0 5px;
        }

        .pagination li a {
            color: #4f46e5;
            padding: 8px 12px;
            text-decoration: none;
            border: 1px solid #4f46e5;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .pagination li a:hover {
            background-color: #4f46e5;
            color: #ffffff;
        }

        .pagination .active span {
            background-color: #4f46e5;
            color: #ffffff;
            padding: 8px 12px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
 