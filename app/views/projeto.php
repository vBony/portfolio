<h1>Nome do projeto: <?=$project['nome']?></h1>

<h3>Texto</h3>
<p><?=$project['texto']?></p>

<div>
    <span>Tags:</span>
    <ol>
        <?php foreach($tags as $data){ ?>
            <li><?=$data?></li>
        <?php } ?>
    </ol>
</div>