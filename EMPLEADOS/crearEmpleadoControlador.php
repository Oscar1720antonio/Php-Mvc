<?php
include '../CONEXION/conection.php';

include '../CONEXION/conection.php';
$id = $_POST['id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono_casa'];

$sql = "INSERT INTO empleados (id,nombres, apellidos, email, direccion, telefono_casa)
                    VALUES ($id,'$nombres', '$apellidos', '$email', '$direccion','$telefono')";
if($resultado = $conn->query($sql)){
    header('Location: index.php');
}else{
    header('Location: actualizarEmpleadosVista.php?id='.$id);
}