(function($,W,D){
    var JQUERY4U = {};
    JQUERY4U.UTIL = {
        setupFormValidation: function(){

            $("#formularioGasto").validate({
                rules: {
                    idCategoria: "required",
                    dateExpense: "required",
                    merchantExpense: "required",
                    amountExpense: "required",
                    descriptionExpense: "required",
                }, 
                messages: {
                    idCategoria: "Seleccione un registro.",
                    dateExpense: "Seleccione una fecha.",
                    merchantExpense: "Ingrese nombre de Comercio.",
                    amountExpense: "Ingrese el monto del Gasto.",
                    descriptionExpense: "Ingrese una descripción.",
                },
                submitHandler: function(form) {                 
                    insertarGasto();
                }
            });
        }
    }    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);
function insertarGasto(){
    var formData = new FormData(document.getElementById("formularioGasto"));        
    formData.append("opcion", 1);
    $.ajax({
    url : "../controler/ctrGasto.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        $('.panel-collapse').collapse('hide');
        $("#mensaje").html(data);
        document.getElementById("idCategoria").value = "";
        document.getElementById("dateExpense").value = "";
        document.getElementById("merchantExpense").value = "";
        document.getElementById("amountExpense").value = "";
        document.getElementById("descriptionExpense").value = "";   
        $('#lista').load("../interface/fGasto/fListaGastos.php");
    });     
}  

function eliminarGasto(idExpense){
    confirmar = confirm("¿Deseas eliminar el dato seleccionado?"); 
    if (confirmar) {
        var formData = new FormData(document.getElementById("lista"));        
        formData.append("opcion", 2);
        $.ajax({
        url : "../controler/ctrGasto.php?idExpense="+idExpense,
        type : "post",
        dataType : "html",
        data : formData,
        cache : false,
        contentType : false,
        processData : false
        }).done(function(data) {
            $('#lista').load("../interface/fGasto/fListaGastos.php");
        }); 
    }
}

function paginaModificarGasto(idExpense){          
    $('#datos').load("../interface/fGasto/fModificarGasto.php?idExpense="+idExpense);
}

function atras(){
    $('#datos').load("../interface/fGasto/fInsertarGasto.php");
}

(function($,W,D){
    var JQUERY4U = {};
    JQUERY4U.UTIL = {
        setupFormValidation: function(){

            $("#formularioModificarGasto").validate({
                rules: {
                    idCategoria: "required",
                    dateExpense: "required",
                    merchantExpense: "required",
                    amountExpense: "required",
                    descriptionExpense: "required",
                }, 
                messages: {
                    idCategoria: "Seleccione un registro.",
                    dateExpense: "Seleccione una fecha.",
                    merchantExpense: "Ingrese nombre de Comercio.",
                    amountExpense: "Ingrese el monto del Gasto.",
                    descriptionExpense: "Ingrese una descripción.",
                },
                submitHandler: function(form) {                 
                    modificarGasto();
                }
            });
        }
    }    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);
function modificarGasto(){
    var formData = new FormData(document.getElementById("formularioModificarGasto"));        
    formData.append("opcion", 3);
    $.ajax({
    url : "../controler/ctrGasto.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        $('#datos').load("../interface/fGasto/fInsertarGasto.php");
        $('.panel-collapse').collapse('hide');
        $("#mensaje").html(data);
        $('#lista').load("../interface/fGasto/fListaGastos.php");
    });     
}

/*filtrado de tablas*/
$(document).ready(function () {
    (function ($) {

        $('#datosGasto').keyup(function () {
            
            var rex = new RegExp($(this).val(), 'i');
            $('#Gasto1 tr').hide();
            $('#Gasto1 tr').filter(function () {
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