<html>
	<head>
		<link rel="stylesheet" href="jqm/jquery.mobile-1.4.5.min.css">
		<script src="jqm/jquery-1.10.2.min.js" ></script>
		<script src="jqm/jquery.mobile-1.4.0.min.js"></script>
	</head>
	<body>	
		<!--un data rol es un atributo personalizado compatible con html5, su sintaxis es "data-" y es lo que la hace
		platarforma de desarrollo,  -->
		<div data-role="page" id="pagina1">
			<!--Cabecera-->
			<div data-role="header" data-theme="b" data-position="fixed">
				<h1>Botones </h1>
				<div data-role="navbar">
					<ul>
						<li><a href="" >1</a></li>
						<li><a href="segundo.php" data-transition= "Slide" >2</a></li>
						<li><a href="tres.php" data-transition= "Slide" >3</a></li>
						<li><a href="cuatro.php" data-transition= "Slide" >4</a></li>
						<li><a href="cinco.php" data-transition= "Slide" >5</a></li>
					</ul>
				</div>	
			</div>	
			<!--Contenido-->
			<div data-role="content" data-theme="a" >
				<form action="archivo.php" method="post" data-ajax="false">
					<label for="correo">Correo</label>
					<input type="email" name="correo" id="correo" placeholder="Ejemplo: mgelistat@hotmail.com">

					<label for="descripcion">Password:</label>
					<input type="password" name="contra">

					<input type="submit" value="Entrar">

					
					

				</form>
			</div>


			<!--Pie de pagina-->
			<div data-role="footer" data-theme="b" class="ui-bar" data-position="fixed" data-id='piefijo'>
				<h1>pie de pagina</h1>				
			</div>
		</div>


	</body>
</html>