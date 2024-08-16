
<?php
include '../../model/classFuncionario.php';
include 'ImageManager.php';

$result = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $values = [
        'cpf'             => $_POST['cpf'],
        'nome'            => $_POST['nome'],
        'telefone'        => $_POST['telefone'],
        'endereco'        => $_POST['endereco'],
        'codDepartamento' => $_POST['codDepartamento'],
        'codCargo'        => $_POST['codCargo'],
        'created_at'      => $_POST['datetime'],
        'image_url'       => ImageManager::sendFileEmployee($_FILES['image_url']) 
    ];

    $result = Funcionario::create($values);
}


