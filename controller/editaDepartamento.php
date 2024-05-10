<?php

require '../../model/classDepartamento.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $value = Departamento::read('codDepartamento = '.$_GET['cod']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $result = Departamento::update('codDepartamento = '.$_GET['cod'], ['nome' => $_POST['nome']]);
  $value = Departamento::read('codDepartamento = '.$_GET['cod']);
}