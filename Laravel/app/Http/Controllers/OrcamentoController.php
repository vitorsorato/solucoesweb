<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
use Illuminate\Http\Request;
use App\Http\Requests\OrcamentoFormRequest;

class OrcamentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $orcamentos = Orcamento::orderBy('id', 'desc')->get();
        $mensagem = $request->session()->get('mensagem');

        $listCentroCusto = Orcamento::$listCentroCusto;
        $listDataPeriodo = Orcamento::$listDataPeriodo;

        return view('orcamento.index', compact(
            'orcamentos',
            'mensagem',
            'listCentroCusto',
            'listDataPeriodo'
        ));
    }

    public function create()
    {
        $listCentroCusto = Orcamento::$listCentroCusto;
        $listDataPeriodo = Orcamento::$listDataPeriodo;

        return view('orcamento.create', [
            'listCentroCusto' => $listCentroCusto,
            'listDataPeriodo' => $listDataPeriodo
        ]);
    }

    public function createRelatorio()
    {
        return view('orcamento.createRelatorio');
    }

    public function store(OrcamentoFormRequest $request)
    {
        $dados = $request->except('_token');
        Orcamento::create($dados);

        $request->session()->flash("mensagem", $request->name . " criado com sucesso!");

        return redirect('/orcamentos');
    }

    public function show(Orcamento $orcamento)
    {
        //
    }

    public function edit(int $id)
    {
        $orcamento = Orcamento::find($id);
        $listCentroCusto = Orcamento::$listCentroCusto;
        $listDataPeriodo = Orcamento::$listDataPeriodo;

        return view('orcamento.edit', [
            'orcamento' => $orcamento,
            'listCentroCusto' => $listCentroCusto,
            'listDataPeriodo' => $listDataPeriodo
        ]);
    }

    public function update(int $id, OrcamentoFormRequest $request)
    {
        $orcamento = Orcamento::find($id);

        $listCentroCusto = Orcamento::$listCentroCusto;

        $nomeCentroCusto = '';

        foreach ($listCentroCusto as $idCentroCusto => $centroCusto) {
            if ($orcamento->centrocusto == $idCentroCusto) {
                $nomeCentroCusto = $centroCusto;
            }
        }

        $request->session()->flash("mensagem", " $nomeCentroCusto  editado com sucesso!");

        $orcamento->update([
            'centrocusto' => $request->centrocusto,
            'dataperiodo' => $request->dataperiodo,
            'materiaprima' => $request->materiaprima,
            'despesaconservacao' => $request->despesaconservacao,
            'despesasveiculos' => $request->despesasveiculos,
            'despesastaxas' => $request->despesastaxas,
        ]);

        return redirect('/orcamentos');
    }

    public function destroy(int $id, Request $request)
    {
        $orcamento = Orcamento::find($id);

        $orcamento->delete();

        $listCentroCusto = Orcamento::$listCentroCusto;
        $nomeCentroCusto = '';

        foreach ($listCentroCusto as $idCentroCusto => $centroCusto) {
            if ($orcamento->centrocusto == $idCentroCusto) {
                $nomeCentroCusto = $centroCusto;
            }
        }

        $request->session()->flash("mensagem", $nomeCentroCusto . "  removido com sucesso!");

        return redirect('/orcamentos');
    }
}