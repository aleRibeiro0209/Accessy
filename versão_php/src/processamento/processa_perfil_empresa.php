<?php
session_start();
include("conexao.php");

$nome_da_empresa = filter_input(INPUT_POST, 'nome_da_empresa', FILTER_SANITIZE_STRING);
$CNPJ = filter_input(INPUT_POST, 'CNPJ', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$contato = filter_input(INPUT_POST, 'contato', FILTER_SANITIZE_STRING);
$biografia = filter_input(INPUT_POST, 'biografia', FILTER_SANITIZE_STRING);
$area_de_atuacao = filter_input(INPUT_POST, 'area_de_atuacao', FILTER_SANITIZE_STRING);
$faixa_salarial = filter_input(INPUT_POST, 'faixa_salarial', FILTER_SANITIZE_STRING);
$descricao_da_vaga =  filter_input(INPUT_POST, 'descricao_da_vaga', FILTER_SANITIZE_STRING);

$result_perfil_empresa = "UPDATE tb_empresa SET nome_da_empresa = '$nome_da_empresa', CNPJ = '$CNPJ', senha = '$senha', contato ='$contato', biografia = '$biografia', area_de_atuacao = '$area_de_atuacao', faixa_salarial = '$faixa_salarial', descricao_da_vaga = '$descricao_da_vaga' WHERE  id =  $_SESSION[id_empresa] ";
$resulto_perfil_empresa = mysqli_query($conn, $result_perfil_empresa);

if (mysqli_insert_id($conn)) {
  $_SESSION['msg'] = '<p style="color:green;"></p>';
  header("Location: ../home.php ");
} else {
  header("Location: ../perfil-empresa.php ");
  $_SESSION['msg'] = "<script type='text/javascript'>alert('Empresa não foi cadastrado com sucesso, tente novamente');</script>";
}
