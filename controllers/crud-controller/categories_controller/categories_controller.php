<?php
require_once '../../model/crud_model.php';

$crudModel = new crud_model();
$redirectLocation = null;

// mostrar categories
$result = $crudModel->mostrarCategories();
if ($result !== null) {
    $redirectLocation = "http://localhost/Login/views/principales/Customers.php";
} else {
    echo "Error en la consulta";
}

//insertar categories
// $result = $crudModel->insertarCategories();
// if ($result !== null) {
//     $redirectLocation = "http://localhost/Login/views/principales/Customers.php";
// } else {
//     echo "Error en la consulta";
// }
