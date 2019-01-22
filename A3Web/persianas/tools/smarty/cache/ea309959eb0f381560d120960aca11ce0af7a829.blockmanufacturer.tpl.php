<?php /*%%SmartyHeaderCode:11186699094fe81d43666045-03945051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea309959eb0f381560d120960aca11ce0af7a829' => 
    array (
      0 => '/home/atrescom/public_html/persianas/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1306134704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11186699094fe81d43666045-03945051',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<h4><a href="http://a-tres.com.mx/persianas/manufacturer.php" title="Manufacturers">Manufacturers</a></h4>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item"><a href="http://a-tres.com.mx/persianas/manufacturer.php?id_manufacturer=1" title="More about Apple Computer, Inc">Apple Computer, Inc</a></li>
							<li class="last_item"><a href="http://a-tres.com.mx/persianas/manufacturer.php?id_manufacturer=2" title="More about Shure Incorporated">Shure Incorporated</a></li>
				</ul>
				<form action="/persianas/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">All manufacturers</option>
									<option value="http://a-tres.com.mx/persianas/manufacturer.php?id_manufacturer=1">Apple Computer, Inc</option>
									<option value="http://a-tres.com.mx/persianas/manufacturer.php?id_manufacturer=2">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php } ?>