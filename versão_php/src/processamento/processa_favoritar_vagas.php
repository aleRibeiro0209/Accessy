<!-- Pagina para tratar os dados das vagas favoritados -->
<?php
session_start();
include("conexao.php");

// Manual das principais funções utilizadas.

// Como transformar um array em string com php
// implode($separador, $array);

// Como transformar uma string em array PHP
// $lista_favoritos = explode($separador, $string);

// Como adicionar um elemento em um array
// array_push($array, $valor);

// Objeto criado para simular o objeto de returno da 'query' do banco de dados (OBS: talvez seja necessário, ao acessar esse objeto no restante do código, adcionar um "[0]" colado com o nome "$usuario", ficando -> "$usuario[0]", pois a função "query" que executa a query no banco de dados retorna um objeto dentro de um array, portanto, tem que especificar seu index, nesse caso, 0)

$usuario = $_SESSION['id_usuario'];
$favoritos_usuario = "SELECT favoritar FROM tb_pessoa WHERE id =" . $_SESSION["id_usuario"];
$res = $conn->query($favoritos_usuario);
$row = $res->fetch_object();

// Array (lista) que será convertida em string para ir para o banco de dados
$lista_favoritos = [];

// Simulando o id da vaga que virá através da query ou da página 'listar vagas'
$vaga_id = $_GET['id_vaga'];

// echo "<pre>";
// print_r($lista_favoritos);
// echo "<pre>";

// Verifica se o 'vagas_favoritadas' do objeto está ou não vazio

// Se estiver vazio, séra somente acrescentado o id da vaga favoritada no array e em seguida transformar o array em string
if (empty($row->favoritar)) {
  // Como será a primeira vaga favoritada (já que o campo está vazio), colocamos o id da vaga no array
  array_push($lista_favoritos, $vaga_id);

  // Transformamos o array em uma string
  $str = implode(",", $lista_favoritos);



  // Aqui vêm o código onde você ATUALIZA no banco de dados, o campo favoritos do USUÁRIO, passando como valor para esse campo, a variavel $str
  $res =  "UPDATE tb_pessoa SET favoritar = $str WHERE id = $usuario";
  mysqli_query($conn, $res);
  // X

} else {
  // Se não estiver vazio, o "arr" irá receber as vagas convertidas em array
  $lista_favoritos = explode(",", $row->favoritar);

  // Verificamos se essa vaga já não está favoritada 
  // Se NÃO EXISTE
  if (in_array($vaga_id, $lista_favoritos) == false) {

    // Colocamos o id da VAGA no array
    array_push($lista_favoritos, $vaga_id);

    // Transformamos o array em uma string
    $stringFinal = implode(",", $lista_favoritos);



    // Aqui vêm o código onde você ATUALIZA no banco de dados, o campo favoritos do USUÁRIO, passando como valor para esse campo, a variavel $str

    $res =  "UPDATE tb_pessoa SET favoritar = '{$stringFinal}' WHERE id = $usuario";
    mysqli_query($conn, $res);


    // X

  }

  // OBSERVAÇÃO: Caso o id da vaga JÁ exista no campo "favoritos" do banco de dados, não fazemos nada, logo, caso a vaga já esteja favoritada, o usuário ira clicar mas nada será feito.

  // Caso queira dar um aviso pro usuário se caso a vaga já estiver favoritada, basta acrescentar a lógica no else (como passar uma variavel por get na página de vagas, por exemplo) :)
}


if (mysqli_insert_id($conn)) {
  header("Location: ../listar_favoritar_vaga.php ");
} else {
  header("Location: ../listar_favoritar_vaga.php ");
}
    

    // POR FIM, direcionamos novamente para a página de listagem das vagas para que o usuário não fique nessa página em branco.
    // header('Location: paginaDasVagas.php');
