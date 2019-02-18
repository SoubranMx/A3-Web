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

        			<img src="obras/obrevolucion/obrevolucion1.jpg" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
        			<img src="obras/obrevolucion/obrevolucion2.jpg" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
        			<img src="obras/obrevolucion/obrevolucion3.jpg" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
        			<img src="obras/obrevolucion/obrevolucion4.jpg" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">




    </div>

			<div class="fotos">
			<ul id="nav">
        <li class=""><a href="#"><img src="obras/obrevolucion/obrevolucion1.jpg" width="80" height="53" ></a></li>
        <li class=""><a href="#"><img src="obras/obrevolucion/obrevolucion2.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obrevolucion/obrevolucion3.jpg" width="80" height="53"></a></li>
        <li class="activeSlide"><a href="#"><img src="obras/obrevolucion/obrevolucion4.jpg" width="80" height="53" ></a></li>
    </ul>
    </div>
		<div class="texto">
			<p class="titulo">Mueblería Akabani Revolución</p>
			<p class="lugar">
		 		San Angel, México D.F. (2011)<br/>
				Diseño y decoración + Fachada y exteriores.
			</p>
			<p	class="info">
				Diseño de edificio para una mueblería de 4000 m<sup>2</sup>, que busca imprimir un giro moderno y llamativo a una mueblería de gran prestigio y tradición.
			</p>
			<p	class="arq">
				Diseño: Arq. Carolina Iglesias <br/>
				Colaboradores: Arq. Leonardo Robles
			</p>
		</div>

	 </div>
	</div>
<?php include('a_cont/footer.php'); ?>
