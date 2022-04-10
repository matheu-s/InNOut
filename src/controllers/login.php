<?php

loadModel('Login');


if(count($_POST) > 0) {

    $login = new Login($_POST);

    try {
        $user = $login->checkLogin();
        header("Location: day_records.php");
    } catch (ValidationException $e) {
        $exceptionValidation = $e;
    } catch (AppException $e) {
        $exception = $e;
    }

}

//todo: load the specific messages email/pwd above each box

loadView('login', $_POST + ['exception' => $exception] + ['exceptionValidation' => $exceptionValidation]);