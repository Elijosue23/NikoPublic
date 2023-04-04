
 <div class="modal fade" id="modalInscripciones" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloModal">Inscripción</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="fromIncripts" autocomplete="false" onsubmit="return false" autocomplete="nope"
autocomplete="off">
          
          <div class="form-group row">
            <label class="control-label col-md-3">Cédula</label>
            <div class="col-md-8">
            	<input class="form-control" id="txt_idEstudiante" hidden>
              <input class="form-control" data="requered" id="txt_cedula"  autofocus id="txt_cedula" autocomplete="off" >
              
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Pasaporte</label>
            <div class="col-md-8">
              <input class="form-control"  id="text_Pasaporte" autocomplete="off" >
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-md-3">Nombres</label>
            <div class="col-md-8">
              <input class="form-control" data="requered"   id="text_Nombres" autocomplete="off" >
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">1° Apellido</label>
            <div class="col-md-8">
              <input class="form-control" data="requered"  id="text_perApellido" autocomplete="off" >
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">2°do Apellido</label>
            <div class="col-md-8">
              <input class="form-control" data="requered"  id="text_sdoApellido" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Nacionalidad</label>
            <div class="col-md-8">
              <select class="form-control" id="text_Nacionalidad">
             
                      <option value="Británica">Británica</option>
                      <option value="Escocesa">Escocesa</option>
                      <option value="Irlandesa">Irlandesa</option>
                      <option value="Danesa">Danesa</option>
                      <option value="Noruega">Noruega</option>
                      <option value="Suiza">Suiza</option>
                      <option value="Austriaca">Austriaca</option>
                      <option value="Belga">Belga</option>
                      <option value="Francesa">Francesa</option>
                      <option value="Alemana">Alemana</option>
                      <option value="Holandesa">Holandesa</option>
                      <option value="Mexicana">Mexicana</option>
                      <option value="Española">Española</option>

                    </select>
            </div>
          </div>
           <div class="form-group row">
            <label class="control-label col-md-3">País De Nacimiento</label>
            <div class="col-md-8">
              <select class="form-control" data="selectrequiered" id="text_PaisNacimiento">
               
                    </select>
            </div>
          </div> 
           <div class="form-group row">
            <label class="control-label col-md-3">Provincia de Nacimiento</label>
            <div class="col-md-8">
              <input class="form-control" data="requered"  id="text_ProvinciaNacimiento" autocomplete="off">
            </div>
          </div>
           <div class="form-group row">
            <label class="control-label col-md-3">Cartón de Nacimiento</label>
            <div class="col-md-8">
              <input class="form-control"  data="requered" id="text_CartonNacimiento" autocomplete="off" >
            </div>
          </div>
           <div class="form-group row">
            <label class="control-label col-md-3">Parroquia de Nacimiento</label>
            <div class="col-md-8">
              <input class="form-control" data="requered"  id="text_ParroquiaNacimiento" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Fecha de Nacimiento</label>
            <div class="col-md-8">
              <input class="form-control"    type="date" id="text_fechaNacimiento" autocomplete="off">
            </div>
          </div>
            <div class="form-group row">
            <label class="control-label col-md-3">Sexo</label>
            <div class="col-md-8">
              <select class="form-control" id="text_Sexo">
                      <option value=" ">--selecione--</option>
                      <option value="FEMENINO">FEMENINO</option>
                      <option value="MASCULINO">MASCULINO </option>
                    </select>
            </div>
          </div>
           <div class="form-group row">
            <label class="control-label col-md-3">Género</label>
            <div class="col-md-8">
              <select class="form-control" id="text_genero">
                      <option value=" ">--selecione--</option>
                      <option value="HOMBRE">HOMBRE</option>
                      <option value="MUJER">MUJER </option>
                    </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Estado Civil</label>
            <div class="col-md-8">
              <select class="form-control" id="text_EstadoCivil">
                <option value=" ">--selecione--</option>
                <option value="SOLTERO">SOLTERO</option>
                <option value="CASADO">CASADO</option>
                <option value="DIVORCIADO">DIVORCIADO</option>
                <option value="UNION DE HECHO">UNION DE HECHO</option>
                <option value="UNION LIBRE">UNION LIBRE</option>
                <option value="VIUDO">VIUDO</option>

              </select>
            </div>
          </div>
            <div class="form-group row">
            <label class="control-label col-md-3">ETNIA</label>
            <div class="col-md-8">
              <select class="form-control" id="text_etnia">
                      <option value=" ">--selecione--</option>
                      <option value="AFROECUATORIANO">AFROECUATORIANO</option>
                      <option value="BLANCO">BLANCO</option>
                      <option value="INDIGENA">INDIGENA</option>
                      <option value="MESTIZO">MESTIZO</option>
                      <option value="MONTUVIO">MONTUVIO</option>
                      <option value="MULATO">MULATO</option>
                      <option value="NEGRO">NEGRO</option>
                      <option value="OTRO">OTRO</option>
                     
                 </select>
            </div>
          </div>
             <div class="form-group row">
            <label class="control-label col-md-3">Tipo de Sangre</label>
            <div class="col-md-8">
              <select class="form-control" id="text_tipoSangre">
                      <option value=" ">--selecione--</option>
                      <option value="A-">A-</option>
                      <option value="A+">A+</option>
                      <option value="AB-">AB-</option>
                      <option value="AB+">AB+</option>
                       <option value="B-">B-</option>
                      <option value="B+">B+</option>
                      <option value="O-">O-</option>
                      <option value="O+">O+</option>
                 </select>
            </div>
          </div>
           <div class="form-group row">
            <label class="control-label col-md-3">País de Residencia</label>
            <div class="col-md-8">
              <select class="form-control" data="selectrequiered" id="text_PaisResidencia">
                 
                    </select>
            </div>
          </div> 
          <div class="form-group row">
            <label class="control-label col-md-3">Sector de Residencia</label>
            <div class="col-md-8">
              <input class="form-control" data="requered"  type="text" id="text_sectorResidencia" autocomplete="off" >
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Calle Principal</label>
            <div class="col-md-8">
              <input class="form-control" data="requered"  type="text" id="text_callePrincipal" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Calle Secundario</label>
            <div class="col-md-8">
              <input class="form-control" data="requered"  type="text" id="text_calleSecundaria" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Referencia Domiciliaria</label>
            <div class="col-md-8">
              <input class="form-control" data="requered"  type="text" id="text_RefeDomiciliaria" autocomplete="off">
            </div>
          </div>
            <div class="form-group row">
            <label class="control-label col-md-3">Barrio o Ciudadeia</label>
            <div class="col-md-8">
              <input class="form-control" data="requered"  type="text" id="text_BarrioCiudadeia" autocomplete="off">
            </div>
          </div>
            <div class="form-group row">
            <label class="control-label col-md-3">Código Postal</label>
            <div class="col-md-8">
              <input class="form-control"  type="number" id="text_CodigoPostal" autocomplete="off" >
            </div>
          </div>
           <div class="form-group row">
            <label class="control-label col-md-3">Número Residencia</label>
            <div class="col-md-8">
              <input class="form-control" data="requered"  type="number" id="text_NumeroResidencia" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Teléfono Movil</label>
            <div class="col-md-8">
              <input class="form-control" data="requered"  type="number" id="text_telefonoMovil" autocomplete="off">
            </div>
          </div>
            <div class="form-group row">
            <label class="control-label col-md-3">Télefono Fijo</label>
            <div class="col-md-8">
              <input class="form-control"  type="number" id="text_telefijos" autocomplete="off">
            </div>
          </div>
           <div class="form-group row">
            <label class="control-label col-md-3">Correo Electronico</label>
            <div class="col-md-8">
              <input class="form-control" data="requered"  type="text" id="text_CorreoElectronico" autocomplete="off" >
            </div>
          </div>
           <div class="form-group row">
            <label class="control-label col-md-3">Correo Institucional</label>
            <div class="col-md-8">
              <input class="form-control"  type="text" id="text_CorreoInstitucional" autocomplete="off" >
            </div>
          </div>
            <div class="form-group row">
            <label class="control-label col-md-3">Colegio</label>
            <div class="col-md-8">
              <select class="form-control"  id="text_Colegio">
                 <option value="">--selecione--</option>
                      <option value=" ">NO SE ENCONTRO NINGUN COLEGIO</option>
                    </select>
            </div>
          </div>
            <div class="form-group row">
            <label class="control-label col-md-3">Especialidad</label>
            <div class="col-md-8">
              <select class="form-control" id="text_Especialidad">
                 <option value=" ">--selecione--</option>
                      <option value=" ">NO SE ENCONTRO NINGUN ESPECIALIDAD</option>
                    </select>
            </div>
          </div>
             <div class="form-group row">
            <label class="control-label col-md-3">Centro de Información</label>
            <div class="col-md-8">
              <select class="form-control" id="text_CentroInformacion">
                 <option value=" ">--selecione--</option>
                       <option value=" ">NO SE ENCONTRO NINGUN CENTRO DE INFORMACION</option>
                    </select>
            </div>
          </div>
            <div class="form-group row">
            <label class="control-label col-md-3">Sede</label>
            <div class="col-md-8">
              <select class="form-control" id="text_Sede">
                 <option value=" ">--selecione--</option>
                      <option value="MATRIZ">MATRIZ</option>
                    </select>
            </div>
          </div>
              <div class="form-group row">
            <label class="control-label col-md-3">Modalidaad</label>
            <div class="col-md-8">
              <select class="form-control" id="text_Modalidad">
                 <option value="">--selecione--</option>
                      <option value="PRESENCIAL">PRESENCIAL</option>
                       <option value="VIRTUAL">VIRTUAL</option>
                    </select>
            </div>
          </div>
            <div class="form-group row">
            <label class="control-label col-md-3">Programa</label>
            <div class="col-md-8">
              <select class="form-control" data="selectrequiered" id="text_Programa">
                    </select>
            </div>
          </div>
           <div class="form-group row">
            <label class="control-label col-md-3">Malla</label>
            <div class="col-md-8">
              <select class="form-control" data="selectrequiered" id="text_malla">     
                    </select>
            </div>
          </div>
           <div class="form-group row">
            <label class="control-label col-md-3">Sesión</label>
            <div class="col-md-8">
              <select class="form-control" id="text_Sescion">
                 <option value="">--selecione--</option>
                      <option value="MATUTINA">MATUTINA</option>
                      <option value="NOSCTURNO">NOCTURNO</option>
                    </select>
            </div>
          </div>
            <div class="form-group row">
            <label class="control-label col-md-3">Periodo</label>
            <div class="col-md-8">
              <select class="form-control" id="text_Periodo">
                 <option value=" ">--selecione--</option>
                      <option value=" ">NO SE ENCONTRO NINGUN PERIODO</option>
                    </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Opciones de registro</label>
            <div class="col-md-8">
              <select class="form-control" id="text_OpcionesRegistro">
                 <option value="">--selecione--</option>
                      <option value=" ">NO SE ENCONTRO NINGUN OPCION</option>
                    </select>
            </div>
          </div>
           <div class="form-group row">
            <label class="control-label col-md-3">Asesor</label>
            <div class="col-md-8">
              <select class="form-control" id="text_Asesor">
                 <option value="">--selecione--</option>
                      <option value=" ">NO SE ENCONTRO NINGUN ASESOR</option>
                    </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Fecha de inscripción</label>
            <div class="col-md-8">
              <input class="form-control"   type="date" id="text_dateInscription" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Código de Promoción</label>
            <div class="col-md-8">
              <input class="form-control"  type="text" id="text_CodigoPromocion" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Archivador</label>
            <div class="col-md-8">
              <input class="form-control"  type="text" id="text_Archivador" autocomplete="off">
            </div>
          </div>
           <div class="form-group row">
            <label class="control-label col-md-3">Cómo nos Conocio?</label>
            <div class="col-md-8">
              <select class="form-control" data="selectrequiered" id="text_ComoNosConocio">
                 <option value=" ">--selecione--</option>
                      <option value="CHARLA COLEGIOS">CHARLA COLEGIOS</option>
                       <option value="OTROS">OTROS</option>
                       <option value="PERIODIO ">PERIODIO </option>
                       <option value="REDES SOCIALES">REDES SOCIALES</option>
                       <option value="TELEVISION">TELEVISION</option>
                       <option value="UN AMIGO ESTUDIO AQUÍ">UN AMIGO ESTUDIO AQUÍ</option>
                       <option value="UN FAMILIAR ESTUDIO AQUI">UN FAMILIAR ESTUDIO AQUI</option>
                    </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Razones para Inscribirse?</label>
            <div class="col-md-8">
              <select class="form-control" data="selectrequiered" id="text_RazonesInscribirse">
               <option value="">--selecione--</option>
               <option value="AMIGOS">AMIGOS</option>
               <option value="CARRERA">CARRERA</option>
               <option value="HORARIOS">HORARIOS</option>
               <option value="INSTALACIONES">INSTALACIONES</option>
               <option value="MENCIONES">MENCIONES</option>
             </select>
           </div>
         </div>
         <div class="form-group">
         	 <label class="control-label">Opciones!</label>
         </div>
         
         <div id="idchebokoptions">

         </div>


          <div class="form-group ">
                  <label class="control-label col-md-3">Observaciones</label>
                 <textarea class="form-control" rows="4" placeholder="ingrese Observaciones" id="text_Observaciones"></textarea>

            </div>

           <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button class="btn btn-primary" id="btnregister" onclick="Register_Inscriptions_Estudients()">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>