//Espera a que termine de cargar
$(document).ready(function() {
    //Esconde el formulario de edicion
    $('#createInformacion').hide();
    $('#updateInformation').hide();

    $.ajax({
        type: "GET",
        url: "/api/getUsuarios",
        dataType: "json",
        success: function(response) {
            console.log(response);
            response.forEach(usuario => {
                var usuario = $('<option>').text(usuario.name);
                usuario.attr('value', usuario.id);

                var copia = usuario.clone();

                $('#selectionUser').append(copia);
                $('#user_id').append(usuario);
                $('.error').text('');
            });
        },
        error: function(error) {
            $('.error').text('Ocurrio un error');
            console.log(error);
        }
    });

    $('.showcrateuser').click(function() {
        $('#createUser').show();
        $('#updateInformation').hide();
        $('#createInformacion').hide();
    })
    $('.showeditinuser').click(function() {
        $('#updateInformation').show();
        $('#createUser').hide();
    })

    $('.showcreateinformation').click(function() {
        $('#createInformacion').show();
        $('#createUser').hide();
        $('#updateInformation').hide();

    });

    $('.showeditinformation').click(function() {
        $('#updateInformation').show();
        $('#createUser').hide();
        $('#createInformacion').hide();
    });


    $('#crearUsuario').click(function() {
        var data = $('#createUser').serializeArray();
        console.log(data);
        $.ajax({
            type: 'POST',
            url: '/api/createUsuario',
            data: data,
            dataType: 'json',
            success: function(response) {
                console.log(response);
                $('#name').val('');
                $('#ocupation').val('');
                $('#area').val('');
                $('#user_id').val('');
                location.reload();
                $('.error').text('');
            }
        });
    });

    $('#createInformation').click(function() {
        var data = $('#createInformacion').serializeArray();
        $.ajax({
            type: 'POST',
            url: '/api/saveInformacion',
            data: data,
            dataType: 'json',
            success: function(response) {
                console.log(response);
                $('#name').val('');
                $('#ocupation').val('');
                $('#area').val('');
                $('#user_id').val('');
                location.reload();
                $('.error').text('');
            },
            error: function(error) {
                $('.error').text('Ocurrio un error');
                console.log(error);
            }
        })
    });

    $('#updateInformacion').click(function() {
        var data = $('#updateInformation').serializeArray();
        $.ajax({
            type: 'POST',
            url: '/api/updateInformacion',
            data: data,
            dataType: 'json',
            success: function(response) {
                console.log(response);
                $('#name').val('');
                $('#ocupation').val('');
                $('#area').val('');
                $('#user_id').val('');
                $('.error').text('');
                location.reload();
            },
            error: function(error) {
                $('.error').text('Ocurrio un error');
                console.log(error);
            }
        })
    });
});