<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-27 22:13:09
  from 'C:\xampp\htdocs\proyectos\segundocuatri\TPE\tpe\templates\skinsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f70f255ce45d6_45438449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '444d2f3be30cc28705614eee17dd98138dd3ba7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\segundocuatri\\TPE\\tpe\\templates\\skinsList.tpl',
      1 => 1601237588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:cardSkins.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f70f255ce45d6_45438449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main class='container-fluid'>
    <section>
            <div class='row d-flex justify-content-center'>
                <div class='dropdown '>
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pistolas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['armas']->value, 'arma');
$_smarty_tpl->tpl_vars['arma']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arma']->value) {
$_smarty_tpl->tpl_vars['arma']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['arma']->value->id_tipo == 3) {?>
                                <a class="dropdown-item" href="armas/<?php echo $_smarty_tpl->tpl_vars['arma']->value->tipo;?>
/<?php echo $_smarty_tpl->tpl_vars['arma']->value->id_arma;?>
"><?php echo $_smarty_tpl->tpl_vars['arma']->value->nombre;?>
</a>
                            <?php }?>   
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                    </div>
                </div>
                <div class='dropdown'>
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Subfusiles
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['armas']->value, 'arma');
$_smarty_tpl->tpl_vars['arma']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arma']->value) {
$_smarty_tpl->tpl_vars['arma']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['arma']->value->id_tipo == 5) {?>
                                <a class="dropdown-item" href="armas/<?php echo $_smarty_tpl->tpl_vars['arma']->value->tipo;?>
/<?php echo $_smarty_tpl->tpl_vars['arma']->value->id_arma;?>
"><?php echo $_smarty_tpl->tpl_vars['arma']->value->nombre;?>
</a>
                            <?php }?>   
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                    </div>
                </div>
                <div class='dropdown'>
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Rifles
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['armas']->value, 'arma');
$_smarty_tpl->tpl_vars['arma']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arma']->value) {
$_smarty_tpl->tpl_vars['arma']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['arma']->value->id_tipo == 4) {?>
                                <a class="dropdown-item" href="armas/<?php echo $_smarty_tpl->tpl_vars['arma']->value->tipo;?>
/<?php echo $_smarty_tpl->tpl_vars['arma']->value->id_arma;?>
"><?php echo $_smarty_tpl->tpl_vars['arma']->value->nombre;?>
</a>
                            <?php }?>   
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                    </div>
                </div>
                <div class='dropdown'>
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Armas Pesadas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['armas']->value, 'arma');
$_smarty_tpl->tpl_vars['arma']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arma']->value) {
$_smarty_tpl->tpl_vars['arma']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['arma']->value->id_tipo == 2) {?>
                                <a class="dropdown-item" href="armas/<?php echo $_smarty_tpl->tpl_vars['arma']->value->tipo;?>
/<?php echo $_smarty_tpl->tpl_vars['arma']->value->id_arma;?>
"><?php echo $_smarty_tpl->tpl_vars['arma']->value->nombre;?>
</a>
                            <?php }?>   
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                    </div>
                </div>
                <div class='dropdown'>
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cuchillos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['armas']->value, 'arma');
$_smarty_tpl->tpl_vars['arma']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arma']->value) {
$_smarty_tpl->tpl_vars['arma']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['arma']->value->id_tipo == 1) {?>
                                <a class="dropdown-item" href="armas/<?php echo $_smarty_tpl->tpl_vars['arma']->value->tipo;?>
/<?php echo $_smarty_tpl->tpl_vars['arma']->value->id_arma;?>
"><?php echo $_smarty_tpl->tpl_vars['arma']->value->nombre;?>
</a>
                            <?php }?>   
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                    </div>
                </div>  
            </div>
    </section>
    <?php $_smarty_tpl->_subTemplateRender("file:cardSkins.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
