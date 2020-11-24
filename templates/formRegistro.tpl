{include file="header.tpl"}
<section>
{if $error != null}
            <div class="bordearticle bg-dark text-white w-100 text-center">
                <h1 class="text-danger text-center">Crear Cuenta</h1>
                <h5 class="text-danger text-center">{$error}</h5>
            </div>
            <div class="bg-dark text-white pt-4 formularioinicio">
                <form action="registrer" class="container" id="formularioregistro" method='POST'>
                    <div class="form-group row">
                        <div class="col-sm-2 ">
                            <label>Usuario:</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="user" type="text" class="form-control w- 100 p-4 is-invalid">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-sm-2 ">
                            <label>Contraseña:</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="password" type="password" class="form-control p-4 is-invalid">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-sm-2 ">
                            <label>Repetir Contraseña:</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="repeatpassword" type="password" class="form-control p-4 is-invalid">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 ">
                            <label>Email:</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="email" type="text" class="form-control p-4 is-invalid">
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
                            <button type="submit" class="btn btn-lg btn-info btn-outline-primary mt-4">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
{else}
            <div class="bordearticle bg-dark text-white w-100 text-center">
                <h1>Crear Cuenta</h1>
            </div>
            <div class="bg-dark text-white pt-4 formularioinicio">
                <form action="registrer" class="container" id="formularioregistro" method='POST'>
                    <div class="form-group row">
                        <div class="col-sm-2 ">
                            <label>Usuario:</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="user" type="text" class="form-control w-100 p-4">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-sm-2 ">
                            <label>Contraseña:</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="password" type="password" class="form-control p-4">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-sm-2 ">
                            <label>Repetir Contraseña:</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="rpassword" type="password" class="form-control p-4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 ">
                            <label>Email:</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="email" type="text" class="form-control p-4">
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
                            <button type="submit" class="btn btn-lg btn-info btn-outline-primary mt-4">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
{/if}
</section>
<script type="text/javascript " src="js/registro.js"></script>
{include file="footer.tpl"}