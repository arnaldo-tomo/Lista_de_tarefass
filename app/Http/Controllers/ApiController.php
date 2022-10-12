<?php

namespace App\Http\Controllers;

use App\Models\tarefas;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getTask()
    {
        $tarefas =  tarefas::all();
        return response()->json($tarefas);
    }

    public function store(Request $request)
    {
        $tarefas = new tarefas();
        $tarefas->create($request->all());
        return response()->json('FEITO');
    }
}