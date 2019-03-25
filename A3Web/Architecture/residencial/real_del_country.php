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
				<img src="img/real_del_country/01.jpg" width="629" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
				<img src="img/real_del_country/02.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
				<img src="img/real_del_country/03.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
				<img src="img/real_del_country/04.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
				<img src="img/real_del_country/05.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="img/real_del_country/06.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
				<img src="img/real_del_country/07.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
				<img src="img/real_del_country/08.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
				<img src="img/real_del_country/09.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
    		</div>

			<div class="fotos">
				<ul id="nav">
					<li class=""><a href="#"><img src="img/real_del_country/01.jpg" width="80" height="53" ></a></li>
					<li class=""><a href="#"><img src="img/real_del_country/02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/real_del_country/03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/real_del_country/04.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/real_del_country/05.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/real_del_country/06.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/real_del_country/07.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/real_del_country/08.jpg" width="80" height="53"></a></li>
					<li class="activeSlide"><a href="#"><img src="img/real_del_country/09.jpg" width="80" height="53" ></a></li>
				</ul>
			</div>
			<div class="texto">
				<p class="titulo">Real del Country</p>
				<p class="lugar">
					Lomas Country Club, Huixquilucan (2008) <br/>
					Diseño y Construcción
				</p>
				<p	class="info">
					Una espectacular mansión de 1200 m<sup>2</sup> de construcción, donde todos los espacios de habitación principales se vuelcan hacia las fastuosas vistas de los campos del Edomex.
				</p>
				<p	class="arq">
					Diseño y Construcción para DM Arquitectos
					Realizado por: Arq. Carolina Iglesias
				</p>
			</div>
		</div>
	</div>
<?php include('../a_cont/footer.php'); ?>