<?php
/* Smarty version 3.1.33, created on 2020-07-05 17:44:58
  from '/opt/lampp/htdocs/ttprestashop/modules/TTmodule/views/templates/admin/configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f01e76a2efb68_32802586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7191738c8397a558fb94af3bd8bfc347a1d5bc30' => 
    array (
      0 => '/opt/lampp/htdocs/ttprestashop/modules/TTmodule/views/templates/admin/configure.tpl',
      1 => 1593960296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f01e76a2efb68_32802586 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel">
	<h3><i class="icon icon-credit-card"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Test Module','mod'=>'TTmodule'),$_smarty_tpl ) );?>
</h3>
	<p>
		<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Модуль тестового задания.','mod'=>'TTmodule'),$_smarty_tpl ) );?>
</strong><br />
	</p>
	<p>
	При заходе на сайт выводить сообщение о том, сколько товаров в магазине находятся в указанном ценовом диапазоне.
	</p>
	<p>
	Для вывода содержимого можно использовать хук hookDisplayFooter.
	</p>
</div>
<?php }
}
