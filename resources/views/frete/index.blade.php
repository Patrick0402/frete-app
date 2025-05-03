@extends('layouts.layout')

@section('title', 'Lista de Fretes')

@section('header', 'Lista de Fretes')

@section('content')
    <div style="margin-bottom: 15px;">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Voltar à Dashboard</a>
        <a href="{{ route('frete.pdf') }}" class="btn btn-primary">Exportar PDF</a>
    </div>

    <form method="GET" action="{{ route('frete.index') }}">
        <label for="tipo_frete">Tipo de Frete:</label>
        <select id="tipo_frete" name="tipo_frete">
            <option value="">Todos</option>
            <option value="normal">Normal</option>
            <option value="expresso">Expresso</option>
        </select>

        <label for="nome_cliente">Nome do Cliente:</label>
        <input type="text" id="nome_cliente" name="nome_cliente">

        <label for="valor_min">Valor Mínimo:</label>
        <input type="number" id="valor_min" name="valor_min" step="0.01">

        <label for="valor_max">Valor Máximo:</label>
        <input type="number" id="valor_max" name="valor_max" step="0.01">

        <button type="submit">Filtrar</button>
    </form>

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
            @forelse ($fretes as $frete)
                <tr>
                    <td>{{ $frete->id }}</td>
                    <td>{{ $frete->nome_cliente }}</td>
                    <td>{{ number_format($frete->peso, 2, ',', '.') }}</td>
                    <td>{{ number_format($frete->distancia, 2, ',', '.') }}</td>
                    <td>{{ ucfirst($frete->tipo_frete) }}</td>
                    <td>R$ {{ number_format($frete->valor_total, 2, ',', '.') }}</td>
                    <td>{{ $frete->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Nenhum frete encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection