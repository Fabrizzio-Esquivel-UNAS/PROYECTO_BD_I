<?php 
    session_start();
    if (isset($_SESSION["usuario"])){
        include 'body.php';
        include 'footer.php';
    }else{
        header("Location: https://localhost/PROYECTO_DB_I/");
    }
?>