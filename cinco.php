<html>
	<head>
		<link rel="stylesheet" href="jqm/jquery.mobile-1.4.5.min.css">
		<script src="jqm/jquery-1.10.2.min.js" ></script>
		<script src="jqm/jquery.mobile-1.4.0.min.js"></script>
	</head>
	<body>	
		<!--un data rol es un atributo personalizado compatible con html5, su sintaxis es "data-" y es lo que la hace
		platarforma de desarrollo,  -->
		<div data-role="page" >
			<!--Cabecera-->
			<div data-role="header" data-theme="b" data-position="fixed">
				<h1>Cabecera </h1>
				<div data-role="navbar">
					<ul>
						<li><a href="index.php" data-rel= "back" >1</a></li>
						<li><a href="segundo.php" data-rel= "back" >2</a></li>
						<li><a href="tres.php" data-rel= "back" >3</a></li>
						<li><a href="cuatro.php" data-rel= "back" >4</a></li>
						<li><a href=""  >5</a></li>
					</ul>
				</div>	
			</div>	
			<!--Contenido-->
			<div data-role="content" data-theme="b">
				<p>Estas en la pagina 5</p>

			</div>
			<!--Pie de pagina-->
			<div data-role="footer" data-theme="b" class="ui-bar" data-position="fixed"  data-id='piefijo'>
				<div data-role="controlgroup" data-type="horizontal">
					<a href="#agregar" data-role="button" data-theme="a" data-transition= "turn" data-rel="" data-icon="plus">Agregar</a>
					<a href="#eliminar" data-role="button" data-theme="a" data-transition= "turn" data-rel="" data-icon="delete">Eliminar</a>									
				</div>				
			</div>
		</div>


	</body>
</html>