<?php
require_once '../../model/crud_model.php';

$crudModel = new crud_model();

// mostrar customers
$result = $crudModel->mostrarCustomers();
if ($result !== null) {
    header("Location:http://localhost/Login/views/principales/Customers.php");
    } else {
        echo "Error en la consulta";
    }

//mostrar employees
$resulte = $crudModel->mostrarEmployees();
if ($resulte !== null) {
    header("Location:http://localhost/Login/views/principales/employees.php");
    } else {
        echo "Error en la consulta";
        }
?>