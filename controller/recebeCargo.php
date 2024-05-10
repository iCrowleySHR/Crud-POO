<?php

require '../../model/classCargo.php';

$result = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $result = Cargo::create(['nome' => $_POST['nome']]);
}