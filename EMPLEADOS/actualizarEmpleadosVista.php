<?php
include '../CONEXION/conection.php';
$sql = "SELECT * FROM empleados WHERE id=".$_GET["id"];
$pro = mysqli_query($conn,$sql);
$resultado = mysqli_fetch_assoc($pro);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css" media="screen">
    <title>Document</title>
</head>
<body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">HOLIS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor02">
			<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="/PRODUCTO/index.php">Productos <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Ventas</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php">Empleados</a>
			</li>
			<li class="nav-item">
				<a class="nav-link danger" href="#">Cerrar sesion</a>
			</li>
			</ul>
		</div>
	</nav>


    <div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
			<div class="jumbotron">
				<h1 class="display-3">Actualizar Empleados</h1>
			</div>
		</div>
	</div>


    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
            <form action="actualizarEmpleadosControlador.php" method="post">

                    <input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">
                    <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID </label>
                                <input type="text" class="form-control" id="" name="id" value="<?php echo $resultado["id"]; ?>">
                            </div>
                        </div>
                    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre </label>
                                <input type="text" class="form-control" id="" name="nombres" value="<?php echo $resultado["nombres"]; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Apellidos</label>
                                <input type="text" class="form-control" id="" name="apellidos" value="<?php echo $resultado["apellidos"]; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" id="" name="email" value="<?php echo $resultado["email"]; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Direccion</label>
                                <input type="text" class="form-control" id="" name="direccion" value="<?php echo $resultado["direccion"]; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Telefono</label>
                                <input type="text" class="form-control" id="" name="telefono_casa" value="<?php echo $resultado["telefono_casa"]; ?>">
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary col-md-12" value="Guardar Cambios">

                </form>
            </div>
        </div>
    </div>
    
</body>
</html>


