function llenandoModal(datos) {
    let ce = datos;
    let id = ce.id_contexto_empresa;

    console.log(datos)

    const origenCapitalModal = document.querySelector("#origenCapital" + id); origenCapitalModal.innerHTML = "<option selected> --Seleccionar-- </option>";
    const dimensionModal = document.querySelector("#dimension"  + id); dimensionModal.innerHTML = "<option selected> --Seleccionar-- </option>";
    const objetoSocialModal = document.querySelector("#objetoSocial"  + id); objetoSocialModal.innerHTML = "<option selected> --Seleccionar-- </option>";
    const sectorEconomicoModal = document.querySelector("#sectorEconomico"  + id); sectorEconomicoModal.innerHTML = "<option selected> --Seleccionar-- </option>";
    const opcionesSectorEcoModal = document.querySelector("#opcionesSectorEco"  + id); opcionesSectorEcoModal.innerHTML = "<option selected> --Seleccionar-- </option>";
    const propietariosModal = document.querySelector("#propietarios"  + id); propietariosModal.innerHTML = "<option selected> --Seleccionar-- </option>";
    const tipoPersonaModal = document.querySelector("#tipoPersona"  + id); tipoPersonaModal.innerHTML = "<option selected> --Seleccionar-- </option>";
    const tangiblesModal = document.querySelector("#tangibles"  + id); tangiblesModal.innerHTML = "<option selected> --Seleccionar-- </option>";
    const bienesModal = document.querySelector("#bienes"  + id); bienesModal.innerHTML = "<option selected> --Seleccionar-- </option>";
    const intangiblesModal = document.querySelector("#intangibles"  + id); intangiblesModal.innerHTML = "<option selected> --Seleccionar-- </option>";
    const colAModal = document.querySelector("#colA"  + id); colAModal.innerHTML = "";
    const colBModal = document.querySelector("#colB"  + id); colBModal.innerHTML = "";
    const colCModal = document.querySelector("#colC"  + id); colCModal.innerHTML = "";
    const normaTecModal = document.querySelector("#normaTec"  + id); normaTecModal.innerHTML = "<option selected> --Seleccionar-- </option>";
    const imgEmpModal = document.querySelector("#imgEmp"  + id); imgEmpModal.innerHTML = "";
    const colAvModal = document.querySelector("#colAv"  + id); colAvModal.innerHTML = "";
    const colBvModal = document.querySelector("#colBv"  + id); colBvModal.innerHTML = "";
    const colCvModal = document.querySelector("#colCv"  + id); colCvModal.innerHTML = "";
    const gestClienteModal = document.querySelector("#gestCliente"  + id); gestClienteModal.innerHTML = "";

    fetch("./despliegue", {
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

    fetch("./categoria", {
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
                origenCapitalModal.innerHTML += `<option value="${value.nombre_categoria}">${value.nombre_categoria}</option>`;
                origenCapitalModal.value = ce.origen_capital
            }
        }
    }

    function segunDimension(data) {
        for (const value of data) {
            if (value.id_fk_despliegue == 2) {
                dimensionModal.innerHTML += `<option value="${value.nombre_categoria}">${value.nombre_categoria}</option>`;
                dimensionModal.value = ce.dimension;
            }
        }
    }

    function segunObjetoSocial(data) {
        for (const value of data) {
            if (value.id_fk_despliegue == 3) {
                objetoSocialModal.innerHTML += `<option value="${value.nombre_categoria}">${value.nombre_categoria}</option>`;
                objetoSocialModal.value = ce.objeto_social;
            }
        }
    }

    function segunSectorEconomico(data) {
        for (const value of data) {
            if (value.id_fk_despliegue == 4) {
                sectorEconomicoModal.innerHTML += `<option data-id="${value.id_categoria}" value="${value.nombre_categoria}">${value.nombre_categoria}</option>`;
                sectorEconomicoModal.value = ce.sector_economico;
            }
        }

        sectorEconomicoModal.addEventListener("change", (op) => {
            let indexSelect = op.target.options.selectedIndex
            let opcion = op.target.options[indexSelect].dataset.id
            fetch("./opcion/" + opcion, {
                    mode: 'no-cors'
                })
                .then((result) => result.json())
                .then((data) => {
                    opcionesSectorEcoModal.innerHTML = "";
                    if (data.length > 0) {
                        for (const value of data) {
                            opcionesSectorEcoModal.removeAttribute("disabled", "");
                            opcionesSectorEcoModal.setAttribute("active", "");
                            opcionesSectorEcoModal.innerHTML += `<option value="${value.nombre_opcion}">${value.nombre_opcion}</option>`;
                            
                        }
                    } else {
                        opcionesSectorEcoModal.removeAttribute("active", "");
                        opcionesSectorEcoModal.setAttribute("disabled", "");
                        opcionesSectorEcoModal.innerHTML += `<option value="Sin opciones">--Sin opciones--</option>`;
                    }
                });
        });
    }

    function segunNumPropietarios(data) {
        for (const value of data) {
            if (value.id_fk_despliegue == 5) {
                propietariosModal.innerHTML += `<option data-id="${value.id_categoria}" value="${value.nombre_categoria}">${value.nombre_categoria}</option>`;
                propietariosModal.value = ce.propietario;
            }
        }

        propietariosModal.addEventListener("change", (op) => {
            let indexSelect = op.target.options.selectedIndex
            let opcion = op.target.options[indexSelect].dataset.id

            fetch("./opcion/" + opcion, {
                    mode: 'no-cors'
                })
                .then((result) => result.json())
                .then((data) => {
                    tipoPersonaModal.innerHTML = "";
                    if (data.length > 0) {
                        for (const value of data) {
                            tipoPersonaModal.removeAttribute("disabled", "");
                            tipoPersonaModal.setAttribute("active", "");
                            tipoPersonaModal.innerHTML += `<option value="${value.nombre_opcion}">${value.nombre_opcion}</option>`;
                        }
                    } else {
                        tipoPersonaModal.removeAttribute("active", "");
                        tipoPersonaModal.setAttribute("disabled", "");
                        tipoPersonaModal.innerHTML += `<option value="Sin opciones">--Sin opciones--</option>`;
                    }
                });
        });
    }

    function productoTangible(data) {
        for (const value of data) {
            if (value.id_fk_despliegue == 6) {
                tangiblesModal.innerHTML += `<option data-id="${value.id_categoria}" value="${value.nombre_categoria}">${value.nombre_categoria}</option>`;
                tangiblesModal.value = ce.tangible;

            }
        }

        tangiblesModal.addEventListener("change", (op) => {
            let indexSelect = op.target.options.selectedIndex
            let opcion = op.target.options[indexSelect].dataset.id
            fetch("./opcion/" + opcion, {
                    mode: 'no-cors'
                })
                .then((result) => result.json())
                .then((data) => {
                    bienesModal.innerHTML = "";
                    if (data.length > 0) {
                        for (const value of data) {
                            bienesModal.removeAttribute("disabled", "");
                            bienesModal.setAttribute("active", "");
                            bienesModal.innerHTML += `<option value="${value.nombre_opcion}">${value.nombre_opcion}</option>`;
                        }
                    } else {
                        bienesModal.removeAttribute("active", "");
                        bienesModal.setAttribute("disabled", "");
                        bienesModal.innerHTML += `<option value="Sin opciones">--Sin opciones--</option>`;
                    }
                });
        });
    }

    function productoIntangible(data) {
        for (const value of data) {
            if (value.id_fk_despliegue == 7) {
                intangiblesModal.innerHTML += `<option value="${value.nombre_categoria}">${value.nombre_categoria}</option>`;
                intangiblesModal.value = ce.intangible;
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

                let vlrChecked = ''
                for (const item in datos) {  
                    if(item+datos.id_emp_contexto_emp == strClean+datos.id_emp_contexto_emp){
                        
                        vlrChecked = (datos[item] == "si") && "checked";

                        if (count % 2 != 0 && countColA <= countColC) {
                            colAModal.innerHTML += `<div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="${strClean}`+id+`" id="${strClean}`+id+`" value="si" ${vlrChecked}>
                            <label class="form-check-label" for="${strClean}`+id+`" >${value.nombre_despliegue}</label>
                            </div>`;
                            count++;
                            countColA++;
        
                        } else if (count % 2 != 0 && countColA > countColC) {
                            colCModal.innerHTML += `<div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="${strClean}`+id+`" id="${strClean}`+id+`" value="si" ${vlrChecked}>
                            <label class="form-check-label" for="${strClean}`+id+`">${value.nombre_despliegue}</label>
                            </div>`;
                            countColC++;
                        } else {
                            colBModal.innerHTML += `<div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="${strClean}`+id+`" id="${strClean}`+id+`" value="si" ${vlrChecked}>
                            <label class="form-check-label" for="${strClean}`+id+`">${value.nombre_despliegue}</label>
                            </div>`;
                            count++;
                        }
                        
                        break;
                    }
                }      
            }
        }    
    }


    function normaTecnica(data) {
        for (const value of data) {
            if (value.id_fk_variable == 4) {
                normaTecModal.innerHTML += `<option value="${value.nombre_despliegue}">${value.nombre_despliegue}</option>`;
                normaTecModal.value = datos.norma_tecnica;

            }
        }
    }

 
    function imagenEmpresarial(data) {
        for (const value of data) {
            if (value.id_fk_variable == 5) {

                let strDirty = removeAccents(value.nombre_despliegue);
                let strClean = strDirty.replace(/ /g, "").toLowerCase();

                // Condicion para asignar el check a los campos que el usuario selecciono en su formulario
                let vlrChecked = ''
                for (const item in datos) {  
                    if(item+datos.id_emp_contexto_emp == strClean+datos.id_emp_contexto_emp){
                        
                        vlrChecked = (datos[item] == "si") && "checked";

                        // CODIGO BASE PARA LA CONDICION DE LOS CHECKBOX:
                        // if(datos[item] == "si"){
                        //     console.log(item + " - " + datos[item])
                        //     console.log("checked")
                        //     vlrChecked = "checked"
                        // } else {
                        //     console.log(item + " - " + datos[item])
                        //     console.log("no checked")    
                        // }

                        imgEmpModal.innerHTML += `<div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"  name="${strClean}`+id+`" id="${strClean}`+id+`" value="si" ${vlrChecked}>
                        <label class="form-check-label" for="${strClean}`+id+`">${value.nombre_despliegue}</label>
                        </div>`;
                        
                        break;
                    }
                }
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

                let vlrChecked = ''
                for (const item in datos) {  
                    if(item+datos.id_emp_contexto_emp == strClean+datos.id_emp_contexto_emp){
                        
                        vlrChecked = (datos[item] == "si") && "checked";

                        if (countv % 2 != 0 && countColAv <= countColCv) {
                            colAvModal.innerHTML += `<div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="${strClean}`+id+`" id="${strClean}`+id+`" value="si" ${vlrChecked}>
                            <label class="form-check-label" for="${strClean}`+id+`">${value.nombre_despliegue}</label>
                            </div>`;
                            countv++;
                            countColAv++;
                        } else if (countv % 2 != 0 && countColAv > countColCv) {
                            colCvModal.innerHTML += `<div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="${strClean}`+id+`" id="${strClean}`+id+`" value="si" ${vlrChecked}>
                            <label class="form-check-label" for="${strClean}`+id+`">${value.nombre_despliegue}</label>
                            </div>`;
                            countColCv++;
                        } else {
                            colBvModal.innerHTML += `<div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="${strClean}`+id+`" id="${strClean}`+id+`" value="si" ${vlrChecked}>
                            <label class="form-check-label" for="${strClean}`+id+`">${value.nombre_despliegue}</label>
                            </div>`;
                            countv++;
                        }
                        
                        break;
                    }
                }
            }
        }
    }

    function gestionClientes(data) {
        for (const value of data) {
            if (value.id_fk_variable == 16) {
                let strDirty = removeAccents(value.nombre_despliegue);
                let strClean = strDirty.replace(/ /g, "").toLowerCase();

                let vlrChecked = ''
                for (const item in datos) {         
                    if(item+datos.id_emp_contexto_emp == strClean+datos.id_emp_contexto_emp){
                        
                        vlrChecked = (datos[item] == "si") && "checked";
        
                        gestClienteModal.innerHTML += `<div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="${strClean}`+id+`" id="${strClean}`+id+`" value="si" ${vlrChecked}>
                        <label class="form-check-label" for="${strClean}`+id+`">${value.nombre_despliegue}</label>
                        </div>`;
                        
                        break;
                    }
                }   
            }
        }
    }

    tipoPersonaModal.innerHTML = `<option value="${ce.tipo_persona}">${ce.tipo_persona}</option>`; 
    opcionesSectorEcoModal.innerHTML = `<option value="${ce.opcion_sector_eco}">${ce.opcion_sector_eco}</option>`; 
    bienesModal.innerHTML = `<option value="${ce.bienes}">${ce.bienes}</option>`; 

}