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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="./css/contato.css" />

  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/theme.css" />

  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;700&family=Poppins:wght@100;400&display=swap" rel="stylesheet" />
  <title>Contato - Accessy</title>
  
  <link rel="shortcut icon" href="./img/icone-accessy.ico" type="image/x-icon">
</head>

<body id="zoombody">
  
<?php include('header.php') ?>

  <main>
    <form method="POST" action="./processamento/processa_contato.php">
      <?php
      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
      ?>
      <div class="form-container">
        <h2 class="title-form">Entre em contato</h2>

        <hr />
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required />

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required />

        <label for="feedback">Feedback</label>
        <input type="text" name="feedback" id="feedback" placeholder="Descreva seu feedback" required />

        <label for="vrns">Você recomendaria nosso site?</label>
        <input type="text" name="vrns" id="vrns" placeholder="Diga sim ou não" />

        <label for="mensagem">Sua mensagem</label>
        <textarea name="mensagem" id="mensagem" required></textarea>

        <div class="button">
          <button class="ca">Cancelar</button>
          <button class="en">Enviar formulário</button>
        </div>
      </div>
    </form>
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