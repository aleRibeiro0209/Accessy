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
  <title>Curso selecionado - Accessy</title>

  <link rel="shortcut icon" href="./img/icone-accessy.ico" type="image/x-icon">

  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/vagas.css" />
  <link rel="stylesheet" href="./css/vagas-blog.css" />

  <link rel="stylesheet" href="./css/vaga-curso-selecionada.css">

  <link rel="stylesheet" href="./css/theme.css">

  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;700&family=Poppins:wght@100;400&display=swap" rel="stylesheet" />
</head>

<body id="zoombody">

  <?php include('header.php') ?>

  <main>

    <div class="campo-vagas">
      <!-- <div class="cancel-button">
          <svg width="47" height="43" viewBox="0 0 47 43" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.61538 43L0 39.6923L19.8846 21.5L0 3.30769L3.61538 0L23.5 18.1923L43.3846 0L47 3.30769L27.1154 21.5L47 39.6923L43.3846 43L23.5 24.8077L3.61538 43Z" fill="white" />
          </svg>
        </div> -->

      <?php
      // $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
      // $result_usuario = "SELECT * FROM tb_cursos WHERE id = '$id'";
      // $resultado_usuario = mysqli_query($conn, $result_usuario);
      // $row_usuario = mysqli_fetch_assoc($resultado_usuario);

      $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
      $result_curso = "SELECT * FROM tb_cursos WHERE id = '$id'";
      $resultado_curso = mysqli_query($conn, $result_curso);
      $row_curso = mysqli_fetch_assoc($resultado_curso);

      // echo "" . $row_usuario['nome_curso'] . "<br>";
      // echo "" . $row_usuario['descricao_curso'] . "<br>";
      // echo "" . $row_usuario['fornecedor_curso'] . "<br>";
      // echo "" . $row_usuario['horario_curso'] . "<br>";
      // echo "" . $row_usuario['nivel_curso'] . "<br>";
      // echo "" . $row_usuario['contato_curso'] . "<br>";
      // echo "" . $row_usuario['link_curso'] . "<br>";

      print '
            <div class="card">
            <div class="cancel-button">
              <a href="./curso.php" aria-label="Link que redireciona a página de busca de cursos">
                <svg width="47" height="43" viewBox="0 0 47 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.61538 43L0 39.6923L19.8846 21.5L0 3.30769L3.61538 0L23.5 18.1923L43.3846 0L47 3.30769L27.1154 21.5L47 39.6923L43.3846 43L23.5 24.8077L3.61538 43Z" fill="white" />
                </svg>
              </a>
            </div>

            <div class="top-header-description">
                <div class="top-header-card">
                    <div class="card-logo-vaga">    
                        <p>' . $row_curso['nome_curso'] . '<br />
                            <span>' . $row_curso['fornecedor_curso'] . '</span>
                        </p>
                    </div>
                </div>

                <p class="card-descricao-extra top-header-card">
                    <span>Nível: </span>' . $row_curso['nivel_curso'] . '<br />
                    <span>Horário: </span>' . $row_curso['horario_curso'] . '<br />
                    <span>Contato: </span>' . $row_curso['contato_curso'] . '<br />
                </p>
            </div>


            <p class="descricao-vaga">
                ' . $row_curso['descricao_curso'] . '';

                if (isset($_SESSION['id_usuario'])) {
                  print ' <div class="favorite-button">
                  <a title="Favoritar vaga" aria-label="Favoritar vaga" href="./processamento/processa_favoritar_cursos.php?id_curso=' . $row_curso['id'] . '">
                    <svg onclick="favorite("desfavoritar")" class="favorite removeFav" width="50" height="48" viewBox="0 0 50 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25 33.125L23.6547 32.1785C21.3359 30.5244 19.4219 29.0962 17.9125 27.8939C16.4031 26.6917 15.2 25.6173 14.3031 24.6709C13.4062 23.7244 12.7773 22.8675 12.4164 22.1001C12.0555 21.3327 11.875 20.5568 11.875 19.7723C11.875 18.2376 12.5367 16.9543 13.8602 15.9226C15.1836 14.8909 16.8187 14.375 18.7656 14.375C20.0125 14.375 21.1664 14.6052 22.2273 15.0657C23.2883 15.5261 24.2125 16.1912 25 17.0609C25.9187 16.14 26.8922 15.4621 27.9203 15.0273C28.9484 14.5924 30.0531 14.375 31.2344 14.375C33.1813 14.375 34.8164 14.8909 36.1398 15.9226C37.4633 16.9543 38.125 18.2376 38.125 19.7723C38.125 20.5568 37.9445 21.3327 37.5836 22.1001C37.2227 22.8675 36.5937 23.7244 35.6969 24.6709C34.8 25.6173 33.5969 26.6917 32.0875 27.8939C30.5781 29.0962 28.6641 30.5244 26.3453 32.1785L25 33.125Z" fill="#FF023F" />
                        <path d="M47.5 23.75C47.5 35.3668 37.5488 45 25 45C12.4512 45 2.5 35.3668 2.5 23.75C2.5 12.1332 12.4512 2.5 25 2.5C37.5488 2.5 47.5 12.1332 47.5 23.75Z" stroke="#FF023F" stroke-width="5" />
                    </svg>

                    <svg onclick="favorite("favoritar")" class="nofavorite" width="50" height="48" viewBox="0 0 50 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25 33.125L23.6547 32.1785C21.3359 30.5244 19.4219 29.0962 17.9125 27.8939C16.4031 26.6917 15.2 25.6173 14.3031 24.6709C13.4062 23.7244 12.7773 22.8675 12.4164 22.1001C12.0555 21.3327 11.875 20.5568 11.875 19.7723C11.875 18.2376 12.5367 16.9543 13.8602 15.9226C15.1836 14.8909 16.8187 14.375 18.7656 14.375C20.0125 14.375 21.1664 14.6052 22.2273 15.0657C23.2883 15.5261 24.2125 16.1912 25 17.0609C25.9187 16.14 26.8922 15.4621 27.9203 15.0273C28.9484 14.5924 30.0531 14.375 31.2344 14.375C33.1813 14.375 34.8164 14.8909 36.1398 15.9226C37.4633 16.9543 38.125 18.2376 38.125 19.7723C38.125 20.5568 37.9445 21.3327 37.5836 22.1001C37.2227 22.8675 36.5937 23.7244 35.6969 24.6709C34.8 25.6173 33.5969 26.6917 32.0875 27.8939C30.5781 29.0962 28.6641 30.5244 26.3453 32.1785L25 33.125ZM25 31.1042C27.2094 29.5182 29.0305 28.1583 30.4633 27.0242C31.8961 25.8902 33.0336 24.8968 33.8758 24.0442C34.718 23.1915 35.3086 22.4326 35.6477 21.7676C35.9867 21.1025 36.1562 20.4374 36.1562 19.7723C36.1562 18.6468 35.6969 17.7217 34.7781 16.9969C33.8594 16.2722 32.6781 15.9098 31.2344 15.9098C30.1187 15.9098 29.0797 16.1784 28.1172 16.7156C27.1547 17.2527 26.3781 18.0073 25.7875 18.9794H24.1797C23.6109 18.0244 22.8453 17.274 21.8828 16.7283C20.9203 16.1826 19.8813 15.9098 18.7656 15.9098C17.3219 15.9098 16.1406 16.2722 15.2219 16.9969C14.3031 17.7217 13.8438 18.6468 13.8438 19.7723C13.8438 20.4374 14.0133 21.1068 14.3523 21.7804C14.6914 22.454 15.282 23.2213 16.1242 24.0825C16.9664 24.9437 18.1094 25.9371 19.5531 27.0626C20.9969 28.1881 22.8125 29.5353 25 31.1042Z" fill="#FF023F" />
                        <path d="M47.5 23.75C47.5 35.3668 37.5488 45 25 45C12.4512 45 2.5 35.3668 2.5 23.75C2.5 12.1332 12.4512 2.5 25 2.5C37.5488 2.5 47.5 12.1332 47.5 23.75Z" stroke="#FF023F" stroke-width="5" />
                    </svg>
                  </a>
                </div>
            </p>
        </div>';
                }
                
              
               
       print' <hr />

        <div class="box-button">
            <a href="' . $row_curso['link_curso'] . '" class="button" title="Link que redireciona ao contato do curso atual" aria-label="Link que redireciona ao contato do curso atual" >Entrar em contao</a>
        </div>

    ';

                
      ?>

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
</body>

</html>