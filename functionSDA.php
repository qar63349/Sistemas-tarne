<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Declara 3 notas para calcular el promedio</h1>
    <form method="POST" action="">

    <label for=nombre >Nombre: </label>
    <input type="text" name="nombre" required> <br> <br>
    
    <label for=nota1>Primera nota: </label>
    <input type="number" id="nota1" name="nota1" required> <br> <br>

    <label for=nota2>Segunda nota: </label>
    <input type="number" id="nota2" name="nota2" required> <br> <br>

    <label for=nota3>Tercera nota: </label>
    <input type="number" id="nota3" name="nota3" required> <br> <br>

    <input type="submit" value="enviar">  
    <input type="reset" value="limpiar">
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre= $_POST['nombre'];
    $n1= $_POST['nota1'];
    $n2= $_POST['nota2'];
    $n3= $_POST['nota3'];
        if ($n1<0 || $n1>100 || $n2 <0|| $n2>100|| $n3<0 || $n3>100){
            echo "Inserte digitos válidos";
            exit;
        }

    CalcularNotaFinal($nombre,$n1,$n2,$n3);
    } else{
        $n1=0;
        $n2=0;
        $n3=0;
    }

    function CalcularNotaFinal($nombre,$n1,$n2,$n3){
        $result = ($n1+$n2+$n3)/3;
        echo"El promedio es: $result";
        if($result > 61){
            echo " <br> $nombre Felicidades , aprobaste";
        }
        else{
            echo " <br> $nombre reprobaste exitosamente";
        }

    }

    ?>
   
</body>
</html>