<?php include('../a_cont/head.php'); ?>
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
	  			<img src="img/winpalace/01.jpg" width="629" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
	  			<img src="img/winpalace/02.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
	  			<img src="img/winpalace/03.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
					<img src="img/winpalace/04.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
					<img src="img/winpalace/05.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/winpalace/06.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/winpalace/07.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/winpalace/08.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/winpalace/09.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/winpalace/10.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/winpalace/11.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="img/winpalace/12.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
	    </div>
			<div class="fotos">
				<ul id="nav">
	        <li class=""><a href="#"><img src="img/winpalace/01.jpg" width="80" height="53" ></a></li>
	        <li class=""><a href="#"><img src="img/winpalace/02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/winpalace/03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/winpalace/04.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/winpalace/05.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/winpalace/06.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/winpalace/07.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/winpalace/08.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/winpalace/09.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/winpalace/10.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/winpalace/11.jpg" width="80" height="53"></a></li>
	        <li class="activeSlide"><a href="#"><img src="img/winpalace/12.jpg" width="80" height="53" ></a></li>
	    	</ul>
	    </div>
			<div class="texto">
				<p class="titulo">Casino Winpalace</p>
				<p class="lugar">
					Ciudad Satélite, Edomex (2015)<br/>
					Rediseño y decoración de 2000m<sup>2</sup> de interiores<br/>
					Creación de fachada
				</p>
				<p	class="info">
					Cuando hablamos de arquitectura, la materia prima es el espacio. En Winpalace Casino, la materia prima es la luz. En Winpalace Casino, la luz forma el espacio, y no al revés.
				</p>
				<p	class="arq">
					Diseño y construcción: Arq. Carolina Iglesias<br/>
					Colaboradores: Arq. Teo Robles, Arq. Yolanda Tzintzún & Arq. Adriana Ángeles
				</p>
			</div>
		</div>
	</div>
<?php include('../a_cont/footer.php'); ?>
