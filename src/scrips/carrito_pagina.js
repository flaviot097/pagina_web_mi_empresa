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
];

//console.log(divcarrito);
divcarrito.innerHTML = "";

function agregarCarrito(datos) {
  datos.forEach((dato) => {
    let nuevodiv = `<div class="card" style="width: 18rem">
        <img src="./img/car-wash-1619823_1280.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
        <h5 class="card-title">${dato.nombre_servicio}</h5>
        <p class="card-text">${dato.descripcion}.</p>
        <p class="card-text"><b>$${dato.precio}</b></p>
        <a href="#" class="btn btn-primary" id="${dato.id}">🛒</a>
        </div>
    </div>`;
    let nuevohtml = (divcarrito.innerHTML = nuevodiv);
    return nuevohtml;
  });
}

agregarCarrito(servicios);
