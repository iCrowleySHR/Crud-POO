<?php
include '../../model/classFuncionario.php';

$result = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $values = [
        'cpf'             => $_POST['cpf'],
        'nome'            => $_POST['nome'],
        'telefone'        => $_POST['telefone'],
        'endereco'        => $_POST['endereco'],
        'codDepartamento' => $_POST['codDepartamento'],
        'codCargo'        => $_POST['codCargo']
    ];
    $result = Funcionario::create($values);
}


