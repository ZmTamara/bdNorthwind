<?php
class crud_model
{
    //CUSTOMERS 
    public function mostrarCustomers()
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_customers_sel()";
        $result = $conn->query($sql);

        return $result;
    }







    //EMPLOYEES

    public function mostrarEmployees()
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_employees_sel()";
        $result1 = $conn->query($sql);

        return $result1;
    }

    public function mostrarProducts()
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_products_sel()";
        $result = $conn->query($sql);

        return $result;
    }

    public function mostrarOrders()
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_orders_sel()";
        $result = $conn->query($sql);

        return $result;
    }




    //CATEGORIES

    public function mostrarCategories()
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_categories_sel()";
        $result = $conn->query($sql);

        return $result;
    }

    public function insertarCategories($p_CategoryName)
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();
        $sql = "CALL spu_categories_ins($p_CategoryName)";
        $result = $conn->query($sql);

        return $result;
    }


    public function insertarcustomers($p_CustomerID, $p_CompanyName, $p_ContactName, $p_ContactTitle, $p_Adress, $p_City, $p_Region, $p_PostalCode, $p_Country, $p_Phone, $p_Fax)
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();
        $sql = "CALL spu_customers_ins($p_CustomerID, $p_CompanyName, $p_ContactName, $p_ContactTitle, $p_Adress, $p_City, $p_Region, $p_PostalCode, $p_Country, $p_Phone, $p_Fax)";
        $result = $conn->query($sql);

        return $result;
    }





    public function insertarejm($p_apellido, $p_nombre)
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_ejm_ins('$p_apellido', '$p_nombre')";
        $result = $conn->query($sql);

        return $result;
    }


    public function mostrarejm()
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_ejm_sel()";
        $result = $conn->query($sql);

        return $result;
    }
}
