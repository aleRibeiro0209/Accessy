<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
$biografia = filter_input(INPUT_POST, 'biografia',  FILTER_SANITIZE_STRING);
$area_de_atuacao = filter_input(INPUT_POST, 'area_de_atuacao',  FILTER_SANITIZE_STRING);
$faixa_salarial = filter_input(INPUT_POST, 'faixa_salarial',  FILTER_SANITIZE_STRING);
$empresa_atual = filter_input(INPUT_POST, 'cursos_que_tenho_interesse',  FILTER_SANITIZE_STRING);
$cursos_que_tenho_interesse = filter_input(INPUT_POST, 'cursos_que_tenho_interesse',  FILTER_SANITIZE_STRING);
$experiencia_profissional = filter_input(INPUT_POST, 'experiencia_profissional',  FILTER_SANITIZE_STRING);

$result_usuario = "UPDATE tb_pessoa SET nome = '$nome', email = '$email', senha = '$senha', cpf = '$cpf', telefone = '$telefone', celular= '$celular', biografia = '$biografia', area_de_atuacao= '$area_de_atuacao', faixa_salarial = '$faixa_salarial', empresa_atual= '$empresa_atual', cursos_que_tenho_interesse = '$cursos_que_tenho_interesse', experiencia_profissional= '$experiencia_profissional', modification=NOW() WHERE  id =  $_SESSION[id_usuario] ";
$resultado_usuario = mysqli_query($conn, $result_usuario);


if (mysqli_insert_id($conn)) {
  $_SESSION['msg'] = "<script type='text/javascript'>alert('Agradecemos a sua atualização');</script>";
  header("Location: ../home.php ");
} else {
  header("Location: ../perfil.php ");
  $_SESSION['msg'] = "<script type='text/javascript'>alert('Agradecemos a sua atualização não foi efetuada com sucesso');</script>";
}
