(function($,W,D){
    var JQUERY4U = {};
    JQUERY4U.UTIL = {
        setupFormValidation: function(){

            $("#formularioCategoria").validate({
                rules: {
                    nombreCategoria: "required"
                }, 
                messages: {
                    nombreCategoria: "Debe ingresar el nombre."
                },
                submitHandler: function(form) {                 
                    insertarCategoria();
                }
            });
        }
    }    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);
function insertarCategoria(){
    var formData = new FormData(document.getElementById("formularioCategoria"));        
    formData.append("opcion", 1);
    $.ajax({
    url : "../controler/ctrCategoria.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        $('.panel-collapse').collapse('hide');
        $("#mensaje").html(data);
        document.getElementById("nombreCategoria").value = "";
        $('#lista').load("../interface/fCategoria/fListaCategorias.php");
    });     
}   

function eliminarCategoria(idCategoria){
    confirmar = confirm("¿Deseas eliminar el dato seleccionado?"); 
    if (confirmar) {
        var formData = new FormData(document.getElementById("lista"));        
        formData.append("opcion", 2);
        $.ajax({
        url : "../controler/ctrCategoria.php?idCategoria="+idCategoria,
        type : "post",
        dataType : "html",
        data : formData,
        cache : false,
        contentType : false,
        processData : false
        }).done(function(data) {
            $('#lista').load("../interface/fCategoria/fListaCategorias.php");
        }); 
    }
}

function paginaModificarCategoria(idCategoria){          
    $('#datos').load("../interface/fCategoria/fModificarCategoria.php?idCategoria="+idCategoria);
}

function atras(){
    $('#datos').load("../interface/fCategoria/fInsertarCategoria.php");
}

(function($,W,D){
    var JQUERY4U = {};
    JQUERY4U.UTIL = {
        setupFormValidation: function(){

            $("#formularioModificarCategoria").validate({
                rules: {
                    nombreCategoria: "required"
                }, 
                messages: {
                    nombreCategoria: "Debe ingresar el nombre."
                },
                submitHandler: function(form) {                 
                    modificarCategoria();
                }
            });
        }
    }    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);
function modificarCategoria(){
    var formData = new FormData(document.getElementById("formularioModificarCategoria"));        
    formData.append("opcion", 3);
    $.ajax({
    url : "../controler/ctrCategoria.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        $('#datos').load("../interface/fCategoria/fInsertarCategoria.php");
        $('.panel-collapse').collapse('hide');
        $("#mensaje").html(data);
        $('#lista').load("../interface/fCategoria/fListaCategorias.php");
    });     
}

/*filtrado de tablas*/
$(document).ready(function () {
    (function ($) {

        $('#datosCategoria').keyup(function () {
            
            var rex = new RegExp($(this).val(), 'i');
            $('#categoria1 tr').hide();
            $('#categoria1 tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));
      (function ($) {

        $('#datosSubCategoria').keyup(function () {
            
            var rex = new RegExp($(this).val(), 'i');
            $('.subcategoria tr').hide();
            $('.subcategoria tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

});