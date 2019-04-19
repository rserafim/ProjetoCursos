<?php
  include "inc/head.php";
  include "inc/header.php";
  require "rec/funcoesValidacao.php";

  //variaveis
  $nomeCurso = $_REQUEST["nomeCurso"];
  $precoCurso = $_REQUEST["precoCurso"];
  $nome = $_REQUEST["nomeCompleto"];
  $cpf = $_REQUEST["cpf"];
  $nroCartao = $_REQUEST["nroCartao"];
  $validade = $_REQUEST["validade"];
  $cvv = $_REQUEST["cvv"];
  $erros = [];

  validarCompra($nome, $cpf, $nroCartao, $validade, $cvv);

?>

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <?php if (count($erros) > 0) :?>
          <div class="panel panel-danger">
            <div class="panel-heading">
              <span>Preencha seus dados corretamente!</span>
            </div>
            <div class="panel-body">
              <ul class="list-group">
                <?php foreach($erros as $chave => $valorErro) : ?>
                  <li class="list-group-item">
                    <?= $valorErro ?>
                  </li>
                <?php endforeach; ?>
              </ul>
              <div class="center"><a href="index.php">Voltar para home</a></div>
            </div>
          </div>
        <?php else : ?>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <span>Compra realizada com sucesso!</span>
            </div>
            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item"><strong>Nome Curso: <?php echo $nomeCurso; ?></strong></li>
                <li class="list-group-item"><strong>Preço: R$ <?php echo $precoCurso; ?></strong></li>
                <li class="list-group-item"><strong>Nome Completo: </strong><?php echo $nome; ?></li>
              </ul>
              <div class="center"><a href="index.php">Voltar para home</a></div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php include "inc/footer.php"; ?>