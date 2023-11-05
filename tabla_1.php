<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Divisores</title>
</head>
<body>

<table border="1">
    <!-- Creando la fila de cabecera con los números -->
    <tr>
        <?php
        for ($cabecera = 50; $cabecera <= 60; $cabecera++) {
            echo "<th>$cabecera</th>";
        }
        ?>
    </tr>
    
    <!-- Creando las filas y columnas con los divisores -->
    <?php
    for ($fila = 1; $fila <= 11; $fila++) {
        echo "<tr>";
        for ($columna = 50; $columna <= 60; $columna++) {
            echo "<td>";
            if ($columna % $fila == 0) {
                echo "*"; // Si el número de la columna es divisible por el número de la fila, mostrará *
            } else {
                echo "-"; // Si el número no es divisible, mostrará -
            }
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>

