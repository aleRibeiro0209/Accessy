<?php
session_start();
include("./processamento/conexao.php");
if (empty($_SESSION)) {
  header("Location: ../landing.php ");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Listar de usuarios - Accessy</title>

  <link rel="shortcut icon" href="./img/icone-accessy.ico" type="image/x-icon">

  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/theme.css">
  <link rel="stylesheet" type="text/css" href="./css/listagem-tabela.css" />

  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;700&family=Poppins:wght@100;400&display=swap" rel="stylesheet" />
</head>

<body id="zoombody">

  <?php include('header.php') ?>

  <main>

    

<div id="content">
                <div id="tabelaUsuarios">
                    <span class="title">Lista de usuários</span>

                    
                            <?php
     if (isset($_SESSION['adm'])) {
      $sql = "SELECT * FROM  tb_pessoa";
      $res = $conn->query($sql);
      $qp = $res->num_rows;

      if ($qp > 0) {

        print "<table>";
         print " <thead>";
         print "<tr>";
          print "<td>" . "id" . "</td>";
          print "<td>" . "nome" . "</td>";
          print "<td>" . "email" . "</td>";
          print "<td>" . "senha". "</td>";
          print "<td>" . "cpf" . "</td>";
          print "<td>" . "telefone" . "</td>";
          print "<td>" . "celular" . "</td>";
          print "<td>" . "biografia" . "</td>";
          print "<td>" . "area_de_atuacao" . "</td>";
          print "<td>" . "faixa_salarial" . "</td>";
          print "<td>" . "empresa_atual" . "</td>";
          print "<td>" . "cursos_que_tenho_interesse" . "</td>";
          print "<td>" . "experiencia_profissional" . "</td>";
         print "</tr>";
         print " </thead>";
         print "<tbody>";

        while ($row_usuarios = $res->fetch_object()) {
  
         
          print "<tr>";
            print "<td>" . $row_usuarios->id . "</td>";
            print "<td>" . $row_usuarios->nome . "</td>";
            print "<td>" . $row_usuarios->email . "</td>";
            print "<td>" . $row_usuarios->senha . "</td>";
            print "<td>" . $row_usuarios->cpf . "</td>";
            print "<td>" . $row_usuarios->telefone . "</td>";
            print "<td>" . $row_usuarios->celular . "</td>";
            print "<td>" . $row_usuarios->biografia . "</td>";
            print "<td>" . $row_usuarios->area_de_atuacao . "</td>";
            print "<td>" . $row_usuarios->faixa_salarial . "</td>";
            print "<td>" . $row_usuarios->empresa_atual . "</td>";
            print "<td>" . $row_usuarios->cursos_que_tenho_interesse . "</td>";
            print "<td>" . $row_usuarios->experiencia_profissional . "</td>";
          print "</tr>";
         
        }
      }
    }
    
    print "</tbody>";
    print "</table>";

    ?>
                           
                </div>
        </div>



  </main>

  <?php include('footer.php') ?>


  <!--Implementação do Vlibras-->
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app')
  </script>

  <script src="./js/scrollreveal.js"></script>
  <script src="./js/animation.js"></script>

  <script src="./js/theme.js"></script>
  <script src="./js/font.js"></script>
  <script src="./js/profile.js"></script>
  <script src="./js/mobile-menu.js"></script>
</body>

</html>