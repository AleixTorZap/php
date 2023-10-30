<!DOCTYPE html>
<html>
<head>
    <title>Validar Correo Electrónico</title>
</head>
<body>
    <h1>Validar Correo Electrónico</h1>

    <?php
    $CorreoValido = false;

    do {
        if (isset($_POST['correo'])) {
            $correo = $_POST["correo"];
            // Validar la dirección de correo electrónico
            if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                echo '<p style="color: green;">Correo electronico valido!<p>';
                $CorreoValido = true;
                break;
            } else {
                echo '<p style="color: red;">Correo electrónico no válido. Inténtalo de nuevo.</p>';
            }
        } 
    } while ($CorreoValido);
 ?>
           
            <form method="post" action="validar_correo.php">
                <label for="correo">Ingrese su dirección de correo electrónico:</label>
                <input type="text" id="correo" name="correo" required>
                <input type="submit" value="Validar">
            </form>
        
   
    


</body>
</html>
