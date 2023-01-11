<?php

include("con_db.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1&& strlen($_POST['message']) >= 1) {
        $nombre = trim($_POST['name']);
        $correo = trim($_POST['email']);
        $msj = trim($_POST['message']);
        $consulta = "INSERT INTO info(nombre, email, mensaje) VALUES ('$nombre','$correo','$msj')";
        $resultado = mysqli_query($conexion,$consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">¡Registro correctamente!</h3>
            <?php
        } else {
            ?>
            <h3 class="error">¡Ha ocurrido un error!</h3>
            <?php
        }
    }   else {
        ?>
        <h3 class="error">¡Por favor complete los campos!</h3>
        <?php
    }
}
?>