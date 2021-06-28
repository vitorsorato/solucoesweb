@extends('layouts.app')
@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>Lista de Orçamentos</h1>
    </div>
    <!-- EXIBI MENSAGENS -->
    @if (isset($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <a class="btn btn-success" href="{{ route('orcamento.createRelatorios') }}">Relatorios</a>
    <a class="btn btn-success" href="{{ route('orcamento.create') }}">Novo Orçamento</a>

    <table class="table" >
        <thead>
            <tr>
                <th scope="col">Cód</th>
                <th scope="col">Centro de Custo</th>
                <th scope="col">Valor</th>
                <th scope="col">Data</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orcamentos as $orcamento)
                <tr>
                    <th> {{ $orcamento->id }} </th>
                    <td>
                        @foreach ($listCentroCusto as $idCentroCusto => $centroCusto)
                            @if ($orcamento->centrocusto == $idCentroCusto)
                                {{ $centroCusto }}
                            @endif
                        @endforeach
                    </td>
                    <td> {{ $orcamento->despesaconservacao + $orcamento->despesasveiculos + $orcamento->despesastaxas }}
                    </td>
                    <td>
                        @foreach ($listDataPeriodo as $idDataPeriodo => $dataPeriodo)
                            @if ($orcamento->dataperiodo == $idDataPeriodo)
                                {{ $dataPeriodo }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('orcamento.edit', $orcamento) }}">Atualizar</a>
                        <form action="{{ route('orcamento.destroy', $orcamento) }}" method="POST" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection

