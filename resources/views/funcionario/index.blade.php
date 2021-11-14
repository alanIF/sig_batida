@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Funcionários</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @extends('alerts.message')

                    <table class="table table-hover " id="table_id"  >
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">nome</th>
                            <th scope="col">cpf</th>
                            <th scope="col">email</th>
                            <th scope="col">senha</th>
                            <th scope="col">data de nascimento</th>
                            <th scope="col">data de admissão</th>

                            <th colspan='3'>Ações</th>
                            


                            </tr>
                        </thead>
                        <tbody>
                    @foreach($funcionarios as $f)
                        <tr>
                            <td >{{$f->id}}</td>
                            <td>{{$f->nome}}</td>
                            <td>{{$f->cpf}}</td>
                            <td>{{$f->email}}</td>
                            <td>{{$f->senha}}</td>
                            <td>{{$f->data_nascimento}}</td>
                            <td>{{$f->data_admissao}}</td>
                            <td><a class="btn btn-info " href="funcionarios/{{$f->id}}/batidas"><i class="fa fa-eye" ></i></a> </td>

                            <td><a class="btn btn-warning " href="funcionarios/{{$f->id}}/edit"><i class="fa fa-edit" ></i></a> </td>
                            <td>   <form action="funcionarios/delete/{{$f->id}}" method="post"> @csrf @method('delete')<button class="btn btn-danger"><i class="fa fa-trash" ></i></button></form></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr >
                                <td colspan='6'><a class="btn btn-primary " href="{{url('funcionarios/new')}}"><i class="fa fa-plus" ></i></a></td>
                                <td colspan='3  '>                        {{ $funcionarios->links() }}</td>
                            </tr>
                        </tfoot>
                        </table>
                </div>
    
        </div>
    </div>
</div>
@endsection