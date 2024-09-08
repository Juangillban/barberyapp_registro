<?php
include("con_db.php");

if (isset($_POST['Registrarse'])) {
    if (
        strlen($_POST['name']) >= 1 && 
        strlen($_POST['email']) >= 1 && 
        strlen($_POST['age']) >= 1 && 
        strlen($_POST['phone']) >= 1 && 
        strlen($_POST['country']) >= 1 && 
        strlen($_POST['state']) >= 1 && 
        strlen($_POST['city']) >= 1
    ) {
        // Escapar los datos para evitar inyección SQL
        $name = $conn->real_escape_string(trim($_POST['name']));
        $email = $conn->real_escape_string(trim($_POST['email']));
        $age = $conn->real_escape_string(trim($_POST['age']));
        $phone = $conn->real_escape_string(trim($_POST['phone']));
        $country = $conn->real_escape_string(trim($_POST['country']));
        $state = $conn->real_escape_string(trim($_POST['state']));
        $city = $conn->real_escape_string(trim($_POST['city']));
        $fecha_reg = date("Y-m-d"); // Cambiado el formato de fecha a un formato más estándar

        // Creación de la consulta SQL
        $consulta = "INSERT INTO barberyapp_registro (nombre_apellidos, correo_electronico, edad, telefono_celular, pais, departamento, ciudad, fecha_reg) 
                    VALUES ('$name', '$email', '$age', '$phone', '$country', '$state', '$city', '$fecha_reg')";

        // Ejecución de la consulta y comprobación del resultado
        if ($conn->query($consulta) === TRUE) {
            echo "Registro exitoso";
        } else {
            echo "Error: " . $consulta . "<br>" . $conn->error;
        }
        
        // Cerrar la conexión
        $conn->close();
    } else {
        echo "Por favor, complete todos los campos.";
    }
}
?>

