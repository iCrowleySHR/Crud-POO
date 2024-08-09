<<<<<<< HEAD
<?php

require '../../model/classFuncionario.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $value = Funcionario::read('funcional = '.$_GET['cod']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $result = Funcionario::delete('funcional = '.$_GET['cod']);
=======
<?php

require '../../model/classFuncionario.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $value = Funcionario::read('funcional = '.$_GET['cod']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $result = Funcionario::delete('funcional = '.$_GET['cod']);
>>>>>>> 3ad4d8f2927c122bc9bc68b13c48c6b2b2171afa
}