//$(document).ready( function(){

$('.aimer').on('click', function() {
    var clicked = $(this);
    var titre = $(this).parent().find(".champCache").val();
    var artist = $(this).parent().find(".artist").val();
    var user = $(this).parent().find(".user").val();
    var image = $(this).parent().find(".image").val();
    var url = $(this).parent().find(".url").val();

    console.log(url);
      
    $.ajax({
        method: "POST",
        url: 'pouce',
        data: {

            "_token": $('#token').attr('value'),
            'titre': titre,
            'artist': artist,
            'user': user,
            'image': image,
            'url': url
            
        }, // je passe la variable JS
        success: function(msg) {
            //                    console.log(msg);
            //                    $().empty();
            //                    $().append(msg);


        }
    });

});
//});