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

    public static function get($columns = '*', $filters = []) {

        $objects = [];
        $result = static::getResultSetFromQuerySelect($columns, $filters);

        if($result) {
            $class = get_called_class();
            while($row = $result->fetch_assoc()) {
                $objects[] = new $class($row);
            }
        }

        return $objects;
    }

    public static function getOne($columns = '*', $filters = []) {

        $class = get_called_class();
        $result = static::getResultSetFromQuerySelect($columns, $filters);

        return $result ? new $class($result->fetch_assoc()) : null;

    }

    public static function getResultSetFromQuerySelect($columns = '*', $filters = [], $operator = '=', $combination = 'AND'){

        $sql = "SELECT ${columns} FROM " . static::$tableName;

        if (count($filters) > 0) {
            $filter = static::getFilters($filters, $operator, $combination);
            $sql .= $filter;
        }

        $result = Database::getResultFromQuery($sql);

        if ($result->num_rows === 0) {
            return null;
        }

        return $result;
    }

    //TODO: $combination logic advanced
    public static function getFilters($filters, $operator, $combination) {

        $filterString = ' WHERE 1=1';
        //considering only one operator for each WHERE
        foreach ($filters as $key => $value) {
            $filterString .= ' ' . $combination . ' ' . $key . $operator . static::getFormattedValue($value);
        }
        return $filterString;
    }

    private static function getFormattedValue($value) {

        if (is_null($value)) {
            return 'null';
        } elseif(is_string($value)) {
            return "'${value}'";
        } else {
            return $value;
        }
    }
}
