<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginController extends Controller
{

    public function index()
    {
        if(auth()->user())
            return redirect()->route('home');


      return view('login.login');

    }

    public function store(Request $request)
  {
    // dd($request->all());
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $find = User::where('email', $credentials['email'])->first();

        if ($find) // se encontrou o usuário
        {
            //verifiando a senha texto enviado pelo form
            //comparando com hash gravado no banco
            // dd(md5($credentials['password']));
            if (md5($credentials['password']) === $find->password)
            {
                // dd($find);
                // autorizando o login do usuário.

                Session::put("session_variable_name",Auth::loginUsingId($find->id));
                return redirect()->route('home');
            }
        }
        return back();
  }
}
