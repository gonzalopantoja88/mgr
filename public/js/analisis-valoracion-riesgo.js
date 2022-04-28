let vlrProbabilidad = 0;
let vlrImpacto = 0;
let vlrControl = "";
let nuevaProbailidad = 0;
let nuevoImpacto = 0;
let calfRiesgoInherente = 0;
let nuevaCalfRiesgoInherente = 0;

let vlrProbabilidadModal = 0;
let vlrImpactoModal = 0;
let vlrControlModal = "";
let nuevaProbailidadModal = 0;
let nuevoImpactoModal = 0;
let calfRiesgoInherenteModal = 0;
let nuevaCalfRiesgoInherenteModal = 0;

const handleChange = (e) => {
    const idFila = e.path[2].dataset.id;
    const tipoevento = e.path[2].dataset.evento;
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

    //----------------------------------CONDICIONES CALIFICAR-----------------------------------//
    if (tipoevento == "1") {

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

        if (vlrControl != "") {

            if (vlrControl == "control preventivo" || vlrControl == "control detectivo") {
                nuevaProbailidad = vlrProbabilidad - 1;
                nuevoImpacto = vlrImpacto;
            }
            if (vlrControl == "control correctivo") {
                nuevaProbailidad = vlrProbabilidad;
                nuevoImpacto = vlrImpacto - 1;
            }
            selectCalfProbabilidad.value = nuevaProbailidad;
            selectCalfImpacto.value = nuevoImpacto;

        }

        nuevaCalfRiesgoInherente = nuevoImpacto * nuevaProbailidad;

        let nuevaZonaRiesgo = "";
        let nuevoManejo = "";
        if (nuevaCalfRiesgoInherente == 1 || nuevaCalfRiesgoInherente == 2 || nuevaCalfRiesgoInherente == 3 || nuevaCalfRiesgoInherente == 0) {
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
    //-----------------------------------CONDICIONES MODAL------------------------------------//
    if (tipoevento == "2") {
        const slcProbabilidad = "edit_calf_probablididad_" + idFila;
        const slcImpacto = "edit_calf_impacto_" + idFila;
        const txaRiesgoInherente = "edit_evaluacion_riesgo_" + idFila;
        const txaManejoRiesgo = "edit_manejo_riesgo_" + idFila;
        const slcTiposControl = "edit_tipos_control_" + idFila;
        const txaProbabilidadDefinitivo = "edit_nueva_calf_probabilidad_" + idFila;
        const txaImpactoDefinitivo = "edit_nueva_calf_impacto_" + idFila;
        const txaNuevoRiesgoInherente = "edit_nueva_evaluacion_riesgo_" + idFila;
        const txaNuevoManejoRiesgo = "edit_nuevo_manejo_riesgo_" + idFila;

        const vlrRiesgoInherente = document.getElementById(txaRiesgoInherente);
        const vlrManejoRiesgo = document.getElementById(txaManejoRiesgo);
        const vlrProbabilidadDefinitivo = document.getElementById(txaProbabilidadDefinitivo);
        const vlrImpactoDefinitivo = document.getElementById(txaImpactoDefinitivo);
        const vlrNuevoRiesgoInherente = document.getElementById(txaNuevoRiesgoInherente);
        const vlrNuevoManejoRiesgo = document.getElementById(txaNuevoManejoRiesgo);
        const vlrTiposControl = document.getElementById(slcTiposControl);
        const vlrProbabilidad = document.getElementById(slcProbabilidad);
        const vlrImpacto = document.getElementById(slcImpacto);
        


        vlrControlModal = vlrTiposControl.value;
        vlrProbabilidadModal = vlrProbabilidad.value;
        vlrImpactoModal = vlrImpacto.value;

        if (e.target.name === slcProbabilidad && e.target.value != false) {
            vlrProbabilidadModal = parseInt(e.target.value);
        }

        if (e.target.name === slcImpacto && e.target.value != false) {
            vlrImpactoModal = parseInt(e.target.value);
        }

        if (e.target.name === slcTiposControl) {
            vlrControlModal = e.target.value;
        }

        calfRiesgoInherenteModal = vlrImpactoModal * vlrProbabilidadModal;

        if (calfRiesgoInherenteModal != 0) {
            let zonaRiesgo = "";
            let manejo = "";
            if (calfRiesgoInherenteModal == 1 || calfRiesgoInherenteModal == 2 || calfRiesgoInherenteModal == 3) {
                zonaRiesgo = "Zona de Riesgo Baja"
                manejo = "Asumir el Riesgo"
            } else if (calfRiesgoInherenteModal == 4 || calfRiesgoInherenteModal == 6) {
                zonaRiesgo = "Zona de Riesgo Moderada"
                manejo = "Asumir el Riesgo, Reducir el Riesgo"
            } else if (calfRiesgoInherenteModal == 5 || calfRiesgoInherenteModal == 8 || calfRiesgoInherenteModal == 9 || calfRiesgoInherenteModal == 10 || calfRiesgoInherenteModal == 12) {
                zonaRiesgo = "Zona de Riesgo Alta"
                manejo = "Reducir el Riesgo, Evitar, Compartir o Transferir"
            } else if (calfRiesgoInherenteModal == 15 || calfRiesgoInherenteModal == 16 || calfRiesgoInherenteModal == 20 || calfRiesgoInherenteModal == 25) {
                zonaRiesgo = "Zona de Riesgo Extrema"
                manejo = "Reducir el Riesgo, Evitar, Compartir o Transferir"
            }
            vlrRiesgoInherente.value = zonaRiesgo;
            vlrManejoRiesgo.value = manejo;
        }

   

        if (vlrControlModal == "control preventivo" || vlrControlModal == "control detectivo") {
            nuevaProbailidadModal = vlrProbabilidadModal - 1;
            nuevoImpactoModal = vlrImpactoModal;
        }
        if (vlrControlModal == "control correctivo") {
            nuevaProbailidadModal = vlrProbabilidadModal;
            nuevoImpactoModal = vlrImpactoModal - 1;
        }
        vlrProbabilidadDefinitivo.value = nuevaProbailidadModal;
        vlrImpactoDefinitivo.value = nuevoImpactoModal;
        

        nuevaCalfRiesgoInherenteModal = nuevoImpactoModal * nuevaProbailidadModal;

        let modalnuevaZonaRiesgo = "";
        let modalnuevoManejo = "";
        if (nuevaCalfRiesgoInherenteModal == 1 || nuevaCalfRiesgoInherenteModal == 2 || nuevaCalfRiesgoInherenteModal == 3 || nuevaCalfRiesgoInherenteModal == 0) {
            modalnuevaZonaRiesgo = "Zona de Riesgo Baja"
            modalnuevoManejo = "Asumir el Riesgo"
        } else if (nuevaCalfRiesgoInherenteModal == 4 || nuevaCalfRiesgoInherenteModal == 6) {
            modalnuevaZonaRiesgo = "Zona de Riesgo Moderada"
            modalnuevoManejo = "Asumir el Riesgo, Reducir el Riesgo"
        } else if (nuevaCalfRiesgoInherenteModal == 5 || nuevaCalfRiesgoInherenteModal == 8 || nuevaCalfRiesgoInherenteModal == 9 || nuevaCalfRiesgoInherenteModal == 10 || nuevaCalfRiesgoInherenteModal == 12) {
            modalnuevaZonaRiesgo = "Zona de Riesgo Alta"
            modalnuevoManejo = "Reducir el Riesgo, Evitar, Compartir o Transferir"
        } else if (nuevaCalfRiesgoInherenteModal == 15 || nuevaCalfRiesgoInherenteModal == 16 || nuevaCalfRiesgoInherenteModal == 20 || nuevaCalfRiesgoInherenteModal == 25) {
            modalnuevaZonaRiesgo = "Zona de Riesgo Extrema"
            modalnuevoManejo = "Reducir el Riesgo, Evitar, Compartir o Transferir"
        }
        vlrNuevoRiesgoInherente.value = modalnuevaZonaRiesgo;
        vlrNuevoManejoRiesgo.value = modalnuevoManejo;
    }

};

function llenandoModal(datos) {
    var a = datos;
    const slcProbabilidad = "edit_calf_probablididad_" + a.id_analisis_valoracion;
    const slcImpacto = "edit_calf_impacto_" + a.id_analisis_valoracion;
    const txaRiesgoInherente = "edit_evaluacion_riesgo_" + a.id_analisis_valoracion;
    const txaManejoRiesgo = "edit_manejo_riesgo_" + a.id_analisis_valoracion;
    const txaControlesExistentes = "edit_controles_existentes_" + a.id_analisis_valoracion;
    const slcTiposControl = "edit_tipos_control_" + a.id_analisis_valoracion;
    const txaProbabilidadDefinitivo = "edit_nueva_calf_probabilidad_" + a.id_analisis_valoracion;
    const txaImpactoDefinitivo = "edit_nueva_calf_impacto_" + a.id_analisis_valoracion;
    const txaNuevoRiesgoInherente = "edit_nueva_evaluacion_riesgo_" + a.id_analisis_valoracion;
    const txaNuevoManejoRiesgo = "edit_nuevo_manejo_riesgo_" + a.id_analisis_valoracion;
    const slcOpcionesManejo = "edit_opciones_manejo_" + a.id_analisis_valoracion;

    const vlrProbabilidad = document.getElementById(slcProbabilidad);
    const vlrImpacto = document.getElementById(slcImpacto);
    const vlrRiesgoInherente = document.getElementById(txaRiesgoInherente);
    const vlrManejoRiesgo = document.getElementById(txaManejoRiesgo);
    const vlrControlesExistentes = document.getElementById(txaControlesExistentes);
    const vlrTiposControl = document.getElementById(slcTiposControl);
    const vlrProbabilidadDefinitivo = document.getElementById(txaProbabilidadDefinitivo);
    const vlrImpactoDefinitivo = document.getElementById(txaImpactoDefinitivo);
    const vlrNuevoRiesgoInherente = document.getElementById(txaNuevoRiesgoInherente);
    const vlrNuevoManejoRiesgo = document.getElementById(txaNuevoManejoRiesgo);
    const vlrOpcionesManejo = document.getElementById(slcOpcionesManejo);

    vlrProbabilidad.value = String(a.probabilidad);
    vlrImpacto.value = String(a.impacto);
    vlrRiesgoInherente.value = String(a.riesgo_inherente);
    vlrManejoRiesgo.value = String(a.manejo_riesgo);
    vlrControlesExistentes.value = String(a.controles_existentes);
    vlrTiposControl.value = String(a.tipos_control);
    vlrProbabilidadDefinitivo.value = String(a.probabilidad_definitivo);
    vlrImpactoDefinitivo.value = String(a.impacto_definitivo);
    vlrNuevoRiesgoInherente.value = String(a.nueva_evaluacion_riesgo);
    vlrNuevoManejoRiesgo.value = String(a.nuevo_manejo_riesgo);
    vlrOpcionesManejo.value = String(a.opciones_manejo);

};

// preguntar que pasa si es 0!!!