/* METODO DE LOG IN */

$(document).ready(function(){

	$("#inicioSesion").validate({
        rules: {
            user: { required: true, minlength: 5, maxlength: 50},
            password: { required: true,minlength: 5, maxlength: 50}
        },
        messages: {
            user: "Extención minima de 5 digitos y maxima de 50 para el usuario",
            password: "Extención minima de 5 digitos y maxima de 50 para la contraseña"
        },
        submitHandler: function(form){
           if(usurioExiste()){
           	  form.submit();
           }else{
           	 alert("El usuario o la contraseña son incorrectos");
           }
        }
	});	
});

function usurioExiste(){
    var formData = new FormData(document.getElementById("inicioSesion")); 
    formData.append("opcion",1);
    var existe2 = false;
    var nombre = "";
    $.ajax({
    url : "../../controler/ctrLogin.php",
    type : "post",
    dataType : "html",
    async:false,
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
     var dataJson = eval('(' + data + ')');
     if(dataJson['existe'] == true){
	   	 nombre = dataJson['nombre'];
	     existe2 = dataJson['existe'];   
     }
     if(existe2){
         alert(nombre);
     	var MNombre= document.getElementById('nombre');
     	MNombre.value = nombre;
     }
       
    }); 

     return existe2; 
}