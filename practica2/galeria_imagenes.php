<!DOCTYPE html>
<html>
<head>
 <title>Galería de Imágenes</title>
</head>
<body>
 <h1>Galería de Imágenes</h1>

 <div class="gallery">
 <?php
 // Bucle "for" para generar las etiquetas de imagen
 for ($i = 1; $i <= 5; $i++) {
     echo '<img src="imagen/' . $i . '.jpg" alt="' . $i . '">';
 }
 ?>
 </div>

</body>
</html>
