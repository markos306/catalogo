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
				<paper-item>
					<paper-icon-button icon="icons:android" id="icono"></paper-icon-button>
              		<span id="menup">1ermenú</span>
				</paper-item>
				<paper-item>
					<paper-icon-button icon="icons:android" id="icono"></paper-icon-button>
              		<span id="menup">2domenú</span>
				</paper-item>
			</paper-menu>
		</div>
		<div main class="main">
			<paper-toolbar class="barra">
				<paper-icon-button paper-drawer-toggle icon="view-list"></paper-icon-button>
		        <span>Cátalogo Fotográfico</span>
        	</paper-toolbar>
		
		<div id="galeriaa">
		<section id="least">
            
            <!-- Least Gallery: Fullscreen Preview -->
            <div class="least-preview"></div>
            
            <!-- Least Gallery: Thumbnails -->
            <ul class="least-gallery">
                <!-- 1 || Element with data-caption ||-->
                <li>
                    <a href="imagen/01.jpg" title="Skateboard" data-subtitle="View Picture" data-caption="<strong>Bold text</strong> normal caption text">
                        <img src="imagen/01.jpg" alt="Alt Image Text" />
                    </a>
                </li>
                
                <!-- 2 || Element with data-caption as href-attribute ||-->-->
                <li>
                    <a href="imagen/02.jpg" title="Train Rails" data-subtitle="View Picture" data-caption="Now it's possibe to add an URL-Link into caption text - <a href='http://www.google.com' target='_blank'>GOOGLE</a>">
                        <img src="imagen/02.jpg" alt="Alt Image Text" />
                    </a>
                </li>
                
                <!-- 3 -->
                <li>
                    <a href="imagen/03.jpg" title="Apple" data-subtitle="View Picture">
                        <img src="imagen/03.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 4 -->
                <li>
                    <a href="imagen/04.jpg" title="Road Trip" data-subtitle="View Picture">
                        <img src="imagen/04.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 5 -->
                <li>
                    <a href="imagen/05.jpg" title="Desert" data-subtitle="View Picture">
                        <img src="imagen/05.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 6 -->
                <li>
                    <a href="imagen/06.jpg" title="Tree" data-subtitle="View Picture">
                        <img src="imagen/06.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 7 -->
                <li>
                    <a href="imagen/07.jpg" title="MacBook" data-subtitle="View Picture">
                        <img src="imagen/07.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 8 -->
                <li>
                    <a href="imagen/08.jpg" title="Clock" data-subtitle="View Picture">
                        <img src="imagen/08.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 9 -->
                <li>
                    <a href="imagen/09.jpg" title="iPhone" data-subtitle="View Picture">
                        <img src="imagen/09.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 10 -->
                <li>
                    <a href="imagen/10.jpg" title="New York" data-subtitle="View Picture">
                        <img src="imagen/10.jpg" alt="Alt Image Text" />
                    </a>
                </li>
                <!-- 11 -->
                <li>
                    <a href="imagen/11.jpg" title="New York" data-subtitle="View Picture">
                        <img src="imagen/12.jpg" alt="Alt Image Text" />
                    </a>
                </li>
                <!-- 12 -->
                <li>
                    <a href="imagen/12.jpg" title="New York" data-subtitle="View Picture">
                        <img src="imagen/12.jpg" alt="Alt Image Text" />
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