<?php session_start(); ?>
<html>
<head>
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
        </div> <!-- end of sidebar -->
        
        <div id="templatemo_content">
        	<center>
        	  <h2>Noticias</h2></center>
			  
            <div class="content_box">
            
            <?php
			  
include('conex.php'); 

$result = mysql_query("select * from noticias");

?>

<table class="tablanoticia">
              	    <tr>
              	      <td></td>
					  
              	      <td></td>
           	        </tr>
                    <?php
while ($row=mysql_fetch_array($result))
{
echo '<tr><td><img class="tablaimagen" src="'.$row["imagen"].'" /> </td>';
echo '<td>'.$row["noticia"].'</td>';
}
mysql_free_result($result);


?>
   </table>         
              <div class="cleaner h30">

			  
			  
              </div>
			  
            
          </div>
		     
            <div class="content_box">
 
            	
				<center> <h2>Video Noticia del dia</h2> </center>
                
				<div class="col_w290 float_l">
				
				
				<table class="tablanoticia">
              	    <tr>
              	      <td> Reckful Best Video
                 <iframe width="285" height="200" src="//www.youtube.com/embed/aU8pOwuqt3k" frameborder="0" allowfullscreen></iframe></td>
					  
              	      <td> Reckful Arena Asian
                <iframe width="285" height="200" src="//www.youtube.com/embed/NhtqhKlyQ1c" frameborder="0" allowfullscreen></iframe></td>
           	        </tr>
				 </table>

		    </div>
           
                <div class="cleaner"></div>
            </div>
            
            <div class="content_box last_box">
            	
               <h2>Mejores Screenshots de la Semana</h2>
                
				<center>
				
                <div id="gallery">
					<a href="images/gallery/image_01_b.jpg" class="pirobox" title="For the ALIANCE"><img src="images/gallery/image_01.jpg" alt="1" /></a>
                    <a href="images/gallery/image_02_b.jpg" class="pirobox" title="WIN LOL"><img src="images/gallery/image_02.jpg" alt="2" /></a>
                    <a href="images/gallery/image_03_b.jpg" class="pirobox" title="Mejor Hermandad Ragnaros"><img src="images/gallery/image_03.jpg" alt="3" /></a>
                </div>
                
				</center>
				
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