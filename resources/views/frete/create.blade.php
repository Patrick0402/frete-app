@extends('layouts.layout')

@section('title', 'Cadastro de Frete')

@section('header', 'Cadastro de Frete')

@section('content')
    <form action="{{ route('frete.store') }}" method="POST" class="bg-white p-8 rounded-lg shadow-lg max-w-lg mx-auto border border-gray-200">
        @csrf
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Preencha os dados do Frete</h2>

        <div class="mb-6">
            <label for="nome_cliente" class="block text-gray-700 font-semibold mb-2">Nome do Cliente:</label>
            <input type="text" id="nome_cliente" name="nome_cliente" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label for="peso" class="block text-gray-700 font-semibold mb-2">Peso (kg):</label>
            <input type="number" id="peso" name="peso" step="0.01" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label for="distancia" class="block text-gray-700 font-semibold mb-2">Distância (km):</label>
            <input type="number" id="distancia" name="distancia" step="0.01" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label for="tipo_frete" class="block text-gray-700 font-semibold mb-2">Tipo de Frete:</label>
            <select id="tipo_frete" name="tipo_frete" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <option value="normal">Normal</option>
                <option value="expresso">Expresso</option>
            </select>
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-3 px-4 rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
            Calcular Frete
        </button>
    </form>
@endsection