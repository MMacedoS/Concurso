<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estado;
use App\Models\User;
use App\Models\PessoaFisica;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
{
    public function index()
    {
        $estado = Estado::all();
      return view('login.registrar',compact('estado'));
    }

    public function store(Request $request)
    {
        $this->validate($request,
        [
            'email' => 'required',
            'password' => 'required',
            'nome' => 'required',
            'cpf' => 'required',
            'endereco' => 'required',
            'cidade_id' => 'required',
            'estado_id' => 'required',
        ]
        );

        try {
            DB::transaction(function () use ($request) {
                $inputs = $request->all();
                $inputs['name'] = ucwords($request->nome);
                $inputs['password'] = md5($request->nome);
                $user =  User::create($inputs);

                $inputs['cpf'] = preg_replace('/[^A-Za-z0-9]/', '', $request->cpf);
                $inputs['nome'] = ucwords($request->nome);
                $inputs['user_id'] = $user->id;
                $pessoa  = PessoaFisica::create($inputs);

            });
            return redirect()->route('login');
        }catch(Exception $th)
        {
           return json_encode('roor');
        }


    }
}
