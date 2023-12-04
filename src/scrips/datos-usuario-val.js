const contenedor = document.getElementById("actualizar-usuario");
const formulario = document.getElementById("actualizar-usuario");

formulario.addEventListener("submit", (e) => {
  const cont = document.querySelector("#contraseniaA").value; //
  const usuario = document.getElementById("contrasenia").value; //
  const contraseña = document.getElementById("contraseniaN").value;
  const dni = document.getElementById("dni").value;
  const mail = document.getElementById("mail").value; //
  if (
    dni == "" ||
    usuario == "" ||
    contraseña == "" ||
    mail == "" ||
    cont == ""
  ) {
    e.preventDefault();

    creardiv();
  }
});

function creardiv() {
  const div = `<div id="alerta" class="alert alert-warning d-flex align-items-center" role="alert">
      <div id="alerta2" >
      ⚠️Debe completar todos los Campos
      </div>
    </div>`;

  contenedor.innerHTML += div;
  const a = document.getElementById("alerta");
  setTimeout(() => {
    a.remove();
  }, 10000);
}

function exito() {
  const exito = `<div id="alerta1" class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
    <symbol id="info-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
      Se actualizaron los datos con exito!!
    </div>
  </div>`;
  contenedor.innerHTML += exito;
  const a = document.getElementById("alerta1");
  setTimeout(() => {
    a.remove();
  }, 10000);
}
