'use strict';
// document.addEventListener("DOMContentLoaded", 
// getComments);

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
            document.querySelector('#commentbox').innerHTML +=`
                <tr>
                <td>${user.usuario}</td>
                <td>${comentarios[index].valoracion}</td>
                <td>${comentarios[index].comentario}</td>
                </tr>
            `;
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
