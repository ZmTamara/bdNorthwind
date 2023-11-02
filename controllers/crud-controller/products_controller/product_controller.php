<?php
require_once '../../model/crud_model.php';

$crudModel = new crud_model();
$redirectLocation = null;

// mostrar customers
$result = $crudModel->mostrarProducts();
if ($result !== null) {
    $redirectLocation = "http://localhost/Login/views/principales/Products.php";
} else {
    echo "Error en la consulta";
}
?>