<?php 
    $nome = $_REQUEST["nomeCompleto"]; // o nome dentro do [] foram defiinidos na linha 105 no comando name
    $cpf = $_REQUEST["cpf"]; // o nome dentro do [] foram defiinidos na linha 109 no comando name
    $nroCartao = $_REQUEST["nroCartao"]; // o nome dentro do [] foram defiinidos na linha 113 no comando name
    $validade = $_REQUEST["validade"]; // o nome dentro do [] foram defiinidos na linha 117 no comando name
    $cvv = $_REQUEST["cvv"]; // o nome dentro do [] foram defiinidos na linha 121 no comando name
    $nomeCurso = $_REQUEST["nomeCurso"];
    $precoCurso = $_REQUEST["precoCurso"];
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
        </div>    
    </div>
</body>
</html>


