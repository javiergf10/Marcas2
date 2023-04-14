<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estiloForm.css"/>
	</head>
<body>	
	
	
	<table border="1">
	<caption>Salida datos form</caption>
		<tr>
			<th>Nombre</th>
			<th>Email</th>
			<th >Asunto</th>
			<th >marketing</th>
			<th >mensaje</th>
			<th >aceptacion</th>
		</tr>
		</tr>
			<td><?php echo $_GET['nombre']?></td>
			<td><?php echo $_GET['email']?></td>
			<td><?php if(isset($_GET['asunto'])) echo $_GET['asunto'];?></td>
			<td><?php if(isset($_GET['marketing'])) echo $_GET['marketing'];?></td>
			<td><?php echo $_GET['mensaje']?></td>
			<td><?php if(!isset($_GET['aceptacion'])){?>
				<h3 style="color:red">Usted no ha aceptado el aviso legal</h3>
			<?php } else echo "Aceptada"?>
			</td>
		</tr>
		
		
		
	</table>
</body>