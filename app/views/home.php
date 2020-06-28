<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>vbony</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="<?=BASE_URL?>app/assets/frameworks/bootstrap.min.css">
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/frameworks/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/frameworks/bootstrap.min.js"></script> 	
    <link rel="stylesheet" href="<?=BASE_URL?>app/assets/css/home.css">
    <meta name="copyright" content="© 2020 Vinicius de A. Ferreira" />
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/js/home.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="<?=BASE_URL?>/app/assets/frameworks/sweetalert2.all.min.js"></script>
    <link rel="shortcut icon" href="<?=BASE_URL?>/app/assets/images/logo_shortcut.png" type="image/x-icon" />
</head>

<body>
    <div id="header">
        <div id="header-wrap">
            <div id="logo-area">
                <div id="logo">vbony</div>
            </div>

            <div id="menu-area">
                <nav>
                    <a href="#s_home" class="menu-header-item">Início</a>
                    <a href="#s_about_me" class="menu-header-item">Sobre</a>
                    <a href="#s_projects" class="menu-header-item">Projetos</a>
                    <a href="#s_contact" class="menu-header-item">Contato</a>
                </nav>
            </div>
        </div>
    </div>

    <section id="s_home">
        <div class="content-wrapper">
            <div id="box-subheader">
                <div id="box-text">
                    <div id="name-subheader">Vinicius de Assis</div>
                    <div id="profession">Desenvolvedor Backend</div>
                    <div id="text-subheader">
                        Como um bom entusiasta e amante da área de 
                        tecnologia, estudo programação na maior 
                        parte do tempo, buscando sempre estar atualizado 
                        sobre as tecnologias em alta no mercado por conta 
                        própria. Conheci o mundo da programação por conta 
                        dos jogos por volta de 3 anos atrás. Atualmente curso
                        Análise e Desenvolvimento de Sistemas na FAEL.
                    </div>
                    <div id="subheader-contacts">
                        <div class="row-contact">
                            <i class="fa fa-envelope" aria-hidden="true" id="email-icon"></i>
                            <span id="email-sh">contato.vinicius-af@outlook.com</span>
                        </div>

                        <div class="row-contact">
                            <i class="fa fa-phone" id="tel-icon"></i>
                            <span id="tel-sh">+55 62 9 9611-4399</span>
                        </div>

                        <div class="row-contact">
                            <i class="fas fa-map-marker-alt" id="adr-icon"></i>
                            <span id="adr-sh">Goiânia, GO</span>
                        </div>
                    </div>

                    <div id="social-medias-wrapper">
                        <i class="fab fa-github"></i>
                        <i class="fab fa-telegram"></i>
                        <i class="fas fa-envelope"></i>
                        <i class="fas fa-download"></i>
                    </div>
                    
                </div>

                <div id="box-img">
                    <img src="<?=BASE_URL?>/app/assets/images/avatar2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>




    <section id="s_about_me">
        <div class="content-wrapper about-me">
            <div id="box-am">
                <div id='box-img-am'>
                    <img src="<?=BASE_URL?>/app/assets/images/web-developer-vector.png" alt="">
                </div>

                <div id="box-text-am">
                    <h2>Sobre mim</h2>
                    <div id="text-am">
                        Olá, me chamo Vinicius! Tenho um bom conhecimento e desenvolvimento WEB,
                        me capacitando de desenvolver aplicações robustas com as tecnologias: 
                    </div>
                    <div id="tags-am">
                        <div class="tags">php</div>
                        <div class="tags">mysql</div>
                        <div class="tags">html/css</div>
                        <div class="tags">bootstrap 4</div>
                        <div class="tags">javascript</div>
                        <div class="tags">jquery</div>
                        <div class="tags">mvc</div>
                        <div class="tags">git</div>
                    </div>

                    <div id="download-btn-area">
                        <button id="download-cv-btn">Download CV <i class="fas fa-download"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section id="s_projects">
        <div class="content-wrapper projects">
            <h3>Meus Projetos</h3>

            <div class="box-projects">
                <h4>benurse</h4>

                <p>
                    Lorem Ipsum is simply dummy text of the printing 
                    and typesetting industry. Lorem Ipsum has been 
                    the industry's standard dummy text ever since the 
                    1500s, when an unknown printer took a galley of 
                    type and scrambled it to make a type specimen book.
                </p>

                <div class="tags-area">
                    <div class="tags">php</div>
                </div>

                <div class="btns-area-project">
                    <button class="btns-project">Mais informações</button>
                </div>
            </div>
        </div>
    </section>




    <section id="s_contact">
        <div class="content-wrapper contac">
            <h3>Contato</h3>

            <div id="contact-boxes-area">
                <div class="box-contact">
                    <div class="icon-area-bc">
                        <i class="fas fa-location-arrow"></i>
                    </div>

                    <div class="info-area-bc">
                        <h4>Endereço</h4>
                        <span>Cj. Hb. Jardim Sabiá,<br> Senador Canedo - GO</span>
                    </div>
                </div>

                <div class="box-contact">
                    <div class="icon-area-bc">
                        <i class="far fa-envelope"></i>
                    </div>

                    <div class="info-area-bc">
                        <h4>Email</h4>
                        <span>contato.vinicius-af@outlook.com</span>
                        <span>contato@vbony.me</span>
                    </div>
                </div>

                <div class="box-contact">
                    <div class="icon-area-bc">
                        <i class="fas fa-phone"></i>
                    </div>

                    <div class="info-area-bc">
                        <h4>Telefone</h4>
                        <span>(62) 9 9611-4399</span>
                    </div>
                </div>
            </div>

            <div id="area-form-map">
                <form  method="post" id='enviar-email'>
                    <div id="form-name-area">
                        <input type="text" id="f_name" class="default-input name" placeholder="Nome" autocomplete="off">
                        <input type="text" id="l_name" class="default-input name" placeholder="Sobrenome" autocomplete="off">
                    </div>
                    <span class="error-msg name"></span>

                    <input type="email" id="email" placeholder="Seu email" class="default-input">
                    <span class="error-msg email"></span>

                    <textarea id="msg" cols="20" rows="10" class="default-input txt" placeholder="Sua mensagem"></textarea>
                    <span class="error-msg txt"></span>

                    <div class="g-recaptcha" data-sitekey="6LdgX6oZAAAAAFUGAd4pLUL2u1kev-vHmoq2poWA" id="recaptcha" data-theme="dark"></div>
                    <div class="error-msg captcha"></div>

                    <button type="submit" id="btn-submit">Enviar mensagem</button>
                </form>

                

                <div id="map-area">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.5014476371325!2d-49.103503334584104!3d-16.701813450376694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ee8962d66db23%3A0x26f4f70822823ec1!2sConj.%20Sabia%2C%20Sen.%20Canedo%20-%20GO%2C%2075250-000!5e0!3m2!1spt-BR!2sbr!4v1593287732219!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>
</body>
