<?php include("cabecera.php");?>
<br/>

<div class="container">
	<div class="row">
		<div
			class="col-6"
		>
			<div class="card">
		<div class="card-header">Datos del Proyecto</div>
		<div class="card-body">
			<form action="portafolio.php" method="post">

		Nombre del Proyecto: <input class="form-control" type="text" name="nombre" id="">
		<br/>
		Nombre del Proyecto: <input class="form-control"  type="file" name="archivo" id="">
		<br/>
		<input class="btn btn-success" type="submit" value="Enviar Proyecto">

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
		<table
			class="table table-primary"
		>
			<thead>
				<tr>
					<th>ID</th>
					<th>NOMBRE</th>
					<th>IMAGEN</th>
				</tr>
			</thead>
			<tbody>
				<tr class="table-active">
					<td scope="row">3</td>
					<td>Aplicación Web</td>
					<td>imagen.jpg</td>
				</tr>
			</tbody>
		</table>
	</div>
		</div>
		
	</div>
</div>

	


	
	
	
	
	
	
<?php include("pie.php"); ?>