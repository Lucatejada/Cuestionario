<!--

// $preg = $_POST['pre'];
//  $preg2 = $_POST['P2'];

// foreach($preg2 as $rta){
// echo 'Respuesta: '.$rta. "<br>";
// } 

$mensaje = "";

$puntos = 0;

if($preg == "40") {
    $puntos = $puntos + 3;
}

if($preg2 == "Al humano") {
    $puntos = $puntos + 3;
}

if ($puntos >= 2 ) {
    $mensaje = " <br>Aprobaste maestro :) <br>";
} else {
    $mensaje = " suerte la proxima rey";
}

 echo "<br>Resultado: $puntos <br> $mensaje <br>";
 echo "Respuestas: <br> 1. La velocidad permitida es de 40 km/h <br> 2. Se deben a los factores humanos en su mayoria";

?> -->

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

<body class="text-center p-4">
    <h2 class="text-center" > Resultado cuestionario </h2>

    <?php
    $preg = $_POST['pre'];
    $preg2 = $_POST['P2'];
    $preg3 = $_POST['P3'];
    $preg3 = $_POST['P4'];

    $mensaje = "";
    $puntos = 0;

    if ($preg == "40") {
        $puntos = $puntos + 3;
        $mensaje = "<br> Respuesta 1 correcta <br>";
        echo $mensaje;
    } else {
        $mensaje = "<br>Respuesta 1 Incorrecta <br>";
        echo $mensaje;
    }
    if ($preg2 == "Al humano") {
        $puntos = $puntos + 3;
        $mensaje = " Respuesta 2 correcta <br>";
        echo $mensaje;
    } else {
        $mensaje = " Respuesta 2 incorrecta <br>";
        echo $mensaje;
    }
    if ($preg3 == "Humano, Vehicular y Ambiental.") {
        $puntos = $puntos + 3;
        $mensaje = " Respuesta 3 Correcta <br>";
        echo $mensaje;
    } else {
        $mensaje = " Respuesta 3 Incorrecta <br>"; 
        echo $mensaje;
    }
    if ($puntos >= 3) {
        $mensaje = "Aprobaste maestro :)";
    } else {
        $mensaje = " suerte la proxima rey";
    }





    echo "<br>Resultado: $puntos 
    <p> --------------------------------- </p> 
    $mensaje ";
    // echo "<br>Respuestas:<br> 1. La velocidad permitida es de 40 km/h <br> 
    // 2. Se deben a los factores humanos en su mayoria <br> 
    // 3. C. Humano, Vehicular y Ambiental.";

    ?>

    <br><br>
    <a href="cuestionario.html" class="btn btn-primary"> Volver a intentarlo </a>

</body>

</html>