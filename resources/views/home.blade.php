@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                  <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Funcionarios</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">-</div>
                        </div>
                        <div class="col-auto">
                            <a  href="{{url('funcionarios/')}}"> <i class="fa fa-archive fa-2x text-gray-300"></i></a>
                        </div>
                  </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                  <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Batidas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">-</div>
                        </div>
                        <div class="col-auto">
                            <a  href="{{url('batidas/')}}"> <i class="fa fa-plus-circle fa-2x text-gray-300"></i></a>
                        </div>
                  </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
       
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                  <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Relatorios</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                        </div>
                        <div class="col-auto">
                            <a  href="{{url('relatorios/')}}"> <i class="fa fa-building fa-2x text-gray-300"></i></a>
                        </div>
                  </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
