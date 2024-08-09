<<<<<<< HEAD
<?php

require '../../model/classCargo.php';

$result = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $values = [
        'nome'       => $_POST['nome'],
        'created_at' => $_POST['datetime']
    ];
    $result = Cargo::create($values);
}