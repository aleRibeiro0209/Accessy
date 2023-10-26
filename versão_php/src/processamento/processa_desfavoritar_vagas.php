<?php
session_start();
include("conexao.php");

$usuario = $_SESSION['id_usuario'];
$id_vaga = $_GET['id_vaga'];
$favoritos_usuario = "SELECT favoritar FROM tb_pessoa WHERE id =" . $_SESSION["id_usuario"];
$res = $conn->query($favoritos_usuario);
$row = $res->fetch_object();


$lista_favoritos = explode(",", $row->favoritar);

foreach ($lista_favoritos as $key => $value) {
  if ($value == $id_vaga) {
    unset($lista_favoritos[$key]);
  }
}
$stringFinal = implode(",", $lista_favoritos);

$res =  "UPDATE tb_pessoa SET favoritar = '{$stringFinal}' WHERE id = $usuario";
mysqli_query($conn, $res);

if (mysqli_insert_id($conn)) {
  header("Location: ../listar_favoritar_vaga.php ");
} else {
  header("Location: ../listar_favoritar_vaga.php ");
}
