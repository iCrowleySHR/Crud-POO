
<?php

require '../../model/classCargo.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $value = Cargo::read('codCargo = '.$_GET['cod']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $result = Cargo::update('codCargo = '.$_GET['cod'], [
    'nome'        => $_POST['nome'],
    'updated_at'  => $_POST['datetime'],
    'salario'     => $_POST['salario']
  ]);
  $value = Cargo::read('codCargo = '.$_GET['cod']);
}