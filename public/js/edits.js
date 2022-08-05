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

    $('#crearUsuario').click(function(){
        var name = $('#name').val();
        var ocupation = $('#ocupation').val();
        var area = $('#area').val();
        var user_id = $('#user_id').val();
        var data = {
            name: name,
            ocupation: ocupation,
            area: area,
            user_id: user_id
        };
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