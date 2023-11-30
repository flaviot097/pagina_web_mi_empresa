const filtro = document.querySelector("input#input-filter");

filtro.addEventListener("keyup", (palabra) => {
  //console.log(palabra.key);
  //console.log(filtro.value);
  const letras = filtro.value;

  const todasTarjetas = document.querySelectorAll(".card.pd");

  const nuevo = Object.groupBy(todasTarjetas, (tarjeta) => {
    return tarjeta.getAttribute("name");
  });

  console.log(nuevo[`${letras}`]);

  if (nuevo[`${letras}`] !== undefined) {
    console.log("busqueda exitosa");

    const divContenedor = document.querySelector("#contenedor");

    const divAborrar = document.getElementById("contenedor_tarjetas_inicio");

    //añedir evento al boton que dispare la funcion eventobtn

    const btnEvento = document.querySelector("#btn_filtrado-serv");
    btnEvento.addEventListener("click", () => {
      eventobtn(divAborrar, divContenedor);
    });

    function eventobtn(divB, divA) {
      divB.remove();

      let nuevoDiv = `<div class="card pd" style="width: 18rem" id="${id}" name="${dato.nombre_servicio}" >
      <img src="./img/car-wash-1619823_1280.jpg" class="card-img-top" alt="..."id="${id}" />
      <div class="card-body" id="${id}">
      <h5 class="card-title" id="${id}">${dato.nombre_servicio}</h5>
      <p class="card-text" id="${id}">${dato.descripcion}.</p><br>
      <p class="card-text" id="${id}"><b>$${dato.precio}</b></p>
      </div>
      </div>`;

      let divCreados = (divA.innerHTML += nuevoDiv);
      return divCreados;
      ///realizar consulta feth

      ///añedir las cartas al html
    }
  } else {
    //window.alert("No hay conincidencias en su busqueda");
  }

  //const documentos = document.querySelectorAll(".card.pd");

  /*documentos.forEach((documento) => {
    console.log(documento.getAttribute("name").includes(filtro.value));
  });*/
});

/*function loader() {
  setTimeout(() => {
    const todasTarjetas = document.querySelectorAll(".card.pd");

    const nuevo = Object.groupBy(todasTarjetas, (tarjeta) => {
      return tarjeta.getAttribute("name");
    });

    console.log(nuevo);
    switch (nuevo) {
        case (){

            break
        }
    }
    //t.style.display = "none";
  }, 200);
}

loader();*/
