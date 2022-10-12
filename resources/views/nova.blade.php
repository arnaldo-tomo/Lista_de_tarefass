@extends('include.header')
@section('home')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3> Listas de Tarefas</h3>
                <hr>
                <h3> Novas Tarefas</h3>
                <div class="rol">

                    <form action="{{ route('guardar-terefa') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4 offset-sm-4">
                                <div class="form-group">
                                    <label>Terefas Novas</label>
                                    <input type="text" name="tarefa" required class="form-control"
                                        placeholder="Nova Tarefas">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Criar nova Tarefa</button>
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
