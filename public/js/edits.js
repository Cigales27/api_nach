//Espera a que termine de cargar
$(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "/api/getUsuarios",
        dataType: "json",
        success: function(response){
            console.log(response);
            response.forEach( usuario => {
                var usuario = $('<option>').text(usuario.name);
                usuario.attr('value', usuario.id);
                $('#user_id').append(usuario);
            } );
        },
        error: function(error){
            console.log(error);
        }
    });

    //Esconde el segundo hijo de la etiqueta body
    $('body > div:nth-child(2)').hide();
    //Esconde el tercer hijo de la etiqueta body
    $('body > div:nth-child(3)').hide();
    //Esconde el cuarto hijo de la etiqueta body
    $('body > div:nth-child(4)').hide();

    $('#crearUsuario').click(function(){
        //Create un json con el formulario #createUser
        var data = $('#createUser').serializeArray();
        console.log(data);
        $.ajax({
            type: 'POST',
            url: '/api/createUsuario',
            data: data,
            dataType: 'json',
            success: function(response){
                console.log(response);
                $('#name').val('');
                $('#ocupation').val('');
                $('#area').val('');
                $('#user_id').val('');
                location.reload();
            }
        });
    });
});