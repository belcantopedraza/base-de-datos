<!DOCTYPE html>
<html>
<head>
<!--Titulo.-->
<title>Registro</title>
</head>
<!--Boddy, color de fondo naranja.-->
<body bgcolor="blue">
<center>
<!--Hace conexión con "Operacion_guardar.php"-->
<!--El [Method="POST"] envia los datos de forma que no podemos ver, a diferencia del GET que los envia a travez del URL-->
<form action="operacion_guardar.php" method="POST">
</br></br></br></br></br></br></br></br></br>
<h3><font face="Arial">INGRESA LOS DATOS SOLICITADOS</h3>
<!--Acá están los textos donde vamos a introducir el nombre, apellido y el correo, más un botón para registrarse en la base de datos.-->
<input type="text" required name="nombre" placeholder="Nombre(s)" value="" /><br/><br/>
<input type="text" required name="apellido" placeholder="Apellidos" value="" /><br/><br/>
<input type="text" required name="correo" placeholder="Email" value="" /><br/><br/>
<input type="submit" value="REGRISTRARSE" />
</form>
</center>
</body>
</html>
