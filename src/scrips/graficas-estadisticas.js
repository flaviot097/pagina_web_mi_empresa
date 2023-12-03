const migrafica = document.getElementById("migrafica").getContext("2d");

//const arreglomeses = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var enero = 0;
var febrero = 0;
var marzo = 0;
var abril = 0;
var mayo = 0;
var junio = 0;
var julio = 0;
var agosto = 0;
var septiembre = 0;
var octubre = 0;
var noviembre = 0;
var diciembre = 0;

function crearGrafica() {
  ventas.forEach((element) => {
    const cortar = parseInt(element.fecha.slice(5, 7));
    console.log(cortar);

    switch (cortar) {
      case 1:
        enero = enero + 1;
        break;
      case 2:
        febrero = febrero + 1;
        break;
      case 3:
        marzo = marzo + 1;
        break;
      case 4:
        abril = abril + 1;
        break;
      case 5:
        mayo = mayo + 1;
        break;
      case 6:
        junio = junio + 1;
        break;
      case 7:
        julio = julio + 1;
        break;
      case 8:
        agosto = agosto + 1;
      case 9:
        septiembre = septiembre + 1;
        break;
      case 10:
        octubre = octubre + 1;
        break;
      case 11:
        noviembre = noviembre + 1;
        break;
      case 12:
        console.log("entro");
        diciembre = diciembre + 1;
        break;
    }
    /*if (arreglomeses[cortar] === 0) {
      arreglomeses[cortar] = 1;
    } else {
      arreglomeses[cortar] += +1;
    }
    console.log(arreglomeses);*/
    console.log(diciembre);
  });

  new Chart(migrafica, {
    type: "bar",
    data: {
      labels: [
        "enero",
        "febrero",
        "marzo",
        "abril",
        "mayo",
        "junio",
        "julio",
        "agosto",
        "septiembre",
        "octubre",
        "noviembre",
        "diciembre",
      ],
      datasets: [
        {
          label: "susbcripciones por mes",
          backgraundColor: "black",
          data: [
            enero,
            febrero,
            marzo,
            abril,
            mayo,
            junio,
            julio,
            agosto,
            septiembre,
            octubre,
            noviembre,
            diciembre,
          ],
        },
      ],
    },
    options: {
      scales: {
        y: { beginAtZero: false },
      },
    },
  });
}
const recas = document.getElementById("recaudacion").getContext("2d");

var renero = 0;
var rfebrero = 0;
var rmarzo = 0;
var rabril = 0;
var rmayo = 0;
var rjunio = 0;
var rjulio = 0;
var ragosto = 0;
var rseptiembre = 0;
var roctubre = 0;
var rnoviembre = 0;
var rdiciembre = 0;

console.log(recaudacion);

recaudacion.forEach((e) => {
  const c = parseInt(e.fecha.slice(5, 7));
  const totalPlata = parseInt(e.precio);
  console.log(totalPlata);
  console.log(c);
  switch (c) {
    case 1:
      renero = renero + totalPlata;
      break;
    case 2:
      rfebrero = rfebrero + totalPlata;
      break;
    case 3:
      rmarzo = rmarzo + totalPlata;
      break;
    case 4:
      rabril = rabril + totalPlata;
      break;
    case 5:
      rmayo = rmayo + totalPlata;
      break;
    case 6:
      rjunio = rjunio + totalPlata;
      break;
    case 7:
      rjulio = rjulio + totalPlata;
      break;
    case 8:
      ragosto = ragosto + totalPlata;
    case 9:
      rseptiembre = rseptiembre + totalPlata;
      break;
    case 10:
      roctubre = roctubre + totalPlata;
      break;
    case 11:
      rnoviembre = rnoviembre + totalPlata;
      break;
    case 12:
      console.log("entro");
      rdiciembre = rdiciembre + totalPlata;
      break;
  }
});

new Chart(recas, {
  type: "bar",
  data: {
    labels: [
      "enero",
      "febrero",
      "marzo",
      "abril",
      "mayo",
      "junio",
      "julio",
      "agosto",
      "septiembre",
      "octubre",
      "noviembre",
      "diciembre",
    ],
    datasets: [
      {
        label: "recaudacion por mes $",
        backgraundColor: "black",
        data: [
          renero,
          rfebrero,
          rmarzo,
          rabril,
          rmayo,
          rjunio,
          rjulio,
          ragosto,
          rseptiembre,
          roctubre,
          rnoviembre,
          rdiciembre,
        ],
      },
    ],
  },
  options: {
    scales: {
      y: { beginAtZero: false },
    },
  },
});

crearGrafica();
