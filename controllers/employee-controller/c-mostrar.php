<?php
require_once '../../model/crud_model.php';

$crudModel = new crud_model();
$redirectLocation = null;

// mostrar employees
$result = $crudModel->mostrarEmployees();
if ($result !== null) {
    $redirectLocation = "http://localhost/Login/views/principales/employees.php";
} else {
    echo "Error en la consulta";
}
?>