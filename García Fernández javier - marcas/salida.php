<html>
	<head>
		<link rel="stylesheet" type="text/css" href=""/>
	</head>
<body>	
	
	
	<table border="1">
	<caption>datos personales</caption>
		<tr>
			<th>Apellidos</th>
			<th>nombre</th>
			<th>DNI</th>
			<th>Edad</th>
			<th>sexo</th>
			<th>estudios</th>
		</tr>
		</tr>
			<td><?php echo $_GET['apellidos']?></td>
			<td><?php echo $_GET['nombre']?></td>
			<td><?php if(isset($_GET['DNI'])) echo $_GET['DNI'];?></td>
			<td><?php if(isset($_GET['edad'])) echo $_GET['edad'];?></td>
			<td><?php echo $_GET['sexo']?></td>
			<td><?php if(!isset($_GET['estudios']))?>
				
			</td>
		</tr>
		
		
		
	</table>
</body>