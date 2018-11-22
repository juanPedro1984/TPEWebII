"use strict"
//administracion de comentarios


let template;

fetch('js/templates/adminComent.handlebars')
    .then(response => response.text())
    .then(text =>{
        template = Handlebars.compile(text);
        getComentarios()
    });

function getComentarios() {
    fetch('api/comentarios')
    .then(response =>response.json())
    .then(jsonComent =>{
      mostrarComentarios(jsonComent);
      console.log(jsonComent);
    return jsonComent;
  })
}

function mostrarComentarios(jsonComent) {
  let context = {
  opiniones :jsonComent,
}
  let html = template(context);
  document.querySelector(".comentList").innerHTML = html;
}





//borrar Comentarios
document.querySelector('.delComent'),addEventListener('click',deleteComent);


function deleteComent(){

let id = document.querySelector('.delComent').value;

  fetch('api/comentarios/'+id,{
      'method': 'DELETE',
  })
  .then(function (r) {
    if(!r.ok){
      console.log("error")
    }else{
      return  r.json();
    }}).then(function(json) {
      console.log(JSON.stringify(json));
      })
    .catch(function(e) {
      console.log(e)
    })
    setTimeout(getComentarios,500);
}
