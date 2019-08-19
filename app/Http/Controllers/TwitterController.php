<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TwitterController extends Controller
{
    public function index()
    //Metódo responsável por retornar a view do painel:
    {
        $users = \App\User::All();
        
        return view('index', compact('users'));
    }
    
    public function list()
    //Método responsável por retornar a view com todos os usuários:
    {
        $users = \App\User::All();

        return view('users', compact('users'));
    }

    public function store(Request $request)
    //Método responsável por salvar novo usuário no banco de dados:
    { 
        $dados = $request->except('_token');
        User::create($dados);

        return view('add')->with('alert', true);
    }

    public function create()
    //Método responsável por retornar a view de cadastro:
    {
        return view('add');
    }

    public function show($id)
    //Metódo responsável por trazer um usuário específico através do ID:
    {
        $users = \App\User::findOrFail($id);

        return view('show', compact('users'));
    }
}
