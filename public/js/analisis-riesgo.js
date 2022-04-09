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
    
    calfRiesgoInherente = vlrImpacto * vlrProbabilidad 
    let zonaRiesgo = "";
    let manejo = "";
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

