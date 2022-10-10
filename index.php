<?php
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo "<div class='error' id='email-obrigatorio'>O e-mail é obrigatorio.</div>";
    } else if (strlen($_POST['senha']) == 0) {
        echo "<div class='error' id='senha-obrigatoria'>A senha é obrigatória</div>";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM users WHERE email = '$email' AND password = md5('{$senha}')";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['name'] = $usuario['name'];
            $_SESSION['email'] = $usuario['email'];


            header("Location: cadastro.php");
        } else {
            echo "<div align='center' class='sizebox'><div align='center' class='alerta-senha-email'>Falha ao logar! E-mail e/ou senha incorretos.</div></div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Paes Leme | Multi-Cadastro</title>
    <meta charset="UTF-8" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script crossorigin="anonymous" defer="defer" type="application/javascript" src="main.js"></script>

<body>
    <!--slide de imagens fundo-->
    <div class="container">
        <?php include("slide.twig") ?> </div>
    <div class="sombreamento">
        <div class="login-box">
            <!-- fim slide de imagens fundo-->

            <div class="alinhamento">
                <img src="imagens/logo.png">
            </div>

            <form name="" method="POST" action="">
                <div class="user-box">
                    <input class="user" type="email" name="email" id="email" onchange="onChangeEmail()" required="">
                    <label>Email:</label>
                    <div class="error" id="email-obrigatorio">O e-mail é obrigatorio.</div>
                    <div class="error" id="email-invalido">Insira um email válido.</div>
                </div>
                <div class="user-box">
                    <input class="user" type="password" name="senha" id="password" onchange="onChangePassword()" required="">
                    <div class="error" id="senha-obrigatoria">A senha é obrigatória</div>
                    <label>Senha:</label>
                </div>
                <div class="alinhamento">
                    <div class="global"></div>
                    <input class="botao" type="submit" name="submit" id="entrar" disabled="true" value="entrar ">
                </div>
                <div class="error" id="senha-obrigatoria">A senha é obrigatória</div>

                <span></span>
                <span></span>
                <span></span>
                <span></span>
                </a>
            </form>
        </div>
    </div>

</body>

</html>