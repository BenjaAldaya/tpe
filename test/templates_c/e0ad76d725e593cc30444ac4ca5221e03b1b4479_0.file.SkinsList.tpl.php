<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 23:56:35
  from 'C:\xampp\htdocs\proyectos\segundocuatri\TPE\test\templates\SkinsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6e6793cca310_43632352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0ad76d725e593cc30444ac4ca5221e03b1b4479' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\segundocuatri\\TPE\\test\\templates\\SkinsList.tpl',
      1 => 1601069974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f6e6793cca310_43632352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <main class='container-fluid'>
        <form class='container'>
            <div class=f orm-row>
                <button>All</button>
                <select>
                    <Option selected>Pistolas</Option>
                    <Option value="1">Glock-18</Option>
                    <Option value="2">USP-S</Option>
                    <Option value="3">Desert Eagle</Option>
                    <Option value="4">P250</Option>
                    <Option value="5">Five-SeveN</Option>
                    <Option value="6">Berettas dobles</Option>
                    <Option value="7">Tec-9</Option>
                    <Option value="8">P2000</Option>
                </select>
                <select>
                    <Option selected>Subfusiles</Option>
                    <Option value="1">MP5-SD</Option>
                    <Option value="2">MP7</Option>
                    <Option value="3">UMP-45</Option>
                    <Option value="4">P90</Option>
                    <Option value="5">PP-Bizon</Option>
                    <Option value="6">MP9</Option>
                    <Option value="7">MAC-10</Option>
                </select>
                <select>
                    <Option selected>Armas pesadas</Option>
                    <Option value="1">Nova</Option>
                    <Option value="2">XM1014</Option>
                    <Option value="3">Recortada</Option>
                    <Option value="4">MAG-7</Option>
                    <Option value="5">M249</Option>
                    <Option value="6">Negev</Option>
                </select>
                <select>
                    <Option selected>Rifles de asalto</Option>
                    <Option value="1">AK-47</Option>
                    <Option value="2">M4-A4</Option>
                    <Option value="3">SSG 08</Option>
                    <Option value="4">SSG 553</Option>
                    <Option value="5">AUG</Option>
                    <Option value="6">AWP</Option>
                    <Option value="7">G3SG1</Option>
                    <Option value="8">SCAR 20</Option>
                    <Option value="9">FAMAS</Option>
                    <Option value="10">Galil AR</Option>
                </select>
                <select>
                    <Option selected>Cuchillos</Option>
                    <Option value="1">Bayoneta</Option>
                    <Option value="2">Bayoneta M9</Option>
                    <Option value="3">Alfanje</Option>
                    <Option value="4">Bowie</Option>
                    <Option value="5">Clásico</Option>
                    <Option value="6">Supervivencia</Option>
                    <Option value="7">Cazador</Option>
                    <Option value="8">Destripador</Option>
                    <Option value="9">Encordado</Option>
                    <Option value="10">Esqueletizado</Option>
                    <Option value="11">Mariposa</Option>
                    <Option value="12">Nómada</Option>
                    <Option value="13">Plegable</Option>
                    <Option value="14">Talón</Option>
                    <Option value="15">Ursus</Option>
                    <Option value="14">Dagas Sombrias</Option>
                    <Option value="15">Karambit</Option>
                </select>
            </div>
        </form>
    </main>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}