<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>Home</title>
</head>
<body>
    <header class="container">
        <div class="topnav">
            <script src="../js/navbar.js"></script>
            <link rel="stylesheet" href="../css/navbar.css">
            <a href="home.php" class="active">Home</a>
            <a href="#">Nossa história</a>
            <a href="#">Suporte</a>
            <a href="index.php">Logout</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="logo">
            <img src="../imagens/autocar.png" alt="foto">
            <h2>CAR TICKET</h2>
        </div>
    </header>
    <section class="sessao-1 container">
        <div class="cardleft">
            <img src="../imagens/car_left.png" alt="foto">
        </div>
        <div class="cardright">
            <h2>Seja Bem-Vindo ao meu site.</h2>
            <p>Aqui você pode cadastrar seu veículo de um forma segura e rápida.</p>
            <a class="button" href="#">Leia nossos Termos</a>
        </div>
    </section>
    <section class="sessao-2 container">
        <h2>INFORMAÇÕES</h2>
        <div class="cards">
            <div class="card">                
                <img style="height: 64px; width: 64px;" src="../imagens/adicionar.png" alt="foto">
                <br>
                ADICIONA INFORMAÇÕES                
            </div>
            <div class="card">                
                <img style="height: 64px; width: 64px;" src="../imagens/alterar.png" alt="foto">
                <br>
                ALTERAR INFORMAÇÕES
            </div>
            <div class="card">            
                <img style="height: 64px; width: 64px;" src="../imagens/consultar.png" alt="foto">
                <br>
                CONSULTAR VEÍCULO
            </div>
        </div>
    </section>
    <section class="sessao-3 container">
        <div class="cards">
            <div class="card">                
                <img style="height: 64px; width: 64px;" src="../imagens/excluir.png" alt="">
                <br>
                EXCLUIR VEÍCULO
            </div>
        </div>
    </section>
</body>
</html>