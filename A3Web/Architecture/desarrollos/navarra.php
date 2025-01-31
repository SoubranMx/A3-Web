<?php include("../a_cont/head.php");?>
	<div id="section" style="margin-bottom:15px;">
	   <div id="proyectos">
				<script type="text/javascript">
					$('#slideshow').cycle({
				    fx:     'fade',
				    speed:  'fast',
				    timeout: 0,
				    pager:  '#nav',
				    pagerAnchorBuilder: function(idx, slide) {
				        // return selector string for existing anchor
				        return '#nav li:eq(' + idx + ') a';
				    }
					});
				</script>

				<div id="slideshow" class="pics" style="height:400px; ">
					<img src="img/Navarra/01.jpg" width="286" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
					<img src="img/Navarra/02.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
					<img src="img/Navarra/03.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
					<img src="img/Navarra/04.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
					<img src="img/Navarra/05.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/Navarra/06.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/Navarra/07.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/Navarra/08.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/Navarra/09.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/Navarra/10.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				</div>
				<div class="fotos">
					<ul id="nav">
						<li class=""><a href="#"><img src="img/Navarra/01.jpg" width="80" height="53" ></a></li>
						<li class=""><a href="#"><img src="img/Navarra/02.jpg" width="80" height="53"></a></li>
						<li class=""><a href="#"><img src="img/Navarra/03.jpg" width="80" height="53"></a></li>
						<li class=""><a href="#"><img src="img/Navarra/04.jpg" width="80" height="53"></a></li>
						<li class=""><a href="#"><img src="img/Navarra/05.jpg" width="80" height="53"></a></li>
						<li class=""><a href="#"><img src="img/Navarra/06.jpg" width="80" height="53"></a></li>
						<li class=""><a href="#"><img src="img/Navarra/07.jpg" width="80" height="53"></a></li>
						<li class=""><a href="#"><img src="img/Navarra/08.jpg" width="80" height="53"></a></li>
						<li class=""><a href="#"><img src="img/Navarra/09.jpg" width="80" height="53"></a></li>
						<li class="activeSlide"><a href="#"><img src="img/Navarra/10.jpg" width="80" height="53" ></a></li>
					</ul>
				</div>

			<div class="texto">
				<p class="titulo">Navarra 167</p>
				<p class="lugar">
					Álamos, CDMX (2018)<br/>
					Desarrollo Inmobiliario, 3 departamentos
				</p>
				<p	class="info">
					Moderno y llamativo edificio, con excelente ubicación a un paso de las colonias Narvarte y Del Valle. Departamentos de 80m<sup>2</sup>, más bodega y cuarto de lavado, terraza o roof-garden privado. Sala-comedor con balcones, cocina con desyunador, 2 recámaras, 2 baños y estacionamiento.
				</p>
				<p	class="arq">
					Diseño: Arq. Carolina Iglesias & Arq. Alberto Bautista <br/>
					Construcción realizada por: EDyCA Inmobiliaria 1.0 <br/>
					Con la colaboración de: Arq. Eduardo López
				</p>
			</div>
		</div>
	</div>
<?php include('../a_cont/footer.php'); ?>
