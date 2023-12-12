const btnborrar = document.querySelectorAll("a.btn.btn-primary.card-carrito");
const conteiner = document.getElementById("contenedor_tarjetas_interfaz");

console.log(btnborrar);

btnborrar.forEach((boton) => {
  boton.addEventListener("click", (e) => {
    console.log(e.target.id);
    const id = e.target.id;

    const metodo = {
      method: "DELETE",
      headers: {},
    };

    fetch(`http://localhost:4000/inicio/${id}`, metodo).then((res) => {
      console.log(res.status);
      const tarjeta = document.getElementById(`${id}`);
      console.log(tarjeta);
      tarjeta.innerHTML = "";
      setTimeout(() => {
        const div = `<div class="alert alert-warning d-flex align-items-center" role="alert" id="alerta_de_eliminacion" style="width: 90%;">
       <div>
       ✔️Se a eliminado la publicacion
      </div>
      </div>`;

        conteiner.innerHTML += div;
      }, 500);
    });

    setTimeout(() => {
      const eliminarAlerta = document.getElementById("alerta_de_eliminacion");
      eliminarAlerta.remove();
    }, 10000);
  });
});
