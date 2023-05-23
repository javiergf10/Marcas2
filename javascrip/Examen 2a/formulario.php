<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>tabla</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="estiloExamen.css">
    <script src='main.js'></script>

    
</head>

<body>
<?php
    if (isset($_POST['submit'])) {
        if (empty($nombre)) {
            echo "<p> class='error'> Falta el nombre </p>";
        }
        if (empty($apellidos)) {
            echo "<p> class='error'> Falta el nombre </p>";
        }
        if (empty($dni)) {
            echo "<p> class='error'> Falta el nombre </p>";
        }
    }
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];


    

    ?>
    <table border="1">
        <tr>
            <th>Datos</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>Nombre</td>
            <td>
                <?php echo $nombre; ?>
            </td>

        </tr>
        <tr>
            <td>Apellidos</td>
            <td><?php echo $apellidos; ?></td>
        </tr>
        <tr>
            <td>DNI</td>
            <td><?php echo $dni; ?></td>

        </tr>
    </table>
</body>

</html>