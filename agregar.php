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
            <div class="archivo">
                <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="MAX_FILE_SIZE" value="26214400" />
                    <input type="file" name="archivo[]" multiple="multiple" id="lineagr">
                    <button type="submit" id="sub" >Subir</button>
                </form>
            </div>
            
            <?php
    # definimos la carpeta destino
    $carpetaDestino="imagenes/";
    
 
    # si hay algun archivo que subir
    if($_FILES["archivo"]["name"][0])
    {
 
        # recorremos todos los arhivos que se han subido
        for($i=0;$i<count($_FILES["archivo"]["name"]);$i++)
        {
 
            # si es un formato de imagen
            

            if($_FILES["archivo"]["type"][$i]=="image/jpeg" || $_FILES["archivo"]["type"][$i]=="image/pjpeg" || $_FILES["archivo"]["type"][$i]=="image/gif" || $_FILES["archivo"]["type"][$i]=="image/png" || $_FILES["archivo"]["type"][$i]=="image/JPEG" || $_FILES["archivo"]["type"][$i]=="image/jpg" || $_FILES["archivo"]["type"][$i]=="image/JPEG" || $_FILES["archivo"]["type"][$i]=="image/JPG"   )
            {
 
                # si exsite la carpeta o se ha creado
                if(file_exists($carpetaDestino) || @mkdir($carpetaDestino))
                {
                    $origen=$_FILES["archivo"]["tmp_name"][$i];
                    $destino=$carpetaDestino.$_FILES["archivo"]["name"][$i];
 
                    # movemos el archivo
                    if(@move_uploaded_file($origen, $destino))
                    { ?>
                        <div class="detalle">
                        <?php
                        echo "<br>".$_FILES["archivo"]["name"][$i]." movido correctamente";
                        echo "<br> Tamaño:".round(($_FILES["archivo"]["size"][$i]/1048576) , 3)."MB.";
                        ?>
                        </div>
                    <?php
                    }else{
                        echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"][$i];
                        echo "<br>tipo: ".$_FILES["archivo"]["type"][$i];
                    }
                }else{
                    echo "<br>No se ha podido crear la carpeta: up/".$user;
                }
            }else{ ?>
                <div class="detalle">
             <?php
                echo "<br>".$_FILES["archivo"]["name"][$i]." - No es un archivo permitido";
                echo "<br>tipo: ".$_FILES["archivo"]["type"][$i];
              ?>
            </div>
            <?php  
            }
        }
    
        }else{ ?>
            <div class="detalle">
                <?php
                echo "<br>No ha agregado imagen(es)";
                ?>
            </div>
            <?php
        }
        ?>
    
            </center>
    

        </div>