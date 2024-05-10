<?php

require '../../model/classFuncionario.php';

$result = Funcionario::read( null, 'funcional ASC');
