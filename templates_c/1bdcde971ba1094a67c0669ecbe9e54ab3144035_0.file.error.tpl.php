<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 23:05:37
  from 'C:\xampp\htdocs\proyectos\segundocuatri\TPE\tpe\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f779621ea9b87_28010541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bdcde971ba1094a67c0669ecbe9e54ab3144035' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\segundocuatri\\TPE\\tpe\\templates\\error.tpl',
      1 => 1601671346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f779621ea9b87_28010541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main class="container-fluid">
        <div class="col d-flex">
            <div class="col-sm text-danger"><h1>ERROR!</h1></div>
            <div class="col-sm text-primary"><h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2></div>
        </div>
        <div class="text-center"><a href="home">Volver atras</a></div>
    </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
