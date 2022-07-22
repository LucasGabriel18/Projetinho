<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        echo "Você não pode acessar essa página!, Por que não está logado";
    }
?>