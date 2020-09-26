<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-26 22:41:09
  from 'C:\xampp\htdocs\proyectos\segundocuatri\TPE\tpe\templates\cardSkins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6fa765045203_43017607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba5b48db55adf687efcd490e29b58ff785bcd7ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\segundocuatri\\TPE\\tpe\\templates\\cardSkins.tpl',
      1 => 1601152867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6fa765045203_43017607 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="container-fluid mt-5 d-flex">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['skins']->value, 'skin');
$_smarty_tpl->tpl_vars['skin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['skin']->value) {
$_smarty_tpl->tpl_vars['skin']->do_else = false;
?>
       <div class="card mr-2" style="width: 16rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['skin']->value->nombre;?>
</h5>
        </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['skin']->value->id_arma;?>
</li>
                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['skin']->value->estado;?>
 <?php if ($_smarty_tpl->tpl_vars['skin']->value->stattrak == '1') {?>Stattrak<?php }?></li>
                <li class="list-group-item">$<?php echo $_smarty_tpl->tpl_vars['skin']->value->precio;?>
</li>
            </ul>
    </div>                         
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
</main><?php }
}
