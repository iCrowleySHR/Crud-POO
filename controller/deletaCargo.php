<?php

require '../../model/classCargo.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $value = Cargo::read('codCargo = '.$_GET['cod']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $result = Cargo::delete('codCargo = '.$_GET['cod']);
}