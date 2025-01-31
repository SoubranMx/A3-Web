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
				<img src="img/magnum_boutique/01.jpg" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
				<img src="img/magnum_boutique/02.jpg" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
				<img src="img/magnum_boutique/03.jpg" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
				<img src="img/magnum_boutique/04.jpg" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
				
    		</div>
			<div class="fotos">
				<ul id="nav">
					<li class=""><a href="#"><img src="img/magnum_boutique/01.jpg" width="80" height="53" ></a></li>
					<li class=""><a href="#"><img src="img/magnum_boutique/02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/magnum_boutique/03.jpg" width="80" height="53"></a></li>
					<li class="activeSlide"><a href="#"><img src="img/magnum_boutique/04.jpg" width="80" height="53"></a></li>
				</ul>
			</div>
			<div class="texto">
				<p class="titulo">Magnum Boutique</p>
				<p class="lugar">
					Plaza Antara Polanco, CDMX (2011)<br/>
					Construcción de local comercial
				</p>
				<p	class="info">
					En sólo tres semanas de trabajos nocturnos, pasamos del papel a la obra terminada de esta heladería “boutique” de temporada, ubicada en el centro comercial Plaza Antara.
				</p>
				<p	class="arq">
					Con diseño del despacho: Depa 102<br/>
					Construcción & interiores: Arq. Carolina Iglesias & Arq. Teo Robles
				</p>
			</div>
		</div>
	</div>
<?php include('../a_cont/footer.php'); ?>
