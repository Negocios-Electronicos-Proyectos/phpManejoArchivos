<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Crear</title>
</head>

<body>
    <main>
        <div class="container" style="padding-top: 40px;">
            <div class="jumbotron">
                <h1 class="display-4">CRUDCITO</h1>
                <p class="lead">Tarea sobre Crear, Eliminar, Actualizar y Leer archivos en PHP.</p>
                <hr class="my-4">
                <p class="lead">Contenido del archivo:</p>
            </div>
        </div>
        <div class="container">
            <?php
            $handler = fopen("nuevo.txt", "r");
            $leer = fread($handler, filesize("nuevo.txt"));
            echo $leer;
            ?>
            <br>
            <a class="btn btn-primary" href="../index.php" style="margin-top: 10px;">Regresar al menú</a>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>