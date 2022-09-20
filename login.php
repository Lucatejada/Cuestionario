<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title> Registro licencia conducir </title>
</head>



<body style="background-color: antiquewhite;" class="p-4">
    <div class="container-fluid">
        <div class="d-flex justify-content-center py-3">
            <form class="p-5 bg-light" method="POST">
                <h3 class="text-center py-3">Registro licencia</h3>
                <p> Por favor, complete los siguientes<br> campos para continuar</p>
                <div class="text-center">
                    <div class="form-group ">
                        <label for="nombre">Nombre:</label>
                        <div class="input-group">
                            <div class="d-flex flex-row py-2">
                                <input type="text" class="form-control" id="nombre" name="regisNombre" placeholder="Ingrese su nombre">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <div class="input-group">
                            <div class="d-flex flex-row py-2">
                                <input type="email" class="form-control" id="email" name="regisEmail" placeholder="Ingrese su email">
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pwd"> DNI :</label>
                        <div class="input-group">
                            <div class="d-flex flex-row py-2">
                                </span>
                                <input type="password" class="form-control" id="pwd" name="regisPassword" placeholder="Solo números, sin puntos ">
                            </div>
                        </div>
                    </div>
                </div>

</body>