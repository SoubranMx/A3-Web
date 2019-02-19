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
				<img src="img/mangles/01.jpg" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
				<img src="img/mangles/02.jpg" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
				<img src="img/mangles/03.jpg" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
				<img src="img/mangles/04.jpg" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
				<img src="img/mangles/05.jpg" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="img/mangles/06.jpg" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
				<img src="img/mangles/07.jpg" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
				<img src="img/mangles/08.jpg" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
				<img src="img/mangles/09.jpg" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
    		</div>

			<div class="fotos">
				<ul id="nav">
					<li class=""><a href="#"><img src="img/mangles/01.jpg" width="80" height="53" ></a></li>
					<li class=""><a href="#"><img src="img/mangles/02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/mangles/03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/mangles/04.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/mangles/05.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/mangles/06.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/mangles/07.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/mangles/08.jpg" width="80" height="53"></a></li>
					<li class="activeSlide"><a href="#"><img src="img/mangles/09.jpg"  height="53" ></a></li>
				</ul>
			</div>
			<div class="texto">
				<p class="titulo">Casa Mangles</p>
				<p class="lugar">
					680 m2 <br/>
					Bosques de Las Lomas (2009)
				</p>
				<p	class="info">
					Proyecto y obra para mansión de lujo estilo moderno.
				</p>
				<p	class="arq">
					Colaboración: DM Arquitectos
				</p>
			</div>
		</div>
	</div>
<?php include('../a_cont/footer.php'); ?>
