<?php
    require "req/database.php";
    require "req/funcoesLogin.php";
    include "inc/head.php";
    
    if ($_REQUEST) { // pergunta se teve requisição de formulário; definido na linha 40
        $nome = $_REQUEST["nome"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];
        $confirmarSenha = $_REQUEST["ConfirmarSenha"];
        // teste 1
        /*$cadastro = md5($senha);
        $login = md5($senha);
        echo $cadastro . "<br/>";
        echo $login;
        exit;*/

        // teste 2
        /*$hash = password_hash($senha,PASSWORD_DEFAULT);
        echo $hash;
        exit;*/

        //echo $nome . " " . $email . " " . $senha . " " . $confirmarSenha;
        //exit;
        
        if ($senha == $confirmarSenha) {
            // criptografa senha
            $senhaCrip = password_hash($senha,PASSWORD_DEFAULT);
            // cria novo usuário
            $novoUsuario = [
                "nome" => $nome,
                "email" => $email,
                "senha" => $senhaCrip
            ];
            // cadastra usuário no json
            $cadastrou = cadastrarUsuario($novoUsuario);
        } else {
            $erro = "Senha incompatível";
        }
        
    }
?>

<div class="page-center">
    <h2>Cadastre-se</h2>
    <!-- verifica se a variáveis $cadastrou está definida -->
    <?php if(isset($cadastrou) && $cadastrou ) : ?>
        <div class="alert alert-success" role="alert">
            <span>Usuário cadastrado com sucesso!</span>    
        </div>
    <!-- verifica se a variáveis $erro está definida -->
    <?php elseif (isset($erro)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $erro; ?>
        </div>
    <?php endif ?>
    <form action="cadastro.php" method="post" class="col-md-7"> <!-- no action ; quando usa senha, tem que usar method="post" -->
    <div class="col-md-12">
        <label for="inputNome">Nome</label>
        <input type="text" name="nome" class="form-control" id="inputNome">
    </div>
    <div class="col-md-12">
        <label for="inputEmail">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail">
    </div>
    <div class="col-md-12">
        <label for="inputSenha">Senha</label>
        <input type="password" name="senha" class="form-control" id="inputSenha">
    </div>
    <div class="col-md-12">
        <label for="inputConfirmarSenha">Confirme sua senha</label>
        <input type="password" name="ConfirmarSenha" class="form-control" id="inputConfirmarSenha">
    </div>
    <div class="col-md-12">
        <button class="btn btn-primary" type="submit">Cadastrar</button>
        <a href="login.php" class="col-md-offset-9">Fazer Login!</a>
    </div>

    </form>
</div>

<?php
    include "inc/footer.php";
?>