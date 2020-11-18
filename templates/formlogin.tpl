{include file="header.tpl"}
<section>
{if $error != null}
    <div class="bordearticle bg-dark text-white w-100 text-center">
        <h1 class="text-danger">Iniciar Sesión</h1>
        <h5 class="text-danger text-center">{$error}</h5>
    </div>
    <div class="bg-dark text-white pt-4 formularioinicio">
        <form action="verify" class="container" id="formularioregistro" method='POST'>
            <div class="form-group row">
                <div class="col-sm-2 text-center align-middle text-danger">
                    <label>Usuario:</label>
                </div>
                <div class="col-sm-8">
                    <input name="user" type="text" class="form-control w-100 p-4 is-invalid">
                </div>
            </div>
            <div class="form-group row ">
                <div class="col-sm-2 text-center align-middle text-danger">
                    <label>Contraseña:</label>
                </div>
                <div class="col-sm-8">
                    <input name="password" type="password" class="form-control p-4 is-invalid">
                </div>
            </div>
            <div class="form-group row ">
                <div class="col-sm-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-lg btn-danger btn-outline mt-4">Enviar</button>
                </div>
            </div>
        </form>
    </div>
{else}
    <div class="bordearticle bg-dark text-white w-100 text-center">
        <h1>Iniciar Sesión</h1>
    </div>
    <div class="bg-dark text-white pt-4 formularioinicio">
        <form action="verify" class="container" id="formularioregistro" method='POST'>
            <div class="form-group row">
                <div class="col-sm-2 text-center align-middle text-info">
                    <label>Usuario:</label>
                </div>
                <div class="col-sm-8">
                    <input name="user" type="text" class="form-control w-100 p-4">
                </div>
            </div>
            <div class="form-group row ">
                <div class="col-sm-2 text-center align-middle text-info">
                    <label>Contraseña:</label>
                </div>
                <div class="col-sm-8">
                    <input name="password" type="password" class="form-control p-4">
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
{include file="footer.tpl"}
