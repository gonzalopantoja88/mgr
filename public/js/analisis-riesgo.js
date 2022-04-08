let vlrProbabilidad = 1;
let vlrImpacto = 1;

const handleChange = (e) => {
    const idFila = e.path[2].dataset.id;
    const calfProbabilidad = "calf_probablididad_" + idFila;
    const calfImpacto = "calf_impacto_" + idFila;
    const evaluacionRiesgo = "evaluacion_riesgo_" + idFila;
    const manejoRiesgo = "manejo_riesgo_" + idFila;
    const evaluacionRiesgoInherente = document.getElementById(evaluacionRiesgo);
    const manejoRiesgoInherente = document.getElementById(manejoRiesgo);
    
    if (e.target.name === calfProbabilidad && e.target.value != false) {
        vlrProbabilidad = parseInt(e.target.value);
    }
    
    if (e.target.name === calfImpacto && e.target.value != false) {
        vlrImpacto = parseInt(e.target.value);
    }
    
    let zonaRiesgo = "";
    let manejo = "";
    calfRiesgoInherente = vlrImpacto * vlrProbabilidad 
    if (calfRiesgoInherente == 1 || calfRiesgoInherente == 2 || calfRiesgoInherente == 3) {
        zonaRiesgo = "Zona de Riesgo Baja"
        manejo = "Asumir el Riesgo"
    }else if(calfRiesgoInherente == 4 || calfRiesgoInherente == 6){
        zonaRiesgo = "Zona de Riesgo Moderada"
        manejo = "Asumir el Riesgo, Reducir el Riesgo"
    }else if(calfRiesgoInherente == 5 || calfRiesgoInherente == 8 || calfRiesgoInherente == 9 || calfRiesgoInherente == 10 || calfRiesgoInherente == 12){
        zonaRiesgo = "Zona de Riesgo Alta"
        manejo = "Reducir el Riesgo, Evitar, Compartir o Transferir"
    }else if(calfRiesgoInherente == 15 || calfRiesgoInherente == 16 || calfRiesgoInherente == 20 || calfRiesgoInherente == 25){
        zonaRiesgo = "Zona de Riesgo Extrema"
        manejo = "Reducir el Riesgo, Evitar, Compartir o Transferir"
    }
    evaluacionRiesgoInherente.value = zonaRiesgo;
    manejoRiesgoInherente.textContent = manejo;
};

// calf_probablididad.addEventListener("change", (e) =>{
//     // let valorProbabilidad = item.target.value
//     // console.log(valorProbabilidad)
//     console.log(e.target.value)
// })

// calf_impacto.addEventListener("change", (item) =>{
//     valorImpacto = item.target.value
//     console.log(valorImpacto)
// })

// function sistemaAsociado(data) {
//     for (const value of data) {
//         if (value.id_sistema_asociado != 1){
//             sistAsociadoIdRiesgo.innerHTML += `<option data-id="${value.id_sistema_asociado}" value="${value.nombre_sistema_asociado}">${value.nombre_sistema_asociado}</option>`;
//         }
//     }

//     sistAsociadoIdRiesgo.addEventListener("change", function (op) {
//         let indexSelect = op.target.options.selectedIndex
//         let opcion = op.target.options[indexSelect].dataset.id
//         fetch("http://127.0.0.1:8000/variable/"+opcion)
//             .then((result) => result.json())
//             .then((data) => {
//                 variableIdRiesgo.innerHTML = "";
//                 for (const value of data) {
//                     variableIdRiesgo.removeAttribute("disabled", "");
//                     variableIdRiesgo.setAttribute("active", "");
//                     variableIdRiesgo.innerHTML += `<option value="${value.nombre_variable}">${value.nombre_variable}</option>`;
//                 }
//             });
//     });
// }
