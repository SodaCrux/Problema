<html>
    <head>
        <title>Problema</title>
    </head>

    <body>
        <?php
        setlocale(LC_ALL, "es_MX");
        echo"La fecha de hoy es: ";
        $fecha=date("j/n/y");
        echo strftime("%d de %B de %Y", $fecha);
        echo $fecha;
        echo "<br>";
        ?>
        <a href="fecha3.php">Siguiente Problema</a>
    </body>
</html>