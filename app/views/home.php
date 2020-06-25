<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Vinicius de A. Ferreira - Portfólio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=BASE_URL?>app/assets/frameworks/bootstrap.min.css">
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/frameworks/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/frameworks/bootstrap.min.js"></script> 	
    <link rel="stylesheet" href="<?=BASE_URL?>app/assets/css/home.css">
    <meta name="copyright" content="© 2020 Vinicius de A. Ferreira" />
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/js/home.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <div id="header-background">
        <div id="contentheader">
            <div id="img"><img src="<?=BASE_URL?>app/assets/images/avatar.png" alt=""></div>
            <div id="personaldata">
                <div id="name">Vinicius de Assis</div>
                <div id="profissao">Desenvolvedor Backend</div>
                <div id="contacts">
                    <div id="linkedinicon" class="headericons"><a href="https://www.linkedin.com/in/vinicius-de-assis-ferreira-309487186/" target="_blank"><img src="<?=BASE_URL?>app/assets/images/linkedin.png" alt=""></a></div>
                    <div id="githubicon" class="headericons"><a href="https://github.com/vbony" target="_blank"><img src="<?=BASE_URL?>app/assets/images/github.png" alt=""></a></div>
                    <div id="email" class="headericons"><a href="http://" target="_blank"><img src="<?=BASE_URL?>app/assets/images/mail.png" alt=""></a></div>
                </div>

                
            </div>
        </div>
    </div>
</header>

<!-- <iframe id="telegram" style="border:0px;height:500px;width:400px;margin:5px;box-shadow: 0 0 16px 3px rgba(0,0,0,.2);" src="https://xn--r1a.website/s/v_bony"></iframe> -->
<div id="contrate-me-area">
    <button id="contrate-me-btn"><img src="<?=BASE_URL?>app/assets/images/telegram-logo.png" alt=""> <div>Contrate-me</div></button>
</div>

<div id="contentbackground">
    <div id="grid1">
        <div id="sobremim" class="default-box-grid-1">
            <div class="default-title">Sobre mim</div>
            <p class="default-text">
            Apaixonado por desenvolvimento em geral, porém focado em desenvolvimento Web, especificamente 
            no backend, também possuo conhecimento sólido no frontend. Atualmente desenvolvo utilizando 
            PHP com paradigma orientado a objetos com MVC. Possuo conhecimento suficiente no frontend 
            para criar interfaces interativas e responsivas. Busco conhecimento de forma autodidata e 
            através de cursos.
            </p>
        </div>

        <div id="projetos" class="default-box-grid-1">
            <div class="default-title">Meus projetos</div>

            <div class="row-projeto">
                <div class="box-content">
                    <div class="projeto-nome">Lore Ipsum</div>

                    <div class="projeto-text">
                        Lorem Ipsum is simply dummy text of the printing and 
                        typesetting industry. Lorem Ipsum has been the 
                        industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and 
                        scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and 
                        typesetting industry.
                    </div>

                    <div class="projeto-tags">
                        <div class="tag">PHP</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="grid2">
        <div id="localemail">
            <div id="linhaendereco">
                <div id="linhaenderecoimg"><img src="<?=BASE_URL?>app/assets/images/placeholder.png" alt=""></div>
                <div id="linhaenderecotxt">     <p>Goiânia, GO</p>    </div>
            </div>
        </div>

        <div id="skills">
        <div class="default-title">Skills</div>
            <div id="listaskills">
                <div id="separatorskills"></div>
                <ul style="list-style-type:none;">
                    <li class="liSkills">HTML5/CSS3/Bootstrap 4</li>
                    <li class="liSkills">PHP 7</li>
                    <li class="liSkills">Jquery</li>
                    <li class="liSkills">Javascript</li>
                    <li class="liSkills">Git</li>
                    <li class="liSkills">MySql</li>
                </ul>
            </div>
        </div>

        <div id="educacao">
            <div class="default-title">Educação</div>
            <div class="block-educ">
                <div class="name-educ">Análise e Desenvolvimento de Sistemas</div>
                <div class="year-school">(FAEL, 2019 - até o momento)</div>
                <div class="separator-educ"></div>
            </div>
        </div>

    </div>
</div>


    
</body>
</html>