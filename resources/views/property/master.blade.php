<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraDev: CRUD imobi</title>
    <link rel="stylesheet" href="<?= asset('css/app.css');?>">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Lara<b>Dev</b></a>
        <div class="container">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= '/imoveis'?>">Listar Imoveis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= '/imoveis/novo'?>">Cadastrar novo imóveis</a>
                </li>
            </ul>
        </div>
    </nav>


    @yield('contente')
    <script src="<?= asset('js/app.js');?>"></script>
</body>
</html>
