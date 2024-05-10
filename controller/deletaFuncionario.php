<?php

require '../../model/classFuncionario.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $value = Funcionario::read('funcional = '.$_GET['cod']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $result = Funcionario::delete('funcional = '.$_GET['cod']);
}