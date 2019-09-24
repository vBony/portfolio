<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Vinicius: Portifólio</title>
    <meta name="author" content="Vinicius de Assis Ferreira">
    <meta http-equiv="content-language" content="pt-br, en-US, fr" />
    <meta name="copyright" content="© 2019 Vinicius F." />
    <link rel="stylesheet" href="bootstrap.min.css">
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 

</head>

<body>
<div id="mainbody">
<!-- CABEÇALHO COMEÇA AQUI -->
<header>
    <div id="cabecalho">
        <div id="cabecalhoinv">
            <div id="menu">
                <div class="menuobj" id="exobj">Sobre</div>
                <div class="menuobj" onclick="window.location.href = 'http://pt.stackoverflow.com'">Projetos</div>
                <div class="menuobj">Resumo</div>
                <div class="menuobj">Contato</div>
            </div>
        </div>
    </div>
</header>
<!-- CABEÇALHO TERMINA AQUI -->

<!-- SUB CONTENT COMEÇA AQUI -->
<div id="subcontent">
    <div id="subcontentinv">
        
        <div id="foto">
            <img class="img-responsive" src="imgs/foto_perfil.jpg" alt="" id="ofoto">
        </div>

        <div id="conttext">
            <div id="text1">What is Lorem Ipsum?</div>
            <div id="textname">VINICIUS DE ASSIS FERREIRA</div>
            <div id="text3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Cras in magna ornare, interdum lorem sit amet, congue libero.
                Mauris quis lectus quis quam commodo bibendum. Suspendisse
                a maximus ante. Morbi id erat quis libero maximus fringilla.
                Mauris vulputate libero nec dolor imperdiet elementum.
                Mauris nibh enim, fermentum quis ipsum in, malesuada
                placerat ipsum. Morbi convallis dapibus diam et
                sollicitudin. Etiam vel augue suscipit metus posuere commodo.
            </div>
            <div id="btncontrato">Contrate-me</div>
        </div>
    </div>
</div>
<!-- SUB CONTENT TERMINA AQUI -->

<div id="midcontent">
    <div id="overview">
        <div id="OVinv">
            <div id="OVtitle">Visão Geral Técnica</div>
            <div id="OVtext">
            Lorem Ipsum is simply dummy text of the printing and typesetting 
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of type 
            and scrambled it to make a type specimen book. It has survived not 
            only five centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged. It was popularised in the 1960s with 
            the release of Letraset sheets containing Lorem Ipsum passages, and 
            more recently with desktop publishing software like Aldus PageMaker 
            including versions of Lorem Ipsum.
            </div>
        </div>
    </div>
    <br>
    <br><br><br>
    <div id="OVtitle">Conhecimentos específicos</div>


    <div class="row contentlings">

        <div class="col-sm-4">
            <button type="button" class="butlings" data-toggle="collapse" data-target="#frontend">Front-end</button>
            <div id="frontend" class="collapse">
                <ul class="list-group listalings">
                    <li class="list-group-item linhalings">
                        <img src="imgs/checked.png" alt="">       
                        <p class="textlings">HTML/CSS</p>
                    </li>
                    <li class="list-group-item linhalings">
                        <img src="imgs/checked.png" alt="">    
                        <p class="textlings">Javascript</p>
                    </li>
                    <li class="list-group-item linhalings">
                        <img src="imgs/checked.png" alt="">       
                        <p class="textlings"> Jquery</p>
                    </li>
                    <li class="list-group-item linhalings">
                        <img src="imgs/checked.png" alt="">      
                        <p class="textlings"> Bootstrap</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-sm-4">
            <button type="button" class="butlings" data-toggle="collapse" data-target="#backend">Back-end</button>
            <div id="backend" class="collapse">
                <ul class="list-group listalings">
                    <li class="list-group-item linhalings">
                        <div><img src="imgs/checked.png" alt=""></div>
                        <p class="textlings">PHP</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-sm-4">
            <button type="button" class="butlings" data-toggle="collapse" data-target="#outros">Outros</button>
            <div id="outros" class="collapse">
                <ul class="list-group listalings">
                    <li class="list-group-item linhalings">
                        <img src="imgs/checked.png" alt="">   
                        <p class="textlings">MySQL</p>
                    </li>
                    <li class="list-group-item linhalings">
                        <div><img src="imgs/checked.png" alt=""></div>
                        <p class="textlings">Versionamento com GitHub</p>
                    </li>
                </ul>
            </div>
        </div>

    </div> 
    
    <div class="container">
        <div id="PRJtitle">Meus Últimos Projetos</div>

        <div class="projsArea" id="projsL1">

            <div class="boxproj">
                <img class="imgprojs img-responsive center-block" src="slideshow/1.jpg" alt="">
                <div class="projtitlearea">Lore Ipsum</div>
                <div class="projtxtarea">
                    <br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting 
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type 
                    and scrambled it to make a type specimen book.
                </div>
            </div>

            <div class="boxproj">
                <img class="imgprojs img-responsive center-block" src="slideshow/1.jpg" alt="">
                <div class="projtitlearea">Lore Ipsum</div>
                <div class="projtxtarea">
                    <br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting 
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type 
                    and scrambled it to make a type specimen book.
                </div>
            </div>

        </div>

        <div class="projsArea" id="projsL2">
        
            <div class="boxproj">
                <img class="imgprojs img-responsive center-block" src="slideshow/1.jpg" alt="">  
                <div class="projtitlearea">Lore Ipsum</div>
                <div class="projtxtarea">
                    <br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting 
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type 
                    and scrambled it to make a type specimen book.
                </div>
            </div>

            <div class="boxproj">
                <img class="imgprojs img-responsive center-block" src="slideshow/1.jpg" alt="">
                <div class="projtitlearea">Lore Ipsum</div>
                <div class="projtxtarea">
                    <br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting 
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type 
                    and scrambled it to make a type specimen book.
                </div>
            </div>
        </div>
        
    </div>


</div>
</div>

</div>

</body>

</html>