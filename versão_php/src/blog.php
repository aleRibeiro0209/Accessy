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
  <link rel="stylesheet" href="./css/vagas-blog.css" />
  <link rel="stylesheet" href="./css/blog.css" />

  <link rel="stylesheet" href="./css/theme.css">

  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;700&family=Poppins:wght@100;400&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

</head>

<body id="zoombody">

  <?php include('header.php') ?>

  <main>
    <div class="search">
      <form action="">
        <label for="">Pesquisar conteúdo</label>
        <div class="input-search">
          <input type="search" name="" id="" />
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.16675 1.66699C13.3089 1.66699 16.6667 5.02486 16.6667 9.16699C16.6667 10.9376 16.0532 12.565 15.027 13.848L18.0893 16.9111C18.4148 17.2365 18.4148 17.7641 18.0893 18.0896C17.7889 18.39 17.3162 18.4131 16.9893 18.1589L16.9108 18.0896L13.8477 15.0272C12.5647 16.0534 10.9374 16.667 9.16675 16.667C5.02461 16.667 1.66675 13.3091 1.66675 9.16699C1.66675 5.02486 5.02461 1.66699 9.16675 1.66699ZM9.16675 3.33366C5.94509 3.33366 3.33341 5.94533 3.33341 9.16699C3.33341 12.3887 5.94509 15.0003 9.16675 15.0003C12.3884 15.0003 15.0001 12.3887 15.0001 9.16699C15.0001 5.94533 12.3884 3.33366 9.16675 3.33366Z" fill="#9C98A6" />
          </svg>
        </div>

        <label for="">Outros temas:</label>
        <p>Acessibiliade</p>
        <p>Cursos na plataforma</p>
        <p>Tutorial</p>
      </form>
    </div>
    <?php


    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $result_blog = "SELECT * FROM tb_blog WHERE id = '$id'";
    $resultado_blog = mysqli_query($conn, $result_blog);
    $row_blog = mysqli_fetch_assoc($resultado_blog);

    // echo "" . $row_blog['titulo'] . "<br>";
    // echo "" . $row_blog['subtitulo'] . "<br>";
    // echo "" . $row_blog['autor'] . "<br>";
    // echo "" . $row_blog['primeiro_paragrafo'] . "<br>";
    // echo "" . $row_blog['segundo_paragrafo'] . "<br>";
    // echo "" . $row_blog['terceiro_paragrafo'] . "<br>";
  
    ?>

    
<div class="campo-vagas">
      <h1><?php echo "" . $row_blog['titulo'] . "<br>";  echo "" . $row_blog['subtitulo'] . "<br>";  ?> </h1>
      <p class="autor">Autor: <?php echo " " . $row_blog['autor'] . "<br>"; ?></p>

      <div class="blog-text-img">

        <p class="first-text">
          <?php echo "" . $row_blog['primeiro_paragrafo'] . "<br>"; ?>
        </p>

        <!--Falta colocar uma descrição da imagem para o reconhecimento do vlibras-->
        <div class="box-img-blog">
          <img class="img-blog" src="./img/img-blog-acessy.png" alt="" />
        </div>
      </div>

      <div class="blog-text">
        <p>
          <?php echo "" . $row_blog['segundo_paragrafo'] . "<br>"; ?>
          <br>
          <?php echo "" . $row_blog['terceiro_paragrafo'] . "<br>"; ?>
        </p>
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