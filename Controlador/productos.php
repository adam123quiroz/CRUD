<?php
include('conexion.php');
$consulta = 'select * from usuarios';
$resultado = mysqli_query($conexion,$consulta);
$div_result =<<<FIN
<div class="card-deck">
FIN;

$count = 0;
while($registro=mysqli_fetch_assoc($resultado)) {
    $div_result.='<div class="card">';
    $div_result.='<img class="card-img-top" src="https://destinonegocio.com/wp-content/uploads/2018/09/ciclo-de-vida-de-un-producto.jpg" alt="Card image cap">';
    $div_result.='<div class="card-body">';
    $div_result.="<h5 class=\"card-title\">{$registro['nombres']}</h5>";
    $div_result.="<p class=\"card-text\">{$registro['app']}</p>";
    $div_result.="<p class=\"card-text\">{$registro['apm']}</p>";
    $div_result.="<p>{$registro['correo']}</p>";
    $div_result.="<a href=\"#\" class=\"btn btn-primary\">Comprar</a>";
    $div_result.='</div>';
    $div_result.='</div>';
}
$div_result.='</div>';
