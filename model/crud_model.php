<?php 
class crud_model {
    public function mostrarCustomers(){
        include 'connection.php';
        $conexion = new connection(); 
        $conn=$conexion->conexion();

        $sql = "CALL selec_customers()";
        $result = $conn->query($sql);
        
        return $result;
    }

    public function mostrarEmployees(){
        include 'connection.php';
        $conexion = new connection(); 
        $conn=$conexion->conexion();

        $sql = "CALL selec_employees()";
        $result1 = $conn->query($sql);
        
        return $result1;
    }

    public function mostrarProducts(){
        include 'connection.php';
        $conexion = new connection(); 
        $conn=$conexion->conexion();

        $sql = "CALL selec_products()";
        $result = $conn->query($sql);
        
        return $result;
    }

    public function mostrarOrders(){
        include 'connection.php';
        $conexion = new connection(); 
        $conn=$conexion->conexion();

        $sql = "CALL selec_order()";
        $result = $conn->query($sql);
        
        return $result;
    }
}
?>