const tipoIdRiesgo = document.querySelector("#tipoIdRiesgo"); 
const sistAsociadoIdRiesgo = document.querySelector("#sistAsociadoIdRiesgo");
const variableIdRiesgo = document.querySelector("#variableIdRiesgo");
const factorIdRiesgo = document.querySelector("#factorIdRiesgo");

fetch("./categoria",{
    mode: 'no-cors'
})
    .then((result) => result.json())
    .then((data) => {
        tipoIdentificacionRiesgo(data);
    });

fetch("./sistema-asociado",{
    mode: 'no-cors'
})
    .then((result) => result.json())
    .then((data) => {
        sistemaAsociado(data);
    });

fetch("./factor-riesgo",{
    mode: 'no-cors'
})
    .then((result) => result.json())
    .then((data) => {
        factorRiesgo(data);
    });

function tipoIdentificacionRiesgo(data) {
    for (const value of data) {
        if (value.id_fk_despliegue == 46) {
            tipoIdRiesgo.innerHTML += `<option value="${value.nombre_categoria}">${value.nombre_categoria}</option>`;
        }
    }
}

function factorRiesgo(data) {
    for (const value of data) {
        factorIdRiesgo.innerHTML += `<option value="${value.nombre_factor_riesgo}">${value.nombre_factor_riesgo}</option>`;
    }
}

function sistemaAsociado(data) {
    for (const value of data) {
        if (value.id_sistema_asociado != 1){
            sistAsociadoIdRiesgo.innerHTML += `<option data-id="${value.id_sistema_asociado}" value="${value.nombre_sistema_asociado}">${value.nombre_sistema_asociado}</option>`;
        }
    }

    sistAsociadoIdRiesgo.addEventListener("change", function (op) {
        let indexSelect = op.target.options.selectedIndex
        let opcion = op.target.options[indexSelect].dataset.id
        fetch("./variable/"+opcion,{
            mode: 'no-cors'
        })
            .then((result) => result.json())
            .then((data) => {
                variableIdRiesgo.innerHTML = "";
                for (const value of data) {
                    variableIdRiesgo.removeAttribute("disabled", "");
                    variableIdRiesgo.setAttribute("active", "");
                    variableIdRiesgo.innerHTML += `<option value="${value.nombre_variable}">${value.nombre_variable}</option>`;
                }
            });
    });
}


function llenandoModalIdentificacion(datos) {
    var a = datos;    
    const tipoIdRiesgo = document.querySelector('#editarTipoIdRiesgo_' + a.id_riesgo);
    tipoIdRiesgo.innerHTML = "<option selected> --Seleccionar-- </option>";
    const procesoIdRiesgo = document.querySelector('#editar_procesoIdRiesgo_' + a.id_riesgo);
    const objetivoIdRiesgo = document.querySelector('#editar_objetivoIdRiesgo_' + a.id_riesgo);
    const actCriticaIdRiesgo = document.querySelector('#editar_actCriticaIdRiesgo_' + a.id_riesgo);
    const sistAsociadoIdRiesgo = document.querySelector('#editarSistAsociadoIdRiesgo_' + a.id_riesgo); 
    sistAsociadoIdRiesgo.innerHTML = "<option selected> --Seleccionar-- </option>";
    const variableIdRiesgo = document.querySelector('#editarVariableIdRiesgo_' + a.id_riesgo);
    variableIdRiesgo.innerHTML = "<option selected> --Seleccionar-- </option>";
    const factorIdRiesgo = document.querySelector('#editarFactorIdRiesgo_' + a.id_riesgo);
    factorIdRiesgo.innerHTML = "<option selected> --Seleccionar-- </option>";
    const riesgoIdRiesgo = document.querySelector('#editar_riesgoIdRiesgo_' + a.id_riesgo);
    const descripcionIdRiesgo = document.querySelector('#editar_descripcionIdRiesgo_' + a.id_riesgo);
    const causaRaizIdRiesgo = document.querySelector('#editar_causaRaizIdRiesgo_' + a.id_riesgo);
    const consecuenciasIdRiesgo = document.querySelector('#editar_consecuenciasIdRiesgo_' + a.id_riesgo);

    fetch("./categoria",{
        mode : 'no-cors'
    })
    .then((result) => result.json())
    .then((data) => {
        tipoIdentificacionRiesgo(data);
    });

    fetch("./sistema-asociado", {
        mode : 'no-cors'
    })
        .then((result) => result.json())
        .then((data) => {
            sistemaAsociado(data);
        });

    fetch("./factor-riesgo", {
        mode : 'no-cors'
    })
        .then((result) => result.json())
        .then((data) => {
            factorRiesgo(data);
        });

    function tipoIdentificacionRiesgo(data) {
        for (const value of data) {
            if (value.id_fk_despliegue == 46) {
                tipoIdRiesgo.innerHTML += `<option value="${value.nombre_categoria}">${value.nombre_categoria}</option>`;
                tipoIdRiesgo.value = a.tipo;
            }
        }
    }

    function factorRiesgo(data) {
        for (const value of data) {
            factorIdRiesgo.innerHTML += `<option value="${value.nombre_factor_riesgo}">${value.nombre_factor_riesgo}</option>`;
            factorIdRiesgo.value = a.factor_riesgo;
        }
    }

    function sistemaAsociado(data) {
        for (const value of data) {
            if (value.id_sistema_asociado != 1){
                sistAsociadoIdRiesgo.innerHTML += `<option data-id="${value.id_sistema_asociado}" value="${value.nombre_sistema_asociado}">${value.nombre_sistema_asociado}</option>`;
                sistAsociadoIdRiesgo.value = a.sistema_asociado;
            }
        }

        sistAsociadoIdRiesgo.addEventListener("change", function (op) {
            let indexSelect = op.target.options.selectedIndex
            let opcion = op.target.options[indexSelect].dataset.id
            fetch("./variable/"+opcion,{
                mode : 'no-cors'
            })
                .then((result) => result.json())
                .then((data) => {
                    variableIdRiesgo.innerHTML = "";
                    for (const value of data) {
                        variableIdRiesgo.removeAttribute("disabled", "");
                        variableIdRiesgo.setAttribute("active", "");
                        variableIdRiesgo.innerHTML += `<option value="${value.nombre_variable}">${value.nombre_variable}</option>`;
                    }
                });
        });

        procesoIdRiesgo.value = a.proceso;
        objetivoIdRiesgo.value = a.objetivo;
        actCriticaIdRiesgo.value = a.actividad_critica;
        variableIdRiesgo.innerHTML = `<option value="${a.variable}">${a.variable}</option>`;
        variableIdRiesgo.value = a.variable;
        riesgoIdRiesgo.value = a.riesgo;
        descripcionIdRiesgo.value = a.descripcion;
        causaRaizIdRiesgo.value = a.causa_raiz;
        consecuenciasIdRiesgo.value = a.consecuencias;
    }
}