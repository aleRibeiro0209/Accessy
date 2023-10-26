<?php


include("./processamento/conexao.php");
if (empty($_SESSION)) {
  header("Location: ../landing.php ");
}

$sql = "SELECT * FROM  tb_vagas";
$res = $conn->query($sql);
$qp =  $res->num_rows;


if ($qp > 0) {
  while ($row = $res->fetch_object()) {
    // print "<p>" . $row->nome_vaga . "</p>";
    // print "<p>" . $row->descricao_vaga . "</p>";
    // print "<p>" . $row->salario_vaga . "</p>";
    // print "<p>" . $row->nivel_vaga . "</p>";
    // print "<p>" . $row->horario_vaga . "</p>";
    // print "<p>" . $row->contato_vaga . "</p>";
    // print "<p>" . $row->link_vaga . "</p>";



    // echo "<a href='inf_vaga.php?id=" .  $row->id . "'>Ver mais</a><br>";

    print '

    <div class="card">
      <div>
        <div class="card-logo-vaga">
          <img
            src="' . $row->path . '"
            alt="Logo referente a empresa que está oferencendo a vaga"
          />
          <p>
            ' . $row->nome_vaga . '<br />
            <span>' . 'R$ ' . $row->salario_vaga . '</span>
          </p>
        </div>

        <p class="descricao-vaga">'
      . mb_strimwidth($row->descricao_vaga, 0, 110, '...') .
      '</p>
      </div>

      <div>
        <p class="card-descricao-extra">
          <span>Nível: </span> ' . $row->nivel_vaga . '<br />
          <span>Horário: </span>' . $row->horario_vaga . '<br />
          <span>Contato: </span>' . $row->contato_vaga . '<br />
        </p>

        <a class="btn-see-more" href="inf_vaga.php?id=' .  $row->id . '">Ver mais</a>
      </div>

    </div>
    <hr />


    ';
  }
} else {
  print "<p> Sem Resultados </p>";
}
?>

<iframe src="" frameborder="0" style="display: none;"></iframe>