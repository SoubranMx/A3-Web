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

        			<img src="obras/obranchore/obranchore1.jpg" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
        			<img src="obras/obranchore/obranchore2.jpg" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
        			<img src="obras/obranchore/obranchore3.jpg" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
        			<img src="obras/obranchore/obranchore4.jpg" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
        			<img src="obras/obranchore/obranchore5.jpg" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">


    </div>

			<div class="fotos">
			<ul id="nav">
        <li class=""><a href="#"><img src="obras/obranchore/obranchore1.jpg" width="80" height="53" ></a></li>
        <li class=""><a href="#"><img src="obras/obranchore/obranchore2.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obranchore/obranchore3.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obranchore/obranchore4.jpg" width="80" height="53"></a></li>
        <li class="activeSlide"><a href="#"><img src="obras/obranchore/obranchore5.jpg" width="80" height="53" ></a></li>
    </ul>
    </div>
		<div class="texto">
			<p class="titulo">Rancho Recoveco</p>
			<p class="lugar">
				400 m2 <br/>
		 		Villa Coapa (2005)
			</p>
			<p	class="info">
				Proyecto y obra para residencia moderna de lujo.
			</p>
		</div>
	</div>
	</div>
<?php include('a_cont/footer.php'); ?>
