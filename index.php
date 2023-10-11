<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio POO Individual 4 (Herrencia)</title>
</head>
<body>

<form method="POST" action="">

    <table><h1>Empleado 1</h1>
        <tr>            
        <tr>
            <td>
                <label>Nombre:</label>
                <input type="text" name="nombre1">
            </td>
        </tr>
        <tr>            
        <tr>
            <td>
                <label>Sueldo:</label>
                <input type="number" name="sueldo1">
            </td>
        </tr>        
    </table>
    <table><h1>Empleado 2</h1>
        <tr>            
        <tr>
            <td>
                <label>Nombre:</label>
                <input type="text" name="nombre2">
            </td>
        </tr>
        <tr>            
        <tr>
            <td>
                <label>Sueldo:</label>
                <input type="number" name="sueldo2">
            </td>
        </tr>        
    </table>
    <br><br>
    <input type="submit" name="boton" value="Aceptar">

</form>

<?php

//LLAMADA A LA FUNCIÓN

include('Empleado.php');

//CREACIÓN OBJETO (INSTANCIAR LAS CLASES MUJER Y HOMBRE)

$empleado1=new Empleado();
$empleado2=new Empleado();
$funcion=new Empleado();

echo '<hr>';

//ASIGNAR PARÁMETROS A ATRIBUTOS MEDIANTE SET

$empleado1->setNombre($_POST['nombre1']);
$empleado1->setSueldo($_POST['sueldo1']);

$empleado2->setNombre($_POST['nombre2']);
$empleado2->setSueldo($_POST['sueldo2']);

echo '<hr>';

//LLAMAR A LOS GETS

echo "Empleado1:". $empleado1->getNombre($_POST['nombre1'])." tiene un sueldo de ". $empleado1->getSueldo($_POST['sueldo1'])." €";
echo "<br>";
echo "Empleado2:". $empleado2->getNombre($_POST['nombre2'])." tiene un sueldo de ". $empleado2->getSueldo($_POST['sueldo2'])." €";
echo "<br>";
echo $funcion->mayorSueldo ($_POST['sueldo1'],$_POST['sueldo2']);
?>

</body>
</html>