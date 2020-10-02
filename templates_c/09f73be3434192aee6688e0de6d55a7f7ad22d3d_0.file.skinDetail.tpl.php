<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 23:48:01
  from 'C:\xampp\htdocs\proyectos\segundocuatri\TPE\tpe\templates\skinDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f77a011975bb7_08372384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09f73be3434192aee6688e0de6d55a7f7ad22d3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\segundocuatri\\TPE\\tpe\\templates\\skinDetail.tpl',
      1 => 1601675277,
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
function content_5f77a011975bb7_08372384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:skinslistnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main class="container-fluid mt-5">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['skins']->value, 'skin');
$_smarty_tpl->tpl_vars['skin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['skin']->value) {
$_smarty_tpl->tpl_vars['skin']->do_else = false;
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['armas']->value, 'arma');
$_smarty_tpl->tpl_vars['arma']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arma']->value) {
$_smarty_tpl->tpl_vars['arma']->do_else = false;
?> 
            <?php if ($_smarty_tpl->tpl_vars['skin']->value->id_arma == $_smarty_tpl->tpl_vars['arma']->value->id_arma) {?>
            <section class="col row">
                <div class="col-6">
                <?php if ($_smarty_tpl->tpl_vars['skin']->value->id_arma == 49) {?>
                     <div class="img-holder">
                        <div class='container-img'>
                            <img src="images/ak47disruptorfantasma.png" class="card-img-top img-fluid h-75" alt="...">
                        </div>
                    </div>
                    <?php } else { ?>
                    <div class="img-holder">
                        <div class='container-img'>
                            <img src='images/noimage.png' class="card-img-top img-fluid" alt="...">
                        </div>
                    </div>
                <?php }?>
                </div>
                <div class="card col-6">
                <!-- Creacion de la carta con sus especificaciones mas llamativas -->
                    <div class="card-body"> 
                        <h5 class="card-title text-center"><?php echo $_smarty_tpl->tpl_vars['arma']->value->nombre;?>
 | <?php echo $_smarty_tpl->tpl_vars['skin']->value->nombre;?>
</h5>
                        <p class="card-text text-center"><?php echo $_smarty_tpl->tpl_vars['arma']->value->descripcion;?>
</p>
                    </div>
                        <ul class="list-group list-group-flush">
                                <li class="list-group-item text-center"><?php echo $_smarty_tpl->tpl_vars['arma']->value->tipo;?>
</li>
                                <li class="list-group-item text-center"><?php echo $_smarty_tpl->tpl_vars['skin']->value->estado;
if ($_smarty_tpl->tpl_vars['skin']->value->stattrak == '1') {?> | Stattrak<?php }?></li>
                                <li class="list-group-item text-center"><?php echo $_smarty_tpl->tpl_vars['skin']->value->coleccion;?>
 <?php if ($_smarty_tpl->tpl_vars['skin']->value->coleccion == '') {?>No pertenece a ninguna coleccion<?php }?></li>
                                <li class="list-group-item text-center text-success">$<?php echo $_smarty_tpl->tpl_vars['skin']->value->precio;?>
</li>
                        </ul>        
                </div>
                </div>
            </section>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
    </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
