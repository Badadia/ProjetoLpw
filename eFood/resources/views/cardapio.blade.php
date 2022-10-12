@extends('layout')
@section('cabecalho')
    <p class="text-center">
        Projeto eFood
    </p>
@endsection
@section('conteudo')
    <h1 align=center>
       - Cardápio -
    </h1> 
    <div style="width: 250px; display: flex;flex-direction:column; justify-content: center;align-content: center; text-align:left;margin-left: 42%">
    
    <li >Pastel de Frango - 5$</li>
    <li >Pastel de Queijo - 5$</li>
    <li >Hamburger - 7$</li>
    <li >Coxinha - 3$ </li>
    <li >Enroladinho - 3$ </li>
    <li >Pão de queijo - 1,50$ </li>
    <li >Mini-Pizza - 7$ </li>
    <li >Refrigerante - 4$ </li>
    <li >Suco - 2$ </li>

</div>
@endsection
@section('rodape')
    <p class="text-center pt-2">
    Desenvolvido por: Bryan Belo, Gustavo Souza e Adalberto Filho
    </p>
@endsection