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

      <h2>Cadastrar curso</h2>
      <form method="POST" action="./processamento/processa_cursos.php" onsubmit="Form.submit(event)">
        <?php
        if (isset($_SESSION['msg'])) {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
        ?>
        <div class="input-group">
          <label class="sr-only" for="nome_curso">Nome/título</label>
          <input type="text" id="description" name="nome_curso" placeholder="Nome/título referente ao curso" />
        </div>

        <div class="input-group">
          <label class="sr-only" for="descricao_curso">Descrição</label>
          <textarea type="text" id="description" name="descricao_curso" placeholder="Descrição"></textarea>
        </div>

        <div class="input-group">
          <label class="sr-only" for="fornecedor_curso">Fornecedor</label>
          <input type="text" id="description" name="fornecedor_curso" placeholder="Fornecedor" />
        </div>

        <div class="input-group">
          <label class="sr-only" for="horario_curso">Carga horária</label>
          <input type="number" step="1.00" id="amount" name="horario_curso" placeholder="0,00" />
          <small class="help">Use o sinal , (vírgula) para casas decimais</small>
        </div>

        <div class="input-group">
          <label class="sr-only" for="nivel_curso">Nível</label>
          <input type="text" id="description" name="nivel_curso" placeholder="Nível do curso" />
        </div>

        <div class="input-group">
          <label class="sr-only" for="contato_curso">Contato</label>
          <input type="text" id="description" name="contato_curso" placeholder="(11) 94002-8922" />
        </div>

        <div class="input-group">
          <label class="sr-only" for="link_curso">Link de Contato (site ou whatsapp)</label>
          <input type="text" id="description" name="link_curso" placeholder="https://" />
        </div>

        <div class="input-group actions">
          <a href="?page=listar" class="button cancel cadastrar">Cancelar</a>
          <input type="submit" value="Salvar" class="button cadastrar">
        </div>
      </form>
    </div>
  </div>
</div>