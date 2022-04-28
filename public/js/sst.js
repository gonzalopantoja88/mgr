const removeAccents = (str) => {
    return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
};
// ---> VARIABLES SST <---
const categoria_asignacion = document.querySelector("#categoriaAsignacion");
const categoria_riesgo = document.querySelector("#categoriaRiesgo");
const variables_comites = document.querySelector("#variablesComites");
const desplegue_accidente1 = document.querySelector("#AccidenteEnfermedad1");
const desplegue_accidente2 = document.querySelector("#AccidenteEnfermedad2");
const categoria_identificacion1 = document.querySelector(
    "#IdentificacionPeligros1"
);
const categoria_identificacion2 = document.querySelector(
    "#IdentificacionPeligros2"
);
const despliegue_resp_emergencia = document.querySelector(
    "#RespuestasEmergencia"
);
const categoria_descripcion_diagnostico = document.querySelector(
    "#DescripcionDiagnostico"
);
const despliegue_sgsst = document.querySelector("#DespliegueSST");
const categorias_sgsst = document.querySelector("#CategoriaSST");


fetch("./despliegue", {
    mode: "no-cors",
})
    .then((result) => result.json())
    .then((data) => {
        opcDespliegueAccidente(data);
        opcDespliegueEmergencia(data);
        opcDespliegueSST(data);
    });

fetch("./categoria", {
    mode: "no-cors",
})
    .then((result) => result.json())
    .then((data) => {
        opcCategoriaAsignacion(data);
        opcCategoriaRiesgo(data);
        opcCategoriaAccidente(data);
        opcCategoriaIdentificacion(data);
        opcCategoriaEmergencia(data);
        opcCategoriaDescripcion(data);
        opcCategoriaSST(data);
    });

fetch("./variable", {
    mode: "no-cors",
})
    .then((result) => result.json())
    .then((data) => {
        variablesComites(data);
    });


function opcCategoriaAsignacion(data) {
    for (const value of data) {
        if (value.id_fk_despliegue == 136) {
            //console.log(value.nombre_categoria)
            let strDirty = removeAccents(value.nombre_categoria);
            let strClean = strDirty
                .replace(/ /g, "")
                .replace(/,/g, "")
                .replace(/-/g, "")
                .toLowerCase()
                .replace(/\//g, "")
                .replace(/\((\w+)\)/g, "$1");

            categoria_asignacion.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`;
        }
    }
}

function opcCategoriaRiesgo(data) {
    for (const value of data) {
        if (value.id_fk_despliegue == 137) {
            //console.log(value.nombre_categoria)
            let strDirty = removeAccents(value.nombre_categoria);
            let strClean = strDirty
                .replace(/ /g, "")
                .replace(/,/g, "")
                .replace(/-/g, "")
                .toLowerCase()
                .replace(/\//g, "")
                .replace(/\((\w+)\)/g, "$1");

            categoria_riesgo.innerHTML += `<div class="form-check col">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                </div>`;
        }
    }
}

function variablesComites(data) {
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_variable);
        let strClean = strDirty
            .replace(/ /g, "")
            .replace(/,/g, "")
            .replace(/-/g, "")
            .toLowerCase()
            .replace(/\//g, "")
            .replace(/\((\w+)\)/g, "$1");
        if (
            value.id_fk_sistema_asociado == 5 &&
            value.id_variable != 41 &&
            value.id_variable != 42 &&
            value.id_variable != 48 &&
            value.id_variable != 49 &&
            value.id_variable != 50 &&
            value.id_variable != 51 &&
            value.id_variable != 52
        ) {
            //console.log(value.nombre_variable)

            variables_comites.innerHTML += `<div class="form-check">
                                <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                                <label class="form-check-label" for="${strClean}">${value.nombre_variable}</label>
                        </div>`;
        }
    }
}

function opcCategoriaAccidente(data) {
    let count = 1;
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_categoria);
        let strClean = strDirty
            .replace(/ /g, "")
            .replace(/,/g, "")
            .replace(/-/g, "")
            .toLowerCase()
            .replace(/\//g, "")
            .replace(/\((\w+)\)/g, "$1");
        if (value.id_fk_despliegue == 140) {
            //console.log(value.nombre_categoria)
            if (count % 2 != 0) {
                desplegue_accidente1.innerHTML += `<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                            <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                        </div>`;
                count++;
            } else {
                desplegue_accidente2.innerHTML += `<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                            <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                        </div>`;
                count++;
            }
        }
    }
}

function opcDespliegueAccidente(data) {
    let count = 1;
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_despliegue);
        let strClean = strDirty
            .replace(/ /g, "")
            .replace(/,/g, "")
            .replace(/-/g, "")
            .toLowerCase()
            .replace(/\//g, "")
            .replace(/\((\w+)\)/g, "$1");

        if (value.id_fk_variable == 48 && value.id_despliegue != 140) {
            //console.log(value.nombre_despliegue)
            if (count % 2 != 0) {
                desplegue_accidente1.innerHTML += `<div class="form-check">
                                <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                                <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                            </div>`;
                count++;
            } else {
                desplegue_accidente2.innerHTML += `<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                            <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                        </div>`;
                count++;
            }
        }
    }
}

function opcCategoriaIdentificacion(data) {
    let count = 1;
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_categoria);
        let strClean = strDirty
            .replace(/ /g, "")
            .replace(/,/g, "")
            .replace(/-/g, "")
            .toLowerCase()
            .replace(/\//g, "")
            .replace(/\((\w+)\)/g, "$1");
        if (value.id_fk_despliegue == 141) {
            //console.log(value.nombre_categoria)

            categoria_identificacion1.innerHTML += `<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                            <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                        </div>`;
        }
        if (value.id_fk_despliegue == 142) {
            categoria_identificacion2.innerHTML += `<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                            <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                        </div>`;
        }
    }
}

function opcDespliegueEmergencia(data) {
    let count = 1;
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_despliegue);
        let strClean = strDirty
            .replace(/ /g, "")
            .replace(/,/g, "")
            .replace(/-/g, "")
            .toLowerCase()
            .replace(/\//g, "")
            .replace(/\((\w+)\)/g, "$1");
        if (value.id_fk_variable == 50) {
            //console.log(value.nombre_despliegue)

            despliegue_resp_emergencia.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                    </div>`;
        }
    }
}

function opcCategoriaEmergencia(data) {
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_categoria);
        let strClean = strDirty
            .replace(/ /g, "")
            .replace(/,/g, "")
            .replace(/-/g, "")
            .toLowerCase()
            .replace(/\//g, "")
            .replace(/\((\w+)\)/g, "$1");
        if (value.id_fk_despliegue == 143) {
            //console.log(value.nombre_categoria)

            despliegue_resp_emergencia.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`;
        }
    }
}

function opcCategoriaDescripcion(data) {
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_categoria);
        let strClean = strDirty
            .replace(/ /g, "")
            .replace(/,/g, "")
            .replace(/\((\w+)\)/g, "$1")
            .replace(/-/g, "")
            .toLowerCase()
            .replace(/\//g, "");
        if (value.id_fk_despliegue == 145) {
            //console.log(value.nombre_categoria)

            categoria_descripcion_diagnostico.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`;
        }
    }
}

function opcDespliegueSST(data) {
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_despliegue);
        let strClean = strDirty
            .replace(/ /g, "")
            .replace(/,/g, "")
            .replace(/-/g, "")
            .toLowerCase()
            .replace(/\//g, "")
            .replace(/\((\w+)\)/g, "$1");
        if (value.id_fk_variable == 52 && value.id_despliegue != 155) {
            //console.log(value.nombre_despliegue)

            despliegue_sgsst.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                    </div>`;
        }
    }
}

function opcCategoriaSST(data) {
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_categoria);
        let strClean = strDirty
            .replace(/ /g, "")
            .replace(/,/g, "")
            .replace(/-/g, "")
            .toLowerCase()
            .replace(/\//g, "")
            .replace(/\((\w+)\)/g, "$1");
        if (value.id_fk_despliegue == 155) {
            //console.log(value.nombre_categoria);

            categorias_sgsst.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`;
        }
    }
}

