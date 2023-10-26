<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing - Accessy</title>

  <link rel="shortcut icon" href="./src/img/icone-accessy.ico" type="image/x-icon">

  <!--Link para importação da fonte Poppins usada na página-->
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />

  <!--Link para importação da fonte Archivo usada na página-->
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;700&family=Poppins:wght@100;400&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="./src/css/landing.css" />
</head>

<body>
  <!--Inicio do conteúdo da página-->
  <div class="container">
    <div class="box-top">
      <div id="box-titles">
        <div>
          <img draggable="false" src="./src/img/icone-accessy.ico" alt="Imagem ilustrativa da logo do Accessy, que representa a letra inicial 'A' estilizada">
          <h1><span>A</span>ccessy</h1>
        </div>
        <h2>Conectando emprego e estudo com acessibilidade.</h2> <!-- <h2>Conectando emprego e estudo de forma acessível.</h2 -->
      </div>
      <div id="image-acessy">
        <img draggable="false" src="./src/img/landing_acessy.svg" alt="Imagem ilustrativa de PCDs juntas e felizes sorrindo" />
      </div>
    </div>
    <div class="box-bottom">
      <div id="box-buttons">
        <a id="btn-pessoas" href="./form_login.php?tipo=pessoa" aria-label="Link que redireciona para a página de login de pessoa"><img src="./src/img/icon_pessoas.svg" alt="Icone ilustrativo referente a pessoas" />
          <p>Pessoas</p>
        </a>
        <a id="btn-empresa" href="./form_login.php?tipo=empresa" aria-label="Link que redireciona para a página de login de empresa"><img src="./src/img/icon_empresa.svg" alt="Icone ilustrativo referente a empresas" />
          <p>Empresa</p>
        </a>
      </div>
      <div id="description">
        <p>
          Total de 285 conexões já realizadas
          <img draggable="false" src="./src/img/heart.svg" alt="Icone ilustrativo de um coração" />
        </p>
      </div>
    </div>
  </div>

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

  <script src="./src/js/scrollreveal.js"></script>
  <script src="./src/js/animation.js"></script>
</body>

</html>