<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PLANILLA DE SUELDOS</h1>

    <form method="POST" action="">

    <label for="nombre">Nombre : </label>
    <input type="text" name="nombre" required> <br> <br>

    <label for="sueldobasico">SUELDO BASICO: </label>
    <input type="number" id="sueldobasico" name="sueldobasico" required> <br> <br>

    <label for="bono">BONO: </label>
    <input type="number" id="bono" name="bono" required> <br> <br>

    <input type="submit" value ="enviar">
    <input type="reset" value ="limpiar">

    </form>
    <?php
    

    

    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $nombre=$_POST['nombre'];
        $sueldobasico =$_POST['sueldobasico'];
        $bono=$_POST['bono'];
        
        if ($sueldobasico < 0 || $sueldobasico > 3000 || $bono < 50 || $bono > 700 ){
            echo "por favor , ingresa valores validos en sueldo y bono.";
            exit;
        }


        else{
        calcularSueldofinal($nombre,$sueldobasico,$bono);
        }
        

    } else {

        $sueldobasico=0;
        $bono=0;
        $nombre;
    }

    function calcularSueldofinal($nombre,$sueldobasico,$bono){
        $descuentoAFP=($sueldobasico*0.13);
        $sueldoTotal=$sueldobasico + $bono - $descuentoAFP;
        echo "NOMBRE DEL EMPLEADO: $nombre <br>";
        echo "SUELDO BASICO: $sueldobasico <br>";
        echo "BONO: $bono <br>";
        echo "DESCUENTO AFP: $descuentoAFP <br>";
        echo "SUELDO TOTAL : $sueldoTotal <br>";

    }


    ?>
</body>
</html>