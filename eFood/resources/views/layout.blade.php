<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>eFood</title>
</head>
<style>
    header{
        height: 20vh;
        border-bottom: 5px solid darkgray;
    }
    main{
        height: 70vh;
        color:black;
    }
    footer{
        height:10vh;
        background: darkgray;
        color:white;
    }
    Div-Cardapio{
        max-width: 100px;
    }
</style>
<body>
<header class="container-fluid">
        <div class="row">
            <div class="col d-flex justify-content-around mt-5">
                <a href="{{url('/')}}" class="btn btn-light">Home</a>
                <a href="{{url('/cardapio')}}" class="btn btn-light">Cardápio</a>
                <a href="{{url('/listagem')}}" class="btn btn-light">Lista</a>
                <a href="{{url('/encomendar')}}" class="btn btn-light">Pedir</a>
            </div>
        </div>
        @yield('cabecalho')
    </header>
    <main class="container">
        @yield('conteudo')
    </main>
    <footer class="container-fluid">
        @yield('rodape')
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>