const divcarrito = document.getElementById("contenedor_tarjetas_inicio");
const servicios = [
  {
    id: "0",
    nombre_y_apellido: "teodoro ajia",
    categoria_servicio: "plomero",
    descripcion: "saddasdsadsad sadsadsad",
    nombre_servicio: "teordoro el inodoro",
    precio: 32323,
    fecha: "2023-11-05T03:00:00.000Z",
  },
  {
    id: "1",
    nombre_y_apellido: "juan mecanico",
    categoria_servicio: "mecanico",
    descripcion: "saddasdsadsad sadsadsad",
    nombre_servicio: "mecajuan",
    precio: 567,
    fecha: "2023-11-05T03:00:00.000Z",
  },
  {
    id: "2",
    nombre_y_apellido: "eketencio ramires",
    categoria_servicio: "plomero",
    descripcion: "sagrgrgrgrg",
    nombre_servicio: "ramires serv",
    precio: 23467,
    fecha: "2023-11-05T03:00:00.000Z",
  },
  {
    id: "3",
    nombre_y_apellido: "eketencio ramires",
    categoria_servicio: "plomero",
    descripcion: "sagrgrgrgrg",
    nombre_servicio: "racares",
    precio: 23467,
    fecha: "2023-11-05T03:00:00.000Z",
  },
  {
    id: "4",
    nombre_y_apellido: "eketencio ramires",
    categoria_servicio: "plomero",
    descripcion: "sagrgrgrgrg",
    nombre_servicio: "sereje",
    precio: 23467,
    fecha: "2023-11-05T03:00:00.000Z",
  },
  {
    id: "5",
    nombre_y_apellido: "eketencio ramires",
    categoria_servicio: "plomero",
    descripcion: "sagrgrgrgrg",
    nombre_servicio: "papes",
    precio: 23467,
    fecha: "2023-11-05T03:00:00.000Z",
  },
  {
    id: "6",
    nombre_y_apellido: "eketencio ramires",
    categoria_servicio: "plomero",
    descripcion: "sagrgrgrgrg",
    nombre_servicio: "felev",
    precio: 23467,
    fecha: "2023-11-05T03:00:00.000Z",
  },
  {
    id: "7",
    nombre_y_apellido: "eketencio ramires",
    categoria_servicio: "plomero",
    descripcion: "sagrgrgrgrg",
    nombre_servicio: "raer",
    precio: 1,
    fecha: "2023-11-05T03:00:00.000Z",
  },
];

//console.log(divcarrito);
//divcarrito.innerHTML = "";

//////agregando servicios de manera dinamica ////////////////////////////////////////////////////

function agregarServicios(datos) {
  datos.forEach((dato) => {
    let id = dato.id;
    let nuevodiv = `<div class="card" style="width: 18rem" id="${id}">
        <img src="./img/car-wash-1619823_1280.jpg" class="card-img-top" alt="..."id="${id}" />
        <div class="card-body" id="${id}">
        <h5 class="card-title" id="${id}">${dato.nombre_servicio}</h5>
        <p class="card-text" id="${id}">${dato.descripcion}.</p>
        <p class="card-text" id="${id}"><b>$${dato.precio}</b></p>
        <a class="btn btn-primary" name="${dato.nombre_servicio}" id="${id}">🛒</a>
        </div>
    </div>`;
    let nuevohtml = (divcarrito.innerHTML += nuevodiv);
    return nuevohtml;
  });
}

agregarServicios(servicios);

///redireccionar a servicio///////////////////////////////////////////////////////
const selectarjeta = document.querySelectorAll("div.card");

var data;

function clickTarjetas(tarjetas) {
  tarjetas.forEach((divT) => {
    divT.addEventListener("click", (e) => {
      let da = e.target.id;
      data = da;

      console.log(data);
      location.href = "../../servicio.html";
    });
  });
}

clickTarjetas(selectarjeta);

//console.log(selectarjeta);

//agregar al local storage////////////////////////////////////////////////////////

const btnTarjetaSev = document.querySelectorAll("a.btn.btn-primary");

//console.log(btnTarjetaSev);

const agragarCarrito = (serv) => {
  serv.forEach((servicio) => {
    const key = servicio.nombre_servicio;
    //console.log(key);
    const array = JSON.stringify(servicio);
    //localStorage.setItem(key, array);
  });
};

agragarCarrito(servicios);

function agregarAlLS() {
  btnTarjetaSev.forEach((botones) => {
    botones.addEventListener("click", (divTarjeta) => {
      console.log("anda el click");
      const tarjetaDatos = {
        nombre_servicio: divTarjeta.target.name,
        id: divTarjeta.target.id,
      };
      //console.log(localStorage.getItem(tarjetaDatos.nombre_servicio));
      window.alert("se añidio al carrito");
      localStorage.setItem(
        tarjetaDatos.nombre_servicio,
        JSON.stringify(servicios[tarjetaDatos.id])
      );

      console.log(tarjetaDatos);
    });
  });
}

agregarAlLS();

//exports.module = { servicios };

export default data;
