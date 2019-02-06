<?php include('a_cont/head.php');
?>

<?php
	isset($_GET["obra"]) ? $obra = $_GET["obra"] : $obra = "central";
	isset($_GET["fotos"]) ? $fotos = $_GET["fotos"] : $fotos = 12;
	$i = 0;

	printf("<div id=\"section\">
	   <div id=\"proyectos\">
				<script type=\"text/javascript\">
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
				</script>");
	printf("<div id=\"slideshow\" class=\"pics\" style=\"height:400px; \">\n");
	for($i=1;$i<=$fotos;$i++){
		if($i < 10)
			$str1 = "0".$i;
			else {
				$str1 = $i;
			}
		printf("<img src=\"obras/ob%s/%s.jpg\" width=\"629\" height=\"429\" style=\"position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9;\">\n",$obra,$str1);
	}
	printf("</div>\n");
	printf("<div class=\"fotos\">\n
		<ul id=\"nav\">\n");

	for($i=1;$i<=$fotos;$i++){
		if($i < 10)
			$str1 = "0".$i;
			else {
				$str1 = $i;
			}
			if($i<$fotos)
				printf("<li class=\"\"><a href=\"#\"><img src=\"obras/ob%s/%s.jpg\" width=\"80\" height=\"53\"></a></li>\n",$obra,$str1);
			else {
				printf("<li class=\"activeSlide\"><a href=\"#\"><img src=\"obras/ob%s/%s.jpg\" width=\"80\" height=\"53\"></a></li>\n",$obra,$str1);
			}
	}
	printf("</ul>\n
	</div>\n");
// info
	printf('<div class="texto">
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
	</div>');
	printf("</div>\n
</div>\n");


?>
<!--
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
	  			<img src="obras/obSportsbook/Sportsbook01.jpg" width="629" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
	  			<img src="obras/obSportsbook/Sportsbook02.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
	  			<img src="obras/obSportsbook/Sportsbook03.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
					<img src="obras/obSportsbook/Sportsbook04.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
					<img src="obras/obSportsbook/Sportsbook05.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="obras/obSportsbook/Sportsbook06.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="obras/obSportsbook/Sportsbook07.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="obras/obSportsbook/Sportsbook08.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="obras/obSportsbook/Sportsbook09.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="obras/obSportsbook/Sportsbook10.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
	    </div>
			<div class="fotos">
				<ul id="nav">
	        <li class=""><a href="#"><img src="obras/obSportsbook/Sportsbook01.jpg" width="80" height="53" ></a></li>
	        <li class=""><a href="#"><img src="obras/obSportsbook/Sportsbook02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obSportsbook/Sportsbook03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obSportsbook/Sportsbook04.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obSportsbook/Sportsbook05.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obSportsbook/Sportsbook06.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obSportsbook/Sportsbook07.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obSportsbook/Sportsbook08.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obSportsbook/Sportsbook09.jpg" width="80" height="53"></a></li>
	        <li class="activeSlide"><a href="#"><img src="obras/obSportsbook/Sportsbook10.jpg" width="80" height="53" ></a></li>
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
-->
<?php include('a_cont/footer.php'); ?>
