<head></head>
<body>
	<div class="cabecera">
		<?php include ("plantilla/cabecera.php"); ?>
	</div>


	<paper-drawer-panel>
		<div drawer>
			<paper-toolbar class="menu">
				<div id="titmenu">
				<section id="imag"><a href="http://www.ucn.cl"><img src="imagen/logo_sp.png" alt="Universida Católica del Norte"/> </a>
				<section id="tit">MENÚ</section>
				</div>
			</paper-toolbar>
			<paper-menu class="list">
				<paper-item onClick="location.href = 'buscar.php'">
					<paper-icon-button icon="icons:search" id="icono"></paper-icon-button>
              		<span id="menup">Búsqueda</span>
				</paper-item>
				<paper-item onClick="location.href = 'agregar.php'">
					<paper-icon-button icon="image:add-to-photos" id="icono"></paper-icon-button>
              		<span id="menup">Subir</span>
				</paper-item>
				<paper-item onClick="location.href = 'login.php'">
					<paper-icon-button icon="icons:close" id="icono"></paper-icon-button>
              		<span id="menup">Cerrar Sesión</span>
				</paper-item>
			</paper-menu>
		</div>
		<div main class="main">
			<paper-toolbar class="barra">
				<paper-icon-button paper-drawer-toggle icon="view-list"></paper-icon-button>
		        <span>Cátalogo Fotográfico</span>

                <paper-item  id="home" onClick="location.href = 'inicio.php'">
					<paper-icon-button icon="icons:home" id="icono"></paper-icon-button>
              		<span id="menupp">Inicio</span>
				</paper-item>
        	</paper-toolbar>
        	<center>

        	<div class="buscador">
	        	<form method="POST" action="/Catalogo/buscador.php"> 
					<paper-icon-button icon="icons:youtube-searched-for" id="icono"></paper-icon-button>
					<input type="text" name="T1" id="lineadeBus"><br><br> 
					<button type="submit" id="busc">Buscar</button> 
				</form>
			
			</div>
			</center>
        </div>