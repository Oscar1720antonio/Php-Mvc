<?php

include "../CONEXION/conection.php";
// sql to delete a record
$sql = "DELETE FROM productos WHERE id=".$_GET["id"];

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error  " . $conn->error;
}

$conn->close();