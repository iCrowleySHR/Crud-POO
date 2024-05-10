<?php

require '../../model/classCargo.php';

$resultCargo = Cargo::read( null, 'codCargo ASC');
