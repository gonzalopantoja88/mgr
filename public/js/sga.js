const removeAccents = (str) => {
    return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
};

// ---> VARIABLES SGA <---
const Clima_teologia1 = document.querySelector('#conAmbiental1');
const Clima_teologia2 = document.querySelector('#conAmbiental2');
const Clima_teologia3 = document.querySelector('#conAmbiental3');
const Clima_teologia4 = document.querySelector('#conAmbiental4');
const Clima_teologia5 = document.querySelector('#conAmbiental5');
const Clima_teologia6 = document.querySelector('#conAmbiental6');
const Legislacion_ambiental = document.querySelector('#desRreglamentario1');
const Contexto_social = document.querySelector('#conSocial1');
const Impactos_ambientales1 = document.querySelector('#impAmbientales1');
const Impactos_ambientales2 = document.querySelector('#impAmbientales2');
const Impactos_ambientales3 = document.querySelector('#impAmbientales3');
const praGestion1= document.querySelector('#praGestion1');
const Agua = document.querySelector('#agua1');
const Aire = document.querySelector('#aire1');
const Residuos = document.querySelector('#residuo1');
const Servicios_sociales = document.querySelector('#servicios');
const Demografia = document.querySelector('#demia');
const Contexto_organización = document.querySelector('#contorgan');
const Lideres = document.querySelector('#lidera')
const Apoyo = document.querySelector('#apoyo')
const Planifi = document.querySelector('#planificar')
const Opera = document.querySelector('#opera')
const Evaluación_Desempeño = document.querySelector('#evadese')
const Mejora = document.querySelector('#mejor')

fetch("/categoria",{
    mode: 'no-cors'
})
    .then((result) => result.json())
    .then((data) => {

        //---SGA---
        ClimaTeología1(data)
        ClimaTeología2(data)
        ClimaTeología3(data)
        ClimaTeología4(data)
        ClimaTeología5(data)
        ClimaTeología6(data)
        LegislaciónAmbiental(data)
        ContextoSocial(data)
        ImpactosAmbientales1(data)
        ImpactosAmbientales2(data)
        ImpactosAmbientales3(data)
        PrácticasGestión(data)

    });

fetch("./opcion",{
    mode: 'no-cors'
})
    .then((result) => result.json())
    .then((data) => {
        //---SGA---
        // Agua1(data);
        // Aire1(data);
        // Residuos1(data);
        ServicioSociales(data);
        demografia(data);
        ContextoOrganización(data);
        LideRazgo(data);
        opcApoyo(data);
        Planificacion(data);
        Operacion(data);
        EvaluaciónDesempeño(data);
        Mejorar(data);
    });

/////////// INICIO SGA //////////
function ClimaTeología1(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_despliegue == 124) {
            //console.log(value.nombre_categoria);
            let strDirty = removeAccents(value.nombre_categoria);
            let strClean = strDirty.replace(/ /g, '').replace(/-/g, '_').toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            Clima_teologia1.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`
            count++;
        }
    }
}

function ClimaTeología2(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_despliegue == 125) {
            //console.log(value.nombre_categoria);
            let strDirty = removeAccents(value.nombre_categoria);
            let strClean = strDirty.replace(/ /g, '').replace(/,/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            Clima_teologia2.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`
            count++;
        }
    }
}

function ClimaTeología3(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_despliegue == 126) {
            //console.log(value.nombre_categoria);
            let strDirty = removeAccents(value.nombre_categoria);
            let strClean = strDirty.replace(/ /g, '', ).replace(/-/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            Clima_teologia3.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`
            count++;
        }
    }
}

function ClimaTeología4(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_despliegue == 127) {
            //console.log(value.nombre_categoria);
            let strDirty = removeAccents(value.nombre_categoria);
            let strClean = strDirty.replace(/ /g, '', ).replace(/-/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");
            

            Clima_teologia4.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`
            count++;
        }
    }
}

function ClimaTeología5(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_despliegue == 128) {
            //console.log(value.nombre_categoria);
            let strDirty = removeAccents(value.nombre_categoria);
            let strClean = strDirty.replace(/ /g, '', ).replace(/-/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            Clima_teologia5.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`
            count++;
        }
    }
}

function ClimaTeología6(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_despliegue == 129) {
            //console.log(value.nombre_categoria);
            let strDirty = removeAccents(value.nombre_categoria);
            let strClean = strDirty.replace(/ /g, '', ).replace(/-/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            Clima_teologia6.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`
            count++;
        }
    }
}

function LegislaciónAmbiental(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_despliegue == 130 && value.ID_Categoria != 164 && value.ID_Categoria != 165 && value.ID_Categoria != 166) {
            //console.log(value.nombre_categoria);
            let strDirty = removeAccents(value.nombre_categoria);
            let strClean = strDirty.replace(/ /g, '', ).replace(/-/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            Legislacion_ambiental.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`
            count++;
        }
    }
}

function ContextoSocial(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_despliegue == 131) {
            //console.log(value.nombre_categoria);
            let strDirty = removeAccents(value.nombre_categoria);
            let strClean = strDirty.replace(/ /g, '', ).replace(/-/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            conSocial1.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`
            count++;
        }
    }
}

function ImpactosAmbientales1(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_despliegue == 132) {
            //console.log(value.nombre_categoria);
            let strDirty = removeAccents(value.nombre_categoria);
            let strClean = strDirty.replace(/ /g, '', ).replace(/,/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            Impactos_ambientales1.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`
            count++;
        }
    }
}

function ImpactosAmbientales2(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_despliegue == 133) {
            //console.log(value.nombre_categoria);
            let strDirty = removeAccents(value.nombre_categoria);
            let strClean = strDirty.replace(/ /g, '', ).replace(/,/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1").replace(/:/g, '_', );

            //impAmbientales2.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`
            count++;
        }
    }
}

function ImpactosAmbientales3(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_despliegue == 134) {
            //console.log(value.nombre_categoria);
            let strDirty = removeAccents(value.nombre_categoria);
            let strClean = strDirty.replace(/ /g, '', ).replace(/,/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            impAmbientales3.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`
            count++;
        }
    }
}

function PrácticasGestión(data) {
    let count = 1;
        for (const value of data) {
            if (value.id_fk_despliegue == 135 &&
                value.id_categoria == 190 || value.id_categoria == 191) {
                 //console.log(value.nombre_categoria);
                 let strDirty = removeAccents(value.nombre_categoria);
                 let strClean = strDirty.replace(/ /g, '', ).replace(/,/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

                 praGestion1.innerHTML +=
                    `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombre_categoria}">
                        <label class="form-check-label" for="${value.nombre_categoria}">${value.nombre_categoria}</label>
                    </div>`
            count++;
        }
    }
}

// function Agua1(data) {
//     let count = 1;
//     for (const value of data) {
//         if (value.id_fk_categoria == 164) {
//             //console.log(value.nombre_opcion);
//             let strDirty = removeAccents(value.nombre_opcion);
//             let strClean = strDirty.replace(/ /g, '').toLowerCase();

//             Agua.innerHTML +=
//                 `<div class="form-check">
//                         <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
//                         <label class="form-check-label" for="${strClean}">${value.nombre_opcion}</label>
//                     </div>`
//             count++;
//         }
//     }
// }

// function Aire1(data) {
//     let count = 1;
//     for (const value of data) {
//         if (value.id_fk_categoria == 165) {
//             //console.log(value.nombre_opcion);
//             let strDirty = removeAccents(value.nombre_opcion);
//             let strClean = strDirty.replace(/ /g, '').toLowerCase();

//             Aire.innerHTML +=
//                 `<div class="form-check">
//                         <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
//                         <label class="form-check-label" for="${strClean}">${value.nombre_opcion}</label>
//                     </div>`
//             count++;
//         }
//     }
// }

// function Residuos1(data) {
//     let count = 1;
//     for (const value of data) {
//         if (value.id_fk_categoria == 166) {
//             //console.log(value.nombreOption);
//             let strDirty = removeAccents(value.nombre_opcion);
//             let strClean = strDirty.replace(/ /g, '').toLowerCase();

//             Residuos.innerHTML +=
//                 `<div class="form-check">
//                         <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
//                         <label class="form-check-label" for="${strClean}">${value.nombre_opcion}</label>
//                     </div>`
//             count++;
//         }
//     }
// }

function ServicioSociales(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_categoria == 182) {
            //console.log(value.nombre_opcion);
            let strDirty = removeAccents(value.nombre_opcion);
            let strClean = strDirty.replace(/ /g, '', ).replace(/,/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            Servicios_sociales.innerHTML +=
                `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                    <label class="form-check-label" for="${strClean}">${value.nombre_opcion}</label>
                    </div>`
            count++;
        }
    }
}


function demografia(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_categoria == 183) {
            //console.log(value.nombreOption);
            let strDirty = removeAccents(value.nombre_opcion);
            let strClean = strDirty.replace(/ /g, '', ).replace(/,/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            Demografia.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_opcion}</label>
                    </div>`
            count++;
        }
    }
}

function ContextoOrganización(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_categoria == 189) {
            //console.log(value.nombreOption);
            let strDirty = removeAccents(value.nombre_opcion);
            let strClean = strDirty.replace(/ /g, '', ).replace(/,/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            Contexto_organización.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_opcion}</label>
                    </div>`
            count++;
        }
    }
}

function LideRazgo(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_categoria == 192) {
            //console.log(value.nombreOption);
            let strDirty = removeAccents(value.nombre_opcion);
            let strClean = strDirty.replace(/ /g, '', ).replace(/,/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            Lideres.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_opcion}</label>
                    </div>`
            count++;
        }
    }
}

function Planificacion(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_categoria == 193) {
            //console.log(value.nombreOption);
            let strDirty = removeAccents(value.nombre_opcion);
            let strClean = strDirty.replace(/ /g, '', ).replace(/,/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            Planifi.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_opcion}</label>
                    </div>`
            count++;
        }
    }
}

function opcApoyo(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_categoria == 194) {
            //console.log(value.nombreOption);
            let strDirty = removeAccents(value.nombre_opcion);
            let strClean = strDirty.replace(/ /g, '', ).replace(/,/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            Apoyo.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_opcion}</label>
                    </div>`
            count++;
        }
    }
}

function Operacion(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_categoria == 195) {
            //console.log(value.nombreOption);
            let strDirty = removeAccents(value.nombre_opcion);
            let strClean = strDirty.replace(/ /g, '', ).replace(/,/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            Opera.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_opcion}</label>
                    </div>`
            count++;
        }
    }
}


function EvaluaciónDesempeño(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_categoria == 196) {
            //console.log(value.nombreOption);
            let strDirty = removeAccents(value.nombre_opcion);
            let strClean = strDirty.replace(/ /g, '', ).replace(/,/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            Evaluación_Desempeño.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_opcion}</label>
                    </div>`
            count++;
        }
    }
}

function Mejorar(data) {
    let count = 1;
    for (const value of data) {
        if (value.id_fk_categoria == 197) {
            //console.log(value.nombreOption);
            let strDirty = removeAccents(value.nombre_opcion);
            let strClean = strDirty.replace(/ /g, '', ).replace(/,/g, '_', ).toLowerCase().replace(/\//g, "_").replace(/\((\w+)\)/g, "$1");

            Mejora.innerHTML +=
                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_opcion}</label>
                    </div>`
            count++;
        }
    }
}
//////////// FIN SGA ////////////

