<?php

namespace App\Http\Controllers;

use App\Models\Frete;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class FreteController extends Controller
{

    public function index(Request $request)
    {
        $query = Frete::query();
    
        if ($request->filled('tipo_frete')) {
            $query->where('tipo_frete', $request->tipo_frete);
        }
    
        if ($request->filled('nome_cliente')) {
            $query->where('nome_cliente', 'like', '%' . $request->nome_cliente . '%');
        }
    
        if ($request->filled('valor_min')) {
            $query->where('valor_total', '>=', $request->valor_min);
        }
    
        if ($request->filled('valor_max')) {
            $query->where('valor_total', '<=', $request->valor_max);
        }
    
        $fretes = $query->get();
    
        return view('frete.index', compact('fretes'));
    }

    public function create()
    {
        // Exibe o formulário de entrada de dados
        return view('frete.create');
    }

    public function store(Request $request)
    {
        // Valida os dados do formulário
        $validated = $request->validate([
            'nome_cliente' => 'required|string|max:255',
            'peso' => 'required|numeric|min:0',
            'distancia' => 'required|numeric|min:0',
            'tipo_frete' => 'required|in:normal,expresso',
        ]);

        // Calcula o valor do frete
        $valor_total = 0;
        if ($validated['tipo_frete'] === 'normal') {
            $valor_total = ($validated['peso'] * 0.50) + ($validated['distancia'] * 0.10);
        } elseif ($validated['tipo_frete'] === 'expresso') {
            $valor_total = ($validated['peso'] * 1.00) + ($validated['distancia'] * 0.25);
        }

        // Salva os dados no banco
        $frete = Frete::create([
            'nome_cliente' => $validated['nome_cliente'],
            'peso' => $validated['peso'],
            'distancia' => $validated['distancia'],
            'tipo_frete' => $validated['tipo_frete'],
            'valor_total' => $valor_total,
        ]);

        // Redireciona para a view de resultado
        return view('frete.result', compact('frete'));
    }

    public function exportPdf()
    {
        $fretes = Frete::all();

        $pdf = Pdf::loadView('frete.pdf', compact('fretes'));
        return $pdf->download('fretes.pdf');
    }
}