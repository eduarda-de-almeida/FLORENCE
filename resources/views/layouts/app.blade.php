<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        <style>

            .button-container {
                    display: flex;
                    justify-content: center;
                    gap: 1rem; /* Espaço entre os botões */
            }
            
            /* Estilo do botão 'Ver Relatos' */
            .btn-relatos {
                display: inline-flex;
                align-items: center;
                padding: 0.75rem 1.25rem;
                background-color: #c04564; /* Rosa */
                border-radius: 0.5rem;
                font-weight: 600;
                font-size: 0.875rem;
                color: #fff;
                text-transform: uppercase;
                letter-spacing: 0.05em;
                transition: all 0.3s ease;
                box-shadow: 0px 4px 12px rgba(241, 51, 115, 0.3);
            }
        
            .btn-relatos:hover {
                background-color: #c04564; /* Rosa */
                box-shadow: 0px 6px 15px rgba(241, 51, 115, 0.3);
                transform: translateY(-2px);
            }
        
            .btn-relatos:focus {
                outline: none;
                box-shadow: 0px 0px 0px 4px rgba(241, 51, 115, 0.3);
            }
        
            /* Estilo do botão 'Ver Emergências' */
            .btn-emergencias {
                display: inline-flex;
                align-items: center;
                padding: 0.75rem 1.25rem;
                background-color: #c04564; /* Verde */
                border-radius: 0.5rem;
                font-weight: 600;
                font-size: 0.875rem;
                color: #fff;
                text-transform: uppercase;
                letter-spacing: 0.05em;
                transition: all 0.3s ease;
                box-shadow: 0px 4px 12px rgba(241, 51, 115, 0.3);
            }
        
            .btn-emergencias:hover {
                background-color: #c04564; /* Verde escuro */
                box-shadow: 0px 6px 15px rgba(241, 51, 115, 0.3);
                transform: translateY(-2px);
            }
        
            .btn-emergencias:focus {
                outline: none;
                box-shadow: 0px 0px 0px 4px rgba(241, 51, 115, 0.3);
            }
        
            /* Ícone */
            .btn-icon {
                margin-right: 0.5rem;
                font-size: 1.25rem;
            }
        </style>
      
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu') <!--botãozinho-->

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

           <!-- Adicione esta div ao redor dos botões e inclua as classes de centralização -->
            <div class="button-container text-center py-4">
                <!-- Botão para ver relatos -->
                <a href="{{ route('relatos.index') }}" class="btn-relatos">
                    <i class="btn-icon fas fa-book-open"></i> <!-- Ícone para Ver Relatos -->
                    Ver Relatos
                </a>

                <!-- Botão para ver emergências -->
                <a href="{{ route('emergencias.index') }}" class="btn-emergencias ml-4">
                    <i class="btn-icon fas fa-exclamation-triangle"></i> <!-- Ícone para Ver Emergências -->
                    Ver Emergências
                </a>
            </div>


            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
