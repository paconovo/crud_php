<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

	<link rel="stylesheet" href="css/estilos.css">

    <title>CRUD PHP</title>
  </head>
  <body>
    <div class="container">
		<h1 class="text-center">CRUD PHP</h1>

		<div class="row">
			<div class="col-2 offset-10">
				<div class="text-center">
					<button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" 
					data-bs-target="#modalUsuario" id="botonCrear">
					<i class="bi bi-plus-circle-fill"></i>Crear
					</button>
				</div>
			</div>
		</div>
		<br/>
		<br/>

		<div class="table-responsive">
			<table id="datos_usuario" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Teléfono</th>
						<th>Email</th>
						<th>Imagen</th>
						<th>Fecha de creación</th>
						<th>Editar</th>
						<th>Borrar</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="modalUsuario" tabindex="-1" 
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title fs-5" id="exampleModalLabel">Crear Usuario</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form method="POST" id="formulario" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-body">
							<label for="nombre">Ingrese el nombre</label>
							<input type="text" name="nombre" id="nombre" class="form-control">
							<br/>
							<label for="apellidos">Ingrese los apellidos</label>
							<input type="text" name="apellidos" id="apellidos" class="form-control">
							<br/>
							<label for="telefono">Ingrese el teléfono</label>
							<input type="text" name="telefono" id="telefono" class="form-control">
							<br/>
							<label for="email">Ingrese el email</label>
							<input type="email" name="email" id="email" class="form-control">
							<br/>
							<label for="imagen">Seleccione una imgen</label>
							<input type="file" name="imagen_usuario" id="imagen_usuario" class="form-control">
							<br/>
							<span id="imagen_subida"> </span>
						</div>
						<div class="modal-footer">
							<input type="hidden" name="id_usuario" id="id_usuario">
							<input type="hidden" name="operacion" id="operacion">
							<input type="submit" name="action" id="action" class="btn btn-success" 
								value="Crear">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
		crossorigin="anonymous">
	</script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>