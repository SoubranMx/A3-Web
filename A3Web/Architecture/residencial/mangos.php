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
				<img src="img/mangos/01.jpg" width="629" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
				<img src="img/mangos/02.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
				<img src="img/mangos/03.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
				<img src="img/mangos/04.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
				<img src="img/mangos/05.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="img/mangos/06.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
			</div>
			
			<div class="fotos">
				<ul id="nav">
					<li class=""><a href="#"><img src="img/mangos/01.jpg" width="80" height="53" ></a></li>
					<li class=""><a href="#"><img src="img/mangos/02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/mangos/03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/mangos/04.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/mangos/05.jpg" width="80" height="53"></a></li>
					<li class="activeSlide"><a href="#"><img src="img/mangos/06.jpg" width="80"  height="53" ></a></li>
				</ul>
    		</div>
			<div class="texto">
				<p class="titulo">Ampliación Casa Los Mangos</p>
				<p class="lugar">
					300 m<sup>2</sup> <br/>
					Cuernavaca, Morelos (2011)
				</p>
				<p	class="info">
					Proyecto y construcción de gimnasio, terraza y salón de juegos
				</p>
			</div>
		</div>
	</div>
<?php include('../a_cont/footer.php'); ?>
