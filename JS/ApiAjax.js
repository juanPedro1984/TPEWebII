"use strict";

document.querySelector('.postComent').addEventListener('click',cargarComentarios);

function cargarComentarios(){
  let comentario = document.querySelector('.comentarios').value;
  let valor = document.querySelector('.rating').value;
  let data = {
    "comentarios": {
      "comentario":comentario,
      "Valoracion":valor,
    }
  }
fetch('http://localhost/proyectos/TPE-webII/TPE-webII/api/cargarComent',{
  "method" : "POST",
  "mode" : 'cors',
  "headers" : {"Content-Type":"application/json"},
  "body" : JSON.stringify(data)
})
.then(function (r) {
  if(!r.ok){
    console.log("error")
  }
  return r.json()
})
.then(function(json) {
console.log(JSON.stringify(json));
})
.catch(function(e) {
  console.log(e)
})
}
