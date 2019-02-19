<?php



if ( !empty($_POST['submit']) ) {
	// definimos las variables
	if ( !empty($_POST['nombre']) ) 		$nombre 		= $_POST['nombre'];
	if ( !empty($_POST['empresa']) ) 		$empresa 		= $_POST['empresa'];
	if ( !empty($_POST['telefono']) ) 		$telefono 		= $_POST['telefono'];
	if ( !empty($_POST['email']) ) 			$email 			= $_POST['email'];
	if ( !empty($_POST['mensaje']) ) 			$ms 			= $_POST['mensaje'];

	if ( empty($nombre) ) 	$error['nombre'] 		= 'Por favor de ingresar su Nombre';
	if ( empty($telefono) ) $error['telefono'] 		= 'Por favor de ingresar su Teléfono';
	if ( empty($email) ) 	$error['email'] 		= 'Por favor de ingresar su Correo';
	if ( empty($ms) ) 	$error['mensaje'] 			= 'Por favor de ingresar un Mensaje';


	if ( empty($error) ) {

		$mail='carolina@a3.biz,carolina@a3.biz';
		$thank="http://aixandvic.com/a-tres/contacto.php?add=true";
		$ramitente = $_REQUEST["email"];
		$message = "
		Nombre: ".$nombre."
		Telefono: ".$telefono."
		Correo: ".$email."
		\nMensaje:\n\n ".$ms."
		";

		if(mail($mail, "Mensaje desde la web", $message, "From:$email"))
		header ("Location: $thank");
		die;


	}

}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-MX" lang="es-MX">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta name="description" content="A³ ARCHITECTURE es una empresa con 12 años de experiencia en diseño y construcción de espacios habitables que combinan lo bello y lo funcional. Nuestras obras abarcan el ramo de lo habitacional, residencial, industrial, comercial, restaurantes, departamentos, oficinas y diseño de interiores. Nuestra filosofía de trabajo se basa en la calidad de los proyectos y el compromiso con el cliente. " />
		<meta name="keywords" content="arquitectura, mantenimiento, persianas, diseños, a-tres" />
		<title>A&sup3; - Dream · Dare · Create · Build</title>
	   	<link rel="stylesheet" media="screen" href="css/estilo.css" />
	   	<link rel="shortcut icon" href="img/favicon.ico" />
	  	<script src="js/jquery-min.js" type="text/javascript"></script>
	  	<script src="js/modernizr.js" type="text/javascript"></script>
	  	<script src="js/jquery.cycle.all.js" type="text/javascript"></script>
	   	<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
	   	<script src="js/jquery.mousewheel.min.js" type="text/javascript"></script>
	   	<script src="js/jquery.mCustomScrollbar.js" type="text/javascript"></script>
	  <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

		<link rel="stylesheet" href="css/texto.css">
	</head>

	<body>
		<div id="header">
			<div id="logo"><img src="css/img/a3_logo.jpg" alt="Logo" width="90" height="110" /></div>
			<div id="navbl"></div>
			<div id="nava">
				<ul>
					<li> <a href="index.html">Inicio</a> </li>
					<li> <a href="quienes_somos.php">¿Quiénes somos?</a> </li>
					<li> <a href="#">Residencial</a>
						<ul>
							<li><a href="residencial/cibeles.php">Cibeles</a></li>
							<li><a href="residencial/mangles.php">Mangles</a></li>
							<li><a href="residencial/petroleos.php">Petróleos</a></li>
							<li><a href="residencial/real_del_country.php">Real del Country</a></li>
							<li><a href="#">Salto del Agua</a></li>
							<li><a href="residencial/mangos.php">Los Mangos</a></li>
							<li><a href="#">Alvarado</a></li>
							<li><a href="residencial/goldsmith.php">Goldsmith</a></li>
							<li><a href="#">Providencia</a></li>
							<li><a href="#">Toulouse</a></li>
						</ul>
					</li>

					<li> <a href="#">Comercial</a>
						<ul>
							<li><a href="comercial/treze.php">Treze</a></li>
							<li><a href="comercial/centralcentral.php">Central Central</a></li>
							<li><a href="comercial/sportsbook.php">Sportsbook</a></li>
							<li><a href="comercial/pescaderia.php">La Pescadería</a></li>
							<li><a href="comercial/restaurante_salotto.php">Salotto</a></li>
							<li><a href="comercial/winpalace.php">Winpalace</a></li>
							<li><a href="comercial/magnum_boutique.php">Magnum Boutique</a></li>
							<li><a href="comercial/akabani_revolucion.php">Akabani</a></li>
							<li><a href="comercial/showroom_smart_tech.php">Smart Tech</a></li>
							<li><a href="comercial/oficinas_eurotecsa.php">Eurotecsa</a></li>
						</ul>
					</li>
					<li> <a href="#">Desarrollos</a>
						<ul>
							<li><a href="desarrollos/ferrocarril.php">Ferrocarril</a></li>
							<li><a href="desarrollos/navarra.php">Navarra</a></li>
							<li><a href="desarrollos/mar_china.php">Mar de China</a></li>
							<li><a href="desarrollos/cencibel.php">Cencibel</a></li>
						</ul>
					</li>
					<li> <a href="persianas.html" >Persianas</a> </li>
					<li  style="border:none;" > <a style="border:none;" href="contacto.php" >Contacto</a> </li>
				</ul>
			</div>	<!-- End #nava -->
		</div>	<!-- End #header -->

	  <div id="section" >
	      <h1>Contáctanos</h1>



			<?php if (!empty($error)) { ?>

		<?php foreach ($error as $mensaje) { ?>
			<?= $mensaje ?><br />
		<?php } ?>

	<?php } ?>

	<?php if ( !empty($_GET['add']) ) { ?>

	Se envió con éxito

	<?php } else { ?>

				Envianos un correo:<br /><br />
				<form action="contacto.php" method="post" accept-charset="UTF-8" style="height:310px;" >
				Nombre:<br />
				<input type="text" name="nombre" value="<?php if ( ! empty($nombre) ) echo $nombre; ?>" /><br /><br />
				Empresa<small> (opcional) </small>:<br />
				<input type="text" name="empresa" value="<?php if ( ! empty($empresa) ) echo $empresa; ?>" /><br /><br />
				Teléfono:<br />
				<input type="text" name="telefono" value="<?php if ( ! empty($telefono) ) echo $telefono; ?>" /><br /><br />
				Correo:<br />
				<input type="text" name="email" value="<?php if ( ! empty($email) ) echo $email; ?>" /><br /><br />
				<div id="mensaje">Mensaje:<br />
				<textarea name="mensaje" rows="1" cols="1" ><?php if ( ! empty($ms) ) echo $ms; ?></textarea>
				<br /><br /><br />
				<input type="submit" name="submit" value="Enviar" style="cursor:pointer;width:100px; height:30px; line-height:10px; float:right; background:#fff; color:#000;" /></div>
			</form>
			<?php } ?>


			<div id="datos">
				Insurgentes Sur 2342, Oficina 2, Chimalistac, CDMX
				<br /><br />
				T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ 55 5540 4230<br />
				F&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ 55 5256 5337<br />
				W&nbsp;&nbsp;&nbsp;&nbsp;+ www.a3.biz<br /><br />
				Arq. Carolina Iglesias<br />
				carolina@a3.biz<br /><br />



			</div>

	</div>

	<div id="footer">
			Insurgentes Sur 2342, Oficina 2, Chimalistac, CDMX
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			&copy; 2019 A&sup3; Architecture<br />
			T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ 55 5540 4230
			<br /><br />
			<!-- <div id="diseñador"><a href="">by BlockCode</a></div> -->
			<div id="rs">
				<a href="https://www.facebook.com/A3-Architecture-176934649048537/" target="_blank">Facebook</a>
				<a href="">YouTube</a>
			</div>
		</div>
	</body>
</html>
