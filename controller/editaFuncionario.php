<?php

require '../../model/classFuncionario.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $value = Funcionario::read('funcional = '.$_GET['cod']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $values = [
        'cpf'             => $_POST['cpf'],
        'nome'            => $_POST['nome'],
        'telefone'        => $_POST['telefone'],
        'endereco'        => $_POST['endereco'],
        'codDepartamento' => $_POST['codDepartamento'],
        'codCargo'        => $_POST['codCargo']
    ];
  $result = Funcionario::update('funcional = '.$_GET['cod'], $values);
  $value = Funcionario::read('funcional = '.$_GET['cod']);
}