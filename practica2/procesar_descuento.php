<?php
// Recoger el valor del "Total de Compra" enviado desde el formulario
if (isset($_POST["totalCompra"])) {
    $totalCompra = floatval($_POST["totalCompra"]);
    
    // Verificar si el total de compra es mayor a 100 euros
    if ($totalCompra > 100) {
        $descuento = $totalCompra * 0.1; // Calcular el 10% de descuento
        echo "¡Felicidades! Obtuviste un descuento especial del 10%. Tu descuento es de $descuento euros.";
    } else {
        echo "Tu compra no cumple con el monto mínimo para el descuento especial.";
    }
} else {
    echo "No se ha proporcionado el total de compra.";
}


?>
