const filtro = document.querySelector("input#input-filter");

//const divContenedor = document.querySelector("#contenedor");

const divAborrar = document.getElementById("contenedor_tarjetas_inicio");

const btnEvento = document.querySelector("#btn_filtrado-serv");

filtro.addEventListener("keyup", (palabra) => {
  //console.log(palabra.key);
  //console.log(filtro.value);
  const letras = filtro.value;

  const todasTarjetas = document.querySelectorAll(".card.pd");

  const nuevo = Object.groupBy(todasTarjetas, (tarjeta) => {
    return tarjeta.getAttribute("name");
  });

  console.log(nuevo[`${letras}`]);

  if (nuevo[`${letras}`] !== undefined || null) {
    console.log("busqueda exitosa");

    //añedir evento al boton que dispare la funcion eventobtn

    btnEvento.addEventListener("click", () => {
      eventobtn();
    });
    function eventobtn() {
      divAborrar.innerHTML = "";
      const ruta = `http://localhost:4000/respuesta/${letras}`;
      fetch(ruta)
        .then((response) => response.json())
        .then((datos) => {
          console.log(datos);
          datos.forEach((dato) => {
            let nuevoDiv = `<div class="card pd" style="width: 18rem" id="${dato.id}" name="${dato.nombre_servicio}" >
        <img src="./img/car-wash-1619823_1280.jpg" class="card-img-top" alt="..."id="${dato.id}" />
        <div class="card-body" id="${dato.id}">
        <h5 class="card-title" id="${dato.id}">${dato.nombre_servicio}</h5>
        <p class="card-text" id="${dato.id}">${dato.descripcion}.</p><br>
        <p class="card-text" id="${dato.id}"><b>$${dato.precio}</b></p>
        </div>
        </div>`;

            divAborrar.innerHTML = nuevoDiv;
          });
        })
        .catch((err) => {
          divAborrar.innerHTML = "";

          if (
            document.getElementById("card-sin-servicios") == undefined ||
            null ||
            "undefined"
          ) {
            let sinServicios = `<div style="width: 18rem" id="card-sin-servicios">
          <h5 class="card-title" id="emiji"> No se encuentra el servicio que solicitaste 🙁</h5><br>
          <h5 class="card-title" id="emoji"> Quiza tengas que ser mas especifico. Elimina los filtros para volcer a buscar</h5>
          </div>`;

            divAborrar.innerHTML += sinServicios;
            console.log(err);

            //window.alert("No hay conincidencias en su busqueda");
          }
        });
    }
  }
});

const btnBorrarFiltrado = document.getElementById("eliminar-filtros");

btnBorrarFiltrado.addEventListener("click", () => {
  divAborrar.innerHTML = "";
  fetch("http://localhost:4000/inicio", {})
    .then((response) => response.json())
    .then((json) =>
      json.forEach((dato) => {
        let id = dato.id;
        let nuevodiv = `<div class="card pd" style="width: 18rem" id="${id}" name="${dato.nombre_servicio}" >
            <img src="./img/car-wash-1619823_1280.jpg" class="card-img-top" alt="..."id="${id}" />
            <div class="card-body" id="${id}">
            <h5 class="card-title" id="${id}">${dato.nombre_servicio}</h5>
            <p class="card-text" id="${id}">${dato.descripcion}.</p><br>
            <p class="card-text" id="${id}"><b>$${dato.precio}</b></p>
            </div>
        </div>`;
        divAborrar.innerHTML += nuevodiv;
      })
    );
});
