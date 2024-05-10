<?php

require '../../model/classDepartamento.php';

$resultDepartamento = Departamento::read( null, 'codDepartamento ASC');