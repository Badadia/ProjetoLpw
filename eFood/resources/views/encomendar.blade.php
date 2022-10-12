@extends('layout')
@section('cabecalho')
    <p class="text-center">
        Projeto eFood
    </p>
@endsection
@section('conteudo')
    <div class="row">
        <div class="col">
            <form action="/salvarcadastro" method="get">
                <label for="" class="label-control" name="nome">
                    Nome
                </label>
                <input type="text" class="form-control" name="nome">
                <label for="" class="label-control" name="nome">
                    Email
                </label>
                <input type="email" class="form-control" name="email">
                <label for="" class="label-control" name="prato">
                    Prato
                </label>
                <input type="text" class="form-control" name="prato">
                <label for="" class="label-control">
                    Senha
                </label>
                <input type="password" class="form-control" name="senha">
                <button class="btn btn-light">
                    Enviar
                </button>
            </form>
        </div>
    </div>
@endsection
@section('rodape')
    <p class="text-center pt-2">
    Desenvolvido por: Bryan Belo, Gustavo Souza e Adalberto Filho
    </p>
@endsection