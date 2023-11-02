<?php
require_once '../../model/crud_model.php';
$crudModel = new crud_model();
$redirectLocation = null;

if (isset($_POST['submit'])) {
    $crudModel->insertCategory($_POST['CategoryName'], $_POST['Description'], $_POST['Picture']);
    echo 'si llega';
}
?>