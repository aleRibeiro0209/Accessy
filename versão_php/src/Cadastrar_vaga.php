<?php
// session_start();
include("./processamento/conexao.php");
if (empty($_SESSION)) {
  header("Location: ../landing.php ");
}
?>
<div class="container-modal">
  <div class="modal">
    <div class="form">
      <h2>Cadastrar vaga</h2>

      <?php
      $nome_vaga = filter_input(INPUT_POST, 'nome_vaga', FILTER_SANITIZE_STRING);
      $descricao_vaga = filter_input(INPUT_POST, 'descricao_vaga', FILTER_SANITIZE_STRING);
      $salario_vaga = filter_input(INPUT_POST, 'salario_vaga', FILTER_SANITIZE_NUMBER_INT);
      $nivel_vaga = filter_input(INPUT_POST, 'nivel_vaga', FILTER_SANITIZE_STRING);
      $horario_vaga = filter_input(INPUT_POST, 'horario_vaga', FILTER_SANITIZE_STRING);
      $contato_vaga = filter_input(INPUT_POST, 'contato_vaga', FILTER_SANITIZE_STRING);
      $link_vaga = filter_input(INPUT_POST, 'link_vaga', FILTER_SANITIZE_URL);

      // $result_vagas = "INSERT INTO tb_vagas (nome_vaga, descricao_vaga, salario_vaga, nivel_vaga, horario_vaga, contato_vaga, link_vaga,) VALUES ('$nome_vaga', '$descricao_vaga', '$salario_vaga', '$nivel_vaga', '$horario_vaga', '$contato_vaga', '$link_vaga')";

      // $resultado_vagas = mysqli_query($conn, $result_vagas);

      // print_r($_FILES);

      if (isset($_FILES['arquivos'])) {
        $arquivos = ($_FILES['arquivos']);

        if ($arquivos['error'])
          die("Falha ao enviar arquivo");

        if ($arquivos['size'] > 2097152)
          die("Arquivo muito grande!! Max: 2MB");

        $pasta = "arquivos/";
        $nomeDoArquivo = $arquivos['name'];
        $novonomeDoArquivo = uniqid();
        $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

        if ($extensao !== "jpg" && $extensao !== 'png')
          die("Tipo de arquivo não aceito");

        $path = $pasta .  $novonomeDoArquivo . "." . $extensao;
        $deu_certo = move_uploaded_file($arquivos["tmp_name"], $path);
        if ($deu_certo) {
          $resut = $conn->query("INSERT INTO tb_vagas (nome_vaga, descricao_vaga, salario_vaga, nivel_vaga, horario_vaga, contato_vaga, link_vaga, path) VAlUES('$nome_vaga', '$descricao_vaga', '$salario_vaga', '$nivel_vaga', '$horario_vaga', '$contato_vaga', '$link_vaga', '$path')");

          if ($resut) {
            $_SESSION['msg'] = "<script type='text/javascript'>alert('Agradecemos o cadastro da vaga, a vaga foi cadastrada com sucesso');</script>";
          } else {
            $_SESSION['msg'] = "<script type='text/javascript'>alert('A vaga não foi cadastrada com sucesso');</script>";
          }
        } else
          echo "<p>Falhar ao enviar arquivos</p>";
      }

      // echo $resut;
      //   // var_dump($_FILES['arquivos']);

      ?>
      <form method="POST" action="" enctype="multipart/form-data" onsubmit="Form.submit(event)">
        <?php
        if (isset($_SESSION['msg'])) {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
        ?>

        <div class="input-group">
          <label class="sr-only" for="nome_vaga">Nome/título</label>
          <input type="text" id="description" name="nome_vaga" placeholder="Nome/título referente a vaga">
        </div>

        <div class="input-group">
          <label class="sr-only" for="descricao_vaga">Descrição</label>
          <textarea type="text" id="description" name="descricao_vaga" placeholder="Descrição"></textarea>
        </div>

        <div class="input-group">
          <label class="sr-only" for="salario_vaga">Salário</label>
          <input type="number" step="0.01" id="amount" name="salario_vaga" placeholder="0,00">
          <small class="help">Use o sinal , (vírgula) para casas decimais</small>
        </div>

        <div class="input-group">
          <label class="sr-only" for="nivel_vaga">Nível</label>
          <input type="text" id="description" name="nivel_vaga" placeholder="Nível da vaga">
        </div>

        <div class="input-group">
          <label class="sr-only" for="horario_vaga">Horário</label>
          <input type="text" id="description" name="horario_vaga" placeholder="12h - 19h">
        </div>

        <div class="input-group">
          <label class="sr-only" for="contato_vaga">Contato</label>
          <input type="text" id="description" name="contato_vaga" placeholder="(11) 94002-8922">
        </div>

        <div class="input-group">
          <label class="sr-only" for="link_contato_vaga">Link de Contato (site ou whatsapp)</label>
          <input type="text" id="description" name="link_contato_vaga" placeholder="https://">
        </div>

        <label>Foto: </label>
        <input type="file" name="arquivos" require><br><br>

        <div class="input-group actions">
          <a href="?page=listar" class="button cancel cadastrar">Cancelar</a>
          <input type="submit" value="Salvar" class="button cadastrar" name="SalvarFoto">
        </div>


      </form>
    </div>
  </div>
</div>