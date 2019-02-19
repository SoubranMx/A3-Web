<?php include('../a_cont/head.php');?>
	<div id="section">
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
					<img src="img/pescaderia/01.jpg" width="629" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
	  			<img src="img/pescaderia/02.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
	  			<img src="img/pescaderia/03.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
					<img src="img/pescaderia/04.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
					<img src="img/pescaderia/05.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/pescaderia/06.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/pescaderia/07.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/pescaderia/08.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/pescaderia/09.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/pescaderia/10.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				</div>
				<div class="fotos">
					<ul id="nav">
						<li class=""><a href="#"><img src="img/pescaderia/01.jpg" width="80" height="53" ></a></li>
						<li class=""><a href="#"><img src="img/pescaderia/02.jpg" width="80" height="53"></a></li>
						<li class=""><a href="#"><img src="img/pescaderia/03.jpg" width="80" height="53"></a></li>
						<li class=""><a href="#"><img src="img/pescaderia/04.jpg" width="80" height="53"></a></li>
						<li class=""><a href="#"><img src="img/pescaderia/05.jpg" width="80" height="53"></a></li>
						<li class=""><a href="#"><img src="img/pescaderia/06.jpg" width="80" height="53"></a></li>
						<li class=""><a href="#"><img src="img/pescaderia/07.jpg" width="80" height="53"></a></li>
						<li class=""><a href="#"><img src="img/pescaderia/08.jpg" width="80" height="53"></a></li>
						<li class=""><a href="#"><img src="img/pescaderia/09.jpg" width="80" height="53"></a></li>
						<li class="activeSlide"><a href="#"><img src="img/pescaderia/10.jpg" width="80" height="53" ></a></li>
					</ul>
				</div>
				<div class="texto">
					<p class="titulo">La Pescadería Prado Norte</p>
					<p class="lugar">
						Lomas de Chapultepec, CdMx (2017)<br/>
						Diseño y decoración<br/>
						Diseño de fachada y exteriores
					</p>
					<p	class="info">
						El quinto de una exitosa cadena de restaurantes de mariscos, debe conservar la imagen corporativa y a su vez estar a la altura de los exigentes gustos de una de las zonas más lujosas de la ciudad.
					</p>
					<p	class="arq">
						Diseño: Arq. Carolina Iglesias<br/>
						Colaboración: Arq. Karen González
					</p>
				</div>
		</div>
	</div>
<?php include('../a_cont/footer.php'); ?>
