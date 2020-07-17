<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css" media="screen">
	<title>EMPLEADOS</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="../index.php">HOME</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor02">
			<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="../PRODUCTO/index.php">Productos <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Ventas</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Empleados</a>
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
				<h1 class="display-3">EMPLEADOS</h1>
				<p class="lead">Descripcion.</p>
				</div>
			</div>
		</div>
	</div>


	
	<div class="container ">
		<div class="row">
			<div class="col-md-12">

				<table class="table table-hover">
					<thead>
						<tr>
							<td>ID PRODUCTO</td>
							<td>NOMBRE</td>
							<td>APELLIDOS</td>
							<td>EMAIL</td>
							<td>DIRECCIN</td>
							<td>TELEFONO</td>
						</tr>
					</thead>
					<tbody>
						<?php
							include "../CONEXION/conection.php";
							$sql = "SELECT * FROM empleados";
							$result = $conn->query($sql);
							    // output data of each row
							    while($row = $result->fetch_assoc()) {
							        ?>
							        	<tr scope="row" class="table-dark">
							        		<td> <?php echo $row["id"] ?> </td>
							        		<td> <?php echo $row["nombres"] ?> </td>
							        		<td> <?php echo $row["apellidos"] ?> </td>
							        		<td> <?php echo $row["email"] ?> </td>
							        		<td> <?php echo $row["direccion"] ?> </td>
							        		<td> <?php echo $row["telefono_casa"] ?> </td>
							        		<td>
							        			<a href="actualizarEmpleadosVista.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">EDITAR</a>
							        			<a href="eliminarEmpleadosControlador.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">ELIMINAR</a>
							        		</td>
							        	</tr>
							        <?php
							    }
							
							$conn->close();
						?>
					</tbody>
					</table> 

			</div>
			
		</div>
	</div>

	<div class="container mb-5">
	<div class="row">
		<div class="col-md-6"></div>
		<div class="col-md-6">
			<a href="crearEmpleadosVista.php" class="btn btn-outline-success col-md-12">Agregar Nuevo Empleado</a>
		</div>
	</div>
	</div>

	<hr>
	<hr>
	
</body>
</html>