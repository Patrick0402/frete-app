<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Frete;


class FreteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Dados fictícios para a tabela fretes
        Frete::insert([
            [
                'nome_cliente' => 'Carlinhos',
                'peso' => 500,
                'distancia' => 300,
                'tipo_frete' => 'normal',
                'valor_total' => 280.00,
                'created_at' => '2025-05-02 23:21:52',
                'updated_at' => '2025-05-02 23:21:52',
            ],
            [
                'nome_cliente' => 'Juninho',
                'peso' => 500,
                'distancia' => 300,
                'tipo_frete' => 'expresso',
                'valor_total' => 575.00,
                'created_at' => '2025-05-02 23:22:10',
                'updated_at' => '2025-05-02 23:22:10',
            ],
            [
                'nome_cliente' => 'Marcelo',
                'peso' => 1000,
                'distancia' => 500,
                'tipo_frete' => 'normal',
                'valor_total' => 550.00,
                'created_at' => '2025-05-03 00:04:52',
                'updated_at' => '2025-05-03 00:04:52',
            ],
            [
                'nome_cliente' => 'Luana',
                'peso' => 1000,
                'distancia' => 500,
                'tipo_frete' => 'expresso',
                'valor_total' => 1125.00,
                'created_at' => '2025-05-03 00:48:43',
                'updated_at' => '2025-05-03 00:48:43',
            ],
            [
                'nome_cliente' => 'Helena',
                'peso' => 400,
                'distancia' => 800,
                'tipo_frete' => 'expresso',
                'valor_total' => 600.00,
                'created_at' => '2025-05-03 00:55:05',
                'updated_at' => '2025-05-03 00:55:05',
            ],
            [
                'nome_cliente' => 'Carla',
                'peso' => 50,
                'distancia' => 460,
                'tipo_frete' => 'normal',
                'valor_total' => 71.00,
                'created_at' => '2025-05-03 00:56:36',
                'updated_at' => '2025-05-03 00:56:36',
            ],
        ]);
    }
}
