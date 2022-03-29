<?php

function loadModel($modelName) {
    require_once(MODEL_PATH . "/${modelName}.php");
}

function loadView($viewName, $params = []) {
    //transform $params into variables to be used in View
    if(count($params) > 0) {
        foreach ($params as $key => $value) {
            if(strlen($key)) {
                ${$key} = $value;
            }
        }
    }

    require_once(VIEW_PATH . "/${viewName}.php");
}