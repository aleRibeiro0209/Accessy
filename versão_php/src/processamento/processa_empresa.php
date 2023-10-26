<?php

session_start();
include_once("conexao.php");

$nome_da_empresa = filter_input(INPUT_POST, 'nome_da_empresa', FILTER_SANITIZE_STRING);
$CNPJ = filter_input(INPUT_POST, 'CNPJ', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$contato = filter_input(INPUT_POST, 'contato', FILTER_SANITIZE_STRING);
$biografia = filter_input(INPUT_POST, 'biografia', FILTER_SANITIZE_STRING);
$area_de_atuacao = filter_input(INPUT_POST, 'area_de_atuacao', FILTER_SANITIZE_STRING);
$faixa_salarial = filter_input(INPUT_POST, 'faixa_salarial', FILTER_SANITIZE_STRING);
$descricao_da_vaga =  filter_input(INPUT_POST, 'descricao_da_vaga', FILTER_SANITIZE_STRING);

$result_empresa = "INSERT INTO tb_empresa (nome_da_empresa, CNPJ, senha, contato, biografia, area_de_atuacao, faixa_salarial, descricao_da_vaga, created) 
VAlUES ('$nome_da_empresa', '$CNPJ ', '$senha', '$contato', '$biografia', '$area_de_atuacao', '$faixa_salarial', '$descricao_da_vaga', NOW())";
$resultado_empresa = mysqli_query($conn, $result_empresa);

if (mysqli_insert_id($conn)) {
  $_SESSION['msg'] = '<p style="color:green;"></p>';
  header("Location: ../../form_login.php ");
} else {
  header("Location: ../cadastro_empresa.php ");
  $_SESSION['msg'] = "<script type='text/javascript'>alert('Empresa não foi cadastrado com sucesso, tente novamente');</script>";
}
