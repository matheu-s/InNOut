<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="assets/css/comum.css" >
    <link rel="stylesheet" href="assets/css/icofont.min.css" >
    <link rel="stylesheet" href="assets/css/login.css" >
    <title>In N' Out</title>
</head>
<body>
    <form class="form-login" action="#" method="post">
        <div class="login-card card">
            <div class="card-header">
                <i class="icofont-travelling mr-2"></i>
                <span class="font-weight-light">In</span>
                <span class="font-weight-bold mx-1">N'</span>
                <span class="font-weight-light">Out</span>
                <i class="icofont-runner-alt-1 ml-2"></i>
            </div>
            <div class="card-body">
                <?php include(VIEW_PATH . '/templates/messages.php') ?>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email"
                    class="form-control <?= isset($exceptionValidation) && $exceptionValidation->getAttributeMessage('email') ? 'is-invalid ':'' ?>"
                    placeholder="Your e-mail here"
                    autofocus
                    value="<?= $email?>">
                    <div class="invalid-feedback">
                        <?= isset($exceptionValidation) && $exceptionValidation->getAttributeMessage('email') ?$exceptionValidation->getAttributeMessage('email')  :'' ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password"
                           class="form-control <?= isset($exceptionValidation) && $exceptionValidation->getAttributeMessage('password') ? 'is-invalid ':'' ?>"
                           placeholder="Password">
                    <div class="invalid-feedback">
                        <?= isset($exceptionValidation) && $exceptionValidation->getAttributeMessage('password') ?$exceptionValidation->getAttributeMessage('password') :'' ?>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-lg btn-primary">Enter</button>
            </div>
        </div>
    </form>
</body>
</html>