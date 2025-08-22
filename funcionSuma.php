<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OPERACIONES</h1>
    <?php
    
    sumar(80,10);
    restar(80,10);
    multiplicar(10,10);
    dividir(10,5);

    function sumar($n1 , $n2){
        
        $resu = $n1 + $n2;
        echo"la respuesta de la suma es: $resu <br>";
    }

    function restar($n1 , $n2){
        
        $resu= $n1 - $n2;
        echo"la respuesta de la resta es: $resu <br>";
    }
    function multiplicar($n1,$n2){
        $multi= $n1 * $n2;
        echo"La respuesta de la multiplicacion es: $multi <br>";
    }
    function dividir($n1,$n2){
        $divi= $n1 / $n2;
        echo"La respuesta de la division es: $divi <br>";
    }



    ?>    

</body>
</html>