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
		<a class="navbar-brand" href="#">OSCAR</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor02">
			<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">Productos <span class="sr-only">(current)</span></a>
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
				<h1 class="display-3">Crear Producto</h1>
			</div>
		</div>
	</div>


    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
            <form action="crearProductoControlador.php" method="post">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre Producto</label>
                                <input type="text" class="form-control" id="" name="nomproducto" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Descripcion</label>
                                <input type="text" class="form-control" id="" name="descripcion" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Precio Compra</label>
                                <input type="text" class="form-control" id="" name="preciocompra" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Precio Venta</label>
                                <input type="text" class="form-control" id="" name="precioventa" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID Marca</label>
                                <input type="text" class="form-control" id="" name="idmarca" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">ID Proveedor</label>
                                <input type="text" class="form-control" id="" name="idproveedor" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID Ubicacion</label>
                                <input type="text" class="form-control" id="" name="idubicacion" value="">
                            </div>
                        </div>
                    </div>
                    
                    <input type="submit" class="btn btn-primary col-md-12" value="Crear Producto">

                </form>
            </div>
        </div>
    </div>
    
</body>
</html>


