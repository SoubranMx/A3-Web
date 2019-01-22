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
		
		$mail='teo@a-tres.com.mx,carolina@a-tres.com.mx';
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
<? include('a_cont/head.php'); ?>
	
	  <div id="section" >
	      <h1>Contáctanos</h1>
		
			
			
			<? if (!empty($error)) { ?>
		
		<? foreach ($error as $mensaje) { ?>
			<?= $mensaje ?><br />
		<? } ?>
		
	<? } ?>
	
	<? if ( !empty($_GET['add']) ) { ?>
	
	Se envió con éxito
	
	<? } else { ?>
			
				Envianos un correo:<br /><br />
				<form action="contacto.php" method="post" accept-charset="UTF-8" style="height:310px;" >
				Nombre:<br />
				<input type="text" name="nombre" value="<? if ( ! empty($nombre) ) echo $nombre; ?>" /><br /><br />
				Empresa<small> (opcional) </small>:<br />
				<input type="text" name="empresa" value="<? if ( ! empty($empresa) ) echo $empresa; ?>" /><br /><br />
				Teléfono:<br />
				<input type="text" name="telefono" value="<? if ( ! empty($telefono) ) echo $telefono; ?>" /><br /><br />
				Correo:<br />
				<input type="text" name="email" value="<? if ( ! empty($email) ) echo $email; ?>" /><br /><br />
				<div id="mensaje">Mensaje:<br />
				<textarea name="mensaje" rows="1" cols="1" ><? if ( ! empty($ms) ) echo $ms; ?></textarea>
				<br /><br /><br />
				<input type="submit" name="submit" value="Enviar" style="cursor:pointer;width:100px; height:30px; line-height:10px; float:right; background:#fff; color:#000;" /></div>
			</form>
			<? } ?>
			
			
			<div id="datos">
				Pachuca 134 Piso 1, Col Condesa, México, DF
				<br /><br />
				T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ 55 5540 4230<br />
				F&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ 55 5256 5337<br />
				W&nbsp;&nbsp;&nbsp;&nbsp;+ www.a-tres.com.mx<br /><br />
				Arq. Carolina Iglesias<br />
				carolina@a-tres.com.mx<br /><br />
				Arq. Teo Robles<br />
				teo@a-tres.com.mx
				
				

			</div>
			
	</div>
	
<? include('a_cont/footer.php'); ?>