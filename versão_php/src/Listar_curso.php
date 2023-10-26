<?php

include("./processamento/conexao.php");
if (empty($_SESSION)) {
  header("Location: ../landing.php ");
}

$sql = "SELECT * FROM  tb_cursos";
$res = $conn->query($sql);
$qp = $res->num_rows;

if ($qp > 0) {
  while ($row = $res->fetch_object()) {
    print '
        <div class="card">
          <div>
            <div class="card-logo-curso">
              <p>
                ' . $row->nome_curso . '<br />
                <span>' . $row->fornecedor_curso . '</span>
              </p>
            </div>

            <p class="descricao-curso">'
        . mb_strimwidth($row->descricao_curso, 0, 110, '...') .
      '</p>
          </div>

          <div>
            <p class="card-descricao-extra">
              <span>Nível: </span>' . $row->nivel_curso . '<br />
              <span>Carga: </span>' . $row->horario_curso . 'h' . '<br />
              <span>Contato: </span>' . $row->contato_curso . '<br />
            </p>

            <a class="btn-see-more" href="inf_curso.php?id=' .  $row->id . '">Ver mais</a>
          </div>
        </div>
        <hr />
        ';
  }
} else {
  print "<p> Sem Resultados </p>";
}
?>