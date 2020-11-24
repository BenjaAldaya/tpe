'use strict';
document.addEventListener("DOMContentLoaded", getComments);
Commentbox = document.querySelector('#Commentbox').innerHTML;

async function getComments(){
    try{
        const response = await fetch('comments');
        const comments = await response.json();


    }
    catch(e){
        console.log(e);
    }
};
