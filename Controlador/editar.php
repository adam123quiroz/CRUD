<?php
$nlinea = !empty($_GET['id']) ? $_GET['id'] : 0;
$linea='';
//Si hay una linea que modificar "$nlinea", entonces.
if($nlinea){
    include('conexion.php');
	$registro = "SELECT * FROM usuarios WHERE id = $nlinea;";
	$resultado = mysqli_query($conexion,$registro);
	$linea = mysqli_fetch_row($resultado);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingreso de datos</title>
    <link rel="stylesheet" href="../css/estilos.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="contenedor">
    <div class="cabecera">Actualización de datos</div>
    <div class="contenido">
    <form class="contact" action="actualizar.php" method='post'>
        <div class="form-group">
            <input type="hidden" name="nlinea" value="<?php echo $nlinea;?>">
            <label for="i1">Nombres</label>
            <input type="text" id="i1" name="c1" value="<?php echo $linea[1];?>">
        </div>
        <div class="form-group">
            <label for="i2">Apellido paterno</label>
            <input type="text" id="i2" name="c2" value="<?php echo $linea[2];?>">
        </div>
        <div class="form-group">
            <label for="i3">Apellido materno</label>
            <input type="text" id="i3" name="c3" value="<?php echo $linea[3];?>">
        </div>
        <div class="form-group">
            <label for="i4">Correo</label>
            <input type="email" id="i4" name="c4" value="<?php echo $linea[4];?>">
        </div>
        <button type="submit" class="btn btn-primary" value="actualizar">Editar</button>
    </form>
    </div>
    </div>
</body>
</html>
