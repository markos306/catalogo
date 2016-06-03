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
		
		<div id="galeriaa">
		<section id="least">
            <?php
            $directorio = opendir("./imagenes"); //ruta actual
            $ar;
            $cont=0;
            while ($archivo = readdir($directorio))
            {
                $ar[$cont]=$archivo;
                $cont++;
            } ?>
            
            <!-- Least Gallery: Fullscreen Preview -->
            <div class="least-preview"></div>
            <!-- Least Gallery: Thumbnails -->
            <ul class="least-gallery">
                <!-- 1 || Element with data-caption ||-->
                <li>
                    <?php $cont--; ?>
                    <a href="imagenes/<?php echo $ar[$cont];?>" title="Acuicultura" data-subtitle="Ver fotografía" data-caption="<strong>Bote Sn Miguel</strong>">
                        <img src="imagenes/<?php echo $ar[$cont];?>" alt="Alt Image Text" />
                    </a>
                </li>
                
                <!-- 2 || Element with data-caption as href-attribute ||-->-->
                <li>
                    <?php $cont--; ?>
                    <a href="imagenes/<?php echo $ar[$cont];?>" title="Acuicultura" data-subtitle="Ver fotografía" data-caption="Recolección">
                        <img src="imagenes/<?php echo $ar[$cont];?>" alt="Alt Image Text" />
                    </a>
                </li>
                
                <!-- 3 -->
                <li>
                    <?php $cont--; ?>
                    <a href="imagenes/<?php echo $ar[$cont];?>" title="Ciencias del Mar" data-subtitle="Ver fotografía" data-caption="Boris, Sebastien, Marcel">
                        <img src="imagenes/<?php echo $ar[$cont];?>" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 4 -->
                <li>
                    <?php $cont--; ?>
                    <a href="imagenes/<?php echo $ar[$cont];?>" title="Lab. Microscopía" data-subtitle="Ver fotografía">
                        <img src="imagenes/<?php echo $ar[$cont];?>" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 5 -->
                <li>
                    <?php $cont--; ?>
                    <a href="imagenes/<?php echo $ar[$cont];?>" title="Lab. Microscopía" data-subtitle="Ver fotografía">
                        <img src="imagenes/<?php echo $ar[$cont];?>" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 6 -->
                <li>
                    <?php $cont--; ?>
                    <a href="imagenes/<?php echo $ar[$cont];?>" title="Lanzamiento Acuiferos" data-subtitle="Ver fotografía">
                        <img src="imagenes/<?php echo $ar[$cont];?>" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 7 -->
                <li>
                    <?php $cont--; ?>
                    <a href="imagenes/<?php echo $ar[$cont];?>" title="Lanzamiento Acuiferos" data-subtitle="Ver fotografía">
                        <img src="imagenes/<?php echo $ar[$cont];?>" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 8 -->
                <li>
                    <?php $cont--; ?>
                    <a href="imagenes/<?php echo $ar[$cont];?>" title="Ciencias del Mar" data-subtitle="Ver fotografía">
                        <img src="imagenes/<?php echo $ar[$cont];?>" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 9 -->
                <li>
                    <?php $cont--; ?>
                    <a href="imagenes/<?php echo $ar[$cont];?>" title="Reunión UCN" data-subtitle="Ver fotografía" data-captiom="<strong>Ciencias del Mar</strong>">
                        <img src="imagenes/<?php echo $ar[$cont];?>" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 10 -->
                <li>
                    <?php $cont--; ?>
                    <a href="imagenes/<?php echo $ar[$cont];?>" title="Visamaticos" data-subtitle="Ver fotografía" data-caption="<strong>Guayacan</strong>">
                        <img src="imagenes/<?php echo $ar[$cont];?>" alt="Alt Image Text" />
                    </a>
                </li>
                <!-- 11 -->
                <li>
                    <?php $cont--; ?>
                    <a href="imagenes/<?php echo $ar[$cont];?>" title="Visamaticos" data-subtitle="Ver fotografía" data-caption="José Burgos">
                        <img src="imagenes/<?php echo $ar[$cont];?>" alt="Alt Image Text" />
                    </a>
                </li>
                <!-- 12 -->
                <li>
                    <?php $cont--; ?>
                    <a href="imagenes/<?php echo $ar[$cont];?>" title="Visamaticos" data-subtitle="Ver fotografía" data-caption="José Montoya">
                        <img src="imagenes/<?php echo $ar[$cont];?>" alt="Alt Image Text" />
                    </a>
                </li>
            </ul>
            
            <script src="js/jquery.min.js"></script>
        	<script src="js/least.min.js"></script>
		

        <script>
            $(document).ready(function(){
                $('.least-gallery').least();
            });

            /* Google Analytics */
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-16040332-11', 'leastjs.com');
            ga('set', 'anonymizeIp', true);
            ga('send', 'pageview');
        </script>


        </section>
        </div>

		</div>
	</paper-drawer-panel>
</body>