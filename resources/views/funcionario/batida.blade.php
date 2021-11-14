@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Batidas do Funcionário : </div>

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
                            <th scope="col">data<th>
                            <th scope="col">batida </th>


                            


                            </tr>
                        </thead>
                        <tbody>
                    <?php
                        $data_batida= '';
                        $i=0;
                    ?>
                    @foreach($batidas as $b)

                        <?php
                            if($i==0){
                                $data_batida=$b->data_batida;
                                echo '<tr>';
                                echo '<td>'.$b->data_batida.'</td>';
                                echo '<td>'.$b->horario.'</td>';

                                $i=1;
                            }else{
                                if(strcmp($data_batida, $b->data_batida)==0){
                                    echo '<td>'.$b->horario.'</td>';
                                    echo '</tr>';
                                }else{
                                    $i=0;

                                }
                            }
                            
                            
                            
                        
                        ?>
                        

                            
                    @endforeach
                        </tbody>
                       
                        </table>
                </div>
    
        </div>
    </div>
</div>
@endsection