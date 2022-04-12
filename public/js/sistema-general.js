const removeAccents = (str) => {
    return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
  };

// ---> VARIABLES SISTEMA GENERAL <---
const mapaProcesos = document.querySelector("#mapaProcesos");
const opc_caracterizaciones1 = document.querySelector("#caracterizacionesCol1");
const opc_caracterizaciones2 = document.querySelector("#caracterizacionesCol2");
const despliegue_planeacion_e1 = document.querySelector("#desplieguePlaneacionECol1");
const despliegue_planeacion_e2 = document.querySelector("#desplieguePlaneacionECol2");
const despliegue_partes_i1 = document.querySelector("#desplieguePartesInteresadasCol1");
const despliegue_partes_i2 = document.querySelector("#desplieguePartesInteresadasCol2");
const despliegue_alcance1 = document.querySelector("#depliegueAlcance1");
const despliegue_alcance2 = document.querySelector("#depliegueAlcance2");
const categoria_liderazgo1 = document.querySelector("#categoriaLiderazgo1");
const categoria_liderazgo2 = document.querySelector("#categoriaLiderazgo2");
const despliegue_riesgos_oprtunidades = document.querySelector("#DespliegueRiesgos");
const despliegue_objetivos = document.querySelector("#DespliegueObjetivos");
const categoria_recursos1 = document.querySelector("#RecursosCol1");
const categoria_recursos2 = document.querySelector("#RecursosCol2");
const categoria_recursos3 = document.querySelector("#RecursosCol3");
const categoria_recursos4 = document.querySelector("#RecursosCol4");
const despliegue_recursos = document.querySelector("#Recursos");
const categoria_evaluacion1 = document.querySelector("#EvaluacionCol1");
const categoria_evaluacion2 = document.querySelector("#EvaluacionCol2");
const categoria_evaluacion3 = document.querySelector("#EvaluacionCol3");
const categoria_evaluacion4 = document.querySelector("#EvaluacionCol4");
const despliegue_evaluacion = document.querySelector("#Evaluacion");
const despliegue_mejora = document.querySelector("#DespliegueMejora");





fetch("./variable")
    .then((result) => result.json())
    .then((data) => {

        //---SISTEMA GENERAL---
        opcDesplieguePlaneacionEstrategica(data);
        opcDesplieguePartesInteresadas(data);
        opcDespliegueAlcance(data);
        opcDespliegueLiderazgo(data);
        opcDespliegueRiesgo(data);
        opcDespliegueObjetivo(data);
        opcDespliegueRecursos(data);
        //opcDespliegueEvaluacion(data);
        opcDespliegueMejora(data);
    });


fetch("./categoria")
    .then((result) => result.json())
    .then((data) => {

        //---SISTEMA GENERAL---
        opcMapaProcesos(data);
        opcCaracterizaciones(data);
        opcCategoriaLiderazgo(data);
        opcCategoriaRecursos(data);
        opcCategoriaEvalucacion(data);
    });

    fetch("./despliegue")
  .then((result) => result.json())
  .then((data) => {


    //---SISTEMA GENERAL---
    opcDesplieguePlaneacionEstrategica(data);
    opcDesplieguePartesInteresadas(data);
    opcDespliegueAlcance(data);
    opcDespliegueLiderazgo(data);
    opcDespliegueRiesgo(data);
    opcDespliegueObjetivo(data);
    opcDespliegueRecursos(data);
    //opcDespliegueEvaluacion(data);
    opcDespliegueMejora(data);

    
  });


//////////// INICIO SISTEMA GENERAL ////////////
function opcMapaProcesos(data) {
    for (const value of data) {
        if (value.id_fk_despliegue == 46) {
            //console.log(value.nombre_categoria)
            let strDirty = removeAccents(value.nombre_categoria);
            let strClean = strDirty.replace(/ /g, '').toLowerCase();

            mapaProcesos.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
              </div>`;
        }
    }
}

function opcCaracterizaciones(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_despliegue == 47) {
            //console.log(value.nombre_categoria)
            let strDirty = removeAccents(value.nombre_categoria);
            let strClean = strDirty.replace(/ /g, '').toLowerCase();

            if (count % 2 != 0) {
                opc_caracterizaciones1.innerHTML += `<div class="form-check">
                          <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                          <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                      </div>`;
                count++;
            } else {
                opc_caracterizaciones2.innerHTML += `<div class="form-check">
                          <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                          <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                      </div>`;
                count++;
            }
        }
    }
}

function opcDesplieguePlaneacionEstrategica(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_variable == 18) {
            //console.log(value.nombre_despliegue)
            let strDirty = removeAccents(value.nombre_despliegue);
            let strClean = strDirty.replace(/ /g, '').toLowerCase();

            if (count % 2 != 0) {
                despliegue_planeacion_e1.innerHTML += `<div class="form-check">
                          <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                          <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                      </div>`;
                count++;
            } else {
                despliegue_planeacion_e2.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                      </div>`;
                count++;
            }
        }
    }
}

function opcDesplieguePartesInteresadas(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_variable == 19) {
            //console.log(value.nombreDespliegue)
            let strDirty = removeAccents(value.nombre_despliegue);
            let strClean = strDirty.replace(/ /g, '').toLowerCase();

            if (count % 2 != 0) {
                despliegue_partes_i1.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                  </div>`;
                count++;
            } else {
                despliegue_partes_i2.innerHTML += `<div class="form-check">
                          <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                          <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                      </div>`;
                count++;
            }
        }
    }
}

function opcDespliegueAlcance(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_variable == 20) {
            //console.log(value.nombreDespliegue)
            let strDirty = removeAccents(value.nombre_despliegue);
            let strClean = strDirty.replace(/ /g, '').toLowerCase();

            if (count % 2 != 0) {
                despliegue_alcance1.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                      </div>`;
                count++;
            } else {
                despliegue_alcance2.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                      </div>`;
                count++;
            }
        }
    }
}

function opcCategoriaLiderazgo(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_despliegue == 67) {
            //console.log(value.nombre_categoria)
            let strDirty = removeAccents(value.nombre_categoria);
            let strClean = strDirty.replace(/ /g, '').toLowerCase();

            if (count % 2 != 0) {
                categoria_liderazgo1.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                      </div>`;
                count++;
            } else {
                categoria_liderazgo2.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                      </div>`;
                count++;
            }
        }
    }
}

function opcDespliegueLiderazgo(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_variable == 21 && value.id_despliegue != 67) {
            //console.log(value.nombreDespliegue)
            let strDirty = removeAccents(value.nombre_despliegue);
            let strClean = strDirty.replace(/ /g, '').toLowerCase();

            if (count % 2 != 0) {
                categoria_liderazgo1.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                      </div>`;
                count++;
            } else {
                categoria_liderazgo2.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                      </div>`;
                count++;
            }
        }
    }
}

function opcDespliegueRiesgo(data) {
    for (const value of data) {
        if (value.id_fk_variable == 22) {
            //console.log(value.nombreDespliegue)
            let strDirty = removeAccents(value.nombre_despliegue);
            let strClean = strDirty.replace(/ /g, '').toLowerCase();

            despliegue_riesgos_oprtunidades.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
              </div>`;
        }
    }
}

function opcDespliegueObjetivo(data) {
    for (const value of data) {
        if (value.id_fk_variable == 23) {
            //console.log(value.nombreDespliegue)
            let strDirty = removeAccents(value.nombre_despliegue);
            let strClean = strDirty.replace(/ /g, '').toLowerCase();

            despliegue_objetivos.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
              </div>`;
        }
    }
}

function opcCategoriaRecursos(data) {
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_categoria);
        let strClean = strDirty.replace(/ /g, '').toLowerCase();
        if (value.id_fk_despliegue == 71) {
            //console.log(value.nombre_categoria)

            categoria_recursos1.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
              </div>`;
        }

        if (value.id_fk_despliegue == 72) {
            categoria_recursos2.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
              </div>`;
        }
        if (value.id_fk_despliegue == 74) {
            categoria_recursos3.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
              </div>`;
        }
        if (value.id_fk_despliegue == 77) {
            categoria_recursos4.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
              </div>`;
        }
    }
}

function opcDespliegueRecursos(data) {
    for (const value of data) {
        if (
            value.id_fk_variable == 25 &&
            value.id_despliegue != 71 &&
            value.id_despliegue != 72 &&
            value.id_despliegue != 74 &&
            value.id_despliegue != 77
        ) {
            //console.log(value.nombreDespliegue)
            let strDirty = removeAccents(value.nombre_despliegue);
            let strClean = strDirty.replace(/ /g, '').toLowerCase();

            despliegue_recursos.innerHTML += `<div class="form-check col-3">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="$${strClean}">
                      <label class="form-check-label" for="$${strClean}">${value.nombre_despliegue}</label>
              </div>`;
        }
    }
}

function opcCategoriaEvalucacion(data) {
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_categoria);
        let strClean = strDirty.replace(/ /g, '').toLowerCase();
        if (value.id_fk_despliegue == 78) {
            //console.log(value.nombre_categoria)

            categoria_evaluacion1.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
              </div>`;
        }

        if (value.id_fk_despliegue == 80) {
            categoria_evaluacion2.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
              </div>`;
        }
        if (value.id_fk_despliegue == 81) {
            categoria_evaluacion3.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
              </div>`;
        }
        if (value.id_fk_despliegue == 82) {
            categoria_evaluacion4.innerHTML += `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
              </div>`;
        }
    }
}

// function opcDespliegueEvaluacion(data) {
//     for (const value of data) {
//         if (
//             value.id_fk_variable == 26 &&
//             value.id_despliegue != 78 &&
//             value.id_despliegue != 80 &&
//             value.id_despliegue != 81 &&
//             value.id_despliegue != 82
//             ) {
//                 //console.log(value.nombreDespliegue)
//                 let strDirty = removeAccents(value.nombre_despliegue);
//                 let strClean = strDirty.replace(/ /g, '').toLowerCase();

//             despliegue_evaluacion.innerHTML += `<div class="form-check col-3">
//                       <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
//                       <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
//               </div>`;
//         }
//     }
// }

function opcDespliegueMejora(data) {
    for (const value of data) {
        if (value.id_fk_variable == 27) {
            //console.log(value.nombreDespliegue)
            let strDirty = removeAccents(value.nombre_despliegue);
            let strClean = strDirty.replace(/ /g, '').toLowerCase();

            despliegue_mejora.innerHTML += `<div class="form-check col-4">
                      <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                      <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
              </div>`;
        }
    }
}
//////////// FIN SISTEMA GENERAL ////////////