$(document).ready(function(){
    var base_url = 'http://localhost/portfolio/'

    $('#btn-voltar').on('click', function(){
        document.location.href = base_url;
    })

    $('#logo').on('click', function(){
        document.location.href = base_url;
    })
});