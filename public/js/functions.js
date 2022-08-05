//Espera a que termine de cargar
$(document).ready(function(){
    //Crea un ajax
    $.ajax({
        type: "GET",
        url: "/api/getUsuarios",
        dataType: "json",
        success: function(response){
            //Crea una card para cada usuario
            console.log(response);
            for(var i = 0; i < response.length; i++){
                var col= $("<div>").addClass("col-md-4 card-user");
                col.attr("id", response[i].id);
                var card = $("<div>").addClass("card");
                //var img = $("<img>").addClass("card-img-top").attr("src", "https://picsum.photos/200/300");
                var cardBody = $("<div>").addClass("card-body");
                var cardTitle = $("<h5>").addClass("card-title").text(response[i].name);
                var cardText = $("<p>").addClass("card-text").text(response[i].ocupation );
                var cardLink = $("<p>").addClass("card-text").text(response[i].area);
                cardBody.append(cardTitle, cardText, cardLink);
                //card.append(img, cardBody);
                card.append(cardBody);
                col.append(card);
                $("#usuarios").append(col);
            }

        }
    });

    $(document).on("click", ".card-user", function(){
        $("#interes").empty();
        var id = $(this).attr("id");
        var titulo = $(`#${id} .card-title`).text();
        $('#nombre').text(titulo);
        var area = $(`#${id} .card-text`).text();
        $('#area').text(area);
        console.log(id);
        $.ajax({
            type: 'GET',
            url: '/api/getInformacion/'+id,
            dataType: 'json',
            success: function(response){
                console.log(response);
                $('#Title-information').text(response.title);
                $('#text-information').text(response.description);                
                var interests = response.interesting.split(",");                
                interests.forEach( interest => {
                    var interestet = $("<a>").text(interest);
                    interestet.addClass('btn btn-outline-secondary btn-block');
                    $('#interes').append(interestet);
                });
            },
            error: function(error){
                console.log(error);
            }
        });
    });
});