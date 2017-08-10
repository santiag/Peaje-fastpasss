<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sistema de recarga de peajes FastPass</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<style type="text/css">
@import "gallery.css";
</style>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Peaje </a></h1>
			<p> Sistema de peajes con tarjeta prepago</p>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php">Inicio</a></li>
			<li><a href="info.php">Información</a></li>
			<li><a href="fastpass.php">FastPass</a></li>
			<li><a href="registro.php">Registro Vehiculo</a></li>
			<li><a href="contacto.php">Contacto</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div id="gallery-wrapper">
						<div id="gallery"> <img class="output" src="images/img04.jpg" alt="" />
							<div id="thumbnail-bg">
								<ul class="thumbnails">
									<li><img class="active" src="images/img04.jpg" title="Monument Valley" alt="" width="604" height="375" onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=70" /></li>
									<li><img src="images/img05.jpg" title="Honey Bee" alt="" width="100" height="75"  onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=70" /></li>
									<li><img src="images/img06.jpg" title="Cup of Coffee" alt="" width="100" height="75"  onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=70" /></li>
									<li><img src="images/img07.jpg" title="Grand Tetons" alt="" width="100" height="75"  onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=70" /></li>
								</ul>
							</div>
							<br class="clear" />
						</div>
						<script type="text/javascript">

						$('#gallery').gallerax({
							outputSelector: 		'.output',					// Output selector
							thumbnailsSelector:		'.thumbnails li img',		// Thumbnails selector
							captionSelector:		'.caption'					// Caption selector
						});

					</script>
						<!-- end -->
					</div>

				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						
						<li>
							<h2>Recarga de saldo</h2>
							  
							  
							  
							  <?php 

$cedu = $_POST["campo6"]; # esta es el codigo de la tarjeta del vehiculo en el formulario anterior
$saldo1 = $_POST["campo7"];


$db=mysqli_connect('localhost','root','vertrigo','peaje');
		if($db!=null)
		{
		$consulta="select * from vehiculos where codigo = '$cedu' ";
		$resultado=mysqli_query($db,$consulta);
		$num_res=mysqli_num_rows($resultado);
		
		if( $num_res == 0 ){
			echo "código invalido, no se encuentra en el sistema";
			echo ' El código que usted ingreso es : $ '.$cedu.' ';
		}
		else{
		
			for($i=0; $i<$num_res; $i++)
			{
			$fila=mysqli_fetch_assoc($resultado);
			
			echo'<h2>Saldo actual:</h2>';
			echo'<h2> $ '.$saldo1.' Pesos</h2>';
			
			
			echo'<h2>Valor a recargar:</h2>';
			echo'<form method="post" action="validarrecarga.php"> ';
			echo'<div> ';
			echo'<input type="text" name="campo4" id="campo4" value="" />';
			echo '<input type="hidden" name="campo11" id="campo11" value="'.$cedu.'" />';
			echo ' <input type="hidden" name="campo12" id="campo12" value="'.$saldo1.'" />';
			echo'<input type="submit" id="search-submit" value="Recargar" />';
			echo'</div>';
			echo'</form>';
			

			echo'<h4> Recuerde indicar esta cifra sin puntos, guione o comas. solo el número</h4>';
			
			
			
// $sql = "UPDATE vehiculos SET saldo = '$saldo2' WHERE codigo = '$cedu'" ;
// mysqli_query($db,$sql);
			
			}
			
			
			$hombe = $fila['nombre'] ;
			$ape = $fila['apellidos'] ;
			
			mysqli_close($db);
		} 		
		} //corchete de cierre del else
?> 
							  						  
							  
						</li>

					</ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) 2011 Fastpass S.A.S. Todos los derechos reservados. Diseñado por <a href="http://aumentada.net">Santiago Bernal Betancourth</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
