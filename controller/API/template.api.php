<?php
define(__DIR__,"","/var/www/html/TCC");
include __DIR__."/model/api.class.php";
// Handling data in JSON format on the server-side using PHP
//
/*
Encondings: 
    ##"/[^0-9a-zA-Z@-Z.]/" only letter, numbers and "@"s, "."s
    ##"/[^[:alpha:]_]/" only letter, numbers
    ##"/[^0-9]/" only numbers
*/
header("Content-Type: application/json");
$type_requesition = "POST";
$encoding = "/[^0-9a-zA-Z@-Z.]/";
$api = new api($type_requesition,$encoding);

// encode the PHP variable to JSON and send it back on client-side
echo json_encode($api->result());
?>
