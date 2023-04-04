function Verificar_login(){
  
    $("#contr_aviso_login").hide();   
    var usuario = $("#txt_usuario").val();
    var contracena = $("#txt_contracena").val();

    if (usuario.length == 0 || contracena.length == 0) {
         $("#contr_aviso_login").show();
         $("#mensajeLogin").html('Ingrese los credenciales');
       return;
    }
       
        $('#input-login').prop('disabled',true);

      $.ajax({
        url:'../../Controller/LoginController/Verificar_UsuarioContoller.php',
        type:'POST',
        data:{ usuario:usuario,contracena:contracena
        }
    }).done(function(request){  
       var data = JSON.parse(request);
        console.log(data.mensaje);
        console.log(data);
        if (data.session) {
          location.reload();
        }
        else{
            $('#input-login').prop('disabled',false);
          
          $("#contr_aviso_login").show();
           $("#mensajeLogin").html(data.mensaje); 
        }

       // XMLHttpRequestAsycn(data);
    })
}



function OpenModalChangePaswoerd(){
  $("#modalChangePasswoed").modal({
        backdrop: 'static',
        keyboard: false
    })
    $(".modal-header").css("background-color", "rgb(224 233 241)");
    document.querySelector('#fromPasswoed').reset();
   
    $('#modalChangePasswoed').modal('show');
}

function Change_password(){
$("#contr_aviso_login").hide();
var passActual = $("#txt_passActual").val();
var passNew = $("#text_passNew").val();
var pasTow = $("#text_twopass").val();


if (passActual?.length==0 || passNew?.length==0 ||pasTow?.length==0) {
  $("#contr_aviso_login").show();
  $("#mensajeLogin").html("Ingrse las Claves !!");
  return;
}
if ( passNew != pasTow) {
  $("#contr_aviso_login").show();
  $("#mensajeLogin").html("Las Claves  Son Diferentes !!");
  return;
}


 $.ajax({
    url:'../Controller/LoginController/Change_PasswordController.php',
    type:'POST',
    data:{ passActual:passActual,passNew:passNew}
   
  }).done(function(resultado){
    console.log(resultado);
    var data = JSON.parse(resultado);
    
    if (data.data>0) {
      $("#susscerAlert").show();
     $("#mensajedeexito").html(data.msg);

    }else{
      
     $("#contr_aviso_login").show();
     $("#mensajeLogin").html(data.msg);

    }
})
}


