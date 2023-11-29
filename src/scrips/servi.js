const divcarrito = document.getElementById("contenedor_tarjetas_inicio");

fetch("http://localhost:4000/inicio", {})
  .then((response) => response.json())
  .then((json) =>
    json.forEach((dato) => {
      let id = dato.id;
      let nuevodiv = `<div class="card pd" style="width: 18rem" id="${id}">
            <img src="./img/car-wash-1619823_1280.jpg" class="card-img-top" alt="..."id="${id}" />
            <div class="card-body" id="${id}">
            <h5 class="card-title" id="${id}">${dato.nombre_servicio}</h5>
            <p class="card-text" id="${id}">${dato.descripcion}.</p>
            <p class="card-text" id="${id}"><b>$${dato.precio}</b></p>
            <a  class="btn btn-primary" name="${dato.nombre_servicio}" id="${id}">🛒</a>
            </div>
        </div>`;
      let nuevohtml = (divcarrito.innerHTML += nuevodiv);
      return nuevohtml;
    })
  )
  .then((rep) => agregarclick())
  .catch((err) => console.log(err));

async function agregarclick() {
  const selectarjeta = document.querySelectorAll("div.card");

  function clickTarjetas(tarjetas) {
    async function darValor(valor) {
      var data = valor[0];
      console.log(data);
      localStorage.setItem("servicio", JSON.stringify(data));
      location.href = "./../../la_verdadera/servicio.php";
    }
    tarjetas.forEach((divT) => {
      divT.addEventListener("click", (e) => {
        let da = e.target.id;
        console.log(da);
        //consultar por rutas
        const url = `http://localhost:4000/inicio/respuesta/${da}`;
        fetch(url)
          .then((response) => response.json())
          .then((dato) => darValor(dato));
      });
    });
  }
  clickTarjetas(selectarjeta);
}

function retraso() {
  setTimeout(() => {
    const btnTarjetaSev = document.querySelectorAll("a.btn.btn-primary");

    function agregarAlLS() {
      btnTarjetaSev.forEach((botones) => {
        botones.addEventListener("click", (divTarjeta) => {
          console.log("anda el click");
          const nombre = JSON.stringify(divTarjeta.target.name);
          const id_tarj = divTarjeta.target.id;

          /*localStorage.removeItem("Console/Mode");
          localStorage.removeItem("favoriteTables");
          localStorage.removeItem("NavigationWidth");
          localStorage.removeItem("Console");*/

          //console.log(localStorage.getItem(tarjetaDatos.nombre_servicio));
          window.alert("se añidio al carrito");
          localStorage.setItem(nombre, id_tarj);
        });
      });
    }

    agregarAlLS();
  }, 1000);
}

retraso();
