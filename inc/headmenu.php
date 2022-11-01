<html>
	<head>
		<title>Seguimiento Academico</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<style type="text/css">
		*{
			padding: 5px;
			margin: 0;
			box-sizing: border-box;
		}
		body {
			background: white ;
			font-family: 'calibri';
			font-size: x-large;
		}
		.menu {
			width: 900px;
			margin: 0 auto;
		}
		header {
			background: #ABB1BB;
			width: 100%;
			clear: both;
			content: '';
			display: table;
		}
		img {
			width:22¿00px;
			height: 125px;
			float: left;
			padding: 8px;
			
		}
		nav {
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		nav ul li {
			list-style: none;
			margin-left: 75px;
			padding: 20px 0;
			float: left;
			position: relative;
		}
		nav ul li a {
			display: inline-block;
			text-decoration: none;
			color: black;
			font-size: 22px;
			position: relative;
		}
		nav ul li a::after {
			content: '';
			position: absolute;
			left: 0;
			bottom: 0;
			width: 100%;
			height: 3px;
			background-color: white;
			transform: scaleX(0);
			transform-origin: right;
			transition: 0.5s;
		}
		nav ul li a:hover::after {
			transform: scaleX(1);
			transform-origin: left;
		}
	</style>

	<body>
		<center>
		<header>
			<div class="menu">
				<nav>
					<img src="img\logo.png">
				<ul>
					<li><a href="menu.php">Inicio</a></li>
					<li><a href="estudiante.php">Ver notas</a></li>
					<li><a href="ajustes.php">Ajustes</a></li>
					<li><a href="index.php">Salir</a></li>
				</ul>
				</nav>
			</div>
		</header>
		<br>
		<br>



