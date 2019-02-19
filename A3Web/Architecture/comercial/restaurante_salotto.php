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
					<img src="img/salotto/01.jpg" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
        			<img src="img/salotto/02.jpg" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
        			<img src="img/salotto/03.jpg" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
        			<img src="img/salotto/04.jpg" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
        			<img src="img/salotto/05.jpg" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
        			<img src="img/salotto/06.jpg" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
        			<img src="img/salotto/07.jpg" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
				</div>

			<div class="fotos">
				<ul id="nav">
					<li class=""><a href="#"><img src="img/salotto/01.jpg" width="80" height="53" ></a></li>
					<li class=""><a href="#"><img src="img/salotto/02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/salotto/03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/salotto/04.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/salotto/05.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/salotto/06.jpg" width="80" height="53"></a></li>
					<li class="activeSlide"><a href="#"><img src="img/salotto/07.jpg" width="80" height="53" ></a></li>
				</ul>
			</div>
			<div class="texto">
				<p class="titulo">Restaurante Salotto</p>
				<p class="lugar">
					Polanco, CdMx (2009)<br/>
					Construcción de interiores
				</p>
				<p	class="info">
					Restaurante italiano repleto de detalles artísticos, en una de las mejores zonas restauranteras de la Ciudad de México.
				</p>
				<p	class="arq">
					Diseño: Tiziano<br/>
					Construcción: Arq. Teo Robles y Arq. Carolina Iglesias<br/>
					Colaboración: Arq. Nadia Hernández
				</p>
			</div>
		</div>
	</div>
<?php include('../a_cont/footer.php'); ?>
