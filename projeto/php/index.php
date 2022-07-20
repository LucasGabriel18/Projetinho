<?php 
    include("conexao.php");
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
            <form action="php/cadastro.php" method="post">
                <div class="input-icon">
                    <strong><label for="email" id="labelEmail">Digite o seu e-mail:</label></strong>
                    <i class="fa fa-user icon"></i>
                    <input type="text" name="login" id="login" name="login" autofocus required><br>
                    <strong><label for="password" id="labelPassword">Digite sua senha:</label></strong>
                    <i class="fa fa-lock icon"></i> 
                    <input type="password" name="senha" id="senha" required><br>
                    <button type="submit" id="button">Logar</button>
                </div>
            </form>
            <script src="../js/login.js"></script>
    </div>
</body>
</html>