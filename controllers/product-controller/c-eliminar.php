<?php
require_once '../../model/crud_model.php';

$crudModel = new crud_model();
$redirectLocation = null;

if (isset($_POST['productID'])) {
    $productID = $_POST['productID']; // Obtén el valor del formulario
    $result = $crudModel->deleteProduct($productID); // Utiliza $customerID en lugar de $diferente

    if ($result) { // Verifica si la operación de eliminación fue exitosa
        $redirectLocation = "http://localhost/Login/views/principales/Products.php";
        header("Location: $redirectLocation");
        exit;
    } else {
        echo "Error al eliminar el cliente.";
    }
} else {
    echo "ID de cliente no proporcionado.";
}

?>
