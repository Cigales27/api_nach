//Espera a que termine de cargar
$(document).ready(function(){
    //Crea un ajax
    $.ajax({
        //Peticion ajax
        type: "GET",
        //Url a la que se enviara la peticion
        url: "127.0.0.1:8000/api/getUsuarios",
        //Tipo de datos que se espera en la respuesta
        dataType: "json",
        //Si la peticion se realizo correctamente
        success: function(response){
            //Recorre el array
            console.log(response);
        }
    });
});