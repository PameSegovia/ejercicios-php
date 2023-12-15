<?php include("cabecera.php");?>
<?php include("conexion.php");?>
<?php

if($_POST){
	//print_r($_POST);
	$nombre= $_POST['nombre'];
	$descripcion= $_POST['descripcion'];
	$imagen=$_FILES['archivo']['name'];


	$objConexion= new conexion();
	$sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
	$objConexion->ejecutar($sql);
}
if($_GET){
	$objConexion= new conexion();
	$sql="DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$_GET['borrar'];
	$objConexion->ejecutar($sql);

}


$objConexion= new conexion();
$proyectos=$objConexion->consultar("SELECT * FROM `proyectos`");
//print_r($resultato);


?>


<div class="container">
	<div class="row">
		<div class="col-6">
			<div class="card">
		<div class="card-header">Datos del Proyecto</div>
		<div class="card-body">
			<form action="portafolio.php" method="post" enctype="multipar/form-data"  >

		Nombre del Proyecto: <input class="form-control" type="text" name="nombre" id="">
		<br/>
		Imagen del Proyecto: <input class="form-control"  type="file" name="archivo" id="">
		<br/>
		<input class="btn btn-success" type="submit" value="Enviar Proyecto">
		<br/>
		<br/>

	<div class="mb-3">
		<label for="" class="form-label">Descripción</label>
		<textarea class="form-control" name="descripcion" rows="3"></textarea>
	</div>
	

	</form>

		</div>

	</div>
		</div>
		<div
			class="col-6"
		>
			<div
		class="table"
	>
		<table	class="table table-primary"	>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Imagen</th>
					<th>Descripción</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($proyectos as $proyecto){ ?>
				<tr class="table-active">
					<td><?php echo $proyecto['id']; ?></td>
					<td><?php echo $proyecto['nombre']; ?></td>
					<td><?php echo $proyecto['imagen']; ?></td>
					<td><?php echo $proyecto['descripcion']; ?></td>
					<td><a 
						class="btn btn-danger"
						href="?borrar=<?php echo $proyecto['id'];  ?>"
						>Eliminar</a
					>
					 </td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
		</div>
		
	</div>
</div>

	


	
	
	
	
	
	
<?php include("pie.php"); ?>