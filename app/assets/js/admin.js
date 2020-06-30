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

    $('#atts-btn').on('click',function(){
        $('.default-form').hide();
        $('#forms-att-area').fadeIn('fast');
    });

    







    $('#criar').on('submit', function(event){
        event.preventDefault();

        var keyname = $('#keyname-criar').val();
        var nome = $('#nome-projeto-criar').val();
        var resumo = $('#resumo-projeto-criar').val();
        var desc = $('#descricao-criar').val();
        var tags = $('#tags-criar').val();

        if(keyname.length <= 1){
            alert("Todos os campos são obrigatórios!");
        }else{
            $.ajax({
                method: 'POST',
                url: base_url+'ajax/projeto',
                dataType: 'json',
                data: {keyname: keyname, nome: nome, resumo: resumo, desc: desc, tags: tags, action:'criar'},
                success: function(json){
                    if(json.msg === 'done'){
                        alert('Projeto criado com sucesso!');
                        location.reload();
                    }else{
                        alert('Houve um erro na criação, verifique o código e tente novamente!');
                    }
                }
            })
        }
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
                $('#resumo-projeto-editar').val(json.resumo);
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
        var resumo = $('#resumo-projeto-editar').val();
        var descricao = $('#descricao-editar').val();
        var tags = $('#tags-editar').val();

        if(id === '0'){
            return;
        }else{

            $.ajax({
                method: 'POST',
                url: base_url+'ajax/projeto',
                dataType: 'json',
                data: {id: id, keyname: keyname, nome: nome, resumo: resumo, desc: descricao, tags: tags, action: 'editar'},
                success: function(json){
                    if(json.msg === 'done'){
                        alert('Projeto editado com sucesso!');
                        location.reload();
                    }else{
                        alert('Houve um erro na criação, verifique o código e tente novamente!');
                    }
                }
            })

        }
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






    $('#btn-att-criar').on('click', function(){
        $('.default-att-form').hide();
        $('#form-att-criar').fadeIn('fast');
    });

    $('#btn-att-editar').on('click', function(){
        $('.default-att-form').hide();
        $('#form-att-editar').fadeIn('fast');
    });

    $('#btn-att-excluir').on('click', function(){
        $('.default-att-form').hide();
        $('#form-att-excluir').fadeIn('fast');
    });

    $('#form-att-criar').on('submit', function(event){
        event.preventDefault();

        var id_projeto = $("option:selected", '#criar-att-select').val()
        var titulo = $('#titulo-att-criar').val();
        var desc = $('#desc-att-criar').val();

        var date = $('#data-att-criar').val();
        var date = date.split('-');
        var datastr = date[2]+'-'+date[1]+'-'+date[0];

        var hora = $('#time-att-criar').val();

        
        $.ajax({
            method: 'POST',
            url: base_url+'ajax/projeto',
            dataType: 'json',
            data: {action:'criar-att', id_projeto: id_projeto, titulo: titulo, descricao: desc, date: datastr, hora: hora},
            success: function(json){
                if(json.msg === 'done'){
                    alert('Atualização criada com sucesso!');
                    location.reload();
                }else{
                    alert('Houve um erro na criação, verifique o código e tente novamente!');
                }
            }
        })
    })





    $('#editar-att-select').on('change', function(){
        var optionSelected = $("option:selected", this).val();

        $.ajax({
            method: 'POST',
            url: base_url+'ajax/projeto',
            dataType: 'json',
            data: {id: optionSelected, action:'get_to_edit-att'},
            success: function(json){
                var date = json.data_att.split('-');
                datestr = date[2]+'-'+date[1]+'-'+date[0];

                $('#project-name-att').val(json.nome_projeto);
                $('#titulo-att-editar').val(json.titulo);
                $('#desc-att-editar').val(json.descricao);
                $('#data-att-editar').val(datestr);
                $('#time-att-editar').val(json.hora);
            }
        })
    });


    $('#form-att-editar').on('submit', function(event){
        event.preventDefault();

        var id_att = $("option:selected", '#editar-att-select').val()
        var titulo = $('#titulo-att-editar').val();
        var desc = $('#desc-att-editar').val();

        var date = $('#data-att-editar').val();
        var date = date.split('-');
        var datastr = date[2]+'-'+date[1]+'-'+date[0];

        var hora = $('#time-att-editar').val();

        
        $.ajax({
            method: 'POST',
            url: base_url+'ajax/projeto',
            dataType: 'json',
            data: {action:'editar-att', id_att: id_att, titulo: titulo, descricao: desc, date: datastr, hora: hora},
            success: function(json){
                if(json.msg === 'done'){
                    alert('Atualização editada com sucesso!');
                    location.reload();
                }else{
                    alert('Houve um erro na criação, verifique o código e tente novamente!');
                }
            }
        })
    })







    $('#form-att-excluir').on('submit', function(event){
        event.preventDefault();

        var id = $("option:selected", '#att-excluir-select').val()

        if(id === '0'){
            return;
        }
        
        $.ajax({
            method: 'POST',
            url: base_url+'ajax/projeto',
            dataType: 'json',
            data: {id: id, action: 'deletar-att'},
            success: function(json){
                if(json.msg === 'done'){
                    alert('Atualizacão deletada com sucesso!');
                    location.reload();
                }else{
                    alert('Houve um erro na criação, verifique o código e tente novamente!');
                }
            }
        })
    });
});