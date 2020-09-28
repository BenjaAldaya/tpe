<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-28 22:14:39
  from 'C:\xampp\htdocs\Proyectos\web2\tpe\templates\cardSkins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f72442fe5be57_80481561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd5e7cf93759559c002957961097cb7c08c50a29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web2\\tpe\\templates\\cardSkins.tpl',
      1 => 1601324078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f72442fe5be57_80481561 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="container-fluid mt-5 d-flex">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['skins']->value, 'skin');
$_smarty_tpl->tpl_vars['skin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['skin']->value) {
$_smarty_tpl->tpl_vars['skin']->do_else = false;
?> <!-- Recorremos el arreglo de las skins en la base de datos -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['armas']->value, 'arma');
$_smarty_tpl->tpl_vars['arma']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arma']->value) {
$_smarty_tpl->tpl_vars['arma']->do_else = false;
?> <!-- Recorremos el arreglo de las armas para encontrar la similitud con la ID -->
        <?php if ($_smarty_tpl->tpl_vars['skin']->value->id_arma == $_smarty_tpl->tpl_vars['arma']->value->id_arma) {?>
            <div class="card mr-2" style="width: 16rem;">
                <div class="card-body"> 
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['arma']->value->nombre;?>
 | <?php echo $_smarty_tpl->tpl_vars['skin']->value->nombre;?>
</h5>
                </div> <!-- Creacion de la carta con sus especificaciones mas llamativas -->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['arma']->value->tipo;?>
</li>
                    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['skin']->value->estado;?>
 <?php if ($_smarty_tpl->tpl_vars['skin']->value->stattrak == '1') {?>Stattrak<?php }?></li>
                    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['skin']->value->coleccion;?>
 <?php if ($_smarty_tpl->tpl_vars['skin']->value->coleccion == '') {?>No pertenece<?php }?></li>
                    <li class="list-group-item">$<?php echo $_smarty_tpl->tpl_vars['skin']->value->precio;?>
</li>
                </ul>
            </div> 
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                        
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
</main><?php }
}
