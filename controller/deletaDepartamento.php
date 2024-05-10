<?php

require '../../model/classDepartamento.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $value = Departamento::read('codDepartamento = '.$_GET['cod']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $result = Departamento::delete('codDepartamento = '.$_GET['cod']);
}