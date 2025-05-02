<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Fretes</title>
    <style>
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
    <h1>Relatório de Fretes</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Cliente</th>
                <th>Peso (kg)</th>
                <th>Distância (km)</th>
                <th>Tipo de Frete</th>
                <th>Valor Total</th>
                <th>Data de Criação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fretes as $frete)
                <tr>
                    <td>{{ $frete->id }}</td>
                    <td>{{ $frete->nome_cliente }}</td>
                    <td>{{ number_format($frete->peso, 2, ',', '.') }}</td>
                    <td>{{ number_format($frete->distancia, 2, ',', '.') }}</td>
                    <td>{{ ucfirst($frete->tipo_frete) }}</td>
                    <td>R$ {{ number_format($frete->valor_total, 2, ',', '.') }}</td>
                    <td>{{ $frete->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>