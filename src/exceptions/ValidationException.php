<?php

/**
 * Validates the exceptions
 *
 * @copyright  2022 Matheus de Souza
 * @version    Release: 1.0
 * @since      Class available since Release 1.0
 */
class ValidationException extends Exception {

    private $errors = [];

    public function __construct(
        $errors = [],
        $message = 'Validation error',
        $code = 0,
        $previous = null) {
        $this->errors = $errors;
        parent::__construct($message, $code, $previous);
    }

    public function getErrors() {
        return $this->errors;
    }

    public function getAttributeMessage($att) {
        return $this->errors[$att];
    }
}