
var editando=false;

function OpenModalInscritions(){
  editando=false;
     $("#modalInscripciones").modal({
        backdrop: 'static',
        keyboard: false
    })

    $(".modal-header").css("background-color", "rgb(224 233 241)");
    document.querySelector('#fromIncripts').reset();
    $('#idchebokoptions').html('');
    $('#modalInscripciones').modal('show');
    Componet_Options();
   Listar_combo_Paises();
   Listar_combo_MallaCuricular();
   Listar_combo_ProgramaEscolar();
}

function Register_Inscriptions_Estudients(){

if (validation()) {

var vectorSelect= new Array();
 $("#idchebokoptions input[id='chekoptions']").each(function(index){
   if (this.checked) {
    vectorSelect.push(1+'');
  }else{
    vectorSelect.push(0+'');
  }
});	

var vectorSelect = vectorSelect.toString();
 $.ajax({
   url: editando === false ? "../Controller/inscriptionController/postEstudiantesController.php"
   :"../Controller/inscriptionController/UpdateEstudiantesController.php",

  type: 'POST',
  data:{

idEstudiante : $("#txt_idEstudiante").val(),
cedula : $("#txt_cedula").val(),
Pasaporte : $("#text_Pasaporte").val(),
Nombres : $("#text_Nombres").val(),
perApellido : $("#text_perApellido").val(),
sdoApellido : $("#text_sdoApellido").val(),
Nacionalidad : $("#text_Nacionalidad").val(),
PaisNacimiento : $("#text_PaisNacimiento").val(),///id
ProvinciaNacimiento : $("#text_ProvinciaNacimiento").val(),
CartonNacimiento : $("#text_CartonNacimiento").val(),
ParroquiaNacimiento:$("#text_ParroquiaNacimiento").val(),
fechaNacimiento:$("#text_fechaNacimiento").val(),
Sexo:$("#text_Sexo").val(),
genero:$("#text_genero").val(),
EstadoCivil:$("#text_EstadoCivil").val(),
etnia:$("#text_etnia").val(),
tipoSangre:$("#text_tipoSangre").val(),
PaisResidencia:$("#text_PaisResidencia").val(),///id
sectorResidencia:$("#text_sectorResidencia").val(),
callePrincipal:$("#text_callePrincipal").val(),
calleSecundaria:$("#text_calleSecundaria").val(),
RefeDomiciliaria:$("#text_RefeDomiciliaria").val(),
BarrioCiudadeia:$("#text_BarrioCiudadeia").val(),
CodigoPostal:$("#text_CodigoPostal").val(),
NumeroResidencia:$("#text_NumeroResidencia").val(),
telefonoMovil:$("#text_telefonoMovil").val(),
telefijos:$("#text_telefijos").val(),
CorreoElectronico:$("#text_CorreoElectronico").val(),
CorreoInstitucional:$("#text_CorreoInstitucional").val(),
Colegio:$("#text_Colegio").val(),
Especialidad:$("#text_Especialidad ").val(),
CentroInformacion:$("#text_CentroInformacion ").val(),
Sede:$("#text_Sede ").val(),
Modalidad:$("#text_Modalidad ").val(),
Programa:$("#text_Programa ").val(),///id
malla:$("#text_malla ").val(),/////id
Sescion:$("#text_Sescion ").val(),
Periodo:$("#text_Periodo ").val(),
OpcionesRegistro:$("#text_OpcionesRegistro ").val(),
Asesor:$("#text_Asesor ").val(),
dateInscription:$("#text_dateInscription").val(),
CodigoPromocion:$("#text_CodigoPromocion").val(),
Archivador:$("#text_Archivador").val(),
ComoNosConocio:$("#text_ComoNosConocio").val(),
RazonesInscribirse:$("#text_RazonesInscribirse").val(),
Observaciones:$("#text_Observaciones").val(),
vectorSelect:vectorSelect

}
}).done(function(resp){
 var data = JSON.parse(resp);

if (data.data>0) {
   Swal.fire({icon: 'success',title: 'Éxito !!',text: ''+data.msg,showConfirmButton: false,timer: 1500})
  
  Listtar_Estudiantes();
  document.querySelector('#fromIncripts').reset();
   $('#modalInscripciones').modal('hide');
   document.querySelector('#fromIncripts').load();

   $("#Contenido_view").load("InscriptionView/InscriptionVew.php?modulo="+8);

}else{
return Swal.fire("Mensaje de error", ""+data.msg, "error");
}

})

}else{

  txt_cedula.focus();
  return Swal.fire("Mensaje de advertencia", "Llene los campos vacios que son requeridos para su corecto registro!", "warning");
}

}

function Listtar_Estudiantes(){
 $.ajax({
    url:'../Controller/inscriptionController/GetStudientsController.php',
    type:'POST'
   
  }).done(function(resultado){
    var data = JSON.parse(resultado);
    var data=data.data;
    if (data?.length!=0) {
      var cont = 1;
            var template = '';
            data.forEach(valor => {
                template += `
                         <tr guardarId="${valor.id}" >
                         <td>${cont}</td>
                         <td>${valor.perApellido} ${valor.sdoApellido},${valor.Nombres}</td>
                         <td>${CalculeEdad(valor.fechaNacimiento)}</td>
                         <td> </td>
                         <td> ${valor.cedula}</td>
                         <td> ${valor.cedula}</td>
                          <td>${valor.CorreoElectronico}, ${valor.CorreoInstitucional}, ${valor.telefonoMovil}  </td>
                         <td> ${valor.namesProgram} </td>
                         <td> </td>
                         <td> </td>
                         <td> </td>
                         <td> </td>
                         <td>  </td>    
                          <td>${ActiontonEvents(valor.id)} </td>
                         </tr>
                      `
                cont++;
            })
            $('#table_Estudienst').html(template);
   }
   else{
   $("#table_Estudienst").html('<h5>NO SE ENCONTO ESTUDIANTES</h5>');
  }
})
}

function CalculeEdad(edaa){
  var f = new Date(edaa);
  var fecha = new Date();
  var actual = fecha.getFullYear();
  var real = f.getFullYear();
return actual-real;
}

function Edit_User(idstudents){
  editando=true;
 $.ajax({
  "url": "../Controller/inscriptionController/GetShowController.php",
  type: 'POST',
  data:{idstudents:idstudents}
}).done(function(resp) {
 var data = JSON.parse(resp);
  $("#modalInscripciones").modal({
        backdrop: 'static',
        keyboard: false
    })
   

     var uno = document.getElementById('tituloModal');
     uno.textContent = 'Actualizando Inscripción';
    $(".modal-header").css("background-color", "rgb(224 233 241)");
    $('#modalInscripciones').modal('show');

$("#txt_idEstudiante").val(data.id);
 $("#txt_cedula").val(data.cedula);
$("#text_Pasaporte").val(data.Pasaporte);
$("#text_Nombres").val(data.Nombres);
 $("#text_perApellido").val(data.perApellido);
 $("#text_sdoApellido").val(data.sdoApellido);
 $("#text_Nacionalidad").val(data.Nacionalidad);
 //call mets
//$("#text_PaisNacimiento").val(data.PaisNacimiento);///id
//call fints
 $("#text_ProvinciaNacimiento").val(data.ProvinciaNacimiento);
 $("#text_CartonNacimiento").val(data.CartonNacimiento);
$("#text_ParroquiaNacimiento").val(data.ParroquiaNacimiento);
$("#text_fechaNacimiento").val(data.fechaNacimiento);
$("#text_Sexo").val(data.Sexo);
$("#text_genero").val(data.genero);
$("#text_EstadoCivil").val(data.EstadoCivil);
$("#text_etnia").val(data.etnia);
$("#text_tipoSangre").val(data.tipoSangre);
//call method
//$("#text_PaisResidencia").val(data.PaisResidencia);//id
//call metho fint
$("#text_sectorResidencia").val(data.sectorResidencia);
$("#text_callePrincipal").val(data.callePrincipal);
$("#text_calleSecundaria").val(data.calleSecundaria);
$("#text_RefeDomiciliaria").val(data.RefeDomiciliaria);
$("#text_BarrioCiudadeia").val(data.BarrioCiudadeia);
$("#text_CodigoPostal").val(data.CodigoPostal);
$("#text_NumeroResidencia").val(data.NumeroResidencia);
$("#text_telefonoMovil").val(data.telefonoMovil);
$("#text_telefijos").val(data.telefijos);
$("#text_CorreoElectronico").val(data.CorreoElectronico);
$("#text_CorreoInstitucional").val(data.CorreoInstitucional);
$("#text_Colegio").val(data.Colegio);
$("#text_Especialidad ").val(data.Especialidad);
$("#text_CentroInformacion ").val(data.CentroInformacion);
$("#text_Sede ").val(data.Sede);
$("#text_Modalidad ").val(data.Modalidad);
///Call metds
//$("#text_Programa").val(data.Programa);//id
//$("#text_malla").val(data.malla);//id
/////////
$("#text_Sescion").val(data.Sescion);
$("#text_Periodo").val(data.Periodo);
$("#text_OpcionesRegistro ").val(data.OpcionesRegistro);
$("#text_Asesor").val(data.Asesor);
$("#text_dateInscription").val(data.dateInscription);
$("#text_CodigoPromocion").val(data.CodigoPromocion);
$("#text_Archivador").val(data.Archivador);
$("#text_ComoNosConocio").val(data.ComoNosConocio);
$("#text_RazonesInscribirse").val(data.RazonesInscribirse);
$("#text_Observaciones").val(data.Observaciones);

//alls methods 
 Listar_combo_Paises(data.PaisNacimiento);
Listar_combo_MallaCuricular(data.Programa);
Listar_combo_ProgramaEscolar(data.malla);
Get_Options(data.id);

})
}


function ActiontonEvents(id){
var html = '';
html +=  "<div class='nav-item dropdown' style='background: #e1e8e9'>";
html +=  "<a class='nav-link dropdown-toggle' data-toggle='dropdown'  role='button' aria-haspopup='true' aria-expanded='false'>Acciones</a>";
html +=  "<div class='dropdown-menu' x-placement='bottom-start' style='margin-top: 220px;' >";
html +=  "<a class='dropdown-item' onclick = 'Edit_User("+id+")' ><em class='fa fa-pencil-square-o' aria-hidden='true'></em>Editar Estudiante</a>";
html +=  "<a class='dropdown-item' href='#'><em class='fa fa-question-circle' aria-hidden='true'></em>Recor Académico</a>";
html +=  "<a class='dropdown-item' href='#'><em class='fa fa-question-circle' aria-hidden='true'></em>Mensaje</a>";
html +=  "<a class='dropdown-item' href='#'><em class='fa fa-question-circle' aria-hidden='true'></em>Inscribir otra carrera o modalidad</a>";
html +=  "<a class='dropdown-item' href='#'><em class='fa fa-question-circle' aria-hidden='true'></em>Cambi de sede</a>";
html +=  "<a class='dropdown-item' href='#'><em class='fa fa-question-circle' aria-hidden='true'></em>Desabilitar para matricularce</a>";
html +=  "<a class='dropdown-item' href='#'><em class='fa fa-question-circle' aria-hidden='true'></em>Matrícula</a>";
html +=  "<a class='dropdown-item' href='#'><em class='fa fa-question-circle' aria-hidden='true'></em>Estudio, Idioma</a>";
html +=  "<a class='dropdown-item' href='#'><em class='fa fa-question-circle' aria-hidden='true'></em>Subir Foto</a>";
html +=  "<a class='dropdown-item' href='#'><em class='fa fa-question-circle' aria-hidden='true'></em>´Documentos</a>";
html +=  "<a class='dropdown-item' href='#'><em class='fa fa-question-circle' aria-hidden='true'></em>Inpreción</a>";
html +=  "<a class='dropdown-item' href='#'><em class='fa fa-question-circle' aria-hidden='true'></em>Crrera y malla</a>";
html +=  "</div>";
html +=  "</div>";
  return html;
}





function Buscar() {
    var tabla = document.getElementById('htmlTable');
    var busqueda = document.getElementById('BuscadorFilter').value.toLowerCase();
    var cellsOfRow = "";
    var found = false;
    var compareWith = "";
    for (var i = 1; i < tabla.rows.length; i++) {
        cellsOfRow = tabla.rows[i].getElementsByTagName('td');
        found = false;
        for (var j = 0; j < cellsOfRow.length && !found; j++) {
            compareWith = cellsOfRow[j].innerHTML.toLowerCase(); if (busqueda.length == 0 || (compareWith.indexOf(busqueda) > -1)) {
                found = true;
            }
        }
        if (found) {
            tabla.rows[i].style.display = '';
        } else {
            tabla.rows[i].style.display = 'none';
        }
    }
}





async function Listar_combo_MallaCuricular( id) {
 var identi='';var nameCombo="--seleccione--";
 $.ajax({
  "url": "../Controller/inscriptionController/GetMallaCurricularContoller.php",
  type: 'POST'
}).done(function(resp) {
 var data = JSON.parse(resp);
 var cadena = "";
 if (data.length > 0) {
   temturno=data;
   cadena += "<option value='" + identi+ "'>" + nameCombo + "</option>";
   for (var i = 0; i < data.length; i++) {
    data[i][0]==id ? cadena += "<option value='" + data[i][0] + "' selected>" + data[i][1] + "</option>"
    : cadena += "<option value='" + data[i][0] + "'>" + data[i][1] + "</option>"; ;
    
  }
  $("#text_malla").html(cadena);

} else {
 cadena += "<option value=''>NO SE ENCONTRO NINGUN MALLA</option>";
 $("#text_malla").html(cadena);

}

})
}

async function Listar_combo_ProgramaEscolar(id) {
 var identi='';var nameCombo="--seleccione--";
 $.ajax({
  "url": "../Controller/inscriptionController/getProgramaController.php",
  type: 'POST'
}).done(function(resp) {
 var data = JSON.parse(resp);
 var cadena = "";
 if (data.length > 0) {
   temturno=data;
   cadena += "<option value='" + identi+ "'>" + nameCombo + "</option>";
   for (var i = 0; i < data.length; i++) {

    data[i][0]==id ? cadena += "<option value='" + data[i][0] + "' selected>" + data[i][1] + "</option>"
    : cadena += "<option value='" + data[i][0] + "'>" + data[i][1] + "</option>"; ;
    
  }
  $("#text_Programa").html(cadena);

} else {
 cadena += "<option value=''>NO HAY PROGRAMA ACTIVOS</option>";
 $("#text_Programa").html(cadena);

}

})
}


async function Listar_combo_Paises(id) {
 var identi='';var nameCombo="--seleccione--";
 $.ajax({
  "url": "../Controller/inscriptionController/getPaisesController.php",
  type: 'POST'
}).done(function(resp) {
 var data = JSON.parse(resp);
 var cadena = "";
 if (data.length > 0) {
   temturno=data;
   cadena += "<option value='" + identi+ "'>" + nameCombo + "</option>";
   for (var i = 0; i < data.length; i++) {
    
    data[i][0]==id ? cadena += "<option value='" + data[i][0] + "' selected>" + data[i][1] + "</option>"
    : cadena += "<option value='" + data[i][0] + "'>" + data[i][1] + "</option>"; ;
    
  }
  $("#text_PaisNacimiento").html(cadena);
   $("#text_PaisResidencia").html(cadena);

} else {
 cadena += "<option value=''>NO HAY PAISES REGISTRADOS</option>";
 $("#text_PaisNacimiento").html(cadena);
  $("#text_PaisResidencia").html(cadena);

}

})
}


var options=[
    {"tipo": " Habilitado para la matricual1."},
    {"tipo": " Condicionado."},
    {"tipo": " Certificado de estudios."},
    {"tipo": " Fotos."},
    {"tipo": " Rindió examen SNNA."},
    {"tipo": " Rindio Examen ingreso en la institución."},
    {"tipo": " Sertificado sanguineo."},
    {"tipo": " Silabos."},
    {"tipo": " Titulo.        "},
    {"tipo": " Acta de grado."},
    {"tipo": " Partida de nacimiento."},
    {"tipo": " Certificados de Antecedentes."},
    {"tipo": " Papeleta votación."},
    {"tipo": " Planilla servicio básico."},
    {"tipo": " Documentos Homologación."},
    {"tipo": " Trnasferencia otra IES."},
    {"tipo": " Copia de licencia."},
    {"tipo": " Cédula."},
    {"tipo": " Certificado Salud."},
    {"tipo": " Transcript."},
];

function Componet_Options(){
  $('#idchebokoptions').html("");
var html = '';

 html += "<div class='row'>";
  $.each(options, function(i, item) {
   
      html += "<div class='col-md-3'>";
      html += "<div class='toggle-flip '>";
      html += "<label class='alin_global'>"+item.tipo+"&nbsp;";
      html += "<input type='checkbox' id='chekoptions'>";
      html += "<span class='flip-indecator' id='spanid' data-toggle-on='SI' data-toggle-off='NO'></span>";

      html += "</label>";
      html += "</div>";
      html += "</div>";
});
   html += "</div>";

$('#idchebokoptions').append(html);

}


function Componet_Options_data(data){
  $('#idchebokoptions').html("");
var html = '';
 html += "<div class='row'>";
  $.each(data, function(i, item) {
   

      html += "<div class='col-md-3'>";
      html += "<div class='toggle-flip '>";
      html += "<label class='alin_global'>"+options[i]['tipo']+"&nbsp;";

      item.stade==1? html += "<input type='checkbox' id='chekoptions' checked><span class='flip-indecator' id='spanid' data-toggle-on='SI' data-toggle-off='NO'></span>":
      html += "<input type='checkbox' id='chekoptions'><span class='flip-indecator' id='spanid' data-toggle-on='SI' data-toggle-off='NO'></span>";
      html += "</label>";
      html += "</div>";
      html += "</div>";
});
   html += "</div>";

$('#idchebokoptions').append(html);

}


function Get_Options(id) {

 $.ajax({
  "url": "../Controller/inscriptionController/GetOptionsContoller.php",
  type: 'POST',
  data:{id:id}
}).done(function(resp) {
 var data = JSON.parse(resp);
 var cadena = "";
 if (data.length > 0) {
  console.log(data.length );
  Componet_Options_data(data); 
} else {
Componet_Options();

}

})
}



function validation(){
$("#fromIncripts input[data='requered']").each(function (index, element){
var input=element;
var id = input.getAttribute("id");
if($("#"+id).val()=='') {
 input.classList.add('form-control', 'is-invalid');//booleam=true;
}});

$("#fromIncripts select[data='selectrequiered']").each(function (index, element){
var select=element;
var id = select.getAttribute("id");
if($("#"+id).val()=='') {
 select.classList.add('form-control', 'is-invalid');//booleam=true;
}});

var chkAsientos = document.getElementsByClassName("is-invalid");
    var asientos = [];
    for(i=0;i<chkAsientos.length;i++){
       
       asientos.push(chkAsientos[i]);
    }
       console.log(asientos);  
  
if (asientos.length==0) {return true;}else {
  return false;
}
          
}

 //VALIDAR INPUT
 function updateValue(e) {
  //capturando todo el input del evento
   var input=e.target
 textContent = e.target.value;
 input.classList.add('form-control', 'is-invalid');
 //Input string
  if(textContent.length>=1){
    input.classList.replace('is-invalid', 'form-control');
    input.classList.add('form-control', 'is-valid');
  }
  return;
  //input numero
  //id del input
   var id = e.target.getAttribute("id");
} 

function ValidadSelect(e){
   var select =e.target
     textContent = e.target.value;
     if (textContent=='') {
       select.classList.add('form-control', 'is-invalid');
     }else{
      select.classList.replace('is-invalid', 'form-control');
      select.classList.add('form-control', 'is-valid');
     }

}


