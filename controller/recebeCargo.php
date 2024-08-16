
<?php

require '../../model/classCargo.php';

$result = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $values = [
        'nome'       => $_POST['nome'],
        'created_at' => $_POST['datetime'],
        'salario'    => $_POST['salario']
    ];
    $result = Cargo::create($values);
}