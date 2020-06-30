$(document).ready(function(){
    var base_url = 'http://localhost/portfolio/';

    $('#email-sh').mouseover(function() {
        $('#email-icon').css('color', '#1F88DD');
      })
      .mouseout(function() {
        $('#email-icon').css('color', '#fff');
    });  
    
    $('#tel-sh').mouseover(function() {
        $('#tel-icon').css('color', '#1F88DD');
      })
      .mouseout(function() {
        $('#tel-icon').css('color', '#fff');
    });

    $('#adr-sh').mouseover(function() {
        $('#adr-icon').css('color', '#1F88DD');
      })
      .mouseout(function() {
        $('#adr-icon').css('color', '#fff');
    });

    $('nav a').click(function(event){
      event.preventDefault();
      var id = $(this).attr('href');
      var targetOffset = $(id).offset().top;

      $('html, body').animate({
        scrollTop: targetOffset
      }, 500);
    }); 

    
    $('.btns-project').on('click', function(){
      var keyname = $(this).attr('data-attr');
      
      window.open(base_url+'projeto/'+keyname);
    });


    $('.default-input').on('click',function(){
      $(this).removeClass('error-input');
      $('.error-msg').text('');
    })

    $('#enviar-email').on('submit', function(event){  
      event.preventDefault();
      var fname = $('#f_name').val();
      var lname = $('#l_name').val();
      var namevalid = false;

      var email = $('#email').val();
      var emailvalid = false;

      var msg = $('#msg').val();
      var msgvalid = false;

      var captcha = grecaptcha.getResponse();
      var captchavalid = false;


      if(fname.length < 2 || lname.length < 2){
        $('.error-msg.name').text('Nome inválido');
        $('#f_name, #l_name').addClass('error-input');
      }else{
        $('.error-msg.name').text('');
        $('#f_name, #l_name').removeClass('error-input');
        namevalid = true;
      }

      if(email.length < 5 || email.indexOf('@') === -1 || email.indexOf('.') === -1 || email.indexOf(' ') != -1){
        $('.error-msg.email').text('Email inválido');
        $('#email').addClass('error-input');
      }else{
        $('.error-msg.email').text('');
        $('#email').removeClass('error-input');
        emailvalid = true;
      }

      if(msg.length < 5){
        $('.error-msg.txt').text('Digite uma mensagem maior');
        $('#msg').addClass('error-input');
      }else{
        $('.error-msg.txt').text('');
        $('#msg').removeClass('error-input');
        msgvalid = true;
      }

      if(captcha === ''){
        $('.error-msg.captcha').text("Confirme que você não é um robô clicando no reCaptcha acima");
      }else{
          $('.error-msg.captcha').text("");
          captchavalid = true;
      }

      if(namevalid === true && emailvalid === true && msgvalid === true && captchavalid === true){
        $.ajax({
          method: 'POST',
          url: base_url+'ajax/home',
          dataType: 'json',
          data: {fname: fname, lname: lname, email: email, msg: msg, captcha: captcha},
          success: function(json){
            if(json.msg === 'done'){
              
              Swal.fire({
                icon: 'success',
                title: 'Mensagem enviada com sucesso!',
                text: 'Obrigado, em breve você será retornado :)',
                confirmButtonText: 'Ok'
              })

              
            }else if(json.msg === "error-captcha"){
              alert("Acesso negado pelo reCaptcha!");
            }
          }
        });
      }
    });
});