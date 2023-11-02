<?php
require_once '../../model/crud_model.php';

$crudModel = new crud_model();
$redirectLocation = null;

if (isset($_POST['categoryID'])) {
    $categoryID = $_POST['categoryID']; 
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

