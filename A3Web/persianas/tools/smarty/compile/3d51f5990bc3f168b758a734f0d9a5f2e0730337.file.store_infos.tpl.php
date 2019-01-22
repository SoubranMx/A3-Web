<?php /* Smarty version Smarty-3.0.7, created on 2012-02-16 18:34:07
         compiled from "/home/atrescom/public_html/persianas/themes/prestashop/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18746359564f3da07f9c0985-99787371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d51f5990bc3f168b758a734f0d9a5f2e0730337' => 
    array (
      0 => '/home/atrescom/public_html/persianas/themes/prestashop/store_infos.tpl',
      1 => 1306748456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18746359564f3da07f9c0985-99787371',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<br />
<br />
<span id="store_hours"><?php echo smartyTranslate(array('s'=>'Hours:'),$_smarty_tpl);?>
</span>
<table style="font-size: 9px;">
	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('days_datas')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value){
?>
	<tr>
		<td style="width: 70px;"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</td>
	</tr>
	<?php }} ?>
</table>
