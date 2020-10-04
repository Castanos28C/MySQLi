<?php
    include_once("./php/plantilla_cabeza.php");
?>

<form method="post">
    <h1>Registrarse</h1>
    <label>Nombre</label><br><input type="text" name="nombre" required><br><br>
    <label>Apellido</label><br><input type="text" name="apellido" required><br><br>
    <label>E-mail</label><br><input type="email" name="email" required><br><br>
    <label>Contraseña</label><br><input type="password" name="clave" required><br><br>
    <input type="submit" name="registrar" value="Guardar">
</form>

<?php
    include("registrar.php");
?>

<?php
    include_once("./php/plantilla_pie.php");