<?php 
    // variáveis
    $nome = $_REQUEST["nomeCompleto"]; // o nome dentro do [] foram defiinidos na linha 105 no comando name
    $cpf = $_REQUEST["cpf"]; // o nome dentro do [] foram defiinidos na linha 109 no comando name
    $nroCartao = $_REQUEST["nroCartao"]; // o nome dentro do [] foram defiinidos na linha 113 no comando name
    $validade = $_REQUEST["validade"]; // o nome dentro do [] foram defiinidos na linha 117 no comando name
    $cvv = $_REQUEST["cvv"]; // o nome dentro do [] foram defiinidos na linha 121 no comando name
    $nomeCurso = $_REQUEST["nomeCurso"];
    $precoCurso = $_REQUEST["precoCurso"];
    $erros = [];

    // funções
    function validarNome($nome) {
        return strlen($nome) > 0 && strlen($nome) <= 15;
    }

    function validarCPF($cpf) {
        return strlen($cpf) == 11;
    }

    function validarNroCartao($nroCartao) {
        $primeiroNumero = substr($nroCartao,0,1);
        return $primeiroNumero == 4 || $primeiroNumero == 5 || $primeiroNumero == 6;
    }

    function validarData($data) {
        $dataAtual = date("Y-m");
        return $data >=  $dataAtual;
    }

    function validarCvv($cvv) {
        return strlen($cvv) == 3;
    }

    function validarCompra($nome, $cpf, $nroCartao, $data, $cvv) {
        global $erros;
        if (!ValidarNome($nome)) {
            array_push($erros,"Preencha seu nome");
        }

        if (!validarCPF($cpf)) {
            array_push($erros,"Seu CPF precisa ter 11 caracteres");
        }
        
        if (!validarNroCartao($nroCartao)) {
            array_push($erros,"Seu cartão precisa começar com 4, 5 ou 6");
        }

        if (!validarData($data)) {
            array_push($erros,"A validade precisa ser maior que a data atual");
        }

        if (!validarCvv($cvv)) {
            array_push($erros,"Seu CVV preixa ter 3 caracteres");
        }
    }

    validarCompra($nome, $cpf, $nroCartao, $validade, $cvv);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <?php if (count($erros) > 0) : ?>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <span>Preencha seus dados corretamente!</span>                    
                    </div class="panel-body">
                        <ul class="list-group">
                            <?php foreach ($erros as $chave => $valorErro) : ?>
                                <li class="list-group-item">
                                    <?= $valorErro ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="center">
                            <a href="index.php">Voltar para home</a>
                        </div>
                    <div>
                    </div>
                </div>
            <?php else : ?>   
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <span>Compra realizada com sucesso!</span>                    
                    </div class="panel-body">
                        <ul class="list-group">                    
                        <li class="list-group-item"><strong> Nome Curso: </strong> <?php echo $nomeCurso; ?> </li>
                            <li class="list-group-item"><strong> Preço: R$ </strong> <?php echo $precoCurso; ?> </li>
                            <li class="list-group-item"><strong> Nome Completo: </strong> <?php echo $nome; ?> </li>
                        </ul>
                        <div class="center">
                            <a href="index.php">Voltar para home</a>
                        </div>
                    <div>
                    </div>
                </div>
            <?php endif; ?>   
        </div>    
    </div>
</body>
</html>


