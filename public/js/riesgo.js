

// const riesgos = [];

// class Riesgo {
//   constructor(tipo, proceso) {
//     this.tipo = tipo;
//     this.proceso = proceso;
//   }

//   static MostrarRiesgo(riesgos) {
//     cardsSeccionRiesgos.textContent = "";
//     const fragment = document.createDocumentFragment();
//     riesgos.forEach((item) => {
//       fragment.appendChild(item.agregarNuevoRiesgo());
//     });
//     cardsSeccionRiesgos.appendChild(fragment);
//   }
// }

// class TarjetaRiesgo extends Riesgo {
//   agregarNuevoRiesgo() {
//     const clone = templateRiesgo.cloneNode(true);
//     clone.querySelector("h5").textContent = this.tipo;
//     clone.querySelector("h6").textContent = this.proceso;

//     return clone;
//   }
// }

// formularioRiesgo.addEventListener("submit", (e) => {
//   e.preventDefault();

//   const datos = new FormData(formularioRiesgo);

//   const [tipo_id_riesgo, proceso_id_riesgo] = [...datos.values()];

//   const riesgo = new TarjetaRiesgo(tipo_id_riesgo, proceso_id_riesgo);
//   riesgos.push(riesgo);
//   Riesgo.MostrarRiesgo(riesgos);
// });