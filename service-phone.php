<?php
/*
    service-phone.php

    Simple PHP service for a phone exercies
*/

date_default_timezone_set("Europe/Stockholm");

// Load the phone data
$jsonString = file_get_contents("phone-list.json");
$phones = json_decode($jsonString);

$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'GET') {
     $typ = $_GET['typ'];
     $urval = $_GET['urval'];

     $result = getMarke($urval, $phones);
     echo json_encode($result);
}
else if ($method == 'POST') {
     die('NOT ALLOWED METHOD');
}
else {
     die('NOT ALLOWED METHOD');
}



//echo json_encode($phones);

function getMarke($urval, $phones) {
    $result = [];
    foreach ($phones as $phone) {
        if ($phone->marke == $urval) {
            $new = new StdClass();
            $new->model = $phone->model;
            $new->pris = $phone->pris;
            array_push($result, $new);
        }
    }
    //print_r($result);
    return $result;
}
