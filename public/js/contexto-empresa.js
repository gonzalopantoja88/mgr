const removeAccents = (str) => {
  return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
};

const formularioEmpresa = document.querySelector("#formularioEmpresa");
const origenCapital = document.querySelector("#origenCapital");
const dimension = document.querySelector("#dimension");
const objetoSocial = document.querySelector("#objetoSocial");
const sectorEconomico = document.querySelector("#sectorEconomico");
const opcionSectorEco = document.querySelector("#opcionSectorEco");
const opcionesSectorEco = document.querySelector("#opcionesSectorEco");
const propietarios = document.querySelector("#propietarios");
const tipoPersona = document.querySelector("#tipoPersona");
const opTipoPersona = document.querySelector("#opcionTipoPersona");
const tangibles = document.querySelector("#tangibles");
const bienes = document.querySelector("#bienes");
const opBienes = document.querySelector("#opcionBienes");
const intangibles = document.querySelector("#intangibles");
const fichaTec = document.querySelector("#fichaTec");
const colA = document.querySelector("#colA");
const colB = document.querySelector("#colB");
const colC = document.querySelector("#colC");
const normaTec = document.querySelector("#normaTec");
const imgEmp = document.querySelector("#imgEmp");
const colAv = document.querySelector("#colAv");
const colBv = document.querySelector("#colBv");
const colCv = document.querySelector("#colCv");
const gestCliente = document.querySelector("#gestCliente");

fetch("./despliegue",{
  mode: 'no-cors'
})
  .then((result) => result.json())
  .then((data) => {
    fichaTecnica(data);
    normaTecnica(data);
    imagenEmpresarial(data);
    ventas(data);
    gestionClientes(data);
  });

fetch("./categoria",{
  mode: 'no-cors'
})
  .then((result) => result.json())
  .then((data) => {
    segunOrigen(data);
    segunDimension(data);
    segunObjetoSocial(data);
    segunSectorEconomico(data);
    segunNumPropietarios(data);
    productoTangible(data);
    productoIntangible(data);
  });

function segunOrigen(data) {
  for (const value of data) {
    if (value.id_fk_despliegue == 1) {
      origenCapital.innerHTML += `<option value="${value.nombre_categoria}">${value.nombre_categoria}</option>`;
    }
  }
}

function segunDimension(data) {
  for (const value of data) {
    if (value.id_fk_despliegue == 2) {
      dimension.innerHTML += `<option value="${value.nombre_categoria}">${value.nombre_categoria}</option>`;
    }
  }
}

function segunObjetoSocial(data) {
  for (const value of data) {
    if (value.id_fk_despliegue == 3) {
      objetoSocial.innerHTML += `<option value="${value.nombre_categoria}">${value.nombre_categoria}</option>`;
    }
  }
}

function segunSectorEconomico(data) {
  for (const value of data) {
    if (value.id_fk_despliegue == 4) {
      sectorEconomico.innerHTML += `<option data-id="${value.id_categoria}" value="${value.nombre_categoria}">${value.nombre_categoria}</option>`;
    }
  }

  sectorEconomico.addEventListener("change", (op) => {
    let indexSelect = op.target.options.selectedIndex
    let opcion = op.target.options[indexSelect].dataset.id
    fetch("./opcion/"+opcion,{
      mode: 'no-cors'
    })
      .then((result) => result.json())
      .then((data) => {
        opcionesSectorEco.innerHTML = "";
        if (data.length > 0) {
          for (const value of data) {
            opcionesSectorEco.removeAttribute("disabled", "");
            opcionesSectorEco.setAttribute("active", "");
            opcionesSectorEco.innerHTML += `<option value="${value.nombre_opcion}">${value.nombre_opcion}</option>`;
          }
        } else {
          opcionesSectorEco.removeAttribute("active", "");
          opcionesSectorEco.setAttribute("disabled", "");
          opcionesSectorEco.innerHTML += `<option value="Sin opciones">--Sin opciones--</option>`;
        }
      });
  });
}

function segunNumPropietarios(data) {
  for (const value of data) {
    if (value.id_fk_despliegue == 5) {
      propietarios.innerHTML += `<option data-id="${value.id_categoria}" value="${value.nombre_categoria}">${value.nombre_categoria}</option>`;
    }
  }

  propietarios.addEventListener("change", (op) => {
    let indexSelect = op.target.options.selectedIndex
    let opcion = op.target.options[indexSelect].dataset.id
    fetch("./opcion/"+opcion,{
      mode: 'no-cors'
    })
      .then((result) => result.json())
      .then((data) => {
        tipoPersona.innerHTML = "";
        if (data.length > 0) {
          for (const value of data) {
            tipoPersona.removeAttribute("disabled", "");
            tipoPersona.setAttribute("active", "");
            tipoPersona.innerHTML += `<option value="${value.nombre_opcion}">${value.nombre_opcion}</option>`;
          }
        } else {
          tipoPersona.removeAttribute("active", "");
          tipoPersona.setAttribute("disabled", "");
          tipoPersona.innerHTML += `<option value="Sin opciones">--Sin opciones--</option>`;
        }
      });
  });
}

function productoTangible(data) {
  for (const value of data) {
    if (value.id_fk_despliegue == 6) {
      tangibles.innerHTML += `<option data-id="${value.id_categoria}" value="${value.nombre_categoria}">${value.nombre_categoria}</option>`;
    }
  }

  tangibles.addEventListener("change", (op) => {
    let indexSelect = op.target.options.selectedIndex
    let opcion = op.target.options[indexSelect].dataset.id
    fetch("./opcion/"+opcion,{
      mode: 'no-cors'
    })
      .then((result) => result.json())
      .then((data) => {
        bienes.innerHTML = "";
        if (data.length > 0) {
          for (const value of data) {
            bienes.removeAttribute("disabled", "");
            bienes.setAttribute("active", "");
            bienes.innerHTML += `<option value="${value.nombre_opcion}">${value.nombre_opcion}</option>`;
          }
        } else {
          bienes.removeAttribute("active", "");
          bienes.setAttribute("disabled", "");
          bienes.innerHTML += `<option value="Sin opciones">--Sin opciones--</option>`;
        }
      });
  });
}

function productoIntangible(data) {
  for (const value of data) {
    if (value.id_fk_despliegue == 7) {
      intangibles.innerHTML += `<option value="${value.nombre_categoria}">${value.nombre_categoria}</option>`;
    }
  }
}

function fichaTecnica(data) {
  let countColA = 0;
  let countColC = 0;
  let count = 1;

  for (const value of data) {
    if (value.id_fk_variable == 3) {
      let strDirty = removeAccents(value.nombre_despliegue);
      let strClean = strDirty.replace(/ /g, "").toLowerCase();

      if (count % 2 != 0 && countColA <= countColC) {
        colA.innerHTML += `<div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="${strClean}" id="${strClean}" value="si">
                  <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                  </div>`;
        count++;
        countColA++;
      } else if (count % 2 != 0 && countColA > countColC) {
        colC.innerHTML += `<div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="${strClean}" id="${strClean}" value="si">
                  <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                  </div>`;
        countColC++;
      } else {
        colB.innerHTML += `<div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="${strClean}" id="${strClean}" value="si">
                  <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                  </div>`;
        count++;
      }
    }
  }
}

function normaTecnica(data) {
  for (const value of data) {
    if (value.id_fk_variable == 4) {
      normaTec.innerHTML += `<option value="${value.nombre_despliegue}">${value.nombre_despliegue}</option>`;
    }
  }
}

function imagenEmpresarial(data) {
  for (const value of data) {
    if (value.id_fk_variable == 5) {
      let strDirty = removeAccents(value.nombre_despliegue);
      let strClean = strDirty.replace(/ /g, "").toLowerCase();
      imgEmp.innerHTML += `<div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox"  name="${strClean}" id="${strClean}" value="si">
              <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
              </div>`;
    }
  }
}

function ventas(data) {
  let countColAv = 0;
  let countColCv = 0;
  let countv = 1;

  for (const value of data) {
    if (value.id_fk_variable == 53) {
      let strDirty = removeAccents(value.nombre_despliegue);
      let strClean = strDirty.replace(/ /g, "").toLowerCase();

      if (countv % 2 != 0 && countColAv <= countColCv) {
        colAv.innerHTML += `<div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="${strClean}" id="${strClean}" value="si">
                  <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                  </div>`;
        countv++;
        countColAv++;
      } else if (countv % 2 != 0 && countColAv > countColCv) {
        colCv.innerHTML += `<div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="${strClean}" id="${strClean}" value="si">
                  <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                  </div>`;
        countColCv++;
      } else {
        colBv.innerHTML += `<div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="${strClean}" id="${strClean}" value="si">
                  <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
                  </div>`;
        countv++;
      }
    }
  }
}

function gestionClientes(data) {
  for (const value of data) {
    if (value.id_fk_variable == 16) {
      let strDirty = removeAccents(value.nombre_despliegue);
      let strClean = strDirty.replace(/ /g, "").toLowerCase();

      gestCliente.innerHTML += `<div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="${strClean}" id="${strClean}" value="si">
              <label class="form-check-label" for="${strClean}">${value.nombre_despliegue}</label>
              </div>`;
    }
  }
}

