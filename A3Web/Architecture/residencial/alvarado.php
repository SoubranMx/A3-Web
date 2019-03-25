<?php include('../a_cont/head.php'); ?>
	<div id="section" style="width:1000px;">
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
				<img src="img/alvarado/01.jpg" width="286" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
				<img src="img/alvarado/02.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
				<img src="img/alvarado/03.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
				<img src="img/alvarado/04.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
				<img src="img/alvarado/05.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="img/alvarado/06.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
				<img src="img/alvarado/07.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
				<img src="img/alvarado/08.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
			</div>
			
			<div class="fotos">
				<ul id="nav">
					<li class=""><a href="#"><img src="img/alvarado/01.jpg" width="80" height="53" ></a></li>
					<li class=""><a href="#"><img src="img/alvarado/02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/alvarado/03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/alvarado/04.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/alvarado/05.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/alvarado/06.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/alvarado/07.jpg" width="80" height="53"></a></li>
					<li class="activeSlide"><a href="#"><img src="img/alvarado/08.jpg" width="80"  height="53" ></a></li>
				</ul>
    		</div>
			<div class="texto">
				<p class="titulo">José Alvarado</p>
				<p class="lugar">
					Roma, CDMX (2015) <br/>
					Restauración y remodelación.
				</p>
				<p	class="info">
                    La restauración de esta casa estilo Art Nouveau de la colonia Roma tuvo todos los retos que presenta una construcción de casi 100 años. Desde reconstruir las losas originales hasta buscar pisos de madera de recuperación para conservar intacto el estilo.
				</p>
				<p	class="arq">
                    Diseño: Arq. Carlos Duclaud y Salvador de Mria y Campos <br/>
                    Construccion: Arq. Carolina Iglesias y Arq. Teo Robles <br/>
                    Colaboración: Arq. Yolanda Tzintzún
				</p>
			</div>
		</div>
	</div>
<?php include('../a_cont/footer.php'); ?>