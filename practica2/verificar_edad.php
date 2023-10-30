<?php
// Recoger el valor del "Total de Compra" enviado desde el formulario
if (isset($_POST["edadUsuario"])) {
    $edadUsuario = intval($_POST["edadUsuario"]);
    
    // Verificar si el total de compra es mayor a 100 euros
    if ($edadUsuario >= 18) {
        echo "¡Bienvenido! Eres mayor de edad y puedes acceder a todas las funcionalidades.";
    } else if ($edadUsuario < 18) {
        echo "Lo
        sentimos, debes ser mayor de edad para acceder ";
    }
} else {
    echo "Porfavor ingrese un valor valido.";
}
?>

