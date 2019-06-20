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
				<img src="img/salto_del_agua/01.jpg" width="629" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
				<img src="img/salto_del_agua/02.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
				<img src="img/salto_del_agua/03.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
				<img src="img/salto_del_agua/04.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
				<img src="img/salto_del_agua/05.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
    		</div>

			<div class="fotos">
				<ul id="nav">
					<li class=""><a href="#"><img src="img/salto_del_agua/01.jpg" width="80" height="53" ></a></li>
					<li class=""><a href="#"><img src="img/salto_del_agua/02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/salto_del_agua/03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/salto_del_agua/04.jpg" width="80" height="53"></a></li>
					<li class="activeSlide"><a href="#"><img src="img/salto_del_agua/05.jpg" width="80" height="53" ></a></li>
				</ul>
			</div>
			<div class="texto">
				<p class="titulo">Fuente del Salto del Agua</p>
				<p class="lugar">
					Tecachamalco, EdoMex (2014) <br/>
					Remodelación Total
				</p>
				<p	class="info">
                    Tomamos una casa antigua de Tecamachalco, exquisitamente diseñada en una sola planta, y buscamos re-interpretarla con un lenguaje moderno y minimalista, para darle nueva vida con una nueva familia. 
				</p>
				<p	class="arq">
					Con diseño de: Arq. Carolina Iglesias & Salvador de Maria y Campos <br/>
                    Construcción: Arq. Carolina Iglesias <br/>
                    Colaboradores: Arq. Teo Robles & Arq. Iván Chávez
				</p>
			</div>
		</div>
	</div>
<?php include('../a_cont/footer.php'); ?>