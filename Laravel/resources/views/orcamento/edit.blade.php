@extends('layouts.app')
@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger mx-auto">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('orcamento.update', $orcamento) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <div class="row">
                    <div class="col-8">
                        <label for="centrocusto" class="form-label">Centro de Custo</label>
                        <div>
                            <select name="centrocusto" id="centrocusto" class="form-control">
                                <option value=""> </option>
                                @foreach ($listCentroCusto as $idCentroCusto => $centroCusto)
                                    <option value="{{ $idCentroCusto }}" @if ($idCentroCusto == $orcamento->centrocusto) selected @endif>
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
                                    <option value="{{ $idDataPeriodo }}" @if ($idDataPeriodo == $orcamento->dataperiodo) selected @endif>
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
                            <td><input name="materiaprima" id="materiaprima" value={{ $orcamento->materiaprima }}
                                    type="text" class="form-control" placeholder='0.00' pattern='\d*' /></td>
                        </tr>
                        <tr>
                            <td>Despesas de Conservação</td>
                            <td><input name="despesaconservacao" id="despesaconservacao"
                                    value={{ $orcamento->despesaconservacao }} type="text" step='0.01'
                                    class="form-control" required="required" placeholder='0.00' pattern='\d*' /></td>
                        </tr>
                        <tr>
                            <td>Despesas com Veíulos</td>
                            <td><input name="despesasveiculos" id="despesasveiculos"
                                    value={{ $orcamento->despesasveiculos }} type="text" step='0.01' class="form-control"
                                    required="required" placeholder='0.00' pattern='\d*' /></td>
                        </tr>
                        <tr>
                            <td>Despesas com taxas</td>
                            <td><input name="despesastaxas" id="despesastaxas" value={{ $orcamento->despesastaxas }}
                                    type="text" step='0.01' class="form-control" required="required" placeholder='0.00'
                                    pattern='\d*' /></td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-success" type="submit">Enviar</button>
            </div>
        </form>
    </div>
@endsection
