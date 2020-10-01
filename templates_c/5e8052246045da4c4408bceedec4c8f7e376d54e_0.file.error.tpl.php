<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-29 03:28:11
  from 'C:\xampp\htdocs\Proyectos\web2\tpe\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f728dab82a966_58534939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e8052246045da4c4408bceedec4c8f7e376d54e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web2\\tpe\\templates\\error.tpl',
      1 => 1601342889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f728dab82a966_58534939 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1> ERROR!</h1>";
    <h2> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
 </h2>";
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
