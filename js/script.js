$(document).ready(() =>{
    $('#form-registro').hide();
    $('#form-acceso').show();

    $('#registro').click(() =>{
        $('#form-registro').fadeIn(500);
        $('#form-acceso').hide();
    })

    $('#acceder').click(() =>{
        $('#form-registro').hide();
        $('#form-acceso').fadeIn(500);
    })

})

