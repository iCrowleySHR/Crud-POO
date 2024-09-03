<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['removeLoginUsuario'])) {
        unset($_SESSION['usuario']);
        header('Location: http://localhost/Crud-POO/view/page/login.php');
    }
}