<?php


/**
 * Responsible class for Database connection and communication
 * @version    Release: 1.0
 * @since      Class available since Release 1.0
 */
class Database {

    /**
     * Create connection with DB
     *
     * @return Object represents the connection to the MySQL Server
     *
     */
    public static function getConnection() {
        $envPath = realpath(dirname(__FILE__, 2) . '/etc/env.ini');
        $env = parse_ini_file($envPath);

        $conn = new mysqli($env['host'], $env['username'],
            $env['password'], $env['database']);

        if ($conn->connect_error) {
            die("Error: " . $conn->connect_error);
        }

        return $conn;
    }

    /**
     * Does something interesting
     *
     * @param string $sql Query that will be send to the server
     * @return object Database rows, can be empty
     */
    public static function getResultFromQuery($sql) {
        $conn = self::getConnection();
        $result = $conn->query($sql);

        return $result;
    }
}