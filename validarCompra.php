<?php 


    $nome = $_REQUEST["nomeCompleto"];
    $cpf = $_REQUEST["cpf"];
    $nroCartao = $_REQUEST["nroCartao"];
    $validadeCartao = $_REQUEST["validadeCartao"];
    $cvv = $_REQUEST["cvv"];
    $nomeCurso = $_REQUEST["nomeCurso"];
    $precoCurso = $_REQUEST["precoCurso"];

    
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span>Compra Realizada com Sucesso!</span>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nome Curso: <?php ?></strong><?php echo $nomeCurso?></li>
                        <li class="list-group-item"><strong>Preço: R$ </strong><?php echo $precoCurso?></li>
                        <li class="list-group-item"><strong>Nome Completo: </strong><?php echo $nome?></li>
                    </ul>
                    <div class="center">
                     <a href="index.php">Voltar para home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

                    
                    <?php echo $cpf?>
                    <?php echo $nroCartao?>
                    <?php echo $validadeCartao?>
