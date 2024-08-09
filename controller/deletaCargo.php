<<<<<<< HEAD
<?php

require '../../model/classCargo.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $value = Cargo::read('codCargo = '.$_GET['cod']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $result = Cargo::delete('codCargo = '.$_GET['cod']);
=======
<?php

require '../../model/classCargo.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $value = Cargo::read('codCargo = '.$_GET['cod']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $result = Cargo::delete('codCargo = '.$_GET['cod']);
>>>>>>> 3ad4d8f2927c122bc9bc68b13c48c6b2b2171afa
}