<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="csc.css">
    <title>Document</title>
</head>
<body>
    <h1>Formulario persona<h1>
        <form action="" method="POST">
            <label for="nombre" >Nombre</label>
            <input type="text" name="nombre" required>

            <label for="telefono" >Telefono</label>
            <input type="text" name="telefono" required>

            <label for="edad" >Edad</label>
            <input type="number" name="edad" required>
            <input type="submit"  value="enviar datos">
</form>

</body>
</html>

<?php
include 'persona.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre=($_POST['nombre']);
    $telefono=($_POST['telefono']);
    $edad=($_POST['edad']);
}
try{
    $persona1 = new persona($nombre, $telefono, $edad);
    
echo "<br>";
echo "<div class='persona'>";
$persona1->mostrarPersona();
echo "</div>";
}
 catch(Exception $error){
    echo $error ->getMessage();
 }

 


?>