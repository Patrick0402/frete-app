@extends('layouts.layout')

@section('title', 'Cadastro de Frete')

@section('header', 'Cadastro de Frete')

@section('content')
    <form action="{{ route('frete.store') }}" method="POST">
        @csrf
        <label for="nome_cliente">Nome do Cliente:</label>
        <input type="text" id="nome_cliente" name="nome_cliente" required><br><br>

        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.01" required><br><br>

        <label for="distancia">Distância (km):</label>
        <input type="number" id="distancia" name="distancia" step="0.01" required><br><br>

        <label for="tipo_frete">Tipo de Frete:</label>
        <select id="tipo_frete" name="tipo_frete" required>
            <option value="normal">Normal</option>
            <option value="expresso">Expresso</option>
        </select><br><br>

        <button type="submit">Calcular Frete</button>
    </form>
@endsection