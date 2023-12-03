const formlario = document.getElementById("crear-servicio");

const btn = document.getElementById("btncre");
const contenedor = document.getElementById("card-menu");

formlario.addEventListener("submit", (e) => {
  const dni = document.getElementById("dni").value;
  const nombre = document.getElementById("nombre_apellido").value;
  const servicio = document.getElementById("servicio").value;
  const precio = document.getElementById("precio").value;
  const fecha = document.getElementById("fecha").value;
  const descripcion = document.getElementById("descripcion").value;
  if (
    dni == "" ||
    nombre == "" ||
    servicio == "" ||
    precio == "" ||
    fecha == "" ||
    descripcion == ""
  ) {
    e.preventDefault();

    const div = `<div class="alert alert-warning d-flex align-items-center" role="alert">
    <div>
    ⚠️Debe completar todos los Campos
    </div>
  </div>`;

    contenedor.innerHTML += div;
  }
});
