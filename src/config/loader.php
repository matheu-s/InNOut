<?php

/**
 * Does something interesting
 *
 * @param String   $modelName name of model to be loaded
 *
 */
function loadModel($modelName) {
    require_once(MODEL_PATH . "/${modelName}.php");
}


/**
 * Does something interesting
 *
 * @param String   $viewName name of view to be loaded
 * @param Object   $params possible info/variables to be sent to view
 *
 */
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


/**
 * Does something interesting
 *
 * @param String   $viewName name of view to be loaded
 * @param Object   $params possible info/variables to be sent to view
 *
 */
function loadTemplateView($viewName, $params = []) {
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