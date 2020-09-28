<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-29 00:17:01
  from 'C:\xampp\htdocs\Proyectos\web2\tpe\templates\cardskins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7260dd49e083_12469254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bf28f394868f2bc417b120eb8d59b98895794fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web2\\tpe\\templates\\cardskins.tpl',
      1 => 1601331417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:skinslistnav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7260dd49e083_12469254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:skinslistnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main class="container-fluid mt-2 d-flex">
    <div class="row justify-content-between">
    <?php if (!$_smarty_tpl->tpl_vars['skins']->value) {?>
        <h1 class="text-center">No hay skins disponibles de esta arma</h1>
    <?php } else { ?>
    <!-- Recorremos el arreglo de las skins en la base de datos -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['skins']->value, 'skin');
$_smarty_tpl->tpl_vars['skin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['skin']->value) {
$_smarty_tpl->tpl_vars['skin']->do_else = false;
?> 
    <!-- Recorremos el arreglo de las armas para encontrar la similitud con la ID -->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['armas']->value, 'arma');
$_smarty_tpl->tpl_vars['arma']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arma']->value) {
$_smarty_tpl->tpl_vars['arma']->do_else = false;
?> 
            <?php if ($_smarty_tpl->tpl_vars['skin']->value->id_arma == $_smarty_tpl->tpl_vars['arma']->value->id_arma) {?>
                <div class="card col m-2" style="width: 16rem;">
                    <img src="images/ak47disruptorfantasma.png" class="card-img-top" alt="...">
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
    <?php }?>
    </div>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
