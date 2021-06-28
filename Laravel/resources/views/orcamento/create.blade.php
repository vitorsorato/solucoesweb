@extends('app')

@section('titulo', 'Novo Cliente')

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger mx-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('orcamento.store') }}" method="POST">
        @csrf
        <div>
            <div class="row">
                <div class="col-8">
                    <label for="centrocusto" class="form-label">Centro de Custo</label>
                    <div>
                        <select name="centrocusto" id="centrocusto" class="form-control">
                            <option value=""> </option>
                            @foreach ($listCentroCusto as $idCentroCusto => $centroCusto)
                                <option @if (old('centrocusto') == $idCentroCusto) selected @endif value="{{ $idCentroCusto }}">
                                    {{ $centroCusto }}
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <label for="dataperiodo" class="form-label">Data</label>
                    <div>
                        <select name="dataperiodo" id="dataperiodo" class="form-control">
                            <option value=""> </option>
                            @foreach ($listDataPeriodo as $idDataPeriodo => $dataPeriodo)
                                <option @if (old('dataPeriodo') == $idDataPeriodo) selected @endif value="{{ $idDataPeriodo }}">
                                    {{ $dataPeriodo }}
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <br>
            <table class="table table-bordered table-hover p-5">
                <thead>
                    <tr>
                        <th class="col-md-4">Conta Contábil</th>
                        <th class="col-md-4">Valor </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Materia Prima</td>
                        <td><input name="materiaprima" id="materiaprima" value="{{ old('materiaprima') }}" type="text"
                                class="form-control" placeholder='0.00' /></td>
                    </tr>
                    <tr>
                        <td>Despesas de Conservação</td>
                        <td><input name="despesaconservacao" id="despesaconservacao"
                                value="{{ old('despesaconservacao') }}" type="text" class="form-control"
                                placeholder='0.00' /></td>
                    </tr>
                    <tr>
                        <td>Despesas com Veíulos</td>
                        <td><input name="despesasveiculos" id="despesasveiculos" value="{{ old('despesasveiculos') }}"
                                type="text" class="form-control" placeholder='0.00' /></td>
                    </tr>
                    <tr>
                        <td>Despesas com taxas</td>
                        <td><input name="despesastaxas" id="despesastaxas" value="{{ old('despesastaxas') }}" type="text"
                                class="form-control" placeholder='0.00' /></td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-success" type="submit">Enviar</button>
        </div>
    </form>

    
@endsection
