<?php /* Smarty version Smarty-3.0.7, created on 2012-06-25 03:11:48
         compiled from "/home/atrescom/public_html/persianas/themes/prestashop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:758432104fe81d44aac506-55929368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '758432104fe81d44aac506-55929368',
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
