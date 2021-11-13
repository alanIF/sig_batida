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
            <form action="{{url('batidas/update')}}/{{$batida->id}}" method="post">
            @csrf
         
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Horário </label>
                <input type="time" name="horario" class="form-control" placeholder="Horario" required value="{{$batida->horario}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> Data da Batida </label>
                <input type="date" name="data_batida" class="form-control" placeholder="Data Batida" required value="{{$batida->data_batida}}">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-warning " href="{{url('/batidas')}}">Voltar</a>

            </form>
            @endif
           

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
