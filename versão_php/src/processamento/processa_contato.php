<?php

session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$feedback = filter_input(INPUT_POST, 'feedback', FILTER_SANITIZE_STRING);
$vrns = filter_input(INPUT_POST, 'vrns', FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

$result_contato = "INSERT INTO tb_contato (nome, email, feedback, vrns, mensagem, created)
VALUES ('$nome', '$email', '$feedback', '$vrns', '$mensagem', NOW())";

$resultado_contato = mysqli_query($conn, $result_contato);

if (mysqli_insert_id($conn)) {
  $_SESSION['msg'] = "<script type='text/javascript'>alert('Agradecemos o seu feedback');</script>";
  header("Location: ../contato.php ");
} else {
  $_SESSION['msg'] = "<script type='text/javascript'>alert('Seu Feedback não foi enviando');</script>";
  header("Location: ../contato.php ");
}