
<?php

require '../../model/classFuncionario.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $value = Funcionario::read('funcional = '.$_GET['cod'], 'funcional ASC', null, 'cargo.codCargo, cargo.nomeCargo, cargo.salario, departamento.nomeDepartamento, departamento.codDepartamento, funcionario.*');
}
  
