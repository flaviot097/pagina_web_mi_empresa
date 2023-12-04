const btnEnviar = document.getElementById("btn-login-iniciar-sesion");
const section = document.getElementById("section-login");
const formulario = document.getElementById("session");

console.log(imput1.value);
formulario.addEventListener("submit", (e) => {
  const dni = document.querySelector(".form-control.me-2.dni").value; //
  const usuario = document.getElementById("input-login-usuario").value; //
  const contraseña = document.getElementById("input-login-contrasenia").value; //
  if (dni == "" || usuario == "" || contraseña == "") {
    e.preventDefault();

    const div = `<div class="alert alert-warning d-flex align-items-center" role="alert"  >
    <div>
    ⚠️Debe completar todos los Campos
    </div>
  </div>`;

    section.innerHTML += div;
  }
});
