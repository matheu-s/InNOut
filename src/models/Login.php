<?php

loadModel('User');

class Login extends Model {

    public function validateLoginFields() {

        $errors = [];

        if(!$this->email) {
            $errors['email'] = 'Email field is mandatory. ';
        }

        if(!$this->password) {
            $errors['password'] = 'Please, inform the password.';
        }

        if (count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }

    public function checkLogin() {

        $this->validateLoginFields();

       $user = User::getOne('*', ['email' => $this->email]);

        if($user) {
            if($user->end_date) {
                throw new AppException('User deactivated');

            }
            if(password_verify($this->password, $user->password)){
                return $user;
            }
        }

        throw new AppException('User/Password invalid');
    }

}