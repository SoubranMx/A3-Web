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

        			<img src="obras/obmangos/obmango1.jpg" width="629" height="429" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; z-index: 9; ">

        			<img src="obras/obmangos/obmango2.jpg" width="629" height="429"  style="top: 0px; left: 0px; z-index: 7; position: absolute; display: none; ">
        			<img src="obras/obmangos/obmango3.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 6; position: absolute; display: none; ">
        			<img src="obras/obmangos/obmango4.jpg" width="629" height="429" style="top: 0px; left: 0px; z-index: 5; position: absolute; display: none; ">
        			<img src="obras/obmangos/obmango5.jpg" width="629" height="429"  style="top: 0px; left: 0px; z-index: 4; position: absolute; display: none; ">
        			<img src="obras/obmangos/obmango6.jpg"  height="429"  style="top: 0px; left: 0px; z-index: 3; position: absolute; display: none; ">


    </div>

			<div style="position:relative;width:300px; height:145px; float:right;">
			<ul id="nav">
        <li class=""><a href="#"><img src="obras/obmangos/obmango1.jpg" width="80" height="53" ></a></li>
         <li class=""><a href="#"><img src="obras/obmangos/obmango2.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obmangos/obmango3.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obmangos/obmango4.jpg" width="80" height="53"></a></li>
        <li class=""><a href="#"><img src="obras/obmangos/obmango5.jpg" width="80" height="53"></a></li>
        <li class="activeSlide"><a href="#"><img src="obras/obmangos/obmango6.jpg" width="80"  height="53" ></a></li>
    </ul>
    </div>
		 <div style="position:relative;width:255px; border-top:1px solid #fff; padding-top:10px; float:right; bottom:0px;">
		 Ampliación Casa Los Mangos, 300 m2<br />
		 Cuernavaca, Morelos (2011)<br />
		 Proyecto y construcción de gimnasio, terraza y salón de juegos

	    </div>
		 </div>

	</div>
<?php include('a_cont/footer.php'); ?>
