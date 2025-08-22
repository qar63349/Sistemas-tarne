<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>VENTA DE PRODUCTOS</h1>

    <form method="POST" action="">

        <label for="producto">Nombre del Producto: </label>
        <input type="text" name="producto" required> <br><br>

        <label for="cantidad">Cantidad Vendida: </label>
        <input type="number" id="cantidad" name="cantidad" required> <br><br>

        <label for="precio">Precio por Unidad: </label>
        <input type="number" id="precio" name="precio" required> <br><br>

        <input type="submit" value="Calcular">
        <input type="reset" value="Limpiar">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];

        if ($cantidad <= 0 || $precio <= 0) {
            echo "Por favor, ingresa valores válidos de cantidad y precio.";
            exit;
        } else {
            calcularVenta($producto, $cantidad, $precio);
        }
    }

    function calcularVenta($producto, $cantidad, $precio) {
        $subtotal = $cantidad * $precio;
        $impuesto = $subtotal * 0.15;
        $totalFinal = $subtotal - $impuesto;

        echo "PRODUCTO: $producto <br>";
        echo "CANTIDAD: $cantidad <br>";
        echo "PRECIO UNITARIO: $precio <br>";
        echo "SUBTOTAL: $subtotal <br>";
        echo "IMPUESTO (15%): $impuesto <br>";
        echo "TOTAL A PAGAR: $totalFinal <br>";
    }
    ?>
</body>
</html>
