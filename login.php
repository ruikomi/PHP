<?php
    require "req/database.php";
    require "req/funcoesLogin.php";
    include "inc/head.php";

    if (isset($_REQUEST['email']) && $_REQUEST['email']) {
        // traz os valores do input
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];
        // verifica se o usuário está logado através da função
        $infoLogado = logarUsuario($email, $senha);

        // 
        if ($infoLogado == true) {
            // cria sessão
            session_start();
            // cria campo nome na sessão
            $_SESSION["nome"] = $infoLogado['nomeUsuario'];
            // cria campo email na sessão
            $_SESSION["email"] = $email;
            // cria campo nivelAcesso
            $_SESSION["nivelAcesso"] = $infoLogado['tipoUsuario'];
            // cria campo logado na sessão
            $_SESSION["logado"] = true;
            // redireciona usuário paar index.php
            header("Location: index.php");
        } else {
            $erro = "Seu usuário não foi encontrado!";
        }
    }
?>

<div class="page-center">
    <h2>Login</h2>
    <!-- mostra mensagem de erro caso a variável $erro esteja definida -->
    <?php if (isset($erro)) :  ?>
        <div class="alert alert-danger">
            <span> <?php echo $erro; ?> </span>
        </div>
    <?php endif; ?>
    <form action="login.php" method="post" class="col-md-7"> <!-- no action ; quando usa senha, tem que usar method="post" -->
        <div class="col-md-12">
            <label for="inputEmail">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail">
        </div>
        <div class="col-md-12">
            <label for="inputSenha">Senha</label>
            <input type="password" name="senha" class="form-control" id="inputSenha">
        </div>
        <div class="col-md-12">
            <button class="btn btn-primary" type="submit">Entrar</button>
            <a href="cadastro.php" class="col-md-offset-9">Fazer Cadastro!</a>
        </div>
    </form>
</div>

<?php
    include "inc/footer.php";
?>