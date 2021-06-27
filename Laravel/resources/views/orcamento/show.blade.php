@extends('app')

@section('titulo', 'Detalhes do cliente')

@section('conteudo')
    <div class="card">
        <h5 class="card-header">Detalhes do Cliente {{ $client->name }}</h5>
        <div class="card-body">
            <p><strong>ID: </strong> {{ $client->id }}</p>
            <p><strong>nome: </strong> {{ $client->name }}</p>
            <p><strong>idade: </strong> {{ $client->age }}</p>
            <p><strong>email: </strong> {{ $client->email }}</p>
            <p><strong>Sexo: </strong>
                @foreach ($listPessoaSexo as $idPessoaSexo => $pessoaSexo)
                    @if ($idPessoaSexo == $client->pessoasexo)
                        {{ $pessoaSexo }}
                    @endif
                @endforeach
            </p>
            <br>
            <a class="btn btn-success" href="{{ route('clients.index') }}">Voltar para lista</a>
        </div>
    </div>

@endsection
