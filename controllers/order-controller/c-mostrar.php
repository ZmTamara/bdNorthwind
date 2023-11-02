<?php
require_once '../../model/crud_model.php';

$crudModel = new crud_model();
$redirectLocation = null;

// mostrar customers
$result = $crudModel->mostrarOrders();
if ($result !== null) {
    $redirectLocation = "http://localhost/Login/views/principales-tb-relaci/customers_order.php";
} else {
    echo "Error en la consulta";
}
?>