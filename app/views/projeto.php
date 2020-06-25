<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Projeto: <?=$project['nome']?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=BASE_URL?>app/assets/frameworks/bootstrap.min.css">
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/frameworks/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/frameworks/bootstrap.min.js"></script> 	
    <link rel="stylesheet" href="<?=BASE_URL?>app/assets/css/projeto.css">
    <meta name="copyright" content="© 2020 Vinicius de A. Ferreira" />
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/js/projeto.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
</head>

<body>
    <div id="contrate-me-area">
        <button id="contrate-me-btn"><img src="<?=BASE_URL?>app/assets/images/telegram-logo.png" alt=""> <div>Contrate-me</div></button>
    </div>


    <div id="header-div">
        <a href="<?=BASE_URL?>" class="previous" id="previous-btn">&laquo; Voltar</a>
    </div>

    <div id="content-wrapper">
        <div class="default-box">
            <div class="default-title"><?=$project['nome']?></div>
            <div class="default-subtitle">Teste</div>
            <div class="default-paragraph">
                Lorem Ipsum is simply dummy text of the printing and 
                typesetting industry. Lorem Ipsum has been the industry's 
                standard dummy text ever since the 1500s, when an unknown 
                printer took a galley of type and scrambled it to make a 
                type specimen book. It has survived not only five 
                centuries, but also the leap into electronic typesetting, 
                remaining essentially unchanged. It was popularised in 
                the 1960s with the release of Letraset sheets containing 
                Lorem Ipsum passages, and more recently with desktop 
                publishing software like Aldus PageMaker including versions 
                of Lorem Ipsum.
            </div>

            <div class="default-paragraph">
                Contrary to popular belief, Lorem Ipsum is not simply random 
                text. It has roots in a piece of classical Latin literature 
                from 45 BC, making it over 2000 years old. Richard McClintock, 
                a Latin professor at Hampden-Sydney College in Virginia, 
                looked up one of the more obscure Latin words, consectetur, 
                from a Lorem Ipsum passage, and going through the cites of 
                the word in classical literature, discovered the undoubtable 
                source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 
                of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) 
                by Cicero, written in 45 BC. This book is a treatise on the 
                theory of ethics, very popular during the Renaissance. 
                The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", 
                comes from a line in section 1.10.32.
            </div>

            <div class="default-subtitle">Lorem Ipsum</div>

            <div class="default-paragraph">
                There are many variations of passages of Lorem Ipsum available, 
                but the majority have suffered alteration in some form, by 
                injected humour, or randomised words which don't look even 
                slightly believable. If you are going to use a passage of 
                Lorem Ipsum, you need to be sure there isn't anything embarrassing 
                hidden in the middle of text. All the Lorem Ipsum generators 
                on the Internet tend to repeat predefined chunks as necessary, 
                making this the first true generator on the Internet. It uses 
                a dictionary of over 200 Latin words, combined with a handful 
                of model sentence structures, to generate Lorem Ipsum which 
                looks reasonable. The generated Lorem Ipsum is therefore always 
                free from repetition, injected humour, or non-characteristic words etc.
            </div>
        </div>

        <div class="default-box">
            <div class="default-title">Tecnologias utilizadas</div>

            <div id="tags-area">
                <?php foreach($tags as $data){ ?>
                    <div class="tag"><?=$data?></div>
                <?php } ?>
            </div>
        </div>

        <div class="default-box">
        <div class="default-title">Últimas atualizações</div>
            <div class="att-box">
                <div class="header-att">
                    <div class="att-title">Lorem ipsum</div>
                    <div class="date-att">00/00/00 ás 00:00</div>
                </div>

                <div class="body-att">
                    <div class="text-att">
                        Lorem ipsum dolor sit amet, consectetur adipiscing 
                        elit. Nunc neque erat, consectetur quis volutpat non, 
                        molestie molestie nisi. Curabitur sodales, neque a 
                        ultrices malesuada, leo eros sagittis est, ut sodales 
                        augue orci a tortor. Pellentesque id interdum nisl. 
                        Sed a mattis nisi, at interdum neque.
                    </div>
                </div>
            </div>
        </div>

    </div>

    
</body>


<!-- <h1>Nome do projeto: <?=$project['nome']?></h1>

<h3>Texto</h3>
<p><?=$project['texto']?></p>

<div>
    <span>Tags:</span>
    <ol>
        <?php foreach($tags as $data){ ?>
            <li><?=$data?></li>
        <?php } ?>
    </ol>
</div> -->