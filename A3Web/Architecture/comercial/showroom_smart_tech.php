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
				<img src="img/smart_tech/01.jpg" width="629" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
				<img src="img/smart_tech/02.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
				<img src="img/smart_tech/03.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
				<img src="img/smart_tech/04.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
				<img src="img/smart_tech/05.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="img/smart_tech/06.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
				<img src="img/smart_tech/07.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
				<img src="img/smart_tech/08.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
    		</div>

			<div class="fotos">
				<ul id="nav">
					<li class=""><a href="#"><img src="img/smart_tech/01.jpg" width="80" height="53" ></a></li>
					<li class=""><a href="#"><img src="img/smart_tech/02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/smart_tech/03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/smart_tech/04.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/smart_tech/05.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/smart_tech/06.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/smart_tech/07.jpg" width="80" height="53"></a></li>
					<li class="activeSlide"><a href="#"><img src="img/smart_tech/08.jpg" width="80" height="53" ></a></li>
				</ul>
			</div>
			<div class="texto">
				<p class="titulo">Smart Tech Showroom</p>
				<p class="lugar">
					Cancún, Quintana Roo (2009)<br/>
					Diseño y construcción de interiores
				</p>
				<p	class="info">
					La prestigiosa empresa de tecnología Coinosa presentó en 2009 su nuevo showroom y oficinas en Cancún, listo para atender las demandas de una clientela sofisticada y amante de la automatización.
				</p>
				<p	class="arq">
					Diseño y construcción: Arq. Carolina Iglesias <br/>
				</p>
			</div>
		</div>
	</div>
<?php include('../a_cont/footer.php'); ?>