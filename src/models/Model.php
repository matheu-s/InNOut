<?php

class Model {
    protected static $tableName = '';
    protected static $columns = [];
    protected $values = [];

    public function __construct($arr) {
        $this->loadFromArray($arr);
    }

    public function loadFromArray($arr) {
        if ($arr) {
            foreach($arr as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    public function __get($key) {
        if(!($key)) {
            return false;
        }
        return $this->values[$key];
    }

    public function __set($key, $value) {
        $this->values[$key] = $value;
    }
}
