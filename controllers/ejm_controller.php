<?php
require_once '../model/crud_model.php';

$crudModel = new crud_model();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $p_apellido = $_POST['p_apellido'];
    $p_nombre = $_POST['p_nombre'];

    // Insertar usuario / Registrar
    if ($result = $crudModel->insertarejm($p_apellido, $p_nombre)) {
    } else {
        echo "No se pudo insertar, intente otra vez";
    }
    header("Location:../views/principales/ejm.php");
}
