<?php
include('conexion.php');
$consulta = 'select * from usuarios';
$resultado = mysqli_query($conexion,$consulta);
$tabla =<<<FIN
<table class="table table-striped table-dark">
<tr><th>Nombres</th><th>Apellido paterno</th><th>Apellido materno</th><th>Correo</th><th colspan="2">Accion</th></tr>
FIN;

while($registro=mysqli_fetch_assoc($resultado)) {
    $tabla.='<tr>';
    $tabla.="<td>{$registro['nombres']}</td>";
    $tabla.="<td>{$registro['app']}</td>";
    $tabla.="<td>{$registro['apm']}</td>";
    $tabla.="<td>{$registro['correo']}</td>";

    $tabla.="<td><a href=borrar.php?id={$registro['id']} class=\"btn btn-primary btn-lg active\" role=\"button\" aria-pressed=\"true\">Borrar</a></td>";
    $tabla.="<td><a href=editar.php?id={$registro['id']} class=\"btn btn-primary btn-lg active\" role=\"button\" aria-pressed=\"true\">Editar</a></td>";
    $tabla.='</tr>';
}
$tabla.='</table>';
//header("location:menuderecha.php");
//
