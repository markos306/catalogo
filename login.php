
<head></head>
<body>
	<div class="cabecera">
		<?php include ("plantilla/cabecera.php"); ?>
	</div>
	<div class="barra">
			<div class="logo"><a href="http://www.ucn.cl"><img src="imagen/logo_C2p.png" alt="Universida Católica del Norte"/> </a></div>
			<div class="titulo">Catálogo de Fotografías</div>
	</div>
	<center>
	<div class="logear">
		<form is="iron-form" id="formPost" method="post" action="/Catalogo/inicio.php">	
		  	<paper-input label="Nombre de Usuario" willvalidate id="user" layout vertical></paper-input>
		  	<paper-input label="Contraseña" willvalidate type="password" id="pass" layout vertical></paper-input>
		  	<button id="ing" type="submit">INGRESAR</button>
		</form>
	</div>
   	</center>


</body>