<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estado;
use App\Models\Cidade;

use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

class CidadeController extends Controller
{
    public function index(Request $request)
    {

        $data = Cidade::where('estado_id', $request->id)->get();

        return json_encode($data);
    }

    public function create()
    {
        $estado = Estado::all();
        return view('cidades.index', compact('estado'));
    }


    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
            	'nome' => 'required',
			    'estado_id' => 'required'
            ]
        );
        DB::transaction(function () use ($request) {
            $cidade = new Cidade();
            $cidade->nome = $request->nome;
            $cidade->estado_id = $request->estado_id;
            $cidade->createCidade($cidade);
        });

        return redirect()->route('cidade');

    }
}
