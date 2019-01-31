<?php include("a_cont/head.php");
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
	  			<img src="desarrollos/img/Cencibel/01.jpg" width="629" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
	  			<img src="desarrollos/img/Cencibel/02.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
	  			<img src="desarrollos/img/Cencibel/03.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
					<img src="desarrollos/img/Cencibel/04.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
					<img src="desarrollos/img/Cencibel/05.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="desarrollos/img/Cencibel/06.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="desarrollos/img/Cencibel/07.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
	    </div>
			<div style="position:relative;width:300px; height:250px; float:right;">
				<ul id="nav">
	        <li class=""><a href="#"><img src="desarrollos/img/Cencibel/01.jpg" width="80" height="53" ></a></li>
	        <li class=""><a href="#"><img src="desarrollos/img/Cencibel/02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="desarrollos/img/Cencibel/03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="desarrollos/img/Cencibel/04.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="desarrollos/img/Cencibel/05.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="desarrollos/img/Cencibel/06.jpg" width="80" height="53"></a></li>
	        <li class="activeSlide"><a href="#"><img src="desarrollos/img/Cencibel/07.jpg" width="80" height="53" ></a></li>
	    	</ul>
	    </div>
			<div	class="texto">
				<p class="lugar">
					Calle Cencibel
					Rinconada Atlixcáyotl, Puebla (2013-2014)<br>
					Desarrollo Inmobiliario, 3 casas
				</p>
				<p class="info">
					Acogedoras y luminosas casas de 160 m2, con sala-comedor, cocina integral, sala de tv, 3 recámaras con vestidor, 2 y ½ baños, cisterna, estacionamiento y jardín privado. En hermoso fraccionamiento con seguridad privada, parque y salón de eventos.
				</p>
			</div>
		</div>
	</div>
<?php include('a_cont/footer.php'); ?>
