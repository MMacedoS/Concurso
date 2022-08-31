<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estado;
use App\Models\Concurso;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

class ConcursoController extends Controller
{
    public function index()
    {
        $estado = Estado::all();
        return view('concursos.index', compact('estado'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'cargo' => 'required|max:255',
            'cidade_id' => 'required',
            'vagas' => 'required',
            'observacao' => 'required',
        ]);

        try {
            DB::transaction(function () use ($validated) {
                Concurso::create($validated);

            });

            return redirect()->route('home');
        }catch(Exception $th)
        {
            return redirect()->route('home')->withError($th);
        }
    }

    public function show($id)
    {
        $data = Concurso::where('cidade_id', $id)->get();

        return json_encode($data);
    }
}
