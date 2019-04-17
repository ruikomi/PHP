
<?php
    $nomeArquivo = "usuarios.json"; // define o nome do arquivo

    function cadastrarUsuario($usuario) {
        global $nomeArquivo; // define variável global dentro da função

        $usuariosJson = file_get_contents($nomeArquivo); // traz conteúdo do arquivo usuarios.json

        $arrayUsuarios = json_decode($usuariosJson,true); // transforma arquivo json em array associativo
        
        array_push($arrayUsuarios["usuarios"],$usuario); // inclui novos usuarios no array associativo; "usuarios" foi definidos no arquivo usuarios.json

        $usuarioJson = json_encode($arrayUsuarios); // transforma array associativo em arquivo json

        $cadastrou = file_put_contents($nomeArquivo,$usuarioJson); // insere dados json para arquivo "usuarios.json"

        return $cadastrou; // retorna true/false
    }



    function logarUsuario($email, $senha) {
        global $nomeArquivo;
        $logado = false;
        $usuariosJson = file_get_contents($nomeArquivo); // traz conteúdo do arquivo usuarios.json

        $arrayUsuarios = json_decode($usuariosJson, true); // transforma arquico json em array associativo

        // verifica se usuário existe no arquivo usuarios.json
        foreach($arrayUsuarios["usuarios"] as $chave => $valor) {
            // verifica se email/senha digitados é igual ao email/senha do json
            if ($valor["email"] == $email && password_verify($senha,$valor["senha"])) {
                $logado = true;
                break; // quando encontrar o usuário, ele para
            }
        }
        return $logado;
    }
?>
