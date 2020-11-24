'use strict';
document.addEventListener("DOMContentLoaded", getComments);
let comentarios = [];
let user = {};
let idSkin = document.querySelector("#idskin").innerHTML;


async function getComments(){
    try{
        // Me encargo de traer unicamente los comentarios de la skin que estamos viendo.
        const response = await fetch(`commentSkin/${idSkin}`);
        const comments = await response.json();
        comentarios = comments;

        for (let index = 0; index < comentarios.length; index++) {
            // Una vez obtengo el ID de quien escribio, le busco el nombre.
            try{
                const response = await fetch(`user/${comentarios[index].id_user}`);
                const usuario = await response.json();
        
                user = usuario;
            }
            catch(e){
                console.log(e);
            }
            // Escribo el comentario en la caja de comentarios.
            document.querySelector('#commentbox').innerHTML += 
            `<div class="d-flex flex-row bg-info col">
            <div class="p-2 col-2">${user.usuario}</div>
            <div class="p-2 col-2 text-center">${comentarios[index].valoracion}</div>
            <div class="p-2 col-8 text-center">${comentarios[index].comentario}</div>
            </div>`;
        }
    }
    catch(e){
        console.log(e);
    }
};

