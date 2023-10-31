<?php 
class login_model {

    public function validardatos($nombreUsuario, $contrasena){
        include 'connection.php';
        $conexion = new connection(); 
        $conn=$conexion->conexion();

        $sql = "SELECT * FROM administradores WHERE  user_adm= '$nombreUsuario' AND pass_adm = '$contrasena'";
        $result = $conn->query($sql);
        
        return $result;
    }
}
?>