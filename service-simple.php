<?php
/*
    service-simple.php

    Simple PHP service for a phone exercies
*/

date_default_timezone_set("Europe/Stockholm");

// Load the phone data
$jsonString = file_get_contents("phone-list.json");
$phones = json_decode($jsonString);

$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'GET') {
    echo json_encode($phones);
}
else if ($method == 'POST') {
     die('NOT ALLOWED METHOD');
}
else {
     die('NOT ALLOWED METHOD');
}
