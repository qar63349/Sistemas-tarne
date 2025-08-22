<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Saludo</h1>
    <?php
    $nombre = "Jose";

    saludar($nombre);
    $nombre1="Maria";
    //programar la funcion saludar
    
    saludar($nombre1);
    function saludar($n1){
        echo" Hola $n1, bienvenido a mi pagina <br>";

    }
    ?>

</body>
</html>