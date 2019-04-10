<?php session_start(); ?>
<html>
<head>

		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="vtip.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			setTimeout(function() {$('#mensaje').fadeOut('fast');}, 3000);
		});
		</script>

<meta charset="utf-8">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/form.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/forms.js"></script>

     <script>


     </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GameOnline</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link href="css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/piroBox.1_2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>

<!-- Estilo Calendario
		<style>
		* {margin: 0;padding: 0;font-family:Helvetica, Arial, Tahoma, sans-serif;}
		html,body{height:100%;width:100%;outline:0;overflow:hidden}
		body {text-align:center;margin:0;width:100%;height:100%;overflow:hidden;background:#fff;padding:30px 0}
		p#vtip { display: none; position: absolute; padding: 5px; left: 5px; font-size: 0.75em; background-color: #666666; border: 1px solid #666666; -moz-border-radius: 5px; -webkit-border-radius: 5px; z-index: 9999;color:white }
		p#vtip #vtipArrow { position: absolute; top: -10px; left: 5px }
		.ok{border:1px dotted green;color:green;padding:10px}
		#agenda{margin:10px;width:980px;margin:0 auto}
		#agenda h1{text-align:left;margin:0;font-size:1.5em;color:#312c2b}
		#agenda h2{text-align:left;margin:0;font-size:1em;color:#969696}
		#agenda table.calendario {margin:10px auto;width:100%;border:1px dotted #ccc;font-size:12px;}
		.calendario th {border:1px dotted #ccc;font-weight:bold;background:#666;color:white;padding:10px 5px;}
		.calendario td{padding:10px 5px;text-align:center;border:1px dotted #ccc;width:100px;white-space:pre-line;}
		.calendario td p{margin:5px;font-size:12px;border:1px solid #ccc;text-align:left;padding:5px}
		.calendario td.desactivada {background:#dcdcdc;}
		.calendario td.activa {background:#ffffff;}
		.calendario td.evento {background:#312c2b;color:white}
		.calendario td.hoy{font-weight:bold}
		.calendario form{margin:5px 0 !important}
		.calendario input.text{border:1px dotted #ccc;background:white;width:200px !important}
		.calendario input.enviar{border:1px dotted #ccc;background:white;width:70px !important;background:#ccc;margin:0 0 0 10px;}
		.calendario td img{vertical-align:middle;float:right;border:0;width:16px;height:16px}
		.vtip{cursor:pointer;}
		.verde{font-size:125% !important;font-weight:bold;color:green;}
		.rojo{font-size:125% !important;font-weight:bold;color:red;}
		</style>
-->

</head>
<body>

<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">

	<div id="tempaltemo_header">
    	<span id="header_icon"></span>
    	<div id="header_content">
        	<div id="site_title">
				<a href="#" rel="nofollow" target="_parent"><img src="images/templatemo_logo.png" alt="LOGO" /></a>            </div>
            <p><span style="color:#000">Videojuegos jugados vía Internet independientemente de la plataforma.Puede tratarse de videojuegos multijugador, en los que se juega con otras personas o videojuegos de navegador que se descargan desde la web y se ejecutan en el navegador.</span></p>
		       <?php
		  		  if(isset($_SESSION['nivel']) && $_SESSION['nivel'] == '1')
		              {
					  ?>
            <div>
              <a href="administrador.php" class="detail float_r">ADMINISTRAR</a>
            </div>
            <?php
			} 		 
			?>
            
		</div>
    </div> <!-- end of header -->
	
	<?php
		  		  if(isset($_SESSION['nivel']) && $_SESSION['nivel'] == '1' | '2')
		              {
					  ?>
					  
					  <span id="letra_2">
					 <h6> Usuario Conectado </h6>
					  </span>
					  
	<div id="usuario">
	<span id="letra_3">
					  Usuario:
					  </span>
		<span id="letra">
		<?php
		echo $_SESSION['usuario'];
		?>
		</span>
		</div>
      <?php
			} 		 
			?>
			
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main"><span id="main_top"></span><span id="main_bottom"></span>
    	
        <div id="templatemo_sidebar">
        
        	<div id="templatemo_menu">
                <ul>
                    <li><a href="index.php" rel="nofollow" target="_parent">Inicio</a></li>
                    <li><a href="noticias.php" target="_parent">Noticias</a></li>
                    <li><a rel="nofollow" href="foro.php" target="_parent">Foro</a></li>
                    <li><a rel="nofollow" href="livetream.php" target="_parent">LiveStreams</a></li>
                    <li><a rel="nofollow" href="consejo.php" target="_parent">Consejos del Dia</a></li>
                    <li><a rel="nofollow" href="contactar.php" target="_parent">Contactanos</a></li>
              </ul>    	
            </div> <!-- end of templatemo_menu -->
        
        	<div class="sidebar_box">
            	<div class="sb_title">Login</div>
                <div class="sb_content">
                	<div id="login_form">
                        <form method="post" action="validar.php">
                        	<p><span>Nombre de Usuario:</span>
                              <input type="text" id="login" name="login" class="login_input" />
                            </p>
                            <p><span>Clave:</span>
                              <input type="password" id="clave" name="clave" class="login_input" />
                            </p>
                            <p>
                              <input type="submit" name="submit" id="login_submit" value=" " />
                            </p>
                            <p>&nbsp;</p>
                        </form>
                        
                        <div id="cerrar_submit">
                        <form>
                        <input name="submit" type="submit" id="cerrar_submit" formaction="salir.php" value=" " />
                        </form>
                        </div>
                        
                        <br>
                        <br>
                         <div id="crear_submit">
                        <form>
                        <input name="submit" type="submit" id="crear_submit" formaction="salir.php" value=" " />
                        </form>
                       </div> 
                        
 					</div>                            
                </div>
                <div class="sb_bottom"></div>            
            </div>
            
            <div class="sidebar_box">
              <div class="sb_content"></div>
               
              <div class="sb_bottom"></div>  
                        
            </div>
            
            <div class="cleaner"></div>
        </div><!-- end of sidebar -->
        
        <div id="templatemo_content">
        	
            <div class="content_box">
            	<center><h2>Pagina Pricipal de LiveStreams</h2></center>
                <p>
                <br>
                  
                <a href="http://es-es.twitch.tv/" target="_blank"><img class="image_wrapper image_consejos" src="images/amigos-gamers2.jpg" alt="Image 1" /></a></p>
                
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp; </p>
                <center>
<h5><a href="consejo.php">Consejos del Dia</a></h5>
                <p>Mejores LiveStreams Games</p>
            <p>La mejor ZONA de GameOnline para mejorar constantemente en tu gameplay y vida cotidiana ligada al juego.</p>
              </center>
          </div>
            
            
            <div class="content_box">
            	<center><h5>Consejo de la Semana</h5></center>
                <br>
                
                    <?php
			  
include('conex.php'); 

$result = mysql_query("select * from consejo_semana");

?>

<table class="tablaconsejo">
              	    <tr>
              	      <td></td>
           	        </tr>
                    <?php
while ($row=mysql_fetch_array($result))
{
echo '<td>'.$row["consejo"].'</td>';
}
mysql_free_result($result);


?>
   </table>         
                
          </div>
            
            <div class="content_box">
            	
                <div class="col_w290 float_l">
                
				</div>
                
                <div class="col_w290 cw290_last float_r">
                  
				</div>
                
                <div class="cleaner"></div>
            </div>
            
            <div class="content_box last_box">
            	<center><h2>Mejores Screenshots de la Semana</h2></center>
                <br>
                <br>       
                <div id="gallery">
					<a href="images/gallery/image_01_b.jpg" class="pirobox" title="For the ALIANCE"><img src="images/gallery/image_01.jpg" alt="1" /></a>
                    <a href="images/gallery/image_02_b.jpg" class="pirobox" title="WIN LOL"><img src="images/gallery/image_02.jpg" alt="2" /></a>
                    <a href="images/gallery/image_03_b.jpg" class="pirobox" title="Mejor Hermandad Ragnaros"><img src="images/gallery/image_03.jpg" alt="3" /></a>
                </div> <!-- end of Gallery -->
                
              <div class="cleaner h20"></div>
            </div>
            
        </div>
        
        <div class="cleaner"></div>    
    </div>
    
    <div id="templatemo_main_bottom">
    </div>

</div> <!-- end of wrapper -->
</div>

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
        Copyright © 2014 <a href="index.php">Game Online</a> | 
        Designed by <a rel="nofollow" href="https://www.facebook.com/roberto.fernandez.9674" target="_parent">Roberto Fernandez</a> |
    </div>
</div>


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>