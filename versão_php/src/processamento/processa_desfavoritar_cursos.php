<?php
session_start();
include("conexao.php");

$usuario = $_SESSION['id_usuario'];
$id_curso = $_GET['id_curso'];
$favoritos_usuario = "SELECT favoritar_curso FROM tb_pessoa WHERE id =" . $_SESSION["id_usuario"];
$res = $conn->query($favoritos_usuario);
$row = $res->fetch_object();


$lista_favoritos = explode(",", $row->favoritar_curso);

foreach ($lista_favoritos as $key => $value) {
  if ($value == $id_curso) {
    unset($lista_favoritos[$key]);
  }
}
$stringFinal = implode(",", $lista_favoritos);

$res =  "UPDATE tb_pessoa SET favoritar_curso = '{$stringFinal}' WHERE id = $usuario";
mysqli_query($conn, $res);

if (mysqli_insert_id($conn)) {
  header("Location: ../listar_favoritar_curso.php ");
} else {
  header("Location: ../listar_favoritar_curso.php ");
}
