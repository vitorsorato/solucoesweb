<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('orcamento.index');
    }

    public function create()
    {
        return view('orcamento.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Orcamento $orcamento)
    {
        //
    }
    public function edit(Orcamento $orcamento)
    {
        //
    }

    public function update(Request $request, Orcamento $orcamento)
    {
        //
    }

    public function destroy(Orcamento $orcamento)
    {
        //
    }
}
