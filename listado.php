<?php
include 'conexion.php';

$mostrar = $conexion->query("SELECT * FROM
 celulares, marca, modelo, colores
 where
 marca_celular=id_marca and id_modelo=modelo_celular and id_color=color_celular
  ");

$total_cel = mysqli_num_rows($mostrar);?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" >
</head>
<body>
	<div class="container">
	<a href="INDEX.PHP">Inicio</a>
	<a href="buscar.php">Buscar Celular</a>


		<h2 class="text-center">Listado de Celulares</h2>
		<p>Numeros de celulares registrados:
			<b class="text-danger"> <?php echo $total_cel; ?></b>
		</p>
		<table class="table table-hover">
			<tr>
				<td>Serial</td>
				<td>Marca</td>
				<td>Modelo</td>
				<td>Capacidad</td>
				<td>Color</td>
				<td>Precio</td>
				<td>Garantia</td>
				<td>Observaciones</td>
			</tr>
<?php while ($fila = mysqli_fetch_array($mostrar)) {?>
		<tr>
			<td><?php echo $fila['serial_celular']; ?></td>
			<td><?php echo $fila['nombre_marca']; ?></td>
			<td><?php echo $fila['nombre_modelo']; ?></td>
			<td><?php echo $fila['capacidad_celular']; ?></td>
			<td><?php echo $fila['nombre_color']; ?></td>
			<td><?php echo $fila['precio_celular']; ?></td>
			<td><?php echo $fila['garantia_celular']; ?></td>
			<td><?php echo $fila['observaciones']; ?></td>
		</tr>
		<?php }?>
		</table>

	</div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="main.js"></script>
</body>
</html>
