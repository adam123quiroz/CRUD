<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Registrar usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="cabecera">Registrar usuario</div>
        <div class="contenido">
            <form action="../Controlador/registra.php" method='post'>
                <div class="form-group">
                    <label for="i1">Nombres</label>
                    <input type="text" id="i1" name="c1">
                </div>
                <div class="form-group">
                    <label for="i2">Apellido paterno</label>
                    <input type="text" id="i2" name="c2">
                </div>
                <div class="form-group">
                    <label for="i3">Apellido materno</label>
                    <input type="text" id="i3" name="c3">
                </div>
                <div class="form-group">
                    <label for="i4">Correo</label>
                    <input type="text" id="i4" name="c4">
                </div>
                <button type="submit" class="btn btn-primary" value="registrar">Registrar</button>
            </form>

        </div>
    </div>
</body>
</html>
