<?php	include('a_cont/head.php');?>
	<div id="section">

		<?php
			if (isset($_GET['arq']) || !empty($_GET['arq']) ){
					$arq = null;
					$arq = $_GET['arq'];
					//if(!empty($arq)) {
		?>

			<?php
				if(($arq == 'TeoRobles')) {
			?>

				<h1 style="margin:0px;padding:0px;">Arq. Teo Robles</h1>
				<blockquote style="width:920px;float:left;font-size:13px;" class="aaa">
				<br />
				<img src="img/teo.jpg" alt="Teo Robles" height="310"  align="left" style="margin-right:15px;"  />
				<span style="font-size:16px;">PERFIL ACADÉMICO</span><br /><br />
		•	Arquitecto egresado de la Universidad Nacional Autónoma de México en 2000.<br />
		•	Perito Responsable de Obra Privada registrado ante el Gobierno de Estado de México registro número: RTL-I-01-3547<br />
		•	Formación en el Seminario para Aspirantes a Directores Responsables de Obra Colegio de Ingenieros Civiles de México (CICM) en 2009.<br />
		•	Estudios profesionales en fotografía realizados en 2010 y 2011.<br /><br />
	<span style="font-size:16px;">PERFIL PROFESIONAL</span><br /><br />
		•	Co-fundador de la empresa de diseño y construcción A3 Architecture y director desde 2001.<br />
		•	Doce años de experiencia como director en la construcción de obras residenciales, departamentos, restaurantes, comercios, showrooms y oficinas. El enfoque principal de todos los trabajos ha sido la alta calidad en la construcción, el enfoque a las soluciones estructurales prácticas y versátiles y la prioridad por interpretar y satisfacer las necesidades particulares de cada cliente dentro del  marco de su proyecto.<br />
		•	Desarrollo de la fotografía artística y arquitectónica.<br />
		•	Participación en proyectos de restauración y urbanismo para La Casa de la Cultura en Tlaxcala, y el proyecto urbano “Querétaro en el 2025”, en 2000 y 2001.<br />
		•	Previamente realizó diferentes actividades para las empresas WFI de México, Servicios para la Construcción, Grupo Radiocentro e ICA (Ingenieros Civiles Asociados).<br /><a href="http://www.flickr.com/photos/teo_robles/" style="margin-top:4px;float:right;" target="_blank">Galería de fotos</a>




				</blockquote>

			<?php 	} ?>

			<?php if(($arq == 'CarolinaIglesias')) { ?>

				<h1 style="margin:0px;padding:0px;">Arq. Carolina Iglesias</h1>
				<blockquote style="width:870px;float:left;font-size:13px;">
				<br />
				<img src="img/caro.jpg" alt="Carolina Iglesias" width="200" hspace="15" style="margin-bottom:50px;" align="left" />
				<span style="font-size:16px;">PERFIL ACADÉMICO</span><br /><br />
		•	Arquitecta egresada de la Universidad Nacional Autónoma de México en 1999.<br />
		•	Estudios adicionales en Diseño Arquitectónico realizados en The Catholic University of America en Washington DC, Estados Unidos.<br />
		•	Diplomado en Administración de Proyectos estudiado en el Instituto Tecnológico Autónomo de México (ITAM).<br />
		•	Participación en Talleres de Desarrollo de Negocios.<br /><br />
	<span style="font-size:16px;">PERFIL PROFESIONAL</span><br /><br />
		•	Fundadora de la empresa de diseño y construcción A3 Architecture y directora desde enero de 2000.<br />
		•	Doce años de experiencia como directora de proyectos de diseño y construcción de obras residenciales, departamentos, restaurantes, comercios, showrooms y oficinas. El enfoque principal de todos los trabajos ha sido la alta calidad en diseño y construcción y la prioridad por interpretar y satisfacer las necesidades particulares de cada cliente dentro del  marco de su proyecto.<br />
		•	Participación en el segmento <q>Experta en casa</q> (<a href="#" id="expca" style="color:#0080ff" title="Ver Segmentos">Ver segmentos aquí</a>), que presenta consejos para realizar trabajos  de diseño y remodelación en el hogar, dentro del programa televisivo “Mujeres en TVC” de la cadena TVC, en 2011.<br />
		•	Participación en proyectos de restauración y urbanismo para La Casa de la Cultura en Tlaxcala,<br /> y el proyecto urbano “Querétaro en el 2025”, en 2000 y 2001.<br />




				</blockquote>
				<script type="text/javascript">
	$(document).ready(function(){
	  $("#expca").click(function(){
	    $("#expcasa").css("display","block");
	   });

	});
	</script>
			<div id="expcasa" style="display:none;">
			 Segmentos<br />  <a href="quienes_somos.php?arq=CarolinaIglesias" style="font-size:11px;">X cerrar</a><br /><br />
			 <a href="http://www.youtube.com/watch?v=SgwXF2H4c5c&feature=em-share_video_user" target="_blank">FOCOS AHORRADORES DE ENERGÍA</a><br /><br />
			 <a href="http://www.youtube.com/watch?v=1GgQawwMweE&feature=em-share_video_user" target="_blank">ELIGE EL FOCO AHORRADOR ADECUADO </a><br /><br />
			 <a href="http://www.youtube.com/watch?v=cqr5-964QEs&feature=em-share_video_user" target="_blank">CALENTADOR DE AGUA IDEAL PARA TU CASA</a><br /><br />
			 <a href="http://youtu.be/9W7rWEwrtps" target="_blank">COLORES EN LA DECORACIÓN</a><br /><br />
			 <a href="http://www.youtube.com/watch?v=aV5x92hj0Vk&feature=relmfu" target="_blank">¿CÓMO USAR EL TALADRO?</a><br /><br />
			 <a href="http://www.youtube.com/watch?v=F24Ng5MTC8o&feature=relmfu" target="_blank">RESANAR Y REPARAR UN MURO ANTES DE PINTARLO</a><br /><br />
			 <a href="http://www.youtube.com/watch?v=w18fBS3McUU&feature=relmfu" target="_blank">¿QUÉ PISO CONVIENE PONER EN EL HOGAR?</a>

			</div>

			<?php } ?>

		<?php } else { ?>

			<h1 style="margin:0px;padding:0px;">¿Quiénes Somos?</h1>
				<blockquote style="width:400px;float:left;" class="aaa">
				<br /><br />
					A&sup3; ARCHITECTURE es una empresa con 12 años de experiencia
					en diseño y construcción de espacios habitables que combinan lo bello y lo funcional.
					Nuestras obras abarcan el ramo de lo habitacional,
					residencial, industrial, comercial, restaurantes, departamentos,
					oficinas y diseño de interiores.
					<br /><br />
					Nuestra filosofía de trabajo se basa en la calidad de los proyectos y
					el compromiso con el cliente.
					<br /><br />
					<a href="quienes_somos.php?arq=CarolinaIglesias">Arq. Carolina Iglesias</a>
					<a href="quienes_somos.php?arq=TeoRobles">Arq. Teo Robles</a>


				</blockquote>
				<div style="position:relative; width:400px;float:right;">
				ENTREVISTA<br />
				<a href="Entrevista/entrevista.pdf" target="_blank">
						<img src="Entrevista/entrevista.jpg" alt="Entrevista" height="350" align="left" />
					</a>

				</div>

				<?php } ?>

			<br class="cf" />
		</div>
	<?php include('a_cont/footer.php'); ?>
