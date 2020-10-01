<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-29 03:29:21
  from 'C:\xampp\htdocs\Proyectos\web2\tpe\templates\skinslistnav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f728df1399fd5_66662779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49c6ea269ca496b45e51177e2f6c5203f858d3ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web2\\tpe\\templates\\skinslistnav.tpl',
      1 => 1601342935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f728df1399fd5_66662779 (Smarty_Internal_Template $_smarty_tpl) {
?>    <ul class="nav nav-tabs justify-content-around bg-dark pb-2 pt-2">
        <li class="nav-item">
            <a class="nav-link btn btn-outline-info" href="home">All</a>
        </li>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipo']->value, 'tipos');
$_smarty_tpl->tpl_vars['tipos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipos']->value) {
$_smarty_tpl->tpl_vars['tipos']->do_else = false;
?>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle btn btn-outline-info" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['tipos']->value->tipo;?>
</a>
            <div class="dropdown-menu">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['armas']->value, 'arma');
$_smarty_tpl->tpl_vars['arma']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arma']->value) {
$_smarty_tpl->tpl_vars['arma']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['arma']->value->tipo == $_smarty_tpl->tpl_vars['tipos']->value->tipo) {?>
                        <a class="dropdown-item" href="armas/<?php echo $_smarty_tpl->tpl_vars['arma']->value->tipo;?>
/<?php echo $_smarty_tpl->tpl_vars['arma']->value->id_arma;?>
"><?php echo $_smarty_tpl->tpl_vars['arma']->value->nombre;?>
</a>
                    <?php }?>   
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            </div>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <li>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <a class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</a>
            </form>
        </li>
    </ul><?php }
}
