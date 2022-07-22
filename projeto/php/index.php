<?php 
    include("conexao.php");

    if(isset($_POST['email']) || isset($_POST['senha'])){

        if(strlen($_POST['email'] == 0)){
            echo "Preencha o campo e-mail corretamente";
        } else if(strlen($_POST['email'] == 0)){
            echo "Preencha o campo da senha corretamente";
        } else {
            $email = $msqli->real_escape_string($_POST['email']);
            $senha = $msqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM login WHERE email == '$email' AND senha == '$senha'";
            $sql_query = $msqli->query($sql_code) or die("Falha na execução do código SQL" . $msqli->error);

            $quantidade = $sql_query->numrows;

            if($quantidade == 1){

                $usuario = $sql_query->fetch_assoc();
                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['id'] = $usuario['id'];
                header('php/home.php');

            } else {
                echo "Falha ao logar! E-mail ou senha incorretos";
            }
        }

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
            <h1 style="text-align: center; justify-content: center; font-size: 25px; font-family:'Times New Roman', Times, serif;">Car Ticket ⚙️</h1><br>
            <form action="php/home.php" method="post">
                <div class="input-icon">
                    <strong><label for="email" id="labelEmail">Digite o seu e-mail:</label></strong>
                    <i class="fa fa-user icon"></i>
                    <input type="text" name="email" id="login" name="login" autofocus required><br>
                    <strong><label for="password" id="labelPassword">Digite sua senha:</label></strong>
                    <i class="fa fa-lock icon"></i> 
                    <input type="password" name="senha" id="senha" required><br>
                    <a href="http://localhost/GitHub/TESTANDO_GIT/projeto/php/home.php">home</a>
                    <button type="submit" id="button">Logar</button>
                </div>
            </form>
            <script src="../js/login.js"></script>
    </div>
</body>
</html>