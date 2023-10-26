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

  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/perfil.css" />

  <link rel="stylesheet" href="./css/theme.css">


  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;700&family=Poppins:wght@100;400&display=swap" rel="stylesheet" />
  <title>Perfil - Accessy</title>
  
  <link rel="shortcut icon" href="./img/icone-accessy.ico" type="image/x-icon">
</head>

<body id="zoombody">

  <?php include('header.php') ?>

  <main>
    <?php
    $sql = "SELECT * FROM  tb_pessoa where id= $_SESSION[id_usuario]";
    $res = $conn->query($sql);
    $qp = $res->num_rows;
    $row = $res->fetch_object()
    ?>
    <form method="POST" action="./processamento/processa_perfil.php">
      <div class="form-container">

        <label for="nome">Nome completo</label>
        <input type="text" name="nome" id="nome" value="<?php print_r($row->nome)  ?>" />

        <label for="email">Seu email</label>
        <input type="email" name="email" id="email" value="<?php print_r($row->email)  ?>" />

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" value="<?php print_r($row->senha)  ?>" />

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" value="<?php print_r($row->cpf)  ?>" />

        <div class="numbers">
          <div class="telefone">
            <label for="telefone">Telefone<span>(somente números)</span></label>
            <input type="text" name="telefone" id="telefone" value="<?php if ($row->telefone) {
                                                        echo $row->telefone;
                                                      } else {
                                                        echo '';
                                                      } ?>" />
          </div>

          <div class="celular">
            <label for="celular">Celular<span>(somente números)</span></label>
            <input type="text" name="celular" id="celular" value="<?php if ($row->celular) {
                                                        echo $row->celular;
                                                      } else {
                                                        echo '';
                                                      } ?>" />
          </div>
        </div>

        <label for="biografia">Biografia</label>
        <textarea type="text" name="biografia" cols="30" rows="10" id="biografia" value="<?php if ($row->biografia) {
                                                                            echo $row->biografia;
                                                                          } else {
                                                                            echo '';
                                                                          } ?>"><?php if ($row->biografia) {
                                                                                  echo $row->biografia;
                                                                                } else {
                                                                                  echo '';
                                                                                } ?></textarea>


        <h2 class="title-form">Sobre seus interesses</h2>

        <hr />

        <label for="area_de_atuação">Área de atuação</label>
        <input type="text" name="area_de_atuacao" placeholder="Digite o setor da vaga" id="area_de_atuação" value="<?php if ($row->area_de_atuacao) {
                                                                                                echo $row->area_de_atuacao;
                                                                                              } else {
                                                                                                echo '';
                                                                                              } ?>  " />

        <label for="faixa_salarial">Faixa Salarial <span>(em R$ / Opcional)</span></label>
        <input type="text" name="faixa_salarial" id="faixa_salarial" value="<?php if ($row->faixa_salarial) {
                                                          echo $row->faixa_salarial;
                                                        } else {
                                                          echo '';
                                                        } ?> " />

        <label for="empresa_atual">Empresa atual</label>
        <input type="text" name="empresa_atual" id="empresa_atual" value="<?php if ($row->empresa_atual) {
                                                          echo $row->empresa_atual;
                                                        } else {
                                                          echo '';
                                                        } ?>  " />

        <label for="cursos_que_tenho_interesse">Cursos que tenho interesse</label>
        <input type="text" name="cursos_que_tenho_interesse" placeholder="Digite os cursos" id="cursos_que_tenho_interesse" value="<?php if ($row->cursos_que_tenho_interesse) {
                                                                                                      echo $row->cursos_que_tenho_interesse;
                                                                                                    } else {
                                                                                                      echo '';
                                                                                                    } ?> " />

        <label for="experiencia_profissional">Experiências Profissionais</label>
        <textarea type="text" name="experiencia_profissional" placeholder="Digite suas experiências" id="experiencia_profissional" value="<?php if ($row->experiencia_profissional) {
                                                                                                              echo $row->experiencia_profissional;
                                                                                                            } else {
                                                                                                              echo '';
                                                                                                            } ?> "><?php if ($row->experiencia_profissional) {
                                                                                                                      echo $row->experiencia_profissional;
                                                                                                                    } else {
                                                                                                                      echo '';
                                                                                                                    } ?> </textarea>

        <input class="button botãoatualizacao" type="submit" value="Atualizar formulário" />
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