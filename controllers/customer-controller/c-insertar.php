<?php
require_once '../../model/crud_model.php';
$crudModel = new crud_model();
$redirectLocation = null;

if (isset($_POST['submit'])) {
    $crudModel->insertCustomer($_POST['CompanyName'], $_POST['ContactName'], $_POST['ContactTitle'], $_POST['Address'], $_POST['City'], $_POST['Region'], $_POST['PostalCode'], $_POST['Country'], $_POST['Phone'], $_POST['Fax']);

    $redirectLocation = "http://localhost/Login/views/principales/Customers.php";
    exit;
}
?>