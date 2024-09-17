<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $agree = isset($_POST['agree']) ? true : false;

    // Valida si todos los campos están completos
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "<script>alert('Complete todos los campos.'); window.history.back();</script>";
        exit;
    }

    // Valida que el usuario haya aceptado los términos
    if (!$agree) {
        echo "<script>alert('Debe aceptar los términos y condiciones.'); window.history.back();</script>";
        exit;
    }

    // Valida que las contraseñas coincidan
    if ($password !== $confirm_password) {
        echo "<script>alert('Las contraseñas no coinciden.'); window.history.back();</script>";
        exit;
    }

    // Valida el formato del email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Formato de email no valido.'); window.history.back();</script>";
        exit;
    }

    // Encriptar la contraseña
    $user_data = array(
        'username' => $username,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT) // Encriptar la contraseña
    );

    // Lee o crea archivo de usuarios
    $file_path = '../data/users.json';
    if (file_exists($file_path)) {
        $json_data = file_get_contents($file_path);
        $data = json_decode($json_data, true);
    } else {
        $data = array();
    }

    // Añade los nuevos datos del usuario
    $data[] = $user_data;

    // Guardar los datos de vuelta en el archivo JSON
    file_put_contents($file_path, json_encode($data, JSON_PRETTY_PRINT));

    // Mostrar mensaje de éxito y redirigir
    echo "<script>
        alert('Registro exitoso, redirigiendo a la página anterior...');
        setTimeout(function() {
            window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
        }, 1000); 
    </script>";
    exit;
}
?>
