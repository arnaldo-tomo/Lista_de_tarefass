@extends('include.header')
@section('home')

 <div class="container">
    <div class="row">
        <div class="col">
            <h3> Listas de Tarefas</h3>
            <hr>
            <div class="my-2">
            <a href="{{route('nova')}}" class="btn btn-success border-0">Criar Tarefas..</a>
            <a href="{{route('tarefainvisivel')}}" class="btn btn-info border-0">Tarefas Finilizadas</a>
            </div>
            <hr>
            <div class="rol">

               @if($tarefas->count() == 0)
                   Nao existe nenhuma tarefa
               @else

               <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>#ID</td>
                        <th>Tarefas</td>
                        <th>ACcao</td>
                    </tr>
                </thead>
                <tbody>

                     @foreach ($tarefas as $show)
                                <tr>

                                  <td>{{$show->id}}</td>
                                  <td>{{$show->tarefa}}</td>
                                 <td>
                                    @if ($show->feio==null)
                                            <a href="{{route('taskdone',$show->id)}}" class="btn btn-primary bt-sm"><i class="fa fa-check"></i></a>
                                        @else
                                            <a href="{{route('taskundone',$show->id)}}" class="btn btn-danger bt-sm"><i class="fa fa-times"></i></a>
                                   @endif
                                         <a href="{{route('editar',$show->id)}}" class="btn btn-peimary bt-sm"><i class="fa fa-edit"></i></a>


                                     @if ($show->visivel==1)
                                          <a href="{{route('invisivel',$show->id)}}" class="btn btn-primary bt-sm"><i class="fa fa-eye-slash"></i></a>
                                     @else
                                          <a href="{{route('visivel',$show->id)}}" class="btn btn-primary bt-sm"><i class="fa fa-eye"></i></a>
                                     @endif
                                    </td>
                                </tr>
                    @endforeach

                </tbody>
               </table>
               <hr>
                  <strong> <b>Total de tarefas:</strong>{{$tarefas->count()}}</b>
               @endif

            </div>
        </div>
    </div>

 </div>
@endsection


