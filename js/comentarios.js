//document.addEventListener("DOMContentLoaded", function(){
  let mainURL = 'http://localhost/tpe-web2/api/comentarios';
  let subURL = 'http://localhost/tpe-web2/api/comentario/';
  let postURL = 'http://localhost/tpe/api/tendencia/';

  function mostrarComentariosDeMoto(id){
      fetch (mainURL,  {
          "method" : "GET",
          "mode" : "cors",
      }).then(function(r){
              if(!r.ok){
              console.log(r)
              }
              return r.json();
          })
          .then(function(json) {
              
              actualizarTabla(json, id);
          })
          .catch(function(e){
              console.log(e)
          })
  }

  function actualizarTabla(json, id){
      let tabla = document.querySelector("#tablaComentarios");
      let filas = document.querySelector("#columnas").rows[0].cells.length;
      tabla.innerHTML = " ";
      for (let index = 0; index<json.length; index++){
          let comentarioActual = json[index];
          let idJson = comentarioActual.id;
          if(id == comentarioActual.idMoto){
              if(filas == 3){
                  tabla.innerHTML +=                     
                  `<tr>
                  <td>${comentarioActual.comentario}</td>
                  <td>${comentarioActual.puntuacion}</td>
                  <td><button class="btn-delete" id="${idJson}">Eliminar</button></td>
                  </tr>`
              }
              else if(filas == 2){
                  tabla.innerHTML +=                     
                  `<tr>
                  <td>${comentarioActual.comentario}</td>
                  <td>${comentarioActual.puntuacion}</td>
                  </tr>`
              }
          }
      }
      inicializarBoton();
      setTimeout(idComentarios, 1);
  }

  
  function insertarComentario(data){
      fetch(subURL + data.idMoto, {
          "method": "POST",
          "mode": "cors",
          "headers": { "Content-Type": "application/json" },
          "body": JSON.stringify(data)
      }).then(function (r) {
          return r.json();
      }).then(function (r) {
          console.log(r);
          mostrarComentariosDeMoto(data.idMoto);
      });
  }

  function deleteComentario(id){
      fetch(subURL + id, {
          "method": "DELETE",
          "mode": "cors",
      }).then(function(r) {
          if (!r.ok) {
              console.log(e);
          };
          return r.json();
      }).then(function () {
          llamadoPrincipal();
      });
  };

  function llamadoPrincipal(){
      let tabla = document.querySelector("#tablaMoto");
      let idMotoParticular = tabla.rows.item(0).cells[1].id;
      
      mostrarComentariosDeMoto(idMotoParticular);
  }

  function inicializarBoton(){
      document.querySelectorAll(".btn-delete").forEach(element => element.addEventListener("click", function(){ 
          deleteComentario(element.id);
      }));  
  }


  llamadoPrincipal();

  

  function validarInsert(){
      let comentario = document.querySelector("#comentario").value;
      let puntuacion = document.querySelector("#puntuacion").value;
      let tabla = document.querySelector("#tablaMoto");
      let id_tendencia =  tabla.rows.item(0).cells[1].id;
      if(comentario != "" && puntuacion != "" && (puntuacion <= 5) && (puntuacion >= 1)){
          return (comentario && puntuacion && id_tendencia);
      }
      else{
          return false;
      }
  }


  function idComentarios(){
      let tabla = document.querySelector("#tablaMoto");
      let idMotoParticular = tabla.rows.item(0).cells[1].id;
      document.querySelector("#formComentarios").action = "motoParticular/" + idMotoParticular;
  }

  
  
  
  


