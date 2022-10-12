<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro as Cadastro;

class HomeController extends Controller
{
    public function salvar(Request $request){
        $cadastro = new Cadastro();
        $cadastro->nome = $request->nome;
        $cadastro->email = $request->email;
        $cadastro->prato = $request->prato;
        $cadastro->save();
        $lista = Cadastro::All();        
        return view('listagem')->with(compact('lista'));
    }
    public function lista(){
        $lista = Cadastro::All();        
        return view('listagem')->with(compact('lista'));
    }
    public function excluir($id){
        $item = Cadastro::find($id);
        $item->delete(); 
        $lista = Cadastro::All();        
        return view('listagem')->with(compact('lista'));
    }
    public function alterar($id){
        $item = Cadastro::find($id);
        //dd($item);              
        return view('alterar')->with(compact('item'));
    }
    public function confirmar(Request $request){
        $item = Cadastro::find($request->id);
        $item->nome = $request->nome;           
        $item->email = $request->email;
        $item->prato = $request->prato;
        $item->save();
        $lista = Cadastro::all();
        return view('listagem')->with(compact('lista'));
    }
}
