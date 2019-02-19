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
				<img src="img/petroleos/01.jpg" width="629" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
				<img src="img/petroleos/02.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
				<img src="img/petroleos/03.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
				<img src="img/petroleos/04.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
				<img src="img/petroleos/05.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
				<img src="img/petroleos/06.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
				<img src="img/petroleos/07.jpg" width="286" height="429" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
				<img src="img/petroleos/08.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
				<img src="img/petroleos/09.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
    		</div>

			<div class="fotos">
				<ul id="nav">
					<li class=""><a href="#"><img src="img/petroleos/01.jpg" width="80" height="53" ></a></li>
					<li class=""><a href="#"><img src="img/petroleos/02.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/petroleos/03.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/petroleos/04.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/petroleos/05.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/petroleos/06.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/petroleos/07.jpg" width="80" height="53"></a></li>
					<li class=""><a href="#"><img src="img/petroleos/08.jpg" width="80" height="53"></a></li>
					<li class="activeSlide"><a href="#"><img src="img/petroleos/09.jpg" width="80" height="53" ></a></li>
				</ul>
			</div>
			<div class="texto">
				<p class="titulo">Petróleos</p>
				<p class="lugar">
					
				</p>
				<p	class="info">
					
				</p>
				<p	class="arq">
					
				</p>
			</div>
		</div>
	</div>
<?php include('../a_cont/footer.php'); ?>