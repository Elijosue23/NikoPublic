var listItems=[] ;
function Get_ModulosRequest(){
  $.ajax({
    url:'../Controller/inscriptionController/getModulosController.php',
    type:'POST'
   
  }).done(function(resultado){
    var data = JSON.parse(resultado);
    var data=data.data;
    if (data?.length!=0) {
    Listar_Data_Modulos(data);
  
   }
   else{
   $("#component_Search").html('<h5>No se encontraron Módulos registrados</h5>');
  }
})
}

function Listar_Data_Modulos(data){
   const result = document.getElementById('component_Search');
   result.innerHTML = ''
   data.forEach(item => {
    const div = document.createElement('div')
    div.className="col-md-5 col-lg-3";
    listItems.push(div)
    div.innerHTML = `
    <div class=" componetSearch" onclick="Selec_ElementActive(${item.idmodul})">
    <div class="tile">
    <div class="tile-body">
    <div style="text-align: center;justify-content: center;">
    <img src= "../App/img/${item.imgmodulo}" style="width: 65px;height: 65px">
    </img>
    </div>
    <h5 style="text-align: center;">
    <strong>
    ${item.namemoduls}
    </strong>
    <small class="form-text text-muted">
    ${item.description}.
    </small>
    </h5>
    </div>
    </div>
    </div>
    `
    result.appendChild(div)
})

}

function filterData(searchTerm) {
    listItems.forEach(item => {
        if(item.innerText.toLowerCase().includes(searchTerm.toLowerCase())) {
            item.classList.remove('hide_search_elemt')
        } else {
            item.classList.add('hide_search_elemt')
        }
    })
}

function Selec_ElementActive(item){

$("#Contenido_view").load("InscriptionView/InscriptionVew.php?modulo="+item);

// window.location = "/InscriptionView/InscriptionVew.php?modulo="+item;  
}

function black_inicio(){
    Get_ModulosRequest();
  $("#Contenido_view").load("../../View/Login/login.php");
// window.location = "/";  
}





