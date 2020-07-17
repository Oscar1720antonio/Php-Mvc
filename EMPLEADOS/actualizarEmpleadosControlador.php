<?php
include '../CONEXION/conection.php';
$id = $_POST['id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono_casa'];

$sql = "UPDATE empleados SET nombres ='".$nombres."', apellidos='".$apellidos."', email='".$email."', direccion='".$direccion."',telefono_casa=".$telefono;
if($resultado = $conn->query($sql)){
    header('Location: index.php');
}else{
    header('Location: actualizarEmpleadosVista.php?  id='.$id);
}