<?php
include("inc\headmenu.php");
?>

<style type="text/css">
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	body {
		background-color: whitesmoke;
		background-image: url(img/fondo3.jpg);
		background-image: opacity 50%;
		background-size: cover;
	}
	header{
		background-color: #F1D478;
	}
	h1 {
		color: white;
		font-size: 40px;
		margin-bottom: 10px;
		margin-left: 20px;
		text-align: left;

	}
	h2 {
		color: white;
		font-size: 25px;
		text-align: left;
		margin-left: 25px;
		margin-bottom: 5px;
	}
	h3 {
		color: black;
		font-size: 15px;
		text-align: left;
		margin-left: 25px;
	}
	h4 {
		color: white;
		font-size: 20px;
		text-align: left;
	}
	h5{
		color: black;
		font-size: 15px;
		text-align: left;
	}
	table {
		margin-left: 50px;
	}
	td {
		padding: 5px;
	}
	h2 a {
		color: white;
		text-decoration: none;
	}
	h2 a:hover {
		color: #F1D478;
		text-decoration: underline;
	}
	td img {
		background-color: #F1D478;
		border-radius: 100px;
		height: 65px;
		width: 65px;
		margin-top: 2px;
		margin-bottom: 2px;
	}
	td img:hover {
		background-color: white;
		border-radius: 100px;
		height: 65px;
		width: 65px;
	}
	table tr td table {
		margin-left: 0px;
	}

</style>

<h1>Configuraci&oacute;n</h1>
<hr width="100%">
<br>
<h2>Favoritos</h2>
<br>
</center>
<table border="0">
	<tr>
		
		<td align="center"><img src="img\home.png"></td>
		<td align="left"><h4>Agregar tu direcci&oacute;n particular</h4></td>
	</tr>
	<tr>
		<td align="right"><img src="img\trabajo.png"></td>
		<td align="left"><h4>Agregar tu direcci&oacute;n laboral</h4></td>
	</tr>
	<tr>
		<td align="right" colspan="2"><a href="#"><h4> M&aacute;s ubicaciones guardadas</h4></a></td>
	</tr>
</table>
<br>
<hr width="100%">
<br>
<h2>Seguridad</h2>
<br>
<table border="0">

	<tr>
		<td align="right"><img src="img\cuenta.png"></td>
		<td align="left">
			<table border="0">
				<tr>
					<td><h4>Administra tus permisos</h4></td>
				</tr>
				<tr>
					<td><h5>Verifica el acceso que tienes a los almacenes</h5></td>
				</tr>
			</table>
		</td>
	</tr>
	
	<tr>
		<td align="right"><img src="img\verif.png"></td>
		<td align="left">
			<table border="0">
				<tr>
					<td><h4>Verifica tu Item</h4></td>
				</tr>
				<tr>
					<td><h5>Usa el Id Item correcto</h5></td>
				</tr>
			</table>
		</td>
	</tr>
	
	<tr>
		<td align="right"><img src="img\check.png"></td>
		<td align="left">
			<table border="0">
				<tr>
					<td><h4>Confirma tus rutas</h4></td>
				</tr>
				<tr>
					<td><h5>Asegura las mejores rutas para tus viajes m&aacute;s frecuentes</h5></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<br>
<hr>
<br>
<h2><a href="#">Privacidad</a></h2>
<h3>Administra la informaci&oacute;n que compartes con nosotros</h3>
<br>
<hr>
<br>
<h2><a href="#">Seguridad</a></h2>
<h3>Usa la verificaci&oacute;n en 2 pasos para contolar la seguridad de tu cuenta</h3>
<br>
<hr>
<br>
<h2><a href="login.php">Cerrar sesión</a></h2>
<br>

<?php
include("inc/foot.php");
?>