<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-01 15:14:25
  from 'C:\xampp\htdocs\Proyectos\web2\tpe\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f75d631db47a3_45771172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01dafa88186b4e2d97a0173bb453dbfebe8d4721' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web2\\tpe\\templates\\admin.tpl',
      1 => 1601557963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:skinslistnav.tpl' => 1,
    'file:cardSkins.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f75d631db47a3_45771172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:skinslistnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-2">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link" id="v-pills-addskin-tab" data-toggle="pill" href="#v-pills-addskin" role="tab" aria-controls="v-pills-addskin" aria-selected="false">Agregar Skin</a>
            <a class="nav-link" id="v-pills-addarma-tab" data-toggle="pill" href="#v-pills-addarma" role="tab" aria-controls="v-pills-addarma" aria-selected="false">Agregar Arma</a>
            <a class="nav-link" id="v-pills-editarma-tab" data-toggle="pill" href="#v-pills-editarma" role="tab" aria-controls="v-pills-editarma" aria-selected="false">Editar Arma</a>
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-addskin" role="tabpanel" aria-labelledby="v-pills-addskin-tab">
                
                <form action='addskin' method="POST">
                <div class= "form-group">
                        <label>Arma</label>
                        <select name="idarma">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['armas']->value, 'arma');
$_smarty_tpl->tpl_vars['arma']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arma']->value) {
$_smarty_tpl->tpl_vars['arma']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['arma']->value->id_arma;?>
"><?php echo $_smarty_tpl->tpl_vars['arma']->value->nombre;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <label>Nombre</label>
                        <input name="nombre" type="text"> 
                        <label>Tipo</label>
                        <select name="tipo">
                            <option>Clasificado</option>
                            <option>asd1</option>
                            <option>asd2</option>
                            <option>asdd3</option>
                            <option>asd5</option>
                        </select>
                        <label>Estado</label>
                        <select name="estado">
                            <option>Clasificado</option>
                            <option>asd1</option>
                            <option>asd2</option>
                            <option>asdd3</option>
                            <option>asd5</option>
                        </select>
                        <label>Statrak</label>
                        <select name="statrak">
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                        <label>Precio</label>
                        <input name="precio">
                        <button type='submit'>Agregar Skin</button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="v-pills-addarma" role="tabpanel" aria-labelledby="v-pills-addarma-tab">
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:cardSkins.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
