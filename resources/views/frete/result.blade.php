@extends('layouts.layout')

@section('title', 'Resultado do Frete')

@section('header', 'Resultado do Frete')

@section('content')
    <p><strong>Nome do Cliente:</strong> {{ $frete->nome_cliente }}</p>
    <p><strong>Peso:</strong> {{ $frete->peso }} kg</p>
    <p><strong>Distância:</strong> {{ $frete->distancia }} km</p>
    <p><strong>Tipo de Frete:</strong> {{ ucfirst($frete->tipo_frete) }}</p>
    <p><strong>Valor Total:</strong> R$ {{ number_format($frete->valor_total, 2, ',', '.') }}</p>
@endsection