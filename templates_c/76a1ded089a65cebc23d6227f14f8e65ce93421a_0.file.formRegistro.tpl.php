<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-28 22:58:17
  from 'C:\xampp\htdocs\Proyectos\web2\tpe\templates\formRegistro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f724e6945a7d4_07154594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76a1ded089a65cebc23d6227f14f8e65ce93421a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\web2\\tpe\\templates\\formRegistro.tpl',
      1 => 1601326579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f724e6945a7d4_07154594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
            <div class="bordearticle bg-dark text-white w-100 text-center">
                <h1>Crear Cuenta</h1>
            </div>
            <div class="bg-dark text-white pt-4 formularioinicio">
                <form class="container" id="formularioregistro">
                    <div class="form-group row">
                        <div class="col-sm-2 ">
                            <label>Usuario:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control w-100 p-4">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-sm-2 ">
                            <label>Contraseña:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="password" class="form-control p-4">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-sm-2 ">
                            <label>Repetir Contraseña:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="password" class="form-control p-4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 ">
                            <label>Email:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control p-4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 ">
                            <label>Captcha:</label>
                        </div>
                        <div class="col-sm-8">
                            <p class="bg-white text-dark col-sm-2 p-2" id="textocaptcha"></p>
                            <input id="inputcaptcha" type="text" class="form-control p-4">
                            <div id="captchainvalido" class="invalid-feedback"></div>
                            <div id="captchavalido" class="valid-feedback"></div>
                        </div>
                    </div>

                    <div class="form-group row ">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-lg btn-dark btn-outline-light mt-4">Registrarse</button>
                        </div>
                    </div>
                </form>
            </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}