<?php 
// category_controller.php
require_once '../../model/crud_model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    $crudModel = new crud_model();

    if ($action === "addCategory") {
        // Obtén los datos del formulario
        $CategoryName = $_POST['CategoryName'];
        $Description = $_POST['Description'];

        // Llama a una función en el modelo para insertar la categoría
        $result = $crudModel->insertCategories($CategoryName, $Description);

        if ($result === "success") {
            echo "success";
        } else {
            echo $result; // Puedes enviar un mensaje de error específico
        }
    }
}


?>