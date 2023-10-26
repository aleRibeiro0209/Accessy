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
  <title>Perfil empresa - Accessy</title>
  
  <link rel="shortcut icon" href="./img/icone-accessy.ico" type="image/x-icon">
</head>

<body id="zoombody">

  <?php include('header.php') ?>

  <main>
    <?php

    $sql = "SELECT * FROM  tb_empresa where id= $_SESSION[id_empresa]";
    $res = $conn->query($sql);
    $qp = $res->num_rows;
    $row = $res->fetch_object()
    ?>
    <form method="POST" action="./processamento/processa_perfil_empresa.php">
      <div class="form-container">

        <h2 class="title-form">Dados da Empresa</h2>
        <hr>

        <label for="nome_da_empresa">Nome da empresa</label>
        <input type="text" name="nome_da_empresa" value="<?php if ($row->nome_da_empresa) {
           echo $row->nome_da_empresa;
         } else {
             echo '';
         } ?>" />

        <label for="CNPJ">CNPJ <span>(sem caracters)</span></label>
        <input type="text" name="CNPJ" value="<?php 
        if ($row->CNPJ) {
            echo $row->CNPJ;
           } else {
            echo '';
           } ?>" />

        <label for="senha">Senha</label>
        <input type="password" name="senha" value="<?php 
        if ($row->senha) {
            echo $row->senha;
           } else {
             echo '';
           } ?>" />

        <label for="contato">Contato<span>(somente números)</span></label>
        <input type="text" name="contato" value="<?php 
        if ($row->contato) {
            echo $row->contato;
          } else {
            echo '';
          } ?>" />

        <label for="biografia">Biografia</label>
        <textarea name="biografia"><?php
         if ($row->biografia) {
            echo $row->biografia;
         } else {
            echo '';
         } ?></textarea>


        <h2 class="title-form">Sobre a vaga</h2>

        <hr />

        <label for="area_de_atuacao">Área de atuação</label>
        <input type="text" name="area_de_atuacao" placeholder="Digite o setor da vaga" value="<?php 
        if ($row->area_de_atuacao) {
           echo $row->area_de_atuacao;
        } else {
           echo '';
        } ?>" />

        <label for="faixa_salarial">Faixa Salarial <span>(em R$ / Opcional)</span></label>
        <input type="text" name="faixa_salarial" value="<?php 
        if ($row->faixa_salarial) {
          echo $row->faixa_salarial;
        } else {
            echo '';
        } ?>" />

        <label for="Descricao da Vaga">Descrição da Vaga</label>
        <textarea name="descricao_da_vaga" value=""><?php
         if ($row->descricao_da_vaga) {
            echo $row->descricao_da_vaga;
          } else {
            echo '';
          } ?>
        </textarea>


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