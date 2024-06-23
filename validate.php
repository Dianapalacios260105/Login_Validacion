<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $edad = $_POST['edad'];

    $errores = [];

    if (empty($user) || empty($password) || empty($edad)) {
        $errores[] = "Todos los campos son obligatorios.";
    }

    if (!is_numeric($edad) || $edad < 18) {
        $errores[] = "Debe ingresar una edad válida y ser mayor de 18 años.";
    }

    if ($user !== 'luis') {
        $errores[] = "El usuario no es correcto.";
    }

    if ($password !== 'mendoza') {
        $errores[] = "La contraseña no es correcta.";
    }

    if (empty($errores)) {
        echo "Login exitoso. Bienvenido, Luis!";
    } else {
        foreach ($errores as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
