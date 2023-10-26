<!-- Pagina para tratar os dados da cursos favoritados -->

<?php
session_start();
include("conexao.php");

$usuario = $_SESSION['id_usuario'];
$favoritos_usuario = "SELECT favoritar_curso FROM tb_pessoa WHERE id =" . $_SESSION["id_usuario"];
$res = $conn->query($favoritos_usuario);
$row = $res->fetch_object();

$lista_favoritos = [];

$curso_id = $_GET['id_curso'];


if (empty($row->favoritar_curso)) {
   
    array_push($lista_favoritos, $curso_id);

    
    $str = implode(",", $lista_favoritos);

    echo "AQUI:" . $str;

    
    $res =  "UPDATE tb_pessoa SET favoritar_curso = $str WHERE id = $usuario";
    mysqli_query($conn, $res);


} else {
    
    $lista_favoritos = explode(",", $row->favoritar_curso);

    
    if (in_array($curso_id, $lista_favoritos) == false) {

        
        array_push($lista_favoritos, $curso_id);

       
        $stringFinal = implode(",", $lista_favoritos);


        $res =  "UPDATE tb_pessoa SET favoritar_curso = '{$stringFinal}' WHERE id = $usuario";
        mysqli_query($conn, $res);

    } 
}


if (mysqli_insert_id($conn)) {
    header("Location: ../listar_favoritar_curso.php ");
} else {
    header("Location: ../listar_favoritar_curso.php ");
}
