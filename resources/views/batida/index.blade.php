@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Batidas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">funcionário</th>
                            <th scope="col">horário</th>
                            <th scope="col">data</th>
                           

                            <th colspan='2'>Ações</th>
                            


                            </tr>
                        </thead>
                        <tbody>
                    @foreach($batidas as $b)
                        <tr>
                            <td >{{$b->id}}</td>
                            <td>{{$b->funcionario}}</td>
                            <td>{{$b->horario}}</td>
                            <td>{{$b->data_batida}}</td>
                            

                            <td><a class="btn btn-warning " href="batidas/{{$b->id}}/edit"><i class="fa fa-edit" ></i></a> </td>
                            <td>   <form action="batidas/delete/{{$b->id}}" method="post"> @csrf @method('delete')<button class="btn btn-danger"><i class="fa fa-trash" ></i></button></form></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            
                        </tfoot>
                        </table>

                </div>
        </div>
    </div>
</div>
@endsection