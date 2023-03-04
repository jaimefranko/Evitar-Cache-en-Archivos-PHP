<?php 
$fechaSegundos = time(); // función que obtiene el tiempo 
$NoCache = "?nocache=$fechaSegundos"; // y aquí es donde ocurre la magia por ejemplo, 
// concatenar la variable $NoCache luego de la extensión de tu imagen //  
//cuando el navegador cargue te mostrará la imagen más reciente 
//sin importar si acabas de reemplazarla con algún cambio, 
//lo mismo aplica para archivos javascript
?>
<html>
    <body>
    <img src="images/mifotosexi.jpg<?php echo $NoCache;?>"> 
    <body>
</html>