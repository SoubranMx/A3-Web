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

        			<img src="obras/obrealdel/obrealdel1.jpg" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
        			<img src="obras/obrealdel/obrealdel2.jpg" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
        			<img src="obras/obrealdel/obrealdel3.jpg" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
        			<img src="obras/obrealdel/obrealdel4.jpg" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
        			<img src="obras/obrealdel/obrealdel5.jpg" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
        			<img src="obras/obrealdel/obrealdel6.jpg" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">


    </div>

			<div class="fotos">
			<ul id="nav">
        <li class=""><a href="#"><img src="obras/obrealdel/obrealdel1.jpg" width="80" height="53" ></a></li>
        <li class=""><a href="#"><img src="obras/obrealdel/obrealdel2.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obrealdel/obrealdel3.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obrealdel/obrealdel4.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obrealdel/obrealdel5.jpg" width="80" height="53"></a></li>
        <li class="activeSlide"><a href="#"><img src="obras/obrealdel/obrealdel6.jpg" width="80" height="53" ></a></li>
    </ul>
    </div>
		<div class="texto">
			<p class="titulo">Casa Real del Country</p>
			<p class="lugar">
				1200 m2<br/>
		 		Lomas Country Club, Huixquilucan (2008)
			</p>
			<p	class="info">
				Proyecto y obra para mansión de lujo.
			</p>
			<p	class="arq">
				En colaboración con DM Arquitectos
			</p>
		</div>
	</div>
	</div>
<?php include('a_cont/footer.php'); ?>
