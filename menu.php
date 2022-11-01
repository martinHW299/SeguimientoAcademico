<?php
include("inc\headmenu.php");
?>

<script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>

<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	body {
		position: center;
		background-size: cover;
		background-repeat: no-repeat;
		background-color: #E7E7B6;
		color: black;
	}
	img{
		border-radius: 100px;
	}
	table {
		font-size: 30px;
		border-radius: 8px;
		text-align: center;
		position: center;
		font-family: 'calibri';

	}
	table td {
		
		padding-right: 30px;
		padding-left: 30px;
		text-align: left;
	}
	table tr td table{
		padding: 10px;
		border: 1px solid white;
		background-color: #CAD2E0;
	}
	table tr td table:hover{
		padding: 10px;
		border: 1px solid yellow;
		background-color: silver;
	}
	table tr td table tr td a {
		color: black;
		text-decoration: none;
	}
	h1 {
		margin-top: 10px;
		margin-bottom: 10px;
		color: black;
	}
	h2{
		margin-top: 10px;
		margin-bottom: 10px;
		color: black;
	}

	.buscar {
		position: center;
		padding: 5px;
	}
	.buscar input {
		width: 400px;
		height: 40px;
		padding: 0 20px;
		font-size: 18px;
		color: violet;
		outline: none;
		border: 1px solid silver;
		border-radius: 30px;

	}
	
	table tr td table tr td img {
		width: 115px;
		height: 120px;
		float: left;
		padding: 8px;
		border-radius: 0px;
	}


	.form-register {
		width: 500px;
		background-image: url(img/textura.jpg);
		background-size: cover;
		padding: 30px;
		margin: auto;
		border-radius: 20px;
		font-family: 'calibri';
		color: black;
		box-shadow: 7px 13px 37px whitesmoke;
	}
	.form-register h4 {
		font-size: 22px;
		margin-bottom: 20px;
	}
	.controls {
		width: 100%;
		background: beige;
		padding: 3px;
		border-radius: 4px;
		margin-bottom: 16px;
		border: 1px solid ghostwhite;
		font-family: 'calibri';
		font-size: 18px;
		color: black;
	}
	.form-register p {
		height: 40px;
		text-align: center;
		font-size: 18px;
		line-height: 40px;
	}
	.form-register a {
		text-align: left;
		color: white;
		text-decoration: none;
	}
	.form-register a:hover {
		color: white;
		text-decoration: underline;
	}
	.form-register .botons {
		width: 100%;
		background: grey;
		border: none;
		padding: 12px;
		color: white;
		margin: 16px 0;
		font-size: 16px;
	}
	.form-register .botons:hover {
		width: 100%;
		background: whitesmoke;
		border: none;
		padding: 12px;
		color: black;
		margin: 16px 0;
		font-size: 16px;
		border-radius: 100px;
	}




</style>
<center>
	<h2> Bienvenido a tu plataforma academica </h2>
</center>
<br>
<br>
<table border="0">
	<tr>
		<td align="left">
			<table border="0">
				<tr>
					<td align="left"></td>
					<td align="right"><img src="img\docentes.png"></td>
				</tr>
				<tr>
					<td align="left"><a href="#">Evalua a tu docente</a></td>
					<td align="right"></td>
				</tr>
			</table>
		</td>
		
		<td align="right">
			<table border="0">
				<tr>
					<td align="left"></td>
					<td align="right"><img src="img\materias.jpg"></td>
				</tr>
				<tr>
					<td align="left"><a href="estudiante.php">Ver materias</a></td>
					<td align="right"></td>
				</tr>
			</table>
		</td>
	</tr>
</table>	
<br>
<hr>
<br>
<h2>Verifica donde se encuentra el Bus de la Universidad 🚌</h2>
<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108742.01499303029!2d-63.21921561915892!3d-17.76115789149641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e81ca7c01a63%3A0x5c8b0a53a467611b!2sSanta%20Cruz%20de%20la%20Sierra!5e0!3m2!1ses!2sbo!4v1653367681608!5m2!1ses!2sbo" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<br>
<br>

<?php
include("inc\foot.php");
?>