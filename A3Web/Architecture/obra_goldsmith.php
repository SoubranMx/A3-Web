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

			<div id="slideshow" class="pics" style="height:429px; ">

        			<img src="obras/obgoldsmith/obgoldsmith1.jpg" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">
        			<img src="obras/obgoldsmith/obgoldsmith2.jpg" width="644" height="429" style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
        			<img src="obras/obgoldsmith/obgoldsmith3.jpg" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
        			<img src="obras/obgoldsmith/obgoldsmith4.jpg" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
        			<img src="obras/obgoldsmith/obgoldsmith5.jpg" style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
        			<img src="obras/obgoldsmith/obgoldsmith6.jpg" style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">
        			<img src="obras/obgoldsmith/obgoldsmith7.jpg" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">
        			<img src="obras/obgoldsmith/obgoldsmith8.jpg" style="top: 0px; left: 0px; z-index: 2; position: absolute; display: none; ">


    </div>

			<div class="titulo">
			<ul id="nav">
        <li class=""><a href="#"><img src="obras/obgoldsmith/obgoldsmith1.jpg" width="80" height="53" ></a></li>
        <li class=""><a href="#"><img src="obras/obgoldsmith/obgoldsmith2.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obgoldsmith/obgoldsmith3.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obgoldsmith/obgoldsmith4.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obgoldsmith/obgoldsmith5.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obgoldsmith/obgoldsmith6.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obgoldsmith/obgoldsmith7.jpg" width="80" height="53"></a></li>
        <li class="activeSlide"><a href="#"><img src="obras/obgoldsmith/obgoldsmith8.jpg" width="80" height="53" ></a></li>
    </ul>
    </div>
		<div class="texto">
			<p class="titulo"> Departamento Goldsmith </p>
			<p class="lugar">
				150 m2 <br/>
				Polanco (2009)<br/>
				Construcción de Interiores
			</p>
			<p	class="arq">
				Diseño: Arq. Héctor Bitar
			</p>
		</div>

	 </div>
	</div>
<?php include('a_cont/footer.php'); ?>
