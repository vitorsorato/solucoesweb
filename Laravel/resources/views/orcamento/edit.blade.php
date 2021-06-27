@extends('app')

@section('titulo', 'Editar Cliente')

@section('conteudo')
    <h1>Editar Cliente</h1>
    @if ($errors->any())
        <div class="alert alert-danger mx-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" value="{{ $client->name }}" class="form-control" id="name" name="name"
                placeholder="Digite o nome">
        </div>
        <div class="mb-3">
            <label for="idade" class="form-label">idade</label>
            <input type="number" value="{{ $client->age }}" class="form-control" id="age" name="age"
                placeholder="Digite a idade">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">email</label>
            <input type="text" value="{{ $client->email }}" class="form-control" id="email" name="email"
                placeholder="Digite o email">
        </div>
        <div class="mb-3">
            <label for="pessoasexo" class="form-label">sexo</label>
            <div>
                <select name="pessoasexo" id="pessoasexo" class="form-control">
                    <option value=""> </option>
                    @foreach ($listPessoaSexo as $idPessoaSexo => $pessoaSexo)
                        <option value="{{ $idPessoaSexo }}" @if ($idPessoaSexo == $client->pessoasexo) selected @endif>
                            {{ $pessoaSexo }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-success" type="submit">Enviar</button>
    </form>
@endsection
