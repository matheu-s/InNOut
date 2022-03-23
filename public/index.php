<?php

require_once(dirname(__FILE__, 2) . '/src/config/database.php');

$request = 'select * from users';
$result = Database::getResultFromQuery($request);

$arr = [1,2,3,4];
while($rows = $result->fetch_assoc()) {
    print_r($rows);
    echo '<br>';
}





