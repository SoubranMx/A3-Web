<?php /* Smarty version Smarty-3.0.7, created on 2012-02-16 18:10:12
         compiled from "/home/atrescom/public_html/persianas/themes/prestashop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11570778844f3d9ae4211249-77316960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f5704576ad7d4a2495335e2e52d00625d614449' => 
    array (
      0 => '/home/atrescom/public_html/persianas/themes/prestashop/footer.tpl',
      1 => 1306134704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11570778844f3d9ae4211249-77316960',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


		<?php if (!$_smarty_tpl->getVariable('content_only')->value){?>
				</div>

<!-- Right -->
				<div id="right_column" class="column">
					<?php echo $_smarty_tpl->getVariable('HOOK_RIGHT_COLUMN')->value;?>

				</div>
			</div>

<!-- Footer -->
			<div id="footer"><?php echo $_smarty_tpl->getVariable('HOOK_FOOTER')->value;?>
</div>
		</div>
	<?php }?>
	</body>
</html>
