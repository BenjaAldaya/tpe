'use strict';

document.addEventListener('DOMContentLoaded', e => {
    let idSkin = document.querySelector("#idskin").innerHTML;
    getComments(idSkin);
    document.querySelector('#comment-form').addEventListener('submit', e => {
        e.preventDefault();
        addComment(idSkin);
    });
});


async function getComments(idSkin) {
    try {
        let comentarios = [];
        let user = {};
        let valoraciontotal = 0;
        let adminlog = document.querySelector("#admin").innerHTML;
        document.querySelector('#commentbox').innerHTML = '';
        // Me encargo de traer unicamente los comentarios de la skin que estamos viendo.
        const response = await fetch(`api/comments/${idSkin}`);
        const comments = await response.json();
        comentarios = comments;
        for (let index = 0; index < comentarios.length; index++) {
            // Una vez obtengo el ID de quien escribio, le busco el nombre.
            try {
                const response = await fetch(`api/user/${comentarios[index].id_user}`);
                const usuario = await response.json();

                user = usuario;
            } catch (e) {
                console.log(e);
            }
            valoraciontotal = valoraciontotal + Number(comentarios[index].valoracion);
            // Escribo el comentario en la caja de comentarios.
            if (adminlog == 1){ // Si el usuario es un admin, va a tener una lista de comentarios distinta
                document.querySelector('#commentbox').innerHTML +=`
                <tr>
                <td><svg onclick="remove(${comentarios[index].id})" "width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg" id="Iremove">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg></td>
                <td>${user.usuario}</td>
                <td>${comentarios[index].valoracion}</td>
                <td>${comentarios[index].comentario}</td>
                </tr>
            `;
            }
            else{ // Si no es admin, una lista mas basica
            document.querySelector('#commentbox').innerHTML +=`
                <tr>
                <td>${user.usuario}</td>
                <td>${comentarios[index].valoracion}</td>
                <td>${comentarios[index].comentario}</td>
                </tr>
            `;
            }
        }
        valoraciontotal = valoraciontotal / comentarios.length;
        document.querySelector("#valtotal").innerHTML = "Valoración promedio: " + valoraciontotal;
        document.querySelector("#comTotal").innerHTML = "Comentarios total: " + comentarios.length;
    } catch (e) {
        console.log(e);
    }
};

// add comment sin terminar
async function addComment(idSkin) {
    const comment = {
        id_user : document.querySelector('param[name=user]').value,
        comentario : document.querySelector('textarea[name=comment]').value,
        valoracion : document.querySelector('select[name=valoracion]').value,
    }
    try {
        const response = await fetch('api/comments/' + idSkin, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(comment)
        });

        const c = await response.json();
        document.querySelector('textarea[name=comment]').value = '';
        document.querySelector('select[name=valoracion]').value = 1;
        getComments(idSkin);
    } catch (e) {
        console.log(e);
    }
}

async function remove(idcomment){
    try{
        const response = await fetch('api/comments/'+idcomment,{
            method: 'DELETE',
        })
        let idSkin = document.querySelector("#idskin").innerHTML;
        getComments(idSkin);
    }
    catch (e){
        console.log(e);
    }
}
