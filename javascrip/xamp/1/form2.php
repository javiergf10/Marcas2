
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estiloForm.css"/>
	</head>
<body>	
	<form action="salidaForm2.php" name="solucionFormulario" method="GET">
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre" maxlength="30">

		<label for="email">Email:</label>
		<input type="text" id="email" name="email" placeholder="correo@empresa.com" required maxlength="30">

		<label for="asunto">Asunto</label>
		<select name="asunto" id="asunto" size="3">
			<option value="PresupuestoWeb">Pedir presupuesto web</option>
			<option value="CitaPrevia">Solicitar cita previa</option>
			<option value="Otros">Otros</option>
		</select>

		<label for="marketing">¿Cómo nos ha conocido?</label>
		<div class="marketing">		
			<input type="checkbox" name="marketing" value="amigo" id="amigo">Un amigo</input>
			<input type="checkbox" name="marketing" value="google" id="googleando">Googleando</input>
			<input type="checkbox" name="marketing" value="buzoneo" id="buzoneo">buzoneo</input>
			<input type="checkbox" name="marketing" value="otros" id="otros">otros</input>
		</div>

		<label for="mensaje">Escribe tu mensaje</label>
		<textarea name="mensaje" id="mensaje" maxlength="300"></textarea>
		<div id="rgpd">
		<input type="checkbox" name="aceptacion" value="Acepta_RGPD" id="rgpd" >
			<label for="rgpd" class="rgpd">He leído y acepto el <a href="#" target="_blanck">aviso legal y la política de privacidad</a>.</label>
		</input>
		</div>
		<input type="submit" name="Enviar"></input>
		
	</form>
</body>