<?php 
    session_start();
    if (isset($_SESSION['user'])){
        header('Location: ../views/panel.php');
    } else {
        header('Location: ../views/login.php');
    }
?>