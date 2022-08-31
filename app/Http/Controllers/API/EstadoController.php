<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estado;
use App\Models\Cidade;

use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

class EstadoController extends Controller
{
    public function index(Request $request)
    {

    }

    public function create()
    {

        return view('estados.index');
    }


    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
            	'nome' => 'required',
			    'sigla' => 'required'
            ]
        );
        DB::transaction(function () use ($request) {
            $estado = new Estado();
            $estado->nome = $request->nome;
            $estado->sigla = $request->sigla;
            $estado->createEstado($estado);
        });

        return redirect()->route('cidade');

    }
}
