<?php include("../a_cont/head.php");?>

	<div id="section" style="margin-bottom:15px">
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
	  			<img src="img/Mar_de_China/01.jpg" width="286" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
	  			<img src="img/Mar_de_China/02.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
	  			<img src="img/Mar_de_China/03.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
					<img src="img/Mar_de_China/04.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
					<img src="img/Mar_de_China/05.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/Mar_de_China/06.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/Mar_de_China/07.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/Mar_de_China/08.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/Mar_de_China/09.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/Mar_de_China/10.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/Mar_de_China/11.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/Mar_de_China/12.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
	    </div>
			<div class="fotos">
				<ul id="nav">
	        <li class=""><a href="#"><img src="img/Mar_de_China/01.jpg" width="80" height="53" ></a></li>
	        <li class=""><a href="#"><img src="img/Mar_de_China/02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/Mar_de_China/03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/Mar_de_China/04.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/Mar_de_China/05.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/Mar_de_China/06.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/Mar_de_China/07.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/Mar_de_China/08.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/Mar_de_China/09.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/Mar_de_China/10.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/Mar_de_China/11.jpg" width="80" height="53"></a></li>
	        <li class="activeSlide"><a href="#"><img src="img/Mar_de_China/12.jpg" width="80" height="53" ></a></li>
	    	</ul>
	    </div>
			<div	class="texto">
				<p class="titulo">Mar de China 10</p>
				<p class="lugar">
					Popotla, CDMX (2016-2018)<br/>
					Desarrollo Inmobiliario, 6 departamentos
				</p>
				<p class="info">
					Elegante edificio residencial a 10 minutos de Polanco. Departamentos de 125 m<sup>2</sup>, en dos plantas, con amplia cocina, 2 o 3 recámaras, 2 y ½ baños y terraza o roof-garden privados. Dos estacionamientos por departamento, vigilancia privada y elevador.
				</p>
				<p	class="arq">
					Diseñado por: Arq. Carolina Iglesias<br/>
					Construcción realizada por: EDyCA Inmobiliaria 1.0<br/>
					Colaboradores: Arq. Yolanda Tzintzún & Arq. Eduardo López
				</p>
			</div>
		</div>
	</div>
<?php include('../a_cont/footer.php'); ?>
