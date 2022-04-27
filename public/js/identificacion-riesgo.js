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