
<?php
require_once '../model/login_model.php';

$loginModel = new login_model();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreUsuario = $_POST["nombreUsuario"];
    $contrasena = $_POST["contrasena"];
 
    $result = $loginModel->validardatos($nombreUsuario,$contrasena);
    
    

    if ($result->num_rows == 1) {
        // Inicio de sesión exitoso
        header("Location: http://localhost/Login/views/index.php "); // Redirecciona a la página de bienvenida
        exit();
        
    } else {
        echo 'error';
        
    }  
}
?>

