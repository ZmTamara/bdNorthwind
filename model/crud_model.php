<?php 
class crud_model {
    //CUSTOMERS
    public function mostrarCustomers(){
        include 'connection.php';
        $conexion = new connection(); 
        $conn=$conexion->conexion();

        $sql = "CALL selec_customers()";
        $result = $conn->query($sql);
        
        return $result;
    }

    public function eliminarCustomers($nombreUsuario, $contrasena){
        include 'connection.php';
        $conexion = new connection(); 
        $conn=$conexion->conexion();

        $sql = "SELECT * FROM administradores WHERE  user_adm= '$nombreUsuario' AND pass_adm = '$contrasena'";
        $result = $conn->query($sql);
        
        return $result;
    }

    public function editarCustomers($nombreUsuario, $contrasena){
        include 'connection.php';
        $conexion = new connection(); 
        $conn=$conexion->conexion();

        $sql = "SELECT * FROM administradores WHERE  user_adm= '$nombreUsuario' AND pass_adm = '$contrasena'";
        $result = $conn->query($sql);
        
        return $result;
    }

    public function crearCustomers($nombreUsuario, $contrasena){
        include 'connection.php';
        $conexion = new connection(); 
        $conn=$conexion->conexion();

        $sql = "SELECT * FROM administradores WHERE  user_adm= '$nombreUsuario' AND pass_adm = '$contrasena'";
        $result = $conn->query($sql);
        
        return $result;
    }
}
?>