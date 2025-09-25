<?php
$errores = [];
$enviado = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $correo = $_POST['correo'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $dui = $_POST['dui'] ?? '';

    if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i", $correo)) {
        $errores['correo'] = "Correo no válido";
    }

    if (!preg_match("/^[2678]\d{7}$/", $telefono)) {
        $errores['telefono'] = "Teléfono inválido";
    }

    if (!preg_match("/^\d{8}-\d$/", $dui)) {
        $errores['dui'] = "DUI inválido";
    }

    if (empty($errores)) {
        $enviado = true;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="/mvc_clase/public/css/general.css">
</head>
<body>
    <nav class="nav-principal">
    <a href="Home" >Home</a>
    <a href="Inicio" >Perfil</a>
    <a href="Lenguaje" >Lenguajes</a>
    <a href="Contactar" >Contacto</a>
    </nav>
    <h1>Formulario de Contacto</h1>
    <p>Si tienes alguna duda o necesitas mas información enviame un correo donde te responderes lo mas breve posible</p>
    <?php if ($enviado): ?>
        <p>Formulario enviado correctamente.</p>
    <?php endif; ?>
<div class="contenedor">
    <form class="contacto" action="" method="post">
        <label>Correo electrónico:</label><br>
        <input type="text" name="correo" value="<?= htmlspecialchars($correo ?? '') ?>"><br>
        <span style="color:red;"><?= $errores['correo'] ?? '' ?></span><br>

        <label>Teléfono:</label><br>
        <input type="text" name="telefono" value="<?= htmlspecialchars($telefono ?? '') ?>"><br>
        <span style="color:red;"><?= $errores['telefono'] ?? '' ?></span><br>

        <label>DUI:</label><br>
        <input type="text" name="dui" value="<?= htmlspecialchars($dui ?? '') ?>"><br>
        <span style="color:red;"><?= $errores['dui'] ?? '' ?></span><br><br>

        <button type="submit">Enviar</button>
    </form>
</div>
</body>
</html>
