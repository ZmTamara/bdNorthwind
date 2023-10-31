<?php
class connection
{
    public function conexion()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "northwind";

        // Crear una conexión
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Verificar la conexión
        if (!$conn) {
            die("Conexión fallida: " . mysqli_connect_error());
        } return $conn;//else {
        // echo "Conexión exitosa";
//}

        // Aquí puedes ejecutar consultas SQL y realizar operaciones en la base de datos
    }
}
// Cerrar la conexión cuando hayas terminado
//$conn->close();
?>