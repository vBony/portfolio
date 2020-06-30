<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>vbony - <?=$project['nome']?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=BASE_URL?>app/assets/frameworks/bootstrap.min.css">
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/frameworks/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/frameworks/bootstrap.min.js"></script> 	
    <link rel="stylesheet" href="<?=BASE_URL?>app/assets/css/projeto.css">
    <meta name="copyright" content="© 2020 Vinicius de A. Ferreira" />
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/js/projeto.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>

<body>
        <header>
            <div class="wrapper-content header">
                    <div id="logo-area">
                        <div id="btn-voltar">
                            <i class="fas fa-angle-left"></i>
                        </div>

                        <div id="logo">vbony</div>
                        <div id="session-logo">projeto</div>
                    </div>

                <div id="menu-area">
                    <nav>
                        <a href="" class="nav-items">Sobre</a>
                        <a href="" class="nav-items">Fotos</a>
                        <a href="" class="nav-items">Atualizações</a>
                    </nav>
                </div>
            </div>
        </header>

        <section id="s_sobre">
            <div class="wrapper-content sobre">
                
                <div class="grid-principal">
                    <h2 class=principal-title><?=$project['nome']?></h2>
                    <div id="text-area">
                        <?=$project['texto']?>
                    </div>

                    <div class="default-subtitle">Lorem ipsum</div>
                </div>
                <div class="grid-secondary">
                    <div class="gs-wrapper tecnologias">
                        <h4 class="box-title">Tecnologias</h4>
                        <div id="tec-area">
                            <?php $local_tags = explode(',', $project['tags']);?>
                            <?php foreach($local_tags as $data) {?>
                                <span><?=$data?></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="s_fotos">
            <div class="wrapper-content fotos">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                        <li data-target="#carousel" data-slide-to="3"></li>
                        <li data-target="#carousel" data-slide-to="4"></li>
                        <li data-target="#carousel" data-slide-to="5"></li>
                        <li data-target="#carousel" data-slide-to="6"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox" id="teste">
                        <div class="carousel-item active">
                            <div class="img"><img class="rounded mx-auto d-block img-fluid" src="https://picsum.photos/1280/720?random=1" alt="First slide"></div>
                        </div>

                        <div class="carousel-item">
                            <div class="img"><img class="rounded mx-auto d-block img-fluid" src="https://picsum.photos/1280/720?random=2" alt="Second slide"></div>
                        </div>

                        <div class="carousel-item">
                            <div class="img"><img class="rounded mx-auto d-block img-fluid" src="https://picsum.photos/1280/720?random=3" alt="Third slide"></div>
                        </div>

                        <div class="carousel-item">
                            <div class="img"><img class="rounded mx-auto d-block img-fluid" src="https://picsum.photos/1280/720?random=4" alt="Third slide"></div>
                        </div>

                        <div class="carousel-item">
                            <div class="img"><img class="rounded mx-auto d-block img-fluid" src="https://picsum.photos/1280/720?random=5" alt="Third slide"></div>
                        </div>

                        <div class="carousel-item">
                            <div class="img"><img class="rounded mx-auto d-block img-fluid" src="https://picsum.photos/1280/720?random=6" alt="Third slide"></div>
                        </div>

                        <div class="carousel-item">
                            <div class="img"><img class="rounded mx-auto d-block img-fluid" src="https://picsum.photos/1280/720?random=7" alt="Third slide"></div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </section>


</body>

</html>