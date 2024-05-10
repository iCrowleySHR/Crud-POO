<?php

require '../../model/classDepartamento.php';

$result = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $result = Departamento::create(['nome' => $_POST['nome']]);
}