<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FreteResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome_cliente' => $this->nome_cliente,
            'peso' => $this->peso,
            'distancia' => $this->distancia,
            'tipo_frete' => $this->tipo_frete,
            'valor_total' => $this->valor_total,
            'data_criacao' => $this->created_at->format('d/m/Y H:i'),
        ];
    }
}
