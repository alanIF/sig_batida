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
            @if(Request::is('*/edit'))
            <form action="{{url('funcionarios/update')}}/{{$funcionario->id}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome </label>
                <input type="text" name="descricao" class="form-control" placeholder="Nome" value="{{$funcionario->nome}}" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cpf </label>
                <input type="text" name="cpf" class="form-control" placeholder="CPF" required value="{{$funcionario->cpf}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" name="email" class="form-control" placeholder="email" required value="{{$funcionario->email}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="senha" required value="{{$funcionario->senha}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Data de Nascimento</label>
                <input type="text" name="data_nascimento" class="form-control" placeholder="Data de Nascimento" required value="{{$funcionario->data_nascimento}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Data de admissão</label>
                <input type="text" name="data_admissao" class="form-control" placeholder="Data de Admissão" required value="{{$funcionario->data_admissao}}"> 
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-warning " href="{{url('funcionarios/')}}">Voltar</a>

            </form>
            @endif
            @if(Request::is('*/new'))

            <form action="{{url('funcionarios/add')}}" method="post"> 
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome </label>
                <input type="text" name="nome" class="form-control" placeholder="Nome"  required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cpf </label>
                <input type="text" name="cpf" class="form-control" placeholder="CPF" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" name="email" class="form-control" placeholder="email" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="senha" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Data de Nascimento</label>
                <input type="text" name="data_nascimento" class="form-control" placeholder="Data de Nascimento" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Data de admissão</label>
                <input type="text" name="data_admissao" class="form-control" placeholder="Data de Admissão" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-warning " href="{{url('funcionarios/')}}">Voltar</a>
            </form>
            @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
