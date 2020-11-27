<section class="mt-5 w-100">
        <div class="invisible" id="valoracion"></div>
        <div class="text-center text-primary"><h4 id="comTotal"></h4></div>
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
                <tr>
                    {if $admin == 1}
                    <th scope="col">RM</th>
                    {/if}
                    <th scope="col" class="text-center">Usuario</th>
                    <th scope="col" class="text-center">Valoracion</th>
                    <th scope="col">Comentario</th>
                </tr>
            </thead>
            <tbody id="commentbox">
            </tbody>
        </table>       
        <form id="comment-form" action="comments" method="POST" class="my-4" enctype="multipart/form-data">
            <div class="row col">
                <div class="form-group col-8 text-info text-center">
                {if $userlogin == 1}
                    <label>Comentario:</label>
                    <textarea name="comment" class="form-control" rows="3" maxlength="144"></textarea>
                {else}
                    <label>Comentario:</label>
                    <textarea name="comment" class="form-control" rows="3" disabled></textarea>
                {/if}
                </div>
                <div class="col-4">
                    <div class="text-info text-center">
                    {if $userlogin == 1}
                        <label>Valoración:</label>
                        <div class="justify-content justify-content-center row text-warning">
                            <div id="star1" class="w-20"></div>
                            <div id="star2" class="w-20"></div>
                            <div id="star3" class="w-20"></div>
                            <div id="star4" class="w-20"></div>
                            <div id="star5" class="w-20"></div>
                        <div>
                    {else}
                        <label>Valoración:</label>
                        <div class="justify-content justify-content-center text-secondary row">
                            <div id="star1" class="w-20"></div>
                            <div id="star2" class="w-20"></div>
                            <div id="star3" class="w-20"></div>
                            <div id="star4" class="w-20"></div>
                            <div id="star5" class="w-20"></div>
                        <div>
                    {/if}
                    </div>
                </div>
                <div class='col'>
                    <div class='col-12'>
                    {if $userlogin == 1}
                        <param name='user' value='{$smarty.session.ID_USER}'>
                        <button type="submit" class="btn btn-primary">Enviar Comentario</button>
                    {else}
                        <button class="btn btn-info"><a href="login" class="text-warning">Iniciar Sesion</a></button>
                    {/if}
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>
<script type="text/javascript " src="js/comments.js"></script>
<script type="text/javascript " src="js/stars.js"></script>