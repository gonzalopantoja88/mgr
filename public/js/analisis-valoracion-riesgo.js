let vlrProbabilidad = 0;
let vlrImpacto = 0;
let vlrControl = "";
let nuevaProbailidad = 0;
let nuevoImpacto = 0;
calfRiesgoInherente = 0;

const handleChange = (e) => {
    const idFila = e.path[2].dataset.id;
    const calfProbabilidad = "calf_probablididad_" + idFila;
    const calfImpacto = "calf_impacto_" + idFila;
    const evaluacionRiesgo = "evaluacion_riesgo_" + idFila;
    const manejoRiesgo = "manejo_riesgo_" + idFila;
    const tiposCotrol = "tipos_control_" + idFila;
    const nuevaCalfProbabilidad = "nueva_calf_probabilidad_" + idFila;
    const nuevaCalfImpacto = "nueva_calf_impacto_" + idFila;
    const newEvaluacionRiesgo = "nueva_evaluacion_riesgo_" + idFila;
    const newManejoRiesgo = "nuevo_manejo_riesgo_" + idFila;

    const evaluacionRiesgoInherente = document.getElementById(evaluacionRiesgo);
    const manejoRiesgoInherente = document.getElementById(manejoRiesgo);
    const selectCalfProbabilidad = document.getElementById(nuevaCalfProbabilidad);
    const selectCalfImpacto = document.getElementById(nuevaCalfImpacto);
    const nuevaEvaluacionRiesgoInherente = document.getElementById(newEvaluacionRiesgo);
    const nuevoManejoRiesgoInherente = document.getElementById(newManejoRiesgo);

    if (e.target.name === calfProbabilidad && e.target.value != false) {
        vlrProbabilidad = parseInt(e.target.value);
    }

    if (e.target.name === calfImpacto && e.target.value != false) {
        vlrImpacto = parseInt(e.target.value);
    }

    if (e.target.name === tiposCotrol) {
        vlrControl = e.target.value;
    }

    calfRiesgoInherente = vlrImpacto * vlrProbabilidad;

    if (calfRiesgoInherente != 0) {
        let zonaRiesgo = "";
        let manejo = "";
        if (calfRiesgoInherente == 1 || calfRiesgoInherente == 2 || calfRiesgoInherente == 3) {
            zonaRiesgo = "Zona de Riesgo Baja"
            manejo = "Asumir el Riesgo"
        } else if (calfRiesgoInherente == 4 || calfRiesgoInherente == 6) {
            zonaRiesgo = "Zona de Riesgo Moderada"
            manejo = "Asumir el Riesgo, Reducir el Riesgo"
        } else if (calfRiesgoInherente == 5 || calfRiesgoInherente == 8 || calfRiesgoInherente == 9 || calfRiesgoInherente == 10 || calfRiesgoInherente == 12) {
            zonaRiesgo = "Zona de Riesgo Alta"
            manejo = "Reducir el Riesgo, Evitar, Compartir o Transferir"
        } else if (calfRiesgoInherente == 15 || calfRiesgoInherente == 16 || calfRiesgoInherente == 20 || calfRiesgoInherente == 25) {
            zonaRiesgo = "Zona de Riesgo Extrema"
            manejo = "Reducir el Riesgo, Evitar, Compartir o Transferir"
        }
        evaluacionRiesgoInherente.value = zonaRiesgo;
        manejoRiesgoInherente.value = manejo;
    }

    if (vlrControl != ""){
        
        if (vlrControl == "control preventivo" || vlrControl == "control detectivo") {
            nuevaProbailidad = vlrProbabilidad - 1;
            nuevoImpacto = vlrImpacto;
        }
        if (vlrControl == "control correctivo") {
            nuevaProbailidad = vlrProbabilidad;
            nuevoImpacto = vlrImpacto- 1;
        }
        selectCalfProbabilidad.value = nuevaProbailidad;
        selectCalfImpacto.value = nuevoImpacto;

    }

    nuevaCalfRiesgoInherente = nuevoImpacto * nuevaProbailidad;

    if (nuevaCalfRiesgoInherente != 0) {
        let nuevaZonaRiesgo = "";
        let nuevoManejo = "";
        if (nuevaCalfRiesgoInherente == 1 || nuevaCalfRiesgoInherente == 2 || nuevaCalfRiesgoInherente == 3 ||  nuevaCalfRiesgoInherente == 0) {
            nuevaZonaRiesgo = "Zona de Riesgo Baja"
            nuevoManejo = "Asumir el Riesgo"
        } else if (nuevaCalfRiesgoInherente == 4 || nuevaCalfRiesgoInherente == 6) {
            nuevaZonaRiesgo = "Zona de Riesgo Moderada"
            nuevoManejo = "Asumir el Riesgo, Reducir el Riesgo"
        } else if (nuevaCalfRiesgoInherente == 5 || nuevaCalfRiesgoInherente == 8 || nuevaCalfRiesgoInherente == 9 || nuevaCalfRiesgoInherente == 10 || nuevaCalfRiesgoInherente == 12) {
            nuevaZonaRiesgo = "Zona de Riesgo Alta"
            nuevoManejo = "Reducir el Riesgo, Evitar, Compartir o Transferir"
        } else if (nuevaCalfRiesgoInherente == 15 || nuevaCalfRiesgoInherente == 16 || nuevaCalfRiesgoInherente == 20 || nuevaCalfRiesgoInherente == 25) {
            nuevaZonaRiesgo = "Zona de Riesgo Extrema"
            nuevoManejo = "Reducir el Riesgo, Evitar, Compartir o Transferir"
        }
        nuevaEvaluacionRiesgoInherente.value = nuevaZonaRiesgo;
        nuevoManejoRiesgoInherente.value = nuevoManejo;
    }

};

// preguntar que pasa si es 0!!!
