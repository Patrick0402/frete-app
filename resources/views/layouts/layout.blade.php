<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Cálculo de Frete')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        header {
            margin-bottom: 20px;
        }
        nav {
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        nav a {
            text-decoration: none;
            color: #007bff;
            margin: 0 10px;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        nav a:hover {
            color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <header>
        <h1>@yield('header', 'Sistema de Cálculo de Frete')</h1>
        <nav>
            <a href="{{ route('frete.create') }}">Cadastrar Frete</a>
            <a href="{{ route('frete.index') }}">Listar Fretes</a>
            <a href="{{ route('dashboard') }}">Voltar à Dashboard</a>
            <a href="{{ route('frete.pdf') }}">Exportar PDF</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>