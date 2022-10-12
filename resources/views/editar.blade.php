@extends('include.header')
@section('home')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3> Listas de Tarefas</h3>
                <hr>
                <h3> EDITAR Tarefas</h3>
                <div class="rol">

                    <form action="{{ url('updatetask/' . $info->id) }}" method="put">
                        {{-- @method('PUT')
                   {{ csrf_field()}} --}}
                        @csrf
                        <div class="row">
                            <div class="col-sm-4 offset-sm-4">
                                <div class="form-group">
                                    <label>Editbb Task</label>
                                    <input type="text" name="tarefa" value="{{ $info->tarefa }}" required
                                        class="form-control" placeholder="Actualizar Tarefas">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Actualizar Tarefas</button>
                                    <a href="{{ route('home') }}" class="btn btn-secondary">Cancelar</a>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
