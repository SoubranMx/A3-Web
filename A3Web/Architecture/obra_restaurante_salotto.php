<?php include('a_cont/head.php'); ?>
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

        			<img src="obras/obsalotto/obsalotto1.jpg" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
        			<img src="obras/obsalotto/obsalotto2.jpg" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
        			<img src="obras/obsalotto/obsalotto3.jpg" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
        			<img src="obras/obsalotto/obsalotto4.jpg" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
        			<img src="obras/obsalotto/obsalotto5.jpg" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
        			<img src="obras/obsalotto/obsalotto6.jpg" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
        			<img src="obras/obsalotto/obsalotto7.jpg" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">




    </div>

			<div class="fotos">
			<ul id="nav">
        <li class=""><a href="#"><img src="obras/obsalotto/obsalotto1.jpg" width="80" height="53" ></a></li>
        <li class=""><a href="#"><img src="obras/obsalotto/obsalotto2.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obsalotto/obsalotto3.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obsalotto/obsalotto4.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obsalotto/obsalotto5.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obsalotto/obsalotto6.jpg" width="80" height="53"></a></li>
        <li class="activeSlide"><a href="#"><img src="obras/obsalotto/obsalotto7.jpg" width="80" height="53" ></a></li>
    </ul>
    </div>
		<div class="texto">
			<p class="titulo">Restaurante Salotto</p>
			<p class="lugar">
				Polanco, CdMx (2009)<br/>
				Construcción de interiores
			</p>
			<p	class="info">
				Restaurante italiano repleto de detalles artísticos, en una de las mejores zonas restauranteras de la Ciudad de México.
			</p>
			<p	class="arq">
				Diseño: Tiziano<br/>
				Construcción: Arq. Teo Robles y Arq. Carolina Iglesias<br/>
				Colaboración: Arq. Nadia Hernández
			</p>
		</div>
	</div>
	</div>
<?php include('a_cont/footer.php'); ?>
