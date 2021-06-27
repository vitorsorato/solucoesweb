@extends('app')

@section('titulo', 'Lista de clientes')

@section('conteudo')
    <h1>Lista de Clientes</h1>
    <!-- EXIBI MENSAGENS -->
    @if (isset($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <a class="btn btn-success">Relatorios</a>
    <a class="btn btn-success" href="{{ route('orcamento.create') }}">Novo Orçamento</a>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Cód</th>
                <th scope="col">Centro de Custo</th>
                <th scope="col">Conta Contábil</th>
                <th scope="col">Valor</th>
                <th scope="col">Data</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <th>01</th>
                    <td>Realengo</td>
                    <td>Gastos</td>
                    <td>R$ 350,00</td>
                    <td>fev/2021</td>
                    <td>
                        <a class="btn btn-primary">Atualizar</a>
                        <form style="display: inline;">
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>

    
@endsection
