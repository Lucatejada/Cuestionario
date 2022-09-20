<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title> Resultado cuestionario</title>
</head>

<body style="background-color: antiquewhite;" class="p-4">
    <h2 class="text-center style="color: yellow;> Resultado cuestionario </h2>

    <?php
    $preg = $_POST['pre'];
    $preg2 = $_POST['P2'];
    $preg3 = $_POST['P3'];
    $preg4 = $_POST['P4'];
    $preg5 = $_POST['P5'];

    $mensaje = "";
    $puntos = 0;

    if ($preg == "40") {
        $puntos = $puntos + 3;
        $mensaje = "<br> 1. ¿Cual es la velocidad maxima permitida en zona urbana?<br>Respuesta Correcta. La velocidad permitida es de 40 km/h <br>";
        echo $mensaje;
    } else {
        $mensaje = "<br> 1. ¿Cual es la velocidad maxima permitida en zona urbana?<br>Respuesta Incorrecta. La velocidad permitida es de 40 km/h <br>";
        echo $mensaje;
    }
    echo "<br>";
    if ($preg2 == "Al humano") {
        $puntos = $puntos + 3;
        $mensaje = "<br> 2. ¿A qué factor se deben la mayoría de los siniestros viales? <br>Respuesta Correcta, se deben a los factores humanos en su mayoria <br> ";
        echo $mensaje;
    } else {
        $mensaje = "<br> 2. ¿A qué factor se deben la mayoría de los siniestros viales? <br>Respuesta Incorrecta, se deben a los factores humanos en su mayoria <br> ";
        echo $mensaje;
    }
    echo "<br>";
    if ($preg3 == "Humano, Vehicular y Ambiental.") {
        $puntos = $puntos + 3;
        $mensaje = "<br>3. ¿La Organización Mundial de la Salud manifiesta que el riesgo en la vía pública surge como resultado de diversos factores, ¿cuáles son?
        <br>Respuesta Correcta, Humano, Vehicular y Ambiental. <br/>";
        echo $mensaje;
    } else {
        $mensaje = "<br>3. ¿La Organización Mundial de la Salud manifiesta que el riesgo en la vía pública surge como resultado de diversos factores, ¿cuáles son?
        <br>Respuesta Incorrecta, Humano, Vehicular y Ambiental. <br/>";
        echo $mensaje;
    }
    echo "<br>";
    if ($preg4 == "Verdadero") {
        $puntos = $puntos + 3;
        $mensaje = "4. Por lo general, las fallas mecánicas se deben a conductas negligentes por parte de los propietarios
        de los vehículos, que no se ocupan de la verificación del estado de su automóvil <br>Respuesta Correcta, es verdadero <br>";
        echo $mensaje;
    } else {
        $mensaje = "4. Por lo general, las fallas mecánicas se deben a conductas negligentes por parte de los propietarios
        de los vehículos, que no se ocupan de la verificación del estado de su automóvil <br>Respuesta Incorrecta, es verdadero <br>";
        echo $mensaje;
    }
    echo "<br>";
    if ($preg5 == "A") {
        $puntos = $puntos + 3;
        $mensaje = "¿A qué se denomina incidente de tránsito o incidente vial? <br>Respuesta Correcta, Hecho que puede ser evitado, en el cual se produce daño a persona o cosa, en ocasión de
        circulación en la vía pública. <br>";
        echo $mensaje;
    } else {
        $mensaje = "¿A qué se denomina incidente de tránsito o incidente vial? <br> Respuesta Incorrecta, Hecho que puede ser evitado, en el cual se produce daño a persona o cosa, en ocasión de
        circulación en la vía pública. <br>";
        echo $mensaje;
    }


    #-------------------- PUNTAJE ---------------------


    if ($puntos < 15) {
        $mensaje = "<br>Lamentablemente desaprobaste ";
        
    } else {
        $mensaje = "<br> Bien, aprobaste !!";
        
    }

    echo $mensaje;
    echo "<br> Resultado: ". $puntos ; 

    
    ?>

    <br><br>
    <div class="text-center">
        <a href="cuestionario.html" class="btn btn-primary"> Volver a intentarlo </a>
    </div>


</body>

</html>