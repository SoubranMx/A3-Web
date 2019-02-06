<?php include('a_cont/head.php'); ?>
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
				<img src="obras/obeurotecsa1.jpg" width="629" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9;">
    	</div>
			<div class="fotos">
			<ul id="nav">
        <li class=""><a href="#"><img src="obras/obeurotecsa1.jpg" width="80" height="53" ></a></li>
    </ul>
    </div>
		<div class="texto">
			<p class="titulo">Centro de Inteligencia Eurotecsa</p>
			<p class="lugar">
				Lomas de Chapultepec, México D.F. (2010)<br/>
				Diseño de interior de oficinas
			</p>
			<p	class="info">
				Una empresa de gran crecimiento y múltiples giros, Eurotecsa llegó a necesitar un piso completo dedicado exclusivamente a su Centro de Inteligencia. Integrando diferentes líneas del mismo mobiliario de Eurotecsa, el ambiente se uniformiza mediante el uso exclusivo del blanco.
			</p>
		</div>

	 </div>
	</div>
<?php include('a_cont/footer.php'); ?>
