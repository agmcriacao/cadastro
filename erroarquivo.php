<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="cadastro.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<head>
    <title>Multi-Cadastro | Usuário</title>
    <favicon src="logo.png">
</head>

<body style="height: 100vh;overflow: hidden;background: #000;">
    <div class="blur">

        <?php include("slide.twig") ?></div>
        <div class="bodyy">
        

        <div align="center" class="container" style="
    background: #011657;
    min-inline-size: -webkit-fill-available;
">
            <div class="row">
                <div class="col-1">

                </div>
                <div class="col-6">
                    <div align="center">
                        <h3 alt="para realizar o cadastro de usuarios em massa, baixe e utilize o arquivo css padrão." class="cabecalho">CADASTRO DE USUÁRIOS</h3>
                    </div>
                </div>
                <div class="col-1" style="padding: 10px 0px;position: absolute;right: 45px;color: white!important;top: 5px;">
                    <a align="right" href="logout.php">Sair</a>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="container">
                <div class="out"><?php echo $_SESSION["name"]; ?>, ocorreu um erro.<bR></div>
                <div class="jumbotron">
                    <div class="container">
                        <div class="row" style="color:crimson;FONT-WEIGHT: 700;">
                            ARQUIVO INVALIDO! UTILIZE UM ARQUIVO CSV PARA IMPORTAR USUÁRIOS!
                        </div>
                        <div align="right" style="margin-top: 13px;">
                                    <br align="right">
                                    <div class="row">
  <div class="col-sm-8"><a href="exemplo/usuario.csv"><div class="button">BAIXAR ARQUIVO DE EXEMPLO</div><a></div>
  <div class="col-sm-4"><a href="cadastro.php"><div class="button">INICIO</div><a></div>
</div>
                                    
                                </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</body>

</html>