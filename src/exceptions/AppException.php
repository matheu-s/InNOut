<?php


/**
 * Custom exception type
 *
 * @version    Release: 1.0
 * @since      Class available since Release 1.0
 */
class AppException extends Exception {

    /**
     * Does something interesting
     *
     * @param String $message  Error message
     * @param Integer $code Error code
     * @param Boolean $previous
     *
     */
    public function __construct($message, $code = 0, $previous = null) {
        parent::__construct($message, $code, $previous);

    }
}