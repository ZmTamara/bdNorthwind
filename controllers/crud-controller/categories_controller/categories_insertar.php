<?php
require_once '/xampp/htdocs/bdNorthwind/model/crud_model.php';

$crudModel = new crud_model();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $p_CategoryName = $_POST['p_CategoryName'];
    // $p_Description = $_POST['p_Description'];
    // $p_Picture = $_POST['p_Picture'];

    // Insertar usuario / Registrar
    if ($result = $crudModel->insertarCategories($p_CategoryName)) {
        // $redirectLocation = "http://localhost/Login/views/principales/Customers.php";

    } else {
        echo "No se pudo insertar, intente otra vez";
    }
}
