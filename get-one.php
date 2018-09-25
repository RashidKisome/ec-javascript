<?php
/*
    Get Data Sample
*/

$replyData = new StdClass();
$replyData->first_name = 'Karl';
$replyData->last_name = 'Karlsson';
$replyData->email = 'karl.karlsson@gmail.com';
$replyData->salary = '35000';

echo json_encode($replyData);
