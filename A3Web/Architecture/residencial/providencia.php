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
				<img src="img/providencia/01.jpg" width="629" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
				<img src="img/providencia/02.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
				<img src="img/providencia/03.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
				<img src="img/providencia/04.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
				<img src="img/providencia/05.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="img/providencia/06.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
				<img src="img/providencia/07.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
                <img src="img/providencia/08.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
                <img src="img/providencia/09.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
    		</div>
			<div class="fotos">
				<ul id="nav">
					<li class=""><a href="#"><img src="img/providencia/01.jpg" width="80" height="53" ></a></li>
					<li class=""><a href="#"><img src="img/providencia/02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/providencia/03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/providencia/04.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/providencia/05.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/providencia/06.jpg" width="80" height="53"></a></li>
                    <li class=""><a href="#"><img src="img/providencia/07.jpg" width="80" height="53"></a></li>
                    <li class=""><a href="#"><img src="img/providencia/08.jpg" width="80" height="53"></a></li>
					<li class="activeSlide"><a href="#"><img src="img/providencia/09.jpg" width="80" height="53" ></a></li>
				</ul>
    		</div>
			<div class="texto">
				<p class="titulo"> Providencia </p>
				<p class="lugar">
					Del Valle, CDMX (2012) <br/>
					Remodelación de interiores
				</p>
				<p class="info">
                    Del más puro estilo eclecticista, la renovación de este departamento buscó siempre respetar la pasión de su dueña por el arte, el color, y las explosiones de formas y de objetos. Es, de fondo, un espacio donde sumergirse en la vida misma.
				</p>
				<p	class="arq">
					Diseño y construcción: Arq. Carolina Iglesias <br/>
				</p>
			</div>
		</div>
	</div>
<?php include('../a_cont/footer.php'); ?>