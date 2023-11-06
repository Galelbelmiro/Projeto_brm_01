<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedidos;

class PedidosController extends Controller
{
    // ADICIONAR PEDIDOS
    public function adicionar(Request $request){
        $itens = new Pedidos();
        $itens->nome = $request->nome;
        $itens->valor_frete = $request->valor_frete;
        $itens->data_entrega = $request->data_entrega;
        $itens-save();
    }
}
