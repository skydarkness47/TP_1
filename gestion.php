<?php
require"empleado.php";




$empleado= new empleado($_POST['apellido'],$_POST['dni'],$_POST['nombre'],$_POST['sexo'],$_POST['legajo'],$_POST['sueldo']);

echo empleado::ToString($empleado);

$empleado
?>