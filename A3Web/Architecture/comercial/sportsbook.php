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
	  			<img src="img/sportsbook/01.jpg" width="629" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
	  			<img src="img/sportsbook/02.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
	  			<img src="img/sportsbook/03.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
					<img src="img/sportsbook/04.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
					<img src="img/sportsbook/05.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/sportsbook/06.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/sportsbook/07.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/sportsbook/08.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/sportsbook/09.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/sportsbook/10.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
	    </div>
			<div class="fotos">
				<ul id="nav">
	        <li class=""><a href="#"><img src="img/sportsbook/01.jpg" width="80" height="53" ></a></li>
	        <li class=""><a href="#"><img src="img/sportsbook/02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/sportsbook/03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/sportsbook/04.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/sportsbook/05.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/sportsbook/06.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/sportsbook/07.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/sportsbook/08.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/sportsbook/09.jpg" width="80" height="53"></a></li>
	        <li class="activeSlide"><a href="#"><img src="img/sportsbook/10.jpg" width="80" height="53" ></a></li>
	    	</ul>
	    </div>

			<div class="texto">
				<p class="titulo"> Sportsbook Restaurante & Bar </p>
					<p class="lugar">
					Ciudad Satélite, Edomex (2015)
					</p>
					<p class="lugar">
					Diseño y decoración
					</p>
				<p	class="info">
					Sportsbook Restaurante & Bar debió integrar las 3 funciones: bar para apuestas deportivas, restaurante para clientes y bar de reunión social y descanso. Y en todo esto, “generar antojo”... ¡de relajarse, disfrutar el ambiente, y seguir jugando!
				</p>
				<p	class="arq">
					Diseño: Arq. Carolina Iglesias <br/>
					Colaboradores: Arq. Teo Robles, Arq. Yolanda Tzintzún & Arq. Adriana Ángeles
				</p>
			</div>

		</div>
	</div>
<?php include('../a_cont/footer.php'); ?>