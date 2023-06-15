<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
</head>
<body>
    <?php 
        echo '<link rel="stylesheet" href="./style/style.css">';

        require_once 'conta.php';
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">E-commerce Web</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Início</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Sua Conta</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Opções
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">1</a></li>
                <li><a class="dropdown-item" href="#">2</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">3</a></li>
            </ul>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="row">
            <h1 class="text-center">Bem-vindo(a)!</h1>
        </div>

        <div class="row">
        <?php 
            echo '<pre>';
            print_r($primeiraConta);
            echo '</pre>';

            echo '<pre>';
            print_r($segundaConta);
            echo '</pre>';
        ?>
        </div>
        <div class="row">
            <ul class="text-center">
                <li class="text-center">
                    <?php $primeiraConta->sacar(1000); ?>
                </li>
                <li class="text-center">
                    <?php $primeiraConta->depositar(1000); ?>
                </li>
                <li class="text-center">
                    <?php $primeiraConta->transferir(1000, $segundaConta); ?>
                </li>
            </ul>
        </div>
        <div class="row">
        <?php 
            echo '<pre>';
            print_r($primeiraConta);
            echo '</pre>';

            echo '<pre>';
            print_r($segundaConta);
            echo '</pre>';

            echo "O nome da primeira conta é {$primeiraConta->getNome()} e o saldo é: {$primeiraConta->getSaldo()} <br>";
            echo "O nome da segunda conta é {$segundaConta->getNome()} e o saldo é: {$segundaConta->getSaldo()} <br>";

            $contas = [
                $primeiraConta,
                $segundaConta,
                $terceiraConta
            ];

            echo '<h4 class="text-center">Contas disponiveis no sistema</h4>';

            foreach($contas as $key) {
                echo "<li>O usuário da conta com id = {$key->getIdConta()}
                de nome {$key->getNome()} 
                tem um saldo de = {$key->getSaldo()}<li>";
            }

            echo "O número de contas é: " .Conta::getNumeroConta();
        ?>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>