<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bony - ADM</title>
    <link rel="stylesheet" href="<?=BASE_URL?>app/assets/frameworks/bootstrap.min.css">
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/frameworks/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/frameworks/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?=BASE_URL?>app/assets/css/admin.css">
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/js/admin.js"></script>
</head>
<body>
    <h2 id="title">Área do administrador - Home <a href="<?=BASE_URL?>admin/logout">Finalizar sessão</a></h1>

    <div id="buttons-area">
    <button type="button" class="btn btn-primary" id="criar-btn">Criar projeto</button>
    <button type="button" class="btn btn-info" id="editar-btn">Editar projeto</button>
    <button type="button" class="btn btn-danger" id="excluir-btn">Excluir projeto</button>
    <button type="button" class="btn btn-success" id="ver-btn">Ver projeto</button>
    <button type="button" class="btn btn-warning" id="atts-btn">Atualizações</button>
    </div>


    <!-- FORM CRIAR -->
    <form method="post" id="criar" class="default-form">
        <div class="form-group">
            <label for="nome-projeto">keyname: </label>
            <input type="text" class="form-control" id="keyname-criar" aria-describedby="emailHelp" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="nome-projeto">Nome do projeto: </label>
            <input type="text" class="form-control" id="nome-projeto-criar" aria-describedby="emailHelp" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="descricao">Descricao: </label>
            <textarea class="form-control" id="descricao-criar" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="descricao">Tags: </label>
            <input type="text" class="form-control" id="tags-criar" autocomplete="off">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary default-btn-submit">Enviar</button>
        </div>

        <span>div .default-subtitle para subtitulos</span><br>
        <span>div .default-paragraph para paragrafos</span>

    </form>


    <!-- FORM EDITAR -->
    <form method="post" id="editar" class="default-form">
        <div class="form-group">
            <label for="nome-projeto">Id do projeto</label>
            <select class="form-control" id="editar-select">
                <option value="0">Nenhum</option>
                <?php foreach($projects as $data) { ?>
                    <option value="<?=$data['id']?>"><?=$data['id']?> - <?=$data['nome']?></option>
                <?php } ?>
            </select>

        </div>

        <div class="form-group">
            <label for="nome-projeto">keyname: </label>
            <input type="text" class="form-control" id="keyname-editar" aria-describedby="emailHelp" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="nome-projeto">Nome do projeto: </label>
            <input type="text" class="form-control" id="nome-projeto-editar" aria-describedby="emailHelp" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="descricao">Descricao: </label>
            <textarea class="form-control" id="descricao-editar" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="descricao">Tags: </label>
            <input type="text" class="form-control" id="tags-editar" autocomplete="off">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info default-btn-submit">Editar</button>
        </div>

        <span>div .default-subtitle para subtitulos</span><br>
        <span>div .default-paragraph para paragrafos</span>
    </form>
    



    <!-- FORM EXCLUIR -->
    <form method="post" id="excluir" class="default-form">
        <div class="form-group">
            <label for="nome-projeto">Id do projeto</label>
            <select class="form-control" id="excluir-select">
                <option value="0">Nenhum</option>
                <?php foreach($projects as $data) { ?>
                    <option value="<?=$data['id']?>"><?=$data['id']?> - <?=$data['nome']?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-danger default-btn-submit">Excluir</button>
        </div>
    </form>




    <!-- FORM VER -->
    <form method="post" id="ver" class="default-form">
        <div class="form-group">
            <label for="ver-select">keyname do projeto:</label>
            <select class="form-control" id="ver-select">
                <option value="0">Nenhum</option>
                <?php foreach($projects as $data) { ?>
                    <option value="<?=$data['keyname']?>"><?=$data['id']?> - <?=$data['keyname']?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success default-btn-submit">Abrir página</button>
        </div>
    </form>

    
    <!-- FORMS DAS ATTS -->
    <div id="forms-att-area" class="default-form">
        <div id="buttons-att-area">
            <button type="button" class="btn btn-outline-primary" id="btn-att-criar">Criar att</button>
            <button type="button" class="btn btn-outline-info" id="btn-att-editar">Editar att</button>
            <button type="button" class="btn btn-outline-danger" id="btn-att-excluir">Excluir att</button>
        </div>



        <!-- ATT FORM CRIAR -->
        <form method="post" id="form-att-criar" class="default-att-form">
            <div class="form-group">
                <label for="descricao">ID do projeto</label>
                <select class="form-control" id="criar-att-select">
                    <option value="0">Nenhum</option>
                    <?php foreach($projects as $data) { ?>
                        <option value="<?=$data['id']?>"><?=$data['id']?> - <?=$data['nome']?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="nome-projeto">Título: </label>
                <input type="text" class="form-control" id="titulo-att-criar" aria-describedby="emailHelp" autocomplete="off">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição: </label>
                <textarea class="form-control" id="desc-att-criar" rows="10"></textarea>
            </div>

            <div class="form-group time-date-area">
                <input type="date" id="data-att-criar" class="form-control time-date">

                <input type="time" id="time-att-criar" class="form-control time-date" value="00:00">
            </div>

            <div class="form-group">
                <button type="input" class="btn btn-outline-primary default-btn-submit">Criar</button>
            </div>
        </form>



        <!-- ATT FORM EDITAR -->
        <form method="post" id="form-att-editar" class="default-att-form">
            <div class="form-group">
                <label for="descricao">ID da atualização</label>
                <select class="form-control" id="editar-att-select">
                    <option value="0">Nenhum</option>
                    <?php foreach($atts as $data) { ?>
                        <option value="<?=$data['id']?>"><?=$data['id']?> - <?=$data['titulo']?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="nome-projeto">Att do projeto: </label>
                <input class="form-control" type="text" readonly id="project-name-att">
            </div>

            <div class="form-group">
                <label for="nome-projeto">Título: </label>
                <input type="text" class="form-control" id="titulo-att-editar" aria-describedby="emailHelp" autocomplete="off">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição: </label>
                <textarea class="form-control" id="desc-att-editar" rows="10"></textarea>
            </div>

            <div class="form-group time-date-area">
                <input type="date" id="data-att-editar" class="form-control time-date">

                <input type="time" id="time-att-editar" class="form-control time-date" value="00:00">
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-outline-info default-btn-submit">Editar</button>
            </div>
        </form>




        <!-- FORM ATT EXCLUIR -->
        <form method="post" id="form-att-excluir" class="default-att-form">
            <div class="form-group">
                <label for="nome-projeto">Id da atualização: </label>
                <select class="form-control" id="att-excluir-select">
                    <option value="0">Nenhum</option>
                        <?php foreach($atts as $data) { ?>
                            <option value="<?=$data['id']?>"><?=$data['nome_projeto']?> =========== <?=$data['titulo']?></option>
                        <?php } ?>
                </select>
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-outline-danger default-btn-submit">Excluir</button>
            </div>
        </form>
    </div>


</body>
</html>