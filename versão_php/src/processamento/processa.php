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

$result_usuario = "INSERT INTO tb_pessoa (nome, email, senha, cpf, telefone, celular, biografia, area_de_atuacao
, faixa_salarial, empresa_atual, cursos_que_tenho_interesse, experiencia_profissional, created) VALUES ('$nome', '$email', '$senha', '$cpf', '$telefone', '$celular', '$biografia', '$area_de_atuacao', '$faixa_salarial', '$empresa_atual', '$cursos_que_tenho_interesse', '$experiencia_profissional', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)) {
  $_SESSION['msg'] = '<p style="color:green;" ></p>';
  header("Location: ../../form_login.php ");
} else {
  header("Location: ../cadastro-pessoa.php ");
  $_SESSION['msg'] = "<script type='text/javascript'>alert('Usuário não foi cadastrado com sucesso, tente novamente');</script>";
}
