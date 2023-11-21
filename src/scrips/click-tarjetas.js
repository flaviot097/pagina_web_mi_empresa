///redireccionar a servicio///////////////////////////////////////////////////////
const selectarjeta = document.querySelectorAll("div.card");

let data = 0;

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
export default data;
