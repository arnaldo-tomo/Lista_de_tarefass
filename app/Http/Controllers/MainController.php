<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\tarefas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\Console\Input\Input;

class MainController extends Controller
{

    public function index()
    {
        $tarefas =  tarefas::all();
        $tarefas = tarefas::where('visivel', 1)->OrderBy('created_at', 'desc')->get();
        //SO ira ternar todos os registos com visibilide "1"
        // $tarefas = tarefas::where('visivel', 1)->get();
        // return response()->json($tarefas);

        // $resposta = Http::get('https://jsonplaceholder.typicode.com/photos');

        // return view('/home', compact($resposta));

        return view('/home', ['tarefas' => $tarefas]);
    }



    public function busca($id)
    {
        $tarefas =  tarefas::findOrfail($id);
        return response()->json($tarefas);
    }

    public function criar()
    {
        return view('/nova');
    }

    public function save(Request $request)
    {
        $tarefas = new tarefas();
        $tarefas->create($request->all());
        return redirect('/')->with('ERRO', 'APAGADO COM SUCESSO');
    }

    public function taskdone($id)
    {
        $tarefas =  tarefas::find($id);
        $tarefas->feio = new DateTime();
        $tarefas->save();
        return redirect('/');
    }
    public function taskundone($id)
    {
        $tarefas =  tarefas::find($id);
        $tarefas->feio = null;
        $tarefas->save();
        return redirect('/');
    }

    public function editar($id)
    {
        $tarefas =  tarefas::find($id);
        return view('editar', ['info' => $tarefas]);
    }

    public function updatetask(Request $request, $id)
    {
        $tarefas = tarefas::find($id);
        $tarefas->update($request->all());
        $tarefas->save();
        return redirect('/')->with('status', 'Actualizado com Sucessos');
    }

    public function visivel($id)
    {
        $tarefas = tarefas::find($id);
        $tarefas->visivel = 1;
        $tarefas->save();
        return redirect('')->with('status', 'Actualizado com Sucessos');
    }

    public function invisivel($id)
    {
        $tarefas = tarefas::find($id);
        $tarefas->visivel = 0;
        $tarefas->save();
        return redirect()->route('home')->with('status', 'Actualizado com Sucessos');
    }
    public function tarefainvisivel()
    {
        $tarefas = tarefas::all();
        //SO ira ternar todos os registos com visibilide "1"
        $tarefas = tarefas::where('visivel', 0)->OrderBy('created_at', 'desc')->get();
        return view('invisivel', ['tarefas' => $tarefas]);
    }
}
