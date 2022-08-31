<?php

declare(strict_types=1);

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inscricao;
use App\Models\Estado;
use App\Models\PessoaFisica;

use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;


class InscricaoController extends Controller
{
    public function __construct(){}

    public function index(Request $request)
    {
        $estado = Estado::all();
    	return view('inscricao.index', compact('estado'));
    }

    public function store(Request $request)
    {

        $this->validate($request,
            [
			    'cargo' => 'required',
                'nome' => 'required',
			    'cpf' => 'required',
			    'endereco' => 'required',
			    'cidade_id' => 'required',
			    'estado_id' => 'required',
            ]
        );

        try {
           $cadInscricao =  DB::transaction(function () use ($request) {
                                $inputs = $request->all();
                                $inputs['cpf'] = preg_replace('/[^A-Za-z0-9]/', '', $request->cpf);
                                $inputs['nome'] = ucwords($request->nome);

                                $pessoa  = PessoaFisica::create($inputs);
                                $inputs = [];
                                $inputs['pessoa_fisica_id'] = $pessoa->id;
                                $inputs['cargo'] = $request->cargo;
                                $inputs['situacao'] = "cadastrando";
                                return Inscricao::create($inputs);

                            });

             return redirect()->route('comprovante', $cadInscricao->id);

        }catch(Exception $th)
        {
            return json_encode('roor');
        }
    }

    public function update(Request $request)
    {
        $this->validate(
            $request,
            [
            	'id' => 'required',
			    'pessoa_fisica_id' => 'required',
			    'cargo' => 'required',
			    'situacao' => 'required',
            ]
        );

	    $inscricao = Inscricao::find($request->id);
	    $inscricao->pessoa_fisica_id = $request->pessoa_fisica_id;
	    $inscricao->cargo = $request->cargo;
	    $inscricao->situacao = $request->situacao;

	    return json_encode(Inscricao::updateInscricao($inscricao));
    }



    public function show(Request $request, $id)
    {
        return json_encode(Inscricao::loadInscricaoById($id));
    }

    public function comprovante($id)
    {
        $dados = PessoaFisica::with('cidade','inscricao', 'estado')->findOrFail($id);
        // dd($dados);
        return view("inscricao.comprovante", compact('dados'));
    }

    public function destroy(Request $request, $id)
    {
        $inscricao = Inscricao::find($id);

        return json_encode(Inscricao::deleteInscricao($inscricao));
    }

}
