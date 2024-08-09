<<<<<<< HEAD
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
=======
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
>>>>>>> 3ad4d8f2927c122bc9bc68b13c48c6b2b2171afa
}