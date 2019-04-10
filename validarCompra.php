<?php 

    include "inc/head.php";
    include "inc/header.php";
    require "inc/funcoes.php";

    // variáveis
    $nome = $_REQUEST["nomeCompleto"]; // o nome dentro do [] foram defiinidos na linha 105 no comando name
    $cpf = $_REQUEST["cpf"]; // o nome dentro do [] foram defiinidos na linha 109 no comando name
    $nroCartao = $_REQUEST["nroCartao"]; // o nome dentro do [] foram defiinidos na linha 113 no comando name
    $validade = $_REQUEST["validade"]; // o nome dentro do [] foram defiinidos na linha 117 no comando name
    $cvv = $_REQUEST["cvv"]; // o nome dentro do [] foram defiinidos na linha 121 no comando name
    $nomeCurso = $_REQUEST["nomeCurso"];
    $precoCurso = $_REQUEST["precoCurso"];
    $erros = [];

    

    validarCompra($nome, $cpf, $nroCartao, $validade, $cvv);
?>


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
<?php include "inc/footer.php"; ?>

