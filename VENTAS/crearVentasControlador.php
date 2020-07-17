<?php
include '../CONEXION/conection.php';

$nombre_producto = $_POST['nomproducto'];
$descripcion = $_POST['descripcion'];
$precio_compra = $_POST['preciocompra'];
$precio_venta = $_POST['precioventa'];
$idmarca = $_POST['idmarca'];
$idproveedor = $_POST['idproveedor'];
$idubicacion = $_POST['idubicacion'];

$sql = "INSERT INTO productos (nombre_producto, descripcion, precio_compra, precio_venta, id_marca, id_proveedor, id_ubicacion, created_at)
                    VALUES ('$nombre_producto', '$descripcion', $precio_compra, $precio_venta, $idmarca, $idproveedor, $idubicacion, now())";

if($resultado = $conn->query($sql)){
    header('Location: index.php');
}else{
    header('Location: agregarProductoVista.php?id='.$idproveedor);
}