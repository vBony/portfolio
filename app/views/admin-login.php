<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=BASE_URL?>app/assets/frameworks/bootstrap.min.css">
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/frameworks/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/frameworks/bootstrap.min.js"></script>
    <meta name="copyright" content="© 2020 Vinicius de A. Ferreira"/>
    <script type="text/javascript" src="<?=BASE_URL?>app/assets/js/admin-login.js"></script>
    <link rel="stylesheet" href="<?=BASE_URL?>app/assets/css/admin-login.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <title>Área do administrador</title>
</head>

<body>
    <h1 id="title">Bony Login</h1>
    <form id="login-form">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="senha">
    </div>

    <button type="submit" class="btn btn-primary" id="btn">Submit</button>
    </form>
</body>

</html>