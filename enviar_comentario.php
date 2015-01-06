<!DOCTYPE HTML>
<html>
	<head>
		<link rel="icon" href="images/favicon.ico">
		<title>Contactos y Sugerencias</title>
		
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/menu.css" rel="stylesheet">
		<link href="css/formato_disu.css" rel="stylesheet">
		<style type="text/css">

			#texto_central-rfo {
				padding: 32px 140px 32px 180px;
				width: 940px;
			}

		</style>
		
	</head>
	<body>
		<div id="pagina">
			<header>
			<div id="wrapper">
				<div id="fondo_cabecera">
					<div id="blanco_norte"></div>
					<div id="rojo_norte"></div>
				</div>
				<div id="cabecera_logo">
					<div id="disu_logotipo">
						<img src="images/logo_disu.jpg" height="80" width="184" alt="2ne1">
					</div>
					<div id="titulo_completo">
						<h2 style="margin: 2px 0px;">Dirección de Interacción Social Universitaria<br>
						<small style="color:#ffffff;"> Por una universidad inclusiva, sin barreras y facilitadora de conocimiento</small>
						</h2>
					</div>
					<div style="clear:both"></div>
				</div>
			</div>

			<div id="menu_principal">
				<nav>
					<ul id="menu" class="topmenu">
						<li><a class="btn btn-info" href="index.html">Inicio</a></li>
						<li><a class="btn btn-info" href="que_esladisu.html">¿Qu&eacute; es la DISU?</a></li>
						<li><a class="btn btn-info" href="antecedentes.html">Antecedentes</a></li>
						<li><a class="btn btn-info" href="funciones_objetivos-disu.html">Funciones - Objetivos</a></li>
						<li><a class="btn btn-info" href="contactos_y_sugerencias.html">Contactos</a></li>
					</ul>
				</nav>
			</div>
			<div id="lineas">
				<div id="linea1">
				</div>
				<div id="linea2">
				</div>
			</div>
			</header>
			<div id="contenido">
				<div id="texto_central-rfo">
					<section>
						<article>
							<h3>
								Contactos y Sugerencias
							</h3>
							<?php
								session_start();

								//Obtener variables
								echo "Tu usuario es: ".$_SESSION['usuario']."<br /> Tu contraseña es: ".$_SESSION['contrasena'];

								$comentario = $_POST['comentario'];
	
								echo "<br />el comentario es '$comentario'";

								echo "<br /><br /><br />
								<table border=1 width=100%>
									<tr>
									<th>La etiqueta</th>
									<th>Tus datos</th>
									</tr>
									<form action='registrar_comentario.php' method='post'>
									<tr>
									<th>Nombre:</th> <td><input type='text' name='nombre'></td>
									</tr>
									<tr>
									<th>Email:</th> <td><input type='text' name='email'></td>
									</tr>
									<tr>
									<th>Tu sugerencia:</th>
									<td><textarea name='comentario' rows='4' cols='50'>$comentario</textarea></td>
									</tr>
									<tr>
									<td></td>
									<td><input type='submit' value='registrar'></td>
									</tr>
								</form>
								</table>"
							?>
						</article>
						<!-- Ejemplo de columnas -->

						<!-- No me estan funcionando -->
						<aside>

						</aside>
					</section>
				</div>
				<div id="texto_imagen-central">
					<div id="funciones_objetivos">
						<div id="funciones">
						</div>
						<div id="objetivos">

						</div>
					</div>
					<div id="imagen_central-derecha">

					</div>
				</div>
			</div>
			<footer>
				DIRECCIÓN DE INTERACCIÓN SOCIAL UNIVERSITARIA - CAMPUS UNIVERSITARIO<br>
				(Edificio Multiacadémico)<br>
				email (correo): disu@umss.edu.bo<br>
				Cochabamba - Bolivia
				<!-- <p>&copy; Company 2014</p> -->
			</footer>
		</div>
		<!-- /container -->


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="js/jquery-2.1.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>

