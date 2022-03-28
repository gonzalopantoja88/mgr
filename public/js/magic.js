// $(document).ready(function () {
//     let namej = $('#prueba').val();
// });

// let namejs = document.querySelector('#prueba').value;

const removeAccents = (str) => {
  return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
};

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

// ---> VARIABLES SGA <---
const Clima_teologia1 = document.querySelector('#conAmbiental1');
const Clima_teologia2 = document.querySelector('#conAmbiental2');
const Clima_teologia3 = document.querySelector('#conAmbiental3');
const Clima_teologia4 = document.querySelector('#conAmbiental4');
const Clima_teologia5 = document.querySelector('#conAmbiental5');
const Clima_teologia6 = document.querySelector('#conAmbiental6');
const Legislacion_ambiental= document.querySelector('#desRreglamentario1');
const Contexto_social= document.querySelector('#conSocial1');
const Impactos_ambientales1= document.querySelector('#impAmbientales1');
const Impactos_ambientales2= document.querySelector('#impAmbientales2');
const Impactos_ambientales3= document.querySelector('#impAmbientales3');
//const Prácticas_gestión= document.querySelector('#praGestion1');
const Agua= document.querySelector('#agua1');
const Aire= document.querySelector('#aire1');
const Residuos= document.querySelector('#residuo1');
const Servicios_sociales = document.querySelector('#serviso');
const Demografia = document.querySelector('#demia');
const Contexto_organización = document.querySelector('#contorgan');
const Lideres =document.querySelector('#lidera')
const APoyo =document.querySelector('#apoyo')
const Planifi = document.querySelector('#planificar')
const Opera = document.querySelector('#opera')
const Evaluación_Desempeño = document.querySelector('#evadese')
const Mejora = document.querySelector('#mejor')

// ---> VARIABLES SST <---
const categoria_asignacion = document.querySelector("#categoriaAsignacion");
const categoria_riesgo = document.querySelector("#categoriaRiesgo");
const variables_comites = document.querySelector("#variablesComites");
const desplegue_accidente1 = document.querySelector("#AccidenteEnfermedad1");
const desplegue_accidente2 = document.querySelector("#AccidenteEnfermedad2");
const categoria_identificacion1 = document.querySelector("#IdentificacionPeligros1");
const categoria_identificacion2 = document.querySelector("#IdentificacionPeligros2");
const despliegue_resp_emergencia = document.querySelector("#RespuestasEmergencia");
const categoria_descripcion_diagnostico = document.querySelector("#DescripcionDiagnostico");
const despliegue_sgsst = document.querySelector("#DespliegueSST");
const categorias_sgsst = document.querySelector("#CategoriaSST");

// ---> VARIABLES IDENTIFICACION RIESGO <---
const formularioRiesgo = document.querySelector("#formularioRiesgo");
const templateRiesgo = document.querySelector("#templateRiesgo").content;
const tarjetasRiesgos = document.querySelector("#tarjetasRiesgos");
const tipoIdRiesgo = document.querySelector("#tipoIdRiesgo");
const sistAsociadoIdRiesgo = document.querySelector("#sistAsociadoIdRiesgo");
const variableIdRiesgo = document.querySelector("#variableIdRiesgo");
const factorIdRiesgo = document.querySelector("#factorIdRiesgo");

/////////// INICIO CONTEXTO EMPRESA /////////////

fetch("./sistema_asociado.php")
  .then((result) => result.json())
  .then((data) => {
    sistemaAsociado(data);
  });

fetch("./variables.php")
  .then((result) => result.json())
  .then((data) => {
    variablesComites(data);
  });

fetch("./despliegue.php")
  .then((result) => result.json())
  .then((data) => {
    //---CONTEXTO EMRPESA---
    fichaTecnica(data);
    normaTecnica(data);
    imagenEmpresarial(data);
    ventas(data);
    gestionClientes(data);

    //---SISTEMA GENERAL---
    opcDesplieguePlaneacionEstrategica(data);
    opcDesplieguePartesInteresadas(data);
    opcDespliegueAlcance(data);
    opcDespliegueLiderazgo(data);
    opcDespliegueRiesgo(data);
    opcDespliegueObjetivo(data);
    opcDespliegueRecursos(data);
    opcDespliegueEvaluacion(data);
    opcDespliegueMejora(data);

    //---SST---
    opcDespliegueAccidente(data);
    opcDespliegueEmergencia(data);
    opcDespliegueSST(data);

    //---SGC---
    desplieguePlanificacion(data);
    despliegueRevision(data);
    despliegueControlProcesos(data);
    despliegueLiberacion(data);
    despliegueControlSalida(data);
    desarrolloProduc2(data);
    controlProduccion2(data);
  });

  fetch("./categoria.php")
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
    tipoIdentificacionRiesgo(data);

    //---SISTEMA GENERAL---
    opcMapaProcesos(data);
    opcCaracterizaciones(data);
    opcCategoriaLiderazgo(data);
    opcCategoriaRecursos(data);
    opcCategoriaEvalucacion(data);

    //---SGC---
    categoria_clientes(data);
    desarrolloProduc(data);
    controlProduccion1_2(data);
    controlProduccion3(data);
    controlProduccion4(data);

    //---SGC---
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
    //PrácticasGestión(data)

    //---SST---
    opcCategoriaAsignacion(data);
    opcCategoriaRiesgo(data);
    opcCategoriaAccidente(data);
    opcCategoriaIdentificacion(data);
    opcCategoriaEmergencia(data);
    opcCategoriaDescripcion(data);
    opcCategoriaSST(data);
  });

fetch("./opcion.php")
  .then((result) => result.json())
  .then((data) => {
    //---SGC---
    controlProduccion1(data);

    //---SGA---
    Agua1(data);
    Aire1(data);
    Residuos1(data);    
    ServicioSociales(data);
    demografia(data);
    ContextoOrganización(data);
    LideRazgo (data);
    Apoyo(data);
    Planificacion(data);
    Operacion(data);
    EvaluaciónDesempeño(data);
    Mejorar(data);
  });

function segunOrigen(data) {
  for (const value of data) {
    if (value.ID_FK_Despliegue == 1) {
      // console.log(value.nombreCategoria)
      origenCapital.innerHTML += `<option value="${value.nombreCategoria}">${value.nombreCategoria}</option>`;
    }
  }
}

function segunDimension(data) {
  for (const value of data) {
    if (value.ID_FK_Despliegue == 2) {
      // console.log(value.nombreCategoria)
      dimension.innerHTML += `<option value="${value.nombreCategoria}">${value.nombreCategoria}</option>`;
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

    fetch("./opcion_unica.php", {
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

    fetch("./opcion_unica.php", {
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

  fetch("./insertar_contexto_empresa.php", {
    method: "POST",
    body: datosEmpresa,
  });
});
/////////// FIN CONTEXTO EMPRESA /////////////


//////////// INICIO SISTEMA GENERAL ////////////
function opcMapaProcesos(data) {
  for (const value of data) {
    if (value.ID_FK_Despliegue == 46) {
      //console.log(value.nombreCategoria)
      // let strDirty = removeAccents(value.nombreDespliegue);
      // let strClean = strDirty.replace(/ /g, '');

      mapaProcesos.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
            </div>`;
    }
  }
}

function opcCaracterizaciones(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Despliegue == 47) {
      //console.log(value.nombreCategoria)
      // let strDirty = removeAccents(value.nombreDespliegue);
      // let strClean = strDirty.replace(/ /g, '');

      if (count % 2 != 0) {
        opc_caracterizaciones1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                        <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                    </div>`;
        count++;
      } else {
        opc_caracterizaciones2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                        <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                    </div>`;
        count++;
      }
    }
  }
}

function opcDesplieguePlaneacionEstrategica(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Variable == 18) {
      //console.log(value.nombreDespliegue)
      // let strDirty = removeAccents(value.nombreDespliegue);
      // let strClean = strDirty.replace(/ /g, '');

      if (count % 2 != 0) {
        despliegue_planeacion_e1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      } else {
        despliegue_planeacion_e2.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                    <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      }
    }
  }
}

function opcDesplieguePartesInteresadas(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Variable == 19) {
      //console.log(value.nombreDespliegue)
      // let strDirty = removeAccents(value.nombreDespliegue);
      // let strClean = strDirty.replace(/ /g, '');

      if (count % 2 != 0) {
        despliegue_partes_i1.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                    <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                </div>`;
        count++;
      } else {
        despliegue_partes_i2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      }
    }
  }
}

function opcDespliegueAlcance(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Variable == 20) {
      //console.log(value.nombreDespliegue)
      // let strDirty = removeAccents(value.nombreDespliegue);
      // let strClean = strDirty.replace(/ /g, '');

      if (count % 2 != 0) {
        despliegue_alcance1.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                    <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      } else {
        despliegue_alcance2.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                    <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      }
    }
  }
}

function opcCategoriaLiderazgo(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Despliegue == 67) {
      //console.log(value.nombreCategoria)
      // let strDirty = removeAccents(value.nombreDespliegue);
      // let strClean = strDirty.replace(/ /g, '');

      if (count % 2 != 0) {
        categoria_liderazgo1.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                    </div>`;
        count++;
      } else {
        categoria_liderazgo2.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                    </div>`;
        count++;
      }
    }
  }
}

function opcDespliegueLiderazgo(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Variable == 21 && value.ID_Despliegue != 67) {
      //console.log(value.nombreDespliegue)
      // let strDirty = removeAccents(value.nombreDespliegue);
      // let strClean = strDirty.replace(/ /g, '');

      if (count % 2 != 0) {
        categoria_liderazgo1.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                    <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      } else {
        categoria_liderazgo2.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                    <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      }
    }
  }
}

function opcDespliegueRiesgo(data) {
  for (const value of data) {
    if (value.ID_FK_Variable == 22) {
      //console.log(value.nombreDespliegue)
      // let strDirty = removeAccents(value.nombreDespliegue);
      // let strClean = strDirty.replace(/ /g, '');

      despliegue_riesgos_oprtunidades.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                    <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
            </div>`;
    }
  }
}

function opcDespliegueObjetivo(data) {
  for (const value of data) {
    if (value.ID_FK_Variable == 23) {
      //console.log(value.nombreDespliegue)
      // let strDirty = removeAccents(value.nombreDespliegue);
      // let strClean = strDirty.replace(/ /g, '');

      despliegue_objetivos.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                    <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
            </div>`;
    }
  }
}

function opcCategoriaRecursos(data) {
  for (const value of data) {
    if (value.ID_FK_Despliegue == 71) {
      //console.log(value.nombreCategoria)
      // let strDirty = removeAccents(value.nombreCategoria);
      // let strClean = strDirty.replace(/ /g, '');

      categoria_recursos1.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
            </div>`;
    }

    if (value.ID_FK_Despliegue == 72) {
      categoria_recursos2.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
            </div>`;
    }
    if (value.ID_FK_Despliegue == 74) {
      categoria_recursos3.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
            </div>`;
    }
    if (value.ID_FK_Despliegue == 77) {
      categoria_recursos4.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
            </div>`;
    }
  }
}

function opcDespliegueRecursos(data) {
  for (const value of data) {
    if (
      value.ID_FK_Variable == 25 &&
      value.ID_Despliegue != 71 &&
      value.ID_Despliegue != 72 &&
      value.ID_Despliegue != 74 &&
      value.ID_Despliegue != 77
    ) {
      //console.log(value.nombreDespliegue)
      // let strDirty = removeAccents(value.nombreDespliegue);
      // let strClean = strDirty.replace(/ /g, '');

      despliegue_recursos.innerHTML += `<div class="form-check col-3">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                    <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
            </div>`;
    }
  }
}

function opcCategoriaEvalucacion(data) {
  for (const value of data) {
    if (value.ID_FK_Despliegue == 78) {
      //console.log(value.nombreCategoria)
      // let strDirty = removeAccents(value.nombreCategoria);
      // let strClean = strDirty.replace(/ /g, '');

      categoria_evaluacion1.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
            </div>`;
    }

    if (value.ID_FK_Despliegue == 80) {
      categoria_evaluacion2.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
            </div>`;
    }
    if (value.ID_FK_Despliegue == 81) {
      categoria_evaluacion3.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
            </div>`;
    }
    if (value.ID_FK_Despliegue == 82) {
      categoria_evaluacion4.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
            </div>`;
    }
  }
}

function opcDespliegueEvaluacion(data) {
  for (const value of data) {
    if (
      value.ID_FK_Variable == 26 &&
      value.ID_Despliegue != 78 &&
      value.ID_Despliegue != 80 &&
      value.ID_Despliegue != 81 &&
      value.ID_Despliegue != 82
    ) {
      //console.log(value.nombreDespliegue)
      // let strDirty = removeAccents(value.nombreDespliegue);
      // let strClean = strDirty.replace(/ /g, '');

      despliegue_evaluacion.innerHTML += `<div class="form-check col-3">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                    <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
            </div>`;
    }
  }
}

function opcDespliegueMejora(data) {
  for (const value of data) {
    if (value.ID_FK_Variable == 27) {
      //console.log(value.nombreDespliegue)
      // let strDirty = removeAccents(value.nombreDespliegue);
      // let strClean = strDirty.replace(/ /g, '');

      despliegue_mejora.innerHTML += `<div class="form-check col-4">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                    <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
            </div>`;
    }
  }
}
//////////// FIN SISTEMA GENERAL ////////////

//////////// INICIO SGC ////////////
function controlProduccion1(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Categoria == 118) {
      controlProduc1.innerHTML += `<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreOpcion}">
                            <label class="form-check-label" for="${value.nombreOpcion}">${value.nombreOpcion}</label>
                        </div>`;
      count++;
    }
  }
}

function controlProduccion1_2(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Despliegue == 110 && value.ID_Categoria != 118) {
      controlProduc1.innerHTML += `<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                            <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                        </div>`;
      count++;
    }
  }
}

function controlProduccion2(data) {
  let count = 1;
  for (const value of data) {
    if (
      value.ID_FK_Variable == 33 &&
      value.ID_Despliegue != 110 &&
      value.ID_Despliegue != 111 &&
      value.ID_Despliegue != 112
    ) {
      controlProduc2.innerHTML += `<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                            <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                        </div>`;
      count++;
    }
  }
}

function controlProduccion3(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Despliegue == 111) {
      controlProduc3.innerHTML += `<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                            <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                        </div>`;
      count++;
    }
  }
}

function controlProduccion4(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Despliegue == 112) {
      controlProduc4.innerHTML += `<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                            <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                        </div>`;
      count++;
    }
  }
}

function desplieguePlanificacion(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Variable == 28) {
      if (count % 2 != 0) {
        despliegue_planificacion1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      } else {
        despliegue_planificacion2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      }
    }
  }
}

function categoria_clientes(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Despliegue == 91) {
      if (count % 2 != 0) {
        categoria_comunicacion1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                        <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                    </div>`;
        count++;
      } else {
        categoria_comunicacion2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                        <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                    </div>`;
        count++;
      }
    }
  }
}

function despliegueRevision(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Variable == 30) {
      if (count % 2 != 0) {
        despliegue_revision1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      } else {
        despliegue_revision2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      }
    }
  }
}

function desarrolloProduc(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Despliegue == 99) {
      categoria_DesarrolloProd1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                        <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                    </div>`;
    }
  }
}

function desarrolloProduc2(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Variable == 31 && value.ID_Despliegue != 99) {
      categoria_DesarrolloProd2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
    }
  }
}

function despliegueControlProcesos(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Variable == 32) {
      if (count % 2 != 0) {
        despliegueControl_procesos1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      } else {
        despliegueControl_procesos2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      }
    }
  }
}

function despliegueLiberacion(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Variable == 34) {
      if (count % 2 != 0) {
        despliegueLiberacion1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      } else {
        despliegueLiberacion2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      }
    }
  }
}

function despliegueControlSalida(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Variable == 35) {
      if (count % 2 != 0) {
        despliegueControlSalida1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      } else {
        despliegueControlSalida2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      }
    }
  }
}
//////////// FIN SGC ////////////

/////////// INICIO SGA //////////
function ClimaTeología1(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Despliegue == 124) {
               //console.log(value.nombreCategoria);

               Clima_teologia1.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                      <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                  </div>`
          count++;
      }
  }
}

function ClimaTeología2(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Despliegue == 125) {
               //console.log(value.nombreCategoria);

               Clima_teologia2.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                      <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                  </div>`
          count++;
      }
  }
}

function ClimaTeología3(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Despliegue == 126) {
               //console.log(value.nombreCategoria);

               Clima_teologia3.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                      <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                  </div>`
          count++;
      }
  }
}

function ClimaTeología4(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Despliegue == 127) {
               //console.log(value.nombreCategoria);

               Clima_teologia4.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                      <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                  </div>`
          count++;
      }
  }
}

function ClimaTeología5(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Despliegue == 128) {
               //console.log(value.nombreCategoria);

               Clima_teologia5.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                      <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                  </div>`
          count++;
      }
  }
}

function ClimaTeología6(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Despliegue == 129) {
               //console.log(value.nombreCategoria);

               Clima_teologia6.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                      <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                  </div>`
          count++;
      }
  }
}

function LegislaciónAmbiental(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Despliegue == 130 && value.ID_Categoria != 164 && value.ID_Categoria != 165 && value.ID_Categoria != 166) {
               //console.log(value.nombreCategoria);

               desRreglamentario1.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                      <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                  </div>`
          count++;
      }
  }
}

function ContextoSocial(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Despliegue == 131) {
               //console.log(value.nombreCategoria);

               conSocial1.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                      <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                  </div>`
          count++;
      }
  }
}

function ImpactosAmbientales1(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Despliegue == 132) {
               //console.log(value.nombreCategoria);

               impAmbientales1.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                      <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                  </div>`
          count++;
      }
  }
}

function ImpactosAmbientales2(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Despliegue == 133) {
               //console.log(value.nombreCategoria);

               impAmbientales2.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                      <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                  </div>`
          count++;
      }
  }
}

function ImpactosAmbientales3(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Despliegue == 134) {
               //console.log(value.nombreCategoria);

               impAmbientales3.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                      <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                  </div>`
          count++;
      }
  }
}

// function PrácticasGestión(data) {
//     let count = 1;
//         for (const value of data) {
//             if (value.ID_FK_Despliegue == 135) {
//                  //console.log(value.nombreCategoria);

//                  praGestion1.innerHTML +=
//                     `<div class="form-check">
//                         <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
//                         <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
//                     </div>`
//             count++;
//         }
//     }
// }

function Agua1(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Categoria == 164) {
               //console.log(value.nombreOpcion);

              Agua.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreOpcion}">
                      <label class="form-check-label" for="${value.nombreOpcion}">${value.nombreOpcion}</label>
                  </div>`
          count++;
      }
  }
}

function Aire1(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Categoria == 165) {
               //console.log(value.nombreOpcion);

              Aire.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreOpcion}">
                      <label class="form-check-label" for="${value.nombreOpcion}">${value.nombreOpcion}</label>
                  </div>`
          count++;
      }
  }
}

function Residuos1(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Categoria == 166) {
              //console.log(value.nombreOption);

              Residuos.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreOpcion}">
                      <label class="form-check-label" for="${value.nombreOpcion}">${value.nombreOpcion}</label>
                  </div>`
          count++;
      }
  }
}

function ServicioSociales(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Categoria == 182) {
              //console.log(value.nombreOption);

              Servicios_sociales.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreOpcion}">
                      <label class="form-check-label" for="${value.nombreOpcion}">${value.nombreOpcion}</label>
                  </div>`
          count++;
      }
  }
}


function demografia(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Categoria == 183) {
              //console.log(value.nombreOption);

              Demografia.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreOpcion}">
                      <label class="form-check-label" for="${value.nombreOpcion}">${value.nombreOpcion}</label>
                  </div>`
          count++;
      }
  }
}

function ContextoOrganización(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Categoria == 189) {
              //console.log(value.nombreOption);

              Contexto_organización.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreOpcion}">
                      <label class="form-check-label" for="${value.nombreOpcion}">${value.nombreOpcion}</label>
                  </div>`
          count++;
      }
  }
}

function LideRazgo(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Categoria == 192) {
              //console.log(value.nombreOption);

              Lideres.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreOpcion}">
                      <label class="form-check-label" for="${value.nombreOpcion}">${value.nombreOpcion}</label>
                  </div>`
          count++;
      }
  }
}

function Planificacion(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Categoria == 193) {
              //console.log(value.nombreOption);

              Planifi.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreOpcion}">
                      <label class="form-check-label" for="${value.nombreOpcion}">${value.nombreOpcion}</label>
                  </div>`
          count++;
      }
  }
}

function Apoyo(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Categoria == 194) {
              //console.log(value.nombreOption);

             APoyo.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreOpcion}">
                      <label class="form-check-label" for="${value.nombreOpcion}">${value.nombreOpcion}</label>
                  </div>`
          count++;
      }
  }
} 

function Operacion(data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Categoria == 195) {
              //console.log(value.nombreOption);

            Opera.innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreOpcion}">
                      <label class="form-check-label" for="${value.nombreOpcion}">${value.nombreOpcion}</label>
                  </div>`
          count++;
      }
  }
} 


function EvaluaciónDesempeño (data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Categoria == 196) {
              //console.log(value.nombreOption);

              Evaluación_Desempeño .innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreOpcion}">
                      <label class="form-check-label" for="${value.nombreOpcion}">${value.nombreOpcion}</label>
                  </div>`
          count++;
      }
  }
} 

function Mejorar (data) {
  let count = 1;
      for (const value of data) {
          if (value.ID_FK_Categoria == 197) {
              //console.log(value.nombreOption);

             Mejora .innerHTML +=
                  `<div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreOpcion}">
                      <label class="form-check-label" for="${value.nombreOpcion}">${value.nombreOpcion}</label>
                  </div>`
          count++;
      }
  }
} 
//////////// FIN SGC ////////////

//////////// INICIO SST ////////////
function opcCategoriaAsignacion(data) {
  for (const value of data) {
    if (value.ID_FK_Despliegue == 136) {
      //console.log(value.nombreCategoria)
      // let strDirty = removeAccents(value.nombreDespliegue);
      // let strClean = strDirty.replace(/ /g, '');

      categoria_asignacion.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
            </div>`;
    }
  }
}

function opcCategoriaRiesgo(data) {
  for (const value of data) {
    if (value.ID_FK_Despliegue == 137) {
      //console.log(value.nombreCategoria)
      // let strDirty = removeAccents(value.nombreDespliegue);
      // let strClean = strDirty.replace(/ /g, '');

      categoria_riesgo.innerHTML += `<div class="form-check col">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
            </div>`;
    }
  }
}

function variablesComites(data) {
  for (const value of data) {
    if (
      value.ID_FK_SistemaAsociado == 5 &&
      value.ID_Variable != 41 &&
      value.ID_Variable != 42 &&
      value.ID_Variable != 48 &&
      value.ID_Variable != 49 &&
      value.ID_Variable != 50 &&
      value.ID_Variable != 51 &&
      value.ID_Variable != 52
    ) {
      //console.log(value.nombreVariable)
      // let strDirty = removeAccents(value.nombreDespliegue);
      // let strClean = strDirty.replace(/ /g, '');

      variables_comites.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreVariable}">
                    <label class="form-check-label" for="${value.nombreVariable}">${value.nombreVariable}</label>
            </div>`;
    }
  }
}

function opcCategoriaAccidente(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Despliegue == 140) {
      //console.log(value.nombreCategoria)
      // let strDirty = removeAccents(value.nombreCategoria);
      // let strClean = strDirty.replace(/ /g, '');

      if (count % 2 != 0) {
        desplegue_accidente1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                        <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                    </div>`;
        count++;
      } else {
        desplegue_accidente2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                        <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                    </div>`;
        count++;
      }
    }
  }
}

function opcDespliegueAccidente(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Variable == 48 && value.ID_Despliegue != 140) {
      //console.log(value.nombreDespliegue)
      // let strDirty = removeAccents(value.nombreDespliegue);
      // let strClean = strDirty.replace(/ /g, '');

      if (count % 2 != 0) {
        desplegue_accidente1.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      } else {
        desplegue_accidente2.innerHTML += `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                        <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                    </div>`;
        count++;
      }
    }
  }
}

function opcCategoriaIdentificacion(data) {
  let count = 1;
  for (const value of data) {
    //console.log(value.nombreCategoria)
    // let strDirty = removeAccents(value.nombreCategoria);
    // let strClean = strDirty.replace(/ /g, '');

    if (value.ID_FK_Despliegue == 141) {
      categoria_identificacion1.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                </div>`;
    }

    if (value.ID_FK_Despliegue == 142) {
      categoria_identificacion2.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                </div>`;
    }
  }
}

function opcDespliegueEmergencia(data) {
  let count = 1;
  for (const value of data) {
    if (value.ID_FK_Variable == 50) {
      //console.log(value.nombreDespliegue)

      despliegue_resp_emergencia.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                    <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                </div>`;
    }
  }
}

function opcCategoriaEmergencia(data) {
  for (const value of data) {
    if (value.ID_FK_Despliegue == 143) {
      //console.log(value.nombreCategoria)

      despliegue_resp_emergencia.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                </div>`;
    }
  }
}

function opcCategoriaDescripcion(data) {
  for (const value of data) {
    if (value.ID_FK_Despliegue == 145) {
      //console.log(value.nombreCategoria)

      categoria_descripcion_diagnostico.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                </div>`;
    }
  }
}

function opcDespliegueSST(data) {
  for (const value of data) {
    if (value.ID_FK_Variable == 52 && value.ID_Despliegue != 155) {
      //console.log(value.nombreDespliegue)

      despliegue_sgsst.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreDespliegue}">
                    <label class="form-check-label" for="${value.nombreDespliegue}">${value.nombreDespliegue}</label>
                </div>`;
    }
  }
}

function opcCategoriaSST(data) {
  for (const value of data) {
    if (value.ID_FK_Despliegue == 155) {
      console.log(value.nombreCategoria);

      categorias_sgsst.innerHTML += `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="${value.nombreCategoria}">
                    <label class="form-check-label" for="${value.nombreCategoria}">${value.nombreCategoria}</label>
                </div>`;
    }
  }
}
//////////// FIN SST ////////////


/////////// IDENTIFICACION DE RIESGO /////////////
fetch("./factor_riesgo.php")
  .then((result) => result.json())
  .then((data) => {
    // console.log(data)
    factorRiesgo(data);
  });

function tipoIdentificacionRiesgo(data) {
  for (const value of data) {
    if (value.ID_FK_Despliegue == 46) {
      tipoIdRiesgo.innerHTML += `<option value="${value.nombreCategoria}">${value.nombreCategoria}</option>`;
    }
  }
}

function factorRiesgo(data) {
  for (const value of data) {
    factorIdRiesgo.innerHTML += `<option value="${value.nombreFactorRiesgo}">${value.nombreFactorRiesgo}</option>`;
  }
}

function sistemaAsociado(data) {
  for (const value of data) {
    sistAsociadoIdRiesgo.innerHTML += `<option value="${value.nombreSistemaAsociado}">${value.nombreSistemaAsociado}</option>`;
  }

  sistAsociadoIdRiesgo.addEventListener("change", function (op) {
    let opcionSA = op.target.value;
    let dataSelectSA = new FormData();
    dataSelectSA.append("nombreSistemaAsociado", opcionSA);

    fetch("./variable_unica.php", {
      method: "POST",
      mode: "no-cors",
      body: dataSelectSA,
    })
      .then((result) => result.json())
      .then((data) => {
        // console.log(data.nombreOpcion)
        let texthtml = "";
        variableIdRiesgo.innerHTML = "";

        for (const value of data) {
          variableIdRiesgo.removeAttribute("disabled", "");
          variableIdRiesgo.setAttribute("active", "");
          variableIdRiesgo.innerHTML += `<option value="${value.nombreVariable}">${value.nombreVariable}</option>`;
        }
      });
  });
}

const riesgos = [];
formularioRiesgo.addEventListener("submit", (e) => {
  e.preventDefault();

  const datos = new FormData(formularioRiesgo);
  // console.log(datos.get('tipo_id_riesgo'))
  const [
    tipo_id_riesgo,
    proceso_id_riesgo,
    objetivo_id_riesgo,
    actividad_critica_id_Riesgo,
    sistema_asociado_id_riesgo,
    variable_id_riesgo,
    factor_id_riesgo,
    riesgo_id_riesgo,
    descripcion_id_riesgo,
    causa_raiz_id_riesgo,
    consecuencias_id_riesgo,
  ] = [...datos.values()];
  // console.log([...datos]);

  const riesgo = new Riesgo(
    tipo_id_riesgo,
    proceso_id_riesgo,
    objetivo_id_riesgo,
    actividad_critica_id_Riesgo,
    sistema_asociado_id_riesgo,
    variable_id_riesgo,
    factor_id_riesgo,
    riesgo_id_riesgo,
    descripcion_id_riesgo,
    causa_raiz_id_riesgo,
    consecuencias_id_riesgo
  );
  riesgos.push(riesgo);
  Riesgo.MostrarRiesgo(riesgos);

  fetch("./insertar_riesgo.php", {
    method: "POST",
    body: datos,
  });
});

class Riesgo {
  constructor(
    tipo,
    proceso,
    objetivo,
    actividad,
    sistemaAsociado,
    variable,
    factorRiesgo,
    riesgo,
    descripcion,
    causa,
    consecuencia
  ) {
    this.tipo = tipo;
    this.proceso = proceso;
    this.objetivo = objetivo;
    this.actividad = actividad;
    this.sistemaAsociado = sistemaAsociado;
    this.variable = variable;
    this.factorRiesgo = factorRiesgo;
    this.riesgo = riesgo;
    this.descripcion = descripcion;
    this.causa = causa;
    this.consecuencia = consecuencia;
  }

  static MostrarRiesgo(riesgos) {
    tarjetasRiesgos.textContent = "";
    const fragment = document.createDocumentFragment();
    riesgos.forEach((item) => {
      fragment.appendChild(item.agregarNuevoRiesgo());
    });
    tarjetasRiesgos.appendChild(fragment);
  }

  agregarNuevoRiesgo() {
    const clone = templateRiesgo.cloneNode(true);
    clone.querySelector("#pTipo").textContent = this.tipo;
    clone.querySelector("#pSistemaAsociado").textContent = this.sistemaAsociado;
    clone.querySelector("#pVariable").textContent = this.variable;
    clone.querySelector("#pFactorRiesgo").textContent = this.factorRiesgo;
    clone.querySelector("#idProceso").textContent = this.proceso;
    clone.querySelector("#pObjetivo").textContent = this.objetivo;
    clone.querySelector("#pActividadCritica").textContent = this.actividad;
    clone.querySelector("#pRiesgo").textContent = this.riesgo;
    clone.querySelector("#pDescripcion").textContent = this.descripcion;
    clone.querySelector("#pCausaRaiz").textContent = this.causa;
    clone.querySelector("#pConsecuencias").textContent = this.consecuencia;

    return clone;
  }
}