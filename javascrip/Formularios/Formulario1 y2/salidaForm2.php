<html>

<head>
	<link rel="stylesheet" type="text/css" href="estiloForm.css" />
</head>

<body>

	<?php
	if (
		!isset($_GET['nombre']) || empty($_GET['NOMBRE']) ||
		!isset($_GET['nombre']) || empty($_GET['NOMBRE']) ||
		!isset($_GET['nombre']) || empty($_GET['NOMBRE'])
	) { ?>
		<p>Ha habido un error
		<p>
			<a href="form.html">Volver</a>
		<?php } else { ?>


		<table border="1">
			<caption>Salida datos form</caption>
			<tr>
				<th>Nombre</th>
				<th>Email</th>
				<th>Asunto</th>
				<th>marketing</th>
				<th>mensaje</th>
				<th>aceptacion</th>
			</tr>
			</tr>
			<td>
				<?php echo $_GET['nombre'] ?>
			</td>
			<td>
				<?php echo $_GET['email'] ?>
			</td>
			<td>
				<?php if (isset($_GET['asunto']))
					echo $_GET['asunto']; ?>
			</td>
			<td>
				<?php if (isset($_GET['marketing']))
					echo $_GET['marketing']; ?>
			</td>
			<td>
				<?php echo $_GET['mensaje'] ?>
			</td>
			<td>
				<?php if (!isset($_GET['aceptacion'])) { ?>
					<h3 style="color:red">Usted no ha aceptado el aviso legal</h3>
				<?php } else
					echo "Aceptada" ?>
				</td>
				</tr>

		<?php } ?>

	</table>
</body>