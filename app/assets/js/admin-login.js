$( document ).ready(function(){
    var base_url = 'http://localhost/portfolio/';

    $('#login-form').on('submit', function(event){
        event.preventDefault();

        var email = $('#email').val();
        var senha = $('#senha').val();

        if(email.length < 5 || senha.length < 5){
            return;
        }else{
            $.ajax({
                method: 'POST',
                url: base_url+'ajax/login',
                dataType: 'json',
                data: {email: email, senha: senha},
                success: function(json){
                    if(json.msg === 'email-invalid'){
                        alert('Email inválido!');
                    }else if(json.msg === 'pass-invalid'){
                        alert('Senha inválida!')
                    }else if(json.msg === 'done'){
                        document.location.href = base_url+'admin';
                    }
                }
            })
        }
    })
})