<?php

    session_start();
    if(isset($_SESSION['usuario'])) {
        header("Location: view/visualizar");
    }else {
        header("Location: view/login.php");
    }

?>