<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-01 14:29:57
  from 'C:\xampp\htdocs\Proyectos\web2\tpe\templates\cardSkins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f75cbc5f27807_42193449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd5e7cf93759559c002957961097cb7c08c50a29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web2\\tpe\\templates\\cardSkins.tpl',
      1 => 1601555345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f75cbc5f27807_42193449 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container-fluid mt-2">
    <section>
    <div class="row row-cols-4 d-flex justify-content-around mt-5">
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
                <div class="card col-2 d-flex align-items-stretch">
                <?php if ($_smarty_tpl->tpl_vars['skin']->value->id_arma == 22) {?>
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
                    <div class="card-body text-center">
                        <a href="detalle/<?php echo $_smarty_tpl->tpl_vars['arma']->value->nombre;?>
/<?php echo $_smarty_tpl->tpl_vars['skin']->value->nombre;?>
/<?php echo $_smarty_tpl->tpl_vars['skin']->value->id;?>
" class="btn btn-primary stretched-link w-100">Comprar</a>
                    </div>
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
    </section>
</main><?php }
}
