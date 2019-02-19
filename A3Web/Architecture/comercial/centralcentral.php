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
				<img src="img/centralcentral/01.jpg" width="629" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
				<img src="img/centralcentral/02.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
				<img src="img/centralcentral/03.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
				<img src="img/centralcentral/04.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
				<img src="img/centralcentral/05.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="img/centralcentral/06.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="img/centralcentral/07.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="img/centralcentral/08.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="img/centralcentral/09.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="img/centralcentral/10.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="img/centralcentral/11.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="img/centralcentral/12.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
	    </div>
			<div class="fotos">
				<ul id="nav">
	        <li class=""><a href="#"><img src="img/centralcentral/01.jpg" width="80" height="53" ></a></li>
	        <li class=""><a href="#"><img src="img/centralcentral/02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/centralcentral/03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/centralcentral/04.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/centralcentral/05.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/centralcentral/06.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/centralcentral/07.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/centralcentral/08.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/centralcentral/09.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/centralcentral/10.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/centralcentral/11.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/centralcentral/12.jpg" width="80" height="53"></a></li>
	    	</ul>
	    </div>
			<div class="texto">
				<p class="titulo"> Restaurante Central Central </p>
				<p class="lugar">
					Santa Fe, CdMx (2011)<br/>
					Construcción de interiores
				</p>
				<p	class="info">
					"Quiero hacer el restaurante más bonito de México." Con estas palabras,el arquitecto y restaurantero Luis Felipe “Pipe” Castro nos invitó a los dueños de A3 Architecture a colaborar con él en el proyecto más ambicioso y detallista que habíamos abordado hasta ese momento.
				</p>
				<p	class="arq">
					Diseño: Arq. Luis Felipe Castro <br/>
					Construcción: Arq. Carolina Iglesias y Arq. Teo Robles
				</p>
			</div>
		</div>
	</div>
<?php include('../a_cont/footer.php'); ?>