<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientFormRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        // CONSULTA NO BANCO DE DADOS 
        $clients = Client::orderBy('id', 'desc')->get();
        $mensagem = $request->session()->get('mensagem');


        return view('clients.index', compact(
            'clients',
            'mensagem'
        ));
    }

    public function show(int $id)
    {
        $client = Client::find($id);
        $pessoaSexo = Client::$listPessoaSexo;

        return view('clients.show', [
            'client' => $client,
            'listPessoaSexo' => $pessoaSexo
        ]);
    }

    public function create()
    {
        $pessoaSexo = Client::$listPessoaSexo;

        return view('clients.create', [
            'listPessoaSexo' => $pessoaSexo
        ]);
    }

    public function store(ClientFormRequest $request)
    {
        $dados = $request->except('_token');

        Client::create($dados);

        $request->session()->flash("mensagem", $request->name . " criado com sucesso!");

        return redirect('/clients');
    }

    public function edit(int $id)
    {
        $client = Client::find($id);
        $pessoaSexo = Client::$listPessoaSexo;

        return view('clients.edit', [
            'client' => $client,
            'listPessoaSexo' => $pessoaSexo
        ]);
    }

    public function update(int $id, ClientFormRequest $request)
    {
        $client = Client::find($id);

        $client->update([
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email,
            'pessoasexo' => $request->pessoasexo
        ]);

        return redirect('/clients');
    }

    public function destroy(int $id, Request $request)
    {
        $client = Client::find($id);

        $client->delete();

        $request->session()->flash("mensagem", $client->name . "  removido com sucesso!");

        return redirect('/clients');
    }
}
