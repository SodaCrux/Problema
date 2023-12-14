<html>
    <head>
        <title>Problema</title>
    </head>


<body>
    <?php
    date_default_timezone_set("America/Mexico_City");
    setlocale(LC_ALL, "es_MX");
    echo"La fecha de hoy es";
    $fecha=date("d/m/y");
    echo strftime("%d de %B de %Y", $fecha);
    echo $fecha;
    echo "<br>";
    echo"La hora actual es";
    $hora=date("H:i:s");
    echo $hora;
    echo"<br>"
    ?>
</body>

</html>