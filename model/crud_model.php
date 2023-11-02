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
    public function mostrarRegion()
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_region_sel()";
        $result = $conn->query($sql);

        return $result;
    }

    public function insertCustomer( $CompanyName, $ContactName, $ContactTitle, $Address, $City, $Region, $PostalCode, $Country, $Phone, $Fax)
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL InsertCustomer( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssss", $CompanyName, $ContactName, $ContactTitle, $Address, $City, $Region, $PostalCode, $Country, $Phone, $Fax);
        $stmt->execute();
        $stmt->close();

        return true;
    }
    public function insertCategory($CategoryName, $Description, $Picture)
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_categories_ins( $CategoryName, $Description, $Picture)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $CategoryName, $Description, $Picture);
        $stmt->execute();
        $stmt->close();

        return true;
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
    public function deleteCustomers($diferente)
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL DeleteCustomerCascade(?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $diferente); // "s" indica que es una cadena, ajusta según el tipo de dato de tu parámetro
        $stmt->execute();// Ejecuta el procedimiento almacenado
        $stmt->close(); // Cierra la sentencia preparada

        return true;
    }

    public function deleteEmployees($diferente1)
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL DeleteEmployeeCascade(?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $diferente1); 
        $stmt->execute();
        $stmt->close();

        return true;
    }

    public function deleteProduct($diferente2)
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_products_del(?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $diferente2); 
        $stmt->execute();
        $stmt->close();

        return true;
    }
    public function deleteCategory($diferente3)
    {
        include 'connection.php';
        $conexion = new connection();
        $conn = $conexion->conexion();

        $sql = "CALL spu_categories_del(?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $diferente3); 
        $stmt->execute();
        $stmt->close();

        return true;
    }
    
}
