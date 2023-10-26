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
  <title>Blog - Accessy</title>
  
  <link rel="shortcut icon" href="./img/icone-accessy.ico" type="image/x-icon">


  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/vagas.css" />
  <link rel="stylesheet" href="./css/vagas-blog.css" />

  <link rel="stylesheet" href="./css/ajustes-blog-cadastrar.css">

  <link rel="stylesheet" href="./css/theme.css">

  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;700&family=Poppins:wght@100;400&display=swap" rel="stylesheet" />
</head>

<?php include('header.php') ?>

 <main>
   <div class="container-modal">
     <div class="modal">
       <div class="form">
         <?php
         $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
         $subtitulo = filter_input(INPUT_POST, 'subtitulo', FILTER_SANITIZE_STRING);
         $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
         $primeiro_paragrafo = filter_input(INPUT_POST, 'primeiro_paragrafo', FILTER_SANITIZE_STRING);
         $segundo_paragrafo = filter_input(INPUT_POST, 'segundo_paragrafo', FILTER_SANITIZE_STRING);
         $terceiro_paragrafo = filter_input(INPUT_POST, 'terceiro_paragrafo', FILTER_SANITIZE_STRING);
         
         if (isset($_FILES['img_blog'])) {
           $img_blog = ($_FILES['img_blog']);
         
           if ($img_blog['error'])
             die("Falha ao enviar arquivo");
         
           if ($img_blog['size'] > 2097152)
             die("Arquivo muito grande!! Max: 2MB");
         
           $pasta = "img_blog/";
           $nomeDoArquivo = $img_blog['name'];
           $novonomeDoArquivo = uniqid();
           $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
         
           if ($extensao !== "jpg" && $extensao !== 'png')
             die("Tipo de arquivo não aceito");
         
           $img = $pasta .  $novonomeDoArquivo . "." . $extensao;
           $deu_certo = move_uploaded_file($img_blog["tmp_name"], $img);
         
        
           if ($deu_certo) {
             $img = $novonomeDoArquivo . "." . $extensao;
         
             $resut = "INSERT INTO tb_blog (img_blog, titulo, subtitulo, autor, primeiro_paragrafo, segundo_paragrafo, terceiro_paragrafo, creacao) VALUES('$img', '$titulo', '$subtitulo', '$autor', '$primeiro_paragrafo', '$segundo_paragrafo', '$terceiro_paragrafo', NOW())";
         
           
         
             $resultado = mysqli_query($conn, $resut);
         
             
         
         
             if ($resut) {
              echo "<script type='text/javascript'>alert('Pronto :)');</script>";
             } else {
              echo "<script type='text/javascript'>alert('Não foi possivel publicar o blog, tente novamente');</script>";
             }
           } else
             echo "<p>Falhar ao enviar arquivos</p>";
         }
         ?>
         
   
         <h2>Cadastrar Blog</h2>
         <form method="POST" enctype="multipart/form-data" action="" onsubmit="Form.submit(event)">
           <?php
           if (isset($_SESSION['msg'])) {
             echo $_SESSION['msg'];
             unset($_SESSION['msg']);
           }
           ?>
           <div class="input-group">
             <label class="sr-only" for="titulo">Titulo</label>
             <input type="text" id="description" name="titulo" placeholder="Titulo do blog" />
           </div>
   
           <div class="input-group">
             <label class="sr-only" for="subtitulo">Subtitulo</label>
             <input type="text" id="description" name="subtitulo" placeholder="Subtitulo" />
           </div>
   
           <div class="input-group">
             <label class="sr-only" for="autor">Autor</label>
             <input type="text" id="description" name="autor" placeholder="Autor" />
           </div>
   
           <div class="input-group">
             <label class="sr-only" for="primeiro_paragrafo">Primeiro paragrafo</label>
             <textarea type="text" id="description" name="primeiro_paragrafo" placeholder="Primeiro paragrafo"></textarea>
   
           </div>
   
           <div class="input-group">
             <label class="sr-only" for="segundo_paragrafo">Segundo paragrafo</label>
             <textarea type="text" id="description" name="segundo_paragrafo" placeholder="Segundo paragrafo"></textarea>
   
           </div>
   
           <div class="input-group">
             <label class="sr-only" for="terceiro_paragrafo">Terceiro paragrafo</label>
             <textarea type="text" id="description" name="terceiro_paragrafo" placeholder="Terceiro paragrafo"></textarea>
           </div>
   
           <label>img: </label>
           <input type="file" name="img_blog" require><br><br>
   
           <div class="input-group actions">
             <a href="publicacoes-blog.php" class="button cancel cadastrar">Cancelar</a>
             <input type="submit" value="Salvar" class="button cadastrar">
           </div>
         </form>
       </div>
     </div>
   </div>
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

  <script src="./js/theme.js"></script>
  <script src="./js/font.js"></script>
  <script src="./js/profile.js"></script>
  <script src="./js/mobile-menu.js"></script>
</body>

</html>