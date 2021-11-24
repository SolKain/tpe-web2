"use strict";
const API_URL = "api/comentarios/" + id_moto;

let lista = new Vue({
  el: "#lista",
  data: {
    titulo: "Comentarios de producto",
    comentarios: [],
  },
  methods: {
    filter: async function (event) {
      event.preventDefault();
      let formData = new FormData(filtro);
      let puntaje = formData.get("puntaje");
      try {
        let response = await fetch(API_URL + "?puntaje=" + `${puntaje}`);
        let comentarios = await response.json();
        lista.comentarios = comentarios;
      } catch (e) {
        console.log(e);
      }
    },
    orderBy: async function (event) {
      event.preventDefault();
      let formData = new FormData(orden);
      let atributo = formData.get("atributo");
      let criterio = formData.get("criterio");
      try {
        let response = await fetch(API_URL + "?sort=" + `${atributo}` + "&order=" + `${criterio}`);
        let comentarios = await response.json();
        lista.comentarios = comentarios;
      } catch (e) {
        console.log(e);
      }
    },
    deleteComm: async function (id_comentario) {
      try {;
        let respuesta = await fetch(`api/comentarios/${id_comentario}`, {
          method: "DELETE",
        });
        if (respuesta.ok) {
          console.log("Comentario eliminado");
          getComments();
        }
      } catch (error) {
        console.log(error);
      }
    }
  }
});

async function getComments() {
  try {
    let response = await fetch(API_URL);
    let comentarios = await response.json();
    lista.comentarios = comentarios;
  } catch (e) {
    console.log(e);
  }
}

getComments();

document.querySelector("#submitComentario").addEventListener("click", postComment);

async function postComment() {
  let formData = new FormData(formComentarios);
  let texto = formData.get("comentario");
  let puntaje = formData.get("puntaje");

  let id_usuario = document.querySelector("#formComentarios").dataset.id_usuario;
  let fecha_actual = new Date();

  let comentarioJSON = {
    idMoto: id_moto,
    id_usuario: id_usuario,
    comentario: texto,
    puntaje: puntaje,
    fecha: (fecha_actual.getFullYear() + "/" + (fecha_actual.getMonth() + 1) + "/" + fecha_actual.getDate()),
  };

  try {
    let respuesta = await fetch(API_URL, {
      method: "POST",
      headers: { "Content-type": "application/json" },
      body: JSON.stringify(comentarioJSON),
    });
    if (respuesta.ok) {
      console.log("Comentario cargado");
      getComments();
    }
  } catch (error) {
    console.log(error);
  }

}