<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 00:03:40
  from 'C:\xampp\htdocs\proyectos\segundocuatri\TPE\tpe\templates\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f76523c1d2571_71816551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7844a80879339ef49a1e4f2062bf2a156ff8c13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\segundocuatri\\TPE\\tpe\\templates\\about.tpl',
      1 => 1601589819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f76523c1d2571_71816551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container text-center mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Facundo Binetti</h5>
                        <p class="card-text">Programador WEB</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Github</li>
                        <li class="list-group-item">Moodle</li>
                        <li class="list-group-item">Twitter</li>
                        <li class="list-group-item">Posee gran parte de los rifles y las pistolas.</li>
                    </ul>
                </div>   
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Aldaya Benjamin</h5>
                        <p class="card-text">Programador WEB.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Github</li>
                        <li class="list-group-item">Moodle</li>
                        <li class="list-group-item">Twitter</li>
                        <li class="list-group-item">Posee una parte del inventario de la pagina.</li>
                    </ul>
                </div>    
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
