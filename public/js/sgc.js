const removeAccents = (str) => {
    return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
};

// ---> VARIABLES SGC <---
const despliegue_planificacion1 = document.querySelector("#planificaYcontrol_col1");
const despliegue_planificacion2 = document.querySelector("#planificaYcontrol_col2");
const categoria_comunicacion1 = document.querySelector("#comunicacionClientes1");
const categoria_comunicacion2 = document.querySelector("#comunicacionClientes2");
const despliegue_revision1 = document.querySelector("#revisionRequisitos1");
const despliegue_revision2 = document.querySelector("#revisionRequisitos2");
const despliegueControl_procesos1 = document.querySelector("#controlProcesos1");
const despliegueControl_procesos2 = document.querySelector("#controlProcesos2");
const despliegueLiberacion1 = document.querySelector("#liberacionProcesos1");
const despliegueLiberacion2 = document.querySelector("#liberacionProcesos2");
const despliegueControlSalida1 = document.querySelector("#controlSalida1");
const despliegueControlSalida2 = document.querySelector("#controlSalida2");
const categoria_DesarrolloProd1 = document.querySelector("#desarrolloProductos1");
const categoria_DesarrolloProd2 = document.querySelector("#desarrolloProductos2");
const opcion_controlProduc1 = document.querySelector("#controlProduc1");
const opcion_controlProduc2 = document.querySelector("#controlProduc2");
const opcion_controlProduc3 = document.querySelector("#controlProduc3");


/////////// INICIO CONTEXTO EMPRESA /////////////
fetch("./despliegue")
    .then((result) => result.json())
    .then((data) => {
        //---SGC---
        desplieguePlanificacion(data);
        despliegueRevision(data);
        despliegueControlProcesos(data);
        despliegueLiberacion(data);
        despliegueControlSalida(data);
        desarrolloProduc2(data);
        controlProduccion2(data);
    });

fetch("./categoria")
    .then((result) => result.json())
    .then((data) => {
        //---SGC---
        categoria_clientes(data);
        desarrolloProduc(data);
        controlProduccion1_2(data);
        controlProduccion3(data);
        controlProduccion4(data);
    });

fetch("./opcion")
    .then((result) => result.json())
    .then((data) => {
        //---SGC---
        controlProduccion1(data);
    });


//////////// INICIO SGC ////////////
function controlProduccion1(data) {
    let count = 1;
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_opcion);
        let strClean = strDirty.replace(/ /g, '').replace(/,/g, '').replace(/-/g, '').toLowerCase().replace(/\//g, "").replace(/\((\w+)\)/g, "$1");

        if (value.id_fk_categoria == 118) {
            controlProduc1.innerHTML += `<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                            <label class="form-check-label" for="${strClean}">${value.nombre_opcion}</label>
                        </div>`;
            count++;
        }
    }
}

function controlProduccion1_2(data) {
    let count = 1;
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_categoria);
        let strClean = strDirty.replace(/ /g, '').replace(/,/g, '').replace(/-/g, '').toLowerCase().replace(/\//g, "").replace(/\((\w+)\)/g, "$1");

        if (value.id_fk_despliegue == 110 && value.ID_Categoria != 118) {
            controlProduc1.innerHTML += `<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                            <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                        </div>`;
            count++;
        }
    }
}

function controlProduccion2(data) {
    let count = 1;
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_despliegue);
        let strClean = strDirty.replace(/ /g, '').replace(/,/g, '').replace(/-/g, '').toLowerCase().replace(/\//g, "").replace(/\((\w+)\)/g, "$1");

        if (
            value.id_fk_variable == 33 &&
            value.id_despliegue != 110 &&
            value.id_despliegue != 111 &&
            value.id_despliegue != 112
        ) {
            controlProduc2.innerHTML += `<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                            <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                        </div>`;
            count++;
        }
    }
}

function controlProduccion3(data) {
    let count = 1;
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_categoria);
        let strClean = strDirty.replace(/ /g, '').replace(/,/g, '').replace(/-/g, '').toLowerCase().replace(/\//g, "").replace(/\((\w+)\)/g, "$1");

        if (value.id_fk_despliegue == 111) {
            controlProduc3.innerHTML += `<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                            <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                        </div>`;
            count++;
        }
    }
}

function controlProduccion4(data) {
    let count = 1;
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_categoria);
        let strClean = strDirty.replace(/ /g, '').replace(/,/g, '').replace(/-/g, '').toLowerCase().replace(/\//g, "").replace(/\((\w+)\)/g, "$1");

        if (value.id_fk_despliegue == 112) {
            controlProduc4.innerHTML += `<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                            <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                        </div>`;
            count++;
        }
    }
}

function desplieguePlanificacion(data) {
    let count = 1;
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_despliegue);
        let strClean = strDirty.replace(/ /g, '').replace(/,/g, '').replace(/-/g, '').toLowerCase().replace(/\//g, "").replace(/\((\w+)\)/g, "$1");

        if (value.id_fk_variable == 28) {
            if (count % 2 != 0) {
                despliegue_planificacion1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                    </div>`;
                count++;
            } else {
                despliegue_planificacion2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                    </div>`;
                count++;
            }
        }
    }
}

function categoria_clientes(data) {
    let count = 1;
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_categoria);
        let strClean = strDirty.replace(/ /g, '').replace(/,/g, '').replace(/-/g, '').toLowerCase().replace(/\//g, "").replace(/\((\w+)\)/g, "$1");

        if (value.id_fk_despliegue == 91) {
            if (count % 2 != 0) {
                categoria_comunicacion1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`;
                count++;
            } else {
                categoria_comunicacion2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`;
                count++;
            }
        }
    }
}

function despliegueRevision(data) {
    let count = 1;
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_despliegue);
        let strClean = strDirty.replace(/ /g, '').replace(/,/g, '').replace(/-/g, '').toLowerCase().replace(/\//g, "").replace(/\((\w+)\)/g, "$1");

        if (value.id_fk_variable == 30) {
            if (count % 2 != 0) {
                despliegue_revision1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                    </div>`;
                count++;
            } else {
                despliegue_revision2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                    </div>`;
                count++;
            }
        }
    }
}

function desarrolloProduc(data) {
    let count = 1;
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_categoria);
        let strClean = strDirty.replace(/ /g, '').replace(/,/g, '').replace(/-/g, '').toLowerCase().replace(/\//g, "").replace(/\((\w+)\)/g, "$1");

        if (value.id_fk_despliegue == 99) {
            categoria_DesarrolloProd1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_categoria}</label>
                    </div>`;
        }
    }
}

function desarrolloProduc2(data) {
    let count = 1;
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_despliegue);
        let strClean = strDirty.replace(/ /g, '').replace(/,/g, '').replace(/-/g, '').toLowerCase().replace(/\//g, "").replace(/\((\w+)\)/g, "$1");

        if (value.id_fk_variable == 31 && value.id_despliegue != 99) {
            categoria_DesarrolloProd2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                    </div>`;
        }
    }
}

function despliegueControlProcesos(data) {
    let count = 1;
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_despliegue);
        let strClean = strDirty.replace(/ /g, '').replace(/,/g, '').replace(/-/g, '').toLowerCase().replace(/\//g, "").replace(/\((\w+)\)/g, "$1");

        if (value.id_fk_variable == 32) {
            if (count % 2 != 0) {
                despliegueControl_procesos1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                    </div>`;
                count++;
            } else {
                despliegueControl_procesos2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                    </div>`;
                count++;
            }
        }
    }
}

function despliegueLiberacion(data) {
    let count = 1;
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_despliegue);
        let strClean = strDirty.replace(/ /g, '').replace(/,/g, '').replace(/-/g, '').toLowerCase().replace(/\//g, "").replace(/\((\w+)\)/g, "$1");

        if (value.id_fk_variable == 34) {
            if (count % 2 != 0) {
                despliegueLiberacion1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                    </div>`;
                count++;
            } else {
                despliegueLiberacion2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                    </div>`;
                count++;
            }
        }
    }
}

function despliegueControlSalida(data) {
    let count = 1;
    for (const value of data) {
        let strDirty = removeAccents(value.nombre_despliegue);
        let strClean = strDirty.replace(/ /g, '').replace(/,/g, '').replace(/-/g, '').toLowerCase().replace(/\//g, "").replace(/\((\w+)\)/g, "$1");

        if (value.id_fk_variable == 35) {
            if (count % 2 != 0) {
                despliegueControlSalida1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                    </div>`;
                count++;
            } else {
                despliegueControlSalida2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${strClean}" value="si" id="${strClean}">
                        <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                    </div>`;
                count++;
            }
        }
    }
}
//////////// FIN SGC ////////////