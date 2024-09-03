<?php

if (!isset($_SESSION["usuario"]) or empty($_SESSION["usuario"])) {
    header('Location: http://localhost/Crud-POO/view/page/login.php');
} 

?>