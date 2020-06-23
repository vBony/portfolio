$(document).ready(function(){
    var base_url = 'http://localhost/portfolio/';

    $('#criar-btn').on('click',function(){
        $('.default-form').hide();
        $('#criar').fadeIn('fast');
    });

    $('#editar-btn').on('click',function(){
        $('.default-form').hide();
        $('#editar').fadeIn('fast');
    });

    $('#excluir-btn').on('click',function(){
        $('.default-form').hide();
        $('#excluir').fadeIn('fast');
    });

    $('#ver-btn').on('click',function(){
        $('.default-form').hide();
        $('#ver').fadeIn('fast');
    });







    $('#criar').on('submit', function(event){
        event.preventDefault();

        var keyname = $('#keyname-criar').val();
        var nome = $('#nome-projeto-criar').val();
        var desc = $('#descricao-criar').val();
        var tags = $('#tags-criar').val();

            $.ajax({
                method: 'POST',
                url: base_url+'ajax/projeto',
                dataType: 'json',
                data: {keyname: keyname, nome: nome, desc: desc, tags: tags, action:'criar'},
                success: function(json){
                    if(json.msg === 'done'){
                        alert('Projeto criado com sucesso!');
                        location.reload();
                    }else{
                        alert('Houve um erro na criação, verifique o código e tente novamente!');
                    }
                }
            })
    })







    $('#editar-select').on('change', function(){
        var optionSelected = $("option:selected", this).val();

        $.ajax({
            method: 'POST',
            url: base_url+'ajax/projeto',
            dataType: 'json',
            data: {id: optionSelected, action:'get_to_edit'},
            success: function(json){
                $('#keyname-editar').val(json.keyname);
                $('#nome-projeto-editar').val(json.nome);
                $('#descricao-editar').val(json.texto);
                $('#tags-editar').val(json.tags);
            }
        })
    });



    $('#editar').on('submit', function(event){
        event.preventDefault();

        var keyname = $('#keyname-editar').val();
        var id = $("option:selected", '#editar-select').val()
        var nome = $('#nome-projeto-editar').val();
        var descricao = $('#descricao-editar').val();
        var tags = $('#tags-editar').val();

        if(id === '0'){
            return;
        }

        $.ajax({
            method: 'POST',
            url: base_url+'ajax/projeto',
            dataType: 'json',
            data: {id: id, keyname: keyname, nome: nome, desc: descricao, tags: tags, action: 'editar'},
            success: function(json){
                if(json.msg === 'done'){
                    alert('Projeto editado com sucesso!');
                    location.reload();
                }else{
                    alert('Houve um erro na criação, verifique o código e tente novamente!');
                }
            }
        })
    })





    $('#excluir').on('submit', function(event){
        event.preventDefault();

        var id = $("option:selected", '#excluir-select').val()

        if(id === '0'){
            return;
        }
        
        $.ajax({
            method: 'POST',
            url: base_url+'ajax/projeto',
            dataType: 'json',
            data: {id: id, action: 'deletar'},
            success: function(json){
                if(json.msg === 'done'){
                    alert('Projeto deletado com sucesso!');
                    location.reload();
                }else{
                    alert('Houve um erro na criação, verifique o código e tente novamente!');
                }
            }
        })
    });


    $('#ver').on('submit', function(event){
        event.preventDefault();

        var keyname = $("option:selected", '#ver-select').val();

        if(keyname === '0'){
            return;
        }else{
            window.open(base_url+'projeto/n/'+keyname); 
        }
    });
});