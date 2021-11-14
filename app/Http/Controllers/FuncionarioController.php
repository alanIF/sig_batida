<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Funcionario;
use Redirect;

class FuncionarioController extends Controller
{
    public function index(){
        $funcionarios = Funcionario::simplePaginate(10);
        return view('funcionario.index', ['funcionarios' => $funcionarios]);
    }
    public function batidas($id){
        $sql = 'Select b.id id, b.horario horario, b.data_batida data_batida from batida b where b.id_funcionario='.$id.'';
        $batidas = \DB::select($sql);
        return view('funcionario.batida', ['batidas' => $batidas]);
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
        return redirect()->back()->with(['message' => 'Funcionário atualizado com sucesso']);
    }
    public function edit($id){
        $funcionario= Funcionario::findOrFail($id);
        return view('funcionario.form', ['funcionario'=> $funcionario]);
    }
    public function delete($id){
        $funcionario= Funcionario::findOrFail($id);
        $funcionario->delete();
        return redirect()->back()->with(['message' => 'Funcionário excluído com sucesso']);

        return Redirect::to('/funcionarios');
    }
}
