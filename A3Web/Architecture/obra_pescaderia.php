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
	  			<img src="obras/obpescaderia/Pescaderia01.jpg" width="629" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
	  			<img src="obras/obpescaderia/Pescaderia02.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
	  			<img src="obras/obpescaderia/Pescaderia03.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
					<img src="obras/obpescaderia/Pescaderia04.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
					<img src="obras/obpescaderia/Pescaderia05.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="obras/obpescaderia/Pescaderia06.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="obras/obpescaderia/Pescaderia07.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="obras/obpescaderia/Pescaderia08.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="obras/obpescaderia/Pescaderia09.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
					<img src="obras/obpescaderia/Pescaderia10.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
	    </div>
			<div style="position:relative;width:300px; height:250px; float:right;">
				<ul id="nav">
	        <li class=""><a href="#"><img src="obras/obpescaderia/Pescaderia01.jpg" width="80" height="53" ></a></li>
	        <li class=""><a href="#"><img src="obras/obpescaderia/Pescaderia02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obpescaderia/Pescaderia03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obpescaderia/Pescaderia04.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obpescaderia/Pescaderia05.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obpescaderia/Pescaderia06.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obpescaderia/Pescaderia07.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obpescaderia/Pescaderia08.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="obras/obpescaderia/Pescaderia09.jpg" width="80" height="53"></a></li>
	        <li class="activeSlide"><a href="#"><img src="obras/obpescaderia/Pescaderia10.jpg" width="80" height="53" ></a></li>
	    	</ul>
	    </div>
			<div class="texto">
				<p class="lugar">
					La Pescadería Prado Norte
					Lomas de Chapultepec, CdMx (2017)
					Diseño y decoración
					Diseño de fachada y exteriores
				</p>
				<p	class="info">
					El quinto de una exitosa cadena de restaurantes de mariscos, debe conservar la imagen corporativa y a su vez estar a la altura de los exigentes gustos de una de las zonas más lujosas de la ciudad.
				</p>
				<p	class="arq">
					Con diseño de la Arq. Carolina Iglesias
					Y colaboración de la Arq. Karen González
				</p>
			</div>
		</div>
	</div>
<?php include('a_cont/footer.php'); ?>
