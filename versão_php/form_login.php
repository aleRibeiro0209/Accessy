<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulário de entrada - Accessy</title>
  <link rel="shortcut icon" href="./src/img/icone-accessy.ico" type="image/x-icon">

  <link rel="stylesheet" href="./src/css/cadastros.css" />
  <link rel="stylesheet" href="./src/css/cadastro-pessoa.css">

  <link rel="stylesheet" href="./src/css/ajustes-login.css">

  <link rel="stylesheet" href="./src/css/form-login-ajustes.css">

  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;700&family=Poppins:wght@100;400&display=swap" rel="stylesheet" />
</head>

<body>
  <header>
    <div class="container-header">
      <div class="top-header">
        <div class="primary-top-header">
          <a href="landing.php" aria-label="Link que redireciona para a página inicial do site">
            <svg class="arrow" width="59" height="43" viewBox="0 0 49 33" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_131_367)">
                <path d="M2 16.3105L48 16.3105" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6.00098 21.3755L0.999977 16.3105L6.00098 11.2454" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </g>
              <defs>
                <clipPath id="clip0_131_367">
                  <rect width="32.41" height="49" fill="white" transform="translate(49 0.105446) rotate(90)" />
                </clipPath>
              </defs>
            </svg>
          </a>


          <p>Accessy</p>
        </div>

        <div class="button-theme">
          <svg class="darkBtn" onclick="changeTheme('darkTheme')" width="80" height="37" viewBox="0 0 80 37" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.4722 0.5H61.5278C71.4536 0.5 79.5 8.54644 79.5 18.4722C79.5 28.398 71.4536 36.4444 61.5278 36.4444H18.4722C8.54644 36.4444 0.5 28.398 0.5 18.4722C0.5 8.54644 8.54644 0.5 18.4722 0.5Z" fill="#3F3F44" stroke="#2C2C31" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.0018 4.24843L23.8683 4.13058C23.3126 3.69846 22.509 3.73774 21.9983 4.24843L18.1607 8.0835H14.5L14.3348 8.09303C13.6303 8.17486 13.0834 8.77364 13.0834 9.50016V13.1608L9.24831 16.9984L9.13046 17.1319C8.69834 17.6876 8.73762 18.4912 9.24831 19.0019L13.0834 22.8381V26.5002L13.0929 26.6654C13.1747 27.3699 13.7735 27.9168 14.5 27.9168H18.1621L21.9983 31.7519L22.1318 31.8697C22.6875 32.3019 23.4911 32.2626 24.0018 31.7519L27.8365 27.9168H31.5L31.6653 27.9073C32.3698 27.8255 32.9167 27.2267 32.9167 26.5002V22.8367L36.7518 19.0019L36.8696 18.8684C37.3017 18.3127 37.2625 17.5091 36.7518 16.9984L32.9167 13.1622V9.50016L32.9072 9.33495C32.8253 8.63039 32.2266 8.0835 31.5 8.0835H27.838L24.0018 4.24843ZM30.0834 18.0002C30.0834 21.9122 26.9121 25.0835 23 25.0835V10.9168C26.9121 10.9168 30.0834 14.0881 30.0834 18.0002Z" fill="#E5E5E5" />
          </svg>

          <svg class="whiteBtn remove" onclick="changeTheme('whiteTheme')" width="80" height="37" viewBox="0 0 80 37" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.5 18.4722C0.5 8.54644 8.54644 0.5 18.4722 0.5H61.5278C71.4536 0.5 79.5 8.54644 79.5 18.4722C79.5 28.398 71.4536 36.4444 61.5278 36.4444H18.4722C8.54644 36.4444 0.5 28.398 0.5 18.4722Z" fill="#FAFAFC" stroke="#E6E6F0" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M58.0017 4.24831L57.8683 4.13046L57.7245 4.03225C57.1806 3.70816 56.4664 3.78018 55.9983 4.24831L52.1607 8.08337H48.5L48.3348 8.0929C47.6302 8.17474 47.0833 8.77352 47.0833 9.50004V13.1607L43.2483 16.9983L43.1304 17.1318C42.6983 17.6875 42.7376 18.4911 43.2483 19.0018L47.0833 22.838V26.5L47.0929 26.6653C47.1747 27.3698 47.7735 27.9167 48.5 27.9167H52.1621L55.9983 31.7518L56.1317 31.8696C56.6875 32.3017 57.491 32.2625 58.0017 31.7518L61.8365 27.9167H65.5L65.6652 27.9072C66.3698 27.8253 66.9167 27.2266 66.9167 26.5V22.8365L70.7517 19.0018L70.8696 18.8683C71.3017 18.3126 71.2624 17.509 70.7517 16.9983L66.9167 13.1621V9.50004L66.9071 9.33483C66.8253 8.63026 66.2265 8.08337 65.5 8.08337H61.8379L58.0017 4.24831ZM49.9167 18C49.9167 14.088 53.088 10.9167 57 10.9167C60.912 10.9167 64.0833 14.088 64.0833 18C64.0833 21.9121 60.912 25.0834 57 25.0834C53.088 25.0834 49.9167 21.9121 49.9167 18Z" fill="#3F3F44" />
          </svg>
        </div>
      </div>

      <div class="bottom-header">
        <h1>
          Entre em nossa plataforma e <br />
          aproveite!
        </h1>
        <p>O primeiro passo, é preencher esse formulário de login.</p>
      </div>
    </div>
  </header>

  <main>
    <div class="container">
      <select name="" id="usuarios" onchange="atualizouSelect()">
        <option value="" disabled="disabled" >Selecione seu tipo de usuário</option> 
        <!-- selected="selected" -->
        <option value="value-Pessoa">Pessoa</option>
        <option value="value-Empresa">Empresa</option>
      </select>

      <form id="formPessoa" method="POST" action="./validar_usuario.php">
        <div class="form-container">
          <h2 class="title-form">Preencha e entre</h2>

          <hr />

          <label for="email">Email</label>
          <input type="text" name="email" id="email" required />
          <label for="senha_pessoa">Senha</label>
          <input type="password" name="senha" id="senha_pessoa" required />

          <div class="button">
            <button class="en">Entrar</button>
            <a href="landing.php" class="en ca" aria-label="Link que redireciona para a página inicial do site">Cancelar</a>
          </div>

          <div class="form-link-login">
            <a href="./cadastro-pessoa.php" aria-label="Link que redireciona para a página de cadastro de pessoa">Ou cadastre-se</a>
          </div>
        </div>
      </form>

      <form class="escondido" id="formEmpresa" method="POST" action="./validar_empresa.php">
        <div class="form-container">
          <h2 class="title-form">Preencha e entre</h2>
          <?php
          if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
          }
          ?>
          <hr />

          <label for="CNPJ">CNPJ</label>
          <input type="text" name="CNPJ" id="CNPJ" required />
          <label for="senha_empresa">Senha</label>
          <input type="password" name="senha" id="senha_empresa" required />

          <div class="button">
            <button class="en">Entrar</button>
            <a href="landing.php" class="en ca" aria-label="Link que redireciona para a página inicial do site">Cancelar</a>
          </div>

          <div class="form-link-login">
            <a href="./cadastro_empresa.php" aria-label="Link que redireciona para a página de cadastro de empresa">Ou cadastre-se</a>
          </div>
        </div>
      </form>
    </div>
  </main>
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
  <script src="./src/js/animation-login.js"></script>
  
  <script src="./src/js/theme.js"></script>
  <script src="./src/js/form-select.js"></script>
</body>

</html>