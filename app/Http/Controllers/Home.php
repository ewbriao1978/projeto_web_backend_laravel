<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    //

    public function telaInicial(){
        return view('tela');
    }

    public function inserirDados(){
        return view('formulario');
    }

    public function salvaDados(Request $request){
        $data = array(
            'descricao' => $request->descricao,
            'quantidade' => $request->qtd,
            'preco' => $request->preco
        );
        var_dump($data);


    }
}
