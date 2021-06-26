@extends('app')

@section('titulo', 'Novo Cliente')

@section('conteudo')
    <h1>Novo Cliente</h1>
    @if ($errors->any())
        <div class="alert alert-danger mx-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="{{old('name')}}">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Idade</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="Digite a idade" value="{{old('age')}}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email" value="{{old('email')}}">
        </div>
        <div class="mb-3">
            <label for="pessoasexo" class="form-label">Sexo</label>
            <div  >
                <select name="pessoasexo" id="pessoasexo" class="form-control">
                    <option value=""> </option>
                    @foreach ($listPessoaSexo as $idPessoaSexo => $pessoaSexo)
                    <option @if(old('pessoasexo')==$idPessoaSexo) selected @endif value="{{ $idPessoaSexo }}">
                        {{ $pessoaSexo }}
                    @endforeach
                </select>
            </div>
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>
    </form>
@endsection
