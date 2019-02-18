<?php include('a_cont/head.php');
//	AUN NO TIENE NADA
?>
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
				<img src="obras/obtreze/01.jpg" width="629" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
				<img src="obras/obtreze/02.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
				<img src="obras/obtreze/03.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
				<img src="obras/obtreze/04.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
				<img src="obras/obtreze/05.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="obras/obtreze/06.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="obras/obtreze/07.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="obras/obtreze/08.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="obras/obtreze/09.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="obras/obtreze/10.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="obras/obtreze/11.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="obras/obtreze/12.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
			</div>
			<div class="fotos">
				<ul id="nav">
	        		<li class=""><a href="#"><img src="obras/obtreze/01.jpg" width="80" height="53" ></a></li>
	        		<li class=""><a href="#"><img src="obras/obtreze/02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obtreze/03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obtreze/04.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obtreze/05.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obtreze/06.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obtreze/07.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obtreze/08.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obtreze/09.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obtreze/10.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obtreze/11.jpg" width="80" height="53"></a></li>
			        <li class="activeSlide"><a href="#"><img src="obras/obtreze/12.jpg" width="80" height="53" ></a></li>
	    		</ul>
	    	</div>
			<div class="texto">
				<p class="titulo">Restaurante Treze</p>
				<p class="lugar">
					Lomas de Chapultepec, CDMX (2018)<br/>
					Construcción de interiores
				</p>
				<p	class="info">
				Un ambiente cálido y apapachador, para una comida “de apapacho”, según nos describe el Chef. La mezcla ecléctica de materiales, texturas, luces y patrones hace de éste un espacio único y singular, para disfrutar de una experiencia gourmet.
				</p>
				<p	class="arq">
					Diseño y Construcción: Arq. Carolina Iglesias y Arq. Karen González<br/>
					Interiorismo: D.I. Gina Barba <br/>
					Colaboración: Arq. Carlos Bautista
				</p>
			</div>
		</div>
	</div>
<?php include('a_cont/footer.php'); ?>
