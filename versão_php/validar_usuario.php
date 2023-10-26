<?php

// Chamada de conexão com servidor e BD MySQL
include("./src/processamento/conexao.php");

// Recebendo dados via método POST
$usuario_dg = strtolower($_POST['email']);
$senha_dg = strtolower($_POST['senha']);

$situacao_usuario = false;

// Verificação de usuário em branco
if ($usuario_dg == "") {
    header("Location:form_login.php");
} else {

    // Procura de usuário e senha na tabela de login
    $consulta_sql = "SELECT * FROM tb_pessoa WHERE email = '$usuario_dg' and senha = '$senha_dg';";



    // Execução da consulta no BD

    $resultado_consulta = mysqli_query($conn, $consulta_sql)
        or die("<script type='text/javascript'>alert('  A validação de usuário não foi realizada com sucesso ');</script>");


    $usuario_retorno_bd = null;

    $senha_retorno_bd =  null;

    // Obtendo os dados por meio de um loop while
    while ($registros_consulta = mysqli_fetch_array($resultado_consulta)) {
        $id_adm = $registros_consulta['adm'];
        $id_usuario = $registros_consulta['id'];
        $usuario_retorno_bd = strtolower($registros_consulta['email']);
        $senha_retorno_bd = strtolower($registros_consulta['senha']);
    }

    // Testando usuários do sistema
    if ($usuario_dg == $usuario_retorno_bd and $senha_dg == $senha_retorno_bd) {
        $situacao_usuario = true;
    } else {
        header("Location:form_login.php?tipo=pessoa");
        $_SESSION['msg'] = '<p style="color:red; text-align:center; margin: 20px 0px;" >Usuário não foi cadastrado com sucesso, tente novamente</p>';
    }


    // abrindo página inicial do sistema após a validação
    if ($situacao_usuario == true) {
        // Iniciar a sessão do PHP
        session_start();
        $_SESSION['usuario_validado'] = true;
        $_SESSION['id_usuario'] = $id_usuario;
        $_SESSION['adm'] = $id_adm;
        header("Location:./src/home.php");
    }
}
?>