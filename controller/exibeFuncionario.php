
<?php

require '../../model/classFuncionario.php';

$result = Funcionario::read(null, 'funcional ASC', null, 'cargo.codCargo, cargo.nomeCargo, departamento.nomeDepartamento, departamento.codDepartamento, funcionario.*');
