<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Funcionario;
use Redirect;

class FuncionarioController extends Controller
{
    public function index(){
        $funcionarios = Funcionario::get();
        return view('funcionario.index', ['funcionarios' => $funcionarios]);
    }
    // form de cadastrar
    public function new(){
        return view('funcionario.form');
    }
    public function add(Request $request){
        $funcionario = new Funcionario();
        $funcionario= $funcionario->create($request->all());
        return Redirect::to('/funcionarios');
    }
    public function update($id ,Request $request){
        $funcionario= Funcionario::findOrFail($id);
        $funcionario->update($request->all());
        \Session::flash('msg_update', 'Funcionario Atualizado com sucesso!');
        return Redirect::to('/funcionarios');
    }
    public function edit($id){
        $funcionario= Funcionario::findOrFail($id);
        return view('funcionario.form', ['funcionario'=> $funcionario]);
    }
    public function delete($id){
        $funcionario= Funcionario::findOrFail($id);
        $funcionario->delete();
        \Session::flash('msg_update', 'Funcionario excluído com sucesso!');

        return Redirect::to('/funcionarios');
    }
}
