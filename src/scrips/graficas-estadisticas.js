const migrafica = document.getElementById("migrafica").getContext("2d");

new Chart(migrafica, {
  type: "bar",
  data: {
    labels: [
      "enero",
      "febrero",
      "marzo",
      "abril",
      "mayo",
      "abril",
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
        data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 33],
      },
    ],
  },
  options: {
    scales: {
      y: { beginAtZero: false },
    },
  },
});

const recaudacion = document.getElementById("recaudacion").getContext("2d");

new Chart(recaudacion, {
  type: "bar",
  data: {
    labels: [
      "enero",
      "febrero",
      "marzo",
      "abril",
      "mayo",
      "abril",
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
          1323, 2324, 213, 443, 523, 6234, 686, 8576, 9123, 12120, 11311, 11232,
          2133,
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
