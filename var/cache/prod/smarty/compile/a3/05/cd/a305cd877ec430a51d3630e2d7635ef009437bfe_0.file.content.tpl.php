<?php
/* Smarty version 3.1.33, created on 2020-07-05 18:39:21
  from '/opt/lampp/htdocs/ttprestashop/admin5456qeen5/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f01f4296eca85_89602250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a305cd877ec430a51d3630e2d7635ef009437bfe' => 
    array (
      0 => '/opt/lampp/htdocs/ttprestashop/admin5456qeen5/themes/default/template/content.tpl',
      1 => 1593954707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f01f4296eca85_89602250 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
