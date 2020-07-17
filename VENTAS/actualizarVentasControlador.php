<?php
include '../CONEXION/conection.php';
$idproducto = $_POST['idproducto'];
$nombre_producto = $_POST['nomproducto'];
$descripcion = $_POST['descripcion'];
$precio_compra = $_POST['preciocompra'];
$precio_venta = $_POST['precioventa'];
$idmarca = $_POST['idmarca'];
$idproveedor = $_POST['idproveedor'];
$idubicacion = $_POST['idubicacion'];

$sql = "UPDATE productos SET nombre_producto='".$nombre_producto."', descripcion='".$descripcion."', precio_compra=".$precio_compra.", precio_venta=".$precio_venta.",
        id_marca=".$idmarca.", id_proveedor=".$idproveedor.", id_ubicacion=".$idubicacion.", updated_at=now() WHERE id=".$idproducto;
if($resultado = $conn->query($sql)){
    header('Location: index.php');
}else{
    header('Location: actualizarProductoVista.php?id='.$idproveedor);
}