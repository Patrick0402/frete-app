<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Cálculo de Frete')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        header {
            margin-bottom: 20px;
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
            <a href="{{ route('frete.create') }}">Cadastrar Frete</a> |
            <a href="{{ route('frete.index') }}">Listar Fretes</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>