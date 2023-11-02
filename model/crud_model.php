<?php
class crud_model
{
    public function mostrarCustomers()
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_customers_sel()";
        $result = $conn->query($sql);

        return $result;
    }

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

    public function mostrarCategories()
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_categories_sel()";
        $result = $conn->query($sql);

        return $result;
    }

    public function insertCustomers($CompanyName, $ContactName, $ContactTitle, $Address, $City, $Region, $PostalCode, $Country, $Phone, $Fax)
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_customers_ins()";
        $result = $conn->query($sql);

        return $result;
    }
    public function insertEmployees()
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_categories_sel()";
        $result = $conn->query($sql);

        return $result;
    }
    public function insertProducts()
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_categories_sel()";
        $result = $conn->query($sql);

        return $result;
    }
    public function insertOrders()
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_categories_sel()";
        $result = $conn->query($sql);

        return $result;
    }
    public function insertCategories($CategoryName, $Description)
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_categories_ins()";
        $result = $conn->query($sql);

        return $result;
    }
    public function updateCustomers()
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_categories_sel()";
        $result = $conn->query($sql);

        return $result;
    }
    public function deleteCustomers($CustomerID)
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL DeleteCustomerCascade('')";
        $result = $conn->query($sql);

        return $result;
    }
    public function deleteCategories($CategoryID)
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_categories_del('$CategoryID')";
        $result = $conn->query($sql);

        return $result;
    }
}
