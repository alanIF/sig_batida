<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Batida;
use Redirect;

class BatidaController extends Controller
{
    public function index(){
        $sql = 'Select b.id id, f.nome funcionario, b.horario horario, b.data_batida data_batida from batida b, funcionario f where b.id_funcionario=f.id';
        $batidas = \DB::select($sql);
        return view('batida.index', ['batidas' => $batidas]);
    }
    //  bater o ponto
    public function ponto(){
        return view('batida.ponto');
    }
    // adicionar batida no bd
    public function add(Request $request){
        date_default_timezone_set('America/Sao_Paulo');

        $data = date('d/m/Y');
        $hora = date('H:i:s');
        $sql = 'Select f.id id from funcionario f where f.cpf like '.$request->cpf.'';
        $funcionario = \DB::select($sql);
        foreach($funcionario as $f){
            $id_f = $f->id;
        }

        $batida = new Batida();
        $batida->id_funcionario=$id_f;
        $batida->horario= $hora;
        $batida->data_batida= $data;
        $batida->save();
        \Session::flash('msg_update', 'Batida realizada com sucesso!');

        return Redirect::to('/ponto');
    }
    public function update($id ,Request $request){
        $batida= Batida::findOrFail($id);
        $batida->horario= $request->horario;
        $batida->data_batida= $request->data_batida;
        $batida->save();
        \Session::flash('msg_update', 'Batida atualizada com sucesso!');
        return Redirect::to('/batidas');
    }
    public function edit($id){
        $batida= Batida::findOrFail($id);
        return view('batida.form', ['batida'=> $batida]);
    }
    public function delete($id){
        $batida= Batida::findOrFail($id);
        $batida->delete();
        return Redirect::to('/batidas');
    }
}
