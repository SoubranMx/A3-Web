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
				<img src="obras/obeurotecsa1.jpg" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
    	</div>
			<div style="position:relative;width:300px; height:80px; float:right;">
			<ul id="nav">
        <li class=""><a href="#"><img src="obras/obeurotecsa1.jpg" width="80" height="53" ></a></li>
    </ul>
    </div>
		<div class="texto">
			<p class="lugar">
				Centro De Inteligencia (CDI) Eurotecsa
				Lomas de Chapultepec, México D.F. (2010)
			</p>
			<p	class="info">
				Diseño de interior de oficinas
			</p>
		</div>

	 </div>
	</div>
<?php include('a_cont/footer.php'); ?>
