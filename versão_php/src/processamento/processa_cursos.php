<?php
session_start();
include_once("conexao.php");

$nome_curso = filter_input(INPUT_POST, 'nome_curso', FILTER_SANITIZE_STRING);
$descricao_curso = filter_input(INPUT_POST, 'descricao_curso', FILTER_SANITIZE_STRING);
$fornecedor_curso = filter_input(INPUT_POST, 'fornecedor_curso', FILTER_SANITIZE_STRING);
$horario_curso = filter_input(INPUT_POST, 'horario_curso', FILTER_SANITIZE_STRING);
$nivel_curso = filter_input(INPUT_POST, 'nivel_curso', FILTER_SANITIZE_STRING);
$contato_curso = filter_input(INPUT_POST, 'contato_curso', FILTER_SANITIZE_STRING);
$link_curso = filter_input(INPUT_POST, 'link_curso', FILTER_SANITIZE_URL);

$result_cursos = "INSERT INTO tb_cursos(nome_curso, descricao_curso, fornecedor_curso, horario_curso, nivel_curso, contato_curso, link_curso) VALUES ('$nome_curso', '$descricao_curso', '$fornecedor_curso', '$horario_curso', '$nivel_curso', '$contato_curso', '$link_curso')";
$resultado_curso = mysqli_query($conn, $result_cursos);


if (mysqli_insert_id($conn)) {
  $_SESSION['msg'] = "<script type='text/javascript'>alert('Agradecemos o cadastro do curso, vamos verifica o curso e se tudo estiver certo vamos postar');</script>";
  header("Location: ../curso.php ");
} else {

  $_SESSION['msg'] = "<script type='text/javascript'>alert('O curso não foi cadastrada com sucesso');</script>";
  header("Location: ../curso.php ");
}
