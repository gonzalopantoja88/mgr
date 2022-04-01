console.log('contexto empresa')

// ---> VARIABLES CONTEXTO EMPRESA <---
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

/////////// INICIO CONTEXTO EMPRESA /////////////
fetch("http://127.0.0.1:8000/despliegue")
  .then((result) => result.json())
  .then((data) => {
    //---CONTEXTO EMRPESA---
    fichaTecnica(data);
    normaTecnica(data);
    imagenEmpresarial(data);
    ventas(data);
    gestionClientes(data);
  });

  fetch("http://127.0.0.1:8000/categoria")
  .then((result) => result.json())
  .then((data) => {
    //---CONTEXTO EMRPESA---
    segunOrigen(data);
    segunDimension(data);
    segunObjetoSocial(data);
    segunSectorEconomico(data);
    segunNumPropietarios(data);
    productoTangible(data);
    productoIntangible(data);
    fichaTecnica(data);
  });

    function segunOrigen(data) {
        for (const value of data) {
          console.log(value)
          if (value.id_fk_despliegue == 1) {
            // console.log(value.nombreCategoria)
            origenCapital.innerHTML += `<option value="${value.nombre_categoria}">${value.nombre_categoria}</option>`;
          }
        }
      }
      
      function segunDimension(data) {
        for (const value of data) {
          if (value.id_fk_despliegue == 2) {
            // console.log(value.nombreCategoria)
            dimension.innerHTML += `<option value="${value.nombrecategoria}">${value.nombreCategoria}</option>`;
          }
        }
      }
      
      function segunObjetoSocial(data) {
        for (const value of data) {
          if (value.ID_FK_Despliegue == 3) {
            // console.log(value.nombreCategoria)
            objetoSocial.innerHTML += `<option value="${value.nombreCategoria}">${value.nombreCategoria}</option>`;
          }
        }
      }
      
      function segunSectorEconomico(data) {
        for (const value of data) {
          if (value.ID_FK_Despliegue == 4) {
            // console.log(value.nombreCategoria)
            sectorEconomico.innerHTML += `<option value="${value.nombreCategoria}">${value.nombreCategoria}</option>`;
          }
        }
      
        sectorEconomico.addEventListener("change", function (op) {
          let opcion = op.target.value;
          let dataSelect = new FormData();
          dataSelect.append("nombre_categoria", opcion);
      
          fetch("http://127.0.0.1:8000/opcion", {
            method: "POST",
            mode: "no-cors",
            body: dataSelect,
          })
            .then((result) => result.json())
            .then((data) => {
              // console.log(data.nombreOpcion)
              let texthtml = "";
              opcionesSectorEco.innerHTML = "";
      
              if (data.nombreOpcion != "empty") {
                for (const value of data) {
                  opcionesSectorEco.removeAttribute("disabled", "");
                  opcionesSectorEco.setAttribute("active", "");
                  opcionesSectorEco.innerHTML += `<option value="${value.nombreOpcion}">${value.nombreOpcion}</option>`;
                  texthtml = value.nombreCategoria;
                }
              } else {
                texthtml = "Sin opciones";
                opcionesSectorEco.removeAttribute("active", "");
                opcionesSectorEco.setAttribute("disabled", "");
                opcionesSectorEco.innerHTML += `<option selected disabled value="Sin opciones">--Sin opciones--</option>`;
              }
      
              opcionSectorEco.innerHTML = texthtml;
            });
        });
      }
      
      function segunNumPropietarios(data) {
        for (const value of data) {
          if (value.ID_FK_Despliegue == 5) {
            // console.log(value.nombreCategoria)
            propietarios.innerHTML += `<option value="${value.nombreCategoria}">${value.nombreCategoria}</option>`;
          }
        }
      
        propietarios.addEventListener("change", function (op) {
          let opcion = op.target.value;
          let dataSelect = new FormData();
          dataSelect.append("nombre_categoria", opcion);
      
          fetch("./opcion_unica.php", {
            method: "POST",
            mode: "no-cors",
            body: dataSelect,
          })
            .then((result) => result.json())
            .then((data) => {
              // console.log(data.nombreOpcion)
              let texthtml = "";
              tipoPersona.innerHTML = "";
      
              if (data.nombreOpcion != "empty") {
                for (const value of data) {
                  tipoPersona.removeAttribute("disabled", "");
                  tipoPersona.setAttribute("active", "");
                  tipoPersona.innerHTML += `<option value="${value.nombreOpcion}">${value.nombreOpcion}</option>`;
                  texthtml = value.nombreCategoria;
                }
              } else {
                texthtml = "Sin opciones";
                tipoPersona.removeAttribute("active", "");
                tipoPersona.setAttribute("disabled", "");
                tipoPersona.innerHTML += `<option selected disabled value="Sin opciones">--Sin opciones--</option>`;
              }
      
              opTipoPersona.innerHTML = texthtml;
            });
        });
      }
      
      function productoTangible(data) {
        for (const value of data) {
          if (value.ID_FK_Despliegue == 6) {
            // console.log(value.nombreCategoria)
            tangibles.innerHTML += `<option value="${value.nombreCategoria}">${value.nombreCategoria}</option>`;
          }
        }
      
        tangibles.addEventListener("change", function (op) {
          let opcion = op.target.value;
          let dataSelect = new FormData();
          dataSelect.append("nombre_categoria", opcion);
      
          fetch("http://127.0.0.1:8000/opcion", {
            method: "POST",
            mode: "no-cors",
            body: dataSelect,
          })
            .then((result) => result.json())
            .then((data) => {
              // console.log(data.nombreOpcion)
              let texthtml = "";
              bienes.innerHTML = "";
      
              if (data.nombreOpcion != "empty") {
                for (const value of data) {
                  bienes.removeAttribute("disabled", "");
                  bienes.setAttribute("active", "");
                  bienes.innerHTML += `<option value="${value.nombreOpcion}">${value.nombreOpcion}</option>`;
                  texthtml = value.nombreCategoria;
                }
              } else {
                texthtml = "Sin opciones";
                bienes.removeAttribute("active", "");
                bienes.setAttribute("disabled", "");
                bienes.innerHTML += `<option selected disabled value="Sin opciones">--Sin opciones--</option>`;
              }
      
              opBienes.innerHTML = texthtml;
            });
        });
      }
      
      function productoIntangible(data) {
        for (const value of data) {
          if (value.ID_FK_Despliegue == 7) {
            // console.log(value.nombreCategoria)
            intangibles.innerHTML += `<option value="${value.nombreCategoria}">${value.nombreCategoria}</option>`;
          }
        }
      }
      
      function fichaTecnica(data) {
        let countColA = 0;
        let countColC = 0;
        let count = 1;
      
        for (const value of data) {
          if (value.ID_FK_Variable == 3) {
            let strDirty = removeAccents(value.nombreDespliegue);
            let strClean = strDirty.replace(/ /g, "").toLowerCase();
      
            if (count % 2 != 0 && countColA <= countColC) {
              colA.innerHTML += `<div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="${strClean}" id="${strClean}" value="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${strClean}">${value.nombreDespliegue}</label>
                        </div>`;
              count++;
              countColA++;
            } else if (count % 2 != 0 && countColA > countColC) {
              colC.innerHTML += `<div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="${strClean}" id="${strClean}" value="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${strClean}">${value.nombreDespliegue}</label>
                        </div>`;
              countColC++;
            } else {
              colB.innerHTML += `<div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="${strClean}" id="${strClean}" value="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${strClean}">${value.nombreDespliegue}</label>
                        </div>`;
              count++;
            }
          }
        }
      }
      
      function normaTecnica(data) {
        for (const value of data) {
          if (value.ID_FK_Variable == 4) {
            normaTec.innerHTML += `<option value="${value.nombreDespliegue}">${value.nombreDespliegue}</option>`;
          }
        }
      }
      
      function imagenEmpresarial(data) {
        for (const value of data) {
          if (value.ID_FK_Variable == 5) {
            let strDirty = removeAccents(value.nombreDespliegue);
            let strClean = strDirty.replace(/ /g, "").toLowerCase();
            imgEmp.innerHTML += `<div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox"  name="${strClean}" id="${strClean}" value="${value.nombreDespliegue}">
                    <label class="form-check-label" for="${strClean}">${value.nombreDespliegue}</label>
                    </div>`;
          }
        }
      }
      
      function ventas(data) {
        let countColAv = 0;
        let countColCv = 0;
        let countv = 1;
      
        for (const value of data) {
          if (value.ID_FK_Variable == 53) {
            let strDirty = removeAccents(value.nombreDespliegue);
            let strClean = strDirty.replace(/ /g, "").toLowerCase();
      
            if (countv % 2 != 0 && countColAv <= countColCv) {
              colAv.innerHTML += `<div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="${strClean}" id="${strClean}" value="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${strClean}">${value.nombreDespliegue}</label>
                        </div>`;
              countv++;
              countColAv++;
            } else if (countv % 2 != 0 && countColAv > countColCv) {
              colCv.innerHTML += `<div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="${strClean}" id="${strClean}" value="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${strClean}">${value.nombreDespliegue}</label>
                        </div>`;
              countColCv++;
            } else {
              colBv.innerHTML += `<div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="${strClean}" id="${strClean}" value="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${strClean}">${value.nombreDespliegue}</label>
                        </div>`;
              countv++;
            }
          }
        }
      }
      
      function gestionClientes(data) {
        for (const value of data) {
          if (value.ID_FK_Variable == 16) {
            let strDirty = removeAccents(value.nombreDespliegue);
            let strClean = strDirty.replace(/ /g, "").toLowerCase();
      
            gestCliente.innerHTML += `<div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="${strClean}" id="${strClean}" value="${value.nombreDespliegue}">
                    <label class="form-check-label" for="${strClean}">${value.nombreDespliegue}</label>
                    </div>`;
          }
        }
      }
      
      formularioEmpresa.addEventListener("submit", (e) => {
        e.preventDefault();
      
        const datosEmpresa = new FormData(formularioEmpresa);
        // console.log(datos.get('tipo_id_riesgo')
        console.log([...datosEmpresa]);
      
        fetch("http://127.0.0.1:8000/contexto-empresa", {
          method: "POST",
          body: datosEmpresa,
        });
      });
      /////////// FIN CONTEXTO EMPRESA /////////////