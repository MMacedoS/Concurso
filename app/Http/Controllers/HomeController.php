<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;

use Illuminate\Support\Facades\Session;
use App\Models\Concurso;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // dd(Session::all());
        $concursos = Concurso::with('cidade')->get();
        return view('welcome', compact('concursos'));
    }
}
