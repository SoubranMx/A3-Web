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

        			<img src="obras/obrancho/obrancho1.jpg" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
        			<img src="obras/obrancho/obrancho2.jpg" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
        			<img src="obras/obrancho/obrancho3.jpg" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
        			<img src="obras/obrancho/obrancho4.jpg" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
        			<img src="obras/obrancho/obrancho5.jpg" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
        			<img src="obras/obrancho/obrancho6.jpg" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
        			<img src="obras/obrancho/obrancho7.jpg" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
        			<img src="obras/obrancho/obrancho8.jpg" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
        			<img src="obras/obrancho/obrancho9.jpg" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">

    </div>

			<div class="fotos">
			<ul id="nav">
        <li class=""><a href="#"><img src="obras/obrancho/obrancho1.jpg" width="80" height="53" ></a></li>
         <li class=""><a href="#"><img src="obras/obrancho/obrancho2.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obrancho/obrancho3.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obrancho/obrancho4.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obrancho/obrancho5.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obrancho/obrancho6.jpg" width="80" height="53"></a></li>
         <li class=""><a href="#"><img src="obras/obrancho/obrancho7.jpg" width="80" height="53"></a></li>
          <li class=""><a href="#"><img src="obras/obrancho/obrancho8.jpg" width="80" height="53"></a></li>
        <li class="activeSlide"><a href="#"><img src="obras/obrancho/obrancho9.jpg" width="80"  height="53" ></a></li>
    </ul>
    </div>

		<div class="texto">
			<p class="titulo">Rancho La Paz</p>
			<p class="lugar">
		 		Avándaro, Estado de México (2011)
			</p>
			<p	class="info">
				Supervisión arquitéctonica de casa de descanso de 600 m2 y lago artificial
			</p>
			<p	class="arq">
				Diseño: Arq. Mateo Holmes
			</p>
		</div>
	</div>
	</div>
<?php include('a_cont/footer.php'); ?>
