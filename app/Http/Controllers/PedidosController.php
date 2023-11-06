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

        return response()->json('Adicionado com sucesso');
    }

        // EDITAR PEDIDOS
        public function editar(Request $request){

            $itens = Pedidos::findorfail($request->id);
            $itens->nome = $request->nome;
            $itens->valor_frete = $request->valor_frete;
            $itens->data_entrega = $request->data_entrega;
            $itens-update();
    
            return response()->json('Atualizado com sucesso');
        }

        // DELETAR PEDIDOS
        public function deletar(Request $request){
            $itens = Pedidos::findorfail($request->id)->delete();
             return response()->json('Deletado com sucesso');
        }

         // LISTAR PEDIDOS
         public function getData(Request $request){
            $itens = Pedidos::all();
             return response()->json($itens);
        }
}
