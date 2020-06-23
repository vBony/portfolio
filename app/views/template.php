<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site top</title>
</head>
<body>
    <h3>Topo do site</h3>
    <a href="<?=BASE_URL?>">Home</a>
    <a href="<?=BASE_URL?>galeria">Galeria</a>
    <hr>

    <?php $this->loadViewInTemplate($viewName, $dataView) ?>
</body>
</html>