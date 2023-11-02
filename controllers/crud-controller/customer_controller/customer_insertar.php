<?php
require_once '../model/crud_model.php';

$crudModel = new crud_model();
$redirectLocation = null;

// $p_CompanyName = $_POST['p_CompanyName'];
// $p_ContactName = $_POST['p_ContactName'];
// $p_ContactTitle = $_POST['p_ContactTitle'];
// $p_Adress = $_POST['p_Adress'];
// $p_City = $_POST['p_City'];
// $p_Region = $_POST['p_Region'];
// $p_PostalCode = $_POST['p_PostalCode'];
// $p_Country = $_POST['p_Country'];
// $p_Phone = $_POST['p_Phone'];
// $p_Fax = $_POST['p_Fax'];

// // insertar categories
// $result = $crudModel->insertarcustomers($p_CompanyName, $p_ContactName, $p_ContactTitle, $p_Adress, $p_City, $p_Region, $p_PostalCode, $p_Country, $p_Phone, $p_Fax);
// if ($result !== null) {
//     $redirectLocation = "http://localhost/Login/views/principales/Customers.php";
// } else {
//     echo "Error en la consulta";
// }



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $p_CustomerID = $_POST['p_CustomerID'];
    $p_CompanyName = $_POST['p_CompanyName'];
    $p_ContactName = $_POST['p_ContactName'];
    $p_ContactTitle = $_POST['p_ContactTitle'];
    $p_Address = $_POST['p_Address'];
    $p_City = $_POST['p_City'];
    $p_Region = $_POST['p_Region'];
    $p_PostalCode = $_POST['p_PostalCode'];
    $p_Country = $_POST['p_Country'];
    $p_Phone = $_POST['p_Phone'];
    $p_Fax = $_POST['p_Fax'];

    // Insertar usuario / Registrar
    if ($result = $crudModel->insertarcustomers($p_CustomerID, $p_CompanyName, $p_ContactName, $p_ContactTitle, $p_Address, $p_City, $p_Region, $p_PostalCode, $p_Country, $p_Phone, $p_Fax)) {
        // $redirectLocation = "http://localhost/Login/views/principales/Customers.php";
        exit();
    } else {
        echo "No se pudo insertar, intente otra vez";
    }
}
