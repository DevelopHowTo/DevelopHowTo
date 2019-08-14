<?php
error_reporting(E_ERROR | E_PARSE);
$db['db_host'] = "localhost";
$db['db_user'] = "artedruv_aakash";
$db['db_pass'] = "xX6AFRW-,{3q";
$db['db_name'] = "artedruv_develophowto";

foreach($db as $key => $value){
    
    define(strtoupper($key), $value);
}

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

?>