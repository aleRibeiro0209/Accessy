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

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Equipe - Accessy</title>

  <link rel="shortcut icon" href="./img/icone-accessy.ico" type="image/x-icon">

  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/equipe.css" />
  <!-- <link rel="stylesheet" href="./css/cadastro-pessoa.css"> -->

  <link rel="stylesheet" href="./css/theme.css">


  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;700&family=Poppins:wght@100;400&display=swap" rel="stylesheet" />
</head>

<body id="zoombody">
  
  <?php include('header.php') ?>

  <main>
    <h1>Nossa Equipe &#60;3</h1>

    <section class="team-group-cards">

      <div class="team-card">
        <img src="./img/alexandre-sem-borda.svg" alt="Imagem de perfil do integrante Enrico">

        <h2>Alexandre Ribeiro Dos Santos</h2>
        <p>Integrante responsável pela documentação e pesquisa do projeto! <br> É maromba e fã do Paulo Muzy!</p>

        <a href="">LinkedIn</a>
      </div>

      <div class="team-card">
        <img src="./img/enrico-sem-borda.svg" alt="Imagem de perfil do integrante Enrico">

        <h2>Enrico Ferreira dos Santos</h2>
        <p>Desenvolvedor Front-end do projeto! <br> Nos tempos livres gosto de jogar CS:GO e descobrir novidades tecnológicas.</p>

        <a href="">LinkedIn</a>
      </div>

      <div class="team-card">
        <img src="./img/isabelle-sem-borda.svg" alt="Imagem de perfil do integrante Enrico">

        <h2>Isabelle Vicente Oliveira</h2>
        <p>Desenolvedora Back-end do projeto. <br> Player de console e fã da Microsoft!</p>

        <a href="">LinkedIn</a>
      </div>

    </section>
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