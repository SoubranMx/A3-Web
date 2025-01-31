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

			<div id="slideshow" class="pics" style="height:429px; ">
				<img src="img/cibeles/01.jpg" width="629" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
				<img src="img/cibeles/02.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
				<img src="img/cibeles/03.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
				<img src="img/cibeles/04.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
				<img src="img/cibeles/05.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="img/cibeles/06.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
				<img src="img/cibeles/07.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
                <img src="img/cibeles/08.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
                <img src="img/cibeles/09.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
                <img src="img/cibeles/10.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
                <img src="img/cibeles/11.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
                <img src="img/cibeles/12.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
    		</div>
			<div class="titulo">
				<ul id="nav">
					<li class=""><a href="#"><img src="img/cibeles/01.jpg" width="80" height="53" ></a></li>
					<li class=""><a href="#"><img src="img/cibeles/02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/cibeles/03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/cibeles/04.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/cibeles/05.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/cibeles/06.jpg" width="80" height="53"></a></li>
                    <li class=""><a href="#"><img src="img/cibeles/07.jpg" width="80" height="53"></a></li>
                    <li class=""><a href="#"><img src="img/cibeles/08.jpg" width="80" height="53"></a></li>
                    <li class=""><a href="#"><img src="img/cibeles/09.jpg" width="80" height="53"></a></li>
                    <li class=""><a href="#"><img src="img/cibeles/10.jpg" width="80" height="53"></a></li>
                    <li class=""><a href="#"><img src="img/cibeles/11.jpg" width="80" height="53"></a></li>
					<li class="activeSlide"><a href="#"><img src="img/cibeles/12.jpg" width="80" height="53" ></a></li>
				</ul>
    		</div>
			<div class="texto">
				<p class="titulo">Fuente de Cibeles</p>
				<p class="lugar">
					Tecamachalco, EdoMex (2018) <br/>
					Remodelación total
				</p>
				<p	class="info">
				Una hermosa casa antigua de Tecamachalco, con espectacular jardín, cobra nueva vida gracias a esta remodelación integral, que replantea los espacios de acuerdo a las necesidades modernas: grandes espacios abiertos, deck para disfrutar el jardín, líneas de diseño puras, actuales y sofisticadas.
				</p>
				<p	class="arq">
					Diseño y Construcción: Arq. Carolina Iglesias <br/>
					Con la colaboración de: Arq. Karen González
				</p>
			</div>
		</div>
	</div>
<?php include('../a_cont/footer.php'); ?>