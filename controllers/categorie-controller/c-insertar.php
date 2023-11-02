<?php
require_once '../../model/crud_model.php';
$crudModel = new crud_model();
$redirectLocation = null;

if (isset($_POST['submit'])) {
    $crudModel->insertCategory($_POST['CategoryName'], $_POST['Description'], $_POST['Picture']);
    echo  $crudModel;
}

if (isset($_POST['submit'])) {
    $categoryID = $_POST['CategoryName']; 
    $categoryID = $_POST['Description']; 
    $categoryID = $_POST['Picture']; 
    $result = $crudModel->deleteCategory($categoryID); 
    if ($result) {
        $redirectLocation = "http://localhost/Login/views/principales/Categories.php";
        header("Location: $redirectLocation");
        exit;
    } else {
        echo "Error al eliminar el cliente.";
    }
} else {
    echo "ID de cliente no proporcionado.";
}
?>