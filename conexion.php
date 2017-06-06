<?php

session_start();

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "tiendalibros";
$tbl_name = "clientes";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
}
if (isset($_POST['ingresar'])) {
    $username = $_POST['correo'];
    $password = $_POST['contraseñ'];
    $administrador = 'Administrador';

    $sql = "SELECT * FROM $tbl_name WHERE email = '$username'";
    $result = $conexion->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($password == $row['password']) {
            $_SESSION['username'] = $username;
            $_SESSION['id_cliente'] = $row['id_cliente'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['apellido'] = $row['apellido'];
            $_SESSION['ciudad'] = $row['ciudad'];
            $_SESSION['direccion'] = $row['direccion'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            if ($row['tipoUsuario'] == $administrador) {
                header('Location: administrador.php');
                exit();
            } else {
                header('Location: perfil.php');
                exit();
            }
        } else {
            echo "Correo electronico  o Contraseña estan incorrectos.";

            echo "<br><a href='index.php'>Volver a Intentarlo</a>";
        }
    }
}
?>
