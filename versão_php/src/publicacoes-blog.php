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
  <title>Blog - Accessy</title>

  <link rel="shortcut icon" href="./img/icone-accessy.ico" type="image/x-icon">

  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/vagas.css" />
  <link rel="stylesheet" href="./css/vagas-blog.css" />

  <link rel="stylesheet" href="./css/theme.css">

  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;700&family=Poppins:wght@100;400&display=swap" rel="stylesheet" />
</head>

<body id="zoombody">

  <?php include('header.php') ?>

  <main>

    <div class="container">
      <div class="search">
        <form action="">

          <label for="pesquisar">Pesquisar conteúdo</label>
          <div class="input-search">
            <input type="search" name="" id="pesquisar" />
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M9.16675 1.66699C13.3089 1.66699 16.6667 5.02486 16.6667 9.16699C16.6667 10.9376 16.0532 12.565 15.027 13.848L18.0893 16.9111C18.4148 17.2365 18.4148 17.7641 18.0893 18.0896C17.7889 18.39 17.3162 18.4131 16.9893 18.1589L16.9108 18.0896L13.8477 15.0272C12.5647 16.0534 10.9374 16.667 9.16675 16.667C5.02461 16.667 1.66675 13.3091 1.66675 9.16699C1.66675 5.02486 5.02461 1.66699 9.16675 1.66699ZM9.16675 3.33366C5.94509 3.33366 3.33341 5.94533 3.33341 9.16699C3.33341 12.3887 5.94509 15.0003 9.16675 15.0003C12.3884 15.0003 15.0001 12.3887 15.0001 9.16699C15.0001 5.94533 12.3884 3.33366 9.16675 3.33366Z" fill="#9C98A6" />
            </svg>
          </div>

          <label for="">Outros temas:</label>
          <p>Acessibilidade</p>
          <p>Cursos na plataforma</p>
          <p>Tutorial</p>

        </form>


      </div>
      <?php
      if (isset($_SESSION['adm'])) {
      ?>
        <a href="./Cadastrar_blog.php" class="cadastrar">Cadastrar publicação</a>
      <?php
      } 
      ?>
    </div>


    <div class="campo-noticias">
      <a class="noticia-principal" href="#">
        <img class="imagem-noticia-principal" src="./img/imagem-noticia-principal.png" alt="Imagem ilustrativa de acessibilidade para cadeirantes" />

        <p class="texto-noticia">
          Prêmio de Acessibilidade reconhece iniciativas de inclusão...
        </p>
      </a>
      <?php
      $sql = "SELECT * FROM  tb_blog";
      $res = $conn->query($sql);
      $qp =  $res->num_rows;
      if ($qp > 0) {
        while ($row = $res->fetch_object()) {

          print '

          <a class="noticia" href="./blog.php?id=' .  $row->id . '">
          
          <img class="imagem-noticia" src=" ./img_blog/' . $row->img_blog . '" alt="Imagem ilustrativa da notícia" />
  
          <p class="texto-noticia">
          ' . $row->titulo . '
          </p>
        </a>
          
                ';
        }
      }
      ?>
      <a class="noticia" href="#">
        <img class="imagem-noticia" src="./img/imagem-noticia-secundaria-01.png" alt="Imagem ilustrativa da notícia" />

        <p class="texto-noticia">
          Menina cadeirante de 12 anos é uma das melhores jogadoras de basquete
        </p>
      </a>




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